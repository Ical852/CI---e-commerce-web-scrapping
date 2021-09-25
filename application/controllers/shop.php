<?php if(! defined('BASEPATH'))exit('No direct script access allowed');


Class Shop extends CI_Controller 
{

	public function __construct()
  {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('shop_model');
        $this->load->helper('simple_html_dom');
        $email = $this->session->userdata('email');
        $denial = $this->db->query("SELECT SUM(batal) AS batal FROM denied WHERE email = '$email' ")->row_array();
        $am = $this->shop_model->akses();
        $akses = $this->db->get_where('user_menu', ['url' => 'shop' ])->row_array();
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
    $data['cabe'] = $this->shop_model->show_data()->result();
    $data['cabe2'] = $this->shop_model->show_data2()->result();
    $data['cabe3'] = $this->shop_model->show_data3()->result();
    $data['cabe4'] = $this->shop_model->show_data4()->result();
    $data['cabescrap'] = $this->db->get('scrapuas')->result();
    $data['title'] = 'Dashboard';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('header',$data);
    $this->load->view('shop_view',$data);
    $this->load->view('footercontent',$data);
  }

	public function detailproduk($kode_cabe)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['detailcabe'] = $this->shop_model->detail_produk($kode_cabe);
    $this->load->view('header');
  	$this->load->view('detail_produk', $data);
  	$this->load->view('footercontent');
  }

  public function cari()
  {
    $am = $this->shop_model->akses1();
    $akses1 = $this->db->get_where('user_menu3', ['url' => 'shop/cari' ])->row_array();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        } else if (!$am){
            redirect('auth/error404');
        } else if ($akses1['is_active'] == 2){
            redirect('auth/error404');
        }
        
    $cari=$this->input->post('cari', true);
    $data['produk']=$this->shop_model->cari($cari);
    $data['title'] = 'Cari';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    
    $this->load->view('header',$data);
    $this->load->view('cari_view',$data);
    $this->load->view('footercontent',$data);
  }

  public function scrap()
  {
        $urlscrap = $this->input->post('url', true);
        $html = file_get_html($urlscrap);
        $bahan = $html->find('div[class=card-row]', 0);
        $scrap = $bahan->find('div[class=card flex-justified]');
        $products['products'] = [];
        foreach ($scrap as $product => $val) {
            $divimg = $val->find('div[class=image]',0);
            $img = $divimg->find('img',0)->src;
            $link = $divimg->find('a',0)->href;

            $divtitle = $val->find('div[class=title]',0);
            $title = $divtitle->find('a',0)->innertext;

            $divharga = $val->find('div[class=price]',0);
            $harga1 = $divharga->find('span',0)->innertext;
            $harga2 = $divharga->find('span',1)->innertext;
            $harga = $divharga->find('p',0)->innertext;

            $divlogo = $html->find('div[class=navbar-logo]',0);
            $logo = $divlogo->find('img',0)->src;

            $data = [
            'img' => $img,
            'link' => $link,
            'title' => $title,
            'harga' => $harga,
            'harga1' => $harga1,
            'harga2' => $harga2,
            'logo' => $logo
            ];

            $this->db->insert('scrapuas', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Scrap Berhasil!
            </div>');
        }

        redirect('shop');
  }

  public function add()
  {
    if (!isset($_POST))
    show_404();
        
    $this->shop_model->add();
  }

  public function add1()
  {
    if (!isset($_POST))
    show_404();
        
    $this->shop_model->add1();
  }

  public function add2()
  {
    if (!isset($_POST))
    show_404();
        
    $this->shop_model->add2();
  }

  public function add3()
  {
    if (!isset($_POST))
    show_404();
        
    $this->shop_model->add3();
  }

  public function add4()
  {
    if (!isset($_POST))
    show_404();
        
    $this->shop_model->add4();
  }

}