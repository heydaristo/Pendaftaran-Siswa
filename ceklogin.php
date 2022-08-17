<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include('admin/config.php');
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($db,"select * from calon_siswa where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
$ceklogin = mysqli_fetch_assoc($data);
if($ceklogin['role']=="admin"){
 
	// buat session login dan username
	$_SESSION['username'] = $username;
	$_SESSION['role'] = "admin";
	// alihkan ke halaman dashboard admin
	header("location:admin/index.php");
}
	// cek jika user login sebagai pegawai
	else if($ceklogin['role']=="siswa"){
	// buat session login dan username
	$_SESSION['username'] = $username;
	$_SESSION['role'] = "siswa";
	header("location:siswa/index.php");
	}

 else{
	header("location:index.php?pesan=gagal");
}
?>