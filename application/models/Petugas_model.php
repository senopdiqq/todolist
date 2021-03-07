<?php

defined('BASEPATH') or exit('No direct script access allowed');

class petugas_model extends CI_Model
{

    public function getAllPetugas()
    {
        $this->db->where('idRole', 2);
        return $this->db->get('tb_user')->result();
    }

    public function insertPetugas()
    {
        $data = array(
            'nama'          => $this->input->post('nama', true),
            'alamat'        => $this->input->post('alamat', true),
            'email'         => $this->input->post('email', true),
            'no_hp'         => $this->input->post('no_hp', true),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
            'username'      => $this->input->post('username', true),
            'password'      => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            'idRole'        => 2
        );

        return $this->db->insert('tb_user', $data);
    }

    public function getPetugasById($id)
    {
        return $this->db->get_where('tb_user', ['idUser' => $id])->row();
    }

    public function searchUniqueEmail($email, $id)
    {
        $this->db->where_not_in('idUser', $id);
        $this->db->where('email', $email);
        return $this->db->get('tb_user')->row();
    }

    public function updatePetugas($id)
    {
        $nama       = $this->input->post('nama', true);
        $alamat     = $this->input->post('alamat', true);
        $email      = $this->input->post('email', true);
        $no_hp      = $this->input->post('no_hp', true);
        $jk         = $this->input->post('jenis_kelamin', true);

        $this->db->set('nama', $nama);
        $this->db->set('alamat', $alamat);
        $this->db->set('email', $email);
        $this->db->set('no_hp', $no_hp);
        $this->db->set('jenis_kelamin', $jk);

        $this->db->where('idUser', $id);
        return $this->db->update('tb_user');
    }

    public function hapusPetugas($id)
    {
        return $this->db->delete('tb_user', ['idUser' => $id]);
    }
}
