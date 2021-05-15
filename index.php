<?php
session_start(); // Start session nya

if(isset($_SESSION['username'])){ // Jika session username ada berarti dia sudah login
	header("location: welcome.php"); // Kita Redirect ke halaman welcome.php
}
?>

<html>
<head>
<title>Halaman Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="aset/bootstrap/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="aset/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

	<h1></h1>
	
	<div style="color: red;margin-bottom: 15px;">
		<?php
		if(isset($_COOKIE["message"])){ // Jika ada
			echo $_COOKIE["message"]; // Tampilkan pesannya
		}
		?>
	</div>
	<div class="container" align="center">
  	<div align="center" style="width:400px;margin-top:5%;">
	  <form method="post" class="well well-lg" action="login.php" style="-webkit-box-shadow: 0px 0px 30px #788788;">
	  <h3 align="center"><span class="glyphicon glyphicon-home"></span> Silahkan login terlebih dahulu... (NB : User yang disediakan Rizaldi passwordnya 12345678)</h3>
    <hr> 
	<div class="form-group" align="left">
        <label for="username"><span class="glyphicon glyphicon-user"></span> Username :</label>
        <input type="text" class="form-control" id="username" placeholder="ketikkan username anda" name="username" autocomplete="off" required>
    </div>
	<div class="form-group" align="left">
        <label for="password"><span class="glyphicon glyphicon-cog"></span> Password:</label>
        <input type="password" class="form-control" id="password" placeholder="ketikkan password anda" name="password">
    </div>
	<button type="submit" name="login" class="btn btn-block btn-success">LOGIN</button>
	</form>
	</div>
	</div>
</body>
</html>
