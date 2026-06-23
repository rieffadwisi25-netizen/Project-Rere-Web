<?php
session_start();
include 'koneksi.php';

if(isset($_SESSION['user'])){
    header("Location: index.php");
    exit;
}

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($conn,
    "SELECT * FROM user WHERE email='$email'");

    $data = mysqli_fetch_assoc($query);

    if($data){

        if($password == $data['password']){

            $_SESSION['user'] = $data['nama'];
            $_SESSION['email'] = $data['email'];

            header("Location: index.php");
            exit;

        }else{
            echo "<script>alert('Password salah');</script>";
        }

    }else{
        echo "<script>alert('Email tidak ditemukan');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Rere Florist</title>

<style>
body{
    font-family:Arial,sans-serif;
    background:#f8f5f1;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.login-box{
    background:white;
    padding:40px;
    width:350px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,.1);
}

h2{
    text-align:center;
    color:#b08d57;
}

input{
    width:100%;
    padding:12px;
    margin:10px 0;
}

button{
    width:100%;
    padding:12px;
    background:#b08d57;
    color:white;
    border:none;
    border-radius:10px;
}
</style>
</head>

<body>

<div class="login-box">

<h2>Login</h2>

<form method="POST">

<input type="email" name="email"
placeholder="Email" required>

<input type="password" name="password"
placeholder="Password" required>

<button name="login">
Masuk
</button>

</form>

</div>

</body>
</html>