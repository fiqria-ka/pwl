<?php
session_start();
$valid_username = "admin";
$valid_password = "12345";

if ($_POST['username'] == $valid_username && $_POST['password'] == $valid_password) {
    $_SESSION['username'] = $valid_username;
    header('Location: dashboard.php');
} else {
    echo "Login gagal. <a href='login.php'>Coba lagi</a>";
}
?>
