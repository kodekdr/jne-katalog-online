<h1>Halaman home</h1>

<form action="home" method="get">
    <input type="text" placeholder="search" name="keyword">
    <button>submit</button>
</form>

<!-- <form action="home" method="get">
    <?php foreach ($categories as $category) : ?>
        <label for="">
            <input type="checkbox" name="categories[]" value="<?= $category['nama_kategori'] ?>"
                <?= in_array($category['nama_kategori'], (array) $this->input->get('categories')) ? 'checked' : '' ?>>
            <?= $category['nama_kategori'] ?>
        </label>
    <?php endforeach ?>
    <button type="submit">Filter</button>
</form> -->

<?php filter_products_component('home') ?>

<a href="<?= base_url('home') ?>">
    <button>reset filter</button>
</a>
<div style="display: flex; gap: 10px; flex-wrap: wrap;">
    <?php foreach ($products as $product) : ?>
        <div style="border: 1px solid black; padding: 10px;">
            <img width="100" height="100" src="uploads/foto_1.png" alt="">
            <p><?= $product['nama_kategori'] ?></p>
            <a href="<?= base_url('product/details-product/') . $product['id']; ?>" style="text-decoration: none;">
                <h3><?= $product['nama_produk'] ?></h3>
            </a>
            <a href="<?= base_url('seller/') . $product['id_seller'] ?>">
                <p><?= $product['nama_toko'] ?></p>
            </a>
            <p><?= $product['alamat'] ?></p>
            <p><?= $product['harga'] ?></p>
            <a href="https://wa.me/+62<?= ltrim($product['no_wa'], '0') ?>">
                <button>Hubungi Seller</button>
            </a>
        </div>
    <?php endforeach ?>
</div>

<?= $pagination ?>