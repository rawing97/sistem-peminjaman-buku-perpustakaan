<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'db_perpus';

	$conn = mysqli_connect($host,$user,$pass,$db);

function registrasi($data){
	global $conn;
	$id = $data['id_admin'];
 	$username = $data ["nama"];
 	$password = $data["password"];
 	$password2 = $data["password2"];
 	$no = $data['no_hp'];

// konfirmasi password
 	if ($password !== $password2) {
 		echo "<script>
 				alert('Konfirmasi tdk berhasil');
 			  </script>";
 		 return false;
 	}
// enskripsi password
 	$password = password_hash($password, PASSWORD_DEFAULT);
 // tamah user baru ke dtabase
 	
 	mysqli_query($conn,"INSERT INTO admin VALUES('', '$username','$password','$no') ");

 	return mysqli_affected_rows ($conn);
 }


?>