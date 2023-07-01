<?php
include "../conn.php";

$id = $_POST['id'];
$kode = $_POST['kode'];
$nama_mk = $_POST['nama_mk'];
$dosen = $_POST['dosen'];
$sks = $_POST['sks'];

$sql="UPDATE list_matkul SET kode='$kode', nama_mk='$nama_mk', dosen='$dosen', sks='$sks' WHERE id='$id'";
$res=mysqli_query($db, $sql) or die (mysqli_connect_error());
echo "Update berhasil dilakukan";
echo "<h3><a href='matkul.php'> Input Lagi</a></h3>";	   
?>