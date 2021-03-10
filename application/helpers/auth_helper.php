<?php

function is_logged_in()
{
    $ci = get_instance();
    if ($ci->session->userdata('username') && $ci->session->userdata('email')) {
        redirect(base_url() . 'dashboard/home');
    }
}

function is_not_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username') && !$ci->session->userdata('email')) {
        redirect(base_url() . 'auth/index');
    }
}

function is_admin()
{
    $ci = get_instance();
    if ($ci->session->userdata('idRole') != 1) {
        $a = base_url() . 'dashboard/home';
        echo "You don't have permission to access this page <br><br>";
        echo "Back to <a href = '$a'>Home</a> ";

        exit;
    }
}

function is_petugas()
{
    $ci = get_instance();
    if ($ci->session->userdata('idRole') != 2) {
        $a = base_url() . 'dashboard/home';
        echo "You don't have permission to access this page <br><br>";
        echo "Back to <a href = '$a'>Home</a> ";

        exit;
    }
}
