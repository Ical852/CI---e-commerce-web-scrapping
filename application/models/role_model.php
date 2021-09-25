<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Role_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function getData()
    {
        $i = 1;
        $user_role = $this->db->query("SELECT * from user_role");
        
        foreach($user_role->result() as $rowa) {
            $akses="<center>
            <a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><button class='btn btn-success ace-icon fa fa-pencil-square-o bigger-120'>Edit</button></a>  
            <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><button class='btn btn-danger ace-icon fa fa-trash-o bigger-120'>Hapus</button></a>
            </center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->id;
            $row[] = $rowa->role;
            $row[] = $akses;
            $row[] = $rowa->id;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function add()
    {
        $roleId = $this->input->post('txtRoleId');
        $role = $this->input->post('txtRole');
        $id = $this->input->post('txtIdRole');

        $sql = "SELECT * FROM user_role WHERE id ='$id'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE user_role
                    SET id = '$roleId', role = '$role'
                    WHERE id='$id'")) {       
                $data['msg'][0] = "update";
                $data['msg'][1] = "Data berhasil diubah.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        } else {
        
            if (!$roleId) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Role ID.....";
            } else if (!$role) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Role.....";
            } else if($this->db->simple_query("INSERT INTO user_role(id, role)
                    VALUES ('$roleId', '$role')")){       
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
        $id = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM user_role WHERE id = '$id'")){       
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
        $akses = $this->db->get_where('user_menu3', ['url' => 'role' ])->row_array();
        $am = $akses['id'];
        $role = $this->session->userdata('role_id');

        $query = $this->db->query("SELECT menu_id FROM user_access_menu3 WHERE menu_id = '$am' AND role_id = '$role'");

        return $query->result();
    }

}