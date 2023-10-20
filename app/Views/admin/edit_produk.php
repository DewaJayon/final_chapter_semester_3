<?= $this->extend('template/admin'); ?>

<?= $this->section('content'); ?>

<!-- Table Start -->
<div class="row">
    <div class="column-12">
        <h1 align="center">Halaman Manajemen Produk</h1>
        </br>
        </br>
        </br>
    </div>
    <div class="column-12">
        <h3>Isi form dibawan untuk Edit Produk :</h3>
        <form action="<?php base_url('Admin/Produk/edit') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Nama Produk</label>
                <input type="text" class="form-control" name="product_name" value="<?= $product_row['product_name'] ?>" required>
            </div>
            <div class="form-group">
                <label for="">Harga Produk</label>
                <input type="number" class="form-control" name="product_price" value="<?= $product_row['product_price'] ?>" required>
            </div>
            <div class="form-group">
                <label for="">Gambar Produk</label>
                </br>
                <img src="<?= base_url('images/' . $product_row['product_image']); ?>" alt="" width="150">
                </br>
                </br>
                <input type="file" class="form-control" name="product_image" value="<?= $product_row['product_image'] ?>" required>
            </div>
            <div class="form-group">
                <label for="">Deskripsi Produk</label>
                <textarea class="form-control" name="product_description" required><?= $product_row['product_description'] ?></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Perbarui Produk</button>
                <a href="<?= base_url('admin/manajemen_produk') ?>" class="btn btn-warning">Kembali ke Daftar Produk</a>
            </div>
        </form>
    </div>
</div>
<!-- Table End -->

<?= $this->endSection(); ?>