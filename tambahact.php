<?php
include 'koneksi.php';

$judul_buku = $_POST['judul_buku'];
$nama_penerbit = $_POST['nama_penerbit'];
$nama_penulis = $_POST['nama_penulis'];
$deskripsi = $_POST['deskripsi'];
$kategori = $_POST['kategori'];
$gambar_buku = $_FILES['gambar_buku']['name'];

if($gambar_buku != "") {
  $ekstensi_diperbolehkan = array('png','jpg','jpeg'); 
  $x = explode('.', $gambar_buku);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_buku']['tmp_name'];   
  $angka_acak = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_buku;
  
  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
    move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);

  $query = "INSERT INTO buku (judul_buku, nama_penerbit, nama_penulis, deskripsi, kategori, gambar_buku) VALUES ('$judul_buku', '$nama_penerbit', '$nama_penulis', '$deskripsi', '$kategori', '$nama_gambar_baru')";
  $result = mysqli_query($koneksi, $query);
  
  if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
    " - ".mysqli_error($koneksi));
    } else {
    echo "<script>alert('Data berhasil ditambah.'); window.location='daftarbuku.php';</script>";
    }
  } else {     
    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, jpeg, png');window.location='tambah.php';</script>";
  }

  } else {
  $query = "INSERT INTO buku (judul_buku, nama_penerbit, nama_penulis, deskripsi, kategori, gambar_buku) VALUES ('$judul_buku', '$nama_penerbit', '$nama_penulis', '$deskripsi', '$kategori', null)";
  $result = mysqli_query($koneksi, $query);
  
  if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
  } else {
    echo "<script>alert('Data berhasil ditambah.'); window.location='daftarbuku.php';</script>";
  }
}