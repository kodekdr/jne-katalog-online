<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UsersModel extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getUser(){
        return $this->db->get('master_user')->result_array();
    }

    public function loginVerify($email, $password){
        $user = $this->db->where('email', $email)->get('master_user')->row();

        if (password_verify($password, $user->password) === true && $user->email === $email) {
            return $user;
        }else{
            return false;
        }
    }
}
