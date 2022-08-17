<?php
include("config.php");

if(isset($_GET['id']) ) {
    $id = $_GET['id'];

    $sql = "DELETE FROM kandidat WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header ('Location: tabelsiswa.php');
    } else {
        die("Gagal Menghapus...");
    }
} else {
    die("Akses Dilarang...");
}