<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('project_model', 'project');
        check_login();
    }
    public function index($id = null)
    {
        $data['title'] = 'Dashboard';
        $data['tampil'] = $this->project->getAll($id)->result_array();
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['totalAll'] = $this->project->totalAll();
        $data['totalPresale'] = $this->project->totalPresale();
        $data['totalWorkorder'] = $this->project->totalWorkorder();
        $data['totalUser'] = $this->project->totalUser();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
        //$this->load->view('dashboard');
    }

    public function presale($id = null)
    {
        $data['title'] = 'Presale';
        $data['presale'] = $this->project->get_presale();
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $data['totalAll'] = $this->project->totalAll();
        $data['totalPresale'] = $this->project->totalPresale();
        $data['totalWorkorder'] = $this->project->totalWorkorder();
        $data['totalUser'] = $this->project->totalUser();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('presale', $data);
        $this->load->view('templates/footer');
    }
    public function workorder($id = null)
    {
        $data['title'] = 'Workorder';

        $data['workorder'] = $this->project->get_workorder();
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $data['totalAll'] = $this->project->totalAll();
        $data['totalPresale'] = $this->project->totalPresale();
        $data['totalWorkorder'] = $this->project->totalWorkorder();
        $data['totalUser'] = $this->project->totalUser();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('workorder', $data);
        $this->load->view('templates/footer');
    }
    public function report($id = null)
    {
        $data['title'] = 'Report';

        $data['tampil'] = $this->project->getAll($id)->result_array();
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('report', $data);
        $this->load->view('templates/footer');
    }
}
