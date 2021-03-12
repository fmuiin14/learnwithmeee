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
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$this->load->view('admin_template/header');
		$this->load->view('admin/index');
		$this->load->view('admin_template/footer');
	}

	// untuk siswa start



	public function delete_siswa($id)
	{
		$this->load->model('m_siswa');
		$where = array('id_siswa' => $id);
		$this->m_siswa->delete_siswa($where, 'siswa');
		$this->session->set_flashdata('user-delete', 'berhasil');
		redirect('admin/data_siswa');
	}

	public function tambah_data_siswa()
	{
		$this->load->view('admin_template/header');
		$this->load->view('admin/tambah_data_siswa');
		$this->load->view('admin_template/footer');
	}

	public function tambahDataSiswaAksi()
	{
		$this->load->model('M_siswa');
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambah_data_siswa();
		} else {
			// store isian dari form disini
			$nama = $this->input->post('nama_siswa');
			$nis = $this->input->post('nis');
			$password = $this->input->post('password');
			$email = $this->input->post('email');
			$no_hp = $this->input->post('no_hp');
			$agama = $this->input->post('agama');
			$jenis_kelamin = $this->input->post('jenis_kelamin');

			$birthday = $this->input->post('birthday');			
			$tempat_lahir = $this->input->post('tempat_lahir');
			$tanggal_masuk = $this->input->post('tanggal_masuk');

			// superglobal variabel dr php
			$photo = $_FILES['photo']['name'];
			if ($photo = '') {
				// apa
			} else {
				$config['upload_path'] = './assets/photo';
				$config['allowed_types'] = 'jpg|jpeg|png|tiff';
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('photo')) {
					echo "Photo gagal di upload";
				} else {
					$photo = $this->upload->data('file_name');
				}
			}

			$data = array(
				'nama' => $nama,
				'nis' => $nis,
				'password' => password_hash($password, PASSWORD_BCRYPT),
				'email' => $email,
				'no_hp' => $no_hp,
				'agama' => $agama,
				'jenis_kelamin' => $jenis_kelamin,
				'birthday' => $birthday,
				'tempat_lahir' => $tempat_lahir,
				'image' => $photo,
				'is_active' => '1',
				'date_created' => $tanggal_masuk
			);

			$this->M_siswa->insertData($data, 'siswa');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data berhasil di tambahkan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('Admin/data_siswa');
		}
	}


	public function _rules() {
		$this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'trim|required');
		$this->form_validation->set_rules('nis', 'NIS', 'trim|required|numeric');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('no_hp', 'No HP', 'trim|required|numeric');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('agama', 'Agama', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
		$this->form_validation->set_rules('birthday', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'trim|required');
	}

	// untuk siswa end
	

}
