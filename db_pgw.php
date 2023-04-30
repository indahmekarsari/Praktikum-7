<?php
$servername = "localhost";
$username = "root";
$password = "";

//Create connecton 
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("connection failed: ".mysqli_connect_error());  
}

// Create database
$sql = "CREATE DATABASE db_pgw";
if (mysqli_query($conn, $sql)){
    echo "database created successfully";   
} else {
    echo "Error creating database: ".mysqli_error($conn);   
}
mysqli_close($conn);
?>