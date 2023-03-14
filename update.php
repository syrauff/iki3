<?php

include_once 'koneksi.php';

var_dump($_POST);
$nama = $_POST['Nama'];
$nim = $_POST['NIM'];
mysqli_query($koneksi, "UPDATE INTO dt_mhsw (Nama, NIM) VALUES ('$nama', '$nim')");

header('Location: mahasiswa.php')
?>