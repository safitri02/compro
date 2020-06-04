<?php 

include '../koneksi.php';

if (isset($_POST["simpan"])) {
		$guru= $_POST["id_guru"];
		$kelas= $_POST["kelas"];
		$wali= $_POST["wali_kelas"];
		$jml= $_POST["jumlah_murid"];
		$kon= $_POSt["kondisi"];

		$sql= mysqli_query($koneksi, "INSERT INTO tb_kelas VALUES ('', '$guru', '$kelas', '$wali', '$jml', '$kon') ");

		if ($sql) {
			echo "
				<script> 
				alert('Data Berhasil ditambahkan');
				document.location.href='index2.php?menu=kelas'
				</script>
			";
		} else{
			echo "
				<script> 
				alert('Data Gagal ditambahkan');
				document.location.href='index2.php?menu=tambah_kelas'
				</script>
			";
		}

}



?>


<div class="container-fluid">
<!-- Page Heading -->
<div class="clearfix">
<h1 class="h3 mb-4 text-gray-800 float-left">Tambah Data Kelas</h1>
<a href="index2.php?menu=guru" class="btn btn-secondary btn-sm float-right"><i class="fas fa-reply"></i> Kembali</a>
</div>
<hr>


<div class="row">
<div class="col-md-8">
<div class="card">
	<div class="card-header">
		<span class="text-primary"><strong>Silahkan isi data di bawah ini!</strong></span>
	</div>
	<div class="card-body">
		<form action="" method="POST">

				<div class="form-group">
				<label for="id_guru"> Nama Guru </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
						<input type="text" id="id_guru" class="form-control" placeholder="Masukan Nama Guru" name="id_guru" autocomplete="off" required="required">
				</div>
	
			<div class="form-group">
				<label for="kelas">Kelas </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<input type="text" id="kelas" class="form-control" placeholder="Masukan kelas" name="kelas" autocomplete="off" required="required">
				</div>
			</div>

			<div class="form-group">
				<label for="jumlah">Jumlah Murid </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<input type="text" id="jumlah_murid" class="form-control" placeholder="Masukan Jumlah Murid" name="jumlah_murid" autocomplete="off" required="required">
				</div>

				<div class="form-group">
				<label for="kondisi">Kondisi </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<input type="text" id="kondisi" class="form-control" placeholder="Masukan NIP" name="kondisi" autocomplete="off" required="required">
				</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-sm float-right" name="simpan"><i class="fas fa-save"></i> Simpan</button>
			</div>
		
	</div>
</div></form>
</div>
</div>
</div>
        </div>
      </div>