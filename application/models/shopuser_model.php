<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Shopuser_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function show_data(){
    	return $this->db->get_where("produk_kita", array(
    		'kategori_cabe' => 'cabe merah'));
    }

    public function show_data2(){
    	return $this->db->get_where("produk_kita", array(
    		'kategori_cabe' => 'cabe ijo'));
    }

    public function show_data3(){
    	return $this->db->get_where("produk_kita", array(
    		'kategori_cabe' => 'cabe pedes'));
    }

    public function show_data4(){
    	return $this->db->get_where("produk_kita", array(
    		'kategori_cabe' => 'cabe lain'));
    }

    public function show_data5()
    {
        $query = $this->db->query("SELECT * FROM riwayat_selesai ORDER BY tanggal DESC LIMIT 3");

        return $query->result();
    }

    public function detail_produk($kode_cabe)
    {
       $result = $this->db->where('kode_cabe',$kode_cabe)->get('produk_kita');
       if($result->num_rows() > 0){
           return $result->result();
       }else{
           return false;
       }
    }
    
    public function cari($cari)
    {
        $this->db->select('*');
        $this->db->like('nama_cabe', $cari);
        $this->db->or_like('harga', $cari);
        $this->db->or_like('kategori_cabe', $cari);
        return $this->db->get('produk_kita')->result();
    }

}