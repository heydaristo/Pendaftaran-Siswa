<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftar</title>
</head>
<body>
    <center>
        <h1>Daftar Akun Siswa</h1>
        <a href="form-daftar.php">
            <button style="margin-bottom: 15px;">Tambah Baru</button> <br></a>
        <a href="index.php">
            <button style="margin-bottom: 15px;">Pulang Ke Home</button>
        </a>
            <table border="1">
                <tr>
                    <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Username</th>
            <th>Password</th>
            <th>Role</th>
            <th>Tindakan</th>
        </tr>
        <tr>
        <td>
                
        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);
        $darr = 1;
        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$darr++."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['kelas']."</td>";
            echo "<td>".$siswa['username']."</td>";
            echo "<td>".$siswa['password']."</td>";
            echo "<td>".$siswa['role']."</td>";

            echo "<td>";
            echo "<a href='edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
            </td>
        </tr>
    </table>
    <p>Total : <?php echo mysqli_num_rows($query)?></p>
</center>
</body>
</html>