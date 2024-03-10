<?php

session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

require ('db.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $customer_id = $_GET['id'];

    $sql = "DELETE FROM customers WHERE customer_id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $customer_id);
        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt) > 0) {
            $_SESSION['success_message'] = "User profile deleted successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to delete user profile. User not found.";
        }

        mysqli_stmt_close($stmt); 
    } else {
        $_SESSION['error_message'] = "Error: Unable to prepare statement.";
    }

    mysqli_close($conn); 
}

header("Location: admin_panel.php");
exit();
?>
