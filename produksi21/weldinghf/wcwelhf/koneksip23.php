<?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'db_produksi23';
  $conn = mysqli_connect($host, $user, $pass, $db);
  if($conn){
    //echo "koneksi berhasil";
  }

  mysqli_select_db($conn,$db);
?>