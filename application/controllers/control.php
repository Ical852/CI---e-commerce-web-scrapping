<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('control_model');
        $email = $this->session->userdata('email');
        $denial = $this->db->query("SELECT SUM(batal) AS batal FROM denied WHERE email = '$email' ")->row_array();
        $am = $this->control_model->akses();
        $akses = $this->db->get_where('user_menu', ['url' => 'control' ])->row_array();
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
        $data['datanamacabe'] = $this->control_model->getData2();
    	$data['title'] = 'Data Cabe';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('headercontrol', $data);
		$this->load->view('menu', $data);
		$this->load->view('control_view', $data);
		$this->load->view('footercontent',$data);
    }

    public function daftar_data()
    {
      echo $this->control_model->getData();
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->control_model->add();
    }

    public function hapus()
    {
        if (!isset($_POST))
        show_404();
        $this->control_model->hapus();  
    }

    public function ganti()
  {
    $nama_cabe = $this->input->post('nama_cabe');
    $img = $_FILES['img'];
    if($img = ''){} else {
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('img')){
            echo "Upload Gagal"; die();
        } else {
            $img=$this->upload->data('file_name');
        }
    }

    $data = array(
        'nama_cabe' => $nama_cabe,
        'img' => $img
    );

    $this->db->where('nama_cabe', $nama_cabe);
    $this->db->update('produk_kita', $data);
    redirect('control');

  }

}