<?php
  include_once 'koneksi.php';
  $sql = 'SELECT * FROM mahasiswa';
  $result = mysqli_query($conn,$sql);



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
      <li ><a href="index.php">Dashboard</a></li>
      <li class="active"><a href="datasiswa.php">Data Siswa</a></li>
      <li><a href="databuku.php">Data Buku</a></li>
      <li><a href="logout.php">Log Out</a></li>

      
    </ul>
  </div>
  <div class="container ">
    <nav>
      <h3>DATA MAHASISWA</h3>
    </nav>
    <h3><a href="tambah_data.php">Tambah data</a></h3>
    
    <table border="1" cellpadding="10" cellspacing="0">
      <tr >
        <th>No.</th>
        <th>No Member</th>
        <th>Nama</th>
        <th>Fakultas</th>
        <th>Jenis kelamin</th>
        <th>Kelas</th>
        <th>Aksi</th>
      </tr>
  <?php $no = 1; ?>
  <?php while ($row = mysqli_fetch_assoc($result)):?> 
      <tr style="border: 1px solid;">
        <td><?php echo $no ?> </td>
        <td><?php echo $row['nim'];?> </td>
        <td><?php echo $row['nama'];?> </td>
        <td><?php echo $row['fakultas'];?> </td>
        <td><?php echo $row['jenis_kelamin'];?> </td>
        <td><?php echo $row['kelas'];?> </td>
        <td>
          <a href="update.php?nim=<?php echo $row['nim'];?>" onclick="return confirm('Lanjut mengedit data <?php echo $row['nama'];?>')">Update</a> / 
          
          <a href="delete.php?nim=<?php echo $row['nim'];?>" onclick="return confirm('Apakah anda ingin menghapus data atas Nama : <?php echo $row['nama'];?> dengan NIM = <?php echo $row['nim'];?>...? ');">Delete</a>
        </td>
      </tr>
    <?php $no++ ?>
    <?php endwhile; ?>
  </table>

</div>

</body>
</html>