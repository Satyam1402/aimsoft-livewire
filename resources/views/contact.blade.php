
@extends('app')
@section('title', 'Contact')
   
   
   @section('content')

<br>

   	<!-- theme__main__banner start -->
       <section class="theme__main__banner about__banner position-relative mt-140 mt-md-90">
        <div class="about__banner__bg">
            <img src="assets/img/about/about__banner__01.png" alt="" class="">
            <div class="container position-relative">
                <div class="about__content">
                    <h2>Contact Us</h2>
                    <p><a href="index.html">Home</a> - Contact Us</p>
                </div>
            </div>
        </div>
    </section>
    <!-- theme__main__banner end -->
	<!--contact__section start-->
    <div class="contact__section pt-110 pb-100 pt-lg-60 pb-lg-90">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 m-auto">
                    <div class="get__in__touch">
                        <h2 class="section__title__main mb-30">Get In Touch</h2>
                        <p class="mb-30">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore .</p>
                        <div class="single__info__box mb-30 d-flex align-items-center">
                            <div class="icon">
                                <a href="contact.html"><i class="bi bi-geo-alt"></i></a>
                            </div>
                            <div class="">
                                <span>27/2b , Street road -04,</span><br>
                                    <span>New York , USA</span>
                            </div>
                        </div>
                        <div class="single__info__box mb-30 d-flex align-items-center">
                            <div class="icon">
                                <a href="contact.html"><i class="bi bi-telephone"></i></a>
                            </div>
                            <div class="">
                                <span>(704) 555-0127</span><br>
                                <span>(629) 555-0129</span>
                            </div>
                        </div>
                        <div class="single__info__box mb-30 d-flex align-items-center">
                            <div class="icon">
                                <a href="contact.html"><i class="bi bi-envelope"></i></a>
                            </div>
                            <div class="">
                                <span>Graham@mail.com</span><br>
                                <span>michael@mail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 ms-auto mt-lg-60">
                    <div class="main__contact__form ps-xxl-3 mb-30">
                        <h3 class="contact__form__title mb-20">Contact Us</h3>
                        <form class="widget-form" action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="fname" placeholder="First Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="lname" placeholder="Last Name">
                                </div>
                                <div class="col-md-12 mt-20">
                                    <input type="email" name="email" placeholder="Email Name">
                                </div>
                                <div class="col-md-12 mt-20">
                                    <textarea name="message" placeholder="Write a Message"></textarea>
                                </div>
                                <div class="col-12 mt-35">
                                    <div class="custom__btn">
                                        <a href="contact.html" class="ht_btn">
                                            <span>Send Message</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact__section end-->

    <!--contact__map__section start-->
    <div class="contact__map__section">
        <div class="container-fluid px-0">
            <div class="row">
                <div class="contact__map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14586.166638731369!2d90.38652459999999!3d23.94127905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1693217501589!5m2!1sen!2sbd"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--contact__map__section end-->
@endsection