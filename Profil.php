<?php
session_start();


if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pariwisata";

$con = new mysqli("localhost","root","","pariwisata");


if ($con->connect_error) {
    die("Koneksi database gagal: " . $con->connect_error);
}


$username = $_SESSION['username'];
$sql = "SELECT * FROM user WHERE username = '$username'";
$result = $con->query($sql);


if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    
    header("Location: login.php");
    exit();
}



$con->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>TheEqurald</title>
    <link rel="stylesheet" type="text/css" href="Profil_style.css">
    <link rel="Icon" href="Logo new.png">
</head>
<header>
        <nav class="navbar">
            <div class="container nav-wrapper">
                <a href="#" class="logo"><img src="Logo new.png" alt="TheEqurald">
                    <div class="logo-word">TheEqurald</div>
                </a>
                <div class="menu-wrapper">
                    <ul class="menu">
                        <li class="menu-item"><a href="Landing_Page.php" class="menu-link">Home</a></li>
                        <li class="menu-item"><a href="Landing_Page.php #untung" class="menu-link">About Us</a></li>
                        <li class="menu-item"><a href="Event%20Page.php" class="menu-link">Event</a></li>
                    </ul>
                    <a href="#" class="account"><img src="Account.png" alt="akun"></a>
                </div>
            </div>
        </nav>
    </header>
<body>
    <div class="content">
    <h1>Halaman Profil</h1>
    <p>Selamat datang, <?php echo $user['username']; ?>!</p>
    <p>Email: <?php echo $user['email_user']; ?></p>
    <p>No-Telp: <?php echo $user['no_telp']; ?></p>
    <li><a href="Log_out.php">Logout</a></li>
</div>
</body>
</html>
