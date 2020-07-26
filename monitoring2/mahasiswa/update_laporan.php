<?php 
 
include 'koneksi.php';
$no = $_POST['no'];
$hari_tanggal = $_POST['hari_tanggal'];
$kegiatan = $_POST['kegiatan'];
 
mysql_query("UPDATE laporan SET hari_tanggal='$hari_tanggal', kegiatan='$kegiatan', WHERE no='$no'");
 
header("location:laporan.php?pesan=update");
?>