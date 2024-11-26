<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->helper(['url', 'check_login_helper']);
        $this->load->helper(['url']);
        // $this->load->model(['Users_Model', 'Tb_Log', 'Perjalanan_Model']);
        $this->load->library('session');
    }

    public function index(){
        $flashData = $this->session->flashdata('message');

        // $userDataSession = $this->session->all_userdata();

        $this->load->view('base/header-admin');
        $this->load->view('pages/admin/dashboard');
        $this->load->view('base/footer');
    }
}
