<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProductModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getProduct($keyword, $categories, $limit, $startPage)
    {
        $this->db->select('master_produk.*, master_seller.*, master_kategori.nama_kategori')
            ->from('master_produk')
            ->join('master_seller', 'master_seller.id = master_produk.id_seller')
            ->join('master_kategori', 'master_kategori.id = master_produk.id_kategori')
            ->like('master_produk.nama_produk', $keyword);

        if (!empty($categories)) {
            $this->db->where_in('master_kategori.nama_kategori', $categories);
        }

        return $this->db->limit($limit, $startPage)->get()->result_array();
    }

    public function getProductById($id)
    {
        $query = $this->db->select('master_produk.*, master_seller.*, master_kategori.nama_kategori')
            ->from('master_produk')
            ->join('master_seller', 'master_seller.id = master_produk.id_seller')
            ->join('master_kategori', 'master_kategori.id = master_produk.id_kategori')
            ->where('master_produk.id', $id)
            ->get()->result_array();

        return $query;
    }

    public function countAll(){
        return $this->db->count_all('master_produk');
    }
}
