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

    public function delete_siswa($id)
    {
        $this->load->model('m_siswa');
        $where = array('id_user' => $id);
        $this->m_siswa->delete_siswa($where, 'users');
        $this->session->set_flashdata('user-delete', 'berhasil');
        redirect('backend/siswa');
    }

    public function detail_siswa($id)
    {
        $this->load->model('m_siswa');
        $where = array('id' => $id);
        $detail = $this->m_siswa->detail_siswa($id);
        $data['detail'] = $detail;
        // var_dump($data['detail']);
        // die();

        $this->load->view('admin_template/header');
        $this->load->view('admin/detail_siswa', $data);
        $this->load->view('admin_template/footer');
    }

    public function update_siswa($id)
    {
        $this->load->model('m_siswa');
        $where = array('id_user' => $id);
        $data['users'] = $this->m_siswa->update_siswa($where, 'users')->result();

        $this->load->view('admin_template/header');
        $this->load->view('admin/update_siswa', $data);
        $this->load->view('admin_template/footer');
    }

    public function update_siswa_asli() {
        // isinya
    }

    public function tambah_data_siswa()
    {
        $this->load->view('admin_template/header');
        $this->load->view('admin/tambah_data_siswa');
        $this->load->view('admin_template/footer');
    }

    public function tambahDataSiswaAksi()
    {
        $this->load->model('M_siswa');
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_data_siswa();
        } else {
            // store isian dari form disini
            $nama = $this->input->post('nama_siswa');
            $nis = $this->input->post('nis');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            $no_hp = $this->input->post('no_hp');
            $agama = $this->input->post('agama');
            $jenis_kelamin = $this->input->post('jenis_kelamin');

            $birthday = $this->input->post('birthday');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tanggal_masuk = $this->input->post('tanggal_masuk');

            // superglobal variabel dr php
            $photo = $_FILES['photo']['name'];
            if ($photo = '') {
                // apa
            } else {
                $config['upload_path'] = './assets/photo';
                $config['allowed_types'] = 'jpg|jpeg|png|tiff';
                $config['encrypt_name'] = TRUE;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('photo')) {
                    echo "Photo gagal di upload";
                } else {
                    $photo = $this->upload->data('file_name');
                }
            }

            $data = array(
                'nama' => $nama,
                'nis' => $nis,
                'password' => MD5($password),
                'email' => $email,
                'no_hp' => $no_hp,
                'agama' => $agama,
                'jenis_kelamin' => $jenis_kelamin,
                'birthday' => $birthday,
                'tempat_lahir' => $tempat_lahir,
                'user_level' => '2',
                'image' => $photo,
                'is_active' => '1',
                'date_created' => $tanggal_masuk
            );

            $this->M_siswa->insertData($data, 'users');
            $this->session->set_flashdata('tambah-siswa-sukses', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data berhasil di tambahkan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('backend/siswa');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'trim|required');
        $this->form_validation->set_rules('nis', 'NIS', 'trim|required|numeric');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('no_hp', 'No HP', 'trim|required|numeric');
        $this->form_validation->set_rules('agama', 'Agama', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('birthday', 'Tanggal Lahir', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'trim|required');
    }
}
