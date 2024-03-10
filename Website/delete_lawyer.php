<?php

session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

require ('db.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $lawyer_id = $_GET['id'];

    $sql = "DELETE FROM lawyers WHERE lawyer_id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $lawyer_id);
        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt) > 0) {
            $_SESSION['success_message'] = "Lawyer profile deleted successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to delete lawyer profile. Lawyer not found.";
        }

        mysqli_stmt_close($stmt); 
    } else {
        $_SESSION['error_message'] = "Error: Unable to prepare statement.";
    }

    mysqli_close($conn); 
}

header("Location: list_lawyers.php");
exit();
?>
