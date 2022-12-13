-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 11:53 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `levre`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_categories`
--

CREATE TABLE `admin_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visibility` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_categories`
--

INSERT INTO `admin_categories` (`id`, `name`, `visibility`, `created_at`, `updated_at`) VALUES
(1, 'Lipsticks', 1, '2022-11-25 23:47:58', '2022-12-03 22:23:56'),
(2, 'Foundations', 1, '2022-12-07 07:57:10', '2022-12-07 07:57:10'),
(3, 'Eyeliner', 1, '2022-12-08 22:09:58', '2022-12-08 22:09:58');

-- --------------------------------------------------------

--
-- Table structure for table `admin_categories_visibilities`
--

CREATE TABLE `admin_categories_visibilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_categories_visibilities`
--

INSERT INTO `admin_categories_visibilities` (`id`, `name`) VALUES
(1, 'Public'),
(2, 'Hidden');

-- --------------------------------------------------------

--
-- Table structure for table `admin_products`
--

CREATE TABLE `admin_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prodid` bigint(255) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(10) UNSIGNED NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_products`
--

INSERT INTO `admin_products` (`id`, `prodid`, `name`, `description`, `category`, `quantity`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 2022112703351, 'Pink Shade Lipstick', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 1, '153', '90', '202211270335.jpg', '2022-11-26 22:35:16', '2022-12-03 22:24:01'),
(2, 2022120409081, 'Pack of 4-Red Lipsticks', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat', 1, '56', '200', '202212040908.webp', '2022-12-04 04:08:50', '2022-12-04 04:08:50'),
(3, 2022120903032, 'Brown Skin Foundation', 'A 16-hour wear, full-coverage foundation with a natural, multidimensional matte finish thats comfortable, breathable and weightless. This formula features skin-loving ingredients, oil-controlling actives, and skin-true pigments.', 2, '238', '59', '202212090303.jpg', '2022-12-08 22:03:33', '2022-12-08 22:04:48'),
(4, 2022120903072, 'Brown Skin Foundation Box', 'This oil-free powder has a soft, creamy texture that leaves a smooth and comfortable finish. It can also be used as a setting powder. It gives a natural and flawless skin.', 2, '100', '50', '202212090307.jpg', '2022-12-08 22:07:48', '2022-12-08 22:08:04'),
(5, 2022120903103, 'Waterproof Gel Eyeliner', 'Long lasting, shocking color intensity infused with Kohl Britania. High intensity color for an instant impact that is ultra smooth. Creamy formula that glides on easily and is waterproof, smudge-proof, sweat-proof, heat-proof, humidity-proof and scandal-proof.', 3, '80', '6', '202212090310.jpg', '2022-12-08 22:10:38', '2022-12-08 22:10:38'),
(6, 2022120903123, 'Black Liquid Eyeliner', 'High-def pigment and a rich, fluid formula that goes on quick and easy to give you perfectly lined eyes that last. Dries fast and stays put to enhance and dramatically define the eyes. An easy-to-control, flexible brush gives you precise application.', 3, '75', '4', '202212090312.jpg', '2022-12-08 22:12:46', '2022-12-08 22:12:46');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_03_103439_create_admin_categories_table', 2),
(6, '2022_12_03_103540_create_admin_categories_visibilities_table', 2),
(7, '2022_12_03_103612_create_admin_products_table', 3),
(9, '2022_12_08_180233_create_orders_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` bigint(20) NOT NULL,
  `prod_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `user_id`, `prod_id`, `prod_quantity`, `created_at`, `updated_at`) VALUES
(1, 22570, 5, 2022120409081, 1, '2022-12-08 22:38:55', '2022-12-08 22:38:55'),
(2, 22570, 5, 2022120903072, 1, '2022-12-08 22:38:55', '2022-12-08 22:38:55'),
(3, 22570, 5, 2022120903103, 5, '2022-12-08 22:38:55', '2022-12-08 22:38:55'),
(4, 18136, 5, 2022120903123, 5, '2022-12-08 22:43:46', '2022-12-08 22:43:46'),
(11, 52856, 5, 2022120409081, 1, '2022-12-10 03:56:22', '2022-12-10 03:56:22'),
(12, 52856, 5, 2022112703351, 1, '2022-12-10 03:56:22', '2022-12-10 03:56:22'),
(13, 36264, 5, 2022112703351, 2, '2022-12-11 08:25:01', '2022-12-11 08:25:01'),
(14, 36264, 5, 2022120409081, 3, '2022-12-11 08:25:01', '2022-12-11 08:25:01'),
(15, 75809, 5, 2022120903032, 3, '2022-12-11 08:26:37', '2022-12-11 08:26:37'),
(16, 75809, 5, 2022120903072, 2, '2022-12-11 08:26:37', '2022-12-11 08:26:37');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `address`, `zipcode`, `city`, `country`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User', 'user@gmail.com', NULL, '$2y$10$aEmhNqm1vA28jQBJ6hYhmOnYOtifXMW.NYzcDIHbp7yRPDTDwc3bC', 0, NULL, NULL, NULL, NULL, NULL, '2022-12-03 04:41:20', '2022-12-03 04:41:20'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$mXi9whZ6D8ZtHaJA5uwZye7/pS7qxzbBfaoviQW/mJ5mT7ZNUq0Wi', 1, NULL, NULL, NULL, NULL, NULL, '2022-12-03 04:41:20', '2022-12-03 04:41:20'),
(3, 'Manager User', 'manager@nicesnippets.com', NULL, '$2y$10$z3ga2oIl/KCV7qwKJ2VX4.h6ozNoUe6sYwb6PVpor1fuLzHuzz7hW', 2, NULL, NULL, NULL, NULL, NULL, '2022-12-03 04:41:21', '2022-12-03 04:41:21'),
(5, 'Maaz Ahmad', 'maaz@gmail.com', NULL, '$2y$10$/1NU7p.m3K64485HT.542OwDnAv/6DQT/rz2N1w8tI6zuQz/9orvO', 0, 'Street No. 4, Chour Chowk, Peshawar Road', '46000', 'Rawalpindi', 'Pakistan', NULL, '2022-12-04 03:47:12', '2022-12-12 11:41:47'),
(6, 'Ali', 'ali@gmail.com', NULL, '$2y$10$Ck/Y0dYdXxPQl6gO/zH3xezI1qGNa.AOTmi7r5J./5aoV1Z4THnIK', 0, 'abc', '46000', 'Rawalpindi', 'Pakistan', NULL, '2022-12-07 08:58:41', '2022-12-12 11:03:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_categories`
--
ALTER TABLE `admin_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_categories_name_unique` (`name`);

--
-- Indexes for table `admin_categories_visibilities`
--
ALTER TABLE `admin_categories_visibilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_products`
--
ALTER TABLE `admin_products`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `admin_categories`
--
ALTER TABLE `admin_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_categories_visibilities`
--
ALTER TABLE `admin_categories_visibilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_products`
--
ALTER TABLE `admin_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
