<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DetailsProductController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model(['ProductModel']);
    }

    public function index($id)
    {
        $product = $this->ProductModel->getProductById($id);

        $this->load->view('base/header');
        $this->load->view('pages/main/products/details-product', [
            'product' => $product[0]
        ]);
        $this->load->view('base/footer');
    }
}
