<?php
  //Konfigurasi Database
  $host = "localhost";
  $user = "root";
  $password = "";
  $database = "tp_buku";
  $connect = mysqli_connect($host, $user, $password, $database);

  if (mysqli_connect_errno()){
    die("Gagal Terhubung. ".mysqli_connect_error());
  } else {
    // echo "Koneksi Berhasil";
  }
?>
