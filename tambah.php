<?php
require 'koneksi.php';
if(isset($_POST['submit']))
{
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$jurusan = $_POST['jurusan'];
$fakultas = $_POST['fakultas'];

$result = mysqli_query($conn, "INSERT INTO mahasiswa (`id`, `nama`, `npm`, `jurusan`, `fakultas`)VALUES ('', '$nama', '$npm', '$jurusan', '$fakultas')");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <form action="" method="post">
        <p>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="">
        </p>
        <p>
        <label for="npm">NPM</label>
        <input type="text" name="npm" id="">
        </p>
        <p>
        <label for="jurusan">Jurusan</label>
        <input type="text" name="jurusan" id="">
        </p>
        <p>
        <label for="fakultas">Fakultas</label>
        <input type="text" name="fakultas" id="">
        </p>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>