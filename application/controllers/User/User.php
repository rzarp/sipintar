<?php

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //$this->load->model('user/m_user');
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->library('form_validation');
    }

    function index()
    {
        //$data["user"] = $this->m_user->getAll();
        $this->load->view("templates/dashboard_header");
        $this->load->view("user/v_dashboarduser"); //, $data
        $this->load->view("templates/dashboard_footer");
    }
}
