<?php
include "koneksi.php";

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    mysqli_query($conn,"INSERT INTO user(username,email,password)
    VALUES('$username','$email','$password')");

    echo "<script>
    alert('Register berhasil');
    window.location='login.php';
    </script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<form method="POST">

<h2>Register</h2>

<input type="text" name="username" placeholder="Username" required>

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit" name="register">
Daftar
</button>

</form>

</body>
</html>