<?php

class M_pengajar extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->query("SELECT * FROM educators WHERE is_active = '1'");
    }

    public function insertData($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function detail_pengajar($id = null)
    {
        $query = $this->db->get_where('educators', array('id' => $id))->row();
        return $query;
    }

    public function update_pengajar($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function updateData($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_pengajar($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
