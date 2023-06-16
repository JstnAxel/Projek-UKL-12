<?php
include_once("connect.php");


$id= $_GET['id'];
$_SESSION['inter']=$id;
$result= "SELECT * FROM acara where id_acara=$id";
$bebek = mysqli_query($con, $result);
$mamamia = mysqli_fetch_assoc($bebek);
$mama = $mamamia['id_acara'];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TheEqurald</title>
    <link rel="stylesheet" href="CSS/tambahdata_style.css">
    <link rel="icon" href="landing/Logo new.png">
</head>

<body>
        <header>
            <nav class="navbar">
                <div class="container nav-wrapper">
                    <a href="#" class="logo"><img src="landing/Logo new.png" alt="TheEqurald"><div class="logo-word">TheEqurald</div></a>
                    <div class="menu-wrapper">
                        <ul class="menu">
                            <li class="menu-item"><a href="Landing_page.php" class="menu-link">Home</a></li>
                            <li class="menu-item"><a href="Landing_Page.php #untung" class="menu-link">About Us</a></li>
                            <li class="menu-item"><a href="Event Page.php" class="menu-link">Event</a></li>
                        </ul>
                        <a href="login.php" class="account"><img src="landing/Account.png" alt="akun"></a>
                    </div>
                </div>
            </nav>
        </header>
    <div class="container_py-5" style="max-width: 550px;">
        <form method="post" action="update_acara.php?id=<?php echo $_SESSION['inter'];?>" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama_acara" class="form-label">Nama Event</label>
                <input type="text" class="form-control" id="judul_acara" name="judul_acara" value="<?= $mamamia['judul_acara']?>" required>
            </div>
            <div class="mb-3">
                <label for="des_acara" class="form-label">Deskripsi Event</label>
                <textarea class="form-control" id="deskripsi_acara" name="deskripsi_acara" rows="4"  required><?= $mamamia['deskripsi_acara']?></textarea>
            </div>
            <div>
                <?php echo$_SESSION['inter']; ?>
            </div>
            <div class="mb-3">
                <label for="gambar_acara" class="form-label">Gambar Event</label>
                <input class="form-control" type="file" id="gambar_acara" name="gambar_acara" value="<?= $mamamia['gambar_acara']?>" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
</body>