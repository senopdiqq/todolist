<?php

defined('BASEPATH') or exit('No direct script access allowed');

class desa_model extends CI_Model
{

    public function getAllKecamatan()
    {
        return $this->db->get('tb_kecamatan')->result();
    }

    public function getAllKecamatanArray()
    {
        return $this->db->get('tb_kecamatan')->result_array();
    }

    public function getAllDesa()
    {
        return $this->db->join('tb_kecamatan', 'tb_kecamatan.idKecamatan = tb_desa.idKecamatan')
            ->get('tb_desa')
            ->result();
    }

    public function storeDesa()
    {
        $data = [
            'nama'     => $this->input->post('nama_desa'),
            'idKecamatan'   => $this->input->post('kecamatan'),
            'statusnya'     => $this->input->post('status')
        ];
        return $this->db->insert('tb_desa', $data);
    }

    public function updateDesa()
    {
        $data = [
            'idKecamatan' => $this->input->post('kecamatan'),
            'nama'        => $this->input->post('nama_desa'),
            'statusnya'   => $this->input->post('status')
        ];
        return $this->db->where('idDesa', $this->input->post('idDesa'))->update('tb_desa', $data);
    }

    public function deleteDesa($id)
    {
        $cek = $this->db->get_where('tb_tanah', ['idDesa' => $id])->num_rows();
        if($cek == 0){
            $this->db->where('idDesa', $id)->delete('tb_desa');
            return true;
        }else{
            return false;
        }
        
    }
}
