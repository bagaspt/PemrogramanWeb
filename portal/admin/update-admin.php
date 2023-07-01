<?php
include "../conn.php";
$user_id       = $_POST['user_id'];
$username      = $_POST['username'];
$password      = $_POST['password'];
$nama_lengkap  = $_POST['nama_lengkap'];

$query = mysqli_query($db, "UPDATE list_admin SET username='$username', password='$password', nama_lengkap='$nama_lengkap' WHERE user_id='$user_id'")or die(mysqli_connect_error());
if ($query){
header('location:admin.php');	
} else {
	echo "gagal";
    }
?>