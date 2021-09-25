<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Control_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function getData()
    {
        $i = 1;
        $produk_kita = $this->db->query("SELECT * from produk_kita");
        
        foreach($produk_kita->result() as $rowa) {
            $akses="
            <center>
            <a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><button class='btn btn-success ace-icon fa fa-pencil-square-o bigger-120'>Edit</button></a>
            <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><button class='btn btn-danger ace-icon fa fa-trash-o bigger-120'>Hapus</button></a><br><br> 
            <a href='#' class='tooltip-error' data-rel='tooltip' title='Masuk' ><button class='btn btn-info ace-icon fa fa-download'>Masuk</button></a>
            <a href='#' class='tooltip-error' data-rel='tooltip' title='Keluar' ><button class='btn btn-warning ace-icon fa fa-share-square-o'>Keluar</button></a><br><br>
            <a href='#' class='tooltip-error' data-rel='tooltip' title='Ganti' ><button class='btn btn-primary ace-icon fa fa-picture-o'>Ganti Gambar</button></a>
            </center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->kategori_cabe;
            $row[] = $rowa->nama_cabe;
            $row[] = '<img width="200" height="150" src="'. base_url() .'/upload/'. $rowa->img .'" >';
            $row[] = $rowa->harga;
            $row[] = $rowa->stok;
            $row[] = $akses;
            $row[] = $rowa->nama_cabe;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function add()
    {

        $kategoriCabe = $this->input->post('txtKategoriCabe');
        $namaCabe = $this->input->post('txtNamaCabe');
        $harga = $this->input->post('txtHarga');
        $stok = $this->input->post('txtStok');
        $idCabe = $this->input->post('txtIdCabe');

        $sql = "SELECT * FROM produk_kita WHERE nama_cabe ='$idCabe'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE produk_kita
                    SET kategori_cabe = '$kategoriCabe', nama_cabe = '$namaCabe' , harga = '$harga', stok = '$stok'
                    WHERE nama_cabe='$idCabe'")) {       
                $data['msg'][0] = "update";
                $data['msg'][1] = "Data berhasil diubah.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        } else {
        
            if (!$kategoriCabe) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Kategori Cabe.....";
            } else if (!$namaCabe) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Nama Cabe.....";
            } else if (!$harga) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Harga.....";
            } else if (!$stok) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Stok.....";
            } else if($this->db->simple_query("INSERT INTO produk_kita(kategori_cabe, nama_cabe, harga, stok)
                    VALUES ('$kategoriCabe', '$namaCabe', '$harga', '$stok')")){       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data berhasil ditambahkan.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        }

        echo json_encode($data);
    }

    //user numpang
    public function add1()
    {
        $nama = $this->input->post('txtNameBukutamu');
        $komentar = $this->input->post('txtMessageBukutamu');
        $date = $this->input->post('txtDateBukutamu');
        $email = $this->input->post('txtEmailBukutamu');

            if (!$nama) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Masukkan Nama.....";
            } else if(!$komentar){
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Masukkan Kritik dan Saran.....";
            } else if($this->db->simple_query("INSERT INTO bukutamu(tanggal,  email, nama, kritik_saran)
                    VALUES ('$date', '$email', '$nama', '$komentar')")){       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Pesan Berhasil Dikirim";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }

        echo json_encode($data);
    }
    //user numpang

    //user numpang
    public function add2()
    {
        $nama = $this->input->post('txtName');
        $komentar = $this->input->post('txtMessage');
        $date = $this->input->post('txtDate');
        $email = $this->input->post('txtEmail');
        $gambar = $this->input->post('txtGambar');

            if (!$nama) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Masukkan Nama.....";
            } else if(!$komentar){
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Masukkan Komentar.....";
            } else if($this->db->simple_query("INSERT INTO komentar(tanggal,  email, nama, gambar, komentar)
                    VALUES ('$date', '$email', '$nama', '$gambar', '$komentar')")){       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Komentar Berhasil Dikirim";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }

        echo json_encode($data);
    }
    //user numpang

    public function hapus()
    {
        $idCabe = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM produk_kita WHERE nama_cabe = '$idCabe'")){       
                $data['msg'][0] = "hapus";
                $data['msg'][1] = "Data berhasil dihapus.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        echo json_encode($data);
    }


    public function getData2()
    {
        $query = $this->db->query("SELECT * FROM produk_kita ORDER BY img ASC");

        return $query->result();
    }

    //user numpang
    public function komenpage($limit, $start)
    {
        $this->db->order_by('tanggal', 'DESC');
        $this->db->order_by('id', 'DESC');
        return $this->db->get('komentar', $limit, $start)->result();
    }
    //user numpang

    //user numpang
    public function countAllRecord()
    {
        return $this->db->get('komentar')->num_rows();
    }
    //user numpang

    public function akses()
    {
        $akses = $this->db->get_where('user_menu', ['url' => 'control' ])->row_array();
        $am = $akses['id'];
        $role = $this->session->userdata('role_id');

        $query = $this->db->query("SELECT menu_id FROM user_access_menu WHERE menu_id = '$am' AND role_id = '$role'");

        return $query->result();
    }

    //user numpang
    public function akses1()
    {
        $akses = $this->db->get_where('user_menu', ['url' => 'user' ])->row_array();
        $am = $akses['id'];
        $role = $this->session->userdata('role_id');

        $query = $this->db->query("SELECT menu_id FROM user_access_menu WHERE menu_id = '$am' AND role_id = '$role'");

        return $query->result();
    }
    //user numpang

}