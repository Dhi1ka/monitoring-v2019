<?php 
include 'koneksi.php';
$nim = $_GET['nim'];
mysql_query("DELETE FROM mahasiswa WHERE nim='$nim'")or die(mysql_error());
 
header("location:all_mahasiswa.php?pesan=hapus");
?>