<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Datakomentar_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function getData()
    {
        $i = 1;
        $komentar = $this->db->query("SELECT * from komentar");
        
        foreach($komentar->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><button class='btn btn-success ace-icon fa fa-pencil-square-o bigger-120'>Edit</button></a>  <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><button class='btn btn-danger ace-icon fa fa-trash-o bigger-120'>Hapus</button></a></center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->tanggal;
            $row[] = $rowa->email;
            $row[] = $rowa->nama;
            $row[] = $rowa->komentar;
            $row[] = $akses;
            $row[] = $rowa->id;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function add()
    {
        $date = $this->input->post('txtDate');
        $email = $this->input->post('txtEmail');
        $nama = $this->input->post('txtNama');
        $komentar = $this->input->post('txtKomentar');
        $idKomen = $this->input->post('txtIdKomentar');

        $sql = "SELECT * FROM komentar WHERE id ='$idKomen'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE komentar
                    SET tanggal = '$date', email = '$email' , nama = '$nama', komentar = '$komentar'
                    WHERE id='$idKomen'")) {       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data berhasil diubah.....";
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
        $idKomen = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM komentar WHERE id = '$idKomen'")){       
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
        $query = $this->db->query("SELECT * FROM produk_kita ORDER BY nama_cabe ASC");

        return $query->result();
    }

    public function akses()
    {
        $akses = $this->db->get_where('user_menu3', ['url' => 'datakomentar' ])->row_array();
        $am = $akses['id'];
        $role = $this->session->userdata('role_id');

        $query = $this->db->query("SELECT menu_id FROM user_access_menu3 WHERE menu_id = '$am' AND role_id = '$role'");

        return $query->result();
    }

}