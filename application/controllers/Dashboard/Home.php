<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_not_logged_in();
        $this->load->model('Home_model', 'model');
    }

    public function index()
    {
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/index');
        $this->load->view('templates/footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('idUser');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('alamat');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('no_hp');
        $this->session->unset_userdata('jenis_kelamin');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('idRole');

        redirect(base_url() . 'auth/index');
    }

    public function updatePassword()
    {
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password tidak boleh kosong !'
        ]);

        $this->form_validation->set_rules('password_baru', 'Password baru', 'required|trim|min_length[6]', [
            'required'      => 'Password Baru tidak boleh kosong !',
            'min_length'    => 'Password minimal 6 karakter',
        ]);

        $this->form_validation->set_rules('ulangi_password', 'Ulangi Password', 'required|trim|matches[password_baru]', [
            'required'      => 'Ulangi Password tidak boleh kosong !',
            'matches'       => 'Ulangi Password harus cocok dengan password baru'
        ]);

        if ($this->form_validation->run() == false) {
            $arr = array('password', 'password_baru', 'ulangi_password');
            foreach ($arr as $a) {
                if (form_error($a)) {
                    $error = form_error($a);
                    $this->session->set_tempdata(
                        'flash',
                        [
                            'title' => 'Whoopz!',
                            'text'  => $error,
                            'type'  => 'error',

                        ],
                        0
                    );
                    break;
                }
            }

            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('dashboard/updatepassword');
            $this->load->view('templates/footer');
        } else {
            $cek = $this->model->updatePassword();
            if ($cek == 0) {
                $this->session->set_tempdata(
                    'flash',
                    [
                        'title' => 'Gagal',
                        'text'  => 'Password lama tidak cocok !',
                        'type'  => 'error',

                    ],
                    0
                );
            } elseif ($cek == 2) {
                $this->session->set_tempdata(
                    'flash',
                    [
                        'title' => 'Gagal',
                        'text'  => 'Anda belum mengubah password !',
                        'type'  => 'error',

                    ],
                    0
                );
            } else {
                $this->session->set_tempdata(
                    'flash',
                    [
                        'title' => 'Berhasil',
                        'text'  => 'Password Berhasil Diubah !',
                        'type'  => 'success',

                    ],
                    0
                );
            }
            redirect(base_url() . 'Dashboard/Home/updatepassword');
        }
    }
}
