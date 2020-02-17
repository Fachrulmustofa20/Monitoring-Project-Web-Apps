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

    public function download($id = null)
    {
        # code...
        $data['tampil'] = $this->project->getAll($id)->result_array();
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("BAMS");
        $object->getProperties()->setLastModifiedBy("BAMS");
        $object->getProperties()->setTitle("BAMS");

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'DATE');
        $object->getActiveSheet()->setCellValue('C1', 'NAME');
        $object->getActiveSheet()->setCellValue('D1', 'ANALYST');
        $object->getActiveSheet()->setCellValue('E1', 'CATEGORY');

        $baris = 2;
        $no = 1;

        foreach ($data['tampil'] as $row) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no);
            $object->getActiveSheet()->setCellValue('B' . $baris, $row['date']);
            $object->getActiveSheet()->setCellValue('C' . $baris, $row['name']);
            $object->getActiveSheet()->setCellValue('D' . $baris, $row['analyst']);
            $object->getActiveSheet()->setCellValue('E' . $baris, $row['cat']);
            $baris++;
            $no++;
        }

        $object->getActiveSheet()->setTitle("Data Report");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Data_Report.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }
}
