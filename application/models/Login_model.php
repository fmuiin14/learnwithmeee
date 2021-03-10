<?php 

class Login_model extends CI_Model {

    // cek email dan passwd dosen
    function auth_pengajar($username, $password) {
        $query = $this->db->query("SELECT * FROM admin WHERE email='$username' AND password=MD5('$password') LIMIT 1");
        return $query;
    }

    // cek email dan passwd siswa
    public function auth_siswa($username, $password) {
        $query = $this->db->query("SELECT * FROM siswa WHERE email='$username' AND password=MD5('$password') LIMIT 1");
    }
}

?>