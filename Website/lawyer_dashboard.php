<?php
session_start();

if (!isset($_SESSION['lawyer_id'])) {
    header("Location: lawyer_login.php");
    exit();
}

require('db.php');
require('header.php');


$lawyer_id = $_SESSION['lawyer_id'];
$sql = "SELECT * FROM lawyers WHERE lawyer_id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $lawyer_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$lawyer = mysqli_fetch_assoc($result);

mysqli_close($conn);
?>

<div class="container pt-5">
<div class="main-body pt-5">

<div class="row gutters-sm pt-5 mb-5">
<div class="col-md-4">
<div class="card">
<div class="card-body">
<div class="d-flex flex-column align-items-center text-center">
<div class="mt-3 lawyer-dashboard-container">
<h4><?php echo $lawyer['name']; ?></h4>
<p class="text-secondary mb-1"><?php echo $lawyer['profile']; ?></p>
<p class="text-muted font-size-sm"><?php echo $lawyer['location']; ?></p>
<a href="#" class="btn btn-primary">View Appointments</a>
</div>
</div>
</div>
</div>
<div class="card mt-3">
<ul class="list-group list-group-flush">
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
<span class="text-secondary">https://<?php echo strtolower(str_replace(' ', '', trim($lawyer['name']))) ?>.com</span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
<h6 class="mb-0">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" fill="currentColor" class="bi bi-youtube" viewBox="0 0 14 14">
  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
    </svg>
    YouTube
</h6>
<span class="text-secondary">@<?php echo strtolower(str_replace(' ', '', trim($lawyer['name']))) ?></span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
<span class="text-secondary">@<?php echo strtolower(str_replace(' ', '', trim($lawyer['name']))) ?></span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
<span class="text-secondary"><?php echo strtolower(str_replace(' ', '', trim($lawyer['name']))) ?></span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
<span class="text-secondary"><?php echo strtolower(str_replace(' ', '', trim($lawyer['name']))) ?></span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
<a href="lawyer_logout.php" class="btn btn-primary">Logout</a>
</li>
</ul>
</div>
</div>
<div class="col-md-8">
<div class="card mb-3">
<div class="card-body">
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Full Name</h6>
</div>
<div class="col-sm-9 text-secondary">
<?php echo $lawyer['name']; ?>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Email</h6>
</div>
<div class="col-sm-9 text-secondary">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ee88879eae849b85839b86c08f82"><?php echo $lawyer['email']; ?></a>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Location</h6>
</div>
<div class="col-sm-9 text-secondary">
<?php echo $lawyer['location']; ?>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Services</h6>
</div>
<div class="col-sm-9 text-secondary">
<?php echo $lawyer['services']; ?>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-12">
<a class="btn btn-primary " href="lawyer_update.php">Edit</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php     
   require ('footer.php'); 
   ?>
