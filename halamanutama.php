<?php
// Memanggil Koneksi pada file koneksidbs.php
include 'koneksidbs.php';
?>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-
scale=1.0">

<title>PROGRAM DATA PEGAWAI</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>PROGRAM DATA KEPEGAWAIAN</h1>
<br>
<a href="halamanutama.php">
<button class="button button">REFRESH</button>
</a>
<a href="tambahpegawai.php">
<button class="button button">TAMBAH DATA</button>
</a>
<a href="ubahpegawai.php">
<button class="button button">UBAH DATA</button>
</a>
<a href="hapuspegawai.php">
<button class="button button">HAPUS DATA</button>
</a>
<br>

<br>
<p>DATA PEGAWAI :</p>
<!-- Menampiilkan Data -->
<table border="1" width="100%">
<th>No.</th>
<th>ID Pegawai</th>
<th>Nama Pegawai</th>
<th>No. HP</th>
<th>E-mail</th>
<th>Jenis Kelamin</th>
<th>Alamat</th>
<th>Jabatan</th>
<?php
$pegawai = mysqli_query($conn, "SELECT * from
datapegawai");
$no=1;
foreach ($pegawai as $row){
echo "<tr>
<th>$no</th>
<th>".$row['idpg']."</th>
<th>".$row['namapg']."</th>
<th>".$row['nopg']."</th>
<th>".$row['emailpg']."</th>
<th>".$row['jkpg']."</th>
<th>".$row['alamatpg']."</th>
<th>".$row['jabatan']."</th>
</tr>";
$no++;
}
?>
</table>
<p>Total Pegawai : <?php echo
mysqli_num_rows($pegawai)?></p>
</body>
</html>