<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - UNHI Fashion</title>

    <!-- Css -->
    <link rel="stylesheet" href="<?= base_url(); ?>style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/fancybox/jquery.fancybox.css">
</head>

<body>
    <!-- Container Start -->
    <div class="container">

        <!-- Navbar Start -->
        <div class="row">
            <div class="column-12">
                <ul class="daftar-menu">
                    <li class="active"><a href="<?= base_url('admin'); ?>">Admin</a></li>
                    <li><a href="<?= base_url('admin/manajemen_produk'); ?>">Manajemen Produk</a></li>
                    <li><a href="<?= base_url(); ?>" target="_blank">Lihat Website</a></li>
                    <li><a href="<?= base_url() ?>auth/logout">Logout</a></li>
                </ul>
                <img src="images/banner.jpg" alt="" class="img-responsive">
            </div>
        </div>
        <!-- Container End -->

        <!-- content start -->
        <?php $this->renderSection('content'); ?>
        <!-- content end -->
    </div>

    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="column-12">
                    <h2 align="center">UNHI Fashion</h2>
                    <div class="text-center">
                        Alamat: Tembau, Jl. Sangalangit, Penatih, Kec. Denpasar Tim., Kota Denpasar, Bali 80238
                    </div>
                    <div class="text-center">
                        Telepon: (0361) 464700
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-credit">
        <div class="container">
            <div class="row">
                <div class="column-12 text-center">
                    Created by <a href="https://mahendrawardana.com" target="_blank">www.mahendrawardana.com</a> for Web Programming Course
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- JS -->
    <script src="<?= base_url(); ?>js/lightbox.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="<?= base_url(); ?>plugins/fancybox/jquery.fancybox.js"></script>
</body>

</html>