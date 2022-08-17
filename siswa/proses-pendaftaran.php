<?php 
include('../admin/config.php');
if(isset($_POST['Kirim'])) {

    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $visi = $_POST['visi'];
    $misi = $_POST['misi'];
    $nama_file = $_FILES['gambar']['name'];
    $source = $_FILES['gambar']['tmp_name'];
    
    move_uploaded_file($source, '../gambar/'.$nama_file);

    $sql = "INSERT INTO kandidat VALUES (NULL, '$nama', '$kelas', '$visi', '$misi', '$nama_file')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>