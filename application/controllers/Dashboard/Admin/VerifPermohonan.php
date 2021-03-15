<?php
defined('BASEPATH') or die('No direct script access allowed');


class VerifPermohonan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('VerifPermohonan_model', 'model');
    }

    public function index()
    {
        $data['desa'] = $this->model->getDesa();

        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/verifPermohonan/index', $data);
        $this->load->view('templates/footer');
    }

    public function pemohon($id)
    {
        $data['pemohon'] = $this->model->getPemohon($id);

        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/verifPermohonan/pemohon', $data);
        $this->load->view('templates/footer');
    }

    public function permohonan($id)
    {
        $data['permohonan'] = $this->model->getPermohonan($id);

        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/verifPermohonan/permohonan', $data);
        $this->load->view('templates/footer');
    }
}
