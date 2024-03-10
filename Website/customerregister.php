<?php
ob_start(); 
require('db.php');
require('header.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; 

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO customers (name, email, password) VALUES (?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashed_password);

    if (mysqli_stmt_execute($stmt)) {
      
        header("Location: customerlogin.php");
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
            <div class="col-lg-8 offset-lg-2 mb-sm-30 text-center  mt-5">
                <h3>Register</h3>


                <form name="contactForm" id="contact_form" class="form-border" method="post" action="customerregister.php">

                <div class="field-set">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" />
                    </div>

                    <div class="field-set">
                        <input type="email" name="email" class="form-control" placeholder="Your Email"  autocomplete="none"/>
                    </div>

                    <div class="spacer-half"></div>
                    <div class="field-set">
                        <input type="password" name="password" class="form-control" placeholder="Your Password" />
                    </div>

                    <div class="spacer-half"></div>
                    <li style="list-style-type: none;"><a href="customerlogin.php">Already have an account? Login!</a></li>

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