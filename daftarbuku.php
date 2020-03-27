<?php
  include('koneksi.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>B Shelves</title>
    <style type="text/css">
    * {font-family: "Montserrat-Bold";}
    h1 {
        text-transform: uppercase;
        color: #FFECD9;
        background-color: #8B4513;
    }
    table {
      border: solid 1px #FFECD9;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #FFECD9;
        border: solid 1px #FFECD9;
        color: black;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #FFECD9;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: #8B4513;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  </head>
  <body>
    <center><h1>Data Buku</h1><center>
    <center><th><a href="first.php">Kembali</a> </th><th></th><th><a href="tambah.php">+ &nbsp; Tambah Buku</a></th><center>
      <br>
      <table>
      <thead>
        <tr>
          <th><center>No</center></th>
          <th><center>Judul Buku</center></th>
          <th><center>Penerbit</center></th>
          <th><center>Penulis</center></th>
          <th><center>Dekripsi</center></th>
          <th><center>Kategori</center></th>
          <th><center>Gambar</center></th>
          <th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM buku ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      $no = 1; 
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['judul_buku']; ?></td>
          <td><?php echo $row['nama_penerbit']; ?></td>
          <td><?php echo $row['nama_penulis']; ?></td>
          <td><?php echo substr($row['deskripsi'], 0, 40); ?> </td>
          <td><?php echo $row['kategori']; ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar_buku']; ?>" style="width: 120px;"></td>
          <td>
              <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>  
      <?php
        $no++;
      }
      ?>
    </tbody>
    </table>
  </body>
</html>