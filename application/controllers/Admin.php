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

	


}
