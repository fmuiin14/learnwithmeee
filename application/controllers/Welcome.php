<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function validateLogin() {
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
			'required' => 'Email harus di isi!',
			'valid_email' => 'Email tidak valid!',
		]);

		$this->form_validation->set_rules('password', 'Password', 'trim|required', [
			'required' => 'Password harus di isi!'
		]);

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('false-login', TRUE);
			$this->session->set_flashdata('validateLoginFalse', 
			$this->form_validation->error_array());
			$this->load->library('user_agent');
			redirect($this->agent->referrer());
		} else {
			// validasi sukses
			$this->login();
		}
	}

	private function login() {
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('siswa', ['email' => $email])->row_array();

		if($user) {
			// user ada
			if($user['is_active'] == 1) {
				// cek password
				if (password_verify($password, $user['password'])) {
					$data = ['email' => $user['email'],
				];

				$this->session->set_userdata($data);
				redirect(base_url('user'));
				} else {
					$this->session->set_flashdata('fail-pass', 'Gagal!');
					redirect(base_url('home'));
				}
			} else {
				$this->session->set_flashdata('fail-email', 'Gagal!');
				redirect(base_url('home'));
			}
		} else {
			$this->session->set_flashdata('fail-login', 'Gagal!');
			redirect(base_url('home'));
		}
	}

	public function admin()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
			'required' => 'Harap isi email!',
			'valid_email' => 'Email tidak valid!'
		]);

		$this->form_validation->set_rules('password', 'Password', 'trim|required', [
			'required' => 'Harap isi password!'
		]);

		$data['navbar'] = $this->load->view('navbar', "", TRUE);

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header');
			$this->load->view('admin/login', $data);
			$this->load->view('templates/footer');
		} else {
			// validasi sukses
			$this->adminlogin();
		}
	}

	private function adminlogin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('admin', ['email' => $email])->row_array();

		if ($user) {
			// cek password
			if (password_verify($password, $user['password'])) {
				$data = [
					'email' => $user['email'],
					'nama' => $user['username']
				];

				$this->session->set_userdata($data);
				redirect(base_url('admin'));
			} else {
				$this->session->set_flashdata('fail-pass', "Gagal!");
				redirect(base_url('welcome/admin'));
			}
		} else {
			$this->session->set_flashdata('fail-login', "Gagal!");
			redirect(base_url('welcome/admin'));
		}
	}

	public function logout() {
		$this->session->unset_userdata('email');
		$this->session->set_flashdata('success-logout', 'Berhasil');
		redirect(base_url('welcome/admin'));
	}
}
