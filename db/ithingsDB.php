<?php
$host = "localhost";
$user = "root";
$pass = "";
$conn = mysqli_connect($host, $user, $pass);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$db_name = "IThings";
$sql = "CREATE DATABASE $db_name";
if (mysqli_query($conn, $sql)) {
    echo "Database berhasil dibuat!";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>