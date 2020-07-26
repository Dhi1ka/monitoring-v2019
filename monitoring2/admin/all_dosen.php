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

	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>

	<br/>
	<a class="tombol" href="home.php">Halaman Utama</a>
	<a class="tombol" href="input_dosen.php">+ Tambah Data Baru</a>
	<a class="tombol" href="logout.php">Log Out</a>


	<h3>Data Dosen</h3>
	<table border="1" class="table">
		<tr>
			<th>NIDN</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No HP</th>
			<th>Pilihan</th>
		</tr>
		<?php
		include "koneksi.php";
		$query_mysql = mysql_query("select * from dosen") or die(mysql_error());
		$nomor = 1;
		while ($data = mysql_fetch_array($query_mysql)) {
		?>
		<tr>
			<td><?php echo $data ["nidn"]; ?></td>
			<td><?php echo $data ["nama_dosen"]; ?></td>
			<td><?php echo $data ["alamat_dosen"]; ?></td>
			<td><?php echo $data ["no_hp"]; ?></td>
			<td>
				<a class="edit" href="edit_dosen.php?nidn=<?php echo $data['nidn']; ?>">Edit</a> |
				<a class="hapus" href="hapus_dosen.php?nidn=<?php echo $data['nidn']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>