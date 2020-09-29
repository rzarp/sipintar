<?php

class Kirim extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user/m_kirim');
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->library('form_validation');
    }

    function index()
    {
        //$data["user"] = $this->m_kirim->getAll();
        $this->load->view("templates/unitkerja_header");
        $this->load->view("user/v_kirim"); //, $data
        $this->load->view("templates/unitkerja_footer");
    }

    public function add()
    {
        $kirim = $this->m_kirim;
        $validation  = $this->form_validation;
        $validation->set_rules($kirim->rules());

        if ($validation->run()) {
            $kirim->save();
        }

        redirect("user/kirim");
        $this->session->set_flashdata('success', 'Berhasil');
    }
}
