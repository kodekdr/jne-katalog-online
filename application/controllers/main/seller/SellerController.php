<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SellerController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(['url', 'filter_products_component']);
        $this->load->model(['SellerModel']);
    }

    public function index($id)
    {
        $products = $this->SellerModel->getProductByIdSeller($id);
        
        $this->load->view('base/header');
        $this->load->view('pages/main/seller/seller', [
            'products' => $products
        ]);
        $this->load->view('base/footer');
    }
}
