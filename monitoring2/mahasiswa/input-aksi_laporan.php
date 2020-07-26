<?php 
include 'koneksi.php';
$no = $_POST['no'];
$hari_tanggal = $_POST['hari_tanggal'];
$kegiatan = $_POST['kegiatan'];
 
mysql_query("INSERT INTO laporan VALUES('$no','$hari_tanggal','$kegiatan')");
 
header("location:laporan.php?pesan=input");
?>