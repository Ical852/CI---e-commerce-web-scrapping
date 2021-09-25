<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Shopuser extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('shopuser_model');
    }

	public function index()
	{
		$data['cabe'] = $this->shopuser_model->show_data()->result();
		$data['cabe2'] = $this->shopuser_model->show_data2()->result();
		$data['cabe3'] = $this->shopuser_model->show_data3()->result();
		$data['cabe4'] = $this->shopuser_model->show_data4()->result();
		
    $this->load->view('userpage/headeruser',$data);
    $this->load->view('userpage/shopuser_view',$data);
    $this->load->view('userpage/footerusercontent',$data);
	}

	public function detailproduk($kode_cabe)
    {
      $data['detailcabe'] = $this->shopuser_model->detail_produk($kode_cabe);
    	$this->load->view('userpage/headeruser',$data);
  		$this->load->view('userpage/detailprodukuser_view', $data);
  		$this->load->view('userpage/footerusercontent',$data);
    }

  public function cari()
  {
    $cari=$this->input->post('cari', true);
    $data['produk']=$this->shopuser_model->cari($cari);
    
    $this->load->view('userpage/headeruser',$data);
    $this->load->view('userpage/cariuser_view',$data);
    $this->load->view('userpage/footerusercontent',$data);
  }

}