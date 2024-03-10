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




<section aria-label="section" class="text-light" data-bgcolor="#111111">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 mb-sm-30 text-center mt-5">
                <h3>Search Lawyers</h3>


                <form name="contactForm" id="contact_form" class="form-border" action="search_results.php" method="get">
                    <div class="field-set">
                        <input type="text" name="location" class="form-control" placeholder="Enter Location" />
                    </div>

                    <div class="spacer-half"></div>
                    <div class="field-set">
                        <input type="text" name="services" class="form-control" placeholder="Enter Services" />
                    </div>

                    <div class="spacer-half"></div>
                    <div class="field-set">
                        <input type="text" name="meeting_place" class="form-control" placeholder="Enter Meeting Place" />
                    </div>

                    <div class="spacer-half"></div>

                    <div id="submit">
                        <input type="submit" name="searchbtn" value="Search" class="btn btn-custom" />
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<?php     
   require ('footer.php'); 
   ?>