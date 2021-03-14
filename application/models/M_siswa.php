<?php

class M_siswa extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->query("SELECT * FROM users WHERE user_level = '2'");
    }

    public function delete_siswa($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function insertData($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function detail_siswa($id = null)
    {
        $query = $this->db->get_where('users', array('id_user' => $id))->row();
        return $query;
    }

    public function updateData($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function update_siswa($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
