<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemohon_model extends CI_Model
{
    public function getAllPemohon()
    {
        return $this->db->get('tb_pemohon')->result();
    }

    public function getData($id)
    {
        return $this->db->get_where('tb_pemohon', ['idPemohon' => $id])->row();
    }

    public function searchUniqueNIK($nik, $id)
    {
        $this->db->where_not_in('idPemohon', $id);
        $this->db->where('nik', $nik);
        return $this->db->get('tb_pemohon')->row();
    }

    public function store()
    {
        $data = array(
            'nama'              => $this->input->post('nama', true),
            'nik'               => $this->input->post('nik', true),
            'alamat'            => $this->input->post('alamat', true),
            'pekerjaan'         => $this->input->post('pekerjaan', true),
            'umur'              => $this->input->post('umur', true),
            'jenis_kelamin'     => $this->input->post('jenis_kelamin', true),
            'status_pemohon'    => 'belum_terverifikasi',
            'keterangan'        => NULL
        );

        $this->db->insert('tb_pemohon', $data);
    }

    public function update()
    {
        $data = array(
            'nama'              => $this->input->post('nama', true),
            'nik'               => $this->input->post('nik', true),
            'alamat'            => $this->input->post('alamat', true),
            'pekerjaan'         => $this->input->post('pekerjaan', true),
            'umur'              => $this->input->post('umur', true),
            'jenis_kelamin'     => $this->input->post('jenis_kelamin', true),
            'status_pemohon'    => 'belum_terverifikasi',
            'keterangan'        => NULL
        );

        $this->db->where('idPemohon', $this->input->post('idPemohon'))->update('tb_pemohon', $data);
    }
}
