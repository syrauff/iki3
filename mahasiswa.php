<?php 
require_once 'koneksi.php';
$data = mysqli_query($koneksi, 'SELECT * FROM dt_mhsw');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container">
          <a class="navbar-brand" href="/iki3">Universitas A</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="/iki3">Home</a>
              <a class="nav-link" href="mahasiswa.php">Mahasiswa</a>
            </div>
          </div>
        </div>
      </nav>
<div class="container">
        <div class="row">
            <div class="col">
                <h1>Data Mahasiswa</h1>
                <a href="create.php" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>
      
      <div class="row">
        
        <div class="row">
            <div class="col-md-8">
            <table class="table">
  <thead>

    <tr>
      <th scope="col">id</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
<?php
    $no = 1;
    while( $dt_mhsw = mysqli_fetch_assoc($data)) :
    ?>
    
      <td><?php echo $dt_mhsw['id']?></td>
      <td><?php echo $dt_mhsw['nama']?></td>
      <td><?php echo $dt_mhsw['nim']?></td>
      <td>
        <button class="btn btn-info">Detail</button>
        <button class="btn btn-warning">Edit</button>
        <button class="btn btn-danger">Hapus</button>
      </td>
    </tr>
    <?php endwhile;
    $no ++; ?>
  </tbody>
</table>
            </div>
        </div>
      </div>
      </div>
</body>
</html>