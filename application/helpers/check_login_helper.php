<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('check_login')) {
    function check_login()
    {
        $CI = &get_instance();

        $userDataSession = $CI->session->all_userdata();

        if (count($userDataSession) <= 1) {
            redirect('login');
        }
    }
}
