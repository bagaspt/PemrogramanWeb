<?php
// isi nama host, username mysql, dan password mysql Anda
$host = mysql_connect("localhost","root","");

if($host) {
	echo "Koneksi host berhasil.<br/>";
}else{
	echo "Koneksi gagal.<br/>";
}

// isikan dengan nama database yang akan di hubungkan
$db = mysql_select_db("konekdb");

if($db) {
	echo "Koneksi database berhasil.";
}else{
	echo "Koneksi database gagal.";
}
?>