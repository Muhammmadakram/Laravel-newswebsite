-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2023 at 10:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `author`, `image`, `created_at`, `updated_at`) VALUES
(1, 'CH AKRAM', '1693017212.jpg', '2023-08-25 21:31:49', '2023-08-25 21:33:32'),
(4, 'Nazar farid', '1693047370.jpg', '2023-08-26 05:56:10', '2023-08-26 05:56:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homenews`
--

CREATE TABLE `homenews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `discription` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(112, '2014_10_12_000000_create_users_table', 1),
(113, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(114, '2019_08_19_000000_create_failed_jobs_table', 1),
(115, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(116, '2023_08_03_152205_create_homenews_table', 1),
(117, '2023_08_03_152312_create_authors_table', 1),
(120, '2023_08_03_152403_create_newsbanners_table', 2),
(121, '2023_08_03_152426_create_newscateogries_table', 2),
(122, '2023_08_03_152440_create_postnews_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `newsbanners`
--

CREATE TABLE `newsbanners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bannerimage` varchar(255) DEFAULT NULL,
  `bannertitle` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newscateogries`
--

CREATE TABLE `newscateogries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `newscategory` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newscateogries`
--

INSERT INTO `newscateogries` (`id`, `newscategory`, `created_at`, `updated_at`) VALUES
(1, 'Sports', '2023-08-25 21:31:32', '2023-08-25 21:31:32'),
(2, 'Information', '2023-08-25 21:31:36', '2023-08-26 05:55:07'),
(3, 'Technology', '2023-08-25 21:31:40', '2023-08-26 05:55:17'),
(4, 'Entertainment', '2023-08-26 05:55:32', '2023-08-26 05:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postnews`
--

CREATE TABLE `postnews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `author_id` bigint(20) UNSIGNED DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `postnews`
--

INSERT INTO `postnews` (`id`, `Title`, `Description`, `Category`, `author_id`, `Image`, `created_at`, `updated_at`) VALUES
(1, 'Ashneer Grover Criticizes VCs Over Silicon Valley Bank Collapse; Paytm CEO Denies Investment Involvement', '<h2 style=\"margin-bottom: 10px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">Where does it come from?<p style=\'margin-bottom: 15px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\'>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\'margin-bottom: 15px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\'>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p style=\'margin-bottom: 15px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\'><br></p></h2>\n', 'Entertainment', 1, '1693017146.jpg', '2023-08-25 21:32:26', '2023-08-26 06:10:58'),
(2, 'Ashneer Grover Criticizes VCs Over Silicon Valley Bank Collapse; Paytm CEO Denies Investment Involvement', '<h2 style=\"margin-bottom: 10px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">Where does it come from?<p style=\'margin-bottom: 15px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\'>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\'margin-bottom: 15px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\'>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></h2>\n', 'Sports', 1, '1693017813.jpg', '2023-08-25 21:43:33', '2023-08-26 06:04:50'),
(3, 'Ashneer Grover Criticizes VCs Over Silicon Valley Bank Collapse; Paytm CEO Denies Investment Involvement', '<h2 style=\"margin-bottom: 10px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">Where does it come from?<p style=\'margin-bottom: 15px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\'>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\'margin-bottom: 15px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\'>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p></p></h2>\n', 'Information', 4, '1693017912.jpg', '2023-08-25 21:45:12', '2023-08-26 06:04:54'),
(4, 'Ashneer Grover Criticizes VCs Over Silicon Valley Bank Collapse; Paytm CEO Denies Investment Involvement', '<h2 style=\"margin-bottom: 10px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">Where does it come from?<p style=\'margin-bottom: 15px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\'>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\'margin-bottom: 15px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\'>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></h2>\n', 'Technology', 4, '1693048300.jpg', '2023-08-26 06:11:40', '2023-08-26 06:11:40'),
(5, 'Ashneer Grover Criticizes VCs Over Silicon Valley Bank Collapse; Paytm CEO Denies Investment Involvement', '<h2 style=\"margin-bottom: 10px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">Where does it come from?<p style=\'margin-bottom: 15px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\'>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\'margin-bottom: 15px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\'>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></h2>\n', 'Information', 1, '1693048441.jpg', '2023-08-26 06:14:01', '2023-08-26 06:14:01'),
(6, 'Ashneer Grover Criticizes VCs Over Silicon Valley Bank Collapse; Paytm CEO Denies Investment Involvement', '<h2 style=\"margin-bottom: 10px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">Where does it come from?<p style=\'margin-bottom: 15px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\'>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\'margin-bottom: 15px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\'>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></h2>\n', 'Sports', 4, '1693048490.avif', '2023-08-26 06:14:50', '2023-08-26 06:14:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1', 'Abuzaid', 'abuzaid22@gmail.com', NULL, '$2y$10$YbpZOcTSoX/iEvcd.29aRuiZ.gxoN1DB.7Qnma46ymFX27owqwZq2', NULL, '2023-08-25 21:31:12', '2023-08-25 21:31:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `homenews`
--
ALTER TABLE `homenews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsbanners`
--
ALTER TABLE `newsbanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newscateogries`
--
ALTER TABLE `newscateogries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `postnews`
--
ALTER TABLE `postnews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postnews_author_id_foreign` (`author_id`);

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
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homenews`
--
ALTER TABLE `homenews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `newsbanners`
--
ALTER TABLE `newsbanners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newscateogries`
--
ALTER TABLE `newscateogries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postnews`
--
ALTER TABLE `postnews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `postnews`
--
ALTER TABLE `postnews`
  ADD CONSTRAINT `postnews_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
