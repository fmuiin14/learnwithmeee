<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->session->set_flashdata('not-login', 'Gagal!');
		if(!$this->session->userdata('email')) {
			redirect('Admin/login');
		}
	}

	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
			'required' => 'Harap isi email!',
			'valid_email' => 'Email tidak valid!'
		]);

		$this->form_validation->set_rules('password', 'Password', 'trim|required', [
			'required' => 'Harap isi password!'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/login');
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

		if($user) {
			// cek password
			if(password_verify($password, $user['password'])) {
				$data = [
					'email' => $user['email'],
					'nama' => $user['username']
				];

				$this->session->set_userdata($data);
				redirect(base_url('admin'));

			}
		}
	}


}
