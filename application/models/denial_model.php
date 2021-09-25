<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Denial_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function getData()
    {
        $i = 1;
        $denied = $this->db->query("SELECT * from denied");
        
        foreach($denied->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><button class='btn btn-success ace-icon fa fa-pencil-square-o bigger-120'>Edit</button></a>  <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><button class='btn btn-danger ace-icon fa fa-trash-o bigger-120'>Hapus</button></a></center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->email;
            $row[] = $rowa->batal;
            $row[] = $akses;
            $row[] = $rowa->id_denied;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function add()
    {
        $email = $this->input->post('txtEmail');
        $deny = $this->input->post('txtTotalDeny');
        $idDeny = $this->input->post('txtIdDenial');

        $sql = "SELECT * FROM denied WHERE id_denied ='$idDeny'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE denied
                    SET email = '$email', batal = '$deny'
                    WHERE id_denied='$idDeny'")) {       
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
        $idDeny = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM denied WHERE id_denied = '$idDeny'")){       
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
        $akses = $this->db->get_where('user_menu3', ['url' => 'denial' ])->row_array();
        $am = $akses['id'];
        $role = $this->session->userdata('role_id');

        $query = $this->db->query("SELECT menu_id FROM user_access_menu3 WHERE menu_id = '$am' AND role_id = '$role'");

        return $query->result();
    }

}