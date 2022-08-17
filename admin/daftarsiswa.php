<?php include("../admin/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
</head>
<body>
    <center>
    <h2>Formulir Pendaftaran Siswa Baru (Admin)</h2>
    <form method="POST" action="#" enctype="multipart/form-data">
    <fieldset>
    <label for="nama">Nama: </label>
    <input type="text" name="nama"> <br>
    <label for="nama">Kelas: </label>
    <input type="text" name="kelas"> <br>
    <label for="Kelas">Visi: </label>     
    <input type="text" name="visi"> <br>
    <label for="kelamin">Misi :</label>
    <input type="text" name="misi"> <br>
    <label for="kelamin">Foto :</label>
    <input type="file" name="gambar"> <br>
    <input type="submit" value="Kirim" name="Kirim"> <br>
</fieldset>
</center>
</form>

<?php 
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
}
?>

</body>
</html>