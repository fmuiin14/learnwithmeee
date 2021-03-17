<?php

class ChangePassword_model extends CI_Model
{

    function checking_old_password($user_id, $old_pass)
    {
        $this->db->where('id_user', $user_id);
        $this->db->where('password', $old_pass);
        $query = $this->db->get('users');
        return $query;
    }

    function change_password($user_id, $new_pass)
    {
        $this->db->set('password', $new_pass);
        $this->db->where('id_user', $user_id);
        $this->db->update('users');
    }

    function checking_old_password_siswa($user_id, $old_pass)
    {
        $this->db->where('id_user', $user_id);
        $this->db->where('password', $old_pass);
        $query = $this->db->get('users');
        return $query;
    }

    function change_password_siswa($user_id, $new_pass)
    {
        $this->db->set('password', $new_pass);
        $this->db->where('id_user', $user_id);
        $this->db->update('users');
    }
}
