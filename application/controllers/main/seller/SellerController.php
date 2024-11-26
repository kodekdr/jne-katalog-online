<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SellerController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(['url', 'filter_products_component', 'search_products_component']);
        $this->load->model(['SellerModel']);
    }

    public function index($id)
    {
        $this->load->library('pagination');

        $keyword = $this->input->get('keyword');
        $categories = $this->input->get('categories');

        $config['base_url'] = base_url('seller/' . $id);
        $config['total_rows'] = count($this->SellerModel->countAllProductByIdSeller($id));
        $config['per_page'] = 2;
        $config['uri_segment'] = 3;
        $config['reuse_query_string'] = true; // Agar query string tetap ada di semua tautan

        // Konfigurasi pertama
        // $config['first_url'] = $config['base_url'] . '?keyword=' . urlencode($keyword) . '&categories=' . urlencode($categories);
        // $config['suffix'] = '?keyword=' . urlencode($keyword) . '&categories=' . urlencode($categories);
        // $config['suffix'] = '?' . http_build_query(['keyword' => $keyword, 'categories' => $categories]);
        // $config['first_url'] = $config['base_url'] . $config['suffix'];

        $this->pagination->initialize($config);

        $offset = $this->uri->segment(3) ? (int) $this->uri->segment(3) : 0;
        $products = $this->SellerModel->getProductByIdSeller($id, $keyword, $categories, $config['per_page'], $offset);

        $this->load->view('base/header');
        $this->load->view('pages/main/seller/seller', [
            'products' => $products,
            'pagination' => $this->pagination->create_links(),
        ]);
        $this->load->view('base/footer');
    }
}
