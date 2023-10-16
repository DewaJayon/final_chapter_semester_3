<?= $this->extend('template/admin'); ?>

<?= $this->section('content'); ?>

<!-- Table Start -->
<div class="row">
    <div class="column-12">
        <h1 align="center">Halaman Manajemen Produk</h1>
    </div>
    </br>
    </br>
    </br>
    <div class="column-12">
        <div class="text-right">
            <a href="tambah_produk.php" class="btn btn-success">Tambah Produk</a>
        </div>
        </br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga Produk</th>
                    <th>Deskripsi Produk</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>asda</td>
                    <td>
                        <img src="<?= base_url(); ?>images/product-1.jpg" alt="" width="150">
                    </td>
                    <td>adsada</td>
                    <td>asdasd</td>
                    <td>asdas</td>
                    <td>
                        <a href="#" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- Table End -->

<?= $this->endSection(); ?>