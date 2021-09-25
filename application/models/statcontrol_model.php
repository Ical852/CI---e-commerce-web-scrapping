<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Statcontrol_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function getData()
    {
        $i = 1;
        $keranjang = $this->db->query("SELECT * from keranjang");
        
        foreach($keranjang->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Konfirmasi' ><button class='btn btn-primary ace-icon fa fa-check'>Konfirmasi Pesanan</button></a> <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus Pesanan' ><button class='btn btn-danger ace-icon fa fa-trash-o bigger-120'>Hapus Pesanan</button></a></center>";
            
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
            $row[] = $rowa->gambar;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function getData2()
    {
        $i = 1;
        $konfirm = $this->db->query("SELECT * from konfirm");
        
        foreach($konfirm->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Proses Pesanan' ><button class='btn btn-success ace-icon fa fa-check'>Proses Pesanan</button></a> <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus Pesanan' ><button class='btn btn-danger ace-icon fa fa-trash-o bigger-120'>Hapus Pesanan</button></a></center>";
            
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
            $row[] = $rowa->gambar;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function getData3()
    {
        $i = 1;
        $proses = $this->db->query("SELECT * from proses");
        
        foreach($proses->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Selesaikan Pesanan' ><button class='btn btn-info ace-icon fa fa-check'>Selesaikan Pesanan</button></a> <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus Pesanan' ><button class='btn btn-danger ace-icon fa fa-trash-o bigger-120'>Hapus Pesanan</button></a></center>";
            
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

    public function getData4()
    {
        $i = 1;
        $riwayat_selesai = $this->db->query("SELECT * from riwayat_selesai");
        
        foreach($riwayat_selesai->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Edit Record' ><button class='btn btn-warning ace-icon fa fa-check'>Edit Record</button></a> <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus Record' ><button class='btn btn-danger ace-icon fa fa-trash-o bigger-120'>Hapus Record</button></a></center>";
            
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
            $row[] = $rowa->id_selesai;
            $row[] = $rowa->gambar;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function add()
    {
        $tanggal = $this->input->post('txtTanggal');
        $email = $this->input->post('txtEmail');
        $nama = $this->input->post('txtNama');
        $alamat = $this->input->post('txtAlamat');
        $namaCabe = $this->input->post('txtProduct');
        $gambar = $this->input->post('txtGambar');
        $harga = $this->input->post('txtHarga');
        $jumlah = $this->input->post('txtJumlah');
        $total = $this->input->post('txtTotal');
        $status = $this->input->post('txtStatus');
        $idKonfirmasi = $this->input->post('txtIdKonfirmasi');

        $sql = "SELECT * FROM keranjang WHERE id_pembelian ='$idKonfirmasi'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("INSERT INTO konfirm(kode_konfirm, tanggal, email, nama, alamat, nama_cabe, gambar, harga, jumlah, total, status)
                    VALUES ('$idKonfirmasi', '$tanggal', '$email', '$nama', '$alamat', '$namaCabe', '$gambar', '$harga', '$jumlah', '$total', 'Pesanan Diproses')")) {       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Pesanan berhasil dikonfirmasi.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        } 

        echo json_encode($data);
    }

    public function add2()
    {
        $tanggal = $this->input->post('txtTanggal2');
        $email = $this->input->post('txtEmail2');
        $nama = $this->input->post('txtNama2');
        $alamat = $this->input->post('txtAlamat2');
        $namaCabe = $this->input->post('txtProduct2');
        $gambar = $this->input->post('txtGambar2');
        $harga = $this->input->post('txtHarga2');
        $jumlah = $this->input->post('txtJumlah2');
        $total = $this->input->post('txtTotal2');
        $status = $this->input->post('txtStatus2');
        $idKonfirmasi = $this->input->post('txtIdKonfirmasi2');

        $sql = "SELECT * FROM konfirm WHERE id_konfirmasi ='$idKonfirmasi'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("INSERT INTO proses(kode_proses, tanggal, email, nama, alamat, nama_cabe, gambar, harga, jumlah, total, status)
                    VALUES ('$idKonfirmasi', '$tanggal', '$email', '$nama', '$alamat', '$namaCabe', '$gambar', '$harga', '$jumlah', '$total', 'Barang Sedang Dalam Perjalanan')")) {       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Pesanan berhasil diproses.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
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
        
        } 

        echo json_encode($data);
    }

    public function add4()
    {
        $tanggal = $this->input->post('txtTanggal4');
        $email = $this->input->post('txtEmail4');
        $nama = $this->input->post('txtNama4');
        $alamat = $this->input->post('txtAlamat4');
        $namaCabe = $this->input->post('txtProduct4');
        $gambar = $this->input->post('txtGambar4');
        $harga = $this->input->post('txtHarga4');
        $jumlah = $this->input->post('txtJumlah4');
        $total = $this->input->post('txtTotal4');
        $status = $this->input->post('txtStatus4');
        $idKonfirmasi = $this->input->post('txtIdKonfirmasi4');

        $sql = "SELECT * FROM riwayat_selesai WHERE id_selesai ='$idKonfirmasi'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE riwayat_selesai
                    SET kode_selesai = '$idKonfirmasi', tanggal = '$tanggal' , email = '$email', nama = '$nama', alamat = '$alamat', nama_cabe = '$namaCabe' , gambar = '$gambar' , harga = '$harga' , jumlah = '$jumlah' , total = '$total' , status = '$status'
                    WHERE id_selesai='$idKonfirmasi'")) {       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Record berhasil diubah.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
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
        $idKonfirmasi2 = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM konfirm WHERE id_konfirmasi = '$idKonfirmasi2'")){       
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

    public function hapus3()
    {
        $idKonfirmasi3 = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM proses WHERE id_proses = '$idKonfirmasi3'")){       
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

    public function hapus4()
    {
        $idKonfirmasi4 = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM riwayat_selesai WHERE id_selesai = '$idKonfirmasi4'")){       
                $data['msg'][0] = "hapus";
                $data['msg'][1] = "Record berhasil dihapus.....";
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
        $akses = $this->db->get_where('user_menu2', ['url' => 'statcontrol' ])->row_array();
        $am = $akses['id'];
        $role = $this->session->userdata('role_id');

        $query = $this->db->query("SELECT menu_id FROM user_access_menu2 WHERE menu_id = '$am' AND role_id = '$role'");

        return $query->result();
    }

}