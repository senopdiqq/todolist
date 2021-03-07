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
