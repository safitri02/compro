<?php  

include '../koneksi.php';

if (isset($_POST["simpan"])) {
	$kode= $_POST["kode_guru"];
	$nama= $_POST["nama"];
	$nip= $_POST["nip"];
	$alamat= $_POST["alamat"];

	$sql= mysqli_query($koneksi, "INSERT INTO tb_guru VALUES ('', '$kode', '$nama', '$nip', '$alamat') ");

		if ($sql) {
		echo "
			<script> 
				alert('Data Berhasil Ditambah');
				document.location.href='index2.php?menu=guru';
			</script>
		";
	} else{
		echo "
			<script> 
				alert('Data Gagal Ditambah');
				document.location.href='index2.php?menu=tambah_guru';
			</script>
		";
	}
	
}

?>


<div class="container-fluid">
<!-- Page Heading -->
<div class="clearfix">
<h1 class="h3 mb-4 text-gray-800 float-left">Tambah Data Guru</h1>
<a href="index2.php?menu=guru" class="btn btn-secondary btn-sm float-right"><i class="fas fa-reply"></i> Kembali</a>
</div>
<hr>

<?php 
  $query= "SELECT max(kode_guru) as maxKode FROM tb_guru";
  $hasil= mysqli_query($koneksi, $query);
  $data= mysqli_fetch_array($hasil);
  $kode_kat= $data['maxKode'];
  $nourut= (int) substr($kode_kat, 5,5);
  $nourut++;
  $char= "KG";
  $kode= $char.sprintf("%04s", $nourut);
  ?>

<div class="row">
<div class="col-md-8">
<div class="card">
	<div class="card-header">
		<span class="text-primary"><strong>Silahkan isi data di bawah ini!</strong></span>
	</div>
	<div class="card-body">
		<form action="" method="POST">
			<div class="form-group">
				<label for="kode_guru">Kode Guru </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<input type="text" id="kode_guru" class="form-control" readonly name="kode_guru" autocomplete="off" required="required" value="<?php echo $kode ?>">
				</div>

				<div class="form-group">
				<label for="nama">Nama Guru </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
						<input type="text" id="nama" class="form-control" placeholder="Masukan Nama Lengkap" name="nama" autocomplete="off" required="required">
				</div>


			<div class="form-group">
				<label for="nisn">NIP </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<input type="text" id="nip" class="form-control" placeholder="Masukan NIP" name="nip" autocomplete="off" required="required">
				</div>
			</div>
	
			<div class="form-group">
				<label for="alamat">Alamat </label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"></div>
					</div>
					<input type="text" id="ruangan" class="form-control" placeholder="Masukan Alamat" name="alamat" autocomplete="off" required="required">
				</div>
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