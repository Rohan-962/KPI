<?php

session_start();

// Connecting to the Database
require 'connection.php';
// echo "Successfully connected to the Database.";


$team_id = 0;
$team_name = '';
$insert = false;
$update = false;
$delete = false;

// Insert a record in Team Master

if (isset($_POST['save'])) {

  $team_name = $_POST["team_name"];

  $sql = "INSERT INTO `tbl_team_master`(`team_name`) VALUES ('$team_name');";
  //  echo $sql;

  if ($con->query($sql) == true) {
    // echo "Successfully Inserted";
    $insert = true;
  } else {
    echo "Error : $sql <br> $con->error";
  }

  // $con->close();
}

// Delete a record from Team Master

if (isset($_GET['delete'])) {
  
  $delete = true;
  $team_id = $_GET['delete'];
  
  $sql = "DELETE FROM  `tbl_team_master` WHERE team_id = $team_id;";

  $result = mysqli_query($con, $sql);
  // $con->close();
}
?>

<?php include 'header.php' ?>
<?php
if ($insert) {
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
          <strong>Success!</strong> Your record has been successfully inserted.
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
}
?>
<?php
  if($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your record has been deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
<br><br>
<h1>Team Master</h1>
<br><br>

<!-- Form to be filled -->
<div class="container">
  
  <form action="teamMaster.php" method="post">
    <input type="hidden" name="team_id" value="<?php echo $team_id; ?>">
    <br><br>

    <label for="name">
      <h1>Team Name:</h1>
    </label><br>
    <input type="text" class="form-control" id="team_name" name="team_name" value="<?php echo $team_name ?>"> </textarea><br>
    <?php if ($update == true): ?>
	  <button class="add btn btn-primary btn-lg" type="submit" name="update" style="background: #556B2F;" >Update</button>
    <?php else: ?>
	  <button class="add btn btn-primary btn-lg" type="submit" name="save" >Add</button>
    <?php endif ?>
    <?php
    if ($insert == true) {
      echo "<br><br>Your record has been successfully inserted.";
    }
    ?>
  </form>
  <br><br>

  <!-- Display Records from teamMaster -->
  <?php
  
  $result = $con->query("Select * from `kpi`.`tbl_team_master`") or die($con->error);
  // pre_r($result->fetch_assoc());
  ?>
  <div class="container my-4">
    <table id="myTable">
      <thead>
        <tr>
          <th>Sno</th>
          <th>Team Name</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Fetch Data from User Master 
        // $con = mysqli_connect("localhost", "root", "", "kpi");
        $sql_fetch = "SELECT * FROM tbl_team_master";
        $result = $con->query($sql_fetch);
        $result->fetch_all(MYSQLI_ASSOC);

        $sno = 0;
        foreach ($result as $output) {
          $sno = $sno + 1;
          $team_id = $output['team_id'];
          $team_name = $output['team_name'];
          echo ' <tr>
            <td>' . $sno . '</td>
            <td>' . $team_name . '</td>
            <td>
            <a href="update_teamMaster.php?edit='.$team_id.'" class="edit btn btn-sm btn-success">Edit</a></button>
            <a href="teamMaster.php?delete='.$team_id.'" class="delete btn btn-sm btn-danger">Delete</button>
            
            </td>
            </tr>';
        }
        ?>
      </tbody>
    </table>
  </div>
  
  </body>

  <script src="kpi.js"> </script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
  <script>
    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ", e.target.id.substr(1));
        kpi_id = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `teamMaster.php?delete=${team_id}`;
          // TODO: Create a form and use post request to submit a form
        } else {
          console.log("no");
        }
      })
    })
  </script>

  </html>