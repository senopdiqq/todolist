<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pemohon extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_not_logged_in();
        $this->load->model('Pemohon_model', 'model');
    }

    public function index()
    {
        $data['pemohon'] = $this->model->getAllPemohon();

        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/pemohon/index', $data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim|alpha', [

            'required' => 'Nama tidak boleh kosong !',
            'alpha'    => 'Nama hanya boleh karakter !'

        ]);
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|numeric', [

            'required' => 'Alamat tidak boleh kosong !',
            'numeric'  => 'NIK hanya boleh angka !'

        ]);

        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [

            'required' => 'Alamat tidak boleh kosong !'

        ]);

        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim', [

            'required' => 'Pekerjaan tidak boleh kosong !'

        ]);

        $this->form_validation->set_rules('umur', 'Umur', 'required|trim|numeric', [

            'required'  => 'Umur tidak boleh kosong !',
            'numeric'   => 'Umur harus berupa angka !'

        ]);

        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim', [
            'required' => 'Jenis Kelamin tidak boleh kosong !'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $arr = array('nama', 'nik', 'alamat', 'pekerjaan', 'umur', 'jenis_kelamin');
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
            $this->load->view('dashboard/pemohon/store');
            $this->load->view('templates/footer');
        } else {
            $this->model->store();
            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Berhasil',
                    'text'  => 'Pemohon Berhasil Ditambah !',
                    'type'  => 'success',

                ],
                0
            );
            redirect(base_url() . 'Dashboard/Petugas/Pemohon');
        }
    }
}
