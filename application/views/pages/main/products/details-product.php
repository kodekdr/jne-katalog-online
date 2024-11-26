<h1>Details Produk</h1>

<div style="border: 1px solid black; padding: 10px;">
    <img width="100" height="100" src="uploads/foto_1.png" alt="">
    <p><?= $product['nama_kategori'] ?></p>
    <h3><?= $product['nama_produk'] ?></h3>
    <p><?= $product['nama_toko'] ?></p>
    <p><?= $product['alamat'] ?></p>
    <p><?= $product['harga'] ?></p>
    <a href="https://wa.me/+62<?= ltrim($product['no_wa'], '0') ?>">
        <button>Hubungi Seller</button>
    </a>

    <p><?= $product['deskripsi'] ?></p>
</div>