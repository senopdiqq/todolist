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
        //  $data['hitung'] = $this->model->countPermohonan();

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

    public function verified($id)
    {
        $desa = $this->model->getTanah($id);

        $valid = $this->model->verifyPermohonan($id);
        if ($valid) {

            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Berhasil',
                    'text'  => 'Permohonan Berhasil Diverifikasi !',
                    'type'  => 'success',

                ],
                0
            );
        } else {
            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Gagal',
                    'text'  => 'Permohonan Telah Diverifikasi !',
                    'type'  => 'error',

                ],
                0
            );
        }
        redirect(base_url() . 'Dashboard/Admin/VerifPermohonan/pemohon/' . $desa->idDesa);
    }

    public function revisi($id)
    {
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim', [
            'required'  => 'Keterangan tidak boleh kosong'
        ]);

        $desa = $this->model->getTanah($id);

        if ($this->form_validation->run() == FALSE) {
            $arr = array('keterangan');
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
            redirect(base_url() . 'Dashboard/Admin/VerifPermohonan/permohonan/' . $desa->nib);
        } else {
            $valid = $this->model->revisi($id);
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
            redirect(base_url() . 'Dashboard/Admin/VerifPermohonan/pemohon/' . $desa->idDesa);
        }
    }

    public function showPdf($pdf)
    {
        $this->load->view('dashboard/verifPermohonan/showPDF', ['pdf' => $pdf]);
    }
}
