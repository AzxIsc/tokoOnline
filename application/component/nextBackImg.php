<?php
//koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "IThings";
$koneksi = mysqli_connect($host, $user, $pass, $db);

//cek koneksi
if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

//query untuk mendapatkan data produk dari database
$sql = "SELECT * FROM produk";
$result = mysqli_query($koneksi, $sql);

//memasukkan data produk ke dalam array $produk
$produk = array();
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $produk[] = $row;
  }
}
?>