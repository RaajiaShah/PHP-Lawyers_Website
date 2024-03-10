<?php
session_start();
ob_start(); 
if (!isset($_SESSION['customer_id'])) {

    header("Location: customerlogin.php");
    exit();
}

// if (!isset($_SESSION['lawyer_id'])) {

//     header("Location: lawyerlogin.php");
//     exit();
// }

require ('db.php');
require ('header.php');
ob_end_flush(); 
?>





<section id="section-slider" class="fullwidthbanner-container text-white" aria-label="section-slider">
                <div id="slider-revolution">
                    <ul>
                        <li data-transition="fade" data-slotamount="10" data-masterspeed="300" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
                            <img alt="" class="rev-slidebg" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" src="images/slider/1.jpg">
                            <div class="tp-caption big-s1" data-x="0" data-y="230" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;y:-100;s:200;e:Power2.easeInOut;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <h3 class="id-color">Need Any Help?</h3>
                            </div>
                            <div class="tp-caption very-big-white" data-x="0" data-y="280" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;y:-100;s:400;e:Power2.easeInOut;" data-start="600" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <h1>We Fight for Right</h1>
                            </div>
                            <div class="tp-caption" data-x="0" data-y="360" data-width="480" data-height="none" data-whitespace="wrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;y:-100;s:600;e:Power2.easeInOut;" data-start="700">
                                <p class="lead xs-hide">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="tp-caption" data-x="0" data-y="450" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;y:-100;s:800;e:Power2.easeInOut;" data-start="800">
                                <a class="btn-custom" href="features.html">Contact Us</a>
                            </div>
                        </li>
                        <li data-transition="fade" data-slotamount="10" data-masterspeed="300" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
                            <img alt="" class="rev-slidebg" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" src="images/slider/2.jpg">
                            <div class="tp-caption big-s1" data-x="0" data-y="230" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;y:-100;s:200;e:Power2.easeInOut;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <h3 class="id-color">Law &amp; Insurance Specialist</h3>
                            </div>
                            <div class="tp-caption very-big-white" data-x="0" data-y="280" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;y:-100;s:400;e:Power2.easeInOut;" data-start="600" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <h1>Because We Care</h1>
                            </div>
                            <div class="tp-caption" data-x="0" data-y="360" data-width="480" data-height="none" data-whitespace="wrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;y:-100;s:600;e:Power2.easeInOut;" data-start="700">
                                <p class="lead xs-hide">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="tp-caption" data-x="0" data-y="450" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;y:-100;s:800;e:Power2.easeInOut;" data-start="800">
                                <a class="btn-custom" href="features.html">Contact Us</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- revolution slider close -->
            <section class="pt40 pb40 bg-color text-light">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                            <h3 class="no-bottom">Now! Get a Free Consultation for Your Case.</h3>
                        </div>
                        <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                            <a href="#" class="btn-custom btn-black light">Make Appointment</a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="section-highlight" class="relative text-light" data-bgcolor="#111111">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <span class="p-title">Welcome</span><br>
                            <h2>
                                Reputation.<br>Respect. Result.
                            </h2>
                            <div class="small-border sm-left"></div>
                        </div>
                        <div class="col-md-8">
                            <p>Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis anim sunt officia. Fugiat velit proident aliquip nisi incididunt nostrud exercitation proident est nisi. Irure magna elit commodo anim ex veniam culpa eiusmod id nostrud sit cupidatat in veniam ad. Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.
                            </p>
                        </div>
                    </div>
                    <div class="spacer-double"></div>
                </div>
            </section>
            <section class="no-top relative z1000">
                <div class="container">
                    <div class="row mt-100">
                        <div class="col-md-4 mb-sm-30 wow fadeInRight" data-wow-delay=".2s">
                            <div class="mask">
                                <div class="cover">
                                    <div class="c-inner">
                                        <h3><i class="icofont-people"></i><span>Business Law</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="spacer20"></div>
                                        <a href="#" class="btn-custom capsule">Read more</a>
                                    </div>
                                </div>
                                <img src="images/services/1.jpg" alt="" class="img-responsive" />
                            </div>
                        </div>
                        <div class="col-md-4 mb-sm-30 wow fadeInRight" data-wow-delay=".4s">
                            <div class="mask">
                                <div class="cover">
                                    <div class="c-inner">
                                        <h3><i class="icofont-home"></i><span>Family Law</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="spacer20"></div>
                                        <a href="#" class="btn-custom capsule">Read more</a>
                                    </div>
                                </div>
                                <img src="images/services/2.jpg" alt="" class="img-responsive" />
                            </div>
                        </div>
                        <div class="col-md-4 mb-sm-30 wow fadeInRight" data-wow-delay=".6s">
                            <div class="mask">
                                <div class="cover">
                                    <div class="c-inner">
                                        <h3><i class="icofont-law-order"></i><span>Criminal Law</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="spacer20"></div>
                                        <a href="#" class="btn-custom capsule">Read more</a>
                                    </div>
                                </div>
                                <img src="images/services/3.jpg" alt="" class="img-responsive" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section data-bgcolor="#111111" class="text-light">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 offset-lg-7">
                            <span class="p-title">Experiences</span><br>
                            <h2>
                                Let Our Experience<br>be Your Guide
                            </h2>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Our Attorneys</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Our Expertise</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Our Firm</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p>Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis anim sunt officia. Fugiat velit proident aliquip nisi incididunt nostrud exercitation proident est nisi. Irure magna elit commodo anim ex veniam culpa eiusmod id nostrud sit cupidatat in veniam ad. Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <p>Ad pariatur nostrud pariatur exercitation ipsum ipsum culpa mollit commodo mollit ex. Aute sunt incididunt amet commodo est sint nisi deserunt pariatur do. Aliquip ex eiusmod voluptate exercitation cillum id incididunt elit sunt. Qui minim sit magna Lorem id et dolore velit Lorem amet exercitation duis deserunt. Anim id labore elit adipisicing ut in id occaecat pariatur ut ullamco ea tempor duis.</p>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <p>Est quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor aliqua irure ex. Nulla ut duis ipsum nisi elit fugiat commodo sunt reprehenderit laborum veniam eu veniam. Eiusmod minim exercitation fugiat irure ex labore incididunt do fugiat commodo aliquip sit id deserunt reprehenderit aliquip nostrud. Amet ex cupidatat excepteur aute veniam incididunt mollit cupidatat esse irure officia elit do ipsum ullamco Lorem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image-container col-md-6 pull-right" data-bgimage="url(images/services/1.jpg) center"></div>
            </section>
            <section id="section-practice-areas">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h2>Practice Areas</h2>
                                <div class="small-border"></div>
                            </div>
                        </div>
                        <div class="col-md-6 offset-md-3 text-center">
                            <p>Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis anim sunt officia. Fugiat velit proident aliquip nisi incididunt nostrud exercitation proident est nisi. Irure magna elit commodo anim ex veniam culpa.</p>
                        </div>
                        <div class="spacer-single"></div>
                        <div class="col-md-4">
                            <ul class="ul-style-2 wow fadeInRight" data-wow-delay=".2s">
                                <li>Corporate and M&A</li>
                                <li>Construction and Real Estate</li>
                                <li>Commercial Duspute Resolution</li>
                                <li>Employment</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="ul-style-2 wow fadeInRight" data-wow-delay=".4s">
                                <li>Banking and Finance</li>
                                <li>Captial Market</li>
                                <li>Environmental</li>
                                <li>Intellectual Property Right</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="ul-style-2 wow fadeInRight" data-wow-delay=".6s">
                                <li>Goverment</li>
                                <li>Foundation/Non Profit Organization</li>
                                <li>Bankcuptcy</li>
                                <li>Criminal</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section data-bgimage="url(images/misc/p1.jpg) center" class="text-light" data-stellar-background-ratio=".2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <span class="p-title">Fun facts</span><br>
                            <h2>
                                What we did?
                            </h2>
                            <div class="small-border sm-left"></div>
                            <p>Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis anim sunt officia.</p>
                        </div>
                        <div class="col-md-8 offset-md-1">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay="0s">
                                    <div class="de_count">
                                        <h3><span class="timer" data-to="4500" data-speed="3000">0</span></h3>
                                        <h5 class="id-color">Home Protected</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".25s">
                                    <div class="de_count">
                                        <h3><span class="timer" data-to="16" data-speed="3000">0</span>k</h3>
                                        <h5 class="id-color">People Saved</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".4s">
                                    <div class="de_count">
                                        <h3><span class="timer" data-to="4" data-speed="3000">0</span>m</h3>
                                        <h5 class="id-color">Money Saved</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".6s">
                                    <div class="de_count">
                                        <h3><span class="timer" data-to="52" data-speed="3000">0</span>k</h3>
                                        <h5 class="id-color">Contract Signed</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".8s">
                                    <div class="de_count">
                                        <h3><span class="timer" data-to="100" data-speed="3000">0</span>+</h3>
                                        <h5 class="id-color">Countries</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay="1s">
                                    <div class="de_count">
                                        <h3><span class="timer" data-to="2" data-speed="3000">2</span>k</h3>
                                        <h5 class="id-color">Staff Member</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section aria-label="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>Our Lawyer Team</h2>
                            <div class="small-border"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                            <div class="f-profile text-center">
                                <div class="fp-wrap f-invert">
                                    <div class="fpw-overlay">
                                        <div class="fpwo-wrap">
                                            <div class="fpwow-icons">
                                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                                <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fpw-overlay-btm"></div>
                                    <img src="images/team/1.jpg" class="fp-image img-fluid" alt="">
                                </div>
                                <h4>Fynley Wilkinson</h4>
                                Managing Partner
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".4s">
                            <div class="f-profile text-center">
                                <div class="fp-wrap f-invert">
                                    <div class="fpw-overlay">
                                        <div class="fpwo-wrap">
                                            <div class="fpwow-icons">
                                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                                <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fpw-overlay-btm"></div>
                                    <img src="images/team/2.jpg" class="fp-image img-fluid" alt="">
                                </div>
                                <h4>Sasha Welsh</h4>
                                Senior Partner
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".6s">
                            <div class="f-profile text-center">
                                <div class="fp-wrap f-invert">
                                    <div class="fpw-overlay">
                                        <div class="fpwo-wrap">
                                            <div class="fpwow-icons">
                                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                                <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fpw-overlay-btm"></div>
                                    <img src="images/team/3.jpg" class="fp-image img-fluid" alt="">
                                </div>
                                <h4>John Shepard</h4>
                                Associate
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section aria-label="section" class="text-light" data-bgimage="url(images/misc/d2.jpg) top" data-stellar-background-ratio=".2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center text-light">
                                <h2>Testimonials</h2>
                                <div class="small-border"></div>
                            </div>
                            <div class="owl-carousel owl-theme" id="testimonial-carousel">
                                <div class="item">
                                    <div class="de_testi opt-2 review">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color"></i>
                                            <h3>Trustworthy lawyer</h3>
                                            <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                            <div class="de_testi_by"><span>John, Pixar Studio</span></div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2 review">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color"></i>
                                            <h3>Quality lawyer service</h3>
                                            <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                            <div class="de_testi_by"><span>Sarah, Microsoft</span></div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2 review">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color"></i>
                                            <h3>Top lawyer listed</h3>
                                            <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                            <div class="de_testi_by"><span>Michael, Apple</span></div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2 review">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color"></i>
                                            <h3>Great services</h3>
                                            <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                            <div class="de_testi_by"><span>Thomas, Samsung</span></div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2 review">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color"></i>
                                            <h3>Easy to claim</h3>
                                            <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                            <div class="de_testi_by"><span>John, Pixar Studio</span></div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2 review">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color"></i>
                                            <h3>Excellent support</h3>
                                            <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                            <div class="de_testi_by"><span>Sarah, Microsoft</span></div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2 review">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color"></i>
                                            <h3>Reliable lawyer</h3>
                                            <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                            <div class="de_testi_by"><span>Michael, Apple</span></div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2 review">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color"></i>
                                            <h3>Five-star services</h3>
                                            <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                            <div class="de_testi_by"><span>Thomas, Samsung</span></div>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section aria-label="section">
            </section>
        </div>





     <?php     
   require ('footer.php'); 
   ?>



