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
	
	<br/>
	
	<a href="laporan.php">Lihat Semua Data</a>
	<a class="tombol" href="logout.php">Log Out</a>
 
	<br/>
	<h3>Edit data</h3>
 
	<?php 
	include "koneksi.php";
	$no = $_GET['no'];
	$query_mysql = mysql_query("SELECT * FROM laporan WHERE no='$no'")or die(mysql_error());
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update_laporan.php" method="post">		
		<table>
			<tr>
				<td>No</td>
				<td><input type="text" name="no" value="<?php echo $data['no'] ?>"></td>					
			</tr>
			<tr>
				<td>Hari, Tanggal</td>
				<td>
					<input type="date" name="hari_tanggal" value="<?php echo $data['hari_tanggal'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Kegiatan</td>
				<td><input type="text" name="kegiatan" value="<?php echo $data['kegiatan'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>