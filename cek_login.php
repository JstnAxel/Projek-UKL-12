<?php

session_start();

include "connect.php";

@$username = mysqli_escape_string($con, $_POST['username']);
@$pass = md5($_POST['password']);
@$password = mysqli_escape_string($con, $pass);

$sql_login = "SELECT * FROM user where username = '$username' and password = '$password' and status = 'active'";
$login = mysqli_query($con, $sql_login);

$data = mysqli_fetch_array($login);

if ($data){
    $_SESSION['id_user'] = $data['id_user']; 
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['status_admin'] = $data['status_admin'];

    header('location:Profil.php');
}else{
    echo "<script>
            alert('Login Failed, check username and password');
            document.location = 'login.php';
        </script>";

}
?>

