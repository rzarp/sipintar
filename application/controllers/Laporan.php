<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_unitkerja");
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["unitKerja"] = $this->m_unitkerja->getAll();
        $this->load->view("templates/unitkerja_header");
        $this->load->view("administrator/v_laporan", $data);
        $this->load->view("templates/unitkerja_footer");
    }
}
