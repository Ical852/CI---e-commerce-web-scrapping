<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Dashboard_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

 	function fetch_chart_data($tanggal)
 	{
	  $this->db->where('tanggal', $tanggal);
	  $this->db->order_by('tanggal', 'ASC');
	  return $this->db->get('riwayat_selesai');
 	}

 	public function akses()
    {
        $akses = $this->db->get_where('user_menu3', ['url' => 'dashboard' ])->row_array();
        $am = $akses['id'];
        $role = $this->session->userdata('role_id');

        $query = $this->db->query("SELECT menu_id FROM user_access_menu3 WHERE menu_id = '$am' AND role_id = '$role'");

        return $query->result();
    }

}