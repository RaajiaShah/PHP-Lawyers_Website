<?php
ob_start(); 
require('db.php');
require('admin_header.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; 

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO admins (username, email, password) VALUES (?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashed_password);

    if (mysqli_stmt_execute($stmt)) {
        $success_message = "Your account created successfully";
        header('Location: admin_panel.php');
        exit();

    } else {
        $error_message = "Error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
ob_end_flush(); 

?>


          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">                   
                    <h4 class="card-title">Create an Account</h4>
                    <form class="forms-sample" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="username" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>

                    <?php if (!empty($error_message)) : ?>
                    <div class="alert alert-danger mt-5" role="alert"><?php echo $error_message; ?></div>
                    <?php endif; ?>

                    <?php if (!empty($success_message)) : ?>
                        <div class="alert alert-success mt-5" role="alert"><?php echo $success_message; ?></div>
                    <?php endif; ?>
   
                  </div>
                  <a href="admin_login.php" class="link-primary text-center bg-dark">Already have an Account? Login</a>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->

<?php require('admin_footer.php'); ?>
         