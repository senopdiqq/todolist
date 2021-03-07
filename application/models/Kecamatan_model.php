<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kecamatan_model extends CI_Model
{
    public function getAllKecamatan()
    {
        return $this->db->get('tb_kecamatan')->result();
    }

    public function storeKecamatan()
    {
        $data = array(
            'nama_kecamatan' => $this->input->post('nama_kecamatan', true)
        );

        return $this->db->insert('tb_kecamatan', $data);
    }

    public function updateKecamatan()
    {
        $this->db->set('nama_kecamatan', $this->input->post('nama_kecamatan', true));
        $this->db->where('idKecamatan', $this->input->post('idKecamatan', true));
        return $this->db->update('tb_kecamatan');
    }

    public function deleteKecamatan($id)
    {
        $cek = $this->db->get_where('tb_desa', ['idKecamatan' => $id])->num_rows();
        if ($cek == 0) {
            $this->db->delete('tb_kecamatan', ['idKecamatan' => $id]);
            return true;
        } else {
            return false;
        }
    }
}
