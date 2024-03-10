<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
  header("Location: admin_login.php");
  exit();
}

require('db.php');

$admin_name = "";


$admin_id = $_SESSION['admin_id'];
$sql = "SELECT username FROM admins WHERE admin_id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $admin_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$admin = mysqli_fetch_assoc($result);


if ($admin) {
    $admin_name = $admin['username'];
}

mysqli_close($conn);

?>