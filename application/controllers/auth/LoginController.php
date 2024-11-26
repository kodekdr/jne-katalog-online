<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['UsersModel']);
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {
        $userDataSession = $this->session->all_userdata();

        if (count($userDataSession) > 1) {
            redirect('home');
        }

        $this->load->view('base/header');
        $this->load->view('pages/auth/login');
        $this->load->view('base/footer');
    }

    public function loginProcess()
    {
        $post = $this->input->post();
        $loginVerify = $this->UsersModel->loginVerify($post['email'], $post['password']);

        if ($loginVerify) {
            $this->session->set_userdata((array)$loginVerify);
            redirect('home');
        } else {
            $this->session->set_flashdata([
                'error' => 'akun tidak ditemukan'
            ]);
            redirect('login');
        }
    }
}
