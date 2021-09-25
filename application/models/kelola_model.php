<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Kelola_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function getData()
    {
        $i = 1;
        $user = $this->db->query("SELECT * from user");
        
        foreach($user->result() as $rowa) {
            $akses="<center>
            <a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><button class='btn btn-success ace-icon fa fa-pencil-square-o bigger-120'>Edit</button></a>  
            <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><button class='btn btn-danger ace-icon fa fa-trash-o bigger-120'>Hapus</button></a>
            <a href='kelola/userDetail/$rowa->id' class='tooltip-error' data-rel='tooltip' title='Detail' ><button class='btn btn-info ace-icon fa fa-info-circle bigger-120'>Detail</button></a>
            </center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->name;
            $row[] = $rowa->email;
            $row[] = $rowa->role_id;
            $row[] = $rowa->is_active;
            $row[] = $akses;
            $row[] = $rowa->id;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function add()
    {
        $namaUser = $this->input->post('txtNamaUser');
        $email = $this->input->post('txtEmail');
        $role = $this->input->post('txtRole');
        $status = $this->input->post('txtStatus');
        $idKelola = $this->input->post('txtIdKelola');

        $sql = "SELECT * FROM user WHERE id ='$idKelola'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE user
                    SET name = '$namaUser', email = '$email' , role_id = '$role', is_active = '$status'
                    WHERE id='$idKelola'")) {       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data berhasil diubah.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        } else {
        
            if($this->db->simple_query("INSERT INTO user(name, email, role_id, is_active)
                    VALUES ('$namaUser', '$email', '$role', '$status')")){       
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
        $idKelola = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM user WHERE id = '$idKelola'")){       
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
        $query = $this->db->query("SELECT * FROM user_role ORDER BY id ASC");

        return $query->result();
    }

    public function akses()
    {
        $akses = $this->db->get_where('user_menu', ['url' => 'kelola' ])->row_array();
        $am = $akses['id'];
        $role = $this->session->userdata('role_id');

        $query = $this->db->query("SELECT menu_id FROM user_access_menu WHERE menu_id = '$am' AND role_id = '$role'");

        return $query->result();
    }

}