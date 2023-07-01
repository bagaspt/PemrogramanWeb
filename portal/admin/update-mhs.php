<?php
$namafolder="img/"; //tempat menyimpan file

include "../conn.php";

if (!empty($_FILES["nama_file"]["tmp_name"]))
{
        $jenis_gambar=$_FILES['nama_file']['type'];
        $id = $_POST['id'];
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $prodi = $_POST['prodi'];
        $telp = $_POST['telp'];
        $email = $_POST['email'];	
		
	if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
	{			
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
			$sql="UPDATE list_mhs SET nim='$nim', nama='$nama', jk='$jk', prodi='$prodi', telp='$telp', email='$email', gambar='$gambar' WHERE id='$id'";
			$res=mysqli_query($db, $sql) or die (mysqli_connect_error());
			echo "Gambar berhasil dikirim ke direktori".$gambar;
            echo "<h3><a href='mhs.php'> Input Lagi</a></h3>";	   
		} else {
		   echo "<p>Gambar gagal dikirim</p>";
		}
   } else {
		echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
   }
} else {
	echo "Anda belum memilih gambar";
}

?>