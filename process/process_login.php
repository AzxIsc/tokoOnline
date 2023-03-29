<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "IThings";

$conn = mysqli_connect($host, $user, $pass, $db_name);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    // login berhasil
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    mysqli_close($conn);
    echo "<script>alert('Login berhasil');window.location.href='../application/home.php';</script>";
} else {
    // login gagal
    mysqli_close($conn);
    echo "<script>alert('Username atau password salah');window.location.href='../application/form/login.php';</script>";
}
?>
