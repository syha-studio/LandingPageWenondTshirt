<?php
require 'functions.php';

$id = $_GET["idprod"];
$ganti  = query("SELECT * FROM produk WHERE idprod = $id")[0];


if ( isset($_POST["submit"])){
  if (ubahproduk($_POST) > 0){
    echo "
      <script>
        alert('Data Berhasil Diubah!');
        document.location.href = 'akelolaproduk.php';
      </script>
    ";
  }else {
    echo "
      <script>
        alert('Data Gagal Diubah!');
        document.location.href = 'akelolaproduk.php';
      </script>
    ";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>WENOND-Ubah Produk</title>
    <link rel="icon" type="icon" href="logo.png" />
    <!--CSS-->
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  </head>
  <body>
    <h1>KELOLA PRODUK</h1> <br>
    <h2>Ubah Produk</h2>
    <form action="" method ="post">
      <input type="hidden" name="idprod" id="idprod" required value = "<?= $ganti["idprod"]?>">
      <ul>
        <li>
          <label for="nama_produk">NAMA PRODUK</label>
          <input type="text" name="nama_produk" id="nama_produk" required value = "<?= $ganti["nama_produk"]?>">  
        </li>
        <li>
          <label for="harga_satuan">HARGA SATUAN</label>
          <input type="text" name="harga_satuan" id="harga_satuan" required value = "<?= $ganti["harga_satuan"]?>">  
        </li>
        <li>
          <label for="harga_grosir">HARGA GROSIR</label>
          <input type="text" name="harga_grosir" id="hargagrosir" required value = "<?= $ganti["harga_grosir"]?>">  
        </li>
        <li>
          <label for="deskripsi_produk">DESKRIPSI</label>
          <input type="text" name="deskripsi_produk" id="deskripsi_produk" required value = "<?= $ganti["deskripsi_produk"]?>">  
        </li>
        <li>
          <label for="gambar_produk">GAMBAR</label>
          <input type="text" name="gambar_produk" id="gambar_produk" required value = "<?= $ganti["gambar_produk"]?>">  
        </li>
        <li>
          <button type="submit" name="submit">Ubah</button>
        </li>
      </ul>
    </form>
    <br>
    <a href="akelolaproduk.php">Batal</a>
  </body>
</html>