<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> {{ env('APP_NAME') }} </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">
    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/all.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/icofont.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/css/bsnav.min.css" rel="stylesheet" />
    <link href="assets/css/preloader.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assets/css/flaticon.css" rel="stylesheet" />
    <link href="assets/css/jquery-ui.css" rel="stylesheet" />
    <link href="assets/style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

</head>

<body id="bdy">

    {{-- <div class="preloader">
        <div class="preloader-container">
            <span class="preloader-text">Alive </span>
            <div class="preloader-animation">
            </div>
        </div>
    </div> --}}

    <div class="top-bar-area bg-grad pos-rel topbar-white py-3 d-none">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="top-box-wrp d-flex align-items-center">
                        <div class="top-phone top-box mr-30">
                            <i class="fa-solid fa-phone"></i>
                            <span> {{ env('APP_PHONE ') }} </span>
                        </div>
                        <div class="top-email top-box">
                            <i class="fa-solid fa-envelope"></i>
                            <span> {{ env('MAIL_FROM_ADDRESS') }} </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="top-box-wrp d-flex align-items-center text-right">
                        <div class="top-box top-location mr-30">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Oba-Ile Akure </span>
                        </div>
                        <div class="top-box top-login">
                            <a href="login.html">
                                <i class="fa-solid fa-right-to-bracket"></i>
                                <span>Register</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="header header-1">
        <div class="main-wrapper">
            <div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide bsnav-transparent">
                <div class="container ">
                    {{-- <a class="navbar-brand" href="index.html">
						<img src="assets/img/logo/logo-white.png" class="logo-display" alt="thumb">
						<img src="assets/img/logo/logo.png" class="logo-scrolled" alt="thumb">
					</a> --}}
                    <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse justify-content-md-center">
                        <ul class="navbar-nav navbar-mobile mr-0">
                            <li class="nav-item dropdown fadeup">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Curriculum </a></li>

                            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="search-cart nav-profile">
                        <a href="#" class="btn-1 btn-md">Register</a>
                    </div>
                </div>
            </div>
            <div class="bsnav-mobile">
                <div class="bsnav-mobile-overlay"></div>
                <div class="navbar">
                    <img src="assets/img/logo/logo.png" class="logo-scrolled" alt="thumb">
                </div>
            </div>
        </div>
    </header>

    @yield('page_content')

    <footer class="footer pos-rel overflow-hidden">
        <img src="assets/img/bg/bg-map.png" class="bg-map" alt="no image">
        <div class="footer-up de-padding">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="footer-widget about-us">
                            <div class="footer-logo mb-30">
                                Aive
                            </div>
                            <p>
                                Lorem ipsum dolor sit consectetur
                                adipiscing elit, sed do eiusmod incididunt
                                ut labore et dolore
                            </p>
                            <ul class="footer-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="footer-widget footer-recent-post">
                            <h4 class="footer-widget-title">
                                Recent Posts
                                <span class="footer-title-line"></span>
                            </h4>
                            <div class="recent-post-wrp">
                                <div class="footer-recent-post-single">
                                    <div class="recent-post-pic">
                                        <img src="assets/img/pictures/post-1.png" alt="no image">
                                    </div>
                                    <div class="recent-post-desc">
                                        <span class="recent-post-date">17 April 2023</span>
                                        <h5 class="heading-5">
                                            Master of backyard <br /> tiling rest
                                        </h5>
                                    </div>
                                </div>
                                <div class="footer-recent-post-single">
                                    <div class="recent-post-pic">
                                        <img src="assets/img/pictures/post-2.png" alt="no image">
                                    </div>
                                    <div class="recent-post-desc">
                                        <span class="recent-post-date">18 April 2023</span>
                                        <h5 class="heading-5">
                                            The rest of us avoid <br /> common sort
                                        </h5>
                                    </div>
                                </div>
                                <div class="footer-recent-post-single">
                                    <div class="recent-post-pic">
                                        <img src="assets/img/pictures/post-3.png" alt="no image">
                                    </div>
                                    <div class="recent-post-desc">
                                        <span class="recent-post-date">18 April 2023</span>
                                        <h5 class="heading-5">
                                            Finding hidden gems <br /> of this sort
                                        </h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6">
                        <div class="footer-widget footer-link">
                            <h4 class="footer-widget-title">
                                It Services
                                <span class="footer-title-line"></span>
                            </h4>
                            <ul class="footer-list">
                                <li>
                                    <a href="service-single.html">
                                        <i class="ti-angle-right"></i>
                                        Web Design
                                    </a>
                                </li>
                                <li>
                                    <a href="service-single.html">
                                        <i class="ti-angle-right"></i>
                                        It Services
                                    </a>
                                </li>
                                <li>

                                    <a href="service-single.html">
                                        <i class="ti-angle-right"></i>
                                        Industries Services
                                    </a>
                                </li>
                                <li>

                                    <a href="service-single.html">
                                        <i class="ti-angle-right"></i>
                                        Feature Box
                                    </a>
                                </li>
                                <li>
                                    <a href="service-single.html">
                                        <i class="ti-angle-right"></i>
                                        Web Service
                                    </a>
                                </li>
                                <li>
                                    <a href="service-single.html">
                                        <i class="ti-angle-right"></i>
                                        IOS Service
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="footer-widget footer-subs">
                            <h4 class="footer-widget-title">
                                Subscribe
                                <span class="footer-title-line"></span>
                            </h4>
                            <div class="subscribe-area">
                                <p class="mb-20">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                </p>
                                <div class="about-btn-content">
                                    <div class="about-call">
                                        <div class="about-call-icon">
                                            <i>
                                                <img src="assets/img/icon/telephone.png" alt="no image">
                                            </i>
                                        </div>
                                        <div class="about-call-text">
                                            <span>Call for help</span>
                                            <h5 class="mb-0">+123-4567-8900</h5>
                                        </div>
                                    </div>
                                </div>
                                <form>
                                    <span class="btn-shape"></span>
                                    <input type="text" class="input-style-4" placeholder="Enter Email...">
                                    <button type="submit" class="btn-subs">
                                        <i class="ti-angle-right"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="copyright-element text-center">
                    <p class="mb-0">Copyright {{ date('Y') }} . All Rights Reserved By {{ env('APP_NAME') }}</p>
                </div>
            </div>
        </div>
    </footer>

    <a href="#bdy" id="scrtop" class="smooth-menu"><i class="ti-arrow-up"></i></a>



    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bsnav.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/jquery.easypiechart.js"></script>
    <script src="assets/js/typed.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/active-class.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
