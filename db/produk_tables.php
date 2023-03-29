<?php
// Membuat koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "IThings";

$conn = mysqli_connect($host, $user, $pass, $dbname);

// Mengecek koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// Membuat tabel produk
$sql = "CREATE TABLE produk (
  id_produk INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nama_produk VARCHAR(50) NOT NULL,
  harga INT(11) NOT NULL,
  warna VARCHAR(20),
  penyimpanan VARCHAR(10),
  kategori VARCHAR(20),
  stok_produk INT(11) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Tabel produk berhasil dibuat";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>