<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SellerModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getProductByIdSeller($idSeller)
    {
        // return $this->db->where('id_seller', $idSeller)->get('master_produk')->result_array();

        $query = $this->db->select('master_produk.*, master_seller.*, master_kategori.nama_kategori')
            ->from('master_produk')
            ->join('master_seller', 'master_seller.id = master_produk.id_seller')
            ->join('master_kategori', 'master_kategori.id = master_produk.id_kategori')
            ->where('master_produk.id_seller', $idSeller)
            ->get()->result_array();

        return $query;
    }
}
