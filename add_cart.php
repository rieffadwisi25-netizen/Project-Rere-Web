<?php
session_start();

$produk = $_GET['produk'];

$_SESSION['cart'][] = $produk;

header("Location:index.php");
exit;
?>