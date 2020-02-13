<?php  

$id= $_GET["id_guru"];

$sql= mysqli_query($koneksi, "DELETE FROM tb_guru WHERE id_guru= $id ");

if ($sql) {
		echo "
			<script> 
				alert('Data Berhasil Di Hapus');
				document.location.href='index2.php?menu=guru';
			</script>
		";
	} else{
		echo "
			<script> 
				alert('Data Gagal Dihapus');
				document.location.href='index2.php?menu=guru';
			</script>
		";
	}

?>