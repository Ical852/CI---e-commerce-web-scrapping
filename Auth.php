<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 

{
	public function __construct()

	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()

	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			
			$data['title'] = 'Login';
			$this->load->view('userpage/headeruser',$data);
			$this->load->view('loginregis/loginregis',$data);
			$this->load->view('userpage/footeruser',$data);

		} else {

			$this->_login();

		}
	}

	private function _login()

	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if($user){

			if ($user['is_active'] == 1){

				if(password_verify($password, $user['password'])) {

					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']						
					];

					$this->session->set_userdata($data);
					if ($user['role_id'] == 1) {
						redirect('control');
					} else {
						redirect('user');
					}
					

				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Wrong Password!
					</div>');
					redirect('auth');
				}

			} else if($user['is_active'] == 2) {
			    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Email has been nonactivated!, maybe you did an illegal things!, try log in on another day!
				</div>');
				redirect('auth');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Email has not been activated!, Check Your Email to Activate! (If the mail does not exist, please check on your spam inbox)
				</div>');
				redirect('auth');
			}

		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Email is not registered!
			</div>');
			redirect('auth');
		}
	}

	public function registration()
	{	
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',[
			'is_unique' => 'This email has already registered!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]',[
			'matches' => 'Password doesnt match!',
			'min_length' => 'Password too short'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Registration';
			$this->load->view('userpage/headeruser',$data);
			$this->load->view('loginregis/loginregistration',$data);
			$this->load->view('userpage/footeruser',$data);
		} else {
			$email = $this->input->post('email', true);
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($email),
				'image' => 'default.png',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 0,
				'date_created' => time()
			];

			$token = base64_encode(random_bytes(32));
			$user_token = [
				'email' => $email,
				'token' => $token,
				'date_created' => time()
			];

			$this->db->insert('user', $data);
			$this->db->insert('user_token', $user_token);

			$this->_sendEmail($token, 'verify');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Congratulations! your account has been created. Please Check Your Email For Activation! (If the mail does not exist, please check on your spam inbox)
			</div>');
			redirect('auth');
		}		
	}

	private function _sendEmail($token, $type)
	{
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'caricabee.info@gmail.com',
			'smtp_pass' => 'caricabeeinfosmartwebhosting',
			'smtp_port' => 465,
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		];

		$this->email->initialize($config);

		$this->email->from('caricabee.info@gmail.com', 'Cari Cabee Info');
		$this->email->to($this->input->post('email'));

		if($type == 'verify'){
			$this->email->subject('Account Verification');
			$this->email->message('Click this link to verify your account : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
		} else if ($type == 'forgot'){
			$this->email->subject('Reset Password');
			$this->email->message('Click this link to reset your password : <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
		}
		
		if($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die();
		}
	}

	public function verify()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if($user) {
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

			if($user_token) {

				if(time() - $user_token['date_created'] < (60*60*24)) {
					$this->db->set('is_active', 1);
					$this->db->where('email', $email);
					$this->db->update('user');

					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					'. $email .' Has Been Activated, You Can Login Now!.
					</div>');
					redirect('auth');
				} else {

					$this->db->delete('user', ['email' => $email]);
					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Account Activation Failed! Token Expired!.
					</div>');
					redirect('auth');
				}

			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Account Activation Failed! Invalid Token!.
				</div>');
				redirect('auth');
			}

		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Account Activation Failed! Wrong email!.
			</div>');
			redirect('auth');
		}
	}

	public function forgotpassword()
	{
		$this->form_validation->set_rules('email','Email', 'required|trim|valid_email');

		if($this->form_validation->run() == false){
			$data['title'] = 'Forgot Password';
			$this->load->view('userpage/headeruser',$data);
			$this->load->view('loginregis/forgotpassword',$data);
			$this->load->view('userpage/footeruser',$data);
		} else {
			$email = $this->input->post('email');

			$user = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();

			if($user){
				$token = base64_encode(random_bytes(32));
				$user_token = [
					'email' => $email,
					'token' => $token,
					'date_created' => time()
				];

				$this->db->insert('user_token', $user_token);
				$this->_sendEmail($token, 'forgot');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Please Check Yout Email to Reset Your Password! (If the mail does not exist, please check on your spam inbox).
				</div>');
				redirect('auth/forgotpassword');

			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Email Is Not Registered or Activated!.
				</div>');
				redirect('auth/forgotpassword');
			}
		}
		
	}

	public function resetpassword()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if($user){
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
			if($user_token){
				$this->session->set_userdata('reset_email', $email);
				$this->changePassword();
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Reset Password Failed! Wrong Token!.
				</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Reset Password Failed! Wrong Email!.
			</div>');
			redirect('auth');
		}
	}

	public function changePassword()
	{
		if(!$this->session->userdata('reset_email')){
			redirect('auth');
		}
		$this->form_validation->set_rules('password1', 'New Password', 'required|trim|min_length[8]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Confirm New Password', 'required|trim|min_length[8]|matches[password1]' );

		if($this->form_validation->run() == false){
			$data['title'] = 'Reset Password';
			$this->load->view('userpage/headeruser',$data);
			$this->load->view('loginregis/resetpassword',$data);
			$this->load->view('userpage/footeruser',$data);
		} else {
			$password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);

			$email = $this->session->userdata('reset_email');

			$this->db->set('password', $password);
			$this->db->where('email', $email);
			$this->db->update('user');

			$this->db->delete('user_token', ['email' => $email]);

			$this->session->unset_userdata('reset_email');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Reset Password Success!, Login With Your New Password!.
			</div>');
			redirect('auth');	
		}
		
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		You have been logged out!
		</div>');
		redirect('auth');
	}

	public function error404()
	{
		$this->load->view('denied');
	}

	public function denied()
	{
		$this->load->view('forbidden');
	}

	public function notfound()
	{
		$this->load->view('error404');
	}
}