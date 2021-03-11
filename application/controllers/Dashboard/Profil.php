<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profil_model', 'model');
    }

    public function index()
    {
        $data['profil'] = $this->model->getProfil();

        $this->form_validation->set_rules('nama_ptsl', 'Nama PTSL', 'required', [
            'required' => 'Nama PTSL tidak boleh kosong !'

        ]);

        if ($this->form_validation->run() == FALSE) {
            $arr = array('nama_ptsl');
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
            $this->load->view('dashboard/profil', $data);
            $this->load->view('templates/footer');
        } else {

            $config['upload_path']          = './assets/img/foto_user/';
            $config['allowed_types']        = 'jpeg|jpg|png';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!empty($_FILES['foto_ptsl']['tmp_name'])) {

                if (!$this->upload->do_upload('foto_ptsl')) {
                    echo $this->upload->display_errors();
                } else {
                    $data = [
                        'foto' => $this->upload->data('file_name'),
                        'nama' => $this->input->post('nama_ptsl', true)
                    ];
                }
            } else {
                $data = [
                    'foto' => "default.jpg",
                    'nama' => $this->input->post('nama_ptsl', true)
                ];
            }
            $id = $this->input->post('id_profil_ptsl', true);
            $this->model->edit($data, $id);

            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Berhasil !',
                    'text'  => 'Profil Berhasil Diubah !',
                    'type'  => 'success',

                ],
                0
            );
            redirect(base_url() . 'Dashboard/Profil');
        }
    }
}
