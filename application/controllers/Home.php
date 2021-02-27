<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['navbar'] = $this->load->view('navbar', "", TRUE);
		$this->load->view('templates/header');
		$this->load->view('home', $data);
		$this->load->view('templates/footer');
	}

	public function about()
	{
		$data['navbar'] = $this->load->view('navbar', "", TRUE);
		$this->load->view('templates/header');
		$this->load->view('about', $data);
		$this->load->view('templates/footer');
	
	}

	public function course()
	{
		$data['navbar'] = $this->load->view('navbar', "", TRUE);
		$this->load->view('templates/header');
		$this->load->view('course', $data);
		$this->load->view('templates/footer');
	}

	public function contact()
	{
		$data['navbar'] = $this->load->view('navbar', "", TRUE);
		$this->load->view('templates/header');
		$this->load->view('contact', $data);
		$this->load->view('templates/footer');
	}
}
