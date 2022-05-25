-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 20, 2021 at 08:25 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inipaket`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'kelola data semua user'),
(2, 'user', 'melihat data order');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '127.0.0.1', 'inipaket@gmail.com', 1, '2021-10-17 09:48:38', 1),
(2, '127.0.0.1', 'inipaket@gmail.com', 1, '2021-10-17 10:25:48', 1),
(3, '127.0.0.1', 'inipaket@gmail.com', 1, '2021-10-17 10:29:29', 1),
(4, '127.0.0.1', 'remajahunter4@gmail.com', 2, '2021-10-17 10:31:21', 1),
(5, '127.0.0.1', 'inipaket@gmail.com', 1, '2021-10-17 11:12:04', 1),
(6, '127.0.0.1', 'remajahunter4@gmail.com', 2, '2021-10-17 11:12:23', 1),
(7, '127.0.0.1', 'inipaket@gmail.com', 1, '2021-10-19 05:57:56', 1),
(8, '127.0.0.1', 'remajahunter4@gmail.com', 2, '2021-10-19 06:02:24', 1),
(9, '127.0.0.1', 'inipaket', NULL, '2021-10-19 06:04:20', 0),
(10, '127.0.0.1', 'inipaket@gmail.com', 1, '2021-10-19 06:04:31', 1),
(11, '127.0.0.1', 'subhan', NULL, '2021-10-19 06:05:36', 0),
(12, '127.0.0.1', 'remajahunter4@gmail.com', 2, '2021-10-19 06:05:47', 1),
(13, '127.0.0.1', 'inipaket@gmail.com', 1, '2021-10-19 06:12:07', 1),
(14, '127.0.0.1', 'remajahunter4@gmail.com', 2, '2021-10-19 06:14:41', 1),
(15, '127.0.0.1', 'remajahunter4@gmail.com', 2, '2021-10-19 06:51:05', 1),
(16, '127.0.0.1', 'remajahunter4@gmail.com', 2, '2021-10-19 06:52:41', 1),
(17, '127.0.0.1', 'ipaketcompany@gmail.com', 1, '2021-10-19 06:54:19', 1),
(18, '127.0.0.1', 'remajahunter4@gmail.com', 2, '2021-10-19 06:59:16', 1),
(19, '127.0.0.1', 'ipaketcompany@gmail.com', 1, '2021-10-19 06:59:54', 1),
(20, '127.0.0.1', 'remajahunter4@gmail.com', 2, '2021-10-19 07:09:50', 1),
(21, '127.0.0.1', 'ipaketcompany@gmail.com', 1, '2021-10-19 07:11:15', 1),
(22, '127.0.0.1', 'ipaketcompany@gmail.com', 1, '2021-10-19 07:11:15', 1),
(23, '127.0.0.1', 'remajahunter4@gmail.com', 2, '2021-10-19 07:11:31', 1),
(24, '127.0.0.1', 'remajahunter4@gmail.com', 2, '2021-10-19 07:47:19', 1),
(25, '127.0.0.1', 'ipaketcompany@gmail.com', 1, '2021-10-19 13:36:20', 1),
(26, '127.0.0.1', 'ipaket.company@gmail.com', NULL, '2021-10-19 18:15:10', 0),
(27, '127.0.0.1', 'ipaketcompany@gmail.com', 1, '2021-10-19 18:15:21', 1),
(28, '127.0.0.1', 'ipaketcompany@gmail.com', 1, '2021-10-19 19:00:37', 1),
(29, '127.0.0.1', 'remajahunter4@gmail.com', 2, '2021-10-19 20:15:45', 1),
(30, '127.0.0.1', 'ipaketcompany@gmail.com', 1, '2021-10-19 20:41:15', 1),
(31, '127.0.0.1', 'remajahunter4@gmail.com', 2, '2021-10-19 20:42:28', 1),
(32, '127.0.0.1', 'ipaketcompany@gmail.com', 1, '2021-10-19 21:03:06', 1),
(33, '127.0.0.1', 'remajahunter4@gmail.com', 2, '2021-10-19 21:03:37', 1),
(34, '127.0.0.1', 'remajahunter4@gmail.com', 2, '2021-10-19 21:04:19', 1),
(35, '127.0.0.1', 'subhan', NULL, '2021-10-19 21:10:17', 0),
(36, '127.0.0.1', 'remajahunter4@gmail.com', 2, '2021-10-19 21:10:27', 1),
(37, '127.0.0.1', 'ipaketcompany@gmail.com', 1, '2021-10-19 21:10:54', 1),
(38, '127.0.0.1', 'remajahunter4@gmail.com', 2, '2021-10-19 21:15:42', 1),
(39, '127.0.0.1', 'remajahunter4@gmail.com', 2, '2021-10-19 21:19:59', 1),
(40, '127.0.0.1', 'subhan', NULL, '2021-10-20 08:12:44', 0),
(41, '127.0.0.1', 'remajahunter4@gmail.com', 2, '2021-10-20 08:12:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1634438678, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_informasi`
--

CREATE TABLE `tbl_informasi` (
  `id` int(11) NOT NULL,
  `pengertian` varchar(255) NOT NULL,
  `jam_kerja` varchar(255) NOT NULL,
  `paket_reguler` varchar(255) NOT NULL,
  `paket_cepat` varchar(255) NOT NULL,
  `paket_kilat` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_informasi`
--

INSERT INTO `tbl_informasi` (`id`, `pengertian`, `jam_kerja`, `paket_reguler`, `paket_cepat`, `paket_kilat`, `harga`) VALUES
(1, 'Ipaket adalah project startup yang bergerak dibidang jasa Pengiriman Barang   ', 'Terbuka setiap hari mulai dari jam 08.00 - 11.30 lewat dari jam kerja maka paket akan diantar esok hari ', 'Kecepatan pengiriman 2-7 hari jangkauan terbatas garansi barang demi keamanan  ', 'Kecepatan pengiriman 2-5 hari jangkauan seluruh Indonesia garansi barang demi keamanan ', 'Kecepatan pengiriman 2-3 hari jangkauan seluruh Indonesia garansi barang demi keamanan  ', 'Harga akan menyesuaikan dengan berat paket yang dikirim dan jenis paket yang dipilih ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `nama_order` varchar(255) NOT NULL,
  `email_pengorder` varchar(255) NOT NULL,
  `nohp_pengorder` varchar(13) NOT NULL,
  `berat_barang` varchar(3) NOT NULL,
  `jenis_paket` varchar(255) NOT NULL,
  `nama_penerima` varchar(255) NOT NULL,
  `email_penerima` varchar(255) NOT NULL,
  `nohp_penerima` varchar(13) NOT NULL,
  `alamat_penerima` varchar(1000) NOT NULL,
  `tanggal_order` datetime DEFAULT NULL,
  `kode_barang` varchar(15) NOT NULL,
  `status_pengiriman` varchar(100) NOT NULL DEFAULT 'Sedang disiapkan'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `nama_order`, `email_pengorder`, `nohp_pengorder`, `berat_barang`, `jenis_paket`, `nama_penerima`, `email_penerima`, `nohp_penerima`, `alamat_penerima`, `tanggal_order`, `kode_barang`, `status_pengiriman`) VALUES
(1, 'Subhan Fadilah', 'remajahunter4@gmail.com', '08999098812', '1kg', 'Paket Kilat', 'Salman Alfarizi', 'salmanalfariz@gmail.com', '085225218341', 'Jl. Rusak Lingkungan Lapang Bola Rt. 32 Rw. 12 Kota Banjar - Jawa Barat', '2021-10-19 21:12:49', 'ipaket191001', 'Sedang disiapkan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.png',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ipaketcompany@gmail.com', 'inipaketofficial', 'default.png', '$2y$10$8Q8AVxhjWw.q/ba3Q4laH.KrN579Cdhlk9fQxrboTJ9uXhlU5dgHS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-10-17 09:48:02', '2021-10-17 09:48:02', NULL),
(2, 'remajahunter4@gmail.com', 'subhan', 'default.png', '$2y$10$HEptcUdt1JrvpzRs1EDUoet1eC1lGwpkxrPanerZcO4ulTPse4uqu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-10-17 10:31:12', '2021-10-17 10:31:12', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
