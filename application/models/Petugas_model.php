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
        $arr = array('nama', 'alamat', 'email', 'no_hp', 'jenis_kelamin', 'username', 'password', 'password_repeat');
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
}
