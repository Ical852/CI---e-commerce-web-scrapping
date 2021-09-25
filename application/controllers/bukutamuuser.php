<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Bukutamuuser extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('bukutamuuser_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('userpage/headeruser');
        $this->load->view('userpage/bukutamuuser_view');
        $this->load->view('userpage/footeruser');
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->bukutamuuser_model->add();
    }

}