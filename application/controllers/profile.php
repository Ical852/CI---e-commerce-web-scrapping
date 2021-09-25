<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Profile extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('profile_model');
        $email = $this->session->userdata('email');
        $denial = $this->db->query("SELECT SUM(batal) AS batal FROM denied WHERE email = '$email' ")->row_array();
        $am = $this->profile_model->akses();
        $akses = $this->db->get_where('user_menu2', ['url' => 'profile' ])->row_array();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        } else if (!$am){
            redirect('auth/error404');
        } else if ($akses['is_active'] == 2){
            redirect('auth/error404');
        } else if ($denial['batal'] >= 5){
            redirect('auth/denied');
        }
    }

	public function index()
	{
        $role = $this->session->userdata('role_id');
		$data['title'] = 'Dashboard';
        $data['role'] = $this->db->get_where('user_role', ['id' => $role ])->row_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('header',$data);
        $this->load->view('profile_view',$data);
        $this->load->view('footercontent',$data);
	}

  public function add()
  {
      if (!isset($_POST))
        show_404();
        
        $this->profile_model->add();
  }

  public function upload()
  {
    $email = $this->input->post('email');
    $image = $_FILES['image'];
    if($image = ''){} else {
        $config['upload_path'] = './assets/img/profile';
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('image')){
            echo "Upload Gagal"; die();
        } else {
            $image=$this->upload->data('file_name');
        }
    }

    $data = array(
        'email' => $email,
        'image' => $image
    );

    $this->db->where('email', $email);
    $this->db->update('user', $data);
    redirect('profile');

  }

  public function changepassword()
  {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('current_password', 'Password Saat Ini', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'Password Bari', 'required|trim|min_length[8]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Konfirmasi Password', 'required|trim|min_length[8]|matches[new_password1]');

        if ($this->form_validation->run() == false){
            $this->load->view('header',$data);
            $this->load->view('changepw',$data);
            $this->load->view('footercontent',$data);
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if(!password_verify($current_password, $data['user']['password'])){
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password Terkini Salah! </div>');
                redirect('profile/changepassword');
            } else {
                if($current_password == $new_password){
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password Baru Tidak Boleh Sama Dengan Yang Lama! </div>');
                    redirect('profile/changepassword');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Password Berhasil Di Perbarui! </div>');
                    redirect('profile/changepassword');
                }
            }
        }
        
  }


}