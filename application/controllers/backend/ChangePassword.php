<?php
class ChangePassword extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != TRUE) {
            $url = base_url('login');
            redirect($url);
        }
        $this->load->model('ChangePassword_model','changepassword_model');
    }

    public function index()
    {
        // code here
    }

    public function admin_password()
    {
        $this->load->view('admin_template/header');
        $this->load->view('backend/change_password');
        $this->load->view('admin_template/footer');
    }

    public function change_admin_password()
    {
        $user_id = $this->session->userdata('id');
        if (!empty($user_id)) {
            $old_password = htmlspecialchars($this->input->post('password_lama', TRUE), ENT_QUOTES);
            $new_password = htmlspecialchars($this->input->post('password_baru', TRUE), ENT_QUOTES);
            $conf_password = htmlspecialchars($this->input->post('password_konfirmasi', TRUE), ENT_QUOTES);
            $old_pass = md5($old_password);
            $new_pass = md5($new_password);
            $checking_old_password = $this->changepassword_model->checking_old_password($user_id, $old_pass);
            if ($checking_old_password->num_rows() > 0) {
                if ($new_password == $conf_password) {
                    $this->changepassword_model->change_password($user_id, $new_pass);
                    $this->session->set_flashdata('sukses', 'success');
                    redirect('backend/ChangePassword/admin_password');
                } else {
                    $this->session->set_flashdata('tidak-sesuai', 'tidak-sesuai');
                    redirect('backend/ChangePassword/admin_password');
                }
            } else {
                $this->session->set_flashdata('password-salah', 'password-salah');
                redirect('backend/ChangePassword/admin_password');
            }
        } else {
            $this->session->set_flashdata('userdata-tidak', 'userdata-tidak');
            redirect('backend/ChangePassword/admin_password');
        }
    }
}
