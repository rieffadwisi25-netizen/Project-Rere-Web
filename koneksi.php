<?php
$host = "localhost";
$user = "root";       // Biasanya 'root' untuk Laragon
$pass = "";           // Biasanya kosong untuk Laragon
$db   = "rere_florist"; // Pastikan nama database ini SAMA PERSIS dengan di HeidiSQL

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>