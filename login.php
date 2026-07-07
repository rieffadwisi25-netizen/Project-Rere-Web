<?php
session_start();
include 'koneksi.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Baris ini mencari ke kolom 'username' di database
    $query = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
    $data = mysqli_fetch_assoc($query);

    if($data){
        if($password == $data['password']){
            $_SESSION['user'] = $data['username'];
            $_SESSION['username'] = $data['username'];
            header("Location: index.php");
            exit;
        } else {
            echo "<script>alert('Password salah');</script>";
        }
    } else {
        echo "<script>alert('Username tidak ditemukan');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="POST">
    <h2>Login</h2>
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="login">Masuk</button>

</form>
</body>
</html>