<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "IThings";
$koneksi = mysqli_connect($host, $user, $password, $database);

// Ambil id_produk dari parameter GET
$id_produk = isset($_GET["id_produk"]) ? $_GET["id_produk"] : "";

// Query untuk mendapatkan informasi produk berdasarkan id_produk
$query = "SELECT * FROM produk WHERE id_produk = $id_produk";
$result = mysqli_query($koneksi, $query);

// Cek apakah query berhasil dijalankan dan menghasilkan data
if ($result && mysqli_num_rows($result) > 0) {
  $produk = mysqli_fetch_assoc($result);
} else {
  echo "Produk tidak ditemukan.";
  exit;
}
?>