<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'crud_db';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// mengecek koneksi
if (!$mysqli) {
	die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil.";
mysqli_close($mysqli);

?>