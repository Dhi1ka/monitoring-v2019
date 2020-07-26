<?php 
include 'koneksi.php';
$nim = $_POST['nim'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$alamat_mahasiswa = $_POST['alamat_mahasiswa'];
$kelas = $_POST['kelas'];
 
mysql_query("INSERT INTO mahasiswa VALUES('$nim','$nama_mahasiswa','$alamat_mahasiswa','$kelas')");
 
header("location:all_mahasiswa.php?pesan=input");
?>