<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Menuaccess extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('menuaccess_model');
        $email = $this->session->userdata('email');
        $denial = $this->db->query("SELECT SUM(batal) AS batal FROM denied WHERE email = '$email' ")->row_array();
        $am = $this->menuaccess_model->akses();
        $akses = $this->db->get_where('user_menu3', ['url' => 'menuaccess' ])->row_array();
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
        $data['title'] = 'Akses Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('headercontrol', $data);
        $this->load->view('menu', $data);
        $this->load->view('menuaccess_view', $data);
        $this->load->view('footercontent',$data);
    }

    public function daftar_data()
    {
      echo $this->menuaccess_model->getData();
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->menuaccess_model->add();
    }

    public function hapus()
    {
        if (!isset($_POST))
        show_404();
        $this->menuaccess_model->hapus();  
    }

    public function daftar_data2()
    {
      echo $this->menuaccess_model->getData2();
    }

    public function add2()
    {
      if (!isset($_POST))
        show_404();
        
        $this->menuaccess_model->add2();
    }

    public function hapus2()
    {
        if (!isset($_POST))
        show_404();
        $this->menuaccess_model->hapus2();  
    }

    public function daftar_data3()
    {
      echo $this->menuaccess_model->getData3();
    }

    public function add3()
    {
      if (!isset($_POST))
        show_404();
        
        $this->menuaccess_model->add3();
    }

    public function hapus3()
    {
        if (!isset($_POST))
        show_404();
        $this->menuaccess_model->hapus3();  
    }

}