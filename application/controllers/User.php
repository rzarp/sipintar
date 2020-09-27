<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_user");
        $this->load->model("m_unitkerja");
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["unitKerja"] = $this->m_unitkerja->getAll();
        $data["user"] = $this->m_user->getAll();
        $data["kode"] = $this->m_user->getKode();
        $this->load->view("templates/unitkerja_header");
        $this->load->view("administrator/v_user", $data);
        $this->load->view("templates/unitkerja_footer");
    }

    public function add()
    {
        $user = $this->m_user;
        $validation  = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->save();
        }

        redirect("user");
        $this->session->set_flashdata('success', 'Berhasil');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('user');

        $user = $this->m_user;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->update();
            $this->session->set_flashdata('success', 'Berhasil');
        }

        $data["user"] = $user->getById($id);
        if (!$data["user"]) show_404();

        $this->load->view("user", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->m_user->delete($id)) {
            redirect(site_url('user'));
        }
    }
}
