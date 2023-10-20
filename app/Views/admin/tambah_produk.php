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
        <h3>Isi form dibawan untuk Tambah Produk :</h3>
        <form action="<?php base_url('admin/tambah_produk/insert') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Nama Produk</label>
                <input type="text" class="form-control" name="product_name" required>
            </div>
            <div class="form-group">
                <label for="">Harga Produk</label>
                <input type="number" class="form-control" name="product_price" required>
            </div>
            <div class="form-group">
                <label for="">Gambar Produk</label>
                <input type="file" class="form-control" name="product_image" required>
            </div>
            <div class="form-group">s
                <label for="">Deskripsi Produk</label>
                <textarea class="form-group" name="product_description" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan Produk</button>
                <a href="<?= base_url('admin/manajemen_produk') ?>" class="btn btn-warning">Kembali ke Daftar Produk</a>
            </div>
        </form>
    </div>
</div>
<!-- Table End -->
<?= $this->endSection(); ?>