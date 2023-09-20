<?php

  // Connecting to the Database
  require 'connection.php';

//   $actual_score_error = "";
//   if ($_SERVER["REQUEST_METHOD"]=="POST") {
//       if (empty($_POST['actual_score'])) {
//           $actual_score_error = "Required";
//       }
//       else {
//         $actual_score = test_input($_POST["actual_score"]);
//       }
//   }

  if (isset($_POST['sfa'])) {
    
    $kpi_id = $_POST['kpi_id'];
    $actual_score = $_POST['actual_score'];
    $root_cause = $_POST['root_cause'];
    $corrective_action = $_POST['corrective_action'];
    $user_comments = $_POST['user_comments'];
    $status_1 = $_POST['status_1'];
    $approver_comment = $_POST['approve_comment'];
    
    $sql =   "UPDATE `tbl_kpi_master` SET kpi_id = $kpi_id,actual_score = $actul_score,
             root_cause = $root_cause,corrective_action = $corretive_action,
             user_comments = $user_comments,status_1 = $status_1,approver_comment = $approver_comment 
             WHERE kpi_id = $kpi_id;";
    }
  
  ?>

<?php 
   
   include 'header.php';
   
?>

<!-- Fetch KPI's from team Master -->
    <div class="container">

    
    <form name="masterKpi" action="Master_kpi_page.html" method="get">
    
    <!-- <input type="text" name="username" value="<?php echo $_SESSION['user_id']; ?> "/> -->
         
        <br><br>
        <?php
            session_start();
            // $user_id =  $_COOKIE['user_id'];
            
            // try{

                $sql_fetch = "SELECT tbl_kpi_master.kpi_id,tbl_kpi_master.kpi_name, tbl_kpi_master.team_name, tbl_kpi_master.target_type, tbl_kpi_master.target, tbl_team_master.team_name, tbl_kpi_master.kpi_month, tbl_kpi_master.kpi_year, tbl_kpi_master.actual, tbl_kpi_master.tat_status, tbl_kpi_master.root_cause, tbl_kpi_master.corrective_action, tbl_kpi_master.comments, tbl_kpi_master.record_status, tbl_kpi_master.approver_comments, tbl_kpi_master.approval_updated_date, tbl_kpi_master.approval_updated_time from tbl_kpi_master,tbl_team_master,tbl_user_master where  tbl_team_master.team_name=tbl_kpi_master.team_name AND tbl_user_master.team_id = tbl_team_master.team_id and tbl_user_master.emp_id = 7;";
                $result = $con->query($sql_fetch);
                $result -> fetch_all(MYSQLI_ASSOC);
            //     throw new Exception("Error");
            // }catch(Exception $e){
            //     echo $e;
            // }

        ?>
        <table id="master_table" class="display nowrap" style="width:100%"> 
            <thead>
                <tr>
                    <th>Checkbox</th>
                    <th>KPI Id </th>
                    <th>KPI Name</th>
                    <th>Type</th>
                    <th>Target</th>
                    <th>Team Name</th>
                    <th>Month</th>
                    <th>Year</th>
                    <th>Actual Score</th>
                    <th>Met / Not-met </th>
                    <th>Root Cause</th>
                    <th>Corrective Action</th>
                    <th>User Comments</th>
                    <th>Status</th>
                    <th>Approve Comment</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php 
                    foreach ($result as $output) {?>
                    <td><input type="checkbox"></td>
                    <td><?php echo $output["kpi_id"];?></td>
                    <td><?php echo $output["kpi_name"];?></td>
                    <td><?php echo $output["target_type"];?></td>
                    <td><?php echo $output["target"];?></td>
                    <td><?php echo $output["team_name"];?></td>
                    <td><?php echo $output["kpi_month"];?></td>
                    <td><?php echo $output["kpi_year"];?></td>
                    <td><input type="text" id="actual_score" name="actual_score">
                       
                    </td>                                          
                    <!-- <td><input type="text" id="met_not_met" name="met_not_met"><br><br></td> -->
                    <td>
                    <select id="met_not_met" name="met_not_met">
                        <option value = "met" selected>Met</option>
                        <option value = "not-met">Not-Met</option>
                    </select>
                    </td>
                    <td><input type="text" id="root_cause" name="root_cause"></td>                    
                    <td><input type="text" id="corrective_action" name="corrective_action"></td>
                    <td><input type="text" id="user_comments" name="user_comments"></td>
                    <td><input type="text" id="approve_comment" name="approve_comment"></td>
                    <td><input type="text" id="status_1" name="status_1"></td>

                </tr>
                <?php } ?>
            </tbody>
        </table>

        <br><br>
        <button type="submit" name = "sfa">Send For Approval</button> 
        <br>
      </form>
    </div>
</body>
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
<script src="//code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
    $('#master_table').DataTable( {
        "scrollY": 200,
        "scrollX": true
    } );
} );
</script>
</html>

