<?php
class Siswa extends CI_Controller
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
        $this->load->model('M_siswa');

        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $data['user'] = $this->M_siswa->tampil_data()->result();


        $this->load->view('admin_template/header');
        $this->load->view('admin/data_siswa', $data);
        $this->load->view('admin_template/footer');
    }
}
