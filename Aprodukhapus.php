<?php
require 'functions.php';

$id = $_GET["idprod"];

if ( hapusproduk($id)){
    echo "
      <script>
        alert('Data Berhasil Dihapus!');
        document.location.href = 'akelolaproduk.php';
      </script>
    ";
  }else {
    echo "
      <script>
        alert('Data Gagal Dihapus!');
        document.location.href = 'akelolaproduk.php';
      </script>
    ";
  }
?>