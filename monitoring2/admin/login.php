<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$query = mysql_query("select * from admin where username='$username' and password='$password'");
$cek = mysql_num_rows($query);
if($cek){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:home.php");
}else{
	header("location:index.php?pesan=gagal");
}
echo $cek;
?>