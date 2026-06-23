<?php
include 'koneksi.php';

if(isset($_POST['register'])){

    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $password =
    password_hash($_POST['password'],
    PASSWORD_DEFAULT);

    mysqli_query($conn,
    "INSERT INTO user(nama,email,password)
    VALUES('$nama','$email','$password')");

    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
</head>

<body>

<form method="POST">

<input type="text"
name="nama"
placeholder="Nama">

<input type="email"
name="email"
placeholder="Email">

<input type="password"
name="password"
placeholder="Password">

<button name="register">
Daftar
</button>

</form>

</body>
</html>