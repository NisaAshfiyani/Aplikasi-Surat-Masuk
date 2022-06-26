<?php
 //koneksi ke database surat
 $server = "host=tiny.db.elephantsql.com port=5432";
  $user = "mgxmwkey";
 $pass = "u0BT3wGIRQ1idfXBIa-79rTkfmdycJYJ";
 $dbname = "mgxmwkey";

 $koneksi = pg_connect($server,$user,$pass,$dbname);
 if(pg_connect_errno()){
  echo "Koneksi database gagal".pg_connect_error();
 }
?>
