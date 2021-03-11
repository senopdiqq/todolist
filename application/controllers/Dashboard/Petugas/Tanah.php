<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tanah extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        is_not_logged_in();
        is_petugas();
        $this->load->model('Tanah_model', 'model');
    }

    public function index()
    {
        $data['tanah'] = $this->model->getAllTanah();

        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/tanah/index', $data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $data['pemohon']    = $this->model->getAllPemohon();
        $data['kecamatan']  = $this->model->getAllKecamatan();

        $this->form_validation->set_rules('nib', 'NIB', 'required|trim|numeric', [
            'required'  => 'NIB tidak boleh kosong !',
            'numeric'   => 'NIB harus berupa angka !',
        ]);

        $this->form_validation->set_rules('idPemohon', 'Pemohon', 'required|trim|numeric', [
            'required'  => 'Pemohon tidak boleh kosong !',
            'numeric'   => 'Pemohon harus berupa angka !'
        ]);

        $this->form_validation->set_rules('idDesa', 'Desa', 'required|trim|numeric', [
            'required'  => 'Pilih Kecamatan Terlebih Dahulu',
            'numeric'   => 'ID Desa harus berupa angka !'
        ]);

        $this->form_validation->set_rules('luas_tanah', 'Luas Tanah', 'required|trim|numeric', [
            'required'  => 'Luas Tanah tidak boleh kosong !',
            'numeric'   => 'Luas Tanah harus berupa angka !'
        ]);

        $this->form_validation->set_rules('letak_tanah', 'Letak Tanah', 'required|trim', [
            'required'  => 'Letak Tanah tidak boleh kosong !'
        ]);

        $this->form_validation->set_rules('rt', 'RT', 'required|trim|numeric', [
            'required'  => 'RT tidak boleh kosong !',
            'numeric'   => 'RT harus berupa angka !'
        ]);

        $this->form_validation->set_rules('rw', 'RW', 'required|trim|numeric', [
            'required'  => 'RW tidak boleh kosong !',
            'numeric'   => 'RW harus berupa angka !'
        ]);



        if ($this->form_validation->run() == FALSE) {

            $arr = array('nib', 'idPemohon', 'idDesa', 'luas_tanah', 'letak_tanah', 'rt', 'rw');
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
            $this->load->view('dashboard/tanah/store', $data);
            $this->load->view('templates/footer');
        } else {
            $this->model->store();
            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Berhasil',
                    'text'  => 'Tanah Berhasil Ditambahkan !',
                    'type'  => 'success',

                ],
                0
            );
            redirect(base_url() . 'Dashboard/Petugas/Tanah');
        }
    }

    public function edit($nib)
    {
        $data['tanah']      = $this->model->getTanah($nib);
        $data['pemohon']    = $this->model->getAllPemohon();
        $data['kecamatan']  = $this->model->getAllKecamatan();

        $this->form_validation->set_rules('nib', 'NIB', 'required|trim|numeric', [
            'required'  => 'NIB tidak boleh kosong !',
            'numeric'   => 'NIB harus berupa angka !',
        ]);

        $this->form_validation->set_rules('idPemohon', 'Pemohon', 'required|trim|numeric', [
            'required'  => 'Pemohon tidak boleh kosong !',
            'numeric'   => 'Pemohon harus berupa angka !'
        ]);

        $this->form_validation->set_rules('idDesa', 'Desa', 'required|trim|numeric', [
            'required'  => 'Pilih Kecamatan Terlebih Dahulu',
            'numeric'   => 'ID Desa harus berupa angka !'
        ]);

        $this->form_validation->set_rules('luas_tanah', 'Luas Tanah', 'required|trim|numeric', [
            'required'  => 'Luas Tanah tidak boleh kosong !',
            'numeric'   => 'Luas Tanah harus berupa angka !'
        ]);

        $this->form_validation->set_rules('letak_tanah', 'Letak Tanah', 'required|trim', [
            'required'  => 'Letak Tanah tidak boleh kosong !'
        ]);

        $this->form_validation->set_rules('rt', 'RT', 'required|trim|numeric', [
            'required'  => 'RT tidak boleh kosong !',
            'numeric'   => 'RT harus berupa angka !'
        ]);

        $this->form_validation->set_rules('rw', 'RW', 'required|trim|numeric', [
            'required'  => 'RW tidak boleh kosong !',
            'numeric'   => 'RW harus berupa angka !'
        ]);



        if ($this->form_validation->run() == FALSE) {

            $arr = array('nib', 'idPemohon', 'idDesa', 'luas_tanah', 'letak_tanah', 'rt', 'rw');
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
            $this->load->view('dashboard/tanah/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->model->edit($nib);
            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Berhasil',
                    'text'  => 'Tanah Berhasil Diedit !',
                    'type'  => 'success',

                ],
                0
            );
            redirect(base_url() . 'Dashboard/Petugas/Tanah');
        }
    }

    public function GetDesa()
    {
        echo json_encode($this->model->getDesaByAjax());
    }
}
