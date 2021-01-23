<?php
	require 'function.php';


 	if (isset($_POST["register"])) {
 		if (registrasi($_POST)>0) {
 			echo "<script>
 					alert('data user berhasil di tamahkan');
 					document.location.href = 'login.php';
 				  </script>";
 		}else{
 			echo mysqli_error ($conn);
 		}
 	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN REGISTRASI</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>REGISTRASI AKUN</h1>
	<div class="form">
	<form action="" method="post">
		<table border="1px;" cellpadding="10" cellspacing="0">
			<tr>
				<td>username</td>
				<td>:</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="Password" name="password" required></td>
			</tr>
			<tr>
				<td>Konfirmasi Password</td>
				<td>:</td>
				<td><input type="Password" name="password2" required></td>
			</tr>
			<tr>
				<td>No HP</td>
				<td>:</td>
				<td><input type="text" name="no_hp" required></td>
			</tr>
		</table>
		<button type="submit" name="register" style="margin-left: 100px; padding: 5px 50px;">Registrasi</button>
	</form>
	</div>
</body>
</html>