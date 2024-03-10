<?php
ob_start(); 
require('db.php');
require('admin_header.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admins WHERE email=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $admin = mysqli_fetch_assoc($result);

    if ($admin && password_verify($password, $admin['password'])) {
        session_start();
        $_SESSION['admin_id'] = $admin['admin_id'];
        $_SESSION['username'] = $admin['username'];

        header("Location: admin_panel.php");
        exit();
    } else {
        $error_message = "Invalid email or password. Please try again.";
        echo "<script>alert('$error_message');</script>"; 
    }
}

mysqli_close($conn);

ob_end_flush(); 


?>


<div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">                   
                    <h4 class="card-title">Login</h4>
                    <form class="forms-sample" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
                  <a href="admin_register.php" class="link-primary text-center bg-dark">Create an Account</a>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->

<?php require('admin_footer.php'); ?>