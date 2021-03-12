<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('auth_model', 'model');
    }

    public function index()
    {
        $data['getFoto'] = $this->model->getFoto();
        $this->load->view('auth/index', $data);
    }

    public function login()
    {

        $this->form_validation->set_rules(
            'username',
            'Username',
            'trim|required'
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'trim|required'

        );
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_tempdata(
                'flash',
                [
                    'title' => 'Gagal Login',
                    'text'  => (form_error('username') ? 'Field Username harus Diisi' : 'Field Password harus Diisi'),
                    'type'  => 'error',

                ],
                0
            );
            $this->load->view('auth/index');
        } else {
            $username = $this->input->post('username', true);
            $password = $this->input->post('password', true);
            $this->model->_ceklogin($username, $password);
        }
    }
}
