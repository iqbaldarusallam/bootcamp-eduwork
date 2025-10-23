-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Okt 2025 pada 03.05
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bootcamp-sesi6`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `nama_produk`, `harga`, `deskripsi`, `stok`) VALUES
(1, 'Laptop Asus', 15000000, 'Laptop gaming 16GB RAM', 10),
(2, 'Smartphone Samsung', 8000000, 'Smartphone Android 8GB RAM', 20),
(3, 'Keyboard Mechanical', 1200000, 'Keyboard RGB', 50),
(4, 'Mouse Wireless', 500000, 'Mouse ergonomis', 40),
(5, 'Headset Gaming', 900000, 'Headset dengan mic', 30);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



 -- ========================================
-- CRUD untuk tabel `products`
-- ========================================

-- ========================================
-- 1. CREATE – Menambahkan produk baru
-- ========================================
INSERT INTO products (nama_produk, harga, deskripsi, stok) VALUES
('Tablet Samsung', 5000000, 'Tablet Android 10 inch', 15);

-- ========================================
-- 2. READ – Membaca data produk
-- ========================================

-- a. Menampilkan semua produk
SELECT * FROM products;

-- b. Menampilkan produk berdasarkan ID
SELECT * FROM products
WHERE id = 1;

-- c. Menampilkan produk berdasarkan nama (search)
SELECT * FROM products
WHERE nama_produk LIKE '%Laptop%';

-- ========================================
-- 3. UPDATE – Mengubah data produk
-- ========================================
UPDATE products
SET harga = 5200000, stok = 20
WHERE id = 2;

-- ========================================
-- 4. DELETE – Menghapus data produk
-- ========================================
DELETE FROM products
WHERE id = 5;

-- ========================================
-- Dummy data tambahan sebagai contoh
-- ========================================
INSERT INTO products (nama_produk, harga, deskripsi, stok) VALUES
('Monitor LG', 2500000, 'Monitor 24 inch Full HD', 25),
('Printer Canon', 1800000, 'Printer inkjet', 15),
('Speaker Bluetooth', 750000, 'Speaker portabel', 30),
('Webcam Logitech', 600000, 'Webcam HD 1080p', 20),
('Flashdisk 32GB', 120000, 'Flashdisk USB 3.0', 50);
