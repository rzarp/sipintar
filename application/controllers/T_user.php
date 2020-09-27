<?php

class T_user extends CI_Controller
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
        echo "User";
    }
}
