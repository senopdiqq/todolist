<?php

defined('BASEPATH') or exit('No direct script access allowed !');

class Permohonan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Permohonan_model', 'model');
    }

    public function index()
    {
        $data['permohonan'] = $this->model->getAllPermohonan();

        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/permohonan/index', $data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $data['pemohon'] = $this->model->getAllPemohon();

        $this->form_validation->set_rules('idPemohon', 'Nama Pemohon', 'required|trim|numeric', [

            'required'      => 'Nama Pemohon tidak boleh kosong !',
            'numeric'       => 'ID Pemohon hanya boleh Angka !'

        ]);
        $this->form_validation->set_rules('nib', 'NIB', 'required|trim|numeric', [

            'required'  => 'NIB tidak boleh kosong !',
            'numeric'   => 'NIB hanya boleh angka !',

        ]);

        $this->form_validation->set_rules('nomor_berkas', 'Nomor Berkas', 'required|trim|numeric', [

            'required'  => 'Nomor Berkas tidak boleh kosong !',
            'numeric'   => 'Nomor Berkas hanya boleh angka !',

        ]);

        if ($this->form_validation->run() == FALSE) {
            $arr = array('idPemohon', 'nib', 'nomor_berkas');
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
            $this->load->view('dashboard/permohonan/store', $data);
            $this->load->view('templates/footer');
        } else {
            $init = $this->model->store();
            if ($init == 1) {
                $this->session->set_tempdata(
                    'flash',
                    [
                        'title' => 'Berhasil',
                        'text'  => 'Permohonan Berhasil Ditambah !',
                        'type'  => 'success',

                    ],
                    0
                );
                redirect(base_url() . 'Dashboard/Petugas/Permohonan');
            } else if ($init == 0) {
                $this->session->set_tempdata(
                    'flash',
                    [
                        'title' => 'Whoopz!',
                        'text'  => "Scan Berkas tidak boleh kosong",
                        'type'  => 'error',

                    ],
                    0
                );
                $this->load->view('templates/navbar');
                $this->load->view('templates/sidebar');
                $this->load->view('dashboard/permohonan/store', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function getNib()
    {
        echo json_encode($this->model->getNibByAjax());
    }
}
