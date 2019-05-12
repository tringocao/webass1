<?php
    $conn = mysqli_connect("localhost", "root", "", "ass2"); 
    mysqli_set_charset($conn, 'UTF8');


    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>