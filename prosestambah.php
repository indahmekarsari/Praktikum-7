<?php
include 'koneksidbs.php';
if (isset($_POST['simpan'])) {
$idpg = $_POST['idpegawai'];
$namapg = $_POST['namapegawai'];
$nopg = $_POST['nopegawai'];
$emailpg = $_POST['email'];
$jkpg = $_POST['jkelamin'];
$alamatpg = $_POST['alamat'];
$jabatan = $_POST['jabatan'];

// Menyimpan ke database
$pegawai = mysqli_query($conn, "INSERT INTO datapegawai
VALUES ('$idpg', '$namapg', '$nopg', '$emailpg', '$jkpg',
'$alamatpg', '$jabatan')");
if ($pegawai) {
// pesan jika data tersimpan
echo "<script>alert('Data Karyawan Berhasil
Ditambahkan!'); window.location.href='halamanutama.php'</script>";
} else {
// pesan jika data gagal disimpan
echo "<script>alert('Data Karyawan Gagal
Ditambahkan!!');
window.location.href='tambahpegawai.php'</script>";
}
} else {
// jika coba akses langsung halaman ini akan diredirect
//ke halaman index header 
('Location: halamanuatama.php');
}
?>