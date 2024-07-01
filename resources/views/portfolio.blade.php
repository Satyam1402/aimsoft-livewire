
@extends('app')
@section('title', '')
   
   
   @section('content')
<br>


<!-- InstanceBeginEditable name="MainContent" -->
<section id="portfolio">
    <div class="container" style="margin: 120px 0px 0px">
        <div class="center">
           <h2>Portfolio</h2>
        </div>
    

        <ul class="portfolio-filter text-center">
            <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".classified">Classified</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".ecom">E-Commerce</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".hotel">Hotels</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".other">Others</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".android">Android</a></li>
        </ul><!--/#portfolio-filter-->

        <div class="row">
            <div class="portfolio-items">
                <div class="portfolio-item classified ecom col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/SmallPortFolio/shreeshiv.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                             <h3><a href="http://www.shreeshivshakti.net" target="_blank">E-Commerce</a></h3>
                                <p>shreeshivshakti.net</p>
                                <a class="preview" href="images/portfolio/BigPortFolio/shreeshiv.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <a class="preview" href="http://www.shreeshivshakti.net" target="_blank"><i class="fa fa-link"></i> Visit</a>
                            </div> 
                        </div>
                    </div>
                </div>
                <!--/.portfolio-item-->
                <div class="portfolio-item classified col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/SmallPortFolio/cgavas.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="http://avaschhattisgarh.com/" target="_blank">Classified</a></h3>
                                <p>avaschhattisgarh.com</p>
                                <a class="preview" href="images/portfolio/BigPortFolio/avascg.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                 <a class="preview" href="http://avaschhattisgarh.com/" target="_blank"><i class="fa fa-link"></i> Visit</a>
                           </div> 
                        </div>
                    </div>          
                </div><!--/.portfolio-item-->

                <!--<div class="portfolio-item other col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/SmallPortFolio/nikhilPackersMoversSmall.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="http://www.nikhilpackersandmovers.in/" target="_blank">Packers & Movers</a></h3>
                                <p>nikhilpackersandmovers.in</p>
                                <a class="preview" href="images/portfolio/BigPortFolio/nikhilPackersMovers.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <a class="preview" href="http://www.nikhilpackersandmovers.in/" target="_blank"><i class="fa fa-link"></i> Visit</a>
                          </div> 
                        </div>
                    </div>        
                </div>--><!--/.portfolio-item-->
                <div class="portfolio-item other col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/SmallPortFolio/sngmatrimony.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="http://sngmatrimony.com/" target="_blank">Matrimonial</a></h3>
                                <p>sngmatrimony.com</p>
                                <a class="preview" href="images/portfolio/BigPortFolio/sngmatrimony.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <a class="preview" href="http://sngmatrimony.com/" target="_blank"><i class="fa fa-link"></i> Visit</a>
                          </div> 
                        </div>
                    </div>        
                </div><!--/.portfolio-item-->

                <div class="portfolio-item classified col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/SmallPortFolio/careerbrain.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="http://careerbrain.in/" target="_blank">Job Portal</a></h3>
                                <p>careerbrain.in</p>
                                <a class="preview" href="images/portfolio/BigPortFolio/careerbrain.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <a class="preview" href="http://careerbrain.in/" target="_blank"><i class="fa fa-link"></i> Visit</a>
                            </div> 
                        </div>
                    </div>           
                </div><!--/.portfolio-item-->
      
                <div class="portfolio-item hotel col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/SmallPortFolio/hoteldreampalace.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="http://hoteldreampalace.com/" target="_blank">Hotel Website</a></h3>
                                <p>hoteldreampalace.com</p>
                                <a class="preview" href="images/portfolio/BigPortFolio/hoteldreampalace.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <a class="preview" href="http://hoteldreampalace.com/" target="_blank"><i class="fa fa-link"></i> Visit</a>
                            </div> 
                        </div>
                    </div>      
                </div><!--/.portfolio-item-->

                <div class="portfolio-item classified col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/SmallPortFolio/rojgarsamacharweb.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="http://rojgarsamacharhindi.com/" target="_blank">Job Portal</a></h3>
                                <p>rojgarsamacharhindi.com</p>
                                <a class="preview" href="images/portfolio/BigPortFolio/rojgarsamacharweb.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <a class="preview" href="http://rojgarsamacharhindi.com/" target="_blank"><i class="fa fa-link"></i> Visit</a>
                            </div> 
                        </div>
                    </div>         
                </div><!--/.portfolio-item-->

                <!--<div class="portfolio-item hotel col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/SmallPortFolio/HotelNewRajShreeSmall.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="http://hotelnewrajshree.com/" target="_blank">Hotel Website</a></h3>
                                <p>hotelnewrajshree.com</p>
                                <a class="preview" href="images/portfolio/BigPortFolio/HotelNewRajShree.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <a class="preview" href="http://hotelnewrajshree.com/" target="_blank"><i class="fa fa-link"></i> Visit</a>
                            </div> 
                        </div>
                    </div>          
                </div>--><!--/.portfolio-item-->

                <!--<div class="portfolio-item other col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/SmallPortFolio/JnsSmall.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="http://jnsdurg.org/" target="_blank">Society Portal</a></h3>
                                <p>jnsdurg.org</p>
                                <a class="preview" href="images/portfolio/BigPortFolio/Jns.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <a class="preview" href="http://jnsdurg.org/" target="_blank"><i class="fa fa-link"></i> Visit</a>
                            </div> 
                        </div>
                    </div>          
                </div>--><!--/.portfolio-item-->
                
                <div class="portfolio-item other col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/SmallPortFolio/56bhogfoodSmall.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="http://56bhogcatering.com/" target="_blank">Food Service</a></h3>
                                <p>56bhogcatering.com</p>
                                <a class="preview" href="images/portfolio/BigPortFolio/56bhogfood.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <a class="preview" href="http://56bhogcatering.com/" target="_blank"><i class="fa fa-link"></i> Visit</a>
                            </div> 
                        </div>
                    </div>          
                </div><!--/.portfolio-item-->
                
                <div class="portfolio-item other col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/SmallPortFolio/cgpestservice.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="http://cgpestcontrolservice.com/" target="_blank">Pest Contral</a></h3>
                                <p>cgpestcontrolservice.com</p>
                                <a class="preview" href="images/portfolio/BigPortFolio/cgpestservice.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <a class="preview" href="http://cgpestcontrolservice.com/" target="_blank"><i class="fa fa-link"></i> Visit</a>
                            </div> 
                        </div>
                    </div>          
                </div><!--/.portfolio-item-->
                
                <div class="portfolio-item classified col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/SmallPortFolio/justwedding.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="http://www.justweddings.in/" target="_blank">Event Management Company</a></h3>
                                <p>justweddings.in</p>
                                <a class="preview" href="images/portfolio/BigPortFolio/justwedding.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <a class="preview" href="http://www.justweddings.in/" target="_blank"><i class="fa fa-link"></i> Visit</a>
                            </div> 
                        </div>
                    </div>          
                </div><!--/.portfolio-item-->
                
                <div class="portfolio-item classified col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/SmallPortFolio/GetMarryNow.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="http://getmarrynow.com/" target="_blank">Matrimonial</a></h3>
                                <p>getmarrynow.com</p>
                                <a class="preview" href="images/portfolio/BigPortFolio/GetMarryNow.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <a class="preview" href="http://getmarrynow.com/" target="_blank"><i class="fa fa-link"></i> Visit</a>
                            </div> 
                        </div>
                    </div>          
                </div><!--/.portfolio-item-->
                
                <div class="portfolio-item classified ecom col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/SmallPortFolio/pureaqua.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="http://pureaquahealth.com/" target="_blank">Water Purifire</a></h3>
                                <p>pureaquahealth.com</p>
                                <a class="preview" href="images/portfolio/BigPortFolio/pureaqua.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <a class="preview" href="http://pureaquahealth.com/" target="_blank"><i class="fa fa-link"></i> Visit</a>
                            </div> 
                        </div>
                    </div>          
                </div>
                <!--/.portfolio-item-->
                <!--<div class="portfolio-item other col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/SmallPortFolio/sssteelSmall.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="http://sssteelworks.com/" target="_blank">Steel Works</a></h3>
                                <p>sssteelworks.com</p>
                                <a class="preview" href="images/portfolio/BigPortFolio/sssteel.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <a class="preview" href="http://sssteelworks.com/" target="_blank"><i class="fa fa-link"></i> Visit</a>
                            </div> 
                        </div>
                    </div>          
                </div>--><!--/.portfolio-item-->
                 <div class="portfolio-item other col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/SmallPortFolio/visiondiagnostic.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="http://visiondiagnostic.in/" target="_blank">Website</a></h3>
                                <p>Vision Diagnostic</p>
                                <a class="preview" href="images/portfolio/BigPortFolio/visiondiagnostic.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <a class="preview" href="http://visiondiagnostic.in/" target="_blank"><i class="fa fa-link"></i> Visit</a>
                            </div> 
                        </div>
                    </div>          
                </div><!--/.portfolio-item-->
                <div class="portfolio-item android col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/android/small_img/keepscreen.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="https://play.google.com/store/apps/details?id=com.aimsoft.keepscreenon" target="_blank">Android Application</a></h3>
                                <p>Keep Screen On</p>
                                <a class="preview" href="images/portfolio/android/big_img/keepscreen.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <a class="preview" href="https://play.google.com/store/apps/details?id=com.aimsoft.keepscreenon" target="_blank"><i class="fa fa-link"></i> Visit</a>
                            </div> 
                        </div>
                    </div>          
                </div><!--/.portfolio-item-->
                <div class="portfolio-item android col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/android/small_img/myexam.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="https://play.google.com/store/apps/details?id=com.gsaog.myexampreparation" target="_blank">Android Application</a></h3>
                                <p>My Exam Preparation</p>
                                <a class="preview" href="images/portfolio/android/big_img/myexam.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <a class="preview" href="https://play.google.com/store/apps/details?id=com.gsaog.myexampreparation" target="_blank"><i class="fa fa-link"></i> Visit</a>
                            </div> 
                        </div>
                    </div>          
                </div><!--/.portfolio-item-->
                <div class="portfolio-item android col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/android/small_img/rojgarsamachar.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="https://play.google.com/store/apps/details?id=com.rojgarsamacharhindi" target="_blank">Android Application</a></h3>
                                <p>Rojgar Samachar Hindi</p>
                                <a class="preview" href="images/portfolio/android/big_img/rojgarsamachar.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <a class="preview" href="https://play.google.com/store/apps/details?id=com.rojgarsamacharhindi" target="_blank"><i class="fa fa-link"></i> Visit</a>
                            </div> 
                        </div>
                    </div>          
                </div><!--/.portfolio-item-->
                <div class="portfolio-item android col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/android/small_img/sarkarinaukri.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="https://play.google.com/store/apps/details?id=com.sarkarinaukriwatch" target="_blank">Android Application</a></h3>
                                <p>Sarkari Naukri Watch</p>
                                <a class="preview" href="images/portfolio/android/big_img/sarkarinaukri.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <a class="preview" href="https://play.google.com/store/apps/details?id=com.sarkarinaukriwatch" target="_blank"><i class="fa fa-link"></i> Visit</a>
                            </div> 
                        </div>
                    </div>          
                </div><!--/.portfolio-item-->
                <div class="portfolio-item android col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/android/small_img/omkareshwar.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="https://play.google.com/store/apps/details?id=com.shriomkareshwar&hl=en" target="_blank">Android Application</a></h3>
                                <p>Omkareshwar</p>
                                <a class="preview" href="images/portfolio/android/big_img/omkareshwar.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <a class="preview" href="https://play.google.com/store/apps/details?id=com.shriomkareshwar&hl=en" target="_blank"><i class="fa fa-link"></i> Visit</a>
                            </div> 
                        </div>
                    </div>          
                </div><!--/.portfolio-item-->
                <div class="portfolio-item android col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/android/small_img/aolcg.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="https://play.google.com/store/apps/details?id=com.aolcg.aolchhattisgarh" target="_blank">Android Application</a></h3>
                                <p>AOL Chhattisgarh</p>
                                <a class="preview" href="images/portfolio/android/big_img/aolcg.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <a class="preview" href="https://play.google.com/store/apps/details?id=com.aolcg.aolchhattisgarh" target="_blank"><i class="fa fa-link"></i> Visit</a>
                            </div> 
                        </div>
                    </div>          
                </div><!--/.portfolio-item-->
                <div class="portfolio-item android col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/android/small_img/chhattisgarh-rojgar.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="https://play.google.com/store/apps/details?id=com.rojgarsamacharchhattisgarh" target="_blank">Android Application</a></h3>
                                <p>Chhattisgarh Rojgar Samachar</p>
                                <a class="preview" href="images/portfolio/android/big_img/chhattisgarh-rojgar.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <a class="preview" href="https://play.google.com/store/apps/details?id=com.rojgarsamacharchhattisgarh" target="_blank"><i class="fa fa-link"></i> Visit</a>
                            </div> 
                        </div>
                    </div>          
                </div><!--/.portfolio-item-->
                <div class="portfolio-item android col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/android/small_img/pratiyogita.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="https://play.google.com/store/apps/details?id=com.gsaog.pratiyogita" target="_blank">Android Application</a></h3>
                                <p>Pratiyogita GK Current Affairs 2019</p>
                                <a class="preview" href="images/portfolio/android/big_img/pratiyogita.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                <a class="preview" href="https://play.google.com/store/apps/details?id=com.gsaog.pratiyogita" target="_blank"><i class="fa fa-link"></i> Visit</a>
                            </div> 
                        </div>
                    </div>          
                </div><!--/.portfolio-item-->
            </div>
        </div>
    </div>
</section><!--/about-us-->
<!-- InstanceEndEditable --><!--/.container-->

@endsection