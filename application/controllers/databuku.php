<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Databuku extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('databuku_model');
        $email = $this->session->userdata('email');
        $denial = $this->db->query("SELECT SUM(batal) AS batal FROM denied WHERE email = '$email' ")->row_array();
        $am = $this->databuku_model->akses();
        $akses = $this->db->get_where('user_menu3', ['url' => 'databuku' ])->row_array();
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
    	$data['title'] = 'Data Cabe';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('headercontrol', $data);
		$this->load->view('menu', $data);
		$this->load->view('databuku_view', $data);
		$this->load->view('footer',$data);
    }

    public function daftar_data()
    {
      echo $this->databuku_model->getData();
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->databuku_model->add();
    }

    public function hapus()
    {
        if (!isset($_POST))
        show_404();
        $this->databuku_model->hapus();  
    }

}