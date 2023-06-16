
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login style.css">
    <title>TheEqurald</title>
    <link rel="icon" href="Login/Logo new.png">
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="cek_login.php" method="POST">
                <a href="#" class="logo"><img src="Login/Logo 2.png" width= "139px"
                    height= "150px" alt="TheEqurald"></a>
                <h1>Welcome Back</h1>
                 <div class="input-email">
                <input name="username" type="text" class="input" placeholder="Username">
                </div>
                <div class="input-password">
                <input name="password" type="password" class="input" placeholder="Password">
                 </div>
                <div class="forget">
                    <label for=""><input type="checkbox">Keep me logged in</label>
                    <a href="#" class="service">Forgot password?</a>
                </div>
                <button>Log In</button>
                <div class="sign-up">
                    <label for="">Don't have an account?</label>
                    <a href="Register_Page.php">Sign Up</a>
                </div>
            </form>
            <div class="left">
                <img src="Login/Gambar.png" width= "1100px"
                height= "930px" alt="gambar">
            </div>
        </div>
    </div>
</body>
</html>