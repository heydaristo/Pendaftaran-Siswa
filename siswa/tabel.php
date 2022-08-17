<?php include("../admin/config.php");?>
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
        <h1>Daftar Siswa</h1>
        <a href="form-daftar.php">
            <button style="margin-bottom: 15px;">Tambah Baru</button> <br></a>
            <table border="1">
                <tr>
                    <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Visi</th>
            <th>Misi</th>
            <th>Gambar</th>
        </tr>
        <tr>
        <td>
        <?php 

            $query = mysqli_query($db,"SELECT * FROM kandidat");
            $heydar = 1;
            while($row = mysqli_fetch_array($query))
            {
                ?>
                <tr>
                    <td><?php echo $heydar++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['kelas']; ?></td>
                    <td><?php echo $row['visi']; ?></td>
                    <td><?php echo $row['misi']; ?></td>
                    <td><img src="../gambar/<?php echo $row['file'] ?>" width="100px" height="100px"></td>
                </tr>
                <?php
            }
            ?>
            </td>
        </tr>
    </table>
    <p>Total : <?php echo mysqli_num_rows($query)?></p>
</center>
</body>
</html>