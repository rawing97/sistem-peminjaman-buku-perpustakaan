<?php
	include_once 'koneksi.php';

	if (isset($_POST['submit']))
	 {
	 	$id = $_POST ['id_buku'];
		$judul_buku = $_POST ['judul_buku'];
		$nama_penulis = $_POST ['penulis'];
		$nama_penerbit = $_POST ['penerbit'];
		

	$query = "INSERT INTO buku
			VALUES ('$id','$judul_buku','$nama_penulis','$nama_penerbit') ";



	$result = mysqli_query ($conn,$query);

	
	if ($result) {
		echo "
			<script>
				alert('Data berhasil anda tambahkan');
				document.location.href = 'databuku.php';
			</script>
		";
	}else{
		echo "data gagal di input";
		}


	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>form tyambah data</title>
</head>
<body>
	<h3>MENAMBAHKAN DATA BUKU</h3>
	<form method="POST" action="">
		<table border="1" cellpadding="10" cellspacing="0">
			<tr>
				<td>Judul Buku</td>
				<td>:</td>
				<td><input type="text" name="judul_buku"></td>
			</tr>
			<tr>
				<td>Nama Penulis</td>
				<td>:</td>
				<td><input type="text" name="penulis"></td>

			</tr>
			<tr>
				<td>Nama Penerbit</td>
				<td>:</td>
				<td><input type="text" name="penerbit"></td>
			</tr>
			
		</table><br>
		<button type="submit" name="submit">TAMBAHKAN DATA PEMINJAM</button>
	</form>
</body>
</html>