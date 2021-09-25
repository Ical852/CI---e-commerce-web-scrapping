<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('dashboard_model');
        $email = $this->session->userdata('email');
        $denial = $this->db->query("SELECT SUM(batal) AS batal FROM denied WHERE email = '$email' ")->row_array();
        $am = $this->dashboard_model->akses();
        $akses = $this->db->get_where('user_menu3', ['url' => 'dashboard' ])->row_array();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        } else if (!$am){
            redirect('auth/error404');
        } else if ($akses['is_active'] == 2){
            redirect('auth/error404');
        } else if ($denial['batal'] >= 5){
            redirect('auth/denied');
        }
    }

    public function index()
    {
        $data['title'] = 'Grafik Persentase Oee Tiap Mesin Per Hari';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('headercontrol', $data);
        $this->load->view('menu', $data);
        $this->load->view('dashboard_view', $data);
        $this->load->view('footercontent',$data);
    }

    function fetch_data()
    {
        if($this->input->post('tanggal'))
            {
                $chart_data = $this->dashboard_model->fetch_chart_data($this->input->post('tanggal'));
   
                foreach($chart_data->result_array() as $row)
                {
                    $output[] = array(
                        'nama_cabe'  => $row["nama_cabe"],
                        'jumlah' => floatval($row["jumlah"])
                    );
                }
                    echo json_encode($output);

            }

    }

}