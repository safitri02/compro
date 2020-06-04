<?php  
include '../koneksi.php';

$sql= mysqli_query($koneksi, "SELECT * FROM tb_kelas");

?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title> </title>
<link href="../_template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="../_template/css/sb-admin-2.min.css" rel="stylesheet">
<link href="../_template/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body id="page-top">
<div id="wrapper">
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
<!-- Main Content -->
<div id="content">
		<!-- Topbar Navbar -->
	</nav>
	<!-- End of Topbar -->
	<!-- Begin Page Content -->
	<div class="container-fluid">
		<!-- Page Heading -->
		<div class="clearfix">
			<h1 class="h3 mb-4 text-gray-800 float-left">Data Kelas</h1>
			<a href="index2.php?menu=tambah_kelas" class="btn btn-primary btn-sm float-right"><i class="fas fa-plus"> </i> Tambah Data</a>
		</div>
		<div class="card">
			<div class="card-header"> Data Kelas</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th> No </th>
								<th> Kelas </th>
								<th> Wali Kelas </th>
								<th> Jumlah Murid </th>
								<th> Kondisi</th>
								<th> Aksi </th>
							</tr>
						</thead>
						<?php 

							while ($data= mysqli_fetch_assoc($sql)) : ?>
						<tbody>
								<tr>
									<td> <?= $no++; ?> </td>
									<td> <?= $data["kelas"]; ?> </td>
									<td> <?= $data["wali_kelas"]; ?> </td>
									<td> <?= $data["jumlah_murid"];  ?> </td>
									<td> <?= $data["kondisi"];  ?> </td>
									<td>
										<a href="index2.php?menu=edit_kelas&id_kelas= <?= $data["id_kelas"]; ?>" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Ubah</a>
										<a href="index2.php?menu=hapus_guru&id_guru= <?= $data["id_kelas"]; ?>" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')"><i class="fas fa-trash-alt"></i>&nbsp;&nbsp;Hapus</a>
									</td>
								</tr>
						</tbody>
				<?php endwhile; ?>
					</table>
				</div>
			</div>
		</div>
	</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->

</div>

<!-- End of Page Wrapper -->
<script src="../_template/vendor/jquery/jquery.min.js"></script>
<script src="../_template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../_template/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="../_template/js/sb-admin-2.min.js"></script>
<script src="../_template/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../_template/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../_template/js/demo/datatables-demo.js"></script>
</body>

</html>
