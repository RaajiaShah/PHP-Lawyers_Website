<?php 
session_start();
ob_start(); 
if (!isset($_SESSION['customer_id'])) {

    header("Location: customerlogin.php");
    exit();
}
require('header.php');
ob_end_flush(); 
 ?>


 <section aria-label="section">
                <div class="container mt-5">
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


<?php require('footer.php'); ?>
