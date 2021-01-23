  <?php
  include_once 'koneksi.php';
  $sql = 'SELECT * FROM buku';
  $result = mysqli_query($conn,$sql);



?>






 <!DOCTYPE html>
<html>
<head>
  <title>BERANDA </title>
  <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
  
  <div class="sidebar">
    <h3>BERANDA</h3>
    <ul>
      <li ><a href="index.php">Dashboard</a></li>
      <li ><a href="datasiswa.php">Data Siswa</a></li>
      <li class="active"><a href="databuku.php">Data Buku</a></li>
      <li><a href="logout.php">Log Out</a></li>

      
    </ul>
  </div>
  <div  class="container ">
    <nav>
      <h3>DATA BUKU PERPUSTAKAAN</h3>
    </nav>
    <h3><a href="tambah_data_buku.php">Tambah data</a></h3>
    
    <table border="1" cellpadding="10" cellspacing="0">
      <tr >
        <th>No.</th>
        <th>Id Buku</th>
        <th>Judul Buku</th>
        <th>Nama Penulis</th>
        <th>Nama Penerbit</th>
        <th>Aksi</th>
      </tr>
  <?php $no = 1; ?>
  <?php while ($row = mysqli_fetch_assoc($result)):?> 
      <tr style="border: 1px solid;">
        <td><?php echo $no ?> </td>
        <td><?php echo $row['id_buku'];?> </td>
        <td><?php echo $row['judul_buku'];?> </td>
        <td><?php echo $row['penulis'];?> </td>
        <td><?php echo $row['penerbit'];?> </td>
        <td>
          <a href="update_buku.php?id_buku=<?php echo $row['id_buku'];?>" onclick="return confirm('Lanjut mengedit data buku <?php echo $row['judul_buku'];?>')">Update</a> / 
          
          <a href="delete_buku.php?id_buku=<?php echo $row['id_buku'];?>" onclick="return confirm('Apakah anda ingin menghapus data BUKU : <?php echo $row['judul_buku'];?> ...? ');">Delete</a>
        </td>
      </tr>
    <?php $no++ ?>
    <?php endwhile; ?>
  </table>

    

    
</div>

</body>
</html>