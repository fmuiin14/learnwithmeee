<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		// $this->load->view('template_backend/header');
		$this->load->view('backend/login');
		// $this->load->view('template_backend/footer');
	}

	public function auth()
	{
		$username = str_replace("'", "", htmlspecialchars($this->input->post('email', TRUE), ENT_QUOTES));
		$password = str_replace("'", "", htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES));

		$validate_username = $this->Login_model->validasi_username($username);

		if ($validate_username->num_rows() > 0) {
			$validate_pw = $this->Login_model->validasi_password($username, $password);
			if ($validate_pw->num_rows() > 0) {
				$this->session->set_userdata('logged', TRUE);
				$this->session->set_userdata('user');
				$x = $validate_pw->row_array();

				// administrator
				if ($x['user_level'] == '1') {
					$this->session->set_userdata('access', '1');
					$id = $x['id_user'];
					$name = $x['nama'];
					$email = $x['email'];
					$user_level = $x['user_level'];
					$date_created = $x['date_created'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('email', $email);
					$this->session->set_userdata('user_level', $user_level);
					$this->session->set_userdata('date_created', $date_created);
					redirect('backend/dashboard');
				} else {
					// other user
					$this->session->set_userdata('access', '2');
					$id = $x['id_user'];
					$name = $x['nama'];
					$email = $x['email'];
					$user_level = $x['user_level'];
					$date_created = $x['date_created'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('email', $email);
					$this->session->set_userdata('user_level', $user_level);
					$this->session->set_userdata('date_created', $date_created);
					redirect('backend/dashboard');
				}
			} else {
				$url = base_url('login');
				echo $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><i class="fa fa-close"></i></button> Username / Password Salah</div>');
				redirect($url);
			}
		} else {
			$url = base_url('login');
			echo $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><i class="fa fa-close"></i></button> Username / Password Salah</div>');
			redirect($url);
		}
	}

	// login pengajar start
	public function educator()
	{
		// $this->load->view('template_backend/header');
		$this->load->view('backend/login_educator');
		// $this->load->view('template_backend/footer');
	}

	public function auth_educator()
	{
		$username = str_replace("'", "", htmlspecialchars($this->input->post('email', TRUE), ENT_QUOTES));
		$password = str_replace("'", "", htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES));

		$validate_username = $this->Login_model->validasi_username_educator($username);

		if ($validate_username->num_rows() > 0) {
			$validate_pw = $this->Login_model->validasi_password_educator($username, $password);
			if ($validate_pw->num_rows() > 0) {
				$this->session->set_userdata('logged', TRUE);
				$this->session->set_userdata('user');
				$x = $validate_pw->row_array();

				// educators
				if ($x['user_level'] == '3') {
					$this->session->set_userdata('access', '3');
					$id = $x['id'];
					$name = $x['nama'];
					$email = $x['email'];
					$user_level = $x['user_level'];
					$date_created = $x['date_created'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('email', $email);
					$this->session->set_userdata('user_level', $user_level);
					$this->session->set_userdata('date_created', $date_created);
					redirect('backend/dashboard');
				}
			} else {
				$url = base_url('login/educator');
				echo $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><i class="fa fa-close"></i></button> Username / Password Salah</div>');
				redirect($url);
			}
		} else {
			$url = base_url('login/educator');
			echo $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><i class="fa fa-close"></i></button> Username / Password Salah</div>');
			redirect($url);
		}
	}
	// login pengajar end

	function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('success-logout', 'Berhasil');
		$url = base_url('login');
		redirect($url);
	}
}
