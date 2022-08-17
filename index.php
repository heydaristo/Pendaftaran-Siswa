<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<center>
		<div class="container">
		<h2>SMKN 1 SAYUNG <br> PENDAFTARAN SISWA</h2>
		<img src="logo1.png" alt="logo">
	<br/>
	<br/>
	<form method="POST" action="ceklogin.php">
		<div class="form">
			<label> Username : </label>
			<input class="input" type="text" name="username" placeholder="Masukkan username"> <br>
			<label> Password : </label>
			<input class="input" type="password" name="password" placeholder="Masukkan password"> <br>
		<input type="submit" value="LOGIN">
	</div>
	</form>
			<!-- cek pesan notifikasi -->
			<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<!-- Selesai Cek notifikasi -->
	</div>
</center>
</body>
</html>