<?php
include_once("connect.php");
session_start();

$ids = $_GET['id'];



// $id = $_POST['id_acara'];
$nama = $_POST['judul_acara'];
$deskripsi = $_POST['deskripsi_acara'];

// Cek apakah file gambar diunggah
if (isset($_FILES['gambar_acara']) && $_FILES['gambar_acara']['size'] > 0) {
    $gambar = $_FILES['gambar_acara']['name'];
    $tmp_name = $_FILES['gambar_acara']['tmp_name'];

    // Hapus gambar lama dari direktori jika ada
    $result = mysqli_query($con, "SELECT gambar_acara FROM acara WHERE id_acara=$ids");
    if ($row = mysqli_fetch_assoc($result)) {
        $gambar_lama = $row['gambar_acara'];
        unlink("img/$gambar_lama");
    }

    // Pindahkan file gambar yang diunggah ke direktori tujuan
    move_uploaded_file($tmp_name, "img/$gambar");

    // Update data acara beserta gambar baru
    $query = "UPDATE acara SET judul_acara='$nama', deskripsi_acara='$deskripsi', gambar_acara='$gambar' WHERE id_acara=$ids";
} else {
    // Jika tidak ada gambar yang diunggah, hanya update data acara
    $query = "UPDATE acara SET judul_acara='$nama', deskripsi_acara='$deskripsi' WHERE id_acara=$ids";
}

// Jalankan query update
if (mysqli_query($con, $query)) {
    header("Location: Event%20Page.php");
    exit();
} else {
    echo "Error: " . mysqli_error($con);
}

// // $target_dir = "img/";
// $target_file = $target_dir . basename($_FILES["gambar_acara"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// // Cek apakah file sudah ada
// if (file_exists($target_file)) {
//     $_SESSION['error'] = "File already exists.";
//     $uploadOk = 0;
//     header("Location: Landing_page.php");
//     exit();
// }

// // Izinkan jenis file tertentu
// $allowedFileTypes = array("jpg", "png", "jpeg", "gif");
// if (!in_array($imageFileType, $allowedFileTypes)) {
//     $_SESSION['error'] = "Only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
//     header("Location: Landing_page.php");
//     exit();
// }

// // Cek apakah file dapat diupload
// if ($uploadOk == 0) {
//     echo "File was not uploaded.";
// } else {
//     if (move_uploaded_file($_FILES["gambar_acara"]["tmp_name"], $target_file)) {
//         // Masukkan data ke database
//         $sql = "INSERT INTO acara(judul_acara, deskripsi_acara, gambar_acara) 
//                 VALUES ('$nama_acara', '$des_acara', '$target_file')";
//         if (mysqli_query($con, $sql)) {
//             echo "File uploaded and data inserted into database.";
//         } else {
//             echo "Error inserting data into database: " . mysqli_error($con);
//         }
//     } else {
//         echo "Error uploading file.";
//     }
// }


// header("Location: Event page.php");
?>
