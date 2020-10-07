-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 07, 2020 at 03:39 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobilemoney`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhoneNumber` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Balance` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `Name`, `PhoneNumber`, `Balance`) VALUES
(1, 'rony', '078777765', 100300),
(4, 'ronniek', '0787886655', 67000),
(5, 'Kyalo', '078788612', 67000),
(6, 'Red', '078788621', 67000),
(7, 'Ray', '078751908', 67000);

-- --------------------------------------------------------

--
-- Table structure for table `eWalletAccounts`
--

CREATE TABLE `eWalletAccounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Balance` bigint(20) NOT NULL,
  `pin` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eWalletAccounts`
--

INSERT INTO `eWalletAccounts` (`id`, `name`, `phoneNumber`, `Balance`, `pin`) VALUES
(1, 'naki', '07725611112', 69000, 1230),
(3, 'nante', '07725611118', 69000, 1231),
(4, 'Kirabo', '0772101234', 65500, 1200);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2020_10_04_191507_transaction_table', 1),
(3, '2020_10_04_191600_e_wallet_account_table', 1),
(4, '2020_10_04_191726_customer_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `eWallet_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eWallet_phoneNumber` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Transfer_Amount` bigint(20) NOT NULL,
  `customer_phoneNumber` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eWalletaccounts_id` bigint(20) NOT NULL,
  `customers_id` bigint(20) NOT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `eWallet_name`, `eWallet_phoneNumber`, `Transfer_Amount`, `customer_phoneNumber`, `eWalletaccounts_id`, `customers_id`, `Status`) VALUES
(1, 'naki', '7725611112', 1000, '78777765', 1, 1, 'pending'),
(2, 'Kirabo', '0772101234', 10000, '078777765', 4, 1, 'pending'),
(3, 'Kirabo', '0772101234', 0, '078777765', 4, 1, 'pending'),
(4, 'Kirabo', '0772101234', 0, '078777765', 4, 1, 'Failed'),
(5, 'Kirabo', '0772101234', 0, '078777765', 4, 1, 'pending'),
(6, 'Kirabo', '0772101234', 0, '078777765', 4, 1, 'pending'),
(7, 'Kirabo', '0772101234', 1000000, '078777765', 4, 1, 'pending'),
(8, 'Kirabo', '0772101234', 1000000, '078777765', 4, 1, 'pending'),
(9, 'Kirabo', '0772101234', 1000000, '078777765', 4, 1, 'Failed'),
(10, 'Kirabo', '0772101234', 1000, '078777765', 4, 1, 'pending'),
(11, 'Kirabo', '0772101234', 1000, '078777765', 4, 1, 'pending'),
(12, 'Kirabo', '0772101234', 1000, '078777765', 4, 1, 'pending'),
(13, 'Kirabo', '0772101234', 1000, '078777765', 4, 1, 'pending'),
(14, 'Kirabo', '0772101234', 0, '078777765', 4, 1, 'pending'),
(15, 'Kirabo', '0772101234', 0, '078777765', 4, 1, 'Failed'),
(16, 'Kirabo', '0772101234', 1000000, '078777765', 4, 1, 'Failed'),
(17, 'Kirabo', '0772101234', 100, '078777765', 4, 1, 'pending'),
(18, 'Kirabo', '0772101234', 100, '078777765', 4, 1, 'pending'),
(19, 'Kirabo', '0772101234', 100, '078777765', 4, 1, 'pending'),
(20, 'Kirabo', '0772101234', 100, '078777765', 4, 1, 'pending'),
(21, 'Kirabo', '0772101234', 100, '078777765', 4, 1, 'pending'),
(22, 'Kirabo', '0772101234', 100, '078777765', 4, 1, 'pending'),
(23, 'Kirabo', '0772101234', 100, '078777765', 4, 1, 'pending'),
(24, 'Kirabo', '0772101234', 100, '078777765', 4, 1, 'pending'),
(25, 'Kirabo', '0772101234', 100, '078777765', 4, 1, 'pending'),
(26, 'Kirabo', '0772101234', 100, '078777765', 4, 1, 'pending'),
(27, 'Kirabo', '0772101234', 100, '078777765', 4, 1, 'pending'),
(28, 'Kirabo', '0772101234', 100, '078777765', 4, 1, 'Success'),
(29, 'Kirabo', '0772101234', 100, '078777765', 4, 1, 'Success');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_phonenumber_unique` (`PhoneNumber`);

--
-- Indexes for table `eWalletAccounts`
--
ALTER TABLE `eWalletAccounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ewalletaccounts_phonenumber_unique` (`phoneNumber`),
  ADD UNIQUE KEY `ewalletaccounts_pin_unique` (`pin`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `eWalletAccounts`
--
ALTER TABLE `eWalletAccounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
