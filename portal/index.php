<?php include "conn.php"; ?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
    <title>Portal Administrasi | Universitas Paramadina</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Portal Administrasi">
    <meta name="keywords" content="Portal, Administrasi, Admin, Paramadina, Online">
    <meta name="author" content="Bagas Saputra"/>
	
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
    
</head>

<body background="img/page-background.png">
    
	<!-- Container -->
	<div class="container">
		<form class="form-signin" action="proseslogin.php" method="post">
			<center><h2 class="form-signin-heading"><img src='img/logo-upm.png'></img>Portal Administrasi</h2></center>
			<div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			<input type="text" id="username" name="username" class="form-control" placeholder="Username" autocomplete="off" autofocus="on" required>
			</div>
			<div class="input-group" style="margin-top: 5px;">
			<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			<input type="text" id="password" name="password" class="form-control" placeholder="Password" autocomplete="off" required>
			</div>
			<br/>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>
    </div>
	
</body>
</html>