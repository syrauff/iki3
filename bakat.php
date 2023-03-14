<?php 
require_once 'koneksi.php';
$data = mysqli_query($koneksi, 'SELECT * FROM dt_bkt');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input bakat Mahasiswa</title>
</head>
<body>
    <div class="container">
<form action="storeBakat.php" method="post">
<div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>
  </div>
  <div class="mb-3">
    <label class="form-label">Minat Bakat</label>
    <input type="text" class="form-control" id="min_bak" name="min_bak">
  </div>
  </div>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="esai"></textarea>
  <label for="floatingTextarea">Buat esai dari minat bakat anda</label>
</div>
</body>
</html>