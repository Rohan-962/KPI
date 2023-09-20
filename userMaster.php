<?php

$insert = false;
$delete = false;

// Connecting to the Database
require 'connection.php';

// Delete a record
if (isset($_GET['delete'])) {

  $user_id = $_GET['delete'];
  // echo $user_id;
  $delete = true;
  $sql = "DELETE FROM tbl_user_master WHERE emp_id = $user_id";
  $result = mysqli_query($con, $sql);
}


// Edit a record
if (isset($_POST['user_idEdit'])) {
  echo "You are about to Edit a record";
  $user_id = $_POST["user_idEdit"];
  $name = $_POST['user_nameEdit'];
  $user_role = $_POST['user_roleEdit'];
  $user_mail = $_POST['user_mailEdit'];
  $user_type = $_POST['user_typeEdit'];
  $team_id = $_POST['team_idEdit'];
  $user_password = $_POST["user_passwordEdit"];
}
if (isset($_POST['add'])) {
  $name = $_POST['user_name'];
  $user_role = $_POST['user_role'];
  $user_mail = $_POST['user_mail'];
  $user_type = $_POST['user_type'];
  $team_id = $_POST['team_id'];
  $user_password = $_POST["user_password"];

  // SQL query to be executed
  $sql = "INSERT INTO `kpi`.`tbl_user_master`(`user_name`, `user_role`, `user_mail`, `user_type`, `team_id`,
        `user_password`) VALUES ('$name','$user_role','$user_mail','$user_type','$team_id',
        '$user_password');";

  if ($con->query($sql) == true) {
    // echo "Successfully Inserted";
    $insert = true;
  } else {
    echo "Error : $sql <br> $con->error";
  }

  $con->close();
}
?>

<?php include 'header.php' ?>

<?php
if ($delete) {
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your record has been deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
}
?>

<?php
if ($insert) {
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
          <strong>Success!</strong> Your record has been successfully inserted.
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
}
?>
<br><br>
<h1>User Master</h1>



<?php
if ($insert == true) {
  echo "<p>You record has been inserted</p>";
}
?>

<div class="container">

  <form action="userMaster.php" method="post">

    <br><br><br>
    <style>
      #dtHorizontalVerticalExample {
        margin: 0 auto;
        height: 300px;
        width: 1000px;
        overflow: auto;
        overflow-x: hidden;
        border-collapse: collapse;
      }
    </style>
    <table>
      <tr>
        <label for="name" class="table_label">Name:</label>
        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter User Name"><br>
      </tr>
      <tr>
        <label for="user_role" class="table_label">User Role:</label>
        <select name="user_role" class="form-select" id="user_role">
          <option value="Approver" selected>Approver</option>
          <option value="Preparer">Preparer</option>
        </select>
      </tr>
      <br>
      <tr>
        <label for="user_mail" class="table_label">Email:</label>
        <input type="email" class="form-control" id="user_mail" name="user_mail"><br>
      </tr>
      <tr>
        <label for="user_type" class="table_label">User Type:</label>
        <select name="user_type" class="form-select" id="user_type">
          <option value="Non-Admin" selected>Non-Admin</option>
          <option value="Admin">Admin</option>
        </select>
      </tr>
      <br>
      <tr>
        <label for="team_id" class="table_label">Team_id:</label>
        <input type="text" class="form-control" id="team_id" name="team_id" value="4"><br>
      </tr>
      <tr>
        <label for="user_password" class="table_label">Password:</label>
        <input type="Password" class="form-control" id="user_password" name="user_password">
      </tr>
    </table>
    <br>
    <button class="add btn btn-primary btn-lg" type="submit" name="add" >Add</button>
  </form>
  <br><br>
  

  <!-- Table displaying Records -->
  <div class="container my-4">

    <table id="myTable">
      <thead>
        <tr>
          <th>User ID</th>
          <th>User Name</th>
          <th>User Role</th>

          <th>User Type</th>
          <th>Team id</th>
          <th>User Password</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Fetch Data from User Master 
        
        $sql_fetch = "SELECT * FROM `tbl_user_master`";
        $result = $con->query($sql_fetch);
        $result->fetch_all(MYSQLI_ASSOC);

        $sno = 0;
        foreach ($result as $output) {
          $sno = $sno + 1;
          $user_id = $output['emp_id'];
          $user_name = $output['emp_name'];
          $user_role = $output['role'];
          // $user_type = $output['emp_type'];
          $team_id = $output['team_id'];
          $user_password = $output['password'];
          echo ' <tr>
            <td>' . $sno . '</td>
            <td>' . $user_name . '</td>
            <td>' . $user_role . '</td>
            <td></td>
            <td>' . $team_id . '</td>
            <td>' . $user_password . '</td>
            <td>
            <a href=" update_userMaster.php?edit='.$user_id.'" class="edit btn btn-sm btn-success">Edit</a></button>
            <a href="userMaster.php?delete='.$user_id.'" class="delete btn btn-sm btn-danger">Delete</button>
            </td>
            </tr>';
        }
        ?>
      </tbody>
    </table>

  </div>
  </body>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
  
  
  <!-- <script src="kpi.js"></script> -->

  </html>