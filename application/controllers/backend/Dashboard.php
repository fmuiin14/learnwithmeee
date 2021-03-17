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

		$idnya = $this->session->userdata('id');

		$data['nexttgl'] = $this->db->query("SELECT * FROM learning_histories WHERE user_id = '$idnya' AND pertemuan_selanjutnya > now() 
		ORDER BY pertemuan_selanjutnya ASC LIMIT 1")->result();

		// var_dump($data['nexttgl']);
		// die();

		// $data['nextsesi'] = $this->db->query("SELECT * FROM learning_histories WHERE user_id = '$idnya' AND pertemuan_ke > now() 
		// ORDER BY pertemuan_selanjutnya ASC LIMIT 1")->result();



		$this->load->view('admin_template/header');
		$this->load->view('backend/index', $data);
		$this->load->view('admin_template/footer');
	}
}
