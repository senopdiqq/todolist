<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tugas extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        is_not_logged_in();
        is_petugas();
        $this->load->model('Kecamatan_model', 'model');
    }

    public function index()
    {
        $data['kecamatan'] = $this->model->getAllKecamatan();

        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/kecamatan/index', $data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $this->form_validation->set_rules('nama_kecamatan', 'Nama Kecamatan', 'required|trim', [
            'required' => 'Nama Tugas tidak boleh kosong !'

        ]);

        if ($this->form_validation->run() == FALSE) {
            $arr = array('nama_kecamatan');
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
            $this->model->storeKecamatan();

            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Berhasil !',
                    'text'  => 'Tugas Berhasil Ditambahkan !',
                    'type'  => 'success',

                ],
                0
            );
        }

        redirect(base_url() . 'Dashboard/Petugas/Tugas');
    }

    public function update()
    {
        $this->form_validation->set_rules('nama_kecamatan', 'Nama Kecamatan', 'required|trim', [
            'required' => 'Deskripsi Tugas tidak boleh kosong !'

        ]);

        if ($this->form_validation->run() == FALSE) {
            $arr = array('nama_kecamatan');
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
            $this->model->updateKecamatan();

            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Berhasil !',
                    'text'  => 'Tugas Berhasil Diupdate !',
                    'type'  => 'success',

                ],
                0
            );
        }

        redirect(base_url() . 'Dashboard/Petugas/Tugas');
    }

    public function delete($id)
    {
        $hapus = $this->model->deleteKecamatan($id);
        if ($hapus) {
            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Berhasil',
                    'text'  => 'Tugas telah Terselesaikan !',
                    'type'  => 'success',

                ],
                0
            );
        } else {
            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Gagal Hapus!',
                    'text'  => "Tugas sedang berjalan !",
                    'type'  => 'error',

                ],
                0
            );
        }


        redirect(base_url() . 'Dashboard/Petugas/Tugas');
    }
}
