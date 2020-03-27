<?php
  $server = "localhost"; 
  $user = "root";
  $pass = "";
  $nama_db = "bshelves";
  $koneksi = mysqli_connect($server,$user,$pass,$nama_db);

  if(!$koneksi){
  	die ("Koneksi dengan database gagal: ".mysql_connect_error());
  }
?>