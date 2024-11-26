<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoryModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getCategory()
    {
        $query = $this->db->get('master_kategori')->result_array();
        return $query;
    }
}
