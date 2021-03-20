<?php
class About extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged') != TRUE) {
			$url = base_url('login');
			redirect($url);
		}
	}

	public function developer()
	{
		$this->load->view('admin_template/header');
		$this->load->view('backend/about_developer');
		$this->load->view('admin_template/footer');
	}

	public function learnwithme()
	{
		$this->load->view('backend/about_learnwithme');
	}
}
