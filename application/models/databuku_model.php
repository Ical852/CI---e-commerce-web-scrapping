<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Databuku_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function getData()
    {
        $i = 1;
        $bukutamu = $this->db->query("SELECT * from bukutamu");
        
        foreach($bukutamu->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><button class='btn btn-success ace-icon fa fa-pencil-square-o bigger-120'>Edit</button></a>  <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><button class='btn btn-danger ace-icon fa fa-trash-o bigger-120'>Hapus</button></a></center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->tanggal;
            $row[] = $rowa->email;
            $row[] = $rowa->nama;
            $row[] = $rowa->kritik_saran;
            $row[] = $akses;
            $row[] = $rowa->id_bt;

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
        $kritikdansaran = $this->input->post('txtKritikdanSaran');
        $idBt = $this->input->post('txtIdBukuTamu');

        $sql = "SELECT * FROM bukutamu WHERE id_bt ='$idBt'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE bukutamu
                    SET tanggal = '$tanggal', email = '$email' , nama = '$nama', kritik_saran = '$kritikdansaran'
                    WHERE id_bt='$idBt'")) {       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data berhasil diubah.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        } else {
        
            if($this->db->simple_query("INSERT INTO bukutamu(tanggal, email, nama, kritik_saran)
                    VALUES ('$tanggal', '$email', '$nama', '$kritikdansaran')")){       
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

    public function hapus()
    {
        $idBt = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM bukutamu WHERE id_bt = '$idBt'")){       
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

    public function akses()
    {
        $akses = $this->db->get_where('user_menu3', ['url' => 'databuku' ])->row_array();
        $am = $akses['id'];
        $role = $this->session->userdata('role_id');

        $query = $this->db->query("SELECT menu_id FROM user_access_menu3 WHERE menu_id = '$am' AND role_id = '$role'");

        return $query->result();
    }


}