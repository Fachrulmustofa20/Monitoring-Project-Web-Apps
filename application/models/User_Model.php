<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Model extends CI_Model
{
    public function get_role()
    {
        $hasil = $this->db->query("SELECT * FROM user_role");
        return $hasil;
    }
    public function get_user()
    {
        $this->db->select('user.*, user_role.role as role');
        $this->db->from('user');
        $this->db->join('user_role', 'user_role.id_role = user.role_id');
        $this->db->where('is_active', 1);
        $query = $this->db->get();
        $data = $query->result_array();
        return $data;
    }

    public function delete($id)
    {
        return $this->db->delete('user', array("id" => $id));
    }

    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function edit_user($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }
}
