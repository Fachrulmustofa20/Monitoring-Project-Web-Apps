<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_Model extends CI_Model
{
    public function get_user($email)
    {
        $result = $this->db->get_where('user', ['email' => $email])->row_array();
        return $result;
    }
}
