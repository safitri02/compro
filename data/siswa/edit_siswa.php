<?php  

include '../koneksi.php';

$id= $_GET["id_siswa"];

$d= mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE id_siswa= $id ");
$edit= mysqli_fetch_assoc($d);

if (isset($_POST["simpan"])) {
	$nisn= $_POST["nisn"];
	$nama= $_POST["nama"];
	$alamat= $_POST["alamat"];
	$jurusan= $_POST["id_jurusan"];

	$sql= mysqli_query($koneksi, "UPDATE tb_siswa SET 
		nisn='$nisn', nama='$nama', alamat='$alamat', id_jurusan='$jurusan'
		WHERE id_siswa=$id ");
	
	if ($sql) {
		echo "
			<script> 
				alert('Data Berhasil Diedit');
				document.location.href='index2.php?menu=siswa';
			</script>
		";
	} else{
		echo "
			<script> 
				alert('Data Gagal Diedit');
				document.location.href='index2.php?menu=edit_siswa';
			</script>
		";
	}
}

?>


<div class="container-fluid">
<!-- Page Heading -->
<div class="clearfix">
<h1 class="h3 mb-4 text-gray-800 float-left">Tambah Data Siswa</h1>
<a href="index.php?menu=siswa" class="btn btn-secondary btn-sm float-right"><i class="fas fa-reply"></i> Kembali</a>
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
				<label for="nisn">Nisn </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<input type="text" id="nisn" class="form-control" placeholder="Masukan Nisn Siswa" name="nisn" autocomplete="off" required="required" value="<?= $edit["nisn"]; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="nama">Nama Siswa </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
						<input type="text" id="nama" class="form-control" placeholder="Masukan Nama Lengkap" name="nama" autocomplete="off" required="required" value="<?= $edit["nama"]; ?>">
				</div>

			<div class="form-group">
				<label for="alamat">Alamat </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<input type="text" id="ruangan" class="form-control" placeholder="Masukan Alamat" name="alamat" autocomplete="off" required="required" value="<?= $edit["alamat"]; ?>">
				</div>
			</div>

<div class="form-group">
			<label for="id_jurusan">Jurusan</label>
			<?php $data= mysqli_query($koneksi, "SELECT * FROM tb_jurusan") ?>
			<select class="custom-select form-control" name="id_jurusan" autocomplete="off" required >
				<?php while ($d= mysqli_fetch_assoc($data)) : ?>
				<option value="<?php echo $d['id_jurusan']; ?>"><?php echo $d['jurusan']; ?></option>
			<?php endwhile; ?>
			</select> 
          </div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-sm float-right" name="simpan"><i class="fas fa-save"></i> Simpan</button>
			</div>
		</form>
	</div>
</div>
</div>
</div>
</div>