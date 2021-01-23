<?php
	 
	 include 'koneksi.php';

	 $id = $_GET['id_peminjaman'];
	 $query = "DELETE FROM peminjaman WHERE id_peminjaman = $id";
	 $result = mysqli_query ($conn,$query);
	
	if ($result) {
		echo "
			<script>
				alert('Data berhasil anda hapus');
				document.location.href = 'index.php';
			</script>
		";
		}else{
			echo "data gagal di hapus";
		}


  

 	
 ?>