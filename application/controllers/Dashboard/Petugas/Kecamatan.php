<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kecamatan extends CI_Controller
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
        $this->load->view('dashboard/kecamatan/index');
        $this->load->view('templates/footer');
    }
}
