<?php
defined('BASEPATH') or exit('No direct script access allowed !');

class Permohonan_model extends CI_Model
{

    public function getAllPermohonan()
    {
        return $this->db
            ->join('tb_pemohon', 'tb_pemohon.idPemohon = tb_permohonan.idPemohon')
            ->join('tb_tanah', 'tb_tanah.nib = tb_permohonan.nib')
            ->get('tb_permohonan')->result();
    }

    public function getPermohonan($id)
    {
        return $this->db
            ->select('*, tb_permohonan.keterangan as ket')
            ->join('tb_pemohon', 'tb_pemohon.idPemohon = tb_permohonan.idPemohon')
            ->join('tb_tanah', 'tb_tanah.nib = tb_permohonan.nib')
            ->where('idPermohonan', $id)
            ->get('tb_permohonan')->row();
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
        $config['allowed_types']        = 'pdf';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('scan_berkas')) {
            $data = [
                'idPemohon'         => $this->input->post('idPemohon', true),
                'nib'               => $this->input->post('nib', true),
                'nomor_berkas'      => $this->input->post('nomor_berkas', true),
                'scan_berkas'       => $this->upload->data('file_name'),
                'status_permohonan' => "belum_terverifikasi",
                'keterangan'        => null
            ];
            $this->db->insert('tb_permohonan', $data);
            return 1;
        } else {
            return $this->upload->display_errors();
        }
    }

    public function revisi($id)
    {
        $config['upload_path']          = './assets/img/foto_berkas/';
        $config['allowed_types']        = 'pdf';

        $this->load->library('upload', $config);

        if (!empty($_FILES['scan_berkas']['name'])) {

            if ($this->upload->do_upload('scan_berkas')) {
                $old_image = $this->db->get_where('tb_permohonan', ['idPermohonan' => $id])->row();
                $old_image = $old_image->scan_berkas;
                unlink(FCPATH . 'assets/img/foto_berkas/' . $old_image);
                $this->db->set('scan_berkas', $this->upload->data('file_name'));
            } else {
                return $this->upload->display_errors();
            }
        }

        $this->db->set('idPemohon', $this->input->post('idPemohon', true));
        $this->db->set('nib', $this->input->post('nib', true));
        $this->db->set('nomor_berkas', $this->input->post('nomor_berkas', true));
        $this->db->set('status_permohonan', "belum_terverifikasi");
        $this->db->set('keterangan', null);

        $this->db->where('idPermohonan', $id)->update('tb_permohonan');
        return 1;
    }
}
