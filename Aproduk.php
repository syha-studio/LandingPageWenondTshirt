<?php
require 'functions.php';
$produk  = query("SELECT * FROM produk ORDER BY idprod DESC");

//tombol cari
if ( isset($_POST["cari"])){
  $produk = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>WENOND-Kelola Pesanan</title>
    <link rel="icon" type="icon" href="logo.png" />
    <!--CSS-->
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  </head>
  <body>
    <h1>KELOLA PRODUK</h1>
    <a href="akelolaproduktambah.php">Tambah Produk</a>
    <br> <br>
    <form action="" method ="post">
      <input type="text" name ="keyword" size ="30" autofocus placeholder ="Masukkan ID / Nama Produk" autocomplete ="off" required>
      <button type ="submit" name="cari">Cari</button>
    </form>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>No.</th>
        <th>ID Produk</th>
        <th>Nama Produk</th>
        <th>Harga Satuan</th>
        <th>Harga Grosir</th>
        <th>Deskripsi Produk</th>
        <th>Gambar Produk</th>
        <th>Aksi</th>
      </tr>
      <?php $i = 1 ?>
      <?php foreach ($produk as $row) : ?>
      <tr>
        <td><?= $i ?></td>
        <td><?= $row["idprod"]?></td>
        <td><?= $row["nama_produk"]?></td>
        <td><?= $row["harga_satuan"]?></td>
        <td><?= $row["harga_grosir"]?></td>
        <td><?= $row["deskripsi_produk"]?></td>
        <td><?= $row["gambar_produk"]?></td>
        <td>
          <a href="akelolaprodukhapus.php?idprod=<?= $row["idprod"];?>" onclick="return confirm('Yakin?');">Hapus</a><br>
          <a href="akelolaprodukubah.php?idprod=<?= $row["idprod"];?>">Edit</a><br>
        </td>
      </tr>
      <?php $i++ ?>
      <?php endforeach ?>
    </table>
  </body>
</html>