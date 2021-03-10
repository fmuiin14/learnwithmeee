<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where(
			'siswa',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$this->load->view('user/index');
	}
}
