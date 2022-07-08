<!DOCTYPE html>
<?php require_once("AmbilAnggota.php"); ?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:300,400,700|Rubik:300,400,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->

    <!-- <title>About Us</title> -->
</head>

<body>
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
                    <li class="hidden-xs probootstrap-logo-center"><a href="index.php"><img src="img/logo_md.png" class="hires" width="181" height="50" alt="Free Bootstrap Template by uicookies.com"></a></li>
                    <li><a href="reservation.html">Reservation</a></li>
                    <li><a href="blog.php">blog</a></li>
                    <li class="active"><a href="aboutus.php">About Us</a></li>

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
    <br><br>
    <section class="probootstrap-slider flexslider">
        <ul class="slides">
            <li style="background-image: url(img/fotobareng.jpeg);" class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="probootstrap-slider-text text-center">
                                <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
                                <h1 class="probootstrap-heading probootstrap-animate">Kelompok 12</h1>
                                <div class="probootstrap-animate probootstrap-sub-wrap">Kumpulan manusia yang sedang merahi cita cita nya</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(img/serius.png);" class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="probootstrap-slider-text text-center">
                                <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
                                <h1 class="probootstrap-heading probootstrap-animate">Kelompok 12</h1>
                                <div class="probootstrap-animate probootstrap-sub-wrap">Semoga Nilai bagus</div>
                            </div>
                        </div>
                    </div>
                </div>

            </li>
        </ul>
    </section>

    <p>
        <center><u>Our members :</u></center>
    </p>

    <br><br>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-4 g-5">
            <?php for ($i = 0; $i < count($name); $i++) : ?>
                <div class="col">
                    <div class="card">
                        <img src="<?php echo $img[$i]; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $name[$i]; ?></h5>
                            <p class="card-text">
                                Nama panggilan : <?php echo $nick[$i]; ?>
                                <br>
                                NIM : <?php echo $nim[$i]; ?>
                                <br>
                                Quote : <?php echo $quote[$i]; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
    <br><br>

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>