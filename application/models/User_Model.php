<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Model extends CI_Model
{
    public function get_role()
    {
        $hasil = $this->db->query("SELECT * FROM user_role");
        return $hasil;
    }
}
