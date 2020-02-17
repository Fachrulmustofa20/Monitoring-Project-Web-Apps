<?php

function check_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('email');
    if (!$user_session) {
        $ci->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Please Login!</div>');
        redirect('auth');
    }
}
function is_admin()
{
    $ci = &get_instance();
    $role = $ci->session->userdata('role_id');
    if ($role != '1') {
        redirect('auth/blocked');
    }
}
