<?php

defined('BASEPATH') or exit('No direct script access allowed!');

class Home_model extends CI_Model
{

    public function getPetugas()
    {
        return $this->db->get_where('tb_user', ['idRole' => 2]);
    }

    public function pemohonBelum()
    {
        return $this->db->get_where('tb_pemohon', ['status_pemohon' => 'belum_terverifikasi']);
    }

    public function pemohonRevisi()
    {
        return $this->db->get_where('tb_pemohon', ['status_pemohon' => 'revisi']);
    }

    public function pemohonTerverifiksi()
    {
        return $this->db->get_where('tb_pemohon', ['status_pemohon' => 'terverifikasi']);
    }

    public function kecamatan()
    {
        return $this->db->get('tb_kecamatan');
    }

    public function desa()
    {
        return $this->db->get('tb_desa');
    }

    public function tanah()
    {
        return $this->db->get('tb_tanah');
    }

    public function updatePassword()
    {
        $password           = $this->input->post('password', true);
        $password_baru      = $this->input->post('password_baru', true);

        $cek = $this->db->get_where('tb_user', ['idUser' => $this->session->userdata('idUser')])->row();

        if (password_verify($password, $cek->password)) {
            if ($password == $password_baru) {
                return 2;
            } else {
                $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

                $this->db->set('password', $password_hash);
                $this->db->where('idUser', $this->session->userdata('idUser'));
                $this->db->update('tb_user');

                return 1;
            }
        } else {
            return 0;
        }
    }
}
