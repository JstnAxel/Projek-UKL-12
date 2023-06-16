<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheEqurald</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="landing/Logo new.png">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container nav-wrapper">
                <a href="#artikel" class="logo"><img src="landing/Logo new.png" alt="TheEqurald">
                    <div class="logo-word">TheEqurald</div>
                </a>
                <div class="menu-wrapper">
                    <ul class="menu">
                        <li class="menu-item"><a href="#" class="menu-link">Home</a></li>
                        <li class="menu-item"><a href="#untung" class="menu-link">About Us</a></li>
                        <li class="menu-item"><a href="Event Page.php" class="menu-link">Event</a></li>
                    </ul>
                    <form action="sudahlogin.php" method="get">
                    <a href="Profil.php" class="account"><img src="landing/Account.png" alt="akun"></a>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <div class="right">
        <img src="landing/Tulisan.png" class="quotes" alt="">
        <a href="#artikel" class="button"><img src="landing/Start Button.png" alt=""></a>
        <img src="landing/new walpaper.png" width="1635px" height="917px" alt="">
    </div>
    <div class="search">
        <h2>Destination</h2>
        <input type="text" placeholder="Tujuan">
        <a href="#" class="button"><img src="landing/Tombol.png" alt=""></a>
    </div>
    <div class="judul-explore" id="artikel"><img src="landing/Judul explore.png" alt=""></div>
    <div class="site-container">
        <div class="article-container">
            <a href="Data_page.php?id=1">
                <article class="article-card">
                    <figure class="article-image">
                        <img src="landing/LB.png" alt="labuan_bajo" />
                    </figure>
                    <div class="article-content">
                        <h3 class="card-title">Open Trip 3H2M Labuan Bajo, NTT</h3>
                        <p class="card-price">IDR 2.500.000</p>
                    </div>
                </article>
            </a>

            <a href="Data_page.php?id=2">
                <article class="article-card">
                    <figure class="article-image">
                        <img src="landing/RA.png" alt="raja_ampat" />
                    </figure>
                    <div class="article-content">
                        <h3 class="card-title">Open Trip 3H2M Raja Ampat, Papua</h3>
                        <p class="card-price">IDR 4.000.000</p>
                    </div>
                </article>
            </a>

            <a href="Data_page.php?id=3">
                <article class="article-card">
                    <figure class="article-image">
                        <img src="landing/PC.png" alt="pulo_cinta" />
                    </figure>
                    <div class="article-content">
                        <h3 class="card-title">Open Trip 3H2M Pulo Cinta, Sulawesi</h3>
                        <p class="card-price">IDR 3.500.000</p>
                    </div>
                </article>
            </a>
            <a href="Data_page.php?id=4">
                <article class="article-card">
                    <figure class="article-image">
                        <img src="landing/KK.png" alt="Kepulauan_KEI" />
                    </figure>
                    <div class="article-content">
                        <h3 class="card-title">Open Trip 3H2M Kepulauan Kei, Maluku</h3>
                        <p class="card-price">IDR 2.500.000</p>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="kelebihan">
        <img src="landing/newkelebihan.png" class="tulisan" alt="">
        <img src="landing/download.gif" class="gif" alt="" id="untung">
    </div>
</body>

</html>