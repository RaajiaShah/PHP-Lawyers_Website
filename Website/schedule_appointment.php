<?php
session_start();
ob_start(); 

if (!isset($_SESSION['customer_id'])) {

    header("Location: customerlogin.php");
    exit();
}
require ('db.php');
require('header.php');
ob_end_flush(); 

?>

<section aria-label="section" class="text-light" data-bgcolor="#111111">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 mb-sm-30 text-center mt-5">
                <h3>Schedule an Appointment</h3>


                <form name="contactForm" id="contact_form" class="form-border" method="post" action="confirm_appointment.php">

                <div class="field-set">
                <select name="lawyer" required>
                <?php
            require_once 'db.php';

            $sql = "SELECT * FROM lawyers";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['lawyer_id'] . '">' . $row['name'] . '</option>';
                }
            } else {
                echo '<option value="">No lawyers available</option>';
            }

            mysqli_close($conn);
            ?>
        </select>
                    </div>

                    <div class="field-set">
                        <input type="date" name="date" class="form-control" placeholder="Enter Date" required/>
                    </div>

                    <div class="spacer-half"></div>
                    <div class="field-set">
                        <input type="time" name="time" class="form-control" placeholder="Enter Time" required />
                    </div>

                    <div class="spacer-half"></div>
                    <div id="submit">
                        <input type="submit" value="Schedule Appointment" class="btn btn-custom" />
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>


<?php     
   require ('footer.php'); 
   ?>