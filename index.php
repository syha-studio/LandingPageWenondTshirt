<?php 
require 'functions.php';
$toko = query("SELECT * FROM toko");
$foto_pabrik = query("SELECT * FROM foto_pabrik");
$kategori_produk = query("SELECT * FROM kategori_produk");
$keunggulan = query("SELECT * FROM keunggulan");
$keunggulan_produk = query("SELECT * FROM keunggulan_produk");
$kontak = query("SELECT * FROM kontak");
$portofolio = query("SELECT * FROM portofolio WHERE status = 'true'");
$produk = query("SELECT * FROM produk");
$testimoni = query("SELECT * FROM testimoni");
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
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about-us">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#products">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Cportofolio.php">Portfolios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#why">Why Wenond T-shirt</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://wa.me/<?=$kontak[0]['kontak']?>/?text=Anda%20Akan%20menghubungi%20Admin%20Toko%20Wenond%20T-shirt" style="color: rgb(38, 121, 255)">Order Now</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Tombol WhatsAppp-->
    <div class="fixed-bottom m-3">
      <a href="https://wa.me/<?=$kontak[0]['kontak']?>/?text=Anda%20Akan%20menghubungi%20Admin%20Toko%20Wenond%20T-shirt"><img width="50vh" src="img\umum\WA.png" alt="WA" /></a>
    </div>
    <!-- Akhir Tombol WhatsAppp-->
    <!-- Akhir NavBar -->

    <!-- Home -->
    <section>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
        <?php $i = 0 ?>
        <?php foreach ($portofolio as $row) : ?>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i ?>"
          <?php if ($i == 0) : ?>
          class="active" aria-current="true"
          <?php endif ?>
          aria-label="Slide <?= ($i+1) ?>"></button>
          <?php $i++ ?>
        <?php endforeach ?>
        </div>
        <div class="carousel-inner">
        <?php $j = 1 ?>
        <?php foreach ($portofolio as $row) : ?>
          <div class="carousel-item <?php if ($j == 1) : ?> active <?php endif ?>">
            <img src="img\halamanUtama\portofolio\<?=$row['gambar_portofolio']?>" class="d-block w-100" alt="<?= $j ?>" />
          </div>
          <?php $j++ ?>
        <?php endforeach ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- Tombol Pesan Sekarang-->
      <div class="pt-3 pb-4" style="background-color: #1ef4ec">
        <div class="pt-2 ps-3 pe-3 pb-2 d-flex justify-content-center">
          <p class="text-center">Ingin Melakukan Pemesanan? Klik Tombol di bawah ini!</p>
        </div>
        <div class="d-flex justify-content-center">
          <a href="https://wa.me/<?=$kontak[0]['kontak']?>/?text=Anda%20Akan%20menghubungi%20Admin%20Toko%20Wenond%20T-shirt"><button type="button" class="btn btn-primary btn-lg">Pesan Sekarang</button></a>
        </div>
      </div>
      <!--Akhir Tombol Pesan Sekarang-->
    </section>
    <!-- Akhir Home -->

    <!--About Us-->
    <section id="about-us">
      <div class="container pt-5 pb-5">
        <div class="row text-center mb-3">
          <div class="col Proto">
            <img src="img\umum\<?= $toko[0]["logo_toko"]?>" width="150vh" alt="logo" position="relative" />
            <h2 class="mt-3"><?= $toko[0]["nama_toko"]?></h2>
          </div>
          <p class="slogan"><?= $toko[0]["slogan"]?></p>
          <p class="fw-bolder"><?= $toko[0]["heading_deskripsi"]?></p>
          <p class="text-center ps-3 pe-3"><?= $toko[0]["isi_deskripsi"]?></p>
        </div>
        <div class="d-flex justify-content-center mb-2 pb-2">
          <a class="Prodto" href="Cportofolio.php"><button type="button" class="btn btn-info">Lihat Portofolio Toko</button></a>
        </div>
      </div>
      <div class="container pb-5">
        <div class="row justify-content-center text-center">
          <div class="col-sm-3 mb-3">
            <div class="card p-2" style="background-color: #5c8dff">
              <p><img src="img\umum\logo.png" width="50vh" /></p>
              <h4>Kapasitas Produksi</h4>
              <h5>up to <?= $toko[0]["kapasitas_produksi"]?></h5>
            </div>
          </div>
          <div class="col-sm-3 mb-3">
            <div class="card p-2" style="background-color: #5c8dff">
              <p><img src="img\umum\logo.png" width="50vh" /></p>
              <h4>Telah Memproduksi</h4>
              <h5>more than <?= $toko[0]["telah_memproduksi"]?></h5>
            </div>
          </div>
          <div class="col-sm-3 mb-3">
            <div class="card p-2" style="background-color: #5c8dff">
              <p><img src="img\umum\logo.png" width="50vh" /></p>
              <h4>Klien Puas</h4>
              <h5>more than <?= $toko[0]["jumlah_klienpuas"]?></h5>
            </div>
          </div>
          <div class="col-sm-3 mb-3">
            <div class="card p-2" style="background-color: #5c8dff">
              <p><img src="img\umum\logo.png" width="50vh" /></p>
              <h4>Jumlah Karyawan</h4>
              <h5>more than <?= $toko[0]["jumlah_karyawan"]?></h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir About Us -->

    <!-- Product -->
    <section id="products" style="background-color: #1ef4ec">
      <div class="container pt-5 pb-5">
      <?php foreach ($kategori_produk as $katpro) : ?>
        <div class="row text-center mb-3">
          <div class="col Proto">
            <h2>OUR PRODUCTS</h2>
          </div>
        </div>
        <div class="row text-center mb-3">
          <div class="col Proto">
            <h3><?=$katpro['kategori']?></h3>
          </div>
        </div>
        <div class="row justify-content-center">
        <?php foreach ($produk as $pro) : ?>
          <?php if ($pro['kategori'] == $katpro['kategori']) : ?>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img\halamanUtama\produk\<?=$pro['gambar_produk']?>" class="card-img-top" alt="<?=$pro['gambar_produk']?>" />
              <div class="card-body">
                <h5><?=$pro['nama_produk']?></h5>
                <p class="card-text"><?=$pro['deskripsi_produk']?></p>
              </div>
            </div>
          </div>
          <?php endif?>
        <?php endforeach?>
        </div>
        <div class="row text-center mb-5">
          <div class="col Proto">
            <a href="https://wa.me/<?=$katpro['nowa']?>/?text=Anda%20Akan%20menghubungi%20Admin%20Toko%20Wenond%20T-shirt"><button type="button" class="btn btn-primary">Pesan Sekarang</button></a>
          </div>
        </div>
        <?php endforeach?>
    </section>
    <!-- Akhir Products -->

    <!-- Keunggulan Produk -->
    <section>
      <div class="container pt-5 pb-5">
        <div class="row text-center mb-3">
          <div class="col Proto">
            <h2>What you get from the product</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6 mb-3">
          <?php foreach ($keunggulan_produk as $ung) : ?>
            <div class="card mb-3 text-center" style="background-color: #b6ccff">
              <div class="card-body">
                <h5 class="fw-bolder"><?=$ung['headunggul']?></h5>
                <p class="card-text"><?=$ung['deskripsiungprod']?></p>
              </div>
            </div>
          <?php endforeach?>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Keunggulan Produk -->

    <!-- Why Wenond T-Shirt  -->
    <section id="why" style="background-color: #1ef4ec">
      <div class="container pt-5 pb-5">
        <div class="row text-center mb-3">
          <div class="col Proto">
            <h2 class="mt-3">Why <?= $toko[0]["nama_toko"]?>?</h2>
          </div>
          <p class="text-center ps-3 pe-3"><?= $toko[0]["alasan"]?></p>
        </div>
      </div>
      <div class="container pb-5">
        <div class="row justify-content-center text-center">
          <div class="col-sm-3 mb-3">
          <?php foreach ($keunggulan as $gul) : ?>
            <div class="card p-2">
              <p><img src="img\halamanUtama\keunggulan\<?= $gul["icon"]?>" width="50vh" /></p>
              <h5 class="fw-bolder"><?= $gul["keunggulan"]?></h5>
              <p><?= $gul["deskripsi_unggul"]?></p>
            </div>
          <?php endforeach?>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Why Wenond T-Shirt  -->

    <!-- Galery Pabrik  -->
    <section>
      <div class="container pt-5 pb-5">
        <div class="row text-center mb-3">
          <div class="col Proto">
            <h2>Our Galery</h2>
          </div>
        </div>
        <div id="Galery" class="row carousel slide" data-bs-ride="true">
          <div class="carousel-inner">
          <?php $j = 1 ?>
        <?php foreach ($foto_pabrik as $row) : ?>
          <div class="carousel-item <?php if ($j == 1) : ?> active <?php endif ?>">
            <img src="img\halamanUtama\foto_pabrik\<?=$row['fotopabrik']?>" class="d-block w-100" alt="<?= $j ?>" />
          </div>
          <?php $j++ ?>
        <?php endforeach ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#Galery" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#Galery" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- Akhir Galery Pabrik  -->

    <!-- Testimoni  -->
    <section style="background-color: #1ef4ec">
      <div class="container pt-5 pb-5">
        <div class="row text-center mb-3">
          <div class="col Proto">
            <h2>What Our Clients Say</h2>
          </div>
        </div>
        <div id="Testimoni" class="row carousel slide" data-bs-ride="true">
          <div class="carousel-inner">
          <?php $j = 1 ?>
        <?php foreach ($testimoni as $row) : ?>
          <div class="carousel-item <?php if ($j == 1) : ?> active <?php endif ?>">
            <img src="img\halamanUtama\testimoni\<?=$row['foto_testomoni']?>" class="d-block w-100" alt="<?= $j ?>" />
          </div>
          <?php $j++ ?>
        <?php endforeach ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#Testimoni" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#Testimoni" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- Akhir Testimoni  -->

    <!-- Contacts  -->
    <section id="contact">
      <div class="container pt-5 pb-5">
        <div class="row text-center mb-3">
          <div class="col Proto">
            <h2>Contact Us</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5">
          <div class="col-md-6">
            <table>
              <tr><p class="fw-bolder">Address</p></tr>
              <tr>
                <td>
                  <?= $toko[0]["alamat"]?>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-5 p-3" style="background-color: #1ef4ec">
            <table cellpadding="10">
            <?php foreach ($kontak as $row) : ?>
              <tr>
                <td><p class="fw-bold"><?=$row['jenis'] ?></p></td>
                <td><a class="nav-link" href="<?= $row['url']?>"><p class="fw-bold"><?= $row['kontak']?></p></a></td>
              </tr>
            <?php endforeach ?>
            </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Tombol Masuk Sebagai Admin-->
      <div class="d-flex justify-content-end pt-4">
        <a href="login.php"><button type="button" class="btn btn-light me-3 mb-3">Admin</button></a>
      </div>
      <!-- Akhir Tombol Masuk Sebagai Admin-->
    </section>
    <!-- Akhir Contacts -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>

  <!-- footer -->
  <footer class="fot fs-5 text-white text-center fw-bold pt-2 pb-2" style="background-color: #1ef4ec">
    <p class="" style="color: black">Created by SYHA</p>
  </footer>
  <!-- Akhir footer -->
</html>
