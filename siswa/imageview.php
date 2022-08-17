<?php
include('../admin/config.php');
if(isset($_GET['id'])) 
{
    $query = mysqli_query($db,"select * from kandidat where id='".$_GET['id']."'");
    $row = mysqli_fetch_array($query);
    header("Content-type: " . $row["tipe_gambar"]);
    echo $row["gambar"];
    header('location:index.php?status=sukses');
}
else
{
    header('location:index.php?status=gagal');
}
?>  