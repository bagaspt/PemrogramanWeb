<?php
include "../conn.php";

$id = $_POST['id'];
$kode = $_POST['kode'];
$nama_mk = $_POST['nama_mk'];
$dosen = $_POST['dosen'];
$sks = $_POST['sks'];

$sql="INSERT INTO list_matkul (id,kode,nama_mk,dosen,sks) VALUES ('$id','$kode','$nama_mk','$dosen','$sks'";
$res=mysqli_query($db, $sql) or die (mysqli_connect_error());
echo "Data berhasil dimasukkan";
echo "<h3><a href='input-matkul.php'> Input Lagi</a></h3>";	  
echo "<h3><a href='matkul.php'> Daftar Matkul</a></h3>";
?>