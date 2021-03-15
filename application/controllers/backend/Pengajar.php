<?php
class Pengajar extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged') != TRUE) {
			$url = base_url('login');
			redirect($url);
		}
	}

	public function index()
	{

		if ($this->session->userdata('user_level') != '1') {
			$url = base_url('backend/dashboard');
			redirect($url);
		}

		$this->load->model('M_pengajar');

		// $data['educators'] = $this->db->get_where('educators', ['email' => $this->session->userdata('email')])->row_array();

		$data['educators'] = $this->M_pengajar->tampil_data()->result();


		$this->load->view('admin_template/header');
		$this->load->view('pengajar/index', $data);
		$this->load->view('admin_template/footer');
	}

	public function detail_pengajar($id)
	{
		$this->load->model('m_pengajar');
		$where = array('id' => $id);
		$detail = $this->m_pengajar->detail_pengajar($id);
		$data['detail'] = $detail;
		// var_dump($data['detail']);
		// die();

		$this->load->view('admin_template/header');
		$this->load->view('pengajar/detail_pengajar', $data);
		$this->load->view('admin_template/footer');
	}

	public function delete_pengajar($id)
	{
		$this->load->model('M_pengajar');
		$where = array('id' => $id);
		$this->M_pengajar->delete_pengajar($where, 'educators');
		$this->session->set_flashdata('pengajar-delete', 'berhasil');
		redirect('backend/pengajar');
	}

	public function update_pengajar($id)
	{
		$this->load->model('m_pengajar');
		$where = array('id' => $id);
		$data['educators'] = $this->m_pengajar->update_pengajar($where, 'educators')->result();

		$this->load->view('admin_template/header');
		$this->load->view('pengajar/update_pengajar', $data);
		$this->load->view('admin_template/footer');
	}

	public function update_pengajar_aksi()
	{
		$this->_rulesUpdate();

		if ($this->form_validation->run() == FALSE) {
			$id = $this->input->post('id');
			$this->update_pengajar($id);
		} else {
			// store isian dari form disini
			$id = $this->input->post('id');
			$nama = $this->input->post('nama_pengajar');
			$nip = $this->input->post('nip');
			$email = $this->input->post('email');
			$no_hp = $this->input->post('no_hp');
			$agama = $this->input->post('agama');
			$jenis_kelamin = $this->input->post('j_k');

			// superglobal variabel dr php
			$photo = $_FILES['photo']['name'];
			if ($photo) {
				$config['upload_path'] = './assets/photo';
				$config['allowed_types'] = 'jpg|jpeg|png|tiff';
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('photo')) {
					echo "Photo gagal di upload";
				} else {
					$photo = $this->upload->data('file_name');
					$this->db->set('image', $photo);
				}
			}

			$data = array(
				'nama' => $nama,
				'nip' => $nip,
				'email' => $email,
				'no_hp' => $no_hp,
				'agama' => $agama,
				'j_k' => $jenis_kelamin
			);

			$where = array(
				'id' => $id
			);
			$this->load->model('M_pengajar');
			$this->M_pengajar->updateData('educators', $data, $where);

			$this->session->set_flashdata('update-pengajar-sukses', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data berhasil di tambahkan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('backend/pengajar');
		}
	}

	public function _rulesUpdate()
	{
		$this->form_validation->set_rules('nama_pengajar', 'Nama Pengajar', 'trim|required');
		$this->form_validation->set_rules('nip', 'NIP', 'trim|required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('no_hp', 'No HP', 'trim|required|numeric');
		$this->form_validation->set_rules('agama', 'Agama', 'trim|required');
		$this->form_validation->set_rules('j_k', 'Jenis Kelamin', 'trim|required');
	}

	public function tambah_data_pengajar()
	{
		$this->load->view('admin_template/header');
		$this->load->view('pengajar/tambah_data_pengajar');
		$this->load->view('admin_template/footer');
	}

	public function tambahDataPengajarAksi()
	{
		$this->load->model('M_pengajar');
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambah_data_pengajar();
		} else {
			// store isian dari form disini
			$nama = $this->input->post('nama_pengajar');
			$nip = $this->input->post('nip');
			$password = $this->input->post('password');
			$email = $this->input->post('email');
			$no_hp = $this->input->post('no_hp');
			$agama = $this->input->post('agama');
			$tanggal_masuk = $this->input->post('tanggal_masuk');
			$jenis_kelamin = $this->input->post('jenis_kelamin');

			$birthday = $this->input->post('birthday');

			// superglobal variabel dr php
			$photo = $_FILES['photo']['name'];
			if ($photo = '') {
				// apa
			} else {
				$config['upload_path'] = './assets/photo';
				$config['allowed_types'] = 'jpg|jpeg|png|tiff';
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('photo')) {
					echo "Photo gagal di upload";
				} else {
					$photo = $this->upload->data('file_name');
				}
			}

			$data = array(
				'nama' => $nama,
				'nip' => $nip,
				'password' => MD5($password),
				'email' => $email,
				'no_hp' => $no_hp,
				'agama' => $agama,
				'tgl_lahir' => $birthday,
				'j_k' => $jenis_kelamin,
				'image' => $photo,
				'is_active' => '1',
				'date_created' => $tanggal_masuk
			);

			$this->M_pengajar->insertData($data, 'educators');
			$this->session->set_flashdata('tambah-pengajar-sukses', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data berhasil di tambahkan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('backend/pengajar');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nama_pengajar', 'Nama Pengajar', 'trim|required');
		$this->form_validation->set_rules('nip', 'NIP', 'trim|required|numeric');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('no_hp', 'No HP', 'trim|required|numeric');
		$this->form_validation->set_rules('agama', 'Agama', 'trim|required');
		$this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('birthday', 'Tanggal Lahir', 'trim|required');
	}
}
