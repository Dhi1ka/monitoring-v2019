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
	<h3>Edit data</h3>
 
	<?php 
	include "koneksi.php";
	$nim = $_GET['nim'];
	$query_mysql = mysql_query("SELECT * FROM mahasiswa WHERE nim='$nim'")or die(mysql_error());
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update_mahasiswa.php" method="post">		
		<table>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" value="<?php echo $data['nim'] ?>"></td>					
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama_mahasiswa" value="<?php echo $data['nama_mahasiswa'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat_mahasiswa" value="<?php echo $data['alamat_mahasiswa'] ?>"></td>					
			</tr>	
			<tr>
				<td>kelas</td>
				<td><input type="text" name="kelas" value="<?php echo $data['kelas'] ?>"></td>					
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