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

    public function getAllDesa()
    {
        return $this->db->get('tb_desa')->result();
    }
}
