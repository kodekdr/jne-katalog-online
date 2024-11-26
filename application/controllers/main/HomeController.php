<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(['url', 'filter_products_component']);
        $this->load->model(['ProductModel', 'CategoryModel']);
    }

    public function index()
    {
        $this->load->library('pagination');

        $keyword = $this->input->get('keyword');
        $categories = $this->input->get('categories');

        $config['base_url'] = base_url('home');
        $config['total_rows'] = $this->ProductModel->countAll();
        $config['per_page'] = 3;
        $config['suffix'] = '?' . http_build_query(['keyword' => $keyword, 'categories' => $categories]);
        $config['first_url'] = $config['base_url'] . $config['suffix'];

        $this->pagination->initialize($config);

        $startPage = $this->uri->segment(2) ? $this->uri->segment(2) : 0;
        $products = $this->ProductModel->getProduct($keyword, $categories, $config['per_page'], $startPage);
        // $categories = $this->CategoryModel->getCategory();

        $this->load->view('base/header');
        $this->load->view('pages/main/home', [
            'products' => $products,
            // 'categories' => $categories,
            'pagination' => $this->pagination->create_links()
        ]);
        $this->load->view('base/footer');
    }
}
