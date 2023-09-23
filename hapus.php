<?php
require 'koneksi.php';
$id=$_GET["id"];
$result = mysqli_query($conn,"DELETE FROM mahasiswa WHERE `id`='$id'");
?>