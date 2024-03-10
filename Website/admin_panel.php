<?php 

require('admin_session.php'); 
require('db.php');

require('admin_header.php'); 


$sql = "SELECT * FROM customers";
$result = mysqli_query($conn, $sql);

?>

 

     
<div class="content-wrapper">
   <div class="row">
     <div class="col-lg-12 grid-margin stretch-card">
       <div class="card">
          <div class="card-body">
             <h4 class="card-title">User List</h4>
                <div class="table-responsive">
                  <table class="table table-striped">
                     <thead>
                        <tr>
                          <th>Id </th>
                          <th>User Name </th>
                          <th>Email</th>
                          <th>Operations</th>
                          <th>Operations</th>

                        </tr>
                      </thead>
                    <tbody>
                      <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                          <tr>
                            <td class="py-1">
                            <?php echo $row['customer_id']; ?>
                            </td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td> <a class="btn btn-primary" href="edit_customer.php?id=<?php echo $row['customer_id']; ?>">Edit</a>
            </td>
                            <td><a class="btn btn-primary" href="delete_customer.php?id=<?php echo $row['customer_id']; ?>" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
</td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                    <a class="btn btn-primary mt-3 ml-2" href="add_customer.php">Add User</a>
                    </div>

</div>

</div>

</div>
</div>
 <!-- content-wrapper ends -->
<?php    

require('admin_footer.php');

?>
