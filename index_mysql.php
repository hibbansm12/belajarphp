<?php
require "koneksi.php";
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

$mahasiswa = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1><a href="tambah.php">Tambah Data</a></h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>NPM</td>
            <td>Jurusan</td>
            <td>Fakultas</td>
            <th colspan="2">Aksi</th>
        </tr>
        <?php 
        $i=1;
        foreach($mahasiswa as $mhs): ?>
        <tr>
            <td><?= $i?></td>
            <td><?php echo $mhs["nama"] ?></td>
            <td><?php echo $mhs["npm"] ?></td>
            <td><?php echo $mhs["jurusan"] ?></td>
            <td><?php echo $mhs["fakultas"] ?></td>
            <td><a href="hapus.php/?id=<?=$mhs["id"]?>">Hapus</a></td>
            <td><a href="">Edit</a></td>
        </tr>
        <?php 
        $i++;
        endforeach ?>
    </table>
</body>
</html>