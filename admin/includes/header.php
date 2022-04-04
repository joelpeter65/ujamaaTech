<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="zxx">
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
        <!-- css for upload pics and crop -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/dropzone/dist/dropzone.css" />
        <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet"/>
        <script src="https://unpkg.com/dropzone"></script>
        <script src="https://unpkg.com/cropperjs"></script>
        
        <style>
        .image_area {
        position: relative;
        }
        img {
        display: block;
        max-width: 100%;
        }
        .preview {
        overflow: hidden;
        width: 160px;
        height: 160px;
        margin: 10px;
        border: 1px solid red;
        }
        .modal-lg{
        max-width: 1000px !important;
        }
        .overlay {
        position: absolute;
        bottom: 10px;
        left: 0;
        right: 0;
        background-color: rgba(255, 255, 255, 0.5);
        overflow: hidden;
        height: 0;
        transition: .5s ease;
        width: 100%;
        }
        .image_area:hover .overlay {
        height: 50%;
        cursor: pointer;
        }
        .text {
        color: #333;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
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
                                                <div class="form-box f-right ">
                                                    <input type="text" name="Search" placeholder="Search your interest...">
                                                    <div class="search-icon">
                                                        <i class="ti-search"></i>
                                                    </div>
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
                                            <ul>
                                                <li><a href="about">About</a></li>
                                                <li><a href="contact">Contact</a></li>
                                                <li><a href="login">Log In  or  Sign Up</a></li>
                                            </ul>
                                            <!-- Social -->
                                            <div class="header-social">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
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
                <div class="nes-slider-area pt-5 pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-tittle mb-35">
                                    <h2><button class="btn btn-danger">Breaking News</button></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="news-slider-active">
                                    <div class="single-news-slider">
                                        <a href="postDetails"><h4 class="container text-center">"The pomelo case: scope of plant variety rights in China"</h4></a>
                                    </div>
                                    <div class="single-news-slider">
                                        <a href="postDetails"><h4 class="container text-center">"The pomelo case: scope of plant variety rights in China"</h4></a>
                                    </div>
                                    <div class="single-news-slider">
                                        <a href="postDetails"><h4 class="container text-center">"The pomelo case: scope of plant variety rights in China"</h4></a>
                                    </div>
                                    <div class="single-news-slider">
                                        <a href="postDetails"><h4 class="container text-center">"The pomelo case: scope of plant variety rights in China"</h4></a>
                                    </div>
                                    <div class="single-news-slider">
                                        <a href="postDetails"><h4 class="container text-center">"The pomelo case: scope of plant variety rights in China"</h4></a>
                                    </div>
                                    <div class="single-news-slider">
                                        <a href="postDetails"><h4 class="container text-center">"The pomelo case: scope of plant variety rights in China"</h4></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Nwes slider End -->