<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ProfilUser extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProfilUser_model', 'model');
    }

    public function index()
    {
        $idUser = $this->session->userdata('idUser');
        $email = $this->input->post('email', true);

        $data['profil'] = $this->model->getProfil($idUser);

        $this->form_validation->set_rules('nama_lengkap', 'Nama', 'required', [

            'required' => 'Nama tidak boleh kosong !'

        ]);

        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [

            'required' => 'Alamat tidak boleh kosong !'

        ]);

        if (!empty($email) && $email  != $data['getPetugas']->email) {

            $search = $this->model->searchUniqueEmail($email, $idUser);

            if ($search) {
                $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[tb_user.email]', [

                    'required'  => 'Email tidak boleh kosong !',
                    'is_unique' => 'Email telah terdaftar !'
                ]);
            }
        }

        $this->form_validation->set_rules('no_hp', 'Telepon', 'required|trim|numeric|max_length[15]', [

            'required'      => 'Telepon tidak boleh kosong !',
            'numeric'       => 'Telepon harus berupa angka !',
            'max_length'    => 'Telepon maksimal 15 digit !'

        ]);

        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim', [
            'required' => 'Jenis Kelamin tidak boleh kosong !'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $arr = array('nama_lengkap', 'email', 'alamat', 'no_hp', 'jenis_kelamin');
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
            $this->load->view('dashboard/profilUser/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->model->update($idUser);
            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Berhasil',
                    'text'  => 'Profil Berhasil Diedit !',
                    'type'  => 'success',

                ],
                0
            );
            redirect(base_url() . 'Dashboard/ProfilUser');
        }
    }
}
