<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pgw";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Create table
$sql = "CREATE TABLE datapegawai (
    idpg varchar(4) NOT NULL,
    namapg varchar(30) NOT NULL,
    nopg char(15) NOT NULL,
    emailpg varchar(30) NOT NULL,
    jkpg varchar(15) NOT NULL,
    alamatpg varchar(50) NOT NULL,
    jabatan varchar(30) NOT NULL
  ) ";
  

if (mysqli_query($conn, $sql)) {
    echo "New record created succescfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>