<?php require_once("ngambildata_orang.php"); ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:300,400,700|Rubik:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- START: header -->

    <header role="banner" class="probootstrap-header">
        <!-- <div class="container"> -->
        <div class="row">
            <a href="index.php" class="probootstrap-logo visible-xs"><img src="img/logo_sm.png" class="hires" width="120" height="33" alt="Free Bootstrap Template by uicookies.com"></a>

            <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
            <div class="mobile-menu-overlay"></div>

            <nav role="navigation" class="probootstrap-nav hidden-xs">
                <ul class="probootstrap-main-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="rooms.php">Our Rooms</a></li>
                    <li class="hidden-xs probootstrap-logo-center">
                        <a href="index.php"><img src="img/logo_md.png" class="hires" width="181" height="50" alt="Free Bootstrap Template by uicookies.com"></a>
                    </li>
                    <li><a href="reservation.html">Reservation</a></li>
                    <li class="active"><a href="blog.php">Blog</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                </ul>
                <div class="extra-text visible-xs">
                    <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
                    <h5>Connect With Us</h5>
                    <ul class="social-buttons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook2"></i></a></li>
                        <li><a href="#"><i class="icon-instagram2"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- </div> -->
    </header>
    <!-- END: header -->

    <section class="probootstrap-slider flexslider probootstrap-inner">
        <ul class="slides">
            <li style="background-image: url(img/slider_1.jpg);" class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="probootstrap-slider-text text-center">
                                <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
                                <h1 class="probootstrap-heading probootstrap-animate">Blog</h1>
                                <div class="probootstrap-animate probootstrap-sub-wrap">Memberikan informasi perihal wisata sekitar</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <section class="probootstrap-section">
        <div class="container">
            <div class="row">
                <!-- Looping dari RDF kelompok lain -->
                <?php for ($i = 0; $i < count($title); $i++) : ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="probootstrap-hentry mb30">
                            <p><a href="#"><img src="<?= $image[$i]; ?>" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a></p>
                            <h3 class="mt0"><a class="hover-reverse"> <?= $title[$i]; ?></a></h3>
                            <p>City : <?= $city[$i]; ?></p>
                            <p>Telp : <?= $phone[$i]; ?></p>
                            <p>Rp <?= $price[$i]; ?></p>
                            <p>
                                <a class="btn btn-primary" target="__blank" href="<?= $map[$i]; ?>">Klik Untuk Lokasi</a>
                            </p>
                        </div>
                    </div>
                <?php endfor; ?>
                <!-- End looping -->
            </div>
        </div>
    </section>

    <section class="probootstrap-half">
        <div class="image" style="background-image: url(img/slider_2.jpg);"></div>
        <div class="text">
            <div class="probootstrap-animate fadeInUp probootstrap-animated">
                <h2 class="mt0">Hotel Nomor 1 Di Indonesia</h2>
                <p><img src="img/curve_white.svg" class="seperator" alt="Free HTML5 Bootstrap Template"></p>
                <div class="row">
                    <div class="col-md-6">
                        <p>Hotel dengan hiasan mewah, yang terletak di kawasan Komersial pusat Kota, denganfasilitas belanja, hiburan, dan tempat makan. Para tamu akan menikmati lokasi prima,di mana terdapat banyak gedung-gedung bisnis besar. Jarak menuju
                            Bandara internasional hanya sekitar 30 menit. </p>
                    </div>
                    <div class="col-md-6">
                        <p>Para tamu juga akan menikmati pemandangan panorama kota. Pemilihan beberapa restoran sertafitur terbaik pemenang penghargaan tempat makan di Jakarta, dengan pilihan komprehensif pilihan masakan. Hotel Foya Foya di Indonesia adalah
                            hotel mewah yang ideal bagi wisatawan yang ingin keindahan dan keanggunan serta fasilitas modern</p>
                    </div>
                </div>
                <p><a href="#" class="link-with-icon white">Learn More <i class=" icon-chevron-right"></i></a></p>
            </div>
        </div>
    </section>

    <!-- START: footer -->
    <footer role="contentinfo" class="probootstrap-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="probootstrap-footer-widget">
                        <p class="mt40"><img src="img/logo_sm.png" class="hires" width="120" height="33" alt="Free HTML5 Bootstrap Template by uicookies.com"></p>
                        <p>Lupakan tentang masa depan, marilah berfoya foya aja di hotel ini silahkan habiskan duit</p>
                        <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
                    </div>
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <div class="probootstrap-footer-widget">
                        <h3>Contact</h3>
                        <ul class="probootstrap-contact-info">
                            <li><i class="icon-location2"></i> <span>Jalan Dr. T. Mansur No.9, Padang Bulan, Kec. Medan Baru, Kota Medan, Sumatera Utara 20222</span></li>
                            <li><i class="icon-mail"></i><span>foyafoya@gmail.com</span></li>
                            <li><i class="icon-phone2"></i><span>+62 62123 213</span></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END: footer -->
    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>