<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "IThings";

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    $check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($conn, $check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // Jika username atau email sudah terdaftar
        if ($user['username'] === $username) {
            echo "<script>alert('Username sudah terdaftar!');</script>";
            echo "<script>
                    setTimeout(function() {
                        window.location.href = '../application/form/register.php';
                    }, 2000);
                  </script>";
        }

        if ($user['email'] === $email) {
            echo "<script>alert('Email sudah terdaftar!');</script>";
            echo "<script>
                    setTimeout(function() {
                        window.location.href = '../application/form/register.php';
                    }, 2000);
                  </script>";
        }
    } else { // Jika username dan email belum terdaftar
        $insert_query = "INSERT INTO users (fullname, email, username, password) VALUES ('$fullname', '$email', '$username', '$password')";
        if (mysqli_query($conn, $insert_query)) {
            echo "<script>alert('Registrasi berhasil!');</script>";
            echo "<script>
                    setTimeout(function() {
                        window.location.href = '../application/form/login.php';
                    }, 2000);
                  </script>";
        } else {
            echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
        }        
    }
    
    mysqli_close($conn);
?>    