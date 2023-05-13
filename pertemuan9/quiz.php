<html>
	<head><title>Form Penghitungan Gaji</title></head>
	<body>
		<FORM ACTION="" METHOD="POST" NAME="input">
			<h2>Form Penghitungan Gaji</h2>
			NIP : <input type="text" name="nip"><br><br>
			Nama Pegawai : <input type="text" name="name"><br><br>
			Gaji Pokok : <input type="number" name="gapok"><br><br>
			Bonus : <input type="number" name="bonus"><br><br>
			<input type="submit" name="Submit" value="Submit"><br><br><br>
		</FORM>
	</body>
</html>

<?php
if (isset($_POST['Submit'])) {
	$nip = $_POST['nip'];
	$nama = $_POST['name'];
	$gapok = $_POST['gapok'];
	$bonus = $_POST['bonus'];
	$ktunjuangan = 0.05;
	$kpajak = 0.1;
	$tunjangan = (int)$gapok * $ktunjuangan;
	$pajak = (int)$gapok *$kpajak;
	$gaji = (int)$gapok + (int)$bonus + $tunjangan - $pajak;

	echo "Berikut adalah detail perhitungan gaji nya<br>";
	echo "=======================================<br>";
	echo "NIP = $nip<br>";
	echo "Nama Pegawai = $nama<br>";
	echo "=======================================<br>";
	echo "Gaji Pokok = $gapok<br>";
	echo "Bonus = $bonus<br>";
	echo "Tunjangan = $tunjangan<br>";
	echo "Pajak = $pajak<br>";
	echo "=======================================<br>";
	echo "Gaji yang harus dibayarkan = $gaji";
}
?>