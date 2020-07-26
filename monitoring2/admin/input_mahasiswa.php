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
 
	<a href="all_mahasiswa.php">Lihat Semua Data</a>
	<a class="tombol" href="logout.php">Log Out</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi_mahasiswa.php" method="post">		
		<table>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>					
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama_mahasiswa"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat_mahasiswa"></td>					
			</tr>	
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>