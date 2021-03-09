<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->session->set_flashdata('not-login', 'Gagal!');
		if (!$this->session->userdata('email')) {
			redirect('welcome/admin');
		}
	}

	public function index()
	{
		$data['user'] = $this->db->get_where(
			'admin',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$this->load->view('admin_template/header');
		$this->load->view('admin/index');
		$this->load->view('admin_template/footer');
	}

	// untuk siswa start

	public function data_siswa()
	{
		$this->load->model('m_siswa');

		$data['user'] = $this->db->get_where(
			'admin',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$data['user'] = $this->m_siswa->tampil_data()->result();


		$this->load->view('admin_template/header');
		$this->load->view('admin/data_siswa', $data);
		$this->load->view('admin_template/footer');
	}

	public function delete_siswa($id)
	{
		$this->load->model('m_siswa');
		$where = array('id_siswa' => $id);
		$this->m_siswa->delete_siswa($where, 'siswa');
		$this->session->set_flashdata('user-delete', 'berhasil');
		redirect('admin/data_siswa');
	}

	public function tambah_data_siswa() {
		$this->load->view('admin_template/header');
		$this->load->view('admin/tambah_data_siswa');
		$this->load->view('admin_template/footer');
	}

	public function tambahDataAksi() {
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambah_data_siswa();
		} else {
			// store isian dari form disini
		}


	}


	// untuk siswa end
}
