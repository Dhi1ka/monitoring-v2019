<?php 
 
include 'koneksi.php';
$nidn = $_POST['nidn'];
$nama_dosen = $_POST['nama_dosen'];
$alamat_dosen = $_POST['alamat_dosen'];
$no_hp = $_POST['no_hp'];
 
mysql_query("UPDATE dosen SET nama_dosen='$nama_dosen', alamat_dosen='$alamat_dosen', no_hp='$no_hp' WHERE nidn='$nidn'");
 
header("location:all_dosen.php?pesan=update");
?>