<?php

    $insert = false;
    $delete = false;

    // Connecting to the database
    require 'connection.php';

    // -------------------------------------------------------------------
  
    

    if (isset($_POST['update'])) {

        $kpi_id = $_POST['kpi_id'];
        $name = $_POST['kpi_name'];
        $type = $_POST['kpi_type'];
        $target = $_POST['kpi_target'];
        $team_name = $_POST['team_name'];
        echo $team_name;
        // code to get team_id for team name
        $sql_team_id = "SELECT * FROM tbl_team_master WHERE team_name = '$team_name';";
        $result2 = $con->query($sql_team_id);
        $result2 -> fetch_all(MYSQLI_ASSOC);
        foreach ($result2 as $output2 ) {
          $team_id=$output2["team_id"];
        }

        echo $team_id;
        
        $month = $_POST['month'];
        $year = $_POST['year'];
      
        $sql = "UPDATE tbl_kpi_master SET kpi_name = '$name', target_type = '$type',kpi_target = '$target',team_id = '$team_id',month = '$month',year = '$year' WHERE kpi_id = '$kpi_id' ";
        $result = mysqli_query($con, $sql);
        if ($result) {
          echo "Your record has been successfully updated";
          // Redirect to homepage to display updated user in list
          header("Location: kpiMaster.php");
        } else {
          die(mysqli_error($con));
        }
      }
      ?>


<?php include 'header.php' ?>


<?php
$kpi_id = $_GET['edit'];
$sql = "SELECT * FROM tbl_kpi_master WHERE kpi_id = '$kpi_id'";
$result = mysqli_query($con,$sql);

while ($user_data = mysqli_fetch_array($result)) {
    $name = $user_data['kpi_name'];
    $type = $user_data['target_type'];
    $target = $user_data['target'];
    $team_name = $user_data['team_name'];
    $month = $user_data['kpi_month'];
    $year = $user_data['kpi_year'];
}
?>

  <br><br>
  <h1>KPI Master</h1>
  <br><br>
  
  <div class="container">
   
    <form action="update_kpiMaster.php" method="post">

      <br><br>
      <input type="hidden" name="kpi_id" value="<?php echo $_GET['edit']; ?>">
      <label for="name">KPI Name:</label>
      <input type="text" class="form-control" id="name" name="kpi_name" value="<?php echo $name ?>"><br>
      <label for="type">Type:</label>
      <input type="text" class="form-control" id="type" name="kpi_type" value="<?php echo $type ?>"><br>
      <label for="target">Target:</label>
      <input type="text" class="form-control" id="target" name="kpi_target" value="<?php echo $target ?>"><br>
      <label for="team_name">Team Name:</label>
      <select name = "team_name" class="form-select" id="<?php echo $team_name; ?>">
          <option>Select team </option>
        <?php
          $sql = "SELECT `team_name` FROM `tbl_team_master`;";
          $results = $con->query($sql);
          $results -> fetch_all(MYSQLI_ASSOC);
          foreach ($results as $output) {?>
            {
              <option><?php echo $output["team_name"];?></option> 
              <?php }        
              echo $team_id;
              ?>
              
            }
          }
      </select>
      <br>
      <label for="month">Month:</label>
      <select name = "month" class="form-select" id = "month">        
          <option>Jan</option>
          <option>Feb</option>  
          <option>Mar</option>  
          <option>Apr</option>  
          <option>May</option>  
          <option>Jun</option>  
          <option>Jul</option>  
          <option>Aug</option>  
          <option>Sep</option>  
          <option>Oct</option>  
          <option>Nov</option>  
          <option>Dec</option>  
      </select><br>
      
      <label for="year">Year:</label>
      <input type="text" class="form-control" id="year" name="year" value="<?php echo $year?>"><br> 
      <button class="update btn btn-primary btn-lg" type="submit" name="update" >Update</button>
      <br>
    </form>
    
    
</body>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
    $('#myTable').DataTable();
  });
</script>  
</html>



