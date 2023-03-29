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

// Membuat tabel keranjang
$sql_create_keranjang = "CREATE TABLE keranjang (
  id_keranjang INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  id_produk INT(6) UNSIGNED,
  jumlah_produk INT(6) NOT NULL,
  FOREIGN KEY (id_produk) REFERENCES produk(id_produk)
)";

if (mysqli_query($conn, $sql_create_keranjang)) {
  echo "Tabel keranjang berhasil dibuat.\n";
} else {
  echo "Error: " . mysqli_error($conn) . "\n";
}

mysqli_close($conn);
?>