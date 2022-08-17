<?php
include("config.php");

if(isset($_GET['id']) ) {
    $id = $_GET['id'];

    $sql = "DELETE FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header ('Location: tabel.php');
    } else {
        die("Gagal Menghapus...");
    }
} else {
    die("Akses Dilarang...");
}