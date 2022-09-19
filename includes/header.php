<?php session_start(); ?>
<?php
if(isset($_GET['action'])=="Move"){
$id=urldecode(base64_decode($_GET['id']));
$_SESSION['ids'] = $id;
if (!empty($_SESSION['ids'])) {
header("location: postDetails");
}
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>UjamaaTech</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
        <link rel="stylesheet" href="assets/css/gijgo.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/animated-headline.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- helvetica font -->
        <link href="//db.onlinewebfonts.com/c/63137a821976b7fdfcf941ab1528cb19?family=AG_Helvetica" rel="stylesheet" type="text/css"/>
        <style>
        .news-scroll a {
        text-decoration: none
        }
        .dot {
        height: 6px;
        width: 6px;
        margin-left: 3px;
        margin-right: 3px;
        margin-top: 2px !important;
        background-color: #3bb54a;
        border-radius: 50%;
        display: inline-block
        }
        </style>
        <body>
            <!-- ? Preloader Start -->
            <div id="preloader-active">
                <div class="preloader d-flex align-items-center justify-content-center">
                    <div class="preloader-inner position-relative">
                        <div class="preloader-circle"></div>
                        <div class="preloader-img pere-text">
                            <b>Loading...</b>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Preloader Start-->
            <!-- <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <img src="assets/img/gallery/index.jpg" style="display: block; margin-left: auto;  margin-right: auto; padding: 3px; width: 100%; height:80px" alt="ads">
                        <img src="assets/img/gallery/cindex.jpg" style="display: block; margin-left: auto;  margin-right: auto; padding: 3px; width: 100%; height:80px" alt="ads">
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div> -->
            <header>
                <!-- Header Start -->
                <div class="header-area">
                    <div class="main-header ">
                        <div class="header-top ">
                            <div class="container-fluid">
                                <div class="col-xl-12">
                                    <div class="row d-flex justify-content-lg-between align-items-center">
                                        <div class="header-info-left">
                                            <li class="d-none d-lg-block">
                                                <div class="form-box f-right">
                                                    <form action="#" method="POST">
                                                        <input type="text" name="searchmaster" placeholder="Search your interest..." onsubmit="this.form.submit()">
                                                        <div class="search-icon">
                                                            <i class="ti-search"></i>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="header-info-mid">
                                            <!-- logo -->
                                            <div class="logo">
                                                <a href="index"><img src="assets/img/logo/logo.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="header-info-right d-flex align-items-center">
                                            <!-- <ul>
                                                <li><a href="contact"></a></li>
                                            </ul> -->
                                            <!-- Social -->
                                            <div class="header-social">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-bottom  header-sticky">
                            <div class="container-fluid">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <!-- logo 2 -->
                                        <div class="logo2">
                                            <a href="index"><img src="assets/img/logo/logo.png" alt=""></a>
                                        </div>
                                        <!-- logo 3 -->
                                        <div class="logo3 d-block d-sm-none">
                                            <a href="index"><img src="assets/img/logo/logo-mobile.png" alt=""></a>
                                        </div>
                                        <!-- Main-menu -->
                                        <div class="main-menu text-center d-none d-lg-block">
                                            <nav>
                                                <ul id="navigation">
                                                    <li><a href="cBusiness">Business</a></li>
                                                    <li><a href="cEntrepreneurship">Entrepreneurship</a></li>
                                                    <li><a href="cAgriculture">Agriculture</a></li>
                                                    <li><a href="cTechnology">Technology</a></li>
                                                    <li><a href="cSports">Sports</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <!-- Mobile Menu -->
                                    <div class="col-12">
                                        <div class="mobile_menu d-block d-lg-none"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header End -->
            </header>
            <main>
                <!-- Nwes slider Start -->
                <div class="news-slider-area pt-5 pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-tittle">
                                    <h2><button class="btn btn-danger">Breaking News</button></h2>
                                </div>
                                <div class="d-flex justify-content-between align-items-center breaking-news">
                                    <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                                    <?php
                                    $query = "SELECT * FROM uploads where BREAKING = '1' AND APPROVE = 'OK' ORDER BY UP_ID DESC";
                                    $result = mysqli_query($con, $query)  or die(mysqli_error($con));
                                    $num = mysqli_num_rows($result);
                                    if ($num > 0) {
                                    while($row = mysqli_fetch_array( $result))
                                    {
                                    echo '<a class="item" href="index?id='.urlencode(base64_encode($row['UP_ID'])).'&action=Move"><b>"'.$row['HEADING'].'"</b></a><span class="dot"></span>';
                                    }}?>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Nwes slider End -->