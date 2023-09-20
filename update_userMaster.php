<?php

$insert = false;
$delete = false;

// Connecting to the Database
require 'connection.php';


// Edit a record

if (isset($_POST['update'])) {

    $user_id = $_POST['user_id'];
    $user_name = $_POST['user_name'];
    $user_role = $_POST['user_role'];
    $user_mail = $_POST['user_mail'];
    $user_type = $_POST['user_type'];
    $team_id = $_POST['team_id'];
    $user_password = $_POST['user_password'];
  
    $sql = "UPDATE tbl_user_master 
            SET emp_name = '$user_name', role = '$user_role', email = '$user_mail', emp_type = '$user_type', team_id = '$team_id', `password` = '$user_password' 
            WHERE emp_id = '$user_id'
           ";

    $result = mysqli_query($con, $sql);
    if ($result) {
      // Redirect to homepage to display updated user in list
      header("Location: userMaster.php");
    } else {
      die(mysqli_error($con));
    }
  }
  ?>
  
  <?php include 'header.php' ?>
  
  <?php
  $user_id = $_GET['edit'];
  $result = mysqli_query($con, "SELECT * FROM tbl_user_master WHERE emp_id = '$user_id'");
    
  while ($user_data = mysqli_fetch_array($result)) {
    $user_name = $user_data['emp_name'];
    $user_role = $user_data['role'];
    $user_mail = $user_data['email'];
    $user_type = $user_data['emp_type'];
    $team_id = $user_data['team_id'];
    $user_password = $user_data['password'];
  
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

    <form action="update_userMaster.php" method="post">

        <br><br><br>
        
        <table>
            <input type="hidden" name="user_id" value="<?php echo $_GET['edit']; ?>">
            <tr>
                <label for="name" class="table_label">Name:</label>
                <input type="text" class="form-control" id="user_name" name="user_name" value="<?php echo $user_name ?>"><br>
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
                <input type="email" class="form-control" id="user_mail" name="user_mail" value="<?php echo $user_mail ?>"><br>
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
                <input type="text" class="form-control" id="team_id" name="team_id" value="<?php echo $team_id ?>"><br>
            </tr>
            <tr>
                <label for="user_password" class="table_label">Password:</label>
                <input type="Password" class="form-control" id="user_password" name="user_password" value="<?php echo $user_password ?>">
            </tr>
        </table>
        <br>
        <button type="submit" class="update btn btn-primary btn-lg" name="update">Update</button>
    </form>
    <br><br>
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