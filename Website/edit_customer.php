<?php
require('admin_session.php');
ob_start(); 
require('db.php');
require('admin_header.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $selectQuery = "SELECT * FROM customers WHERE customer_id = $id";
    $result = mysqli_query($conn, $selectQuery);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        header("Location: admin_panel.php");
        exit();
    }
} else {
    header("Location: admin_panel.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $updateQuery = "UPDATE customers SET name='$name', email='$email' WHERE customer_id=$id";
    $result = mysqli_query($conn, $updateQuery);

    if ($result) {
        header("Location: admin_panel.php");
        exit();
    } else {
        echo "Error updating data: " . mysqli_error($conn);
    }
}

ob_end_flush(); 
?>

<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">                   
                    <h4 class="card-title">Update User's Details</h4>
<form method="post" class="forms-sample" >
  
<div class="form-group">
    <label for="exampleInputName1">Name</label>
    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="<?php echo $row['name']; ?>">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail3">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email" value="<?php echo $row['email']; ?>">
    </div>
    <button type="submit" class="btn btn-primary mr-2" name="update">Update</button>
    <button class="btn btn-dark">Cancel</button>
</form>
</div>
            </div>
        </div>
    </div>
</div>

<?php require('admin_footer.php'); ?>
