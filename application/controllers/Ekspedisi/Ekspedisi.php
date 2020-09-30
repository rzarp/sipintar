<?php

class Ekspedisi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //$this->load->model('user/m_ekspedisi');
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->library('form_validation');
    }

    function index()
    {
        //echo "Ekspedisi";
        //$data["ekspe"] = $this->m_ekspedisi->getAll();
        $this->load->view("templates/dashboard_header");
        $this->load->view("ekspedisi/v_ekspedisi"); //, $data
        $this->load->view("templates/dashboard_footer");
    }
}
