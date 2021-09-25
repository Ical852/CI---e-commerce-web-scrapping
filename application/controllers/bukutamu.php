<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Bukutamu extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('bukutamu_model');
        $email = $this->session->userdata('email');
        $denial = $this->db->query("SELECT SUM(batal) AS batal FROM denied WHERE email = '$email' ")->row_array();
        $am = $this->bukutamu_model->akses();
        $akses = $this->db->get_where('user_menu', ['url' => 'bukutamu' ])->row_array();
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
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('header', $data);
        $this->load->view('bukutamu_view', $data);
        $this->load->view('footer',$data);
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->bukutamu_model->add();
    }

}