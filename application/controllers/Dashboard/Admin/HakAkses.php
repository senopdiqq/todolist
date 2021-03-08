<?php

defined('BASEPATH') or exit('No direct script access allowed');

class HakAkses extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        is_not_logged_in();
        $this->load->model('hak_akses_model', 'model');
    }

    public function index()
    {
        $data['role'] = $this->model->getAllRole();

        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/hakAkses/index', $data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $this->form_validation->set_rules('nama_role', 'Nama Role', 'required', [

            'required' => 'Nama hak akses tidak boleh kosong !'

        ]);

        if ($this->form_validation->run() == FALSE) {
            $arr = array('nama_role');
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
        } else {
            $this->model->storeRole();

            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Berhasil',
                    'text'  => 'Hak Akses Berhasil Ditambahkan !',
                    'type'  => 'success',

                ],
                0
            );
        }
        redirect(base_url() . 'Dashboard/Admin/hakAkses');
    }

    public function update()
    {
        $this->form_validation->set_rules('nama_role', 'Nama Role', 'required', [

            'required' => 'Nama hak akses tidak boleh kosong !'

        ]);

        if ($this->form_validation->run() == FALSE) {
            $arr = array('nama_role');
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
        } else {
            $this->model->updateRole();

            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Berhasil',
                    'text'  => 'Hak Akses Berhasil Diubah !',
                    'type'  => 'success',

                ],
                0
            );
        }
        redirect(base_url() . 'Dashboard/Admin/hakAkses');
    }

    public function delete($id)
    {
        $hapus = $this->model->deleteRole($id);
        if ($hapus) {
            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Berhasil',
                    'text'  => 'Berhasil Menghapus Hak Akses !',
                    'type'  => 'success',

                ],
                0
            );
        } else {
            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Gagal Hapus!',
                    'text'  => "Hak akses sedang digunakan !",
                    'type'  => 'error',

                ],
                0
            );
        }

        redirect(base_url() . 'Dashboard/Admin/hakAkses');
    }
}
