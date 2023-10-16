<?= $this->extend('template/template'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="column-12">
        <h1 align="center">Kontak Kami</h1>
        <p align="center">Silahkan mengisi form dibawah untuk Kontak Kami</p>
    </div>
</div>

<div class="row daftar-produk">
    <form action="process/login.php" method="post">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label>Judul Pesan</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="form-group">
            <label>Isi Pesan</label>
            <textarea class="form-control" name="email" rows="4" cols="4" required></textarea>
        </div>
        <div class="form-group">
            <nutton type="submit" class="btn btn-success">Kirim Pesan</button>
        </div>
    </form>
</div>
</div>

<?= $this->endSection(); ?>