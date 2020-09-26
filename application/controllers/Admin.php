<?php

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }

    function index()
    {
        $this->load->view('templates/dashboard_header');
        $this->load->view('dashboard');
        $this->load->view('templates/dashboard_footer');
    }
}
