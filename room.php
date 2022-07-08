<?php require_once("ngambildata_hotel.php"); ?>

<?php
$id_kamar = $_GET['kamar'];

$id_kamar = ctype_digit($id_kamar) ? intval($id_kamar) : null;

if ($id_kamar === null || $id_kamar > $total_kamar - 1) {
    header('Location: rooms.php');
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Room</title>
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
                    <li class="active"><a href="rooms.html">Our Rooms</a></li>
                    <li class="hidden-xs probootstrap-logo-center">
                        <a href="index.php"><img src="img/logo_md.png" class="hires" width="181" height="50" alt="Free Bootstrap Template by uicookies.com"></a>
                    </li>
                    <li><a href="reservation.html">Reservation</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
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
                                <h1 class="probootstrap-heading probootstrap-animate">Best Rooms</h1>
                                <div class="probootstrap-animate probootstrap-sub-wrap">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <section class="probootstrap-section">
        <div class="container">
            <!-- Menampilkan data dari RDF berdasarkan index yang disimpan -->
            <div class="row">
                <div class="col-lg-6">
                    <a href=""><img src="<?= $image[$id_kamar]; ?>" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
                </div>
                <div class="col-lg-6">
                    <div class="text">
                        <h3><?= $type[$id_kamar]; ?></h3>
                        <div class="post-meta mb30">
                            <ul>
                                <li><span class="review-rate"><?= $review[$id_kamar]; ?> <i class="icon-star"></i> <?= $reviewer[$id_kamar]; ?> REVIEW</li>
                                <li><i class="icon-user2"></i><?= $guest[$id_kamar]; ?> guest</li>
                            </ul>
                        </div>
                        <p><?= $description[$id_kamar]; ?></p>
                        <p><a href="book.php?kamar=<?= $id_kamar; ?>" class="btn btn-primary" role="button">Book room</a></p>
                    </div>
                </div>
            </div>
            <!-- End menampilkan data -->


            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Why Choose Us?</h2>
                    <p class="mb50"><img src="img/curve.svg" class="svg" alt="Free HTML5 Bootstrap Template"></p>
                </div>
                <div class="col-md-4">
                    <div class="service left-icon left-icon-sm probootstrap-animate">
                        <div class="icon">
                            <i class="icon-check"></i>
                        </div>
                        <div class="text">
                            <h3>1+ Million Hotel Rooms</h3>
                            <p>Kamar kami sangat berlimpah dan nyaman semuanya</p>
                            <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service left-icon left-icon-sm probootstrap-animate">
                        <div class="icon">
                            <i class="icon-check"></i>
                        </div>
                        <div class="text">
                            <h3>Food &amp; Drinks</h3>
                            <p>kami menyediakan makanan halal dan pasti nikmat bagi para tamu yang datang ke kami</p>
                            <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service left-icon left-icon-sm probootstrap-animate">
                        <div class="icon">
                            <i class="icon-check"></i>
                        </div>
                        <div class="text">
                            <h3>Airport Taxi</h3>
                            <p>Kami menyediakan jemputan di bandara untuk tamu yang memakai atau memesan hotel kami </p>
                            <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="probootstrap-section">
        <div class="container">
            <div class="row mb30">
                <div class="col-md-8 col-md-offset-2 probootstrap-section-heading text-center">
                    <h2>Service Dari Hotel kami</h2>
                    <p class="lead">Kami memberikan pelayanan dengan terbaik yang kami punya</p>
                    <p><img src="img/curve.svg" class="svg" alt="Free HTML5 Bootstrap Template"></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service left-icon probootstrap-animate">
                        <div class="icon">
                            <img src="img/flaticon/svg/001-building.svg" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
                        </div>
                        <div class="text">
                            <h3>1+ Million Hotel Rooms</h3>
                            <p>memiliki berbagai jenis ruangan yang </p>
                            <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service left-icon probootstrap-animate">
                        <div class="icon">
                            <img src="img/flaticon/svg/003-restaurant.svg" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
                        </div>
                        <div class="text">
                            <h3>Food &amp; Drinks</h3>
                            <p>makanan yang kami berikan berkualitas dan dimasak oleh chef yang terkenal </p>
                            <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service left-icon probootstrap-animate">
                        <div class="icon">
                            <img src="img/flaticon/svg/004-parking.svg" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
                        </div>
                        <div class="text">
                            <h3>Airport Taxi</h3>
                            <p>kami memiliki layanan untuk menjemput pelanggan langsung di bandara</p>
                            <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
                        </div>
                    </div>
                </div>
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
                        <p>Hotel dengan hiasan mewah, yang terletak di kawasan Komersial pusat Kota, denganfasilitas belanja, hiburan, dan tempat makan.
                            Para tamu akan menikmati lokasi prima,di mana terdapat banyak gedung-gedung bisnis besar.
                            Jarak menuju Bandara internasional hanya sekitar 30 menit. </p>
                    </div>
                    <div class="col-md-6">
                        <p>Para tamu juga akan menikmati pemandangan panorama kota.
                            Pemilihan beberapa restoran sertafitur terbaik pemenang penghargaan tempat makan di Jakarta, dengan pilihan komprehensif pilihan
                            masakan. Hotel Foya Foya di Indonesia adalah hotel mewah yang ideal bagi wisatawan yang ingin keindahan dan keanggunan serta fasilitas modern</p>
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
            <div class="row mt40">
                <div class="col-md-12 text-center">
                    <ul class="probootstrap-footer-social">
                        <li><a href=""><i class="icon-twitter"></i></a></li>
                        <li><a href=""><i class="icon-facebook"></i></a></li>
                        <li><a href=""><i class="icon-instagram2"></i></a></li>
                    </ul>
                    <p>
                        <small>&copy; 2017 <a href="https://uicookies.com/" target="_blank">uiCookies:Atlantis</a>. All Rights Reserved. <br> Designed &amp; Developed by <a href="https://uicookies.com/" target="_blank">uicookies.com</a> Demo Images: Unsplash.com &amp; Pexels.com</small>
                    </p>

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