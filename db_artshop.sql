-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Sep 2016 pada 16.26
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_artshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `users_id`, `fullname`, `no_hp`, `alamat`, `photo`, `created_at`, `updated_at`) VALUES
(1, 4, 'Admin Artshop', '085737343456', 'Jalan Ubung Kaje', NULL, '2016-08-27 16:25:55', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `label` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `kode_pos` char(6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `users_id`, `fullname`, `alamat`, `no_hp`, `photo`, `kode_pos`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hendra Wijaya', 'Jalan Raya Pemogan No.18A', '08473737378', NULL, '80221', '2016-08-27 10:15:28', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengerajin`
--

CREATE TABLE `pengerajin` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `status` enum('0','1','3') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengerajin`
--

INSERT INTO `pengerajin` (`id`, `users_id`, `fullname`, `no_hp`, `alamat`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Pengerajin Test', '084737345345', 'Jalan Raya Selatan', NULL, '1', '2016-08-27 16:23:26', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas_toko`
--

CREATE TABLE `petugas_toko` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas_toko`
--

INSERT INTO `petugas_toko` (`id`, `users_id`, `fullname`, `no_hp`, `alamat`, `photo`, `created_at`, `updated_at`) VALUES
(1, 2, 'Petugas Toko', '08573474847', 'Jalan Nangka Utara', NULL, '2016-08-27 16:24:10', NULL),
(2, 6, 'Petugas Wijaya', '082247464196', 'Jalan Wisnu Marga Belayu No 19', NULL, '2016-09-04 14:05:25', NULL),
(3, 7, 'Petugas Edukasi', '082247464196', 'Jalan Raya Panjer', NULL, '2016-09-04 14:06:14', NULL),
(4, 8, 'Ganda Edukasi', '23123123', 'Jalan P. Misol No.66', '20dd6b408bb425e6c9f0c5b5c6f9b844.png', '2016-09-04 14:20:58', NULL),
(5, 9, 'Ganda Edukasi', '123213123', 'Jalan P. Misol No.66', '43a33de6d628d12e109f8aa0840e37a4.jpg', '2016-09-04 14:24:22', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `isSale` enum('0','1') DEFAULT '0',
  `isHot` enum('0','1') DEFAULT '0',
  `isAvailable` enum('0','1') DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_detail`
--

CREATE TABLE `product_detail` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `label` varchar(100) DEFAULT NULL,
  `value` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` enum('0','1','2') DEFAULT NULL,
  `type` enum('1','2','3','4') DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `status`, `type`, `token`, `created_at`, `updated_at`) VALUES
(1, 'member@gmail.com', '8eba3e116533a6e2c3bde334f5e65ce7', '1', '1', NULL, '2016-08-27 10:15:28', NULL),
(2, 'petugas@mail.com', '563342b9879d30ae181d503c28b7f416', '1', '2', NULL, '2016-08-27 16:20:19', NULL),
(3, 'pengerajin@mail.com', '538cb76330dbd380d7f81e1310a44a63', '1', '3', NULL, '2016-08-27 16:21:56', NULL),
(4, 'admin@mail.com', '0b77520f93de693bdab0060746e38165', '1', '4', NULL, '2016-08-27 16:25:43', NULL),
(5, 'petugas2@mail.com', '563342b9879d30ae181d503c28b7f416', '1', '2', NULL, '2016-09-04 13:47:53', NULL),
(6, 'wijaya@gmail.com', 'f7cc65e0c9b1b0c0822222e970663691', '1', '2', NULL, '2016-09-04 14:05:24', NULL),
(7, 'petugas1@gmail.com', '563342b9879d30ae181d503c28b7f416', '1', '2', NULL, '2016-09-04 14:06:14', NULL),
(8, 'zedukezy.id@gmail.com', '130811dbd239c97bd9ce933de7349f20', '1', '2', NULL, '2016-09-04 14:20:58', NULL),
(9, 'masdasd@aisdhashdj.com', '9da4185ea55998eb7846745fd0ced59e', '1', '2', NULL, '2016-09-04 14:24:22', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengerajin`
--
ALTER TABLE `pengerajin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas_toko`
--
ALTER TABLE `petugas_toko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengerajin`
--
ALTER TABLE `pengerajin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `petugas_toko`
--
ALTER TABLE `petugas_toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;