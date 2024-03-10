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

 <section aria-label="section" class="text-light" data-bgimage="url(images/misc/d2.jpg) top" data-stellar-background-ratio=".2"> -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12  mt-5">
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

<?php require('footer.php'); ?>
