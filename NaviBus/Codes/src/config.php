<?php 
    // DB Configurations
    $servername = "sql300.infinityfree.com";
    $username = "if0_37757325";
    $password = "YFwnz3S3BLy5oe ";
    $db_name = "if0_37757325_navibus";

    // Creating the DB connection
    $conn = new mysqli($servername, $username, $password, $db_name);

    // Checking the connection is valid or not
    if($conn->connect_error){

        die("Connection failed: " . $conn->connect_error);
}
    
?>  


