<?php

class Datauser extends CI_Controller
{
public function index()
    {
        
        $this->load->view("templates/unitkerja_header");
        $this->load->view("administrator/v_datauser");
        $this->load->view("templates/unitkerja_footer");
    }
}