<?php 
 
include 'koneksi.php';
$nim = $_POST['nim'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$alamat_mahasiswa = $_POST['alamat_mahasiswa'];
$kelas = $_POST['kelas'];
 
mysql_query("UPDATE mahasiswa SET nama_mahasiswa='$nama_mahasiswa', alamat_mahasiswa='$alamat_mahasiswa', kelas='$kelas' WHERE nim='$nim'");
 
header("location:all_mahasiswa.php?pesan=update");
?>