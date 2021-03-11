<?php

defined('BASEPATH') or exit('No direct script access allowed !');

class Tanah_model extends CI_Model
{

    public function getAllTanah()
    {
        $this->db->select('*,tb_pemohon.nama as nama_pemohon');
        $this->db->from('tb_tanah');
        $this->db->join('tb_pemohon', 'tb_tanah.idPemohon = tb_pemohon.idPemohon');
        $this->db->join('tb_desa', 'tb_tanah.idDesa = tb_desa.idDesa');

        return $this->db->get()->result();
    }


    public function getAllPemohon()
    {
        return $this->db->where("status_pemohon", "terverifikasi")->get('tb_pemohon')->result();
    }

    public function getAllKecamatan()
    {
        return $this->db->get('tb_kecamatan')->result();
    }

    public function getTanah($nib)
    {
        return $this->db
            ->join('tb_desa', 'tb_desa.idDesa = tb_tanah.idDesa')
            ->where('nib', $nib)->get('tb_tanah')->row();
    }

    public function store()
    {

        $data = array(
            'nib'           => $this->input->post('nib', true),
            'idPemohon'     => $this->input->post('idPemohon', true),
            'idDesa'        => $this->input->post('idDesa', true),
            'luas_tanah'    => $this->input->post('luas_tanah', true),
            'letak_tanah'   => $this->input->post('letak_tanah', true),
            'rt'            => $this->input->post('rt', true),
            'rw'            => $this->input->post('rw', true)
        );

        $this->db->insert('tb_tanah', $data);
    }

    public function edit($nib)
    {
        $data = array(
            'idPemohon'     => $this->input->post('idPemohon', true),
            'idDesa'        => $this->input->post('idDesa', true),
            'luas_tanah'    => $this->input->post('luas_tanah', true),
            'letak_tanah'   => $this->input->post('letak_tanah', true),
            'rt'            => $this->input->post('rt', true),
            'rw'            => $this->input->post('rw', true)
        );

        $this->db->where('nib', $nib)->update('tb_tanah', $data);
    }

    public function getDesaByAjax()
    {
        $idKecamatan = $this->input->post('idKecamatan', true);
        return $this->db->get_where('tb_desa', ['idKecamatan' => $idKecamatan])->result();
    }
}
