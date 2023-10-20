<?= $this->extend('template/template'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="column-12">
        <h1 align="center">Selamat Datang di UNHI Fashion</h1>
        <p align="center">Toko Online UNHI adalah sebuah toko yang memasarkan produk fashion berupa baju, celana, topi, jam kekinian, yang dapat meningkatkan fashion anda</p>
    </div>
</div>

<div class="row daftar-produk" style="background-color: #f6f6f6; border-radius: 2%;">
    <?php foreach ($product_list as $key => $row) { ?>
        <div class="column-3">
            <img src="<?= base_url('images/' . $row['product_image']); ?>" alt="" class="hover-shadow cursor img-responsive">
            <h2 align="center"><?= $row['product_name'] ?></h2>
            <div class="harga-produk">Rp. <?= $row['product_price'] ?></div>
            <p align="center"><?= $row['product_description'] ?></p>
            <div class="text-center">
                <a href="https://api.whatsapp.com/send?phone=6282146121643&text=Saya%20tertarik%20untuk%20membeli%20produk%20asdasda%20segera." target="_blank">
                    <img src="images/whatsapp-button.png" alt="" width="160">
                </a>
            </div>
        </div>
    <?php } ?>
</div>

<?= $this->endSection(); ?>