-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 10:33 PM
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
  `bookdate` date NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date DEFAULT NULL,
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
(136, 3, '2019-04-17', '2019-04-18', NULL, '2', 7, NULL, '2019-04-17 03:14:57', '2019-04-17 03:14:57'),
(137, 3, '2019-04-17', '2019-04-18', NULL, '5', 8, NULL, '2019-04-17 03:21:04', '2019-04-17 03:21:04'),
(138, 3, '2019-04-17', '2019-04-18', NULL, '3', 8, NULL, '2019-04-17 05:10:10', '2019-04-17 05:10:10'),
(139, 3, '2019-04-17', '2019-04-18', NULL, '2', 8, NULL, '2019-04-17 10:36:26', '2019-04-17 10:36:26'),
(140, 8, '2019-04-21', '2019-04-21', NULL, '2', 7, NULL, '2019-04-20 23:30:57', '2019-04-20 23:30:57'),
(141, 3, '2019-04-21', '2019-04-21', NULL, '2', 11, NULL, '2019-04-21 00:07:50', '2019-04-21 00:07:50'),
(142, 3, '2019-04-21', '2019-04-25', NULL, '2', 8, NULL, '2019-04-21 04:09:28', '2019-04-21 04:09:28'),
(143, 3, '2019-04-21', '2019-04-21', NULL, '2', 6, NULL, '2019-04-21 04:39:53', '2019-04-21 04:39:53'),
(144, 3, '2019-04-21', '2019-04-22', NULL, '3', 6, NULL, '2019-04-21 06:10:02', '2019-04-21 06:10:02'),
(145, 3, '2019-04-23', '2019-04-23', NULL, '2', 8, NULL, '2019-04-22 12:37:35', '2019-04-22 12:37:35'),
(146, 3, '2019-04-23', '2019-04-22', NULL, '1', 8, NULL, '2019-04-22 13:38:05', '2019-04-22 13:38:05'),
(147, 3, '2019-04-23', '2019-04-23', NULL, '1', 6, NULL, '2019-04-23 11:58:50', '2019-04-23 11:58:50'),
(148, 3, '2019-04-23', '2019-04-23', NULL, '1', 6, NULL, '2019-04-23 11:58:50', '2019-04-23 11:58:50'),
(149, 3, '2019-04-23', '2019-04-23', NULL, '1', 6, NULL, '2019-04-23 11:58:54', '2019-04-23 11:58:54'),
(150, 3, '2019-04-23', '2019-04-23', NULL, '1', 6, NULL, '2019-04-23 12:00:00', '2019-04-23 12:00:00'),
(151, 3, '2019-04-24', '2019-04-23', NULL, '1', 6, NULL, '2019-04-23 12:58:08', '2019-04-23 12:58:08');

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
(11, '2019_03_16_074711_create_contacts_table', 4),
(12, '2019_04_10_101927_create_receipt_table', 5);

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
(13, 'Taksindo Tour', 'Trekking route in Solukhumbu. Beautiful village', 'uploads/gallery/taksindo.jpg', 50000.00, 'Everest Hotel', NULL, '2019-03-15 09:54:38', '2019-03-15 09:54:38'),
(14, 'Everest base Camp', 'Trek to Everest Base Camp', 'uploads/gallery/EBC.jfif', 900000.00, 'Everest Hotel', NULL, '2019-03-30 03:48:02', '2019-03-30 03:48:02');

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
(2, 'admin', 'admin', 'thamel', '888888888', 'nepali', 'admin@hotmail.com', NULL, '$2y$10$320PklW4qQpZX0gTwBTf.OX.5fW6oHwYlXcVPtX5E2J9RubAbb8uy', 1, 'QG0NAhGUSaKzgydcaSFa6Wg3CByZJeenZzADpKKTqpwJDWCS2hDJu9frv4ew', '2019-03-15 02:10:22', '2019-03-15 02:10:22'),
(3, 'dawa', 'dawa', 'thamel', '555555587864', 'nepali', 'dawa@hotmail.com', NULL, '$2y$10$3.4Dh9MIplw.ysPWqfPbb.9WYZrZVbxFPa/oJ7kx5qUczo/zPzGY.', 2, 'rnLq9ycGloyLRp47kYSncQPX7cluTOpoDGPDVD5CeYnWzy2GEWZsKBUnlj97', '2019-03-15 02:10:48', '2019-04-23 13:45:45'),
(4, 'Software', 'soft', 'Dillibazar', '4484098', 'English', 'soft@hotmail.com', NULL, '$2y$10$OzsV/w9jh0ENMqK3ufguO.yFbopFntezv83xvqc9BDKI1VSNSpcI6', 2, 'fuDxgoE5GBvGaMMFjcuPc7ppSvdbgAbU6rZXUrYidhV52DrshDAs5Tj0rPAv', '2019-03-28 09:22:25', '2019-03-28 09:23:07'),
(5, 'Friend', 'friend', 'Sky Villa', '989888393', 'nepali', 'fri@gmail.com', NULL, '$2y$10$TtLwdfb.an8.eLtzBdbDyOmhC8YNVV4pjIHC.R4qZ6m53KEDXdkta', 2, 'tm8IwyNzIkHL96lEwF75ykWU4qoyAamjnwRTlToVq3xcCagmMUItSSrmW3It', '2019-04-03 03:09:23', '2019-04-03 03:09:23'),
(6, 'john', 'john', 'newyork', '999999999', 'nepali', 'john@hotmail.com', NULL, '$2y$10$IN5azpyMt2c7O5HB4CHPrOpqr3pxmFTe59ww2AaEIsTCBxtsMVV5S', 2, 'OFay0mzAgA1f9M4HdjGPpW8eSAvSINsuHBcJCpgPOl3lFngJBCxUuuzVxbhl', '2019-04-08 00:34:11', '2019-04-08 00:34:11'),
(7, 'dawa', 'gagan', 'ddf', '33333', 'nepali', 'g@hotmail.coom', NULL, '$2y$10$UDol5.BSCZ2bOxECP2LoC.TtRcJpt37Md5RwvUK07AY7G5p17owD.', 2, 'NMysb4U9wkXEsstcUoB4DAs3BLus9EyTAKcJJNwQ7pYYzx5uRrxf6kiyrx69', '2019-04-20 23:01:54', '2019-04-20 23:01:54'),
(8, 'saugat', 'saugat', 'bougha 1209', '98083087409', 'nepali', 's@hot.com', NULL, '$2y$10$ST0wHFhS8a97NkUTmJj17ey/bWsJaGvgm.EY0SA0LhpQyHZ8AWiQi', 2, '4B6AkA7Wwr2TJuoSf3wrivJil12chQGArB7YzJT0qN6F6tlB0PcCeTnkCgKG', '2019-04-20 23:30:44', '2019-04-21 01:38:17'),
(9, 'sanu', 'sanu', 'him', '988738478', 'aurg', 'san@hotmail.com', NULL, '$2y$10$hugI1u5zdnJ1Nm0KWnH5y.b21tu4/tJB3MZnJWGn2/JXIQxpEv8s.', 2, 'huGxeOMlfCqIkRMlwaWx8QQAtNmyJfhFWZeJRLGanCcRzSOzTn0gQZwnaZda', '2019-04-21 06:21:34', '2019-04-21 06:21:34');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
