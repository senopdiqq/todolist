<?php
defined('BASEPATH') or exit('No direct script access allowed!');

class CetakBuktiVerif_model extends CI_Model
{
    public function getCetak()
    {
        $this->db->select('*, tb_desa.nama as nama_desa');
        $this->db->join('tb_tanah', 'tb_tanah.nib = tb_permohonan.nib');
        $this->db->join('tb_desa', 'tb_tanah.idDesa = tb_desa.idDesa');
        $this->db->join('tb_pemohon', 'tb_pemohon.idPemohon = tb_tanah.idPemohon');
        $this->db->where('tb_permohonan.status_permohonan', 'terverifikasi');
        return $this->db->get('tb_permohonan')->result();
    }

    public function getProfil()
    {
        return $this->db->get('tb_profil_ptsl')->row();
    }

    public function cetak($nib)
    {
        $this->db->select('*, tb_desa.nama as nama_desa');
        $this->db->join('tb_tanah', 'tb_tanah.nib = tb_permohonan.nib');
        $this->db->join('tb_desa', 'tb_tanah.idDesa = tb_desa.idDesa');
        $this->db->join('tb_pemohon', 'tb_pemohon.idPemohon = tb_tanah.idPemohon');
        $this->db->where('tb_permohonan.status_permohonan', 'terverifikasi');
        $this->db->where('tb_permohonan.nib', $nib);
        return $this->db->get('tb_permohonan')->row();
    }
}
