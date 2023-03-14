<?php

include_once 'koneksi.php';

var_dump($_POST);
$id = $_POST['id'];
$nama = $_POST['Nama'];
$nim = $_POST['NIM'];
mysqli_query($koneksi, "INSERT INTO dt_mhsw (id, Nama, NIM) VALUES ('$id', '$nama', '$nim')");

header('Location: mahasiswa.php')
?>
