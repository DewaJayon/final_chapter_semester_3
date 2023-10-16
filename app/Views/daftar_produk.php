<?= $this->extend('template/template'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="column-12">
        <h1 align="center">Selamat Datang di UNHI Fashion</h1>
        <p align="center">Toko Online UNHI adalah sebuah toko yang memasarkan produk fashion berupa baju, celana, topi, jam kekinian, yang dapat meningkatkan fashion anda</p>
    </div>
</div>

<div class="row daftar-produk">
    <div class="column-3">
        <a data-fancybox="gallery" herf="image/product-1.jpg">
            <img src="image/product-1.jpg" class="img-responsive">
        </a>
        <h2 align="center">asdasda</h2>
        <div class="harga-produk">Rp. asdasd</div>
        <p align="center">asdad</p>
        <div class="text-center">
            <a href="https;//api.whatsapp.com/send?phone=6281934364063&text=Saya%20tertarik%20untuk%20membeli%20produk%20asdasd%20segera.">
                <img src="image/whatsapp-button.png" width="160">
            </a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>