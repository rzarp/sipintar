<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("administrator/m_user");
        $this->load->model("administrator/m_unitkerja");
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["unitKerja"] = $this->m_unitkerja->getAll();
        $data["user"] = $this->m_user->getAll();
<<<<<<< HEAD
        //$data["kode"] = $this->m_user->getKode();
=======
        $data["kode"] = $this->m_user->getKode();
>>>>>>> 5dbb1ef611502d4961e61188ad8b596a44b7953c
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

<<<<<<< HEAD
        redirect("administrator/user");
=======
        redirect("user");
>>>>>>> 5dbb1ef611502d4961e61188ad8b596a44b7953c
        $this->session->set_flashdata('success', 'Berhasil');
    }

    public function edit($id = null)
    {
<<<<<<< HEAD
        if (!isset($id)) redirect('administrator/user');
=======
        if (!isset($id)) redirect('user');
>>>>>>> 5dbb1ef611502d4961e61188ad8b596a44b7953c

        $user = $this->m_user;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->update();
            $this->session->set_flashdata('success', 'Berhasil');
        }

        $data["user"] = $user->getById($id);
        if (!$data["user"]) show_404();

<<<<<<< HEAD
        $this->load->view("administrator/user", $data);
=======
        $this->load->view("user", $data);
>>>>>>> 5dbb1ef611502d4961e61188ad8b596a44b7953c
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->m_user->delete($id)) {
<<<<<<< HEAD
            redirect(site_url('administrator/user'));
        }
    }

    public function getkode()
    {
        function processDrpdown($selectedVal) {
            $user = $this->m_user;
            $kode = $selectedVal;
            $data["kode"] = $user->getKode($kode);
            $this->load->view("administrator/user", $data);
        }        

        if ($_POST['dropdownValue']){
            //call the function or execute the code
            processDrpdown($_POST['dropdownValue']);
=======
            redirect(site_url('user'));
>>>>>>> 5dbb1ef611502d4961e61188ad8b596a44b7953c
        }
    }
}
