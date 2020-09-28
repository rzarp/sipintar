<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unitkerja extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("administrator/m_unitkerja");
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["unitKerja"] = $this->m_unitkerja->getAll();
        $this->load->view("templates/unitkerja_header");
        $this->load->view("administrator/v_unitkerja", $data);
        $this->load->view("templates/unitkerja_footer");
    }

    public function add()
    {
        $unitkerja = $this->m_unitkerja;
        $validation  = $this->form_validation;
        $validation->set_rules($unitkerja->rules());

        if ($validation->run()) {
            $unitkerja->save();
        }

        redirect("administrator/unitkerja");
        $this->session->set_flashdata('success', 'Berhasil');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('administrator/unitkerja');

        $unitkerja = $this->m_unitkerja;
        $validation = $this->form_validation;
        $validation->set_rules($unitkerja->rules());

        if ($validation->run()) {
            $unitkerja->update();
            $this->session->set_flashdata('success', 'Berhasil');
        }

        $data["unitkerja"] = $unitkerja->getById($id);
        if (!$data["unitkerja"]) show_404();

        $this->load->view("administrator/unitkerja", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->m_unitkerja->delete($id)) {
            redirect(site_url('unitkerja'));
        }
    }
}
