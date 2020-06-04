<?php  
session_start();


include 'koneksi.php';

if (isset($_POST["submit"])) {
	$nama= $_POST["nama"];
	$email= $_POST["email"];
	$pesan= $_POST["pesan"];

	$sql= mysqli_query($koneksi, "INSERT INTO pesan VALUES ('', '$nama', '$email', '$pesan') ");

	if ($sql) {
		echo "
		<script> 
			alert('Saran dan kritik berhasil di kirim!');
			document.location.href= '#home';
		</script>
		";
	}
}

?>

<!DOCTYPE html>
<html lang="en" id="home">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/d9982caae7.js" crossorigin="anonymous"></script>
	<title>Company Profile sekolah</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
		<div class="container">
			<a class="navbar-brand text-white" href="#"><strong>SI-AKAD SMK UFA</strong></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse  justify-content-end" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link ml-3 text-white" href="#home">BERANDA</a>
					</li>
					<li class="nav-item">
						<a class="nav-link  ml-3 text-white" href="#sejarah">TENTANG</a>
					</li>
					<li class="nav-item">
						<a class="nav-link  ml-3 text-white" href="#jurusan">JURUSAN</a>
					</li>
					<li class="nav-item">
						<a class="nav-link  ml-3 text-white" href="#dokumentasi">GALERI</a>
					</li>
					<li class="nav-item">
						<a class="nav-link  ml-3 text-white" href="#kontak">KONTAK</a>
					</li>
					</li>
					<li class="nav-item">
						<a class="nav-link  ml-3 text-white" href="keluar.php"> LOGIN</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!--jumbotron-->
	<div class="jumbotron">
		<hr class="my-4">
	</div>

	<!--card-->
	<div class="container">
		<div class="row">
			<div class="card text-center">
				<div class="card-header h3 bg-info">
					<h3 class="text-white">Visi Sekolah<h3>
				</div>
				<div class="card-body bg-light">
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Berwawasan Profesional dan Religius.</li>
					</ul>
					<br>
				</div>
			</div>
			<div id="misi">
				<div class="card text-center">
					<div class="card-header h3 bg-info">
						<h3 class="text-white">Misi Sekolah<h3>
					</div>
					<div class="card-body bg-light">
						<ul class="list-group list-group-flush">
							<li class="list-group-item">1. Melakukan kegiatan pengembangan kurikulum.</li>
							<li class="list-group-item">2. Melakukan peningkatan proses belajar mengajar di Sekolah.</li>
							<li class="list-group-item">3. Meningkatkan kompetensi lulusan untuk setiap mata pelajaran.</li>
							<a href="#" class="btn btn-info rounded-pill">Baca Selengkapnya!</a>
						</ul>
						<br>
					</div>
				</div>
			</div>
			<div class="card text-center">
				<div class="card-header h3 bg-info">
					<h3 class="text-white">Prestasi Sekolah<h3>
				</div>
				<div class="card-body bg-light">
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Juara umum dinusfest 2017/2018</li>
						<li class="list-group-item">Juara 2 web design tingkat provinsi</li>
						<li class="list-group-item">Bla bla bla</li>
						<li class="list-group-item">bla bla bla</li>
					</ul>
					<br>
					<a href="#" class="btn btn-info rounded-pill">Baca Lengkapnya!</a>
				</div>
			</div>
		</div>
	</div>

	<!--About Us-->
	<h3 class="mt-5 text-center about" id="sejarah"> TENTANG</h3>
	<hr>
	<div class="bg-light">
		<div class="container text-justify p-5">
			<div class="row">
				<div class="col-md-6">
					SMK Umar Fatah Rembang berada di bawah naungan Yayasan Pendidikan Kesejahteraan Islam Umar Fatah yang<br>
					berdiri pada tahun 2005. SMK Umar Fatah Rembang berdiri dengan kepala Sekolah Bpk. Moh. Nurrohman,S.Kom yang menjabat<br>
					hingga sekarang. Secara geografis letak SMK Umar Fatah Rembang sangat strategis karena berada di lingkungan perkampungan<br>
					Ds. Punjulharjo. Meskipun keberadaanya tedak dekat dengan jalan raya namun hal itu membuat pembelajaran lebih efektif
					karena jauh dari kebisingan lalu lintas.
				</div>
				<div class="col-md-6">
					<br>
					Awal berdiri SMK Umar Fatah Rembang hanya membuka satu program keahlian, yaitu Rekayasa Perangkat Lunak dengan jumlah<br>
					siswa pertama sebanyak 40 siswa. Dalam perjalananya selama tiga tahun, SMK Umar Fatah Rembang mampu menambah quota <br>
					siswanya menjadi 2 kelas (80 siswa). <br> Dan sejak itu, SMK Umar Fatah Rembang terus menigkatkan quota siswanya di tiap tahunnya hingga saat ini mampu menampung 9 Kelas. Tidak hanya itu, sejak tahun 2012 SMK Umar Fatah Rembang telah <br>
					menambah satu program keahlian yaitu Multimedia. dan pada tahun 2014 SMK Umar Fatah menambah lagi satu program keahlian
					yaitu Teknik Komputer dan Jaringan
					<a href="#">Baca Selengkapnya!</a>
				</div>
			</div>
		</div>
	</div>

	<!--Our Service-->
	<h3 class="mt-5 text-center service" id="jurusan">JURUSAN</h3>
	<hr>
	<div class="container">
		<div class="row text-center mt-5">
			<div class="col-md-4">
				<i class="fas fa-laptop-code h1"></i>
				<h3>Rekayasa Perangkat Lunak</h3>
				Pada Jurusan ini siswa akan di fokuskan pada pembuatan aplikasi berbasis Web, Desktop maupun mobile. Jika kalian lulus pada jurusan ini, kalian memiliki peluang untuk mendajdi Programmer, web developes, IOS developer, IT security dll yang berkaitan dengan dunia IT lainnya
			</div>
			<div class="col-md-4">
				<i class="fas fa-camera-retro h1"></i>
				<h3>Multimedia</h3>
				Pada jurusan ini kalian tidak perlu berpikir keras, yang paling utama dikelas ini adalah kreatif. Nantinya dikelas ini kalian akan di fokuskan di dunia editing.
			</div>
			<div class="col-md-4">
				<i class="fas  fa-desktop h1"></i>
				<h3>Teknik Komputer Dan Jaringan</h3>
				Pada jurusan ini kalian akan di fokuskan pada hardware. selain itu kalian akan berhubungan dengan jaringan.
			</div>
		</div>

		<div class="row text-center mt-5">
			<div class="col-md-4">
				<i class=""></i>
			</div>
			<div class="col-md-4">
				<i class="fas  fa-cog h1"></i>
				<h3>Teknik Bisnis Sepeda Motor</h3>
				KALIAN AKAN DI AJARI CARA BONGKAR PASANG MOTOR/MOBIL dll YANG BAIK DAN BENARRRR!!!!!!
			</div>
			<div class="col-md-4">
				<i class=""></i>
			</div>
		</div>
	</div>

	<!--PortFolio-->
	<h3 class="mt-5 text-center portfolio" id="dokumentasi">GALERI</h3>
	<hr>
	<div class="container">
		<div class="row text-center mt-5">
			<div class="col-md-4">
				<a href="">
					<img src="image/umum.png" class="img-thumbnail  bg-info">
				</a>
			</div>
			<div class="col-md-4">
				<a href="">
					<img src="image/depan.jpg" class="img-thumbnail  bg-info">
				</a>
			</div>
			<div class="col-md-4">
				<a href="">
					<img src="image/dinusfest.jpg" class="img-thumbnail  bg-info">
				</a>
			</div>
		</div>
		<div class="row text-center mt-5">
			<div class="col-md-4">
				<a href="">
					<img src="image/akakom.png" class="img-thumbnail  bg-info">
				</a>
			</div>
			<div class="col-md-4">
				<a href="">
					<img src="image/juara.png" class="img-thumbnail  bg-info">
				</a>
			</div>
			<div class="col-md-4">
				<a href="">
					<img src="image/tim-film.jpg" class="img-thumbnail bg-info">
				</a>
			</div>
		</div>
	</div>
	
	<!--Contact Us-->
	<h3 class="mt-5 text-center contact" id="kontak">KONTAK</h3>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-md-7 mx-auto">
				<form action="" method="post">
				<div class="form-group">
					<label><strong>Nama Lengkap</strong></label>
					<input type="text" name="nama"  class="form-control bg-light" autocomplete="off" required="">
				</div>
				<div class="form-group">
					<label><strong>Email</strong></label>
					<input type="email" name="email" class="form-control bg-light"  autocomplete="off" required="">
				</div>
				<div class="form-group">
					<label><strong>Pesan</strong></label>
					<textarea type="text" name="pesan" class="form-control bg-light" required="" autocomplete="off" rows="4"></textarea>
				</div>

				<button type="submit"  name="submit" class="btn btn-info float-right">KIRIM PESAN</button>
			</div>
			<!-- <div class="col-md-5 mt-4">
				<img src="image/arif.png" width="108%" height="%">
			</div> -->
		</div>
	</div>
	</form>

	<!--footer-->
	<footer class="mt-5 bg-dark">
		<div class="container">
			<div class="row text-white p-4 text-center" align="center">
				<div class="col-md-12 ">
					&copy; 2020 | Safitri
				</div>
			</div>
		</div>
	</footer>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>