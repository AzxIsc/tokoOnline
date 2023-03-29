<!DOCTYPE html>
<html>
<head>
	<title>Register to IThings</title>
    <?php include '../component/head-form.php'; ?>
	<link rel="stylesheet" type="text/css" href="../../css/regist.css">
</head>
    <body>
        <div class="container">
            <div class="logo">
                <img src="../../img/logo.png" alt="Logo">
            </div>
            <div class="form">
                <h2>Register</h2>
                <form action="../../process/process_register.php" method="post">
                    <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>

                    <input type="email" id="email" name="email" placeholder="Email" required>

                    <input type="text" id="username" name="username" placeholder="Username" required>

                    <div class="password-input">
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                    </div>

                    <div class="password-input">
                        <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required>
                        <i class="bi bi-eye-slash" id="toggleConfirmPassword"></i>
                    </div>

                    <script src="../js/register.js"></script>

                    <input type="submit" value="REGISTER">

                    <p class="login-text">Punya akun IThings? <a href="login.php">Log In Sekarang!</a></p>
                </form>
            </div>
        </div>
    </body>
</html>