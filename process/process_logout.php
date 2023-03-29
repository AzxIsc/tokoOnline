<?php
session_start();

session_destroy();

header("Location: ../application/form/login.php");
exit;
?>