<?php 

class M_siswa extends CI_Model {

    public function tampil_data() {
        return $this->db->get('users');
    }

    public function delete_siswa($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function insertData($data, $table) {
        $this->db->insert($table, $data);
    }
}

?>