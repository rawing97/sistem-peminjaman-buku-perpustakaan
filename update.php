 <?php
	include_once 'koneksi.php';

	$nim = $_GET["nim"];

	$mhs=mysqli_query($conn,"SELECT * FROM mahasiswa WHERE nim = $nim ");


	if (isset($_POST['submit']))
	 {
		$nim = $_POST ['nim'];
		$nama = $_POST ['nama'];
		$fakultas = $_POST ['fakultas'];
		$jk = $_POST ['jenis_kelamin'];
		$kelas = $_POST ['kelas'];

		$query = "UPDATE mahasiswa SET  nim = $nim, nama = '$nama', fakultas= '$fakultas',jenis_kelamin='$jk', kelas = '$kelas' WHERE nim = '$nim' ";

		$result=mysqli_query($conn,$query);

		
	if ($result) {
		echo "
			<script>
				alert('Data berhasil anda ubah');
				document.location.href = 'datasiswa.php';
			</script>
		";
	}else{
		echo "data gagal di ubah";
		}

	}

	include_once 'update.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA PEMINJAM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>MENGUBAH DATA MAHASISWA </h1>
	
	<form method="POST" action=" ">

		<table border="1" ; cellspacing="0"; cellpadding="10";>
			<?php while ($row = mysqli_fetch_assoc($mhs)): ?>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td> <input type="hidden" name="nim" value="<?php echo $row['nim'];?>" ></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $row['nama'];?>"></td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td> <input type="text" name="fakultas" value="<?php echo $row['fakultas'];?>" ></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<select name="jenis_kelamin" type="text" value="<?php echo $row['jenis_kelamin'];?>" style="width: 178px;">
						<option>Laki-laki</option>
						<option>Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input type="text" name="kelas"  value="<?php echo $row['kelas'];?>"></td>
			</tr>
			<?php endwhile; ?>
		</table><br>
	<button type="submit" name="submit">EDIT DATA PEMINJAM</button>
			

	</form>

</body>
</html>  