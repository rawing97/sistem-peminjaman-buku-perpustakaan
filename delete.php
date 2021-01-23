<!-- delete untuk data mahasiswa -->
<?php
	 
	 include 'koneksi.php';

	 $nim = $_GET['nim'];
	 $query = "DELETE FROM mahasiswa WHERE nim = $nim";
	 $result = mysqli_query ($conn,$query);
	
	if ($result) {
		echo "
			<script>
				alert('Data berhasil anda hapus');
				document.location.href = 'datasiswa.php';
			</script>
		";
		}else{
			echo "data gagal di hapus";
		}


  

 	
 ?>