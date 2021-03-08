<?php 

class M_siswa extends CI_Model {

    public function tampil_data() {
        return $this->db->get('siswa');
    }

    public function delete_siswa($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}

?>