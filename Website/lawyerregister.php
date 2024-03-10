<?php
ob_start(); 
require('db.php');
require('header.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $location = $_POST['location'];
    $services = $_POST['services'];
    $profile = $_POST['profile'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO lawyers (name, email, password, location, services, profile) VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $hashed_password, $location, $services, $profile);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: lawyerlogin.php");
        exit(); 

        } else {
        echo "Registration failed. Please try again.";
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
ob_end_flush(); 

?>


<section aria-label="section" class="text-light" data-bgcolor="#111111">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 mb-sm-30 text-center mt-5">
                <h3>Register</h3>


                <form name="contactForm" id="contact_form" class="form-border" method="post" action="lawyerregister.php">

                <div class="field-set">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" />
                    </div>

                    <div class="field-set">
                        <input type="email" name="email" class="form-control" placeholder="Your Email"/>
                    </div>

                    <div class="spacer-half"></div>
                    <div class="field-set">
                        <input type="password" name="password" class="form-control" placeholder="Your Password" />
                    </div>

                    <div class="spacer-half"></div>
                    <div class="field-set">
                        <input type="text" name="location" class="form-control" placeholder="Your Location" />
                    </div>

                    <div class="spacer-half"></div>
                    <div class="field-set">
                        <input type="text" name="services" class="form-control" placeholder="Your Services" />
                    </div>

                    <div class="spacer-half"></div>
                    <div class="field-set">
                        <textarea name="profile" rows="4" class="form-control" placeholder="Your Profile" ></textarea>
                    </div>

                    <div class="spacer-half"></div>
                    <li style="list-style-type: none;"><a href="lawyerlogin.php">Already have an account? Login!</a></li>

                    <div class="spacer-half"></div>

                    <div id="submit">
                        <input type="submit" name="regBtn" value="Register" class="btn btn-custom" />
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>


<?php     
   require ('footer.php'); 
   ?>
