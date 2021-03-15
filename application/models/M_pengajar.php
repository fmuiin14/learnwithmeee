<?php

class M_pengajar extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->query("SELECT * FROM educators WHERE is_active = '1'");
    }
}
