-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2018 at 11:26 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agriculture`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_book`
--

CREATE TABLE `bank_book` (
  `bankBookID` int(10) UNSIGNED NOT NULL,
  `bankID` int(10) UNSIGNED DEFAULT NULL,
  `amountIN` double NOT NULL DEFAULT '0',
  `amountOut` double NOT NULL DEFAULT '0',
  `drCR` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'IN',
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userID` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank_book`
--

INSERT INTO `bank_book` (`bankBookID`, `bankID`, `amountIN`, `amountOut`, `drCR`, `description`, `userID`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 23, 500, 0, 'IN', 'Vegetables', NULL, NULL, '2018-05-01 14:29:35', '2018-05-01 14:29:35'),
(2, 22, 0, 500, 'OUT', 'kham ache', NULL, NULL, '2018-05-01 14:30:11', '2018-05-01 14:30:11'),
(3, 25, 700, 0, 'IN', 'nuila', NULL, NULL, '2018-05-01 14:51:45', '2018-05-01 14:51:45'),
(4, 23, 0, 500, 'OUT', 'jjj', NULL, NULL, '2018-05-01 15:03:36', '2018-05-01 15:03:36'),
(5, 23, 2500, 0, 'IN', NULL, NULL, NULL, '2018-05-03 06:03:36', '2018-05-03 06:03:36'),
(6, 22, 0, 1000, 'OUT', NULL, NULL, NULL, '2018-05-03 06:03:56', '2018-05-03 06:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `bank_info`
--

CREATE TABLE `bank_info` (
  `bankID` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountNumber` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userID` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank_info`
--

INSERT INTO `bank_info` (`bankID`, `name`, `accountNumber`, `userID`, `deleted_at`, `created_at`, `updated_at`) VALUES
(22, 'DBBL', '1901052174', NULL, NULL, '2018-04-21 09:20:28', '2018-04-30 14:31:16'),
(23, 'Sonali Bank', '1432020045', NULL, NULL, '2018-05-01 14:27:23', '2018-05-01 14:27:23'),
(24, 'Southeast Bank LTD.', '1432020005', NULL, NULL, '2018-05-01 14:32:10', '2018-05-01 14:32:10'),
(25, 'UCB LTD.', '1432020010', NULL, NULL, '2018-05-01 14:32:33', '2018-05-01 14:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `cash_book`
--

CREATE TABLE `cash_book` (
  `cashBookID` int(10) UNSIGNED NOT NULL,
  `amountIN` double NOT NULL DEFAULT '0',
  `amountOut` double NOT NULL DEFAULT '0',
  `drCR` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'IN',
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userID` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cash_book`
--

INSERT INTO `cash_book` (`cashBookID`, `amountIN`, `amountOut`, `drCR`, `description`, `userID`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 789, 0, 'OUT', 'a:3:{s:8:"incexpID";s:2:"18";s:10:"projectsID";s:1:"3";s:15:"incexpTransacID";i:13;}', NULL, NULL, '2018-04-25 10:57:44', '2018-04-25 10:57:44'),
(3, 500, 0, 'OUT', 'a:3:{s:8:"incexpID";s:2:"18";s:10:"projectsID";s:1:"3";s:15:"incexpTransacID";i:14;}', NULL, NULL, '2018-04-25 11:00:06', '2018-04-25 11:00:06'),
(7, 200, 0, 'IN', 'a:3:{s:8:"incexpID";s:2:"20";s:10:"projectsID";s:1:"3";s:15:"incexpTransacID";i:17;}', NULL, NULL, '2018-04-25 11:33:19', '2018-04-25 11:33:19'),
(10, 0, 200, 'OUT', 'a:3:{s:8:"incexpID";s:2:"18";s:10:"projectsID";s:1:"4";s:15:"incexpTransacID";i:21;}', NULL, NULL, '2018-04-30 10:42:18', '2018-04-30 10:42:18'),
(11, 0, 500, 'OUT', 'a:3:{s:8:"incexpID";s:2:"22";s:10:"projectsID";s:1:"4";s:15:"incexpTransacID";i:16;}', NULL, NULL, '2018-04-30 10:43:41', '2018-04-30 10:43:41'),
(12, 0, 500, 'OUT', 'a:3:{s:8:"incexpID";s:2:"22";s:10:"projectsID";s:1:"4";s:15:"incexpTransacID";i:9;}', NULL, NULL, '2018-04-30 10:44:03', '2018-04-30 10:44:03'),
(13, 500, 0, 'IN', NULL, NULL, NULL, '2018-04-30 11:15:01', '2018-04-30 11:15:01'),
(14, 0, 200, 'OUT', NULL, NULL, NULL, '2018-04-30 11:15:18', '2018-04-30 11:15:18'),
(15, 0, 100, 'OUT', 'a:3:{s:8:"incexpID";s:2:"23";s:10:"projectsID";s:1:"5";s:15:"incexpTransacID";i:22;}', NULL, NULL, '2018-04-30 11:24:10', '2018-04-30 11:24:10'),
(16, 30, 0, 'IN', 'a:3:{s:8:"incexpID";s:2:"21";s:10:"projectsID";s:1:"5";s:15:"incexpTransacID";i:23;}', NULL, NULL, '2018-04-30 11:26:56', '2018-04-30 11:26:56'),
(17, 33, 0, 'IN', NULL, NULL, NULL, '2018-04-30 12:21:37', '2018-04-30 12:21:37'),
(18, 800, 0, 'IN', NULL, NULL, NULL, '2018-04-30 12:24:44', '2018-04-30 12:24:44'),
(19, 0, 560, 'OUT', 'a:3:{s:8:"incexpID";s:2:"23";s:10:"projectsID";s:1:"5";s:15:"incexpTransacID";i:24;}', NULL, NULL, '2018-04-30 12:30:25', '2018-04-30 12:30:25'),
(20, 0, 799, 'OUT', NULL, NULL, NULL, '2018-04-30 13:43:40', '2018-04-30 13:43:40'),
(21, 1000, 0, 'IN', NULL, NULL, NULL, '2018-05-01 14:59:23', '2018-04-30 14:59:23'),
(22, 0, 67, 'OUT', NULL, NULL, NULL, '2018-04-30 15:05:43', '2018-04-30 15:05:43'),
(23, 60, 0, 'IN', NULL, NULL, NULL, '2018-04-30 15:13:14', '2018-04-30 15:13:14'),
(24, 800, 0, 'IN', 'a:3:{s:8:"incexpID";s:2:"21";s:10:"projectsID";s:1:"5";s:15:"incexpTransacID";i:25;}', NULL, NULL, '2018-04-30 15:26:20', '2018-04-30 15:26:20'),
(25, 50, 0, 'IN', NULL, NULL, NULL, '2018-05-01 08:58:06', '2018-05-01 08:58:06'),
(26, 500, 0, 'IN', NULL, NULL, NULL, '2018-05-03 06:02:48', '2018-05-03 06:02:48'),
(27, 0, 200, 'OUT', NULL, NULL, NULL, '2018-05-03 06:02:56', '2018-05-03 06:02:56'),
(28, 2000, 0, 'IN', 'a:3:{s:8:"incexpID";s:2:"21";s:10:"projectsID";s:1:"4";s:15:"incexpTransacID";i:26;}', NULL, NULL, '2018-05-03 12:10:52', '2018-05-03 12:10:52'),
(31, 0, 560, 'OUT', 'a:3:{s:8:"incexpID";s:2:"23";s:10:"projectsID";s:1:"5";s:15:"incexpTransacID";i:27;}', NULL, NULL, '2018-05-03 12:12:16', '2018-05-03 12:18:20'),
(32, 511, 0, 'IN', 'a:3:{s:8:"incexpID";s:2:"16";s:10:"projectsID";s:1:"5";s:15:"incexpTransacID";i:31;}', NULL, NULL, '2018-05-03 13:13:17', '2018-05-03 13:14:20'),
(33, 0, 500, 'OUT', NULL, NULL, NULL, '2018-05-03 13:48:28', '2018-05-03 13:48:28'),
(34, 750, 0, 'IN', NULL, NULL, NULL, '2018-05-03 17:38:09', '2018-05-03 17:38:09'),
(35, 0, 500, 'OUT', NULL, NULL, NULL, '2018-05-03 17:38:34', '2018-05-03 17:38:34'),
(36, 400, 0, 'IN', NULL, NULL, NULL, '2018-05-03 17:42:48', '2018-05-03 17:42:48'),
(37, 0, 5000, 'OUT', NULL, NULL, NULL, '2018-05-03 17:43:08', '2018-05-03 17:43:08'),
(38, 100, 0, 'IN', 'a:3:{s:8:"incexpID";s:2:"21";s:10:"projectsID";s:1:"5";s:15:"incexpTransacID";i:32;}', NULL, NULL, '2018-05-03 20:44:12', '2018-05-03 20:44:12'),
(39, 0, 1000, 'OUT', 'a:3:{s:8:"incexpID";s:2:"23";s:10:"projectsID";s:1:"5";s:15:"incexpTransacID";i:33;}', NULL, NULL, '2018-05-03 20:49:15', '2018-05-03 20:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `incexp`
--

CREATE TABLE `incexp` (
  `incexpID` int(10) UNSIGNED NOT NULL,
  `name` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `incExpType` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'income',
  `userID` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `incexp`
--

INSERT INTO `incexp` (`incexpID`, `name`, `incExpType`, `userID`, `deleted_at`, `created_at`, `updated_at`) VALUES
(6, 'Goat', 'income', NULL, NULL, '2018-04-21 09:25:12', '2018-04-21 09:25:12'),
(7, 'Cow', 'expense', NULL, NULL, '2018-04-21 09:28:15', '2018-04-21 09:28:15'),
(9, 'Cow2', 'expense', NULL, NULL, '2018-04-21 09:30:00', '2018-04-21 09:30:00'),
(11, 'Cow4', 'income', NULL, NULL, '2018-04-21 10:14:37', '2018-04-21 10:14:37'),
(12, 'jami', 'income', NULL, NULL, '2018-04-23 07:54:37', '2018-04-23 07:54:37'),
(13, 'tahsin', 'expense', NULL, NULL, '2018-04-23 07:54:53', '2018-04-23 07:54:53'),
(14, 'rice', 'income', NULL, NULL, '2018-04-24 14:07:28', '2018-04-24 14:07:28'),
(15, 'tea', 'income', NULL, NULL, '2018-04-24 14:07:38', '2018-04-24 14:07:38'),
(16, 'fish', 'income', NULL, NULL, '2018-04-24 14:07:45', '2018-04-24 14:07:45'),
(17, 'meat', 'expense', NULL, NULL, '2018-04-24 14:09:44', '2018-04-24 14:09:44'),
(18, 'chicken fry', 'expense', NULL, NULL, '2018-04-24 14:10:00', '2018-04-24 14:10:00'),
(19, 'khichuri1', 'expense', NULL, NULL, '2018-04-24 14:10:12', '2018-04-25 03:26:32'),
(20, 'chicken', 'income', NULL, NULL, '2018-04-24 14:10:23', '2018-04-25 03:24:46'),
(21, 'debu1', 'income', NULL, NULL, '2018-04-25 03:21:16', '2018-04-25 03:21:27'),
(22, 'Name', 'expense', NULL, NULL, '2018-04-25 04:00:19', '2018-04-30 05:01:13'),
(23, 'carrot', 'expense', NULL, NULL, '2018-04-30 11:23:32', '2018-04-30 11:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `incexp_transaction`
--

CREATE TABLE `incexp_transaction` (
  `incexpTransacID` int(10) UNSIGNED NOT NULL,
  `projectsID` int(10) UNSIGNED DEFAULT NULL,
  `incexpID` int(10) UNSIGNED DEFAULT NULL,
  `amountIN` double NOT NULL DEFAULT '0',
  `amountOut` double NOT NULL DEFAULT '0',
  `drCR` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'IN',
  `transactionType` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'CASH',
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userID` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `incexp_transaction`
--

INSERT INTO `incexp_transaction` (`incexpTransacID`, `projectsID`, `incexpID`, `amountIN`, `amountOut`, `drCR`, `transactionType`, `description`, `userID`, `deleted_at`, `created_at`, `updated_at`) VALUES
(7, 3, 6, 5000, 0, 'IN', 'CASH', 'profit', NULL, NULL, '2018-04-24 16:12:58', '2018-04-24 16:12:58'),
(8, 4, 19, 1000, 0, 'IN', 'CASH', 'Mutton khichuri.', NULL, NULL, '2018-04-25 04:51:56', '2018-04-25 04:51:56'),
(9, 4, 22, 456, 500, 'OUT', 'CASH', 'Chickeny', NULL, NULL, '2018-04-25 04:53:02', '2018-04-30 10:44:03'),
(10, 3, 15, 752, 0, 'IN', 'CASH', 'kjknjfk', NULL, NULL, '2018-04-25 05:01:52', '2018-04-25 05:01:52'),
(16, 4, 22, 50, 500, 'OUT', 'CASH', 'hugg', NULL, NULL, '2018-04-25 11:31:19', '2018-04-30 10:43:41'),
(17, 3, 20, 200, 0, 'IN', 'CASH', 'hwdsd', NULL, NULL, '2018-04-25 11:33:19', '2018-04-25 11:33:19'),
(21, 4, 18, 0, 200, 'OUT', 'CASH', 'feknnv', NULL, NULL, '2018-04-30 10:42:18', '2018-04-30 10:42:18'),
(22, 5, 23, 0, 100, 'OUT', 'CASH', 'it is healthfull', NULL, NULL, '2018-04-30 11:24:10', '2018-04-30 11:24:10'),
(23, 5, 21, 30, 0, 'IN', 'CASH', 'it is good to eat', NULL, NULL, '2018-04-30 11:26:56', '2018-04-30 11:26:56'),
(24, 5, 23, 0, 560, 'OUT', 'CASH', 'jkhjhg', NULL, NULL, '2018-04-30 12:30:25', '2018-04-30 12:30:25'),
(25, 5, 21, 800, 0, 'IN', 'CASH', 'love u', NULL, NULL, '2018-04-30 15:26:20', '2018-04-30 15:26:20'),
(26, 4, 21, 2000, 0, 'IN', 'CASH', 'ghfhfjj', NULL, NULL, '2018-05-03 12:10:52', '2018-05-03 12:10:52'),
(27, 5, 23, 0, 560, 'OUT', 'CASH', 'dfhdh', NULL, NULL, '2018-05-03 12:11:59', '2018-05-03 12:18:20'),
(28, 5, 21, 500, 0, 'IN', 'CASH', NULL, NULL, NULL, '2018-05-03 12:24:13', '2018-05-03 12:24:13'),
(29, 5, 21, 385, 0, 'IN', 'CASH', NULL, NULL, NULL, '2018-05-03 12:51:13', '2018-05-03 13:07:07'),
(30, 5, 21, 5007, 0, 'IN', 'CASH', NULL, NULL, NULL, '2018-05-03 13:10:26', '2018-05-03 13:10:26'),
(31, 5, 16, 511, 0, 'IN', 'CASH', NULL, NULL, NULL, '2018-05-03 13:13:17', '2018-05-03 13:14:20'),
(32, 5, 21, 100, 0, 'IN', 'CASH', NULL, NULL, NULL, '2018-05-03 20:44:12', '2018-05-03 20:44:12'),
(33, 5, 23, 0, 1000, 'OUT', 'CASH', '/,,,', NULL, NULL, '2018-05-03 20:49:15', '2018-05-03 20:49:15');

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
(3, '2018_04_06_205505_create_projects_table', 1),
(4, '2018_04_18_110413_create_inex_table', 1),
(5, '2018_04_18_110757_create_inex_transaction_table', 1),
(6, '2018_04_18_111717_create_bank_info_table', 1),
(7, '2018_04_18_111813_create_bank_book_table', 1),
(8, '2018_04_25_111337_create_cash_book_table', 2);

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `projectsID` int(10) UNSIGNED NOT NULL,
  `name` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `userID` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projectsID`, `name`, `description`, `userID`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 'cow sell 1', 'Radio buttons are used if you want to limit the user to just one selection from a list of preset options.\r\nThe following example contains three radio buttons. The last option is disabled', NULL, NULL, '2018-04-21 16:58:47', '2018-04-21 16:58:47'),
(4, 'Goat cell', 'In regards to CSS, an <textarea> is a replaced element. The HTML specification doesn''t define where the baseline of a <textarea> is. So different browsers set it to different positions. For Gecko, the <textarea> baseline is set on the baseline of the first line of the textarea''s first line.', NULL, NULL, '2018-04-21 17:00:41', '2018-04-21 17:00:41'),
(5, 'Vegetables', 'This is a list of plants that have a culinary role as vegetables. "Vegetable" can be used in several senses, including culinary, botanical and legal. This list includes botanical fruits such as pumpkins, and does not include herbs, spices, cereals and most culinary fruits and culinary nuts. Edible fungi are not included in this list.', NULL, NULL, '2018-04-30 11:22:26', '2018-04-30 11:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subDistrict` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userType` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Employee',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `nid`, `address`, `subDistrict`, `district`, `postcode`, `userType`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sukanta Purkayastha', 'spurkayastha83@gmail.com', '$2y$10$pz4aQ38lAXvb9dfvxPt6MukA5cuJIhrrwhRFTgsIL6bGFxptYcISG', NULL, NULL, NULL, NULL, NULL, NULL, 'Employee', NULL, '2018-04-18 13:43:54', '2018-04-18 13:43:54'),
(2, 'Sukanta', 'sukanta@admin.com', '$2y$10$FftzeqCBhInP3624JPg.ae7mW1PI/8Nn6ASa4hvlCs5Zl0KnkNFiC', NULL, NULL, NULL, NULL, NULL, NULL, 'Employee', '8fYhSinvUwKf6pPsQI6BVhmC3HNAWEeCd4Zz3Tzk1fanshLDZ44bY2pNQCF3', '2018-04-19 16:35:02', '2018-04-19 16:35:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_book`
--
ALTER TABLE `bank_book`
  ADD PRIMARY KEY (`bankBookID`),
  ADD KEY `bank_book_bankid_index` (`bankID`),
  ADD KEY `bank_book_userid_index` (`userID`);

--
-- Indexes for table `bank_info`
--
ALTER TABLE `bank_info`
  ADD PRIMARY KEY (`bankID`),
  ADD KEY `bank_info_userid_index` (`userID`);

--
-- Indexes for table `cash_book`
--
ALTER TABLE `cash_book`
  ADD PRIMARY KEY (`cashBookID`),
  ADD KEY `cash_book_userid_index` (`userID`);

--
-- Indexes for table `incexp`
--
ALTER TABLE `incexp`
  ADD PRIMARY KEY (`incexpID`),
  ADD UNIQUE KEY `incexp_name_unique` (`name`),
  ADD KEY `incexp_userid_index` (`userID`);

--
-- Indexes for table `incexp_transaction`
--
ALTER TABLE `incexp_transaction`
  ADD PRIMARY KEY (`incexpTransacID`),
  ADD KEY `incexp_transaction_projectsid_index` (`projectsID`),
  ADD KEY `incexp_transaction_incexpid_index` (`incexpID`),
  ADD KEY `incexp_transaction_userid_index` (`userID`);

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`projectsID`),
  ADD UNIQUE KEY `projects_name_unique` (`name`),
  ADD KEY `projects_userid_index` (`userID`);

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
-- AUTO_INCREMENT for table `bank_book`
--
ALTER TABLE `bank_book`
  MODIFY `bankBookID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `bank_info`
--
ALTER TABLE `bank_info`
  MODIFY `bankID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `cash_book`
--
ALTER TABLE `cash_book`
  MODIFY `cashBookID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `incexp`
--
ALTER TABLE `incexp`
  MODIFY `incexpID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `incexp_transaction`
--
ALTER TABLE `incexp_transaction`
  MODIFY `incexpTransacID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `projectsID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bank_book`
--
ALTER TABLE `bank_book`
  ADD CONSTRAINT `bank_book_bankid_foreign` FOREIGN KEY (`bankID`) REFERENCES `bank_info` (`bankID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `bank_book_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bank_info`
--
ALTER TABLE `bank_info`
  ADD CONSTRAINT `bank_info_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cash_book`
--
ALTER TABLE `cash_book`
  ADD CONSTRAINT `cash_book_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `incexp`
--
ALTER TABLE `incexp`
  ADD CONSTRAINT `incexp_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `incexp_transaction`
--
ALTER TABLE `incexp_transaction`
  ADD CONSTRAINT `incexp_transaction_incexpid_foreign` FOREIGN KEY (`incexpID`) REFERENCES `incexp` (`incexpID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `incexp_transaction_projectsid_foreign` FOREIGN KEY (`projectsID`) REFERENCES `projects` (`projectsID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `incexp_transaction_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
