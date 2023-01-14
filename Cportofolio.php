<?php 
require 'functions.php';
$toko = query("SELECT * FROM toko");
$portofolio = query("SELECT * FROM portofolio");
$kontak = query("SELECT * FROM kontak");
$kategori_produk = query("SELECT * FROM kategori_produk");
$produk = query("SELECT * FROM produk");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $toko[0]["nama_toko"]?></title>
    <link rel="icon" type="icon" href="img\umum\<?= $toko[0]["logo_toko"]?>" />
    <!--CSS-->
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  </head>
  <body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow" style="background-color: #1ef4ec">
      <div class="container">
        <a class="navbar-brand" href="index.php" style="color: black"> <img src="img\umum\<?= $toko[0]["logo_toko"]?>" width="50vh" class="d-inline-block align-text-mid me-2" /> <?= $toko[0]["nama_toko"]?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="Cportofolio.php">Portfolios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://wa.me/<?=$kontak[0]['kontak']?>/?text=Anda%20Akan%20menghubungi%20Admin%20Toko%20Wenond%20T-shirt" style="color: rgb(38, 121, 255)">Order Now</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir NavBar -->

    <!-- Portfolios -->
    <section id="portfolios">
      <div class="container pt-5 pb-5">
        <div class="row text-center mb-3">
          <div class="col Proto">
            <h2>Our Portfolios</h2>
          </div>
        </div>
        <?php foreach ($produk as $pro) : ?>
        <div class="row text-center mb-3">
          <div class="col Proto">
            <h3><?=$pro['nama_produk']?></h3>
          </div>
        </div>
        <div id="kaospolo" class="row carousel slide" data-bs-ride="true">
          <div class="carousel-inner">
          <?php $j = 1 ?>
        <?php foreach ($portofolio as $row) : ?>
          <?php if ($row['kategori'] == $pro['nama_produk']) : ?>
          <div class="carousel-item <?php if ($j == 1) : ?> active <?php endif ?>">
            <img src="img\halamanUtama\portofolio\<?=$row['gambar_portofolio']?>" class="d-block w-100" alt="<?= $j ?>" />
          </div>
          <?php $j++ ?>
          <?php endif ?>
        <?php endforeach ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#kaospolo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#kaospolo" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <?php foreach ($kategori_produk as $katpro) : ?>
          <?php if ($pro['kategori'] == $katpro['kategori']) : ?>
        <div class="row text-center mb-5">
          <div class="col Proto">
            <a href="https://wa.me/<?=$katpro['nowa']?>/?text=Anda%20Akan%20menghubungi%20Admin%20Toko%20Wenond%20T-shirt"><button type="button" class="btn btn-primary">Pesan Sekarang</button></a>
          </div>
        </div>
          <?php endif ?>
        <?php endforeach ?>
        <?php endforeach ?>
      </div>
    </section>
    <!-- Akhir Products -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>

  <!-- footer -->
  <footer class="fot fs-5 text-white text-center fw-bold pb-2" style="background-color: #1ef4ec">
    <p class="" style="color: black">Created by SYHA</p>
  </footer>
  <!-- Akhir footer -->
</html>
