<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_kurir extends CI_Model
{
    private $_table = "kurir";

    public $nama;

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($nama)
    {
        return $this->db->get_where($this->_table, ["nama" => $nama])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama = $post["nama"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nama = $post["nama"];
        return $this->db->update($this->_table, $this, array('nama' => $post['nama']));
    }

    public function delete($nama)
    {
        return $this->db->delete($this->_table, array("nama" => $nama));
    }
}
