<?php
session_start();

if (!isset($_SESSION['customer_id'])) {
    // header("Location: customerlogin.php");
    // exit();

}

require ('db.php');
require('header.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lawyer_id = $_POST['lawyer'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    

    $user_id = $_SESSION['customer_id'];
    $sql = "INSERT INTO appointments (customer_id, lawyer_id, appointment_date, appointment_time) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "iiss", $user_id, $lawyer_id, $date, $time);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
        $success_message = "Appointment booked successfully.<br/> we'll be in touch shortly!";
    } else {
        $error_message = "Failed to book appointment. Please try again.";
    }

    mysqli_stmt_close($stmt);

    mysqli_close($conn);
}
?>

<style>
     body {
        text-align: center;
        background:  #111;
      }
        h1 {
          color: #eaa636;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #fff;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:18px;
          margin: 0;
        }
      i {
        color: #fff;
        font-size: 50px;
        line-height: 100px;
        margin-left:-15px;
      }
      .card {
        background: #000;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #1e1e1e;
        display: inline-block;
        margin: 100px auto;
      }

      .circle{
        border-radius:100px; 
        height:100px; 
        width:100px; 
        background: #eaa636; 
        margin: 0 auto;
      }
    </style>


    <?php 
    if(isset($success_message)) { 
        ?>
        <div class="card">
      <div class="circle">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <p><?php echo $success_message; 
        ?></p>
    </div>

    <?php } ?>


   
    <?php if(isset($error_message)) { ?>
        <div class="card">
      <div>
        <i class="checkmark">✓</i>
      </div>
        <h1>Error</h1> 
        <p><?php echo $error_message; ?></p>
        </div>
    <?php } ?>

    <?php     
   require ('footer.php'); 
   ?>

