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
}
