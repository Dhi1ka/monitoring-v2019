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
	<h3>Edit data</h3>
 
	<?php 
	include "koneksi.php";
	$nidn = $_GET['nidn'];
	$query_mysql = mysql_query("SELECT * FROM dosen WHERE nidn='$nidn'")or die(mysql_error());
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update_dosen.php" method="post">		
		<table>
			<tr>
				<td>NIDN</td>
				<td><input type="text" name="nidn" value="<?php echo $data['nidn'] ?>"></td>					
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama_dosen" value="<?php echo $data['nama_dosen'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat_dosen" value="<?php echo $data['alamat_dosen'] ?>"></td>					
			</tr>	
			<tr>
				<td>No HP</td>
				<td><input type="text" name="no_hp" value="<?php echo $data['no_hp'] ?>"></td>					
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