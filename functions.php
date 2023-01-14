<?php
//koneksi ke database
$conn = mysqli_connect("localhost","root","","tokowenond");

function query ($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
    $rows [] = $row;
    }
    return $rows;
}

function tambahproduk ($data) {
    global $conn;
    $idprod = htmlspecialchars($data["idprod"]);
    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $harga_satuan = htmlspecialchars($data["harga_satuan"]);
    $harga_grosir = htmlspecialchars($data["harga_grosir"]);
    $deskripsi_produk = htmlspecialchars($data["deskripsi_produk"]);
    $gambar_produk = htmlspecialchars($data["gambar_produk"]);

    $query = "INSERT INTO produk VALUES ('$idprod','$nama_produk','$harga_satuan','$harga_grosir','$deskripsi_produk','$gambar_produk')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function hapusproduk ($id){
    global $conn;
    $query = "DELETE FROM produk WHERE idprod = $id";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function ubahproduk($data){
    global $conn;
    $idprod = htmlspecialchars($data["idprod"]);
    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $harga_satuan = htmlspecialchars($data["harga_satuan"]);
    $harga_grosir = htmlspecialchars($data["harga_grosir"]);
    $deskripsi_produk = htmlspecialchars($data["deskripsi_produk"]);
    $gambar_produk = htmlspecialchars($data["gambar_produk"]);

    $query = "UPDATE produk SET
                nama_produk = '$nama_produk',
                harga_satuan = '$harga_satuan',
                harga_grosir = '$harga_grosir',
                deskripsi_produk ='$deskripsi_produk',
                gambar_produk = '$gambar_produk' WHERE idprod = $idprod";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function cari($keyword) {
    $query = "SELECT * FROM produk WHERE idprod LIKE '%$keyword%' OR nama_produk LIKE '%$keyword%'";
    return query($query);
}
?>