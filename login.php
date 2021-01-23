<?php
session_start();
include_once 'koneksi.php';
// require 'function.php';
if (isset($_POST["login"])) {
	
	$username = $_POST["nama"];
	$password = $_POST["password"];


	$query = "SELECT * FROM admin WHERE nama = '$username' ";
	$resulti = mysqli_query ($conn, $query);


	// cek username
	if (mysqli_num_rows($resulti) === 1) {

		
		// cek password
	$row = mysqli_fetch_assoc($resulti);
		if (password_verify($password,$row["password"])){

		// set session
		$_SESSION["login"]=true ;


			echo "<script>
					document.location.href = 'index.php';
					</script>"	;
		}

	}
$error = true;
}


?>







<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Halaman Login</h1>
	<?php if (isset($error)) :	 ?>
		 <p style="color : red ; font-style: italic; background-color: white; text-align: center;">username / password yang anda masukan tidak sesuai</p>

<?php endif ; ?>

	<div class="formlogin">
	<form action="" method="post">
		<table border="1px;" cellpadding="10" cellspacing="0">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" required></td>	
			</tr>
		</table>
		<button type="submit" name="login">Login</button>

	</form>
	<button ><a href="registrasi.php">Registrasi</a></button>
	</div>
</body>
</html>