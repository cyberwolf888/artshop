-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Okt 2016 pada 14.17
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
(1, 4, 'Admin Artshop', '085737343456', 'Jalan Ubung Kaje', 'a6d099ad78f52ba7dfa3fbeaf88a9eca.png', '2016-08-27 16:25:55', '2016-10-09 02:17:52'),
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
(1, ' Key Chain', '2016-09-13 03:05:28', '2016-10-15 10:15:11'),
(2, 'Decoration', '2016-09-13 03:05:35', '2016-10-15 10:15:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_order_member`
--

CREATE TABLE `detail_order_member` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_order_member`
--

INSERT INTO `detail_order_member` (`id`, `order_id`, `product_id`, `qty`, `product_name`, `product_price`) VALUES
(1, 1, 2, 3, 'Gendi Bedebah', 1080000),
(2, 2, 2, 3, 'Gendi Bedebah', 1080000),
(3, 3, 1, 1, 'Gelang Sakti', 500000),
(4, 3, 2, 1, 'Gendi Bedebah', 1080000),
(5, 4, 2, 3, 'Gendi Bedebah', 1080000),
(6, 5, 2, 2, 'Gendi Bedebah', 1080000),
(7, 6, 2, 2, 'Gendi Bedebah', 1080000),
(8, 6, 1, 1, 'Gelang Sakti', 500000),
(9, 1, 1, 1, 'Natal Tree', 500000),
(10, 1, 4, 1, 'Lonceng Owl', 120000),
(11, 1, 2, 3, 'Welcome Sign Bird', 450000);

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
(1, 1, 'Hendra Wijaya Ajuzz', 'Jalan Raya Pemogan No.18A', '08473737378', 'ecf02885fd97367f4f48fdf7b6f7dfde.jpg', '80221', '2016-08-27 10:15:28', '2016-10-09 02:07:13'),
(2, 14, 'Member Wijaya', 'Jalan Wisnu Marga Belayu No 19', '082247464196', NULL, '82181', '2016-09-08 07:04:57', '2016-09-08 07:19:16'),
(3, 15, 'Omi Putra', 'Jalan Raya Ubub', '084736373628', NULL, '82181', '2016-10-15 09:49:22', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_member`
--

CREATE TABLE `order_member` (
  `id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `no_hp` varchar(12) NOT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip_code` char(5) DEFAULT NULL,
  `note` text,
  `payment` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `payment_status` int(11) NOT NULL,
  `token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order_member`
--

INSERT INTO `order_member` (`id`, `member_id`, `address`, `fullname`, `no_hp`, `state`, `zip_code`, `note`, `payment`, `total`, `status`, `payment_status`, `token`, `created_at`) VALUES
(1, 3, 'Jalan Raya Ubub', 'Omi Putra', '084736373628', 'Bali', '82181', 'tolong proses dengan cepat', 1, 1970000, 5, 1, 'FyTbw8Vi', '2016-10-15 10:38:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_pengerajin`
--

CREATE TABLE `order_pengerajin` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `pengerajin_id` int(11) NOT NULL,
  `payment_status` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order_pengerajin`
--

INSERT INTO `order_pengerajin` (`id`, `order_id`, `pengerajin_id`, `payment_status`, `created_at`) VALUES
(1, 1, 1, 1, '2016-10-15 10:39:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `type` int(2) NOT NULL,
  `note` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `payment`
--

INSERT INTO `payment` (`id`, `order_id`, `member_id`, `image`, `status`, `type`, `note`, `created_at`) VALUES
(1, 1, 3, '5e3c3941fec33418d329ff603e8cc04c.jpg', 2, 1, 'tolong dicek segera', '2016-10-15 10:38:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment_pengerajin`
--

CREATE TABLE `payment_pengerajin` (
  `id` int(11) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `pengerajin_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT '',
  `status` int(11) NOT NULL,
  `note` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `payment_pengerajin`
--

INSERT INTO `payment_pengerajin` (`id`, `order_id`, `pengerajin_id`, `image`, `status`, `note`, `created_at`) VALUES
(1, 1, 1, '309f0f87d13d7b11b75360957062e7c9.jpg', 2, NULL, '2016-10-15 10:41:53');

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
(1, 3, 'Gede Sudana', '084737345345', 'Jalan Raya Selatan', 'b61602bd7e30ea859db9a0d95124e77d.png', '1', '2016-08-27 16:23:26', '2016-10-15 10:40:21'),
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
(1, 2, 'Petugas Toko', '08573474847', 'Jalan Nangka Utara', 'd8f300954ac8b89aeaf58bbcc258203a.png', '2016-09-05 13:08:24', '2016-10-09 02:24:46'),
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
(1, 2, 'Natal Tree', 'Awesome natal tree for your home', 500000, 0, '1', '1', '1', '2016-09-13 08:20:42', '2016-10-15 10:20:37'),
(2, 1, 'Welcome Sign Bird', 'Nicelook welcome sign', 500000, 10, NULL, '1', '1', '2016-09-24 03:28:06', '2016-10-15 10:37:27'),
(3, 1, 'Lonceng Bird', 'Great look lonceng', 300000, 0, '1', '1', '1', '2016-09-24 07:58:28', '2016-10-15 10:37:18'),
(4, 1, 'Lonceng Owl', 'nice owl lonceng for wesome people', 120000, 0, NULL, '1', '1', '2016-10-15 10:22:12', NULL);

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
(33, 1, 'Color', 'Green', '2016-10-15 10:20:37', NULL),
(34, 1, 'Weight', '5 Kg', '2016-10-15 10:20:37', NULL),
(35, 1, 'Dimensions', '5cm x 5cm x 5cm', '2016-10-15 10:20:37', NULL),
(36, 4, 'Color', 'Brown', '2016-10-15 10:22:12', NULL),
(37, 4, 'Weight', '300 g', '2016-10-15 10:22:12', NULL),
(38, 4, 'Dimensions', '5cm x 5 cm', '2016-10-15 10:22:12', NULL),
(39, 3, 'Color', 'Red', '2016-10-15 10:37:18', NULL),
(40, 3, 'Weight', '1 kg', '2016-10-15 10:37:18', NULL),
(41, 3, 'Dimensions', '12 x 12', '2016-10-15 10:37:18', NULL),
(42, 3, 'Size', '33', '2016-10-15 10:37:18', NULL),
(43, 2, 'Color', 'Hitam', '2016-10-15 10:37:27', NULL),
(44, 2, 'Weight', '1 kg', '2016-10-15 10:37:27', NULL),
(45, 2, 'Dimensions', '12m x 12m x 12m', '2016-10-15 10:37:27', NULL),
(46, 2, 'Size', '23', '2016-10-15 10:37:27', NULL);

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
(15, 2, '62262078912d45d5fb31de4209d8824b.jpg'),
(16, 2, 'aaabfc0d0fd11041e769861b86c171a6.jpg'),
(17, 3, '887b503c71acd85c1ab3fccb2c434ffd.jpg'),
(18, 3, 'fc9c2d806f363740f8a7ef7203c2bb18.jpg'),
(19, 1, 'd2045a10c2fe97d4043050125c59cad1.jpg'),
(20, 1, '17bb664d6672a92b8a65c4067ae1d53c.jpg'),
(21, 4, '221bbbd2f9ad0fbbd938386f49afb60f.jpg');

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
(1, 'member@gmail.com', '8eba3e116533a6e2c3bde334f5e65ce7', '1', '1', NULL, '2016-08-27 10:15:28', '2016-10-09 02:07:13'),
(2, 'petugas@mail.com', '563342b9879d30ae181d503c28b7f416', '1', '2', NULL, '2016-08-27 16:20:19', '2016-10-09 02:24:46'),
(3, 'pengerajin@mail.com', '538cb76330dbd380d7f81e1310a44a63', '1', '3', NULL, '2016-08-27 16:21:56', '2016-10-15 10:40:21'),
(4, 'admin@mail.com', '0b77520f93de693bdab0060746e38165', '1', '4', NULL, '2016-08-27 16:25:43', '2016-10-09 02:17:52'),
(5, 'petugas2@mail.com', '563342b9879d30ae181d503c28b7f416', '1', '2', NULL, '2016-09-04 13:47:53', NULL),
(6, 'wijaya@gmail.com', 'f7cc65e0c9b1b0c0822222e970663691', '1', '2', NULL, '2016-09-04 14:05:24', NULL),
(7, 'petugas1@gmail.com', '563342b9879d30ae181d503c28b7f416', '1', '2', NULL, '2016-09-04 14:06:14', NULL),
(8, 'zedukezy.id@gmail.com', '130811dbd239c97bd9ce933de7349f20', '1', '2', NULL, '2016-09-04 14:20:58', NULL),
(9, 'bedebah@aisdhashdj.com', '9da4185ea55998eb7846745fd0ced59e', '1', '2', NULL, '2016-09-04 14:24:22', NULL),
(10, 'xxx.imd@gmail.com', '8ed358a7da3cc760364909d4aaf7321e', '1', '2', NULL, '2016-09-06 13:34:59', '2016-09-06 13:52:31'),
(11, 'xxx.official@gmail.com', '8ed358a7da3cc760364909d4aaf7321e', '2', '2', NULL, '2016-09-06 13:36:29', '2016-09-06 13:43:55'),
(12, 'admin.official@gmail.com', '0b77520f93de693bdab0060746e38165', '2', '4', NULL, '2016-09-07 14:55:00', '2016-09-07 14:58:02'),
(13, 'member.imd@gmail.com', '8ed358a7da3cc760364909d4aaf7321e', '2', '2', NULL, '2016-09-08 07:02:27', '2016-09-08 07:24:07'),
(14, 'asdmember.imd@gmail.com', '8eba3e116533a6e2c3bde334f5e65ce7', '1', '1', NULL, '2016-09-08 07:04:57', '2016-09-08 07:19:16'),
(15, 'omi@gmail.com', '1c0cae3cc9870496e66e3d011656630a', '1', '1', NULL, '2016-10-15 09:49:22', NULL);

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
-- Indexes for table `detail_order_member`
--
ALTER TABLE `detail_order_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_member`
--
ALTER TABLE `order_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_pengerajin`
--
ALTER TABLE `order_pengerajin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_pengerajin`
--
ALTER TABLE `payment_pengerajin`
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
-- AUTO_INCREMENT for table `detail_order_member`
--
ALTER TABLE `detail_order_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order_member`
--
ALTER TABLE `order_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `order_pengerajin`
--
ALTER TABLE `order_pengerajin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `payment_pengerajin`
--
ALTER TABLE `payment_pengerajin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
