<?php 
include 'koneksi.php';
 
$nidn = $_POST['nidn'];
$nama_dosen = $_POST['nama_dosen'];
 
$query = mysql_query("select * from dosen where username='$nidn' and password='$nama_dosen'");
$cek = mysql_num_rows($query);
if($cek){
	$_SESSION['username'] = $nidn;
	$_SESSION['status'] = "login";
	header("location:home.php");
}else{
	header("location:index.php?pesan=gagal");
}
echo $cek;
?>