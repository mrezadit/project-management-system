<?php

defined('BASEPATH') or exit('No direct script access allowed');

class LoginModel extends CI_Model
{
    //fungsi cek session logged in
    public function is_logged_in()
    {
        return $this->session->userdata('user_id');
    }

    //fungsi cek level
    public function is_role()
    {
        return $this->session->userdata('role');
    }

    //fungsi check login
    public function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else {
            return $query->result();
        }
    }
}
