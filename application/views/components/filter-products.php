<form action="<?= base_url($action); ?>" method="get">
    <?php foreach ($categories as $category) : ?>
        <label for="">
            <input type="checkbox" name="categories[]" value="<?= $category['nama_kategori'] ?>"
                <?= in_array($category['nama_kategori'], (array) $this->input->get('categories')) ? 'checked' : '' ?>>
            <?= $category['nama_kategori'] ?>
        </label>
    <?php endforeach ?>
    <button type="submit">Filter</button>
</form>