<?php  
include '../koneksi.php';

$id= $_GET["id_jurusan"];

$sql= mysqli_query($koneksi, "DELETE FROM tb_jurusan WHERE id_jurusan= $id ");

if ($sql) {
		echo "
			<script> 
				alert('Data Berhasil Di Hapus');
				document.location.href='index2.php?menu=jurusan';
			</script>
		";
	} else{
		echo "
			<script> 
				alert('Data Gagal Dihapus');
				document.location.href='index2.php?menu=jurusan';
			</script>
		";
	}

?>