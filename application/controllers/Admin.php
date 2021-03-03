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

	public function index() {
		$data['user'] = $this->db->get_where('admin', 
		['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin_template/header');
		$this->load->view('admin/index');
		$this->load->view('admin_template/footer');
	}

	


}
