<!-- delete untuk data buku -->
<?php
	 
	 include 'koneksi.php';

	 $id = $_GET['id_buku'];
	 $query = "DELETE FROM buku WHERE id_buku = $id";
	 $result = mysqli_query ($conn,$query);
	
	if ($result) {
		echo "
			<script>
				alert('Data berhasil anda hapus');
				document.location.href = 'databuku.php';
			</script>
		";
		}else{
			echo "data gagal di hapus";
		}


  

 	
 ?>