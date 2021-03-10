<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		// $this->load->view('template_backend/header');
		$this->load->view('backend/login');
		// $this->load->view('template_backend/footer');
	}

	public function auth() {
		$username = str_replace("'", "", htmlspecialchars($this->input->post('email', TRUE), ENT_QUOTES));
		$password = str_replace("'", "", htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES));

		$validate_username = $this->Login_model->validasi_username($username);

		if ($validate_username->num_rows() > 0) {
			$validate_pw = $this->Login_model->validasi_password($username, $password);
			if($validate_pw->num_rows() > 0) {
				$this->session->set_userdata('logged', TRUE);
				$this->session->set_userdata('user');
				$x = $$validate_pw->row_array();

				// administrator
				if($x['user_level'] == '1') {
					$this->session->set_userdata('access', '1');
					$id = $x['id_user'];
					$name = $x['nama'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('name', $name);
					redirect('backend/dashboard');
				}
			}
		}


	}
}
