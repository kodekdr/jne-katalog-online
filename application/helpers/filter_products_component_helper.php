<?php
defined('BASEPATH') or exit('No direct script access allowed');

function filter_products_component($action)
{
    $ci = &get_instance();

    $ci->load->helper('url');
    $ci->load->model(['CategoryModel']);

    $categories = $ci->CategoryModel->getCategory();

    $ci->load->view('components/filter-products', [
        'categories' => $categories,
        'action' => $action
    ]);
}
