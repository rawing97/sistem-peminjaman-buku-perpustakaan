<?php
	include_once 'koneksi.php';

	if (isset($_POST['submit']))
	 {
		$nim = $_POST ['nim'];
		$nama = $_POST ['nama'];
		$fakultas = $_POST ['fakultas'];
		$jenis_kelamin = $_POST ['jenis_kelamin'];
		$kelas = $_POST ['kelas'];

	$query = "INSERT INTO mahasiswa
			VALUES ('$nim','$nama','$fakultas','$jenis_kelamin','$kelas') ";



	$result = mysqli_query ($conn,$query);

	
	if ($result) {
		echo "
			<script>
				alert('Data berhasil anda tambahkan');
				document.location.href = 'datasiswa.php';
			</script>
		";
	}else{
		echo "data gagal di input";
		}


	}
?><!DOCTYPE html>
<html>
<head>
	<title>form tyambah data</title>
</head>
<body>
	<h3>MENAMBAHKAN DATA MAHASISWA PEMINJAM BUKU</h3>
	<form method="POST" action="">
		<table>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="hidden" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>

			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select name="fakultas" type="text" style="width: 178px;">
						<option>Teknik Informatika</option>
						<option>Teknik Industri</option>
						<option>Teknik Lingkungan</option>
						<option>Management</option>
						<option>Akutansi</option>
						<option>PGSD</option>
						<option>Arsitektur</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<select name="jenis_kelamin" type="text" style="width: 178px;">
						<option>Laki-laki</option>
						<option>Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input type="text" name="kelas"></td>
			</tr>
		</table>
		<button type="submit" name="submit">TAMBAHKAN DATA PEMINJAM</button>
	</form>
</body>
</html>