<?php
// konfigurasi database
define('host', 'localhost');
define('user', 'root');
define('pass', '');
define('dbName', 'IThings');

// koneksi ke database
$conn = mysqli_connect(host, user, pass, dbName);

// cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
}
?>
