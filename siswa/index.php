<!DOCTYPE html>
<html>
<head>
	<title>Page Siswa</title>
</head>
<body>
	<center>
		<?php 
	session_start();
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['role']==""){
		header("location:index.php?pesan=gagal");
	}
	
	?>
	<h1>Halaman Siswa</h1>
	
	<p style="font-size: 20px;">Halo <b><?php echo $_SESSION['username']; ?></b> anda telah login sebagai <b><?php echo $_SESSION['role']; ?></b>.</p>
	<h3>Menu Siswa</h3>
	<p>Harap isi beberapa form ini :</p>
	<a href="form-daftar.php"><button>Daftar</button></a> 
	<a href="tabel.php"><button>Lihat Pendaftar</button></a> <br>
	<a href="../admin/logout.php">LOGOUT</a>
	
	<br/>
	<br/>
</center>
 </body>
</html>