<?php
defined('BASEPATH') or exit('No direct script access allowed');

function search_products_component($action)
{
    $ci = &get_instance();

    $ci->load->helper('url');

    $ci->load->view('components/search-products', [
        'action' => $action
    ]);
}
