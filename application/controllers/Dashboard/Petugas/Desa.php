<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Desa extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        is_not_logged_in();
        $this->load->model('desa_model', 'model');
    }

    public function index()
    {
        $data['desa'] = $this->model->getAllDesa();
        $data['kecamatan'] = $this->model->getAllKecamatan();

        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/desa/index', $data);
        $this->load->view('templates/footer');
    }

    public function getKecamatan()
    {
        echo json_encode($this->model->getAllKecamatanArray());
    }

    public function store()
    {
        $this->form_validation->set_rules('nama_desa', 'Nama Desa', 'required', [

            'required' => 'Nama desa tidak boleh kosong !'

        ]);
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', [

            'required' => 'Kecamatan tidak boleh kosong !'

        ]);
        $this->form_validation->set_rules('status', 'Status', 'required', [

            'required' => 'Status tidak boleh kosong !'

        ]);

        if ($this->form_validation->run() == FALSE) {
            $arr = array('nama_desa', 'kecamatan', 'status');
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
            $this->model->storeDesa();

            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Berhasil',
                    'text'  => 'Desa Berhasil Ditambahkan !',
                    'type'  => 'success',

                ],
                0
            );
        }
        redirect(base_url() . 'Dashboard/Petugas/desa');
    }

    public function update()
    {
        $this->form_validation->set_rules('nama_desa', 'Nama Desa', 'required', [

            'required' => 'Nama desa tidak boleh kosong !'

        ]);
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', [

            'required' => 'Kecamatan tidak boleh kosong !'

        ]);
        $this->form_validation->set_rules('status', 'Status', 'required', [

            'required' => 'Status tidak boleh kosong !'

        ]);

        if ($this->form_validation->run() == FALSE) {
            $arr = array('nama_desa', 'kecamatan', 'status');
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
            $this->model->updateDesa();

            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Berhasil',
                    'text'  => 'Desa Berhasil Diedit !',
                    'type'  => 'success',

                ],
                0
            );
        }
        redirect(base_url() . 'Dashboard/Petugas/desa');
    }

    public function delete($id)
    {
        $hapus = $this->model->deleteDesa($id);
        if($hapus){
            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Berhasil',
                    'text'  => 'Berhasil Menghapus Desa !',
                    'type'  => 'success',
    
                ],
                0
            );
        }else{
            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Whoopz!',
                    'text'  => "Gagal Menghapus Desa !",
                    'type'  => 'error',

                ],
                0
            );
        }
        redirect(base_url() . 'Dashboard/Petugas/desa');
    }
}
