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

<section id="section-practice-areas">
                <div class="container mt-5">
                    <div class="row mt-5">
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



            <?php require('footer.php'); ?>
