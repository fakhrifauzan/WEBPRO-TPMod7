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
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4 text-center">Tambah Buku</h1>

      <div class="row">
        <div class="col-md-2 portfolio-item"></div>
        <div class="col-md-8 portfolio-item">
          <form action="function.php" method="post" enctype="multipart/form-data">
            <div class="row portfolio-item">
              <div class="col-md-2">
                Judul Buku
              </div>
              <div class="col-md-10">
                <input class="form-control" placeholder="Serius GituLoh" type="text" name="judul">
              </div>
            </div>
            <div class="row portfolio-item">
              <div class="col-md-2">
                Penulis
              </div>
              <div class="col-md-10">
                <input class="form-control" placeholder="Rathu Ina" type="text" name="penulis">
              </div>
            </div>
            <div class="row portfolio-item">
              <div class="col-md-2">
                Penerbit
              </div>
              <div class="col-md-10">
                <input class="form-control" placeholder="Enjoyin" type="text" name="penerbit">
              </div>
            </div>
            <div class="row portfolio-item">
              <div class="col-md-2">
                Tahun
              </div>
              <div class="col-md-10">
                <input class="form-control" placeholder="2020" type="number" maxlength="4" name="tahun">
              </div>
            </div>
            <div class="row portfolio-item">
              <div class="col-md-2">
                Pemilik
              </div>
              <div class="col-md-10">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="pemilik[]" value="1">Fulan <br>
                  <input class="form-check-input" type="checkbox" name="pemilik[]" value="2">Fulanah
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="add_buku">Tambah Buku</button>
          </form>
        </div>
        <div class="col-md-2 portfolio-item"></div>
      </div>

      <div class="row">

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
