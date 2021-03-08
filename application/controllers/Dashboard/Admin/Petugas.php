<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        is_not_logged_in();
        $this->load->model('Petugas_model', 'model');
    }

    public function index()
    {
        $data['petugas'] = $this->model->getAllPetugas();

        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/petugas/index', $data);
        $this->load->view('templates/footer');
    }

    public function addPetugas()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim|alpha', [

            'required' => 'Nama tidak boleh kosong !',
            'alpha'    => 'Nama hanya boleh karakter !'

        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [

            'required' => 'Alamat tidak boleh kosong !'

        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', [

            'required'      => 'Email tidak boleh kosong !',
            'valid_email'   => 'Email tidak Valid !',
            'is_unique'     => 'Email sudah terdaftar',

        ]);
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|trim|numeric', [

            'required'      => 'Nomor hp tidak boleh kosong !',
            'numeric'       => 'Nomor hp harus angka',

        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [

            'required'      => 'Jenis Kelamin tidak boleh kosong !',

        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[tb_user.username]', [

            'required'      => 'Username tidak boleh kosong !',
            'is_unique'     => 'Username telah didaftarkan !'

        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]', [

            'required'       => 'Password tidak boleh kosong !',
            'min_length'     => 'Password minimal 6 karakter !'

        ]);
        $this->form_validation->set_rules('password_repeat', 'Ulangi Password', 'required|trim|matches[password]', [

            'required'      => 'Ulangi Password tidak boleh kosong !',
            'matches'              => 'Password tidak cocok !'

        ]);

        if ($this->form_validation->run() == FALSE) {
            $arr = array('nama', 'alamat', 'email', 'no_hp', 'jenis_kelamin', 'username', 'password', 'password_repeat');
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
            $this->load->view('dashboard/petugas/addPetugas');
            $this->load->view('templates/footer');
        } else {
            $this->model->insertPetugas();

            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Berhasil',
                    'text'  => 'Petugas Berhasil Ditambahkan !',
                    'type'  => 'success',

                ],
                0
            );
            redirect(base_url() . 'Dashboard/Admin/Petugas');
        }
    }

    public function editPetugas($id)
    {
        $data['getPetugas'] = $this->model->getPetugasById($id);
        $email = $this->input->post('email', true);

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim|alpha', [

            'required' => 'Nama tidak boleh kosong !',
            'alpha'    => 'Nama hanya boleh karakter !'

        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [

            'required' => 'Alamat tidak boleh kosong !'

        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [

            'required'      => 'Email tidak boleh kosong !',
            'valid_email'   => 'Email tidak Valid !'

        ]);

        if (!empty($email) && $email  != $data['getPetugas']->email) {

            $search = $this->model->searchUniqueEmail($email, $id);

            if ($search) {
                $this->form_validation->set_rules('email', 'Email', 'is_unique[tb_user.email]', [

                    'is_unique'     => 'Email sudah terdaftar',
                ]);
            }
        }

        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|trim|numeric', [

            'required'      => 'Nomor hp tidak boleh kosong !',
            'numeric'       => 'Nomor hp harus angka',

        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [

            'required'      => 'Jenis Kelamin tidak boleh kosong !',

        ]);

        if ($this->form_validation->run() == FALSE) {
            $arr = array('nama', 'alamat', 'email', 'no_hp', 'jenis_kelamin', 'username', 'password', 'password_repeat');
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
            $this->load->view('dashboard/petugas/editPetugas', $data);
            $this->load->view('templates/footer');
        } else {
            $this->model->updatePetugas($id);

            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Berhasil',
                    'text'  => 'Petugas Berhasil Diupdate !',
                    'type'  => 'success',

                ],
                0
            );
            redirect(base_url() . 'Dashboard/Admin/Petugas');
        }
    }

    public function hapusPetugas($id)
    {
        $this->model->hapusPetugas($id);
        $this->session->set_tempdata(
            'flash',
            [
                'title' => 'Berhasil',
                'text'  => 'Petugas Berhasil Dihapus !',
                'type'  => 'success',

            ],
            0
        );
        redirect(base_url() . 'Dashboard/Admin/Petugas');
    }
}
