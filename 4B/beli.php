<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require 'function.php';

$id_produk = $_GET['id'];

$query = $conn->query("SELECT * FROM cycle WHERE id='$id_produk'");
$row = $query->fetch_assoc();


if (isset($_SESSION['keranjang'][$id_produk])) {
    $_SESSION['keranjang'][$id_produk] += 1;
} else {
    $_SESSION['keranjang'][$id_produk] = 1;
}

// echo "<prev>";
// print_r($_SESSION);
// echo "</prev>";

echo "<script>alert('Produk telah masuk ke keranjang')</script>";
echo "<script>location='keranjang.php'</script>";
