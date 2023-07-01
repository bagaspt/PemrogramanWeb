<?php
include ("conn.php");

session_start();
	
$username = $_POST['username'];
$password = $_POST['password'];

$q = mysqli_query($db, "select * from list_admin where username='$username' and password='$password'");
$row = mysqli_fetch_array ($q);

if (mysqli_num_rows($q) == 1) {
    $_SESSION['user_id'] = $row['user_id'];
	$_SESSION['username'] = $username;
	$_SESSION['nama_lengkap'] = $row['nama_lengkap'];
    $_SESSION['gambar'] = $row['gambar'];	

	header('location:admin/index.php');
} else {
	header('location:login.html?error=4');
}
?>