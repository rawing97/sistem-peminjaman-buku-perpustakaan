<?php 
	include_once 'koneksi.php';
	$query = "SELECT * FROM peminjaman
				join buku on buku.id_buku = peminjaman.id_buku
				join mahasiswa on mahasiswa.nim = peminjaman.nim";
	$result = mysqli_query($conn,$query);

?>




<!DOCTYPE html>
<html>
<head>
	<title>dashboard </title>
	<link rel="stylesheet" type="text/css" href="admin.css">

</head>
<body>
	
	<div class="sidebar">
		<h3>BERANDA</h3>
		<ul>
			<li class="active"><a href="index.php">Dashboard</a></li>
			<li ><a href="datasiswa.php">Data Siswa</a></li>
			<li><a href="databuku.php">Data Buku</a></li>
			<li><a href="logout.php">Log Out</a></li>

			
		</ul>
	</div>
	<div class="container ">
		<nav>
			<h3>TRANSAKSI PEMINJAMAN BUKU PERPUSTAKAAN</h3>
		</nav>
		<a href="tambah_data_transaksi.php">Tambah data</a>
		 <table border="1" cellpadding="10" cellspacing="0">
      <tr >
        <th>No.</th>
        <!-- <th>No.Peminjaman</th> -->
        <th>Tanggal Peminjaman</th>
        <th>No Member</th>
        <th>Nama</th>
        <th>Fakultas</th>
        <th>Kelas</th>      
        <th>Judul Buku</th>
        <th>Nama Penulis</th>
        <th>Nama Penerbit</th>
        <th>Aksi</th>
      </tr>
  <?php $no = 1; ?>
  <?php while ($row = mysqli_fetch_assoc($result)):?> 
      <tr style="border: 1px solid;">
        <td><?php echo $no ?> </td>
        <!-- <td><?php echo $row['id_peminjaman'];?> </td> -->
        <td><?php echo $row['tanggal_peminjaman'];?> </td>
        <td><?php echo $row['nim'];?> </td>
        <td><?php echo $row['nama'];?> </td>
        <td><?php echo $row['fakultas'];?> </td>
        <td><?php echo $row['kelas'];?> </td>
        <td><?php echo $row['judul_buku'];?> </td>
        <td><?php echo $row['penulis'];?> </td>
        <td><?php echo $row['penerbit'];?> </td>
       	<td>
          <a href="cetak.php?id_peminjaman=<?php echo $row['id_peminjaman'];?>">cetak bukti / </a>
          
          <a href="delete_transaksi.php?id_peminjaman=<?php echo $row['id_peminjaman'];?>" onclick="return confirm('Apakah anda ingin menghapus data atas Nama : <?php echo $row['nama'];?> dengan NIM = <?php echo $row['nim'];?>...? ');">Delete</a>
        </td>
      </tr>
    <?php $no++ ?>
    <?php endwhile; ?>
  </table>

		
</div>

</body>
</html>