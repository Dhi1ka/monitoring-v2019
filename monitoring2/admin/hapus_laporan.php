<?php 
include 'koneksi.php';
$no = $_GET['no'];
mysql_query("DELETE FROM laporan WHERE no='$no'")or die(mysql_error());
 
header("location:laporan.php?pesan=hapus");
?>