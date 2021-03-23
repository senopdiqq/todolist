<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profil_model', 'model');
    }

    public function index()
    {
        $data['profil'] = $this->model->getProfil();

        $this->form_validation->set_rules('nama_ptsl', 'Nama PTSL', 'required|trim', [
            'required' => 'Nama PTSL tidak boleh kosong !'

        ]);

        $this->form_validation->set_rules('alamat', 'Alamat PTSL', 'required|trim', [
            'required' => 'Alamat tidak boleh kosong !'
        ]);

        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required|trim|numeric|min_length[10]', [
            'required'      => 'Nomor Telepon tidak boleh kosong !',
            'numeric'       => 'Nomor Telepon hanya boleh angka !',
            'min_length'    => 'Nomor Telepon minimal 11 karakter !'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required'          => 'Email tidak boleh kosong !',
            'valid_email'       => 'Email Harus Valid !'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $arr = array('nama_ptsl', 'alamat', 'no_telp', 'email');
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
            $this->load->view('dashboard/profil', $data);
            $this->load->view('templates/footer');
        } else {
            $this->model->edit();

            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Berhasil !',
                    'text'  => 'Profil Berhasil Diubah !',
                    'type'  => 'success',

                ],
                0
            );
            redirect(base_url() . 'Dashboard/Profil');
        }
    }
}
