<?php  
include '../koneksi.php';

$id= $_GET["id_siswa"];

$sql= mysqli_query($koneksi, "DELETE FROM tb_siswa WHERE id_siswa = $id");


	if ($sql) {
		echo "
			<script> 
				alert('Data Berhasil Hapus');
				document.location.href='index2.php?menu=siswa';
			</script>
		";
	} else{
		echo "
			<script> 
				alert('Data Gagal Dihapus');
				document.location.href='index2.php?menu=siswa';
			</script>
		";
	}

?>