<?php
    function cek_auth() {
        session_start();
        if (!$_SESSION) {
          header("Location: login.php");
        }
    }

    function getDataBuku($connect) {
        $sql = "SELECT * FROM buku";
        $buku = mysqli_query($connect, $sql);
        if(mysqli_num_rows($buku) == 0){
            echo '<tr><td colspan="6"><center>Data Tidak Tersedia</center></td></tr>';
        } else {
          $i = 1;
            foreach ($buku as $buku) {
                $id_buku = $buku['id_buku'];
                $sql_milik = "SELECT nama_lengkap FROM memiliki JOIN user USING(id_user) WHERE id_buku='.$id_buku.'";
                $query_nama = mysqli_query($connect, $sql_milik);
                echo "
                <tr>
                    <td>".$i++."</td>
                    <td>".$buku['judul']."</td>
                    <td>".$buku['penulis']."</td>
                    <td>".$buku['penerbit']."</td>
                    <td>".$buku['tahun']."</td>
                    <td>";
                foreach ($query_nama as $value) {
                  echo $value['nama_lengkap'].', ';
                }
                echo "</td>
                    <td>".$buku['tahun']."</td>
                </tr>
                ";
            }
        }
    }

    if (isset($_POST["add_buku"])) {
        include_once 'koneksi.php';
        addBuku($connect);
    }

    function addBuku($connect) {
      $judul = $_POST['judul'];
      $penulis = $_POST['penulis'];
      $penerbit = $_POST['penerbit'];
      $tahun = $_POST['tahun'];
      $pemilik = $_POST['pemilik'];

      $sql = "INSERT INTO buku VALUES (NULL, '$judul', '$penulis', '$penerbit', '$tahun')";
      $status = mysqli_query($connect,$sql);
      $id_buku = mysqli_insert_id($connect);

      foreach ($pemilik as $id_user) {
        $sql2 = "INSERT INTO memiliki VALUES (NULL, '$id_user', '$id_buku')";
        $status2 = mysqli_query($connect,$sql2);
      }

      if ($status && $status2) {
        echo"<script>alert('Buku telah ditambah!');window.location.href = 'dashboard.php';</script>";
      } else {
        echo"<script>alert('Buku GAGAL ditambah!');window.location.href = 'dashboard.php';</script>";
      }
    }

    if (isset($_POST["update_buku"])) {
        include_once 'koneksi.php';
        updateBuku($connect);
    }

    function updateBuku($connect) {
      $id_buku = $_POST['id_buku'];
      $judul = $_POST['judul'];
      $penulis = $_POST['penulis'];
      $penerbit = $_POST['penerbit'];
      $tahun = $_POST['tahun'];
      $pemilik = $_POST['pemilik'];

      $sql1 = "UPDATE buku SET
              judul = '$judul',
              penulis = '$penulis',
              penerbit = '$penerbit',
              tahun = '$tahun'
              WHERE id_buku ='$id_buku'";
      $query1 = mysqli_query($connect,$sql1);

      $sq2 = "DELETE FROM memiliki WHERE id_buku='$id_buku'";
      $query2 = mysqli_query($connect,$sql1);

      foreach ($pemilik as $id_user) {
        $sql3 = "INSERT INTO memiliki VALUES (NULL, '$id_user', '$id_buku')";
        $query3 = mysqli_query($connect,$sql2);
      }

      if ($query1 && $query2 && $query3) {
          echo"<script>alert('Buku berhasil di update!');window.location.href = 'dashboard.php';</script>";
      } else {
          echo"<script>alert('Buku GAGAL di update!');window.location.href = 'dashboard.php';</script>";
      }
    }

    if (isset($_GET["delete"]) && $_GET["delete"] == "buku"){
        include_once 'koneksi.php';
        deleteBuku($connect);
        echo"<script>alert('Buku telah dihapus!');window.location.href = 'dashboard.php';</script>";
    }

    function deleteJadwal($connect){
        $id = $_GET["id"];
        $sql = "DELETE FROM buku WHERE id_buku='$id'";
        mysqli_query($connect,$sql);
    }
?>
