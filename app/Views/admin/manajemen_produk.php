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
            <a href="<?= base_url('admin/tambah_produk') ?>" class="btn btn-success">Tambah Produk</a>
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

                <?php foreach ($product_list as $key => $row) { ?>
                    <tr>

                        <td><?= ++$key; ?>.</td>
                        <td>
                            <img src="<?= base_url('images/' . $row['product_image']); ?>" alt="" width="150">
                        </td>
                        <td><?= $row['product_name'] ?></td>
                        <td><?= $row['product_price'] ?></td>
                        <td><?= $row['product_description'] ?></td>
                        <td>
                            <a href="<?= base_url('admin/edit_produk/' . $row['id_product']) ?>" class="btn btn-success">Edit</a>
                            <a href="<?= base_url('admin/produk/delete/' . $row['id_product']) ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Table End -->

<?= $this->endSection(); ?>