<?php 
include 'koneksi.php';
$nidn = $_GET['nidn'];
mysql_query("DELETE FROM dosen WHERE nidn='$nidn'")or die(mysql_error());
 
header("location:all_dosen.php?pesan=hapus");
?>