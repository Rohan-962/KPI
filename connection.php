<?php
    // Connecting to the Database
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "kpi";

    // Creating a Connection
    $con = new mysqli($host, $user, $password, $db);

    if($con)
    {
        // echo "Successfully connected to the database";
    }
    else{
        echo mysqli_connect_error($con);
    }
?>