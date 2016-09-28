-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Sep 2016 pada 18.11
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
(1, 4, 'Admin Artshop', '085737343456', 'Jalan Ubung Kaje', NULL, '2016-08-27 16:25:55', NULL),
(2, 12, 'Admin bedebah', '123123', 'Jalan Raya Panjer', NULL, '2016-09-07 14:55:01', '2016-09-07 14:58:02');

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

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `label`, `created_at`, `updated_at`) VALUES
(1, 'Nackles', '2016-09-13 03:05:28', '2016-09-13 03:05:43'),
(2, 'Ring', '2016-09-13 03:05:35', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_order_member`
--

CREATE TABLE `detail_order_member` (
  `id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_detail` text,
  `product_image` text
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
(1, 1, 'Hendra Wijaya', 'Jalan Raya Pemogan No.18A', '08473737378', NULL, '80221', '2016-08-27 10:15:28', '2016-09-08 07:23:13'),
(2, 14, 'Member Wijaya', 'Jalan Wisnu Marga Belayu No 19', '082247464196', NULL, '82181', '2016-09-08 07:04:57', '2016-09-08 07:19:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_member`
--

CREATE TABLE `order_member` (
  `id` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip_code` char(5) DEFAULT NULL,
  `note` text,
  `payment` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 3, 'Pengerajin Test', '084737345345', 'Jalan Raya Selatan', 'a79a8e29c7f236414d432a11915c7b1a.png', '1', '2016-08-27 16:23:26', '2016-09-06 13:49:46'),
(2, 11, 'Pengerajin Tampan', '082247464196', 'Jalan Raya Panjer', '487a1e509490b8444b527a9489a30f5b.png', '1', '2016-09-06 13:43:55', '2016-09-06 13:43:55');

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
(1, 2, 'Petugas Toko', '08573474847', 'Jalan Nangka Utara', NULL, '2016-09-05 13:08:24', '2016-09-10 03:23:45'),
(2, 6, 'Petugas Wijaya', '082247464196', 'Jalan Wisnu Marga Belayu No 19', NULL, '2016-09-04 14:05:25', NULL),
(3, 7, 'Petugas Edukasi', '082247464196', 'Jalan Raya Panjer', NULL, '2016-09-04 14:06:14', NULL),
(4, 8, 'Ganda Edukasi', '23123123', 'Jalan P. Misol No.66', '20dd6b408bb425e6c9f0c5b5c6f9b844.png', '2016-09-04 14:20:58', NULL),
(5, 9, 'Ganda Edukasi', '123213123', 'Jalan P. Misol No.66', '43a33de6d628d12e109f8aa0840e37a4.jpg', '2016-09-04 14:24:22', NULL),
(6, 5, 'Ganda Edukasi', '123213123', 'Jalan P. Misol No.66', NULL, '2016-09-05 12:48:30', NULL),
(7, 1, 'Petugas Toko', '08573474847', 'Jalan Nangka Utara', '8784f0e82cb64250a2d05693fdab79d5.jpg', '2016-09-05 12:50:50', NULL),
(9, 10, 'Petugas Ganteng Berani', '082247464196', 'Jalan Wisnu Marga Belayu No 19', NULL, '2016-09-05 12:51:03', '2016-09-06 13:52:31'),
(10, 13, 'Member tetst', '082247464196', 'Jalan Wisnu Marga Belayu No 19', NULL, '2016-09-08 07:02:27', '2016-09-08 07:24:07');

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

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `categories_id`, `name`, `description`, `price`, `discount`, `isSale`, `isHot`, `isAvailable`, `created_at`, `updated_at`) VALUES
(1, 2, 'Gelang Sakti', 'Gelang paling sakti di muka bumi', 500000, 0, '1', '1', '1', '2016-09-13 08:20:42', '2016-09-14 05:25:55'),
(2, 1, 'Gendi Bedebah', 'Gendi yang memiliki kekuatan gaib', 1200000, 10, '0', '1', '1', '2016-09-24 03:28:06', NULL),
(3, 1, 'Kalung Sakti', 'Kalung paling saktu yang ada dimuka bumi', 4000000, 0, NULL, NULL, '1', '2016-09-24 07:58:28', '2016-09-24 07:59:34');

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

--
-- Dumping data untuk tabel `product_detail`
--

INSERT INTO `product_detail` (`id`, `product_id`, `label`, `value`, `created_at`, `updated_at`) VALUES
(6, 1, 'Color', 'Red', '2016-09-14 05:25:55', NULL),
(7, 1, 'Weight', '12 Kg', '2016-09-14 05:25:55', NULL),
(8, 1, 'Dimensions', '5cm x 5cm x 5cm', '2016-09-14 05:25:55', NULL),
(9, 2, 'Color', 'Hitam', '2016-09-24 03:28:06', NULL),
(10, 2, 'Weight', '12 kg', '2016-09-24 03:28:06', NULL),
(11, 2, 'Dimensions', '12m x 12m x 12m', '2016-09-24 03:28:06', NULL),
(12, 2, 'Size', '23', '2016-09-24 03:28:06', NULL),
(17, 3, 'Color', 'Red', '2016-09-24 07:59:34', NULL),
(18, 3, 'Weight', '2 kg', '2016-09-24 07:59:34', NULL),
(19, 3, 'Dimensions', '12 x 12', '2016-09-24 07:59:34', NULL),
(20, 3, 'Size', '33', '2016-09-24 07:59:34', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`) VALUES
(9, 2, '64a8e62b01b9b2fea81dc1167a28de19.png'),
(10, 2, 'b2ab392f0a21e8a6d0c5c7e71cc010b9.jpg'),
(11, 1, 'a45e953bf7dda64e68a4234f4b101bd0.jpg'),
(12, 1, 'd59080e48d10de7618a9a94f074f3306.jpg'),
(13, 3, 'e09db8965aa3c2a8a718da3a1f91e483.jpg'),
(14, 3, 'e44ca608dedce37cd1a6557c99e36fd0.jpg');

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
(1, 'member@gmail.com', '8ed358a7da3cc760364909d4aaf7321e', '1', '1', NULL, '2016-08-27 10:15:28', '2016-09-08 07:23:12'),
(2, 'petugas@mail.com', '563342b9879d30ae181d503c28b7f416', '1', '2', NULL, '2016-08-27 16:20:19', '2016-09-10 03:23:45'),
(3, 'pengerajin@mail.com', '8ed358a7da3cc760364909d4aaf7321e', '1', '3', NULL, '2016-08-27 16:21:56', '2016-09-06 13:49:46'),
(4, 'admin@mail.com', '0b77520f93de693bdab0060746e38165', '1', '4', NULL, '2016-08-27 16:25:43', NULL),
(5, 'petugas2@mail.com', '563342b9879d30ae181d503c28b7f416', '1', '2', NULL, '2016-09-04 13:47:53', NULL),
(6, 'wijaya@gmail.com', 'f7cc65e0c9b1b0c0822222e970663691', '1', '2', NULL, '2016-09-04 14:05:24', NULL),
(7, 'petugas1@gmail.com', '563342b9879d30ae181d503c28b7f416', '1', '2', NULL, '2016-09-04 14:06:14', NULL),
(8, 'zedukezy.id@gmail.com', '130811dbd239c97bd9ce933de7349f20', '1', '2', NULL, '2016-09-04 14:20:58', NULL),
(9, 'bedebah@aisdhashdj.com', '9da4185ea55998eb7846745fd0ced59e', '1', '2', NULL, '2016-09-04 14:24:22', NULL),
(10, 'xxx.imd@gmail.com', '8ed358a7da3cc760364909d4aaf7321e', '1', '2', NULL, '2016-09-06 13:34:59', '2016-09-06 13:52:31'),
(11, 'xxx.official@gmail.com', '8ed358a7da3cc760364909d4aaf7321e', '2', '2', NULL, '2016-09-06 13:36:29', '2016-09-06 13:43:55'),
(12, 'admin.official@gmail.com', '0b77520f93de693bdab0060746e38165', '2', '4', NULL, '2016-09-07 14:55:00', '2016-09-07 14:58:02'),
(13, 'member.imd@gmail.com', '8ed358a7da3cc760364909d4aaf7321e', '2', '2', NULL, '2016-09-08 07:02:27', '2016-09-08 07:24:07'),
(14, 'asdmember.imd@gmail.com', '8eba3e116533a6e2c3bde334f5e65ce7', '1', '1', NULL, '2016-09-08 07:04:57', '2016-09-08 07:19:16');

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
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengerajin`
--
ALTER TABLE `pengerajin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `petugas_toko`
--
ALTER TABLE `petugas_toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
