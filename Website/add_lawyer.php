<?php
require('admin_session.php');
ob_start(); 
require ("db.php");
require("admin_header.php");


$name = $email = $location = $services = '';
$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $services = $_POST['services'];

    if (empty($name) || empty($email) || empty($location) || empty($services)) {
        $error_message = "All fields are required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid email format";
    } else {
        $sql = "INSERT INTO lawyers (name, email, location, services) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $location, $services);
        
        if (mysqli_stmt_execute($stmt)) {
            $success_message = "Lawyer added successfully";
            $name = $email = $location = $services = ''; 
            header("Location: list_lawyers.php");
            exit();
        } else {
            $error_message = "Error: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    }
}
ob_end_flush(); 
?>


          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">                   
                    <h4 class="card-title">Add Lawyer</h4>
                     <?php if(isset($_SESSION['error_message'])) { ?>
                  <p class="card-description"><?php echo $_SESSION['error_message']; ?></p>
                  <?php unset($_SESSION['error_message']); ?>
                  <?php } ?>
                    <form class="forms-sample" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">City</label>
                        <input type="text" name="location" class="form-control" id="exampleInputCity1" placeholder="Location">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputServices">Services</label>
                        <input type="text" name="services" class="form-control" id="exampleInputCity1" placeholder="Services">
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
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
         <?php require('admin_footer.php'); ?>