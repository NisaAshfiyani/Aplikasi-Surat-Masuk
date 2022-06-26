<?php
 //koneksi ke database surat
 $server = "localhost";
  $user = "root";
 $pass = "";
 $dbname = "surat";

 $koneksi = pg_connect($server,$user,$pass,$dbname);
 if(pg_connect_errno()){
  echo "Koneksi database gagal".pg_connect_error();
 }
?>