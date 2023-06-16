<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Register_style.css">
    <title>TheEqurald</title>
    <link rel="icon" href="Login/Logo new.png">
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="" method="POST">
                <a href="#" class="logo"><img src="Login/Logo 2.png" width="139px" height="150px" alt="TheEqurald"></a>
                <h1>Let's get started</h1>
                <div class="input-username">
                    <input name="username" type="text" class="input" placeholder="Username">
                </div>
                <div class="input-email">
                    <input name="email" type="email" class="input" placeholder="Email Address">
                </div>
                <div class="input-password">
                    <input name="password" type="password" class="input" placeholder="Password">
                </div>
                <div class="input-no">
                    <input name="no_telp" type="text" class="input" placeholder="No-Telp">
                </div>
                <div class="forget">
                    <label for=""><input type="checkbox"> I Agree to the Terms of Service and Privacy Policy</label>
                </div>
                <button name="submit">Sign In</button>
                <div class="sign-up">
                    <label for="">Already have an account?</label>
                    <a href="login.php">Log In</a>
                </div>
                <?php

                if (isset($_POST['submit'])) {
                    include "connect.php";

                    $username = $_POST['username'];
                    $password = md5($_POST['password']);
                    $email = $_POST['email'];
                    $no_telp = $_POST['no_telp'];
                    $status = "active";
                    $status_admin = "inactive";

                    $sql = "INSERT INTO `user`(`id_user`, `email_user`, `username`, `password`, `no_telp`, `status`, `status_admin`) VALUES (NULL,'$email','$username','$password','$no_telp','$status','$status_admin')";
                    $result = mysqli_query($con,$sql);

                    if ($result){
                        // $_SESSION['id_user'] = $data['id_user']; 
                        // $_SESSION['username'] = $data['username'];
                        // $_SESSION['password'] = $data['password'];
                        // $_SESSION['status_admin'] = $data['status_admin'];
                    
                        header('location:landing_page.php');
                    }else{
                        echo "<script>
                                alert('Login Failed');
                                document.location = 'login.php';
                            </script>";
                    
                    }   
                }

                ?>
            </form>
            <div class="left">
                <img src="Login/Gambar 2.png" width="1100px" height="930px" alt="gambar">
            </div>
        </div>
    </div>
</body>

</html>