
@extends('app')
@section('title', 'Team')

@section('content')
<br>

<main>
    <!-- theme__main__banner start -->
    <section class="theme__main__banner about__banner position-relative mt-140 mt-md-90">
        <div class="about__banner__bg">
            {{-- <img src="assets/img/about/about__banner__01.png" alt="" class=""> --}}
            <img src="images/ourteam.jpg" alt="" class="">
            <div class="container position-relative">
                <div class="about__content">
                    <h2></h2>
                    <p><a href="/home" >Home</a> - Pages - Team</p>
                </div>
            </div>
        </div>
    </section>
    <!-- theme__main__banner end -->

<br><br>
    <!-- InstanceBeginEditable name="MainContent" -->
    <section id="about-us">
        <div class="container">
          <div class=" wow fadeInDown">
            <h2>Our Team</h2>
            <div>
              <div>
              <!--<div class="col-md-4"><img class="img-responsive" src="images/ourteam.jpg" alt="" style="border-radius:4px;"></div>-->
                {{-- <p style="text-align:justify;"><div class="col-md-3" ><img class="img-responsive" src="images/ourteam.jpg" alt="" style="border-radius:4px;"></div> --}}
                    &lsquo;People-Orientation&rsquo; at its very best. At Aimsoft we are convinced about   the mission-critical role played by our Team Members. The Company   focuses on its 'Internal Customers' as much as it concentrates on Client   Partners. Aimsoft has been built on a strong foundation of intellectual   capital, camaraderie and result-orientation of its people. A short,   guided tour of our development labs in India would give you an   astounding view of the knowledge and belongingness that offers our Team a   unique vibrance.</p>
                <p style="text-align:justify;">Our Team is a complete and strategic mix of   professionals from Technology, Consulting, Business Management and   Client Servicing domains. The Team has some of the most talented and   spirited people within the industry. Whether it comes to innovation,   deadline based delivery, quality consciousness, cutting-edge solutions   or even just a cricket match, collective achievement is simply a way of   life. Almost obviously, we have brilliant MBA's from leading B-Schools,   engineers and technology associates from premier institutions and   colleagues who are powerhouses of corporate and technology services   experience.
                  </p>
                  <div class="clearfix"></div>
                  <p style="text-align:justify;">
                  Our software engineers provide superior results on a   wide variety of platforms and programming environments. Our database   systems experts create sophisticated data marts and other Internet   solutions that make up the core of your web business. The creative team   can conjure up magic on your Internet business screen and the client   servicing associates will assist you through every stage of the project   and complete it within crucial deadlines.<br>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section><!--/about-us-->
      <!-- InstanceEndEditable --><!--/.container-->

    <!-- team__section start-->
    {{-- <section class="team__section team__section__two position-relative pt-120 pt-lg-60 pb-60 pb-lg-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="section__title text-start text-lg-center mb-50">
                        <h2 class="section__title__main">We have well experienced
                            Team Player</h2>
                    </div>
                </div>
            </div>
            <div class="swiper team__slider__one pb-60">
                <!-- testimonial-paginatoin -->
                <div class="swiper-wrapper">
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="teams__thumb__two mb-20 text-center">
                                <img class="" src="assets/img/team/team__two__01.png" alt="team">
                                <div class="teams__icon__wrapper__two mt-30">
                                    <div class="teams__content__two mb-20">
                                        <h4 class="teams__title"><a href="#">Rashed kabir</a></h4>
                                        <p class="teams__designation mb-2">Founder & CEO</p>
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
                        <div class="col-xl-3">
                            <div class="teams__thumb__two mb-20 text-center">
                                <img class="" src="assets/img/team/team__two__03.png" alt="team">
                                <div class="teams__icon__wrapper__two mt-30">
                                    <div class="teams__content__two mb-20">
                                        <h4 class="teams__title"><a href="#">Mahfuz Riad</a></h4>
                                        <p class="teams__designation mb-2">Founder & CEO</p>
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
                        <div class="col-xl-3">
                            <div class="teams__thumb__two mb-20 text-center">
                                <img class="" src="assets/img/team/team__two__04.png" alt="team">
                                <div class="teams__icon__wrapper__two mt-30">
                                    <div class="teams__content__two mb-20">
                                        <h4 class="teams__title"><a href="#">Mahabub Alom</a></h4>
                                        <p class="teams__designation mb-2">Founder & CEO</p>
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
                        <div class="col-xl-3">
                            <div class="teams__wrapper__two mb-30">
                                <div class="teams__thumb__two mb-20 text-center">
                                    <img class="" src="assets/img/team/team__two__01.png" alt="team">
                                    <div class="teams__icon__wrapper__two mt-30">
                                        <div class="teams__content__two mb-20">
                                            <h4 class="teams__title"><a href="#">Hasan Ali</a></h4>
                                            <p class="teams__designation mb-2">Founder & CEO</p>
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
                        <div class="col-xl-3">
                            <div class="teams__thumb__two mb-20 text-center">
                                <img class="" src="assets/img/team/team__two__01.png" alt="team">
                                <div class="teams__icon__wrapper__two mt-30">
                                    <div class="teams__content__two mb-20">
                                        <h4 class="teams__title"><a href="#">Rashed kabir</a></h4>
                                        <p class="teams__designation mb-2">Founder & CEO</p>
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
                        <div class="col-xl-3">
                            <div class="teams__thumb__two mb-20 text-center">
                                <img class="" src="assets/img/team/team__two__03.png" alt="team">
                                <div class="teams__icon__wrapper__two mt-30">
                                    <div class="teams__content__two mb-20">
                                        <h4 class="teams__title"><a href="#">Mahfuz Riad</a></h4>
                                        <p class="teams__designation mb-2">Founder & CEO</p>
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
                        <div class="col-xl-3">
                            <div class="teams__thumb__two mb-20 text-center">
                                <img class="" src="assets/img/team/team__two__04.png" alt="team">
                                <div class="teams__icon__wrapper__two mt-30">
                                    <div class="teams__content__two mb-20">
                                        <h4 class="teams__title"><a href="#">Mahabub Alom</a></h4>
                                        <p class="teams__designation mb-2">Founder & CEO</p>
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
                        <div class="col-xl-3">
                            <div class="teams__wrapper__two mb-30">
                                <div class="teams__thumb__two mb-20 text-center">
                                    <img class="" src="assets/img/team/team__two__01.png" alt="team">
                                    <div class="teams__icon__wrapper__two mt-30">
                                        <div class="teams__content__two mb-20">
                                            <h4 class="teams__title"><a href="#">Hasan Ali</a></h4>
                                            <p class="teams__designation mb-2">Founder & CEO</p>
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
                <div class="swiper-pagination mt-30"></div>
            </div>
        </div>
    </section> --}}
    <!-- team__section end-->

    <!-- about__section start-->
    <section class="about__section__three position-relative pt-180 pt-lg-60 pb-10 pb-lg-60">
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
            <div class="row d-flex">
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
{{-- </main> --}}
@endsection