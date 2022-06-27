<?php
 //koneksi ke database surat
 $server = "localhost";
  $user = "root";
 $pass = "";
 $dbname = "surat";

 $koneksi = mysqli_connect($server,$user,$pass,$dbname);
 if(mysqli_connect_errno()){
  echo "Koneksi database gagal".mysqli_connect_error();
 }
?>