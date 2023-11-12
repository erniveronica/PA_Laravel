-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2023 at 02:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_pa`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `tempat_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `admin_id`, `nama`, `harga`, `tempat_id`, `created_at`, `updated_at`) VALUES
(6, 3, 'lalapan bebek', 18000, 5, '2023-11-11 07:18:57', '2023-11-11 10:05:38'),
(7, 3, 'Nasi Uduk Lalapan', 14000, 5, '2023-11-11 10:07:37', '2023-11-11 10:07:37'),
(8, 3, 'nasi campur', 8000, 7, '2023-11-11 10:23:28', '2023-11-11 10:23:28'),
(9, 3, 'Nasi campur lauk ayam bumbu', 10000, 7, '2023-11-11 19:54:48', '2023-11-11 19:54:48'),
(10, 3, 'black coffee', 30000, 4, '2023-11-11 19:58:21', '2023-11-11 19:58:21'),
(11, 3, 'Brownies', 27000, 4, '2023-11-11 20:00:51', '2023-11-11 20:00:51'),
(12, 3, 'Americano', 25000, 9, '2023-11-12 03:48:57', '2023-11-12 03:48:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_admin_id_foreign` (`admin_id`),
  ADD KEY `menu_tempat_id_foreign` (`tempat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `menu_tempat_id_foreign` FOREIGN KEY (`tempat_id`) REFERENCES `tempat` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
