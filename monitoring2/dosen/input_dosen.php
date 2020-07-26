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
 
	<a href="all_dosen.php">Lihat Semua Data</a>
	
	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi_dosen.php" method="post">		
		<table>
			<tr>
				<td>NIDN</td>
				<td><input type="text" name="nidn"></td>					
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama_dosen"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat_dosen"></td>					
			</tr>	
			<tr>
				<td>No HP</td>
				<td><input type="text" name="no_hp"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>