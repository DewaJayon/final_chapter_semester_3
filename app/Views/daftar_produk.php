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
            <img src="<?= base_url('images/' . $row['product_image']); ?>" alt="" class="hover-shadow cursor img-responsive" onclick="openModal(<?php echo $row['id_product'] ?>);currentSlide(<?php echo $row['id_product'] ?>)">
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

<!--  Modal/Lightbox Start -->
<div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">
        <?php foreach ($product_list as $key => $row) { ?>
            <div class="mySlides">
                <img src="<?= base_url('images/' . $row['product_image']); ?>" style="width:100%">
            </div>
        <?php } ?>
        <!-- Next/previous controls -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
</div>
<!-- Modal/Lightbox End -->

<?= $this->endSection(); ?>