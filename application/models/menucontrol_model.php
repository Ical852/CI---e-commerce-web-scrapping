<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Menucontrol_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function getData()
    {
        $i = 1;
        $user_menu = $this->db->query("SELECT * from user_menu");
        
        foreach($user_menu->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><button class='btn btn-success ace-icon fa fa-pencil-square-o bigger-120'>Edit</button></a>  <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><button class='btn btn-danger ace-icon fa fa-trash-o bigger-120'>Hapus</button></a></center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->id;
            $row[] = $rowa->menu;
            $row[] = $rowa->url;
            $row[] = $rowa->icon;
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
        $id = $this->input->post('txtId');
        $menu = $this->input->post('txtMenu');
        $url = $this->input->post('txtController');
        $icon = $this->input->post('txtIcon');
        $status = $this->input->post('txtStatus');
        $idMenu = $this->input->post('txtIdMenu');

        $sql = "SELECT * FROM user_menu WHERE id ='$idMenu'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE user_menu
                    SET id = $id, menu = '$menu', url = '$url' , icon = '$icon', is_active = '$status'
                    WHERE id='$idMenu'")) {       
                $data['msg'][0] = "update";
                $data['msg'][1] = "Data berhasil diubah.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        } else {
        
            if (!$id) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom ID.....";
            } else if (!$menu) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Menu.....";
            } else if (!$url) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Url.....";
            } else if (!$icon) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Icon.....";
            } else if (!$status) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Status.....";
            } else if($this->db->simple_query("INSERT INTO user_menu(id , menu, url, icon, is_active)
                    VALUES ('$id' ,'$menu', '$url', '$icon', '$status')")){       
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
        $idMenu = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM user_menu WHERE id = '$idMenu'")){       
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
        $user_menu2 = $this->db->query("SELECT * from user_menu2");
        
        foreach($user_menu2->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><button class='btn btn-success ace-icon fa fa-pencil-square-o bigger-120'>Edit</button></a>  <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><button class='btn btn-danger ace-icon fa fa-trash-o bigger-120'>Hapus</button></a></center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->id;
            $row[] = $rowa->menu;
            $row[] = $rowa->url;
            $row[] = $rowa->icon;
            $row[] = $rowa->is_active;
            $row[] = $akses;
            $row[] = $rowa->id;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function add2()
    {
        $id = $this->input->post('txtId2');
        $menu = $this->input->post('txtMenu2');
        $url = $this->input->post('txtController2');
        $icon = $this->input->post('txtIcon2');
        $status = $this->input->post('txtStatus2');
        $idMenu = $this->input->post('txtIdMenu2');

        $sql = "SELECT * FROM user_menu2 WHERE id ='$idMenu'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE user_menu2
                    SET id = $id, menu = '$menu', url = '$url' , icon = '$icon', is_active = '$status'
                    WHERE id='$idMenu'")) {       
                $data['msg'][0] = "update";
                $data['msg'][1] = "Data berhasil diubah.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        } else {
        
            if (!$id) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom ID.....";
            } else if (!$menu) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Menu.....";
            } else if (!$url) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Url.....";
            } else if (!$icon) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Icon.....";
            } else if (!$status) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Status.....";
            } else if($this->db->simple_query("INSERT INTO user_menu2(id, menu, url, icon, is_active)
                    VALUES ('$id' ,'$menu', '$url', '$icon', '$status')")){       
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
        $idMenu = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM user_menu2 WHERE id = '$idMenu'")){       
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
        $user_menu3 = $this->db->query("SELECT * from user_menu3");
        
        foreach($user_menu3->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><button class='btn btn-success ace-icon fa fa-pencil-square-o bigger-120'>Edit</button></a>  <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><button class='btn btn-danger ace-icon fa fa-trash-o bigger-120'>Hapus</button></a></center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->id;
            $row[] = $rowa->menu;
            $row[] = $rowa->url;
            $row[] = $rowa->icon;
            $row[] = $rowa->is_active;
            $row[] = $akses;
            $row[] = $rowa->id;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function add3()
    {
        $id = $this->input->post('txtId3');
        $menu = $this->input->post('txtMenu3');
        $url = $this->input->post('txtController3');
        $icon = $this->input->post('txtIcon3');
        $status = $this->input->post('txtStatus3');
        $idMenu = $this->input->post('txtIdMenu3');

        $sql = "SELECT * FROM user_menu3 WHERE id ='$idMenu'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE user_menu3
                    SET id = '$id', menu = '$menu', url = '$url' , icon = '$icon', is_active = '$status'
                    WHERE id='$idMenu'")) {       
                $data['msg'][0] = "update";
                $data['msg'][1] = "Data berhasil diubah.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        } else {
        
            if (!$id) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom ID.....";
            } else if (!$menu) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Menu.....";
            } else if (!$url) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Url.....";
            } else if (!$icon) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Icon.....";
            } else if (!$status) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Isi Kolom Status.....";
            } else if($this->db->simple_query("INSERT INTO user_menu3(id, menu, url, icon, is_active)
                    VALUES ('$id', '$menu', '$url', '$icon', '$status')")){       
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
        $idMenu = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM user_menu3 WHERE id = '$idMenu'")){       
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
        $akses = $this->db->get_where('user_menu3', ['url' => 'menucontrol' ])->row_array();
        $am = $akses['id'];
        $role = $this->session->userdata('role_id');

        $query = $this->db->query("SELECT menu_id FROM user_access_menu3 WHERE menu_id = '$am' AND role_id = '$role'");

        return $query->result();
    }


}