<?php
include "../conn.php";
$id = $_GET['kd'];

$query = mysqli_query($db, "DELETE FROM list_dosen WHERE id='$id'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'dosen.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'dosen.php'</script>";	
}
?>