<?php

include_once 'koneksi.php';

var_dump($_POST);
$nama = $_POST['nama'];
$min_bak = $_POST['min_bak'];
$esai = $_POST['esai'];
mysqli_query($koneksi, "INSERT INTO dt_bkt (nama, min_bak, esai) VALUES ('$nama', '$min_bak', '$esai')");

header('Location: index.php')
?>