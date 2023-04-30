<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pgw";
// Membuat Koneksi
$conn = mysqli_connect($servername, $username, $password,
$dbname);
// Cek Koneksi
if (!$conn) {
die("Connection failed:" . mysqli_connect_error());
}
?>