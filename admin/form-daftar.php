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
    <h2>Formulir Pendaftaran Siswa Baru <b>(Admin)</b></h2>
    <form action="proses-pendaftaran.php" method="POST">
    <fieldset>
    <label for="nama">Nama: </label>
    <input type="text" name="nama"> <br>
    <label for="Kelas">Kelas: </label>     
    <input type="text" name="kelas"> <br>
    <label for="kelamin">username :</label>
    <input type="text" name="username"> <br>
    <label for="kelamin">password:</label>
    <input type="text" name="password"> <br>
    <label for="kelamin">role:</label>
    <select name="role">
        <option >siswa</option>
        <option >admin</option>
    </select>
    <input type="submit" value="Kirim" name="Kirim"> <br>
</fieldset>
</center>
</form>
</body>
</html>