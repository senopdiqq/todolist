<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

    public function _ceklogin($username, $password)
    {
        $get = $this->db->get_where('tb_user', ['username' => $username])->row();

        if ($get) {

            if (password_verify($password, $get->password)) {

                $data = [
                    'idUser'        => $get->idUser,
                    'nama'          => $get->nama,
                    'alamat'        => $get->alamat,
                    'email'         => $get->email,
                    'no_hp'         => $get->no_hp,
                    'jenis_kelamin' => $get->jenis_kelamin,
                    'username'      => $get->username,
                    'idRole'        => $get->idRole
                ];
                $this->session->set_userdata($data);
                redirect(base_url() . 'dashboard/home');
            } else {
                $this->session->set_tempdata(
                    'flash',
                    [
                        'title' => 'Gagal Login',
                        'text'  => 'Username atau Password Salah',
                        'type'  => 'error'
                    ],
                    0
                );

                redirect(base_url() . 'auth/index');
            }
        } else {

            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Gagal Login',
                    'text'  => 'Username atau Password Salah',
                    'type'  => 'error'
                ],
                0
            );
            redirect(base_url() . 'auth/index');
        }
    }
}
