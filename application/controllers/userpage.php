<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userpage extends CI_Controller 

{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('bukutamuuser_model');
		$this->load->model('shopuser_model');
	}

	public function index()
	{
		$data['cabe'] = $this->shopuser_model->show_data()->result();
		$data['cabe2'] = $this->shopuser_model->show_data2()->result();
		$data['cabe3'] = $this->shopuser_model->show_data3()->result();
		$data['cabe4'] = $this->shopuser_model->show_data4()->result();
		$data['top'] = $this->shopuser_model->show_data5();
		$this->load->view('userpage/headeruser',$data);
      	$this->load->view('userpage/contentuser',$data);
      	$this->load->view('modalproductcontent',$data);
     	$this->load->view('userpage/footerusercontent',$data);
	}

	public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->bukutamuuser_model->add();
    }


}