<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- style sheet -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css
" rel="stylesheet" integrity="sha384-
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLAS
jC" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/5a53d05429.js" crossorigin="anonymous"></script>
</head>
<body>
<section class="seksyen5" id="Borang Tempahan">
  <div class="container-fluid">
    <h2>Hubungi Kami</h2>
            <br>
   <form action= "proses/proses.tudungjerr.php" method="POST" class="row g-3">
   <div class="col-md-6">
    <label for="inputNama" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" id="inputNama">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputAlamat" class="form-label">Alamat</label>
    <input type="alamat" class="form-control" name="alamat" id="inputalamat">
  </div>
 
    </div>
  </div>
  <div class="col-12">
    <button type="submit" name ="sent" class="btn btn-primary">Sent</button>
 
  </div>
</form>
  </div>
</section>
    
</body>
</html>