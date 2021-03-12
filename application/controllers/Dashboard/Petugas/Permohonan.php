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

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim|alpha', [

            'required' => 'Nama tidak boleh kosong !',
            'alpha'    => 'Nama hanya boleh karakter !'

        ]);
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|numeric|is_unique[tb_pemohon.nik]', [

            'required'  => 'NIK tidak boleh kosong !',
            'numeric'   => 'NIK hanya boleh angka !',
            'is_unique' => 'NIK telah terdaftar !'

        ]);

        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [

            'required' => 'Alamat tidak boleh kosong !'

        ]);

        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim', [

            'required' => 'Pekerjaan tidak boleh kosong !'

        ]);

        $this->form_validation->set_rules('umur', 'Umur', 'required|trim|numeric|max_length[3]', [

            'required'      => 'Umur tidak boleh kosong !',
            'numeric'       => 'Umur harus berupa angka !',
            'max_length'    => 'Umur maksimal 3 digit !'

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
            $this->load->view('dashboard/permohonan/store', $data);
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

    public function getNib()
    {
        echo json_encode($this->model->getNibByAjax());
    }
}