<?php
session_start();

// Periksa apakah pengguna sudah login
if (isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
} else {
    header("Location: profil.php");
    exit();
}
?>
