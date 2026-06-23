<?php
session_start();

if(!isset($_SESSION['user'])){
    echo json_encode([
        "status"=>"gagal"
    ]);
    exit;
}
include 'koneksi.php';

// Ambil data POST
$nama_penerima = $_POST['nama_penerima'] ?? '';
$nomor_wa      = $_POST['nomor_wa'] ?? '';
$catatan       = $_POST['catatan'] ?? '';
$tanggal_kirim = $_POST['tanggal_kirim'] ?? '';
$total         = $_POST['total'] ?? 0;

// Gunakan Prepared Statement demi keamanan database
$stmt = mysqli_prepare($conn, "INSERT INTO pesanan (nama_penerima, nomor_wa, catatan, tanggal_kirim, total) VALUES (?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "ssssi", $nama_penerima, $nomor_wa, $catatan, $tanggal_kirim, $total);

if (mysqli_stmt_execute($stmt)) {
    echo json_encode(["status" => "success", "message" => "Data berhasil disimpan"]);
} else {
    echo json_encode(["status" => "error", "message" => mysqli_error($conn)]);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>