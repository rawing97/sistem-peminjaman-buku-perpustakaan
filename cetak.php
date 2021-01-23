<?php 
	include_once 'koneksi.php';
	$id = $_GET['id_peminjaman'];
	$query = "SELECT * FROM peminjaman 
				join buku on buku.id_buku = peminjaman.id_buku
				join mahasiswa on mahasiswa.nim = peminjaman.nim
				WHERE id_peminjaman = '$id'";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Bukti Transaksi</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<script >
		window.print();
	</script>
</head>
<body>
	<h3 style="text-align: center;">BUKTI TRANSAKSI PEMINJAMAN BUKU PERPUSTAKAAN</h3><br>

 	
 	<table class="table">
 		<tr >
 			<td >Tanggal Peminjaman</td>
 			<td>:</td>
 			<td>
 				<?php echo $row['tanggal_peminjaman'];?>
 			</td>
 		</tr>
 		<tr>
 			<td>No Member</td>
 			<td>:</td>
 			<td><?php echo $row['nim'];?></td>
 		</tr>
 		<tr>
 			<td>Nama</td>
 			<td>:</td>
 			<td><?php echo $row['nama'];?></td>
 		</tr>
 		<tr>
 			<td>Fakultas</td>
 			<td>:</td>
 			<td><?php echo $row['fakultas'];?></td>
 		</tr>
 		<tr>
 			<td>Kelas</td>
 			<td>:</td>
 			<td><?php echo $row['kelas'];?></td>
 		</tr>
 		<tr>
 			<td>Judul Buku</td>
 			<td>:</td>
 			<td><?php echo $row['judul_buku'];?></td>
 		</tr>
 		<tr>
 			<td>Nama Penulis</td>
 			<td>:</td>
 			<td><?php echo $row['penulis'];?></td>
 		</tr>
 		<tr>
 			<td>Nama Penerbit</td>
 			<td>:</td>
 			<td><?php echo $row['penerbit'];?></td>
 		</tr>
 	</table>
 	
</body>
</html>