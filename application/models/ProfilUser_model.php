<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ProfilUser_model extends CI_Model
{

    public function getProfil($idUser)
    {
        return $this->db->get_where('tb_user', ['idUser' => $idUser])->row();
    }

    public function searchUniqueEmail($email, $id)
    {
        $this->db->where_not_in('idUser', $id);
        $this->db->where('email', $email);
        return $this->db->get('tb_user')->row();
    }

    public function update($idUser)
    {
        $data = [
            'nama'          => $this->input->post('nama_lengkap'),
            'alamat'        => $this->input->post('alamat'),
            'email'         => $this->input->post('email'),
            'no_hp'         => $this->input->post('no_hp'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin')
        ];

        return $this->db->where('idUser', $idUser)->update('tb_user', $data);
    }
}
