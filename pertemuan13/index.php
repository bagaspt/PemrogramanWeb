<html>
<head>
    <title>Tutorial Cara Membuat Login Dengan PHP MySQLi</title>
</head>
<body>
    <h3>Form Login - Tutorial Login dengan PHP MySQLi</h3>
    <!-- notifikasi -->
    <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo "Login gagal! username dan password salah";
            }
            else if ($_GET['pesan'] == "logout") {
                echo "Anda Telah berhasil Logout";
            }
            else if ($_GET['pesan'] == "belum_login") {
                echo "Anda harus logi untuk mengakses halaman admin";
            }
        }
	?>
	<br/>
	<form method ="POST" action="login.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="LOGIN"></td>
        </table>
    </form>
</body>
</html>