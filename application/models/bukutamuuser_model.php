<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Bukutamuuser_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
    }

    
    public function add()
    {
        $tanggal = $this->input->post('txtDateBukutamu');
        $email = $this->input->post('txtEmailBukutamu');
        $nama = $this->input->post('txtNamaBukutamu');
        $kritiksaran = $this->input->post('txtKritikSaranBukutamu');

            if (!$nama) {
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Masukkan Nama.....";
            } else if(!$kritiksaran){
                $data['msg'][0] = "repeat";
                $data['msg'][1] = "Masukkan Kritik dan Saran.....";
            } else if($this->db->simple_query("INSERT INTO bukutamu(tanggal, email, nama, kritik_saran)
                    VALUES ('$tanggal', '$email' ,'$nama', '$kritiksaran')")){       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Kritik dan Saran Telah Berhasil dikirim.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }

        echo json_encode($data);
    }

}