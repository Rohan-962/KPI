<?php

    $insert = false;
    $delete = false;

    require 'connection.php';
    // -------------------------------------------------------------------
    try{

      $sql = "SELECT `team_name` FROM `tbl_team_master`;";
      $results = $con->query($sql);
      if(!$results)
      {
        throw new Exception("Failed to select from team_master_db");

      }
      $results -> fetch_all(MYSQLI_ASSOC);
    }catch(Exception $e){
      echo $e;
    }
  
    // This code inserts a record in kpi_master 
    if(isset($_POST['add_kpi']))
    {       
      $team_name = $_POST['team_name'];

      // code to get team_id for team name
      $sql_team_id = "SELECT team_id FROM team_master WHERE team_name = '$team_name';";
      $result2 = $con->query($sql_team_id);
      $result2 -> fetch_all(MYSQLI_ASSOC);
      foreach ($result2 as $output2 ) {
        $team_id=$output2["team_id"];
        $team_name = $output2['team_name'];
      }
      
      $kpi_name = $_POST['kpi_name'];
      $type = $_POST['kpi_type'];
      $target = $_POST['kpi_target'];        
      $month = $_POST['month'];
      $year = $_POST['year'];
      
      $sql_insert = "INSERT INTO `kpi_master` (`kpi_name`,`kpi_type`, `kpi_target`, `team_id`, `month`, `year`)
      VALUES ('$kpi_name','$type','$target','$team_id','$month','$year');";

      if($con->query($sql_insert) ==  true)
      {
          
          $insert=true;
      }
      else
      {
        echo "Error : $sql_insert <br> $con->error";
      }
      $con->close();
      // ----- end of inserting record in kpi master ------
    }

    // Delete a record
    if(isset($_GET['delete'])){

      $kpi_id = $_GET['delete'];
      $delete = true;
      $sql = "DELETE FROM kpi_master WHERE kpi_id = $kpi_id";
      $result = mysqli_query($con, $sql);
    }
      
?>

<?php include 'header.php' ?>
<?php
  if ($insert) {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your Record has been inserted.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }
?>

<?php
  if($delete){
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your Record has been deleted.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
  }
?>
  <br><br>
  <h1>KPI Master</h1>
  <br><br>
  
  <div class="container">
   
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

      <br><br>
      
      <label for="kpi_name">KPI Name:</label>
      <input type="text" class="form-control" id="kpi_name" name="kpi_name" placeholder="Enter Kpi Name"><br>
      <label for="type">Type:</label>
      <input type="text" class="form-control" id="kpi_type" name="kpi_type"><br>
      <label for="target">Target:</label>
      <input type="text" class="form-control" id="kpi_target" name="kpi_target"><br>
      <label for="team_name">Team Name:</label>
      <select name = "team_name" class="form-select" id = "team_name">
          <option>Select team </option>
        <?php foreach ($results as $output) {?>
              {
                <option><?php echo $output["team_name"];?></option> 
                <?php } ?>
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
      <input type="text" class="form-control" id="year" name="year"><br> 
      <button class="add btn btn-primary btn-lg" type="submit" name="add_kpi" >Add</button>
      <br>
    </form>
    
    <!-- Table Displaying Records -->
    <div class="container my-4">
      <table id="myTable">
        <thead>
          <tr>
            <th>No</th>
            <th>KPI Name</th>
            <th>Type</th>
            <th>Target</th>
            <th>Team Name</th>
            <th>Month</th>
            <th>Year</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
          // Fetch Data from User Master 
          $sql_fetch = "SELECT * FROM tbl_kpi_master";
          $result = $con->query($sql_fetch);
          $result->fetch_all(MYSQLI_ASSOC);

          $sno = 0;
          foreach ($result as $output) {
            $sno = $sno + 1; 
            $kpi_id = $output['kpi_id'];
            // $team_id = $output['team_id'];
            // Code to get team name
            $sql = "SELECT `team_name` FROM `tbl_team_master`;";
            $results = $con->query($sql);
            $results -> fetch_all(MYSQLI_ASSOC);
            foreach ($results as $output3) {
              $team_name = $output3['team_name'];
            }
            
            echo ' <tr>
                      <td>'. $sno.'</td>

                      <td>'. $output['kpi_name'] .'</td>
                      <td>'. $output['target_type'] .'</td>
                      <td>'. $output['target'] .'</td>
                      <td>'. $output3['team_name'] .'</td>
                      <td>'. $output['kpi_month'] .'</td>
                      <td>'. $output['kpi_year'] .'</td>
                      <td>
                      <a href="update_kpiMaster.php?edit='.$kpi_id.'" class="edit btn btn-sm btn-success">Edit</a></button>
                      <a href="kpiMaster.php?delete='.$kpi_id.' " class="delete btn btn-sm btn-danger">Delete</button>            
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
<script>

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ", e.target.id.substr(1));
        kpi_id = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `kpiMaster.php?delete=${kpi_id}`;
          // TODO: Create a form and use post request to submit a form
        } else {
          console.log("no");
        }
      })
    })
  </script>

  
</html>



