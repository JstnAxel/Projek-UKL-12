<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheEqurald</title>
    <link rel="stylesheet" href="CSS/Data_style.css">
    <link rel="icon" href="Logo new.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
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
                    <a href="#" class="account"><img src="Account.png" alt="akun"></a>
                </div>
            </div>
        </nav>
    </header>
    <div class="background">
        <img src="Background.png" width="1640px" height="1601px" alt="Background">
    </div>
    <div class="border1">
        <table border="1">
            <tr>
                <th>Nama Paket</th>
                <th>Harga Paket</th>
            </tr>

            <?php
            include 'connect.php';

            $id = $_GET['id'];

            $sql = "SELECT * FROM paket_wisata where id_wisata = $id ";
            $result = mysqli_query($con, $sql);
            while ($data = mysqli_fetch_array($result)):
                ?>
                <tr>
                    <td>
                        <?php echo $data['nama_paket']; ?>
                    </td>
                    <td>
                        <?php echo $data['harga_paket']; ?>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
    <div class="border">
        <table border="1">
            <tr>
                <th>Informasi Tur</th>
                <th>Jadwal Perjalanan</th>
                <th>Harga Termasuk</th>
                <th>Harga Tidak Termasuk</th>
            </tr>

            <?php
            include 'connect.php';

            $id = $_GET['id'];

            $sql = "SELECT * FROM paket_wisata where id_wisata = $id ";
            $result = mysqli_query($con, $sql);
            while ($data = mysqli_fetch_array($result)):
                ?>
                <tr>
                    <td>
                        <?php echo $data['informasi_tur']; ?>
                    </td>
                    <td>
                        <?php echo $data['jadwal_perjalanan']; ?>
                    </td>
                    <td>
                        <?php echo $data['harga_termasuk']; ?>
                    </td>
                    <td>
                        <?php echo $data['harga_tidak_termasuk']; ?>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
    <div class="search">
        <h2>Ubah Destinasi</h2>
        <input type="text" placeholder="Tujuan">
        <a href="" class="button"><img src="Tombol.png" alt=""></a>
    </div>
    <style>
        .date-input {
            position: absolute;
            display: inline-block;
            margin-left: 300px;
            top: 1650px;
        }

        .date-input input[type="text"] {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            color: #555;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .date-input input[type="text"]:focus {
            border-color: #999;
        }

        .date-input .flatpickr-calendar {
            z-index: 9999;
        }

        .date-input .flatpickr-calendar:before {
            content: "";
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-width: 0 10px 10px;
            border-style: solid;
            border-color: transparent transparent #fff;
        }

        .date-input .flatpickr-calendar:after {
            content: "";
            position: absolute;
            top: -8px;
            left: 50%;
            transform: translateX(-50%);
            border-width: 0 8px 8px;
            border-style: solid;
            border-color: transparent transparent #ccc;
        }
    </style>
    <form action="" method="post">
        <div class="date-input">
            <input type="text" id="datepicker" placeholder="Pilih Tanggal" readonly>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            flatpickr("#datepicker", {
                dateFormat: "d/m/Y",
                minDate: "today"
            });
        </script>

        <div class="form-group">
            <label for="jumlah">Jumlah Orang:</label>
            <input type="number" id="jumlah" name="jumlah" min="1" required>
        </div>
        <style>
            .form-group {
                margin-bottom: 20px;
                width: 220px;
                position: absolute;
                margin-left: 600px;
                top: 1630px;
            }

            label {
                display: block;
                font-weight: bold;
                color: #333;
                margin-bottom: 5px;
            }

            input[type="number"] {
                width: 100%;
                padding: 10px;
                border-radius: 4px;
                border: 1px solid #ccc;
                font-size: 16px;
                color: #555;
            }

            input[type="number"]::-webkit-inner-spin-button,
            input[type="number"]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            input[type="number"]::-webkit-inner-spin-button:after,
            input[type="number"]::-webkit-outer-spin-button:after {
                content: '\f067';
                font-family: "Font Awesome 5 Free";
                font-weight: 900;
                display: block;
                padding-left: 2px;
                color: #555;
            }

            input[type="number"]:invalid {
                background-color: #ffffff;
                border-color: #000000;
            }

            input[type="number"]:focus {
                outline: none;
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.6);
            }
        </style>
        <div class="pesan">
            <a href="<?php if(isset($_POST['submit'])){echo"Resi.php?id=".$id."&jumlah=".$_POST['jumlah'];} ?>" name="submit">Pesan</a>
        </div>
    </form>

</body>

</html>