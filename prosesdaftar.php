<?php
  require_once('koneksi.php');
  $username = $_POST['username'];
  $pass = $_POST['password'];
  $sql = "SELECT*FROM login WHERE username = '$username'";
  $query = $db->query($sql);
  if ($query->num_rows !=0) {
    echo "<div align='center'>Username sudah terdaftar! <a href='daftar.php'>Back</a></div>";
  } else {
    if (!$username || !$pass) {
      echo "<div align='center'>Masih ada data yg kosong! <a href='daftar.php'>Back</a></div>";
    } else {
      $data = "INSERT into login VALUES (NULL, '$username', '$pass')";
      $simpan = $db->query($data);
      if ($simpan) {
        header ('location: login.php');
      }else {
        echo "<div align='center'>Proses Gagal!</div>";
      }
    }
  }
?>
