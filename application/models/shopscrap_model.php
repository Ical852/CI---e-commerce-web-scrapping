<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Shopscrap_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function akses()
    {
        $akses = $this->db->get_where('user_menu', ['url' => 'shopscrap' ])->row_array();
        $am = $akses['id'];
        $role = $this->session->userdata('role_id');

        $query = $this->db->query("SELECT menu_id FROM user_access_menu WHERE menu_id = '$am' AND role_id = '$role'");

        return $query->result();
    }

}