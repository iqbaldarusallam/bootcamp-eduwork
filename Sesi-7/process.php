<?php
include 'config.php';

function validateNumber($value) {
    return is_numeric($value) && $value >= 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($_POST['id'])) {
    $nama_produk = trim($_POST['nama_produk']);
    $harga = $_POST['harga'];
    $deskripsi = trim($_POST['deskripsi']);
    $stok = $_POST['stok'];

    if ($nama_produk === '' || $deskripsi === '' || !validateNumber($harga) || !validateNumber($stok)) {
        echo "<script>alert('Semua field harus diisi, harga & stok >= 0, dan deskripsi tidak boleh kosong'); window.location='index.php';</script>";
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO products (nama_produk, harga, deskripsi, stok) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sisi", $nama_produk, $harga, $deskripsi, $stok);
    $stmt->execute();

    header("Location: index.php");
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']) && $_POST['id'] !== '') {
    $id = $_POST['id'];
    $nama_produk = trim($_POST['nama_produk']);
    $harga = $_POST['harga'];
    $deskripsi = trim($_POST['deskripsi']);
    $stok = $_POST['stok'];

    if ($nama_produk === '' || $deskripsi === '' || !validateNumber($harga) || !validateNumber($stok)) {
        echo "<script>alert('Validasi gagal! Semua field wajib diisi.'); window.location='index.php';</script>";
        exit;
    }

    $stmt = $conn->prepare("UPDATE products SET nama_produk=?, harga=?, deskripsi=?, stok=? WHERE id=?");
    $stmt->bind_param("sisii", $nama_produk, $harga, $deskripsi, $stok, $id);
    $stmt->execute();

    header("Location: index.php");
    exit;
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $stmt = $conn->prepare("DELETE FROM products WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    header("Location: index.php");
    exit;
}
?>
