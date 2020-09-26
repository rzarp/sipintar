<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_unitkerja extends CI_Model
{
    private $_table = "unitKerja";

    public $kodeUK;
    public $namaUK;
    public $alamatUK;
    public $kelurahan;
    public $kecamatan;
    public $kota;
    public $provinsi;
    public $negara;
    public $kodePos;

    public function rules()
    {
        return [
            [
                'field' => 'kode',
                'label' => 'Kode',
                'rules' => 'required'
            ],

            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],

            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ],

            [
                'field' => 'kelurahan',
                'label' => 'Kelurahan',
                'rules' => 'required'
            ],

            [
                'field' => 'kecamatan',
                'label' => 'Kecamatan',
                'rules' => 'required'
            ],

            [
                'field' => 'kota',
                'label' => 'Kota',
                'rules' => 'required'
            ],

            [
                'field' => 'provinsi',
                'label' => 'Provinsi',
                'rules' => 'required'
            ],

            [
                'field' => 'negara',
                'label' => 'Negara',
                'rules' => 'required'
            ],

            [
                'field' => 'kodePos',
                'label' => 'Kodepos',
                'rules' => 'required'
            ],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["kode" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kodeUK = $post["kode"];
        $this->namaUK = $post["nama"];
        $this->alamatUK = $post["alamat"];
        $this->kelurahan = $post["kelurahan"];
        $this->kecamatan = $post["kecamatan"];
        $this->kota = $post["kota"];
        $this->provinsi = $post["provinsi"];
        $this->negara = $post["negara"];
        $this->kodePos = $post["kodePos"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kodeUK = $post["kode"];
        $this->namaUK = $post["nama"];
        $this->alamatUK = $post["alamat"];
        $this->kelurahan = $post["kelurahan"];
        $this->kecamatan = $post["kecamatan"];
        $this->kota = $post["kota"];
        $this->provinsi = $post["provinsi"];
        $this->negara = $post["negara"];
        $this->kodePos = $post["kodePos"];
        return $this->db->update($this->_table, $this, array('kode' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("kode" => $id));
    }
}
