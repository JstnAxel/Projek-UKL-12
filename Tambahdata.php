<?php
include_once("connect.php");
session_start();


$nama_acara = $_POST['judul_acara'];
$des_acara =  $_POST['deskripsi_acara'];


// Upload file
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["gambar_acara"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Cek apakah file sudah ada
if (file_exists($target_file)) {
    $_SESSION['error'] = "File already exists.";
    $uploadOk = 0;
    header("Location: Landing_page.php");
    exit();
}

// Izinkan jenis file tertentu
$allowedFileTypes = array("jpg", "png", "jpeg", "gif");
if (!in_array($imageFileType, $allowedFileTypes)) {
    $_SESSION['error'] = "Only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    header("Location: Landing_page.php");
    exit();
}

// Cek apakah file dapat diupload
if ($uploadOk == 0) {
    echo "File was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["gambar_acara"]["tmp_name"], $target_file)) {
        // Masukkan data ke database
        $sql = "INSERT INTO acara(judul_acara, deskripsi_acara, gambar_acara) 
                VALUES ('$nama_acara', '$des_acara', '$target_file')";
        if (mysqli_query($con, $sql)) {
            echo "File uploaded and data inserted into database.";
        } else {
            echo "Error inserting data into database: " . mysqli_error($con);
        }
    } else {
        echo "Error uploading file.";
    }
}


header("Location: Event page.php");