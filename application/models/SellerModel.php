<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SellerModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getProductByIdSeller($idSeller, $keyword, $categories, $limit, $offset)
    {
        $this->db->select('master_produk.*, master_seller.*, master_kategori.nama_kategori')
            ->from('master_produk')
            ->join('master_seller', 'master_seller.id = master_produk.id_seller')
            ->join('master_kategori', 'master_kategori.id = master_produk.id_kategori')
            ->like('master_produk.nama_produk', $keyword);
        // ->where('master_produk.id_seller', $idSeller)->get()->result_array();

        if (!empty($categories)) {
            $this->db->where_in('master_kategori.nama_kategori', $categories);
        }

        return $this->db->where('master_produk.id_seller', $idSeller)
            ->limit($limit, $offset)
            ->get()->result_array();
    }

    public function countAllProductByIdSeller($idSeller)
    {
        return $this->db->where('id_seller', $idSeller)->get('master_produk')->result_array();
    }
}
