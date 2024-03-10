<?php
ob_start(); 
require('db.php');
require('header.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM customers WHERE email=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['customer_id'] = $user['customer_id'];

        header("Location: index.php"); 

        exit();

    } else {
        $error_message = "Invalid email or password. Please try again.";
        echo "<script>alert('$error_message');</script>"; 
    }
}

mysqli_close($conn);

ob_end_flush();
?>




<section aria-label="section" class="text-light" data-bgcolor="#111111">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 mb-sm-30 text-center  mt-5">
                <h3>Login as a User</h3>


                <form name="contactForm" id="contact_form" class="form-border" method="post" action="customerlogin.php">

                    <div class="field-set">
                        <input type="email" name="email" class="form-control" placeholder="Your Email" />
                    </div>

                    <div class="spacer-half"></div>
                    <div class="field-set">
                        <input type="password" name="password" class="form-control" placeholder="Your Password" />
                    </div>

                    <div class="spacer-half"></div>
                    <li style="list-style-type: none;"><a href="customerregister.php">Dont't have an account? Create an Account!</a></li>
                    <div class="spacer-half"></div>

                    <div id="submit">
                        <input type="submit" name="loginBtn" value="Login" class="btn btn-custom" />
                    </div>
                    <div class="spacer-half"></div>
                    
                </form>
            </div>

        </div>
    </div>
</section>

<?php     
   require ('footer.php'); 
   ?>