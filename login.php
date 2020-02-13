<?php  
session_start();
include 'koneksi.php';

if (isset($_POST["login"])) {

$username= $_POST["username"];
$password= md5($_POST["password"]);

$sql= mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password' ");
$cek= mysqli_num_rows($sql);

//cek apakah user terdaftar atau belum
	if ($cek > 0 ) {
		if ($data= mysqli_fetch_assoc($sql)) {

			//jika yg login admin
			if ($data['level'] == "admin") {
				$_SESSION["username"]= $username;
				$_SESSION["level"]= "admin";
				$_SESSION['status']= "admin";
				 
				echo "<script>alert('Anda masuk sebagai admin');
   				document.location.href='data/index2.php';</script>";

			//jika user biasa
			}elseif ($data['level'] == "user") {
				$_SESSION["username"]= $username;
				$_SESSION["level"]= "user";
				$_SESSION['status']= "admin";

				echo "<script> alert('Anda masuk sebagai user biasa');
   				 document.location.href='index.php';</script>";

			} else{
				echo "
					header('location:login.php');
				";
			}
		}
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Halaman Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form action="" method="post">
				<form class="login100-form validate-form">
					<div class="login100-form-avatar">
						<img src="images/fitri.png" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
					Safitri | Pemulung kode
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username" autocomplete="off">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" type="submit" name="login">
							Login
						</button>
					</div>
					</form>

					<!-- <div class="text-center w-full">
						<a class="txt1" href="#">
							Create new account
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>