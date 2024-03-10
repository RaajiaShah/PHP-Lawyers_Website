<?php
session_start();
ob_start(); 
if (!isset($_SESSION['customer_id'])) {

    header("Location: customerlogin.php");
    exit();
}
require ('db.php');
require('header.php');

$location = $_GET['location'] ?? '';
$services = $_GET['services'] ?? '';
$meeting_place = $_GET['meeting_place'] ?? '';

$sql = "SELECT * FROM lawyers WHERE location LIKE ? AND services LIKE ?";
$stmt = mysqli_prepare($conn, $sql);
$location = '%' . $location . '%';
$services = '%' . $services . '%';
mysqli_stmt_bind_param($stmt, "ss", $location, $services);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
ob_end_flush(); 
?>

<div class="container">
<div class="row">



<div class="col-md-9 mt-5 pt-5">
<h2 class="mt-5">Search Results</h2>
<hr>
</div>
<?php
while ($row = mysqli_fetch_assoc($result)) {
?>
<div class="table-responsive mt-5">
<table class="table table-hover">
<tbody><tr>
<td class="text-left"><?php echo"<strong>{$row['lawyer_id']}</strong>"?></td>
<td class="text-left"><?php echo"<strong>{$row['name']}</strong>"?><br><?php echo"{$row['services']}"?></td>
<td class="text-right"><?php echo"<strong>{$row['location']}</strong>"?></td>
<td class="text-right"><?php echo "<a class='btn btn-primary' href='lawyer_profile.php?id={$row['lawyer_id']}'>View Profile</a>"?></td>
</tr>
</tbody></table>
</div>

<?php }

mysqli_close($conn);
?>
<ul class="pagination pt-5 mt-5 mb-5">
<li class="disabled"><a href="#">«</a></li>
<li class="active"><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>
<li><a href="#">»</a></li>
</ul>

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


