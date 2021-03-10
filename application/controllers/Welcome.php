<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}


	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function auth()
	{
		$username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

		$cek_pengajar = $this->Login_model->auth_pengajar($username, $password);

		if ($cek_pengajar->num_rows() > 0) { //jika login sebagai dosen
			$data = $cek_pengajar->row_array();
			var_dump($data);
			die();
			$this->session->set_userdata('masuk', TRUE);
			if ($data['level'] == '1') { //Akses admin
				$this->session->set_userdata('akses', '1');
				$this->session->set_userdata('ses_id', $data['nip']);
				$this->session->set_userdata('ses_nama', $data['nama']);
				redirect('page');
			} else { //akses dosen
				$this->session->set_userdata('akses', '2');
				$this->session->set_userdata('ses_id', $data['nip']);
				$this->session->set_userdata('ses_nama', $data['nama']);
				redirect('page');
			}
		} else { //jika login sebagai mahasiswa
			$cek_siswa = $this->Login_model->auth_siswa($username, $password);
			if ($cek_siswa->num_rows() > 0) {
				$data = $cek_siswa->row_array();
				$this->session->set_userdata('masuk', TRUE);
				$this->session->set_userdata('akses', '3');
				$this->session->set_userdata('ses_id', $data['nim']);
				$this->session->set_userdata('ses_nama', $data['nama']);
				redirect('page');
			} else {  // jika username dan password tidak ditemukan atau salah
				$url = base_url();
				echo $this->session->set_flashdata('msg', 'Username Atau Password Salah');
				redirect($url);
			}
		}
	}

	public function validateLogin()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
			'required' => 'Email harus di isi!',
			'valid_email' => 'Email tidak valid!',
		]);

		$this->form_validation->set_rules('password', 'Password', 'trim|required', [
			'required' => 'Password harus di isi!'
		]);

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('false-login', TRUE);
			$this->session->set_flashdata(
				'validateLoginFalse',
				$this->form_validation->error_array()
			);
			$this->load->library('user_agent');
			redirect($this->agent->referrer());
		} else {
			// validasi sukses
			$this->login();
		}
	}

	private function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('siswa', ['email' => $email])->row_array();

		if ($user) {
			// user ada
			if ($user['is_active'] == 1) {
				// cek password
				if (password_verify($password, $user['password'])) {
					$data = [
						'email' => $user['email'],
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

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->set_flashdata('success-logout', 'Berhasil');
		redirect(base_url('welcome/admin'));
	}
}
