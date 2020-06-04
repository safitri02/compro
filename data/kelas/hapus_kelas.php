<?php  

$id= $_GET["id_kelas"];

$sql= mysqli_query($koneksi, "DELETE * FROM tb_kelas WHERE id_kelas= $id");

if ($sql) {
	echo "
	<script> alert('Data Berhasil Dihapus');
	document.location.href='index2.php?menu=kelas';
	</script>
	";

} else {
	echo "
	<script> alert('Data Gagal Dihapus'); 
	document.location.href='index2.php?menu=kelas';
	</script>
	";
}



?>