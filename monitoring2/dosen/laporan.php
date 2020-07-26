<!DOCTYPE html>
<html>
<head>
	<title>Sistem Monitoring Kerja Praktek Mahasiswa Teknik Informatika UNIPMA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="bg-11-full.jpg">
	<div class="judul">
		<h1>Sistem Monitoring Kerja Praktek Mahasiswa Teknik Informatika UNIPMA</h1>
		
	</div>
	<br>
	<br>

	
	<br/>
	
	<a class="tombol" href="index.php">Halaman Utama</a>

	<h3>Data Laporan Mahasiswa</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Hari, Tanggal</th>
			<th>Kegiatan</th>
		</tr>
		<?php
		include "koneksi.php";
		$query_mysql = mysql_query("select * from laporan") or die(mysql_error());
		$nomor = 1;
		while ($data = mysql_fetch_array($query_mysql)) {
		?>
		<tr>
			<td><?php echo $data ["no"]; ?></td>
			<td><?php echo $data ["hari_tanggal"]; ?></td>
			<td><?php echo $data ["kegiatan"]; ?></td>
			
		</tr>
		<?php } ?>
	</table>
</body>
</html>