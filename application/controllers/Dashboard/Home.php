<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_not_logged_in();
    }

    public function index()
    {
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/index');
        $this->load->view('templates/footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('idUser');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('alamat');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('no_hp');
        $this->session->unset_userdata('jenis_kelamin');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('idRole');

        redirect(base_url() . 'auth/index');
    }
}
