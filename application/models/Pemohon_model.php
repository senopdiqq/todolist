<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemohon_model extends CI_Model
{
    public function getAllPemohon()
    {
        return $this->db->get('tb_pemohon')->result();
    }

    public function store()
    {
        $arr = array('nama', 'nik', 'alamat', 'pekerjaan', 'umur', 'jenis_kelamin');

        $data = array(
            'nama'          => $this->input->post('nama', true),
            'nik'           => $this->input->post('nik', true),
            'alamat'        => $this->input->post('alamat', true),
            'pekerjaan'     => $this->input->post('pekerjaan', true),
            'umur'          => $this->input->post('umur', true),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', true)
        );

        $this->db->insert('tb_pemohon', $data);
    }
}
