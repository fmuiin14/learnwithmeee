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
}
