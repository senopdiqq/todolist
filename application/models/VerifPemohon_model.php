<?php

defined('BASEPATH') or exit('No direct script access allowed!');

class VerifPemohon_model extends CI_Model
{
    public function getUnverifiedPemohon()
    {
        return $this->db->get_where('tb_pemohon', ['status_pemohon' => 'belum_terverifikasi'])->result();
    }

    public function verifyPemohon($id)
    {
        $cek = $this->db->get_where('tb_pemohon', ['idPemohon' => $id])->row();

        if ($cek->status_pemohon == 'terverifikasi') return false;

        $this->db->set('status_pemohon', 'terverifikasi');
        $this->db->where('idPemohon', $id);
        return $this->db->update('tb_pemohon');
    }

    public function revisi()
    {
        $id = $this->input->post('idPemohon', true);
        $cek = $this->db->get_where('tb_pemohon', ['idPemohon' => $id])->row();

        if ($cek->status_pemohon == 'revisi') return false;

        $this->db->set('status_pemohon', 'revisi');
        $this->db->set('keterangan', $this->input->post('keterangan', true));
        $this->db->where('idPemohon', $id);
        return $this->db->update('tb_pemohon');
    }
}
