<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Menuaccess_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function getData()
    {
        $i = 1;
        $user_access_menu = $this->db->query("SELECT * from user_access_menu");
        
        foreach($user_access_menu->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><button class='btn btn-success ace-icon fa fa-pencil-square-o bigger-120'>Edit</button></a>  <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><button class='btn btn-danger ace-icon fa fa-trash-o bigger-120'>Hapus</button></a></center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->role_id;
            $row[] = $rowa->menu_id;
            $row[] = $akses;
            $row[] = $rowa->id;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function add()
    {
        $role = $this->input->post('txtRole');
        $menu = $this->input->post('txtMenuId');
        $id = $this->input->post('txtIdAccess');

        $sql = "SELECT * FROM user_access_menu WHERE id ='$id'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE user_access_menu
                    SET role_id = '$role', menu_id = '$menu'
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
        
            if (!$role) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Role.....";
            } else if (!$menu) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Menu.....";
            } else if($this->db->simple_query("INSERT INTO user_access_menu(role_id , menu_id)
                    VALUES ('$role' ,'$menu')")){       
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
        
            if($this->db->simple_query("DELETE FROM user_access_menu WHERE id = '$id'")){       
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
        $i = 1;
        $user_access_menu2 = $this->db->query("SELECT * from user_access_menu2");
        
        foreach($user_access_menu2->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><button class='btn btn-success ace-icon fa fa-pencil-square-o bigger-120'>Edit</button></a>  <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><button class='btn btn-danger ace-icon fa fa-trash-o bigger-120'>Hapus</button></a></center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->role_id;
            $row[] = $rowa->menu_id;
            $row[] = $akses;
            $row[] = $rowa->id;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function add2()
    {
        $role = $this->input->post('txtRole2');
        $menu = $this->input->post('txtMenuId2');
        $id = $this->input->post('txtIdAccess2');

        $sql = "SELECT * FROM user_access_menu2 WHERE id ='$id'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE user_access_menu2
                    SET role_id = '$role', menu_id = '$menu'
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
        
            if (!$role) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Role.....";
            } else if (!$menu) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Menu.....";
            } else if($this->db->simple_query("INSERT INTO user_access_menu2(role_id , menu_id)
                    VALUES ('$role' ,'$menu')")){       
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

    public function hapus2()
    {
        $id = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM user_access_menu2 WHERE id = '$id'")){       
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

    public function getData3()
    {
        $i = 1;
        $user_access_menu3 = $this->db->query("SELECT * from user_access_menu3");
        
        foreach($user_access_menu3->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><button class='btn btn-success ace-icon fa fa-pencil-square-o bigger-120'>Edit</button></a>  <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><button class='btn btn-danger ace-icon fa fa-trash-o bigger-120'>Hapus</button></a></center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->role_id;
            $row[] = $rowa->menu_id;
            $row[] = $akses;
            $row[] = $rowa->id;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function add3()
    {
        $role = $this->input->post('txtRole3');
        $menu = $this->input->post('txtMenuId3');
        $id = $this->input->post('txtIdAccess3');

        $sql = "SELECT * FROM user_access_menu3 WHERE id ='$id'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE user_access_menu3
                    SET role_id = '$role', menu_id = '$menu'
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
        
            if (!$role) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Role.....";
            } else if (!$menu) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Menu.....";
            } else if($this->db->simple_query("INSERT INTO user_access_menu3(role_id , menu_id)
                    VALUES ('$role' ,'$menu')")){       
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

    public function hapus3()
    {
        $id = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM user_access_menu3 WHERE id = '$id'")){       
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
        $akses = $this->db->get_where('user_menu3', ['url' => 'menuaccess' ])->row_array();
        $am = $akses['id'];
        $role = $this->session->userdata('role_id');

        $query = $this->db->query("SELECT menu_id FROM user_access_menu3 WHERE menu_id = '$am' AND role_id = '$role'");

        return $query->result();
    }


}