<?php 
    $title = 'view records';
    require_once '../includes/header.php';
    require_once '../db/conn.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $message = $_POST['string'];
   
    
    
    $message = mysqli_real_escape_string($conn, $message);
   
    
    }
    $sql="INSERT INTO string_info (message) VALUES ('$message')";
    
    // Execute the query and check for success
    if (mysqli_query($conn, $sql)) {
        echo "Record added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
?>