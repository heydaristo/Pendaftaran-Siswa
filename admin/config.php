<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "pendaftaran_siswa";

$db = mysqli_connect(
    $server,
    $username,
    $password,
    $database
);

if (!$db) {
    die("Gagal Terhubung Ke Database" . mysqli_connect_error());
}
?>