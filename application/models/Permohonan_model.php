<?php
defined('BASEPATH') or exit('No direct script access allowed !');

class Permohonan_model extends CI_Model
{

    public function getAllPermohonan()
    {
        return $this->db->get('tb_permohonan')->result();
    }

    public function getAllPemohon()
    {
        return $this->db->get_where('tb_pemohon', ['status_pemohon' => 'terverifikasi'])->result();
    }

    public function getNibByAjax()
    {
        $idPemohon = $this->input->post('pemohon', true);
        $this->db->join('tb_desa', 'tb_tanah.idDesa = tb_desa.idDesa');
        return $this->db->get_where('tb_tanah', ['idPemohon' => $idPemohon])->result();
    }
}
