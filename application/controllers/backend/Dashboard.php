<?php
class Dashboard extends CI_Controller
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
		$siswa = $this->db->query("SELECT * FROM users WHERE user_level = '2'");
		$data['siswa'] = $siswa->num_rows();
		$this->load->view('admin_template/header');
		$this->load->view('backend/index', $data);
		$this->load->view('admin_template/footer');
	}
}
