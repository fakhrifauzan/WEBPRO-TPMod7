<?php
  include_once 'koneksi.php';
  include_once 'function.php';
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TP Modul 7 - [NIM]</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">TP Modul 7 - [NIM]</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">Dashboard</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4 text-center">Dashboard</h1>

      <div class="row">
        <div class="col-md-2 portfolio-item"></div>
        <div class="col-md-8 portfolio-item">
          <a href="insert.php" class="btn btn-primary btn-block" role="button">Tambah Buku</a>
        </div>
        <div class="col-md-2 portfolio-item"></div>
      </div>
      <div class="row">
        <div class="col-md-2 portfolio-item"></div>
        <div class="col-md-8 portfolio-item">
          <h2>Data Buku</h2>
          <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Judul</th>
              <th scope="col">Penulis</th>
              <th scope="col">Penerbit</th>
              <th scope="col">Tahun</th>
              <th scope="col">Pemilik</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php getDataBuku($connect); ?>
          </tbody>
        </table>
        </div>
        <div class="col-md-2 portfolio-item"></div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
