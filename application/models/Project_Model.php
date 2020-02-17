<?php
class Project_Model extends CI_Model
{
    public function getAll($id = null)
    {
        $this->db->select('tb_project.*,tb_category.name as cat');
        $this->db->from('tb_project');
        $this->db->join('tb_category', 'tb_category.id_category = tb_project.category');
        if ($id != null) {
            $this->db->where('id_project', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function get_presale()
    {
        $this->db->select('tb_project.*,tb_category.name as cat');
        $this->db->from('tb_project');
        $this->db->join('tb_category', 'tb_category.id_category = tb_project.category');
        $this->db->where('category', 1);
        $query = $this->db->get();
        $data = $query->result_array();
        return $data;
    }
    public function get_workorder()
    {
        $this->db->select('tb_project.*,tb_category.name as cat');
        $this->db->from('tb_project');
        $this->db->join('tb_category', 'tb_category.id_category = tb_project.category');
        $this->db->where('category', 2);
        $query = $this->db->get();
        $data = $query->result_array();
        return $data;
    }
    public function totalAll()
    {
        $query = $this->db->get('tb_project');
        $total = $query->num_rows();
        return $total;
    }
    public function totalPresale()
    {
        $this->db->where('category', 1);
        $this->db->from('tb_project');
        $query = $this->db->get()->num_rows();
        return $query;
    }
    public function totalWorkorder()
    {
        $this->db->where('category', 2);
        $this->db->from('tb_project');
        $query = $this->db->get()->num_rows();
        return $query;
    }
    public function totalUser()
    {
        $this->db->where('is_active', 1);
        $this->db->from('user');
        $query = $this->db->get()->num_rows();
        return $query;
    }
}
