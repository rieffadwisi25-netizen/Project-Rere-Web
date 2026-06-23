<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Profile Saya</title>

<style>

body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    background:linear-gradient(
        135deg,
        #f8f5f1,
        #efe4d7
    );
}

.profile-container{
    width:400px;
    margin:80px auto;
}

.profile-card{

    background:white;
    padding:40px;

    border-radius:25px;

    box-shadow:
    0 10px 30px rgba(0,0,0,.1);

    text-align:center;
}

.avatar{

    width:120px;
    height:120px;

    margin:auto;

    border-radius:50%;

    background:#b08d57;

    color:white;

    display:flex;
    align-items:center;
    justify-content:center;

    font-size:60px;
}

h1{
    color:#8c6a43;
}

.info{

    margin-top:25px;

    padding:15px;

    background:#f8f5f1;

    border-radius:15px;

    text-align:left;
}

.label{
    color:#888;
    font-size:14px;
}

.value{
    font-weight:600;
    margin-bottom:15px;
}

.btn{

    display:inline-block;

    margin-top:20px;

    padding:12px 25px;

    background:#b08d57;

    color:white;

    text-decoration:none;

    border-radius:30px;
}

.btn:hover{
    opacity:.9;
}

</style>

</head>
<body>

<div class="profile-container">

<div class="profile-card">

<div class="avatar">
👤
</div>

<h1>Profile Saya</h1>

<div class="info">

<div class="label">
Nama
</div>

<div class="value">
<?= $_SESSION['user']; ?>
</div>

<div class="label">
Email
</div>

<div class="value">
<?= $_SESSION['email'] ?? '-'; ?>
</div>

</div>

<a href="index.php" class="btn">
Kembali ke Beranda
</a>

<br>

<a
href="logout.php"
class="btn logout-btn"
onclick="return confirm('Yakin ingin logout dari akun ini?')">
Logout
</a>

</div>

</div>

</body>
</html>