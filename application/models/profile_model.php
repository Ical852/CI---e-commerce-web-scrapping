<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Profile_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function add()
    {
        $nama = $this->input->post('txtNama');
        $id = $this->input->post('txtId');

        $sql = "SELECT * FROM user WHERE id ='$id'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE user
                    SET name = '$nama'
                    WHERE id='$id'")) {       
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

    public function akses()
    {
        $akses = $this->db->get_where('user_menu2', ['url' => 'profile' ])->row_array();
        $am = $akses['id'];
        $role = $this->session->userdata('role_id');

        $query = $this->db->query("SELECT menu_id FROM user_access_menu2 WHERE menu_id = '$am' AND role_id = '$role'");

        return $query->result();
    }

}