<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
    <center>
    <h1>Website Admin</h1>
    <!-- label -->
	<?php 
	session_start();
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['role']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<p style="font-size: 20px;">Halo <b><?php echo $_SESSION['username']; ?></b> anda telah login sebagai <b><?php echo $_SESSION['role']; ?></b>.</p>

    <!-- akhir label -->
        <h2>Pendaftaran Siswa</h2> 
        <p style="font-size: 25px;">Menu</p>
        
            <a href="form-daftar.php"><button>Daftar Akun Baru</button></a>
            <a href="tabel.php"><button>Data Akun</button></a> <br>
            <a href="daftarsiswa.php"><button>Daftar Siswa</button></a>
            <a href="tabelsiswa.php"><button>Data Siswa</button></a>
            <?php if(isset($_GET['status'])): ?>
        <h3>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } elseif ($_GET['status'] == 'berhasil'){
                echo "Pendaftaran akun baru berhasil!";
            }
            else {
                echo "Pendaftaran gagal!";
            }
        ?>
     </h3>
<?php endif; ?> <br />
<div class="jarak" style="margin-top: 2cm;"></div>
<a href="logout.php">LOGOUT</a>
</div>
    </center>
</body>
</html>