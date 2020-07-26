<?php 
include 'koneksi.php';
$nidn = $_POST['nidn'];
$nama_dosen = $_POST['nama_dosen'];
$alamat_dosen = $_POST['alamat_dosen'];
$no_hp = $_POST['no_hp'];
 
mysql_query("INSERT INTO dosen VALUES('$nidn','$nama_dosen','$alamat_dosen','$no_hp')");
 
header("location:all_dosen.php?pesan=input");
?>