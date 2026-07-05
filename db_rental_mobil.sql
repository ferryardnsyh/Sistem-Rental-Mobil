-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 05, 2026 at 03:18 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `mobil_id` int NOT NULL,
  `tanggal_sewa` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `lama_sewa` int NOT NULL,
  `total_harga` decimal(10,2) NOT NULL,
  `status` enum('Menunggu','Disetujui','Selesai','Dibatalkan') DEFAULT 'Menunggu',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `metode_pembayaran` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user_id`, `mobil_id`, `tanggal_sewa`, `tanggal_kembali`, `lama_sewa`, `total_harga`, `status`, `created_at`, `updated_at`, `metode_pembayaran`) VALUES
(1, 1, 2, '2026-07-05', '2026-07-08', 3, '6000.00', 'Selesai', '2026-07-04 11:03:43', '2026-07-04 11:13:05', NULL),
(2, 1, 2, '2026-07-05', '2026-07-05', 1, '2000.00', 'Dibatalkan', '2026-07-04 11:13:16', '2026-07-04 11:13:18', NULL),
(3, 1, 2, '2026-07-05', '2026-07-05', 1, '2000.00', 'Dibatalkan', '2026-07-04 13:20:36', '2026-07-04 13:20:55', NULL),
(4, 2, 2, '2026-07-05', '2026-07-09', 4, '8000.00', 'Selesai', '2026-07-04 16:51:34', '2026-07-05 06:57:09', NULL),
(5, 2, 2, '2026-07-05', '2026-07-09', 4, '8000.00', 'Dibatalkan', '2026-07-04 16:54:04', '2026-07-04 17:05:38', NULL),
(6, 2, 3, '2026-07-05', '2026-07-07', 2, '800000.00', 'Selesai', '2026-07-04 16:58:54', '2026-07-04 17:05:40', NULL),
(7, 2, 6, '2026-07-05', '2026-07-06', 1, '800000.00', 'Selesai', '2026-07-05 01:33:28', '2026-07-05 06:57:11', NULL),
(8, 2, 4, '2026-07-05', '2026-07-07', 2, '1300000.00', 'Selesai', '2026-07-05 06:55:01', '2026-07-05 06:57:18', NULL),
(9, 2, 3, '2026-07-05', '2026-07-10', 5, '2000000.00', 'Selesai', '2026-07-05 07:30:04', '2026-07-05 07:57:20', NULL),
(10, 2, 5, '2026-07-05', '2026-07-11', 6, '3300000.00', 'Selesai', '2026-07-05 07:32:10', '2026-07-05 07:57:19', NULL),
(11, 2, 6, '2026-07-11', '2026-07-31', 20, '16000000.00', 'Selesai', '2026-07-05 07:42:19', '2026-07-05 07:57:19', 'QRIS'),
(12, 2, 2, '2026-07-05', '2026-07-06', 1, '2000.00', 'Selesai', '2026-07-05 07:58:10', '2026-07-05 08:13:11', 'Transfer Bank');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id` int NOT NULL,
  `nama_mobil` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `plat_nomor` varchar(20) NOT NULL,
  `tahun` year NOT NULL,
  `transmisi` enum('Manual','Matic') NOT NULL,
  `harga_sewa` decimal(10,2) NOT NULL,
  `status` enum('Tersedia','Disewa','Maintenance') DEFAULT 'Tersedia',
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id`, `nama_mobil`, `merk`, `plat_nomor`, `tahun`, `transmisi`, `harga_sewa`, `status`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 'avanza', 'toyota', 'b 123 uu', 2011, 'Matic', '2000.00', 'Tersedia', '1783202337_8adb22d2f0218c656b11.jpeg', '2026-07-04 10:04:45', '2026-07-05 08:13:11'),
(3, 'Brio', 'Honda', 'D 2121 UUE', 2020, 'Manual', '400000.00', 'Tersedia', '1783202423_b8c40bcb5322e0a47bc8.jpeg', '2026-07-04 15:00:23', '2026-07-05 07:57:20'),
(4, 'Xpander', 'Mitsubishi', 'D 3234 SBT', 2021, 'Matic', '650000.00', 'Tersedia', '1783202466_06857a316687700b12bf.jpeg', '2026-07-04 15:01:06', '2026-07-05 06:57:18'),
(5, 'Yaris', 'Toyota', 'D 8754 SBE', 2019, 'Matic', '550000.00', 'Tersedia', '1783202511_ea962b5fa9849c6fc29b.jpeg', '2026-07-04 15:01:51', '2026-07-05 07:57:19'),
(6, 'Alphard', 'Toyota', 'D 7643 SBB', 2023, 'Manual', '800000.00', 'Tersedia', '1783202579_1c7961dc6c0117068cf9.jpeg', '2026-07-04 15:02:59', '2026-07-05 07:57:19'),
(7, 'Kijang Innova Reborn', 'Toyota', 'D 3332 UDY', 2020, 'Manual', '750000.00', 'Tersedia', '1783202645_8eb12f699cd5a0ee84ab.jpeg', '2026-07-04 15:04:05', '2026-07-04 15:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','customer') NOT NULL DEFAULT 'customer',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `email`, `no_telp`, `foto`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', '09', NULL, '$2y$10$sOfM1L/zhA7Dl9t7WznqwuS8EOYetqwvtI9UUwRBPJ.wSItpzCDEi', 'admin', '2026-07-04 15:58:34', '2026-07-05 07:57:32'),
(2, 'Ferry Ardiansyah', 'ferry', 'ferry@gmail.com', '0812134', '1783257212_250f303fb0f300b3d6ef.jpeg', '$2y$10$iFDUfods/zAlq1V3YJ4OfeWm6xJDV5ereN6HP5mjxuY2XtSCn9AWC', 'customer', '2026-07-04 14:33:17', '2026-07-05 08:06:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_booking_user` (`user_id`),
  ADD KEY `fk_booking_mobil` (`mobil_id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `plat_nomor` (`plat_nomor`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_booking_mobil` FOREIGN KEY (`mobil_id`) REFERENCES `mobil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_booking_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
