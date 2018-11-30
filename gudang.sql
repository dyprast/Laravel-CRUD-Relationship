-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 30, 2018 at 08:09 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gudang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `gudang_id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `gudang_id`, `nama`, `berat`, `created_at`, `updated_at`) VALUES
(5, 11, '30 Box Pepsodent', 20, '2018-11-29 16:48:26', '2018-11-29 17:00:38'),
(6, 12, '10 Box AQUA', 30, '2018-11-29 17:00:09', '2018-11-29 17:00:09'),
(7, 13, '50 Box Indomie', 30, '2018-11-29 17:00:57', '2018-11-29 17:00:57'),
(8, 15, '30 Box Pampers', 10, '2018-11-29 17:03:17', '2018-11-29 17:03:17'),
(9, 12, '50 Box Hansaplast', 30, '2018-11-29 17:07:36', '2018-11-29 17:07:36'),
(10, 15, '100 Box Pylox', 50, '2018-11-29 17:08:30', '2018-11-29 17:08:30'),
(11, 11, '20 Box Baygon', 30, '2018-11-29 17:09:43', '2018-11-29 17:09:43'),
(12, 14, '50 Box Chiki', 20, '2018-11-29 17:11:41', '2018-11-29 17:11:41'),
(13, 14, '30 Box Sepatu Keds', 40, '2018-11-29 17:12:06', '2018-11-29 17:12:06'),
(14, 13, '10 Box Stabillo', 5, '2018-11-29 17:15:33', '2018-11-29 17:15:33'),
(15, 15, '10 Box Ciptadent', 8, '2018-11-29 17:16:03', '2018-11-29 17:16:03'),
(16, 12, '20 Box AQUA', 30, '2018-11-29 17:16:18', '2018-11-29 17:16:18'),
(17, 12, '10 Box Baygon', 10, '2018-11-29 17:16:36', '2018-11-29 17:16:36'),
(18, 13, '40 Box Mie Sedaap', 35, '2018-11-29 17:16:56', '2018-11-29 17:16:56'),
(19, 13, '90 Box Permen Sugust', 30, '2018-11-29 17:17:17', '2018-11-29 17:17:17');

-- --------------------------------------------------------

--
-- Table structure for table `gudangs`
--

CREATE TABLE `gudangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gudangs`
--

INSERT INTO `gudangs` (`id`, `alamat`, `kapasitas`, `pic`, `created_at`, `updated_at`) VALUES
(11, 'Jalan SMEA 6, Cawang, Jakarta Timur', 20, 'gudang-1.jpg', '2018-11-29 16:27:19', '2018-11-29 16:44:58'),
(12, 'Jalan AMD XII, Makasar, Jakarta Timur', 35, 'gudang-2.jpg', '2018-11-29 16:45:31', '2018-11-29 16:45:31'),
(13, 'Jalan Raya Bogor', 15, 'gudang-3.jpg', '2018-11-29 16:45:50', '2018-11-29 16:45:50'),
(14, 'Jalan Mayjen Sutoyo', 50, 'gudang-4.jpg', '2018-11-29 16:46:03', '2018-11-29 16:46:03'),
(15, 'Jalan Halim Perdana Kusuma', 40, 'gudang-5.jpg', '2018-11-29 16:46:32', '2018-11-29 16:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_30_032036_create_gudangs_table', 1),
(4, '2018_11_30_032044_create_barangs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Romadhan', 'romadhanedy@outlook.com', NULL, '$2y$10$EbSOFK50iUBWNgMsmqroXeNqcPLRZxVno92LE32JDILOk/pV.tx2O', 'eP4MfaPUG6YgqVlWGErZogZzD0iBpgBjUNu63TIxLD3CrrJJqJbDRkrzZkco', '2018-11-29 13:25:41', '2018-11-29 13:25:41'),
(2, 'Romadhan', 'romadhanedy@gmail.com', NULL, '$2y$10$wZR3jqDhnMcKv/kfD7cO2u3pSN42j/FMsKNhk5kE93ugWYgYlsgvW', 'PCrhKUDAioCV69GIrQwStXyRIwTRxIc03qK2IKVV7LXqxAiO2B1WRXASUXSW', '2018-11-29 13:48:19', '2018-11-29 13:48:19'),
(3, 'Romadhan Edy', 'romadhan@mail.com', NULL, '$2y$10$5Xmm9iAeJXeSp42Atz.kx.zFmg02Lx1zfyWQ6XV0w3KvM3QjzTFSW', 'rg2ajCt8iVhCWcbvWpl1pfEcJltMmn4Q4r1TsENdgrfMbWO5HASJge4LWVWq', '2018-11-29 22:44:07', '2018-11-29 22:44:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangs_gudang_id_foreign` (`gudang_id`);

--
-- Indexes for table `gudangs`
--
ALTER TABLE `gudangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `gudangs`
--
ALTER TABLE `gudangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangs`
--
ALTER TABLE `barangs`
  ADD CONSTRAINT `barangs_gudang_id_foreign` FOREIGN KEY (`gudang_id`) REFERENCES `gudangs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
