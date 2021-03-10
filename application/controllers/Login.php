<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		// $this->load->view('template_backend/header');
		$this->load->view('backend/login');
		// $this->load->view('template_backend/footer');
	}
}
