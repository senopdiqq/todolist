<?php

defined('BASEPATH') or exit('No direct script access allowed!');

class Home_model extends CI_Model
{

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
