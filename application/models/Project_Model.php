<?php
class Project_Model extends CI_Model
{
    public function getAll($id = null)
    {
        $this->db->select('tb_project.*,tb_category.name as cat');
        $this->db->from('tb_project');
        $this->db->join('tb_category', 'tb_category.id_category = tb_project.category');
        $this->db->order_by('id_project', 'ASC');
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
        $this->db->order_by('id_project', 'ASC');
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
        $this->db->order_by('id_project', 'ASC');
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
    public function total_bydate()
    {
        $query = $this->db->query("SELECT sum(case when category = '1' then 1 else 0 end) AS presale,
        sum(case when category = '2' then 1 else 0 end) AS workorder
        FROM tb_project
        GROUP BY created_at");
        return $query->result_array();
    }
    public function get_date()
    {
        $query = $this->db->query("SELECT created_at FROM tb_project GROUP BY created_at ORDER BY created_at ASC");
        return $query->result_array();
    }
}
