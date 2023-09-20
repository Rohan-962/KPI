<?php
// Connecting to the Database
$server = "localhost";
$user = "root";
$password = "";
$db = "kpi";

// Creating a Connection
$con = mysqli_connect($server, $user, $password, $db);

// Die if connection was not successful
if (!$con) {
  die("Connection to this Database failed due to " . mysqli_connect_error());
}

// Edit a record in Team Master

if (isset($_POST['update'])) {

  $team_id = $_POST['team_id'];
  $team_name = $_POST['team_name'];

  $sql = "UPDATE tbl_team_master SET team_name = '$team_name' WHERE team_id = '$team_id'";
  $result = mysqli_query($con, $sql);
  if ($result) {
    // Redirect to homepage to display updated user in list
    header("Location: teamMaster.php");
  } else {
    die(mysqli_error($con));
  }
}
?>

<?php include 'header.php' ?>

<?php
$team_id = $_GET['edit'];
$result = mysqli_query($con, "SELECT * FROM tbl_team_master WHERE team_id = '$team_id'");

while ($user_data = mysqli_fetch_array($result)) {
  $team_name = $user_data['team_name'];
}
?>

<br><br>
<h1>Team Master</h1>
<br><br>

<!-- Form to be filled -->
<div class="container">

  <form action="update_teamMaster.php" method="post">
    <input type="hidden" name="team_id" value="<?php echo $_GET['edit']; ?>">
    <br><br>

    <label for="team_name">
      <h1>Team Name:</h1>
    </label><br>

    <input type="text" class="form-control" id="team_name" name="team_name" value="<?php echo $team_name ?>"> <br>

    <button type="submit" class="update btn btn-primary btn-lg" name="update">Update</button>

  </form>
  <br><br>
  </body>

  <script src="kpi.js"> </script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>

  </html>