<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    private $_table = "datauser";
    private $_uk = "unitKerja";
    private $_bc = "kodebc";


    public $asal;
    public $nama;
    public $role;
    public $npp;
    public $posisi;
    public $kode;
    public $email;
    public $pass;
    public $alamat;

    public function rules()
    {
        return [
            [
                'field' => 'asal',
                'label' => 'Asal',
                'rules' => 'required'
            ],

            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],

            [
                'field' => 'role',
                'label' => 'Role',
                'rules' => 'required'
            ],

            [
                'field' => 'npp',
                'label' => 'Npp',
                'rules' => 'required'
            ],

            [
                'field' => 'posisi',
                'label' => 'Posisi',
                'rules' => 'required'
            ],

            [
                'field' => 'kode',
                'label' => 'Kode',
                'rules' => 'required'
            ],

            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            ],

            [
                'field' => 'pass',
                'label' => 'Pass',
                'rules' => 'required'
            ],

            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["npp" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->asal = $post["asal"];
        $this->role = $post["role"];
        $this->nama = $post["nama"];
        $this->npp = $post["npp"];
        $this->posisi = $post["posisi"];
        $this->kode = $post["kode"];
        $this->email = $post["email"];
        $this->pass = $post["pass"];
        $this->alamat = $post["alamat"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->asal = $post["asal"];
        $this->nama = $post["nama"];
        $this->npp = $post["npp"];
        $this->posisi = $post["posisi"];
        $this->kode = $post["kode"];
        $this->email = $post["email"];
        $this->pass = $post["pass"];
        $this->alamat = $post["alamat"];
        return $this->db->update($this->_table, $this, array('npp' => $post['npp']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("npp" => $id));
    }

    public function getKode($kode)
    {
        return $this->db->get_where($this->_bc, ["kodeUK" => $kode])->result();
    }
}
