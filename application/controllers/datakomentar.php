<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Datakomentar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('datakomentar_model');
        $email = $this->session->userdata('email');
        $denial = $this->db->query("SELECT SUM(batal) AS batal FROM denied WHERE email = '$email' ")->row_array();
        $am = $this->datakomentar_model->akses();
        $akses = $this->db->get_where('user_menu3', ['url' => 'datakomentar' ])->row_array();
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
        $data['datanamacabe'] = $this->datakomentar_model->getData2();
    	$data['title'] = 'Data Komentar';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('headercontrol', $data);
        $this->load->view('menu', $data);
        $this->load->view('datakomentar_view', $data);
        $this->load->view('footercontent',$data);
    }

    public function daftar_data()
    {
      echo $this->datakomentar_model->getData();
    }
    
    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->datakomentar_model->add();
    }
   
    public function hapus()
    {
        if (!isset($_POST))
        show_404();
        $this->datakomentar_model->hapus();  
    }

}