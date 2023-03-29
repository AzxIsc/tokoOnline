<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "IThings";
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Cek koneksi
if (mysqli_connect_errno()) {
  echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
  exit();
}

// Memeriksa apakah ada inputan pencarian yang dikirim dari form search
if (isset($_GET['search'])) {
  // Membersihkan inputan pencarian
  $search = mysqli_real_escape_string($conn, $_GET['search']);

  // Query untuk mencari produk yang sesuai dengan inputan pencarian
  $query = "SELECT * FROM produk WHERE nama_produk LIKE '%$search%'";
  $result = mysqli_query($conn, $query);

  // Mengecek apakah ada hasil pencarian
  if (mysqli_num_rows($result) > 0) {
    // Jika ada, arahkan pengguna ke halaman produk yang pertama kali ditemukan
    $row = mysqli_fetch_assoc($result);
    $id_produk = $row['id_produk'];
    header("Location: ../application/produk.php?id_produk=$id_produk");
    exit();
  } else {
    // Jika tidak ada, kembalikan ke halaman sebelumnya
    header("Location: " . $_SERVER['HTTP_REFERER']);
    echo "<script>alert('Produk tidak ada!');</script>";
    exit();
  }
}

// Menutup koneksi ke database
mysqli_close($conn);
?>