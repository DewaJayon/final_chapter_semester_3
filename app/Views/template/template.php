<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNHI Fashion - Toko Online Fashion di Bali</title>

    <!-- Css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.css">

</head>

<body>

    <!-- Container Start -->
    <div class="container">
        <!-- Navbar Start -->
        <div class="row">
            <div class="column-12">
                <ul class="daftar-menu">
                    <li><a href="">Beranda</a></li>
                    <li><a href="pages">Daftar Produk</a></li>
                    <li><a href="pages/tentang-kami.php">Tentang Kami</a></li>
                    <li><a href="pages/kontak-kami.php">Kontak Kami</a></li>
                </ul>
                <img src="images/banner.jpg" alt="" class="img-responsive">
            </div>
        </div>
        <!-- Navbar End -->

        <!-- content start -->
        <?php $this->renderSection('content'); ?>
        <!-- content end -->

    </div>
    <!-- Container End -->

    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="column-12">
                    <h2 align="center">UNHI Fashion</h2>
                    <ul class="footer-menu">
                        <li><a href="">Beranda</a></li>
                        <li><a href="">Daftar Produk</a></li>
                        <li><a href="">Tentang Kami</a></li>
                        <li><a href="">Kontak Kami</a></li>
                    </ul>
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
    <script src="js/lightbox.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="plugins/fancybox/jquery.fancybox.js"></script>
</body>

</html>