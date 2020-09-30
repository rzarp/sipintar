<?php

class Data_penerima extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('administrator/m_unitkerja');
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->library('form_validation');
    }

    function index()
    {
        //echo "Ekspedisi";
        $data["unitkerja"] = $this->m_unitkerja->getAll();
        $this->load->view("templates/unitkerja_header");
        $this->load->view("ekspedisi/v_penerima", $data); //
        $this->load->view("templates/unitkerja_footer");
    }
}
