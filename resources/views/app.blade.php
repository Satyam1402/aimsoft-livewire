<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords"
        content="agency, app landing, bootstrap 5, business, corporate, creative, doc, documentation, landing page, mobile app, rtl, sass, software, survey, trending">
    <meta name="description"
        content="Techni - Saas & Software HTML Template for all kinds of agency, app landing, bootstrap 5, business, corporate, creative, doc, documentation, landing page, mobile app, sass, software, survey">
    {{-- <title></title> --}}
    <title>@yield('title') ! Welcome</title>
    <meta property="og:site_name" content="Techni">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Techni - Saas & Software HTML Template">
    <meta name='og:image' content='images/assets/ogg.png'>
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#913BFF">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#913BFF">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#913BFF">

    <!-- <link rel="manifest" href="site.webmanifest" /> -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/bootstrap-icons/font-css.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/main.css">

<!-- core CSS -->
{{-- <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet">
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet"> --}}
    @livewireStyles
 
</head>

<body>
    <!-- main-page-wrapper start -->
    <div class="main-page-wrapper">
        <!--[if lte IE 9]> <p class="browserupgrade"> You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security. </p> <![endif]-->

        <!-- Add your site or application content here -->
        <!-- preloader -->

        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- preloader end  -->

        <!-- offcanvas start  -->
        <div class="offcanvas offcanvas-top theme-bg" tabindex="-1" id="offcanvasTop">
            <div class="offcanvas-header">
                <a data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="fas fa-times search-close" id="search-close"></i>
                </a>
            </div>
            <div class="offcanvas-body">
                <!-- Fullscreen search -->
                <div class="search-wrap">
                    <form method="get">
                        <input type="search" class="main-search-input" placeholder="Search Your Keyword...">
                    </form>
                </div>
                <!-- end fullscreen search -->
            </div>
        </div>
        <!-- offcanvas end  -->

        <!-- slide-bar start -->
        <aside class="slide-bar">
            <div class="close-mobile-menu">
                <a href="javascript:void(0);">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <!-- offset-sidebar start -->
            <div class="offset-sidebar">
                <div class="offset-widget offset-logo mb-30">
                    <a href="index.html">
                        <img src="assets/img/logo/header-logo-1.png" alt="logo">
                    </a>
                </div>
                <div class="mobile-menu"></div>
                <div class="offset-widget mb-40">
                    <div class="info-widget">
                        <h4 class="offset-title mb-20">About Us</h4>
                        <p class="mb-30">
                            But I must explain to you how all this mistaken idea of denouncing pleasure and
                            praising pain was born and will give you a complete account of the system and
                            expound the actual teachings of the great explore
                        </p>
                    </div>
                </div>
                <div class="offset-widget mb-30 pr-10">
                    <div class="info-widget info-widget2">
                        <h4 class="offset-title mb-20">Contact Info</h4>
                        <p>
                            <i class="fal fa-address-book"></i>
                            23/A, Miranda City Likaoli Prikano, Dope
                        </p>
                        <p>
                            <i class="fal fa-phone"></i>
                            +0989 7876 9865 9
                        </p>
                        <p>
                            <i class="fal fa-envelope-open"></i>
                            info@example.com
                        </p>
                    </div>
                </div>
                <!-- <div class="login-btn text-center">
     <a class="ht_btn w-100" href="login.html">Login</a>
    </div> -->
            </div>
            <!-- offset-sidebar end -->

        </aside>
        <div class="body-overlay"></div>
        <!-- slide-bar end -->

        <main>
            <style>
                .hover-image {
                    display: inline-block; /* Allows the background color to show around the image */
                }
        
                .hover-image img {
                    display: block; /* Ensures there is no gap beneath the image */
                    transition: background-color 0.3s; /* Smooth transition for background color */
                }
        
                .hover-image:hover {
                    border-radius: 11px;
                    background-color: rgb(255, 228, 179); /* Background color on hover */
                }
            </style>
            <!-- theme__main__banner start -->
            <section class="theme__main__banner position-relative">
                <header class="theme-main-menu theme-menu-one pt-30 pb-30">
                    <div class="main-header-area">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-xxl-1 col-xl-2 col-lg-3 col-6 d-none d-lg-inline-block">
                                    <div class="logo-area">
                                        <a href="#" class="hover-image" style="display: inline-block;">
                                            <img src="images/logo.png" alt="Header-logo" style="display: block;">
                                        </a>
                                    </div>
                                </div>
                                <div
                                    class="col-xxl-10 col-xl-10 col-lg-7 col-6 d-flex align-items-center justify-content-center">
                                    <div class="logo-area d-lg-none d-md-inline-block">
                                        <a class="front" href="index.html"><img
                                                src="assets/img/logo/header-logo-1.png" alt="Header-logo"></a>
                                    </div>
                                    <div class="main-menu d-none d-xl-block ps-xxl-5">
                                        <nav id="mobile-menu">
                                            <ul class="menu-list ps-0">
                                                <li>


                                                    {{-- <ul>
                                                        <li>
                                                            <a style="margin:30px" href="index.html">Home </a>
                                                        </li>
                                                    </ul> --}}

                                                    <a href="/home" wire:navigate>
														Home
													</a>
													{{-- <ul class="sub-menu">
														<li>
															<a href="index.html">Home Style 1</a>
														</li>
														<li>
															<a href="index-2.html">Home Style 2</a>
														</li>
														<li>
															<a href="index-3.html">Home Style 3</a>
														</li>
													</ul> --}}
												</li>

                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Company
                                                    </a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="/about" wire:navigate>About Us</a>
                                                        </li>
                                                        <li>
                                                            <a href="/whyus" wire:navigate>Why Aimsoft</a>
                                                        </li>
                                                        <li>
                                                            <a href="/team" wire:navigate>Our Team</a>
                                                        </li>
                                                        {{-- <li>
                                                            <a href="price.html">Pricing</a>
                                                        </li>
                                                        <li>
                                                            <a href="faq.html">faq</a>
                                                        </li>
                                                        <li>
                                                            <a href="404.html">404</a>
                                                        </li> --}}
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Web Studio</a>
                                                    <ul class="sub-menu">
                                                        
                                                        <li><a href="/website_development">Website Development</a></li>
                                                        <li><a href="/web_application_development">Web Application Development</a></li>
                                                        <li><a href="/web_marketting">Web Marketting/SEO</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Mobile Studio</a>
                                                    <ul class="sub-menu">
                                                        
                                                        <li><a href="/android_app_development">Android App Development</a></li>
                                                        <li><a href="/iphone_app_development">iPhone/IOS App Development</a></li>
                                                    </ul>
                                                </li>
                                                {{-- <li>
                                                    <a href="#">Services</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="custom_software_development.php">Custom/Desktop Software Development</a></li>
                                                        <li><a href="website_development.php">Website Design & Development</a></li>
                                                        <li><a href="web_application_development.php">Web Application Development</a></li>
                                                        <li><a href="ecommerce_solution.php">Ecommerce Solution</a></li>
                                                        <li><a href="web_marketting.php">Web Marketing / SEO</a></li>
                                                        <li><a href="software_maintenance.php">Software Maintenance</a></li>
                                              
                                                      
                                                    </ul>
                                                </li> --}}
                                                <li>
                                                    <a href="/portfolio">Portfolio</a>
                                                    {{-- <ul class="sub-menu">
                                                        <li>
                                                            <a href="blog-grid.html">Blog Grid</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-details.html">Blog Details</a>
                                                        </li>
                                                    </ul> --}}
                                                </li>
                                            
                                                {{-- <li>
                                                    <a href="#">Blog</a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="blog-grid.html">Blog Grid</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-details.html">Blog Details</a>
                                                        </li>
                                                    </ul>
                                                </li> --}}
                                                <li>
                                                    <a href="/contact">contact</a>
                                                    
                                                </li>

                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-2 col-6">
                                    <div class="right-nav d-flex align-items-center justify-content-end">
                                        {{-- <div class="login__btn d-none d-xl-inline-block">
                                            <a href="contact.html" class="ht_btn2">
                                                <span>Login</span>
                                            </a>
                                        </div> --}}
                                        {{-- <div class="quote__btn d-none d-xl-inline-block">
                                            <div class="custom__btn">
                                                <a href="contact.html" class="ht_btn">
                                                    <span>Sign Up</span>
                                                </a>
                                            </div>
                                        </div> --}}
                                        <div class="hamburger-menu d-xl-none">
                                            <a class="round-menu" href="javascript:void(0);">
                                                <i class="far fa-bars"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.theme-main-menu -->
                </header>
                <!-- theme main manu end-->



                @yield('content')





<br><br><br>
                <!--footer-area start-->
                <footer class="footer-area">
                    <div class="footer__bg__one">

                        <div class="footer__wrapper__one pt-60 pb-20">
                            <img src="assets/img/shape/pattern-3.svg" alt="" class="shape__1">
                            <img src="assets/img/shape/pattern-4.svg" alt="" class="shape__2">
                            <div class="container">
                                <div class="row px-0">
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                                        <div class="footer__widget mb-30">
                                            <a href="index.html" class="footer-logo d-inline-block mb-30">
                                                <img src="images/logo.png" alt="footer-logo">
                                               
                                            </a>
                                            <p>Welcome to Aimsoft Technologies.</p>
                                            <div class="social_media mt-35">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-youtube"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6">
                                        <div class="footer__widget mt-20">
                                            <h4 class="widget__title mb-30">Quick Links</h4>
                                            <ul>
                                                <li>
                                                    <a href="about.html">Home</a>
                                                </li>
                                                <li>
                                                    <a href="blog.html">Popular</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">Best Offer</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">Destinations</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">Blog</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6">
                                        <div class="footer__widget mt-20">
                                            <h4 class="widget__title mb-30">Company</h4>
                                            <ul>
                                                <li>
                                                    <a href="about.html">About</a>
                                                </li>
                                                <li>
                                                    <a href="blog.html">Contact</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">Careers</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">Press</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">Presentation</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                                        <div class="footer__widget footer__contact mb-30 mt-20">
                                            <h4 class="widget__title mb-30">Get In Touch</h4>
                                            <p>There are many variati passages of Lorem Ipsum available.</p>
                                            <ul>
                                                <li>
                                                    <a href="about.html">contact@techni.com</a>
                                                </li>
                                                <li>
                                                    <a href="blog.html">+00 365 589 25 , +00 778 965</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6">
                                        <div class="footer__widget mb-30 mt-20">
                                            <h4 class="widget__title mb-30">Gallery</h4>
                                            <div class="ht-footer-subscribe-form mt-20 mb-40">
                                                <div class="row footer__gallary g-1">
                                                    <div class="col col-sm-2 col-md-2 col-lg-4"> <img
                                                            src="assets/img/footer/footer__01.png" alt="">
                                                    </div>
                                                    <div class="col col-sm-2 col-md-2 col-lg-4"> <img
                                                            src="assets/img/footer/footer__02.png" alt="">
                                                    </div>
                                                    <div class="col col-sm-2 col-md-2 col-lg-4"> <img
                                                            src="assets/img/footer/footer__03.png" alt="">
                                                    </div>
                                                    <div class="col col-sm-2 col-md-2 col-lg-4"> <img
                                                            src="assets/img/footer/footer__04.png" alt="">
                                                    </div>
                                                    <div class="col col-sm-2 col-md-2 col-lg-4"> <img
                                                            src="assets/img/footer/footer__05.png" alt="">
                                                    </div>
                                                    <div class="col col-sm-2 col-md-2 col-lg-4"> <img
                                                            src="assets/img/footer/footer__06.png" alt="">
                                                    </div>
                                                    <div class="col col-sm-2 col-md-2 col-lg-4"> <img
                                                            src="assets/img/footer/footer__07.png" alt="">
                                                    </div>
                                                    <div class="col col-sm-2 col-md-2 col-lg-4"> <img
                                                            src="assets/img/footer/footer__08.png" alt="">
                                                    </div>
                                                    <div class="col col-sm-2 col-md-2 col-lg-4"> <img
                                                            src="assets/img/footer/footer__09.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="devider__line mb-10 mt-20"></div>
                        <div class="copyright__area pt-50 pb-25">
                            <div class="container">
                                <div class="row">
                                    <div class="text-center">
                                        <div class="copyright__text mb-30">
                                            <p>
                                                <a class="fw-bold"
                                                    href="https://themeforest.net/user/creativegigs/portfolio">Creative
                                                    Gigs</a>
                                                © 2023, All Rights Reserved
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!--footer-area end-->


    </div>
    <!-- main-page-wrapper end -->



    <!-- JS here -->

    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/jquery.meanmenu.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.easypiechart.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/plugins.js"></script>


    <!--Custom JS here -->
    <script src="assets/js/main.js"></script>
    @livewireScripts
</body>

</html>
