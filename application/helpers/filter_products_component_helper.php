<?php
defined('BASEPATH') or exit('No direct script access allowed');

function filter_products_component($action)
{
    $ci = &get_instance();

    // var_dump($action);

    $ci->load->helper('url');
    $ci->load->model(['CategoryModel']);

    $categories = $ci->CategoryModel->getCategory();

    // $ci->load->view('base/header');
    $ci->load->view('components/filter-products', [
        'categories' => $categories,
        'action' => $action
    ]);
    // $ci->load->view('base/footer');
}
