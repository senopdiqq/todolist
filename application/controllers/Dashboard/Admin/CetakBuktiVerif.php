<?php
defined('BASEPATH') or exit('No direct script access allowed!');
class CetakBuktiVerif extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_not_logged_in();
        is_admin();
        $this->load->model('CetakBuktiVerif_model', 'model');
    }

    public function index()
    {
        $data['cetak'] = $this->model->getCetak();
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/CetakBuktiVerif/index', $data);
        $this->load->view('templates/footer');
    }

    public function cetak($nib)
    {
        $data['profil'] = $this->model->getProfil();
        $data['cetak'] = $this->model->cetak($nib);
        $this->load->view('dashboard/CetakBuktiVerif/cetak', $data);
    }
}
