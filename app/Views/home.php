<?= $this->extend('template/template'); ?>

<?= $this->section('content'); ?>

<!-- Banner Start -->
<div class="row">
    <div class="column-12">
        <h1 align="center">Selamat Datang di UNHI Fashion</h1>
        <p align="center">Tokok Online UNHI adalah sebuah toko yang memasarkan produk fashion berupa
            baju, celana, topi, gelang, jam kekinian yang dapat meningkatkan fashion Anda.
        </p>
    </div>
</div>
<!-- Banner End -->

<!-- Daftar produk start -->
<div class="row daftar-produk" style="background-color: #f6f6f6; border-radius: 2%;">
    <div class="column-3">
        <img src="images/product-1.jpg" alt="" class="hover-shadow cursor img-responsive">
        <h2 align="center">asdasd</h2>
        <div class="harga-produk">Rp. asdad</div>
        <p align="center">asdad</p>
        <div class="text-center">
            <a href="https://api.whatsapp.com/send?phone=6282146121643&text=Saya%20tertarik%20untuk%20membeli%20produk%20asdasda%20segera." target="_blank">
                <img src="images/whatsapp-button.png" alt="" width="160">
            </a>
        </div>
    </div>
</div>
<!-- Daftar produk end -->

<?= $this->endSection(); ?>