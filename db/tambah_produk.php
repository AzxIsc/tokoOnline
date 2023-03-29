<?php 

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "IThings";
$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Menambahkan data produk

// $sql = "INSERT INTO produk (nama_produk, harga, warna, penyimpanan, kategori, stok_produk)
// VALUES ('Apple MacBook Pro M2 (2022)', 20999000, 'Silver', '256GB', 'Laptop', 5),
//        (' Asus ZenBook 17 Fold', 49999000, 'Black', '1TB', 'Laptop', 3)";

$sql = "INSERT INTO produk (nama_produk, harga, warna, kategori, stok_produk)
VALUES ('HyperX Alloy Elite', 2200000, 'Black', 'Keyboard', 15),
       ('Sony Headphone Premium Z1R', 25229000, 'Black', 'Headphone', 5)";

if (mysqli_query($conn, $sql)) {
  echo "Data produk berhasil ditambahkan";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>