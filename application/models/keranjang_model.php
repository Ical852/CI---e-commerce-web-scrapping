<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Keranjang_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function getData()
    {
        $i = 1;
        $email = $this->session->userdata('email');
        $keranjang = $this->db->query("SELECT * from keranjang WHERE email = '$email' ");
        
        foreach($keranjang->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus Pesanan' ><button class='btn btn-danger ace-icon fa fa-trash-o bigger-120'>Batalkan Pesanan</button></a></center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->tanggal;
            $row[] = $rowa->email;
            $row[] = $rowa->nama;
            $row[] = $rowa->alamat;
            $row[] = $rowa->nama_cabe;
            $row[] = '<img src="'. base_url() .'/upload/'. $rowa->gambar .'" >';
            $row[] = $rowa->harga;
            $row[] = $rowa->jumlah;
            $row[] = $rowa->total;
            $row[] = $rowa->status;
            $row[] = $akses;
            $row[] = $rowa->id_pembelian;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function getData2()
    {
        $i = 1;
        $email = $this->session->userdata('email');
        $konfirm = $this->db->query("SELECT * from konfirm WHERE email = '$email'");
        
        foreach($konfirm->result() as $rowa) {
            $akses="<center><a href='https://api.whatsapp.com/send?phone=6287880252340&text=Hallo Saya Ingin Melakukan Transaksi' target='_blank' class='tooltip-success' data-rel='tooltip' title='Lakukan Pembayaran' ><button class='btn btn-info ace-icon fa fa-check'>Lakukan Pembayaran</button></a> <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus Pesanan' ><button class='btn btn-danger ace-icon fa fa-trash-o bigger-120'>Batalkan Pesanan</button></a></center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->tanggal;
            $row[] = $rowa->email;
            $row[] = $rowa->nama;
            $row[] = $rowa->alamat;
            $row[] = $rowa->nama_cabe;
            $row[] = '<img src="'. base_url() .'/upload/'. $rowa->gambar .'" >';
            $row[] = $rowa->harga;
            $row[] = $rowa->jumlah;
            $row[] = $rowa->total;
            $row[] = $rowa->status;
            $row[] = $akses;
            $row[] = $rowa->id_konfirmasi;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function getData3()
    {
        $i = 1;
        $email = $this->session->userdata('email');
        $proses = $this->db->query("SELECT * from proses WHERE email = '$email'");
        
        foreach($proses->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Selesaikan Pesanan' ><button class='btn btn-info ace-icon fa fa-check'>Selesaikan Pesanan</button></a></center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->tanggal;
            $row[] = $rowa->email;
            $row[] = $rowa->nama;
            $row[] = $rowa->alamat;
            $row[] = $rowa->nama_cabe;
            $row[] = '<img src="'. base_url() .'/upload/'. $rowa->gambar .'" >';
            $row[] = $rowa->harga;
            $row[] = $rowa->jumlah;
            $row[] = $rowa->total;
            $row[] = $rowa->status;
            $row[] = $akses;
            $row[] = $rowa->id_proses;
            $row[] = $rowa->gambar;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function add3()
    {
        $tanggal = $this->input->post('txtTanggal3');
        $email = $this->input->post('txtEmail3');
        $nama = $this->input->post('txtNama3');
        $alamat = $this->input->post('txtAlamat3');
        $namaCabe = $this->input->post('txtProduct3');
        $gambar = $this->input->post('txtGambar3');
        $harga = $this->input->post('txtHarga3');
        $jumlah = $this->input->post('txtJumlah3');
        $total = $this->input->post('txtTotal3');
        $status = $this->input->post('txtStatus3');
        $idKonfirmasi = $this->input->post('txtIdKonfirmasi3');

        $sql = "SELECT * FROM proses WHERE id_proses ='$idKonfirmasi'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("INSERT INTO riwayat_selesai(kode_selesai, tanggal, email, nama, alamat, nama_cabe, gambar, harga, jumlah, total, status)
                    VALUES ('$idKonfirmasi', '$tanggal', '$email', '$nama', '$alamat', '$namaCabe', '$gambar', '$harga', '$jumlah', '$total', 'Pesanan Selesai')")) {       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Pesanan berhasil diselesaikan.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        } else {
        
            //if($this->db->simple_query("INSERT INTO keranjang(kategori_cabe, nama_cabe, img, harga, stok)
             //       VALUES ('$kategoriCabe', '$namaCabe', '$gambar', '$harga', '$stok')")){       
              //  $data['msg'][0] = "ok";
              //  $data['msg'][1] = "Data berhasil ditambahkan.....";
           // } else {
            //    $error = $this->db->error();
            //    $myJSON = json_encode($error['code'].": ".$error['message']);
            //    $data['msg'][0] = "err";
            //    $data['msg'][1] = $myJSON;
           // }
        }

        echo json_encode($data);
    }

    public function getData4()
    {
        $i = 1;
        $email = $this->session->userdata('email');
        $riwayat_selesai = $this->db->query("SELECT * from riwayat_selesai WHERE email = '$email'");
        
        foreach($riwayat_selesai->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Edit Record' ><button class='btn btn-warning ace-icon fa fa-check'>Edit Record</button></a></center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->tanggal;
            $row[] = $rowa->email;
            $row[] = $rowa->nama;
            $row[] = $rowa->alamat;
            $row[] = $rowa->nama_cabe;
            $row[] = '<img src="'. base_url() .'/upload/'. $rowa->gambar .'" >';
            $row[] = $rowa->harga;
            $row[] = $rowa->jumlah;
            $row[] = $rowa->total;
            $row[] = $rowa->status;


            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function hapus()
    {
        $idKonfirmasi = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM keranjang WHERE id_pembelian = '$idKonfirmasi'")){       
                $data['msg'][0] = "hapus";
                $data['msg'][1] = "Data pesanan berhasil dibatalkan.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        echo json_encode($data);
    }

    public function hapus2()
    {
        $idKonfirmasi = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM konfirm WHERE id_konfirmasi = '$idKonfirmasi'")){       
                $data['msg'][0] = "hapus";
                $data['msg'][1] = "Data pesanan berhasil dibatalkan.....";
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
        $akses = $this->db->get_where('user_menu2', ['url' => 'keranjang' ])->row_array();
        $am = $akses['id'];
        $role = $this->session->userdata('role_id');

        $query = $this->db->query("SELECT menu_id FROM user_access_menu2 WHERE menu_id = '$am' AND role_id = '$role'");

        return $query->result();
    }

}