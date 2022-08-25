<?php

include("config.php");
if(isset($_POST['Kirim'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "UPDATE calon_siswa SET nama='$nama', kelas='$kelas', username='$username', password='$password', role='$role' WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: tabel.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>