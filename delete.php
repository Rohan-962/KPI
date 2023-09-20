<?php
require 'connection.php';

// Get id from URL to delete that user
$team_id = $_GET['delete'];

// Delete user row from table based on given id
$result = mysqli_query($con, "DELETE FROM team_master WHERE team_id=$team_id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:teamMaster.php");
?>