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
	<a class="tombol" href="input_mahasiswa.php">+ Tambah Data Baru</a>
	<a class="tombol" href="logout.php">Log Out</a>


	<h3>Data Mahasiswa</h3>
	<table border="1" class="table">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Kelas</th>
			<th>Pilihan</th>
		</tr>
		<?php
		include "koneksi.php";
		$query_mysql = mysql_query("select * from mahasiswa") or die(mysql_error());
		$nomor = 1;
		while ($data = mysql_fetch_array($query_mysql)) {
		?>
		<tr>
			<td><?php echo $data ["nim"]; ?></td>
			<td><?php echo $data ["nama_mahasiswa"]; ?></td>
			<td><?php echo $data ["alamat_mahasiswa"]; ?></td>
			<td><?php echo $data ["kelas"]; ?></td>
			<td>
				<a class="edit" href="edit_mahasiswa.php?nim=<?php echo $data['nim']; ?>">Edit</a> |
				<a class="hapus" href="hapus_mahasiswa.php?nim=<?php echo $data['nim']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>