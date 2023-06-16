<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheEqurald</title>
    <link rel="stylesheet" href="Event_style.css">
    <link rel="icon" href="Logo new.png">
</head>

<body>
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
                        <li class="menu-item"><a href="#" class="menu-link">Event</a></li>
                    </ul>
                    <a href="login.php" class="account"><img src="Account.png" alt="akun"></a>
                </div>
            </div>
        </nav>
    </header>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Action</th>
        </tr>

        <?php include 'connect.php';
        $no = 1;
        $sql = "SELECT * FROM acara where 1";
        $result = mysqli_query($con, $sql);
        while ($data = mysqli_fetch_array($result)):
            ?>
            <tr>
                <td>
                    <?php echo $no++; ?>
                </td>
                <td><img width="200" height="200" src="<?php echo $data['gambar_acara']; ?>" alt=""></td>
                <td>
                    <?php echo $data['judul_acara']; ?>
                </td>
                <td>
                    <?php echo $data['deskripsi_acara']; ?>
                </td>
                <td>
                    <a href="delete.php?id=<?=$data['id_acara'] ?>">delete</a>
                    <a href="edit_acara.php?id=<?=$data['id_acara'] ?>">edit</a>
                </td>
            <?php endwhile; ?>
        </tr>
    </table>
    <style>
    table {
        width: 1000px;
        border-collapse: collapse;
        margin-left: 200px;
    }

    th, td {
        padding: 10px;
        text-align: left;
        border: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    img {
        display: block;
        max-width: 100%;
        height: auto;
    }

    .judul {
        font-weight: bold;
    }

    .deskripsi {
        color: #666;
    }
</style>

    <div class="tombol">

        <a href="tambahdataacara.php">Add Event</a>
    </div>
</body>

</html>