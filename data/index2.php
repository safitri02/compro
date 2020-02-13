<?php 
session_start();

include '../koneksi.php';

if (!$_SESSION['status']) {
  header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SI AKADEMIK SEKOLAH</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
         <!--  <i class="fas fa-laugh-wink"></i> -->
        </div>
        <div class="sidebar-brand-text mx-3">SISFO AKADEMIK </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index2.php?menu=home">
          <span>DASHBOARD</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index2.php?menu=siswa">
          <span>DATA SISWA</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index2.php?menu=guru">
          <span>DATA GURU</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index2.php?menu=jurusan">
          <span>JURUSAN</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index2.php?menu=kelas">
          <span>DATA KELAS</span></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="../keluar.php">
          <span>KELUAR</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Messages -->

            <!-- Nav Item - User Information -->
              <!-- Dropdown - User Information -->
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <?php 

            if (isset($_GET["menu"])) {
              $menu= $_GET["menu"];

                switch ($menu) {
                  case 'siswa':
                  include 'siswa/siswa.php';
                  break;

                  case 'home':
                  include 'home.php';
                  break;


                  case 'tambah_siswa':
                  include 'siswa/tambah_siswa.php';
                  break;

                  case 'edit_siswa':
                  include 'siswa/edit_siswa.php';
                  break;

                  case 'hapus_siswa':
                  include 'siswa/hapus_siswa.php';
                  break;

                  case 'guru':
                  include 'guru/guru.php';
                  break;

                  case 'tambah_guru':
                  include 'guru/tambah_guru.php';
                  break;

                  case 'edit_guru':
                  include 'guru/edit_guru.php';
                  break;

                  case 'hapus_guru':
                  include 'guru/hapus_guru.php';
                  break;

                  case 'jurusan':
                  include 'jurusan/jurusan.php';
                  break;

                  case 'hapus_jurusan':
                  include 'jurusan/hapus_jurusan.php';
                  break;
                  
                  case 'edit_jurusan':
                  include 'jurusan/edit_jurusan.php';
                  break;


                default:
              
                  break;
            }
              }

            ?>

        </div>
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
       <!-- Sticky Footer -->
        <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto fixed-bottom">
            <span>Copyright © Safitri | 2020</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
