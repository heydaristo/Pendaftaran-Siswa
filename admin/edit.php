<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: tabel.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Akun</title>
</head>
<body>
    <center>
    <h2>Form Edit <b>(Admin)</b></h2>
    <form action="proses-edit.php" method="POST">
    <fieldset>
    <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
    <label for="nama">Nama: </label>
    <input type="text" name="nama" value="<?php echo $siswa['nama'] ?>"> <br>
    <label for="Kelas" >Kelas: </label>     
    <input type="text" name="kelas" value="<?php echo $siswa['kelas'] ?>"> <br>
    <label for="username" >username :</label>
    <input type="text" name="username" value="<?php echo $siswa['username'] ?>"> <br>
    <label for="kelamin">password:</label>
    <input type="text" name="password" value="<?php echo $siswa['password'] ?>"> <br>
    <label for="kelamin">role:</label>
    <?php $role = $siswa['role']; ?>
    <select name="role">
        <option <?php echo ($role == 'siswa') ? "selected": "" ?>>siswa</option>
        <option <?php echo ($role == 'admin') ? "selected": "" ?>>admin</option>
    </select>
    <input type="submit" value="Kirim" name="Kirim"> <br>
</fieldset>
</center>
</form>
</body>
</html>