<?php

include("config.php");
if(isset($_POST['Kirim'])){

    $nama = $_POST['nama'];
    $alamat = $_POST['kelas'];
    $jk = $_POST['username'];
    $agama = $_POST['password'];
    $sekolah = $_POST['role'];

    $sql = "INSERT INTO calon_siswa (nama, kelas, username, password, role) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=berhasil');
    } else {
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>