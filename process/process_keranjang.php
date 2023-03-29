<?php
session_start();

// Cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST['id_produk'])) {
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

    // Memeriksa apakah produk yang ingin dimasukkan ke keranjang sudah ada di keranjang atau belum
    $id_produk = $_POST['id_produk'];
    $query = "SELECT * FROM keranjang WHERE id_produk = '$id_produk' AND id_session = '".session_id()."'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        // Jika sudah ada, update jumlah produk di keranjang
        $row = mysqli_fetch_assoc($result);
        $id_keranjang = $row['id_keranjang'];
        $jumlah = $row['jumlah'] + $_POST['jumlah'];
        $query = "UPDATE keranjang SET jumlah = $jumlah WHERE id_keranjang = $id_keranjang";
        mysqli_query($conn, $query);
    } else {
        // Jika belum ada, tambahkan produk ke keranjang
        $id_session = session_id();
        $nama_produk = $_POST['nama_produk'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        $query = "INSERT INTO keranjang (id_session, id_produk, nama_produk, harga, jumlah) VALUES ('$id_session', '$id_produk', '$nama_produk', '$harga', '$jumlah')";
        mysqli_query($conn, $query);
    }

    // Tutup koneksi ke database
    mysqli_close($conn);

    // Redirect ke halaman keranjang
    header("Location: ../application/keranjang.php");
    exit();
}
?>