<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Shop_model extends CI_Model {
     
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

    public function add()
    {
        $this->form_validation->set_rules('txtAlamat', 'Kolom Alamat', 'trim|required');

        $date = $this->input->post('txtDate');
        $email = $this->input->post('txtEmail');
        $nama = $this->input->post('txtNama');
        $alamat = $this->input->post('txtAlamat');
        $namaCabe = $this->input->post('txtNamaCabe');
        $gambar = $this->input->post('txtGambar');
        $harga = $this->input->post('txtHarga');
        $jumlah = $this->input->post('txtJumlah');
        $kodeOee = $this->input->post('txtKodePembelian');
        
            if ($this->form_validation->run() == false) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Alamat Terlebih Dahulu.....";
            } else if($this->db->simple_query("INSERT INTO keranjang(tanggal ,email, nama, alamat, nama_cabe , gambar, harga, jumlah, total, status)
                    VALUES ('$date' ,'$email', '$nama', '$alamat' ,'$namaCabe' ,'$gambar','$harga' ,'$jumlah', (harga*jumlah), 'Menunggu Konfirmasi' )")){       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data telah ditambahkan ke keranjang.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        echo json_encode($data);
    }

    public function add1()
    {
        $this->form_validation->set_rules('txtAlamat', 'Kolom Alamat', 'trim|required');

        $date = $this->input->post('txtDate');
        $email = $this->input->post('txtEmail');
        $nama = $this->input->post('txtNama');
        $alamat = $this->input->post('txtAlamat');
        $namaCabe = $this->input->post('txtNamaCabe');
        $gambar = $this->input->post('txtGambar');
        $harga = $this->input->post('txtHarga');
        $jumlah = $this->input->post('txtJumlah');
        
            if ($this->form_validation->run() == false) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Alamat Terlebih Dahulu.....";
            } else if($this->db->simple_query("INSERT INTO keranjang(tanggal ,email, nama, alamat, nama_cabe , gambar, harga, jumlah, total, status)
                    VALUES ('$date' ,'$email', '$nama', '$alamat' ,'$namaCabe' ,'$gambar','$harga' ,'$jumlah', (harga*jumlah), 'Menunggu Konfirmasi' )")){       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data telah ditambahkan ke keranjang.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        echo json_encode($data);
    }

    public function add2()
    {
        $this->form_validation->set_rules('txtAlamat2', 'Kolom Alamat', 'trim|required');

        $date = $this->input->post('txtDate2');
        $email = $this->input->post('txtEmail2');
        $nama = $this->input->post('txtNama2');
        $alamat = $this->input->post('txtAlamat2');
        $namaCabe = $this->input->post('txtNamaCabe2');
        $gambar = $this->input->post('txtGambar2');
        $harga = $this->input->post('txtHarga2');
        $jumlah = $this->input->post('txtJumlah2');
        
            if ($this->form_validation->run() == false) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Alamat Terlebih Dahulu.....";
            } else if($this->db->simple_query("INSERT INTO keranjang(tanggal ,email, nama, alamat, nama_cabe , gambar, harga, jumlah, total, status)
                    VALUES ('$date' ,'$email', '$nama', '$alamat' ,'$namaCabe' ,'$gambar','$harga' ,'$jumlah', (harga*jumlah), 'Menunggu Konfirmasi' )")){       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data telah ditambahkan ke keranjang.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        echo json_encode($data);
    }

    public function add3()
    {
        $this->form_validation->set_rules('txtAlamat3', 'Kolom Alamat', 'trim|required');

        $date = $this->input->post('txtDate3');
        $email = $this->input->post('txtEmail3');
        $nama = $this->input->post('txtNama3');
        $alamat = $this->input->post('txtAlamat3');
        $namaCabe = $this->input->post('txtNamaCabe3');
        $gambar = $this->input->post('txtGambar3');
        $harga = $this->input->post('txtHarga3');
        $jumlah = $this->input->post('txtJumlah3');
        
            if ($this->form_validation->run() == false) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Alamat Terlebih Dahulu.....";
            } else if($this->db->simple_query("INSERT INTO keranjang(tanggal ,email, nama, alamat, nama_cabe , gambar, harga, jumlah, total, status)
                    VALUES ('$date' ,'$email', '$nama', '$alamat' ,'$namaCabe' ,'$gambar','$harga' ,'$jumlah', (harga*jumlah), 'Menunggu Konfirmasi' )")){       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data telah ditambahkan ke keranjang.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        echo json_encode($data);
    }

    public function add4()
    {
        $this->form_validation->set_rules('txtAlamat4', 'Kolom Alamat', 'trim|required');

        $date = $this->input->post('txtDate4');
        $email = $this->input->post('txtEmail4');
        $nama = $this->input->post('txtNama4');
        $alamat = $this->input->post('txtAlamat4');
        $namaCabe = $this->input->post('txtNamaCabe4');
        $gambar = $this->input->post('txtGambar4');
        $harga = $this->input->post('txtHarga4');
        $jumlah = $this->input->post('txtJumlah4');
        
            if ($this->form_validation->run() == false) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Alamat Terlebih Dahulu.....";
            } else if($this->db->simple_query("INSERT INTO keranjang(tanggal ,email, nama, alamat, nama_cabe , gambar, harga, jumlah, total, status)
                    VALUES ('$date' ,'$email', '$nama', '$alamat' ,'$namaCabe' ,'$gambar','$harga' ,'$jumlah', (harga*jumlah), 'Menunggu Konfirmasi' )")){       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data telah ditambahkan ke keranjang.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        echo json_encode($data);
    }

    public function akses()
    {
        $akses = $this->db->get_where('user_menu', ['url' => 'shop' ])->row_array();
        $am = $akses['id'];
        $role = $this->session->userdata('role_id');

        $query = $this->db->query("SELECT menu_id FROM user_access_menu WHERE menu_id = '$am' AND role_id = '$role'");

        return $query->result();
    }

    public function akses1()
    {
        $akses = $this->db->get_where('user_menu3', ['url' => 'shop/cari' ])->row_array();
        $am = $akses['id'];
        $role = $this->session->userdata('role_id');

        $query = $this->db->query("SELECT menu_id FROM user_access_menu3 WHERE menu_id = '$am' AND role_id = '$role'");

        return $query->result();
    }

}