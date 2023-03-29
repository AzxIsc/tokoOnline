<!DOCTYPE html>
<html>
<head>
	<title>Log In to IThings</title>
    <?php include '../component/head-form.php'; ?>
	<link rel="stylesheet" type="text/css" href="../../css/login.css">
</head>
    <body>
        <div class="container">
            <div class="logo">
                <img src="../../img/logo.png" alt="Logo">
            </div>
            <div class="form">
                <h2>Log In</h2>
                <form action="../../process/process_login.php" method="post">
                   <input type="text" id="username" name="username" placeholder="Username" required>

                    <div class="password-input">
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                    </div>

                    <script src="../js/login.js"></script>
                    
                    <input type="submit" value="LOG IN">
                    <a href="#">Lupa password?</a>
                    <p class="login-text">Baru menggunakan IThings? <a href="register.php">Daftar Sekarang!</a></p>
                </form>
            </div>
        </div>
    </body>
</html>