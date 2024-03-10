<?php
session_start();
ob_start(); 

if (!isset($_SESSION['lawyer_id'])) {

    header("Location: lawyerlogin.php");
    exit();
}

require('db.php');
require('header.php');

$name = $email = $location = $services = $profile = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $location = $_POST['location'];
    $services = $_POST['services'];
    $profile = $_POST['profile'];

    $lawyer_id = $_SESSION['lawyer_id'];
    $sql = "UPDATE lawyers SET name=?, location=?, services=?, profile=? WHERE lawyer_id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssssi", $name, $location, $services, $profile, $lawyer_id);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
        $success_message = "Profile updated successfully.";
        header("Location: lawyer_dashboard.php");
        exit();
    } else {
        $error_message = "Profile update failed. Please try again.";
    }

    mysqli_stmt_close($stmt);
}

$lawyer_id = $_SESSION['lawyer_id'];
$sql = "SELECT * FROM lawyers WHERE lawyer_id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $lawyer_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$lawyer = mysqli_fetch_assoc($result);

mysqli_close($conn);
ob_end_flush(); 

?>

<section aria-label="section" class="text-light" data-bgcolor="#111111">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 mb-sm-30 text-center mt-5">
                <h3>Update Profile</h3>

                <?php if(isset($success_message)) { ?>
                <p><?php echo $success_message; ?></p>
                 <?php } ?>
                <?php if(isset($error_message)) { ?>
                <p><?php echo $error_message; ?></p>
                <?php } ?>
                <form name="contactForm" id="contact_form" class="form-border" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                <div class="field-set">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $lawyer['name']; ?>" required />
                    </div>

                    <div class="spacer-half"></div>
                    <div class="field-set">
                        <input type="text" name="location" class="form-control" placeholder="Your Location" value="<?php echo $lawyer['location']; ?>" required/>
                    </div>

                    <div class="spacer-half"></div>
                    <div class="field-set">
                        <input type="text" name="services" class="form-control" placeholder="Your Services" value="<?php echo $lawyer['services']; ?>" required/>
                    </div>

                    <div class="spacer-half"></div>
                    <div class="field-set">
                        <textarea name="profile" rows="4" class="form-control" placeholder="Your Profile" required><?php echo $lawyer['profile']; ?></textarea>
                    </div>

                    <div class="spacer-half"></div>

                    <div id="submit">
                        <input type="submit" name="upbtn" value="Update" class="btn btn-custom" />
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<?php     
   require ('footer.php'); 
   ?>