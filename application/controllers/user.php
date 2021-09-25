<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 

{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('control_model');
        $email = $this->session->userdata('email');
        $denial = $this->db->query("SELECT SUM(batal) AS batal FROM denied WHERE email = '$email' ")->row_array();
        $am = $this->control_model->akses1();
		$akses = $this->db->get_where('user_menu', ['url' => 'user' ])->row_array();
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
		$this->load->library('pagination');

		$config['base_url'] = 'http://localhost/CISmartweb/user/index';
		$config['total_rows'] = $this->control_model->countAllRecord();
		$config['per_page'] = 2;

		$config['full_tag_open'] = '<nav><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link ">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($config);


		$data['start'] = $this->uri->segment(3);
		$data['komen'] = $this->control_model->komenpage($config['per_page'] , $data['start']);

		$data['cabe'] = $this->shop_model->show_data()->result();
	    $data['cabe2'] = $this->shop_model->show_data2()->result();
	    $data['cabe3'] = $this->shop_model->show_data3()->result();
	    $data['cabe4'] = $this->shop_model->show_data4()->result();
	    $data['top'] = $this->shop_model->show_data5();

		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('headercontent',$data);
      	$this->load->view('content',$data);
      	$this->load->view('modalproduct',$data);
     	$this->load->view('footerkomen',$data);
	}

	public function add1()
    {
      if (!isset($_POST))
        show_404();
        
        $this->control_model->add1();
    }

    public function add2()
    {
      if (!isset($_POST))
        show_404();
        
        $this->control_model->add2();
    }

}