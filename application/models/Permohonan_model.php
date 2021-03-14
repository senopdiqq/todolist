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

    public function store()
    {
        $config['upload_path']          = './assets/img/foto_berkas/';
        $config['allowed_types']        = 'jpeg|jpg|png';
        $count = count($_FILES['scan_berkas']['name']);

        $this->load->library('upload', $config);

        if ($count == 0) return 0;

        for ($i = 0; $i < $count; $i++) {
            $nama[$i] = $_FILES['scan_berkas']['name'];
            $path[$i] = $_FILES['scan_berkas']['tmp_name'];
        }
    }
}
