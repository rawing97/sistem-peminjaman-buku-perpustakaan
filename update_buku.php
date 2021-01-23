<?php
	include_once 'koneksi.php';

	$id = $_GET["id_buku"];

	$buku=mysqli_query($conn,"SELECT * FROM buku WHERE id_buku = $id ");


	if (isset($_POST['submit']))
	 {
		$id = $_POST ['id_buku'];
		$judul_buku = $_POST ['judul_buku'];
		$penulis = $_POST ['penulis'];
		$penerbit = $_POST ['penerbit'];
		

		$query = "UPDATE buku SET  id_buku = '$id', judul_buku = '$judul_buku', penulis= '$penulis',penerbit='$penerbit' WHERE id_buku = '$id' ";

		$result=mysqli_query($conn,$query);

		
	if ($result) {
		echo "
			<script>
				alert('Data berhasil anda ubah');
				document.location.href = 'databuku.php';
			</script>
		";
	}else{
		echo "data gagal di ubah";
		}

	}

	include_once 'update_buku.php';

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
		<?php while ($row = mysqli_fetch_assoc($buku)): ?>
			<tr>
				<td>Id Buku</td>
				<td>:</td>
				<td><input type="hidden" name="id_buku" value="<?php echo $row['id_buku'];?>"></td>
			</tr>
			<tr>
				<td>Judul Buku</td>
				<td>:</td>
				<td><input type="text" name="judul_buku" value="<?php echo $row['judul_buku'];?>"></td>
			</tr>
			<tr>
				<td>Nama Penulis</td>
				<td>:</td>
				<td><input type="text" name="penulis" value="<?php echo $row['penulis'];?>"></td>

			</tr>
			<tr>
				<td>Nama Penerbit</td>
				<td>:</td>
				<td><input type="text" name="penerbit" value="<?php echo $row['penerbit'];?>"></td>
			</tr>
			<?php endwhile; ?>
		</table><br>
		<button type="submit" name="submit">EDIT DATA BUKU</button>
	</form>
</body>
</html>