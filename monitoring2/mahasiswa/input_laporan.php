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
 
	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi_laporan.php" method="post">		
		<table>
			<tr>
				<td>No</td>
				<td><input type="text" name="no"></td>					
			</tr>
			<tr>
				<td>Hari, Tanggal</td>
				<td><input type="date" name="hari_tanggal"></td>					
			</tr>	
			<tr>
				<td>Kegiatan</td>
				<td><input type="text" name="kegiatan"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>