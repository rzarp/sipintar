<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    function index()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('login');
        $this->load->view('templates/auth_footer');
    }

    function aksi_login()
    {
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars($this->input->post('password'));

        $cek = $this->m_login->auth($username, $password);
        if ($cek->num_rows > 0) {
            $data = $cek->row_array();
            $this->session->set_userdata('status', "login");
            if ($data['role'] == '1') {
                //admin
                $this->session->set_userdata('nama', $username);
                redirect('admin');
            } else if ($data['role'] == '2') {
                //ekspedisi
                $this->session->set_userdata('nama', $username);
                redirect('ekspedisi');
            } else if ($data['role'] == '3') {
                //user
                $this->session->set_userdata('nama', $username);
                redirect('t_user');
            } else {
                redirect(base_url('login'));
            }
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
