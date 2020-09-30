<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kurir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("administrator/m_kurir");
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["kurir"] = $this->m_kurir->getAll();
        $this->load->view("templates/unitkerja_header");
        $this->load->view("administrator/v_kurir", $data);
        $this->load->view("templates/unitkerja_footer");
    }

    public function add()
    {
        $kurir = $this->m_kurir;
        $validation  = $this->form_validation;
        $validation->set_rules($kurir->rules());

        if ($validation->run()) {
            $kurir->save();
        }

        redirect("kurir");
        $this->session->set_flashdata('success', 'Berhasil');
    }

    public function edit($nama = null)
    {
        if (!isset($nama)) redirect('user');

        $kurir = $this->m_kurir;
        $validation = $this->form_validation;
        $validation->set_rules($kurir->rules());

        if ($validation->run()) {
            $kurir->update();
            $this->session->set_flashdata('success', 'Berhasil');
        }

        $data["kurir"] = $kurir->getById($nama);
        if (!$data["kurir"]) show_404();

        $this->load->view("kurir", $data);
    }

    public function delete($nama = null)
    {
        if (!isset($nama)) show_404();

        if ($this->m_kurir->delete($nama)) {
            redirect(site_url('kurir'));
        }
    }
}
