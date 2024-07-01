@extends('app')
@section('title', 'About')
   
   
   @section('content')
<br>

    <!-- theme__main__banner start -->
    <section class="theme__main__banner about__banner position-relative mt-140 mt-md-90">
        <div class="about__banner__bg">
            <img src="assets/img/about/about__banner__01.png" alt="" class="">
            <div class="container position-relative">
                <div class="about__content">
                    <h2>About Us</h2>
                    <p><a href="index.html">Home</a> - Pages - About Us</p>
                </div>
            </div>
        </div>
    </section>
    <!-- theme__main__banner end -->

    <!-- offer__section start -->
    {{-- <section class="offer__section  offer__section__two pt-130 pt-lg-60">
        <div class="offer__bg__wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-3 col-xl-6 col-lg-6">
                        <div class="single__offer__box shadow">
                            <div class="icon">
                                <img class="icon-front" src="assets/img/icon/customer__01.svg" alt="icon">
                            </div>
                            <div class="offer__name mt-20">
                                <h4 class="offer__title mb-10"><a href="services.html">Customer Support</a></h4>
                                <p>There are many variations of pass of Lorem Ipsum available.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6">
                        <div class="single__offer__box shadow">
                            <div class="icon icon-two">
                                <img class="icon-front" src="assets/img/icon/customer__02.svg" alt="icon">
                            </div>
                            <div class="offer__name mt-20">
                                <h4 class="offer__title mb-10"><a href="services.html">Expert Team</a></h4>
                                <p>There are many variations of pass of Lorem Ipsum available.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6">
                        <div class="single__offer__box shadow">
                            <div class="icon icon-three">
                                <img class="icon-front" src="assets/img/icon/customer__03.svg" alt="icon">
                            </div>
                            <div class="offer__name mt-20">
                                <h4 class="offer__title mb-10"><a href="services.html">100% Trusted</a></h4>
                                <p>There are many variations of pass of Lorem Ipsum available.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6">
                        <div class="single__offer__box shadow">
                            <div class="icon icon-four">
                                <img class="icon-front" src="assets/img/icon/shield__01.png" alt="icon">
                            </div>
                            <div class="offer__name mt-20">
                                <h4 class="offer__title mb-10"><a href="services.html">Secure Info</a></h4>
                                <p>There are many variations of pass of Lorem Ipsum available.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- offer__section end -->

    
    <!-- choose__section start-->
    <section class="choose__section mt-30 pt-120 pt-lg-60 pb-110 pb-lg-60">
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                <div class="offset-xl-1 col-xl-5 mb-lg-60">
                    <div class="choose__img__wrapper position-relative mb-30">
                        <img class="choose__main__1" src="assets/img/chose/choose__01.png" alt="about">
                    </div>
                </div>
                <div class="col-xl-6 ps-xl-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-9">
                                <div class="choose__content__wrapper mb-80">
                                    <h5 class="sub__title__two mb-20">#What we have</h5>
                                    <h2 class="section__title__main mb-35">Best It Solution Company
                                        in  town.
                                    </h2>
                                    {{-- <p class="mb-30">It's not a faith in technology. It's faith in people.
                                    </p> --}}
                                    <p class="mb-30" style="transition: color 0.3s ease; color: rgb(105, 104, 104);" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'">
                                        It's not a faith in technology. It's faith in people.
                                    </p>
                                    <ul>
                                        <li>
                                            <div class="choose__type mb-25 d-flex align-items-center">
                                                <div class="icon">
                                                    <img src="assets/img/icon/choose__01.svg" alt="icon">
                                                </div>
                                                <div class="choose__type__text">
                                                    <h5><a href="website_development" wire:navigate>Website Development</a></h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="choose__type mb-25 d-flex align-items-center">
                                                <div class="icon icon__two">
                                                    <img src="assets/img/icon/choose__02.svg" alt="icon">
                                                </div>
                                                <div class="choose__type__text">
                                                    <h5><a href="android_app_development" wire:navigate>Android Development</a></h5>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <div class="choose__type mb-25 d-flex align-items-center">
                                                <div class="icon icon_three">
                                                    <img src="assets/img/icon/choose__03.svg" alt="icon">
                                                </div>
                                                <div class="choose__type__text">
                                                    <h5><a href="web_marketting" wire:navigate>Web Marketting</a></h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="choose__type mb-25 d-flex align-items-center">
                                                <div class="icon icon_four">
                                                    <img src="assets/img/icon/choose__04.svg" alt="icon">
                                                </div>
                                                <div class="choose__type__text">
                                                    <h5><a href="iphone_app_development" wire:navigate>IOS Development</a></h5>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class=" text-start">
                                        <div class="choose__btn position-relative">
                                            <div class="custom__btn">
                                                <a href="contact" wire:navigate class="ht_btn">
                                                    <span>More Details </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose__section end -->
<!-- InstanceBeginEditable name="MainContent" -->
<section id="about-us">
    <div class="container">
      <div class="center wow fadeInDown">
        <h2>About Us</h2>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p align="justify">Aimsoft Technologies having a dedicated and specialized team. We've the proven experience and expertise in designing website. As a website design company we offer a full-circle approach in website design & web development where the actual web designing effort covers only 40% of the entire project pie; our website designing services covers strategic planning, business intelligence, creative, application development, product / service promotion & solution maintenance. Most of our time in understands your business objectives, defining the problem and finally designing the best possible solution. Your website can offer you the best return for your investment, if done correctly.</p>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="images/about.jpg" alt="" style="border-radius:4px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p align="justify">We understand that every company has a unique requirement when it comes to web designing. Where our responsibility is to project that uniqueness and make the website stand out from its competition. Unlike a run-of-the-mill website designing we make it a point to deliver a distinctive look to your website. Our web designing experts ensure that your website is search engine friendly, aesthetically appealing and user friendly. The quality of our clients' accounts sets us apart from our competitors and establishes our domain supremacy in India. This also helps us in achieving a higher number of global orders in the advantage India scenario at the age of offshore outsourcing.</p>
                    </div>
                </div>
            </div>
                        <br>
            Our engagement can add value at any stage of a lifecycle:<br>
            <br>
            * Designing of a new website <br>
            * Redesign or revamping of an existing website <br>
            * Maintenance &amp; management of an existing website<br>
            <br>
            Aimsoft Technologies: Web Design Company<br>
            <br>
            As   a web design company we offer complete web design solutions, where our   clients are benefited to have all reciprocal solutions under a single   umbrella. Our website development company is capable of providing high   quality; cost-effective; mission-critical web designing company. At this   knowledge age, knowledge is the key and our knowledge base in latest   web designing India technologies, search engine algorithm, global web   designing practices etc makes the end product contemporary and   futuristic.
          Web Design Services include:<br>
            <br>
            * Need Analysis &amp; RFP creation <br>
            * Solution Designing &amp; Creative Story Boarding <br>
            * Website Content Planning &amp; Drafting <br>
            * Product Photography <br>
            * Graphic Designing <br>
            * Designing Flash Intros &amp; Animations <br>
            * HTML Coding &amp; Java Scripting <br>
            <br>
            We   deliver neat, easy-to-use and business friendly website designing, a   web site that drives customers into it. In the domain of website design   we have served almost every segment of the in dustry. Our website   designing experts ensures each quality parameter such as   easy-navigation, overall consistency and content quality within the   timeframe and budget. We always ensure that our clients are delighted   with our web designing services and return to us time after time. <br>
            <br>
            Aimsoft   Technologies is one of the front-runners in website designing company   india. Based in Bhilaii, India, as a website design company we ensure   the best possible strategic outcome for your website designing India   initiative. As a result at present we are catering numerous high profile   corporate houses based in Bhilai or other parts of India for their   company requirements. Besides Bhilai, India, we have also won the   confidence of top global players as a web site development company and   strong and well perceivable website designing company.</p>
        </div>
      </div>
    </div>
  </section><!--/about-us-->
  <!-- InstanceEndEditable --><!--/.container-->
    <!-- video__section start -->
    <section class="video__section__three position-relative pt-60 pt-lg-60 mb-lg-100">
        <div class="container-fluid">
            <div class="row mt-50">
                <div class="video__rapper position-relative">
                    <img src="assets/img/video/video__three__bg__01.png" alt="" class="w-100 position-relative">
                    <div class="watch__video d-flex align-items-center">
                        <a href="https://www.youtube.com/watch?v=lTxn2BuqyzU" class="popup-video">
                            <img src="assets/img/icon/play__01.png" alt="icon">
                        </a>
                    </div>
                    <div class="video__content__rapper">
                        <div class="section__title">
                            <div class="text-start">
                                <h5 class="sub__title__two mb-20">Video Tuitorial</h5>
                                <h2 class="section__title__main">Best Reasons to Choose 
                                    Our Services.</h2>
                                    <p class="mb-30">There are many variations of passages of Lorem Ipsum Donor available, but the majority have suffered alteration.</p>
                            </div>
                        </div>
                        <div class="text-start mt-20">
                            <div class="portfolio__btn position-relative">
                                <div class="custom__btn">
                                    <a href="project-details.html" class="ht_btn">
                                        <span>Watch Videos</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about__section start-->
        <section class="about__section__three pt-130 pt-lg-60">
            <div class="container">
                <div class="section__title mb-50">
                    <div class="text-start text-lg-center">
                        <h5 class="sub__title__two mb-20">Our Working Process</h5>
                        <div class="row">
                            <div class="col-xxl-6 m-auto">
                                <h2 class="section__title__main">Creative & innovative 
                                    solution for your company</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex pb-100">
                    <div class="col-xxl-4">
                        <div class="about__content__wrapper pb-lg-30">
                            <div class="about__type d-flex align-items-center">
                                <div class="icon">
                                    <img src="assets/img/icon/about__two__icon__01.png" alt="icon" class="">
                                </div>
                                <div class="about__type_text">
                                    <h5><a href="about.html">01. Find New Ideas</a></h5>
                                    <p>There are many variations of pass of Lorem Ipsum donor available.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="about__content__wrapper pb-lg-30">
                            <div class="about__type d-flex align-items-center">
                                <div class="icon">
                                    <img src="assets/img/icon/about__two__icon__02.png" alt="icon" class="">
                                </div>
                                <div class="about__type_text">
                                    <h5><a href="about.html">02. Wireframe</a></h5>
                                    <p>There are many variations of pass of Lorem Ipsum donor available.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="about__content__wrapper pb-lg-30">
                            <div class="about__type d-flex align-items-center">
                                <div class="icon">
                                    <img src="assets/img/icon/about__two__icon__03.png" alt="icon" class="">
                                </div>
                                <div class="about__type_text">
                                    <h5><a href="about.html">03. Product Creating</a></h5>
                                    <p>There are many variations of pass of Lorem Ipsum donor available.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about__section end -->
    </section>
    <!-- video__section end-->

    <!-- team__section start-->
    <section class="team__section position-relative pt-130 pt-lg-60 pb-60 mb-130 mb-lg-90">
        <div class="container">
            <div class="section__title d-flex align-items-center justify-content-between mb-50">
                <div class="">
                    <h5 class="sub__title__two mb-20">#Our Best Team</h5>
                    <div class="row">
                        <div class="col-lg-8">
                            <h2 class="section__title__main">We have well experienced
                                Team Player</h2>
                        </div>
                    </div>
                </div>
                <div class="swiper__button__three d-none d-lg-flex justify-content-end">
                    <div class="swiper-prev"><i class="bi bi-chevron-left"></i></div>
                    <div class="swiper-next"><i class="bi bi-chevron-right"></i></div>
                </div>
            </div>
            <div class="swiper team__slider__one">
                <!-- testimonial-paginatoin -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="teams__wrapper mb-30">
                            <div class="teams__thumb mb-20">
                                <img class="w-100" src="assets/img/team/team__01.png" alt="team">
                                <div class="teams__icon__wrapper">
                                    <div class="teams__content">
                                        <h4 class="teams__title"><a href="#">Zinedin Zidan</a></h4>
                                        <p class="teams__designation mb-2">Chief Excutive</p>
                                    </div>
                                    <div class="teams__icon">
                                        <div class="teams__social__media">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="teams__wrapper mb-30">
                            <div class="teams__thumb mb-20">
                                <img class="w-100" src="assets/img/team/team__02.png" alt="team">
                                <div class="teams__icon__wrapper">
                                    <div class="teams__content">
                                        <h4 class="teams__title"><a href="#">Zinedin Zidan</a></h4>
                                        <p class="teams__designation mb-2">Chief Excutive</p>
                                    </div>
                                    <div class="teams__icon">
                                        <div class="teams__social__media">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="teams__wrapper mb-30">
                            <div class="teams__thumb mb-20">
                                <img class="w-100" src="assets/img/team/team__03.png" alt="team">
                                <div class="teams__icon__wrapper">
                                    <div class="teams__content">
                                        <h4 class="teams__title"><a href="#">Zinedin Zidan</a></h4>
                                        <p class="teams__designation mb-2">Chief Excutive</p>
                                    </div>
                                    <div class="teams__icon">
                                        <div class="teams__social__media">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="teams__wrapper mb-30">
                            <div class="teams__thumb mb-20">
                                <img class="w-100" src="assets/img/team/team__04.png" alt="team">
                                <div class="teams__icon__wrapper">
                                    <div class="teams__content">
                                        <h4 class="teams__title"><a href="#">Zinedin Zidan</a></h4>
                                        <p class="teams__designation mb-2">Chief Excutive</p>
                                    </div>
                                    <div class="teams__icon">
                                        <div class="teams__social__media">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="teams__wrapper mb-30">
                            <div class="teams__thumb mb-20">
                                <img class="w-100" src="assets/img/team/team__04.png" alt="team">
                                <div class="teams__icon__wrapper">
                                    <div class="teams__content">
                                        <h4 class="teams__title"><a href="#">Zinedin Zidan</a></h4>
                                        <p class="teams__designation mb-2">Chief Excutive</p>
                                    </div>
                                    <div class="teams__icon">
                                        <div class="teams__social__media">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- team__section end-->
{{-- </main> --}}



   @endsection