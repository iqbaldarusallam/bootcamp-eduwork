-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Okt 2025 pada 07.15
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
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `quantity`, `total`) VALUES
(1, 1, 1, 1, 8500000),
(2, 2, 2, 2, 7000000),
(3, 3, 3, 1, 950000),
(4, 4, 4, 3, 750000),
(5, 5, 5, 2, 1100000);

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
(1, 'Laptop ASUS VivoBook', 8500000, 'Laptop ringan untuk kerja dan kuliah', 20),
(2, 'Smartphone Samsung A15', 3500000, 'HP Android dengan kamera 50MP', 35),
(3, 'Headset Logitech G335', 950000, 'Headset gaming ringan dan nyaman', 50),
(4, 'Mouse Wireless Logitech M331', 250000, 'Mouse wireless hemat baterai', 60),
(5, 'Keyboard Mechanical Rexus', 550000, 'Keyboard mechanical RGB', 40);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Andi Pratama', 'andi@example.com', 'password123'),
(2, 'Budi Santoso', 'budi@example.com', 'budi456'),
(3, 'Citra Dewi', 'citra@example.com', 'citra789'),
(4, 'Doni Saputra', 'doni@example.com', 'doni321'),
(5, 'Eka Lestari', 'eka@example.com', 'eka654');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- ============================================================
-- CRUD QUERY UNTUK TABEL PRODUCTS
-- ============================================================

-- CREATE (Menambah data produk)
INSERT INTO products (nama_produk, harga, deskripsi, stok) VALUES
('Monitor LG 24 Inch', 1850000, 'Monitor LED Full HD', 25),
('Printer Canon G3010', 2100000, 'Printer multifungsi wireless', 15),
('SSD Samsung 1TB', 1500000, 'SSD cepat untuk PC dan laptop', 30),
('Flashdisk Sandisk 64GB', 120000, 'USB 3.0 kecepatan tinggi', 80),
('Webcam Logitech C270', 450000, 'Kamera webcam HD untuk meeting', 40);

-- READ (Menampilkan data produk)
SELECT * FROM products;
SELECT * FROM products WHERE id = 3;
SELECT * FROM products WHERE nama_produk LIKE '%Logitech%';

-- UPDATE (Mengubah data produk)
UPDATE products
SET nama_produk = 'SSD Samsung 1TB EVO',
    harga = 1550000,
    deskripsi = 'SSD performa tinggi generasi terbaru',
    stok = 28
WHERE id = 3;

UPDATE products SET stok = stok + 10 WHERE id = 1;

-- DELETE (Menghapus produk)
DELETE FROM products WHERE id = 5;
DELETE FROM products WHERE stok = 0;

-- ============================================================
-- CRUD QUERY UNTUK TABEL USERS
-- ============================================================

-- CREATE
INSERT INTO users (nama, email, password)
VALUES ('Farhan Yusuf', 'farhan@example.com', 'farhan123');

-- READ
SELECT * FROM users;

-- UPDATE
UPDATE users SET password = 'newpass999' WHERE id = 3;

-- DELETE
DELETE FROM users WHERE id = 5;

-- ============================================================
-- CRUD QUERY UNTUK TABEL ORDERS
-- ============================================================

-- CREATE
INSERT INTO orders (user_id, product_id, quantity, total)
VALUES (1, 2, 1, 3500000);

-- READ (menampilkan data pesanan lengkap dengan relasi)
SELECT o.order_id, u.nama AS nama_user, p.nama_produk, o.quantity, o.total
FROM orders o
JOIN users u ON o.user_id = u.id
JOIN products p ON o.product_id = p.id;

-- UPDATE
UPDATE orders
SET quantity = 2, total = 7000000
WHERE order_id = 1;

-- DELETE
DELETE FROM orders WHERE order_id = 5;

-- ============================================================
-- CEK RELASI ANTAR TABEL
-- ============================================================

SELECT 
  o.order_id,
  u.nama AS nama_pelanggan,
  p.nama_produk,
  o.quantity,
  o.total
FROM orders o
JOIN users u ON o.user_id = u.id
JOIN products p ON o.product_id = p.id;