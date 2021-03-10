<?php

defined('BASEPATH') or exit('No direct script access allowed!');

class VerifPemohon extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('VerifPemohon_model', 'model');
    }

    public function index()
    {
        $data['pemohon'] = $this->model->getUnverifiedPemohon();

        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/verifPemohon/index', $data);
        $this->load->view('templates/footer');
    }

    public function verified($id)
    {
        $valid = $this->model->verifyPemohon($id);
        if ($valid) {

            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Berhasil',
                    'text'  => 'Pemohon Berhasil Diverifikasi !',
                    'type'  => 'success',

                ],
                0
            );
        } else {
            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Gagal',
                    'text'  => 'Pemohon Telah Diverifikasi !',
                    'type'  => 'error',

                ],
                0
            );
        }
        redirect(base_url() . 'Dashboard/Admin/VerifPemohon');
    }

    public function revisi()
    {
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim', [
            'required'  => 'Keterangan tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('idPemohon', 'Id Pemohon', 'required|trim|numeric', [
            'required'  => 'Id Pemohon tidak boleh kosong',
            'numeric'   => 'Id Pemohon harus berupa Angka'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $arr = array('keterangan', 'idPemohon');
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
            redirect(base_url() . 'Dashboard/Admin/VerifPemohon');
        } else {
            $valid = $this->model->revisi();
            if ($valid) {
                $this->session->set_tempdata(
                    'flash',
                    [
                        'title' => 'Berhasil',
                        'text'  => 'Revisi berhasil diajukan !',
                        'type'  => 'success',

                    ],
                    0
                );
            } else {
                $this->session->set_tempdata(
                    'flash',
                    [
                        'title' => 'Gagal',
                        'text'  => 'Pemohon sudah bersifat revisi !',
                        'type'  => 'error',

                    ],
                    0
                );
            }
            redirect(base_url() . 'Dashboard/Admin/VerifPemohon');
        }
    }
}
