-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 06:50 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `top2_services`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_en`, `name_ar`, `image`, `created_at`, `updated_at`) VALUES
(1, 'shirt', 'قميص', 'categories1323346539-1677340241-Shirt,_men\'s_(AM_2015.44.1-1).jpg', '2023-02-25 13:50:41', '2023-02-25 13:50:41'),
(2, 'pants', 'بنطال', 'categories2024956898-1677340279-IMG-20210811-WA0070.jpg', '2023-02-25 13:51:19', '2023-02-25 13:51:19'),
(3, 'shoes', 'حذاء', 'categories1893997839-1677340304-1.jpg', '2023-02-25 13:51:44', '2023-02-25 13:51:44'),
(4, 'glasses', 'نظارة', 'categories1360853581-1677340329-1507271991-540x600.jpg', '2023-02-25 13:52:09', '2023-02-25 13:52:09'),
(5, 'phone', 'جوال', 'categories1485650936-1677340382-284728ad-60ce-4b21-90f2-3237ee2fc592-thumbnail-770x770-70.jpeg', '2023-02-25 13:53:03', '2023-02-25 13:53:03'),
(6, 'cap', 'قبعة', 'categories1865735209-1677340921-4441.jpg', '2023-02-25 14:02:01', '2023-02-25 14:02:01'),
(7, 'rt', 'rt', 'categories1547645150-1690238408-airpod.png', '2023-07-24 19:40:08', '2023-07-24 19:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2023_02_07_081312_create_news_table', 1),
(6, '2023_02_07_081758_create_services_table', 1),
(7, '2023_02_07_082200_create_categories_table', 1),
(8, '2023_02_07_082450_create_carts_table', 1),
(9, '2023_02_07_082808_create_orders_table', 1),
(10, '2023_02_07_083118_create_order_items_table', 1),
(11, '2023_02_07_083445_create_payments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title_en`, `title_ar`, `content_en`, `content_ar`, `image`, `created_at`, `updated_at`) VALUES
(5, 'Dolor aut mollitia u', 'Ipsa elit accusamu', 'Accusantium reprehen', 'Enim assumenda verit', 'news841952031-1677310656-143-102009-best-german-luxury-3.jpeg', '2023-02-25 05:37:36', '2023-02-25 05:37:36'),
(6, 'Et modi enim maxime', 'Eiusmod ut animi ve', 'Omnis molestiae nequ', 'Assumenda reprehende', 'news1005865830-1677310664-143-102011-best-german-luxury-8.jpeg', '2023-02-25 05:37:44', '2023-02-25 05:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('tareq@yahoo.com', '$2y$10$wFssvbu7.7I2XJaEeUIeNeBJ6X0ShUUDWlXP6VkdGkkQebGOVwrwi', '2023-02-19 15:23:05');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `payment` double NOT NULL,
  `fee` double NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name_en`, `name_ar`, `image`, `content_en`, `content_ar`, `price`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'green shirt', 'قميص أخضر', 'services260915872-1677340631-61LRn3xItzS._AC_UL330_SR330,330_.jpg', 'green shirt very beautiful', 'قميص أخضر جميل جدا', 50, 2, 1, '2023-02-25 13:57:11', '2023-02-25 13:57:11'),
(2, 'Black white shirt', 'قميص أبيض أسود', 'services645241557-1677340750-f16670432345406IMG_1320.jpg', 'Black white shirt very beautiful', 'قميص أبيض وأسود جميل جدا', 55, 2, 1, '2023-02-25 13:59:10', '2023-02-25 13:59:10'),
(3, 'orange shirt', 'قميص برتقالي', 'services2039269438-1677340853-Shirt,_men\'s_(AM_2015.44.1-1).jpg', 'orange shirt very beautiful', 'قميص برتقالي جميل جدا', 56, 2, 1, '2023-02-25 14:00:53', '2023-02-25 14:00:53'),
(4, 'green cap', 'قبعة خضراء', 'services1683273276-1677340983-2_143db17c-8ab4-49f2-8fb2-a0ab1642b049.jpg', 'green cap very beautiful', 'قبعة خضراء جميلة جدا', 30, 2, 6, '2023-02-25 14:03:03', '2023-02-25 14:03:03'),
(5, 'red cap', 'قبعة حمراء', 'services415582487-1677341047-HTB1xc02AWmWBuNjy1Xaq6xCbXXab.jpg', 'red cap very beautiful', 'قبعة حمراء جميلة جدا', 34, 2, 6, '2023-02-25 14:04:07', '2023-02-25 14:04:07'),
(6, 'blue cap', 'قبعة زرقاء', 'services1037333175-1677341143-4441.jpg', 'blue cap very beautiful', 'قبعة زرقاء جميلة جدا', 40, 2, 6, '2023-02-25 14:05:43', '2023-02-25 14:05:43'),
(7, 'blue phone', 'جوال أزرق', 'services655637738-1677772978-284728ad-60ce-4b21-90f2-3237ee2fc592-thumbnail-770x770-70.jpeg', 'blue phone very beautiful', 'جوال أزرق جميل جدا', 900, 2, 5, '2023-03-02 14:02:58', '2023-03-02 14:02:58'),
(8, 'black phone', 'جوال أسود', 'services561859137-1677773124-41any9ofKXL._AC_UF1000,1000_QL80_.jpg', 'black phone very beautiful', 'جوال أسود جميل جدا', 940, 2, 5, '2023-03-02 14:05:24', '2023-03-02 14:05:24'),
(9, 'black shoes', 'حذاء أسود', 'services119951620-1677773263-41W69-YXuTL._AC_SY350_.jpg', 'black shoes very beautiful', 'حذاء أسود جميل جدا', 499, 2, 3, '2023-03-02 14:07:43', '2023-03-02 14:07:43'),
(10, 'blue pants', 'بنطال أزرق', 'services1573473324-1677773376-بنطلون-جينز-شبابي-بوي-فرند-john-lucca-لون-أزرق.jpg', 'blue pants very beautiful', 'بنطال أزرق جميل جدا', 150, 2, 2, '2023-03-02 14:09:36', '2023-03-02 14:09:36'),
(11, 'black glasses', 'نظارة أسود', 'services510482492-1677773492-sunglasses-blackout-000238-0506-1.jpg', 'black glasses very beautiful', 'نظارة سوداء جميلة جدا', 75, 2, 4, '2023-03-02 14:11:32', '2023-03-02 14:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Regan Cooke', 'puxojehyh@mailinator.com', NULL, '$2y$10$8BvT9qWth1OGAEGkakeGA.mhvhm9Igd9HSnGDFQ.BC3NnwgOV3eoC', 'admin', NULL, '2023-02-08 13:01:34', '2023-02-08 13:01:34'),
(2, 'tareq', 'tareq@yahoo.com', NULL, '$2y$10$8qQ7F1qDoN9gb8lGOeqWy.wfb7hZoyVg2lGXp0hmBLYtVvtzLaOsm', 'admin', NULL, '2023-02-08 13:11:15', '2023-02-08 13:11:15'),
(3, 'osama', 'osama@yahoo.com', NULL, '$2y$10$p9YXAbqeCgXc4aqxxKlwYuUpO961Drvq1RT5p5IBAqg24ax7AG26W', 'user', NULL, '2023-02-08 13:51:50', '2023-02-08 13:51:50'),
(4, 'eee', 'eee@yahoo.com', NULL, '$2y$10$mAigKHv1xpFLAvEjMvCtlOJXYR1J5gKIMOz/MknNe0D7JYw4JYFPO', 'user', 'FagezYCkEAl0FCA0E3N3ySw5ikbj7R7bJ9Lv6DOceoTm7IZRZhkPUkqZ4zyE', '2023-02-19 10:47:01', '2023-02-19 10:57:36'),
(5, 'ww', 'ww@yahoo.com', NULL, '$2y$10$FD58dRiyqy8xUM5lkTD3Yeey6OiR9FqshhKfbslVdory9QyaqUzKi', 'user', NULL, '2023-02-19 15:00:24', '2023-02-19 15:00:24'),
(6, 'www', 'www@yahoo.com', NULL, '$2y$10$1v.f4ZI2nJsUXt41iFUkJenYQ6QtZ6LrMR.phjHdJz4d1xxM13Q2C', 'admin', NULL, '2023-04-01 18:50:05', '2023-04-01 18:50:05'),
(7, 'roos', 'roos@yahoo.com', NULL, '$2y$10$n4bCLZX83EkH5CUYI0gONuRBa5rmSs22oAcbioy5dxSOlWqpROsva', 'admin', NULL, '2023-07-24 19:13:17', '2023-07-24 19:13:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
