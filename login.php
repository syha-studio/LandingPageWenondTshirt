<?php
require 'functions.php';
$pesanan  = query("SELECT * FROM pembelian")
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>WENOND-Login Admin</title>
    <link rel="icon" type="icon" href="logo.png" />
    <!--CSS-->
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  </head>
  <body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color: #0b2fa6">
      <div class="container">
        <a class="navbar-brand" href="index.html" style="color: white"> <img src="logo.png" width="50vh" class="d-inline-block align-text-mid me-2" /> WENOND T-SHIRT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.html">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="LihatProduct.html">PRODUK</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir NavBar -->

    <!-- Login -->
    <section id="Contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col mt-5 pt-5 Proto">
            <h2 id="contact-me">LOGIN ADMIN<a class="anchor-link" href="#contact-me" aria-label="Link to this section: Contact Me"></a></h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5">
          <div class="col-md-5">
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" aria-describedby="name" placeholder="name@gmail.com" />
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="text" class="form-control" id="password" aria-describedby="password" placeholder="********" />
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0B2Fa6"
          fill-opacity="1"
          d="M0,224L60,229.3C120,235,240,245,360,240C480,235,600,213,720,218.7C840,224,960,256,1080,261.3C1200,267,1320,245,1380,234.7L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Login -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>

  <!-- footer -->
  <footer class="fot fs-5 text-white text-center fw-bold pb-2" style="background-color: #0b2fa6">
    <p class="" style="color: white">Created by SYHA</p>
  </footer>
  <!-- Akhir footer -->
</html>
