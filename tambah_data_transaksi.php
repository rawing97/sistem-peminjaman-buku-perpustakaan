<?php
	include_once 'koneksi.php';
	

	if (isset($_POST['submit']))
	 {
	 	$id = $_POST ['id_peminjam'];
		$tgl = $_POST ['tanggal_peminjaman'];
		$buku = $_POST ['id_buku'];
		$nim = $_POST ['nim'];
		

	$query = "INSERT INTO peminjaman
			VALUES ('','$tgl','$buku','$nim') ";	
	$result = mysqli_query ($conn,$query);
	

	
	if ($result) {
		echo "
			<script>
				alert('Data berhasil anda tambahkan');
				document.location.href = 'index.php';
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
	<h3>MENAMBAHKAN DATA PEMINJAMAN BUKU</h3>
	<form method="POST" action="">
		<table border="1" cellpadding="10" cellspacing="0">
<!-- 			<tr>
				<td>NO.Peminjaman</td>
				<td>:</td>
				<td><input type="hidden" name="id_peminjam"></td>
			</tr>
			<tr> -->
				<td>Tanggal Peminjaman</td>
				<td>:</td>
				<td><input type="date" name="tanggal_peminjaman"></td>

			</tr>
			
			<tr>
				<td>No Member</td>
				<td>:</td>
				<td>
					<select name="nim">
						<?php $resulti = mysqli_query($conn,"SELECT * FROM mahasiswa");?>
						<?php while ($row = mysqli_fetch_assoc($resulti)):?> 
						<option><?php echo $row['nim'];?> - <?php echo $row['nama'];?></option>
						<?php endwhile; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Nama Buku</td>
				<td>:</td>
				<td>
					<select name="id_buku">
						<?php $resulti = mysqli_query($conn,"SELECT * FROM buku");?>
						<?php while ($row = mysqli_fetch_assoc($resulti)):?> 
						<option><?php echo $row['id_buku'];?> - <?php echo $row['judul_buku'];?></option>
						<?php endwhile; ?>
					</select>
				</td>
			</tr>
				
			
		</table><br>
		<button type="submit" name="submit">TAMBAHKAN DATA PEMINJAM</button>	
	</form>
</body>
</html>