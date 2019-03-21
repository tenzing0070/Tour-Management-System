-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2019 at 11:54 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `demos`
--

CREATE TABLE `demos` (
  `id` int(10) UNSIGNED NOT NULL,
  `userId` int(10) UNSIGNED NOT NULL,
  `bookdate` datetime NOT NULL,
  `from_date` datetime NOT NULL,
  `to_date` datetime NOT NULL,
  `nop` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PackId` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `demos`
--

INSERT INTO `demos` (`id`, `userId`, `bookdate`, `from_date`, `to_date`, `nop`, `PackId`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 3, '2019-03-15 22:13:07', '2019-03-15 00:00:00', '2019-03-23 00:00:00', '4', 6, NULL, '2019-03-15 10:43:07', '2019-03-15 10:43:07'),
(8, 3, '2019-03-15 22:42:16', '2019-03-08 00:00:00', '2019-03-23 00:00:00', '4', 6, NULL, '2019-03-15 11:12:16', '2019-03-15 11:12:16'),
(9, 3, '2019-03-16 08:56:42', '2019-03-23 00:00:00', '2019-03-30 00:00:00', '8', 7, NULL, '2019-03-15 21:26:42', '2019-03-15 21:26:42'),
(10, 3, '2019-03-16 09:47:52', '2019-03-16 00:00:00', '2019-03-30 00:00:00', '2', 6, NULL, '2019-03-15 22:17:52', '2019-03-15 22:17:52'),
(11, 3, '2019-03-16 09:52:30', '2019-03-30 00:00:00', '2019-04-13 00:00:00', '4', 9, NULL, '2019-03-15 22:22:30', '2019-03-15 22:22:30'),
(12, 3, '2019-03-16 12:36:42', '2019-03-02 00:00:00', '2019-03-03 00:00:00', '5', 6, NULL, '2019-03-16 01:06:42', '2019-03-16 01:06:42'),
(13, 3, '2019-03-16 13:43:10', '2019-03-09 00:00:00', '2019-03-16 00:00:00', '6', 6, NULL, '2019-03-16 02:13:10', '2019-03-16 02:13:10'),
(14, 3, '2019-03-18 10:24:16', '2019-03-08 00:00:00', '2019-03-22 00:00:00', '2', 6, NULL, '2019-03-17 22:54:16', '2019-03-17 22:54:16'),
(15, 3, '2019-03-18 11:42:52', '2019-03-30 00:00:00', '2019-03-31 00:00:00', '4', 6, NULL, '2019-03-18 00:12:52', '2019-03-18 00:12:52'),
(16, 3, '2019-03-20 16:25:37', '2019-03-27 00:00:00', '2019-03-28 00:00:00', '2', 13, NULL, '2019-03-20 04:55:37', '2019-03-20 04:55:37');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_02_25_051234_create_table_user_type', 1),
(3, '2019_03_06_160407_create_programs_table', 1),
(4, '2019_03_06_161653_create_users_table', 1),
(5, '2019_03_12_102537_create_picture_table', 1),
(9, '2019_03_03_055319_create_demos_table', 2),
(11, '2019_03_16_074711_create_contacts_table', 4);

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
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(10) UNSIGNED NOT NULL,
  `program_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `hotel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `program_name`, `detail`, `image`, `price`, `hotel`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Dudhkunda tour', 'Trek for a week. High hills, mountains, beautiful lake', 'uploads/gallery/Dudhkunda1-800x420.jpg', 10000.00, 'Local house stay', NULL, '2019-03-15 09:44:39', '2019-03-15 09:44:39'),
(7, 'Lulka Tour', 'Trek for 10-11 days.', 'uploads/gallery/nepaldomesticflights-lukla-takeoff.jpg', 100000.00, 'Sherpa Hotel', NULL, '2019-03-15 09:46:38', '2019-03-15 09:46:38'),
(8, 'Junbesi', 'Trek for 6 days. High hills mountains, beautiful village', 'uploads/gallery/junbesi-1024x665.jpg', 10000.00, 'Junbesi Hotel', NULL, '2019-03-15 09:48:02', '2019-03-15 09:48:02'),
(9, 'Thupten Chholing Gumba', 'High hill monastry located in Junbesi', 'uploads/gallery/Monastery-of-Thuptenchholing-at-Junbesi-Solukhmbu.jpg', 11000.00, 'Summit Hotel', NULL, '2019-03-15 09:49:41', '2019-03-15 09:49:41'),
(10, 'Salleri Tour', 'Famous Solukhumbu market.', 'uploads/gallery/salleri.jpg', 6000.00, 'Sunny Hotel', NULL, '2019-03-15 09:50:37', '2019-03-15 09:50:37'),
(11, 'Namche Bazzar', 'Gate way to Everest. Famous Market of Solukhumbu', 'uploads/gallery/jiri-shivalaya-namche-bazar-trek68.jpeg', 100000.00, 'Sherpa Bed and Breakfast Hotel', NULL, '2019-03-15 09:52:14', '2019-03-15 09:52:14'),
(12, 'Pikey Hills', 'Famous Lower Khumbu trekking way to high hill.', 'uploads/gallery/pikey.jpg', 100000.00, 'Sonam Hotel', NULL, '2019-03-15 09:53:07', '2019-03-15 09:53:07'),
(13, 'Taksindo Tour', 'Trekking route in Solukhumbu. Beautiful village', 'uploads/gallery/taksindo.jpg', 50000.00, 'Everest Hotel', NULL, '2019-03-15 09:54:38', '2019-03-15 09:54:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userTypeId` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `address`, `phone`, `nationality`, `email`, `email_verified_at`, `password`, `userTypeId`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin', 'thamel', '888888888', 'nepali', 'admin@hotmail.com', NULL, '$2y$10$320PklW4qQpZX0gTwBTf.OX.5fW6oHwYlXcVPtX5E2J9RubAbb8uy', 1, 'KqKiKzRUGitmXftrhhVzhmtWfubXIWyV4eYXVzLBo1iHwb4qyCEQJu9ReE1Y', '2019-03-15 02:10:22', '2019-03-15 02:10:22'),
(3, 'dawa', 'dawa', 'thamel', '333333333', 'nepali', 'dawa@hotmail.com', NULL, '$2y$10$3.4Dh9MIplw.ysPWqfPbb.9WYZrZVbxFPa/oJ7kx5qUczo/zPzGY.', 2, 'FrUZWUcMqFKSQmWlmuUdoGFrnkNKT8vrudYDaXt8vHlQ2bhRnzSSbwymc1rb', '2019-03-15 02:10:48', '2019-03-15 21:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `userTypeId` int(10) UNSIGNED NOT NULL,
  `userType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`userTypeId`, `userType`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'User', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demos`
--
ALTER TABLE `demos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `demos_userid_foreign` (`userId`),
  ADD KEY `demos_packid_foreign` (`PackId`);

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
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_usertypeid_foreign` (`userTypeId`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`userTypeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demos`
--
ALTER TABLE `demos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `userTypeId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `demos`
--
ALTER TABLE `demos`
  ADD CONSTRAINT `demos_packid_foreign` FOREIGN KEY (`PackId`) REFERENCES `programs` (`id`),
  ADD CONSTRAINT `demos_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_usertypeid_foreign` FOREIGN KEY (`userTypeId`) REFERENCES `user_type` (`userTypeId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
