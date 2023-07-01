<?php
include "../conn.php";
$id = $_GET['kd'];

$query = mysqli_query($db, "DELETE FROM list_mhs WHERE id='$id'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'mhs.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'mhs.php'</script>";	
}
?>