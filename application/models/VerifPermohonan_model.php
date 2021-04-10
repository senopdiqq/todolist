<?php
defined('BASEPATH') or die('No direct script access allowed');

class VerifPermohonan_model extends CI_Model
{

    public function getTanah($id)
    {
        return $this->db
            ->join('tb_tanah', 'tb_tanah.nib = tb_permohonan.nib')
            ->where('idPermohonan', $id)
            ->get('tb_permohonan')
            ->row();
        // return $this->db->get_where('tb_tanah', ['nib' => $id])->row();
    }

    public function getDesa()
    {
        $this->db->join('tb_kecamatan', 'tb_kecamatan.idKecamatan = tb_desa.idKecamatan');
        return $this->db->get('tb_desa')->result();
    }

    public function getTanahByIdDesa($id)
    {
        $this->db->join('tb_permohonan', 'tb_permohonan.nib = tb_tanah.nib');
        $this->db->where('status_permohonan', 'belum_terverifikasi');
        return $this->db->get_where('tb_tanah', ['idDesa' => $id])->result();
    }

    public function getPemohon($id)
    {
        $this->db->join('tb_tanah', 'tb_tanah.nib = tb_permohonan.nib');
        $this->db->join('tb_pemohon', 'tb_pemohon.idPemohon = tb_tanah.idPemohon');
        $this->db->where('status_permohonan', 'belum_terverifikasi');
        $this->db->where('idDesa', $id);
        return $this->db->get('tb_permohonan')->result();
    }

    public function getPermohonan($id)
    {
        $this->db->select('*, tb_desa.nama as nama_desa');
        $this->db->join('tb_tanah', 'tb_tanah.nib = tb_permohonan.nib');
        $this->db->join('tb_desa', 'tb_tanah.idDesa = tb_desa.idDesa');
        $this->db->join('tb_pemohon', 'tb_pemohon.idPemohon = tb_tanah.idPemohon');
        $this->db->where('tb_permohonan.idPermohonan', $id);
        return $this->db->get('tb_permohonan')->row();
    }

    public function verifyPermohonan($id)
    {
        $cek = $this->db->get_where('tb_permohonan', ['idPermohonan' => $id])->row();

        if ($cek->status_permohonan == 'terverifikasi') return false;

        $this->db->set('status_permohonan', 'terverifikasi');
        $this->db->where('idPermohonan', $id);
        return $this->db->update('tb_permohonan');
    }

    public function revisi($id)
    {
        $cek = $this->db->get_where('tb_permohonan', ['idPermohonan' => $id])->row();

        if ($cek->status_pemohon == 'revisi') return false;

        $this->db->set('status_permohonan', 'revisi');
        $this->db->set('keterangan', $this->input->post('keterangan', true));
        $this->db->where('idPermohonan', $id);
        return $this->db->update('tb_permohonan');
    }
}
