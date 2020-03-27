<?php
  include('koneksi.php')  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>B Shelves : Tambah Buku</title>
    <style type="text/css">
    * {font-family: "Montserrat-Bold";}
    body {background-image: url('bck.jpg'); background-size: cover;}
    h1 {
        text-transform: uppercase;
        color: #8B4513;
    }
    button {
          background-color: #8B4513;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: #8B4513;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #FFECD9;
    }
    </style>
  </head>
  <body>
      
      <form method="POST" action="tambahact.php" enctype="multipart/form-data" >
      <section class="base">
        <center>
        <h1>Tambah Produk</h1>
        <center>
        <div>
          <label>Judul Buku</label>
          <input type="text" name="judul_buku" autofocus="" required="" />
        </div>
        <div>
          <label>Nama Penerbit</label>
          <input type="text" name="nama_penerbit" autofocus="" required="" />
        </div>
        <div>
          <label>Nama Penulis</label>
          <input type="text" name="nama_penulis" autofocus="" required="" />
        </div>
        <div>
          <label>Deskripsi</label>
         <input type="text" name="deskripsi" />
        </div>
        <div>
          <label>Kategori</label>
          <select class="input" name="kategori" required="">
            <option value="kosong">Kategori Buku</option>
            <option value="Novel">Novel</option>
            <option value="Komik">Komik</option>
            <option value="Ensiklopedia">Ensiklopedia</option>
            <option value="Antologi">Antologi</option>
            <option value="Dongeng">Dongeng</option>
            <option value="Biografi">Biografi</option>
            <option value="KaryaIlmiah">Karya Ilmiah</option>
            <option value="Tafsir">Tafsir</option>
            <option value="Kamus">Kamus</option>
            <option value="Panduan">Panduan</option>
            <option value="Atlas">Atlas</option>
            <option value="lain-lain">lain-lain</option>
          </select>
        </div>
        <div>
          <label>Gambar Buku</label>
         <input type="file" name="gambar_buku" required="" />
        </div>
        <div>
         <button type="submit">SIMPAN BUKU</button>
        </div>
        </section>
      </form>
  </body>
</html>