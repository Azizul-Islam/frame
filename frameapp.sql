-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: frameapp_db
-- Generation Time: Nov 25, 2024 at 01:11 PM
-- Server version: 8.0.39
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frameapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` bigint UNSIGNED NOT NULL,
  `heading_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_heading_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_heading_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_bn` text COLLATE utf8mb4_unicode_ci,
  `instruction_bn` text COLLATE utf8mb4_unicode_ci,
  `instruction_en` text COLLATE utf8mb4_unicode_ci,
  `instruction_two_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction_two_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frame_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frame_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `heading_en`, `heading_bn`, `sub_heading_en`, `sub_heading_bn`, `description_en`, `description_bn`, `instruction_bn`, `instruction_en`, `instruction_two_en`, `instruction_two_bn`, `frame_one`, `frame_two`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Quod dolores molesti', 'Cumque distinctio N', 'Qui commodi dolore q', 'Voluptatum cupiditat', 'আপনার নিজের বৈশাখ উদযাপনের ছবি আপলোড করুন এবং সঠিক তথ্য দিয়ে ফর্মটি পূরণ করুন। খুব সহজেই আপনার নতুন ছবিটি ডাউনলোড করুন ( ডাউনলোড বাটনে ক্লিক করে) ডাউনলোড করা ছবিটি আপনার Facebook Profile পিকচার হিসেবে যুক্ত করুন এবং অবশ্যই হ্যাসট্যাগ #safwahmart1431 ক্যাপশনে ব্যবহার করুন', 'আপনার নিজের বৈশাখ উদযাপনের ছবি আপলোড করুন এবং সঠিক তথ্য দিয়ে ফর্মটি পূরণ করুন। খুব সহজেই আপনার নতুন ছবিটি ডাউনলোড করুন ( ডাউনলোড বাটনে ক্লিক করে) ডাউনলোড করা ছবিটি আপনার Facebook Profile পিকচার হিসেবে যুক্ত করুন এবং অবশ্যই হ্যাসট্যাগ #safwahmart1431 ক্যাপশনে ব্যবহার করুন', 'ডাউনলোড করার আগে আপনার পছন্দমতো একটি ছবি সিলেক্ট করে নিন।', 'ডাউনলোড করার আগে আপনার পছন্দমতো একটি ছবি সিলেক্ট করে নিন।', 'ছবির জন্য আপনার তথ্য দিন', 'ছবির জন্য আপনার তথ্য দিন', '1843698856.png', NULL, 1, '2024-11-25 06:54:30', '2024-11-25 13:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
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
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_04_02_064010_create_campaigns_table', 1),
(7, '2024_04_03_043100_create_settings_table', 1),
(8, '2024_04_03_064238_create_perticipants_table', 1);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perticipants`
--

CREATE TABLE `perticipants` (
  `id` bigint UNSIGNED NOT NULL,
  `campaign_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perticipants`
--

INSERT INTO `perticipants` (`id`, `campaign_id`, `name`, `mobile`, `designation`, `photo`, `created_at`, `updated_at`) VALUES
(1, 1, 'Reese Hoover', '01738040305', NULL, '1340293110.jpg', '2024-11-25 06:58:13', '2024-11-25 06:58:13'),
(2, 1, 'AkijBashir Group', '01738040305', NULL, '950747526.jpg', '2024-11-25 09:17:28', '2024-11-25 09:17:28'),
(3, 1, 'az', '01738040305', NULL, '1412545044.jpg', '2024-11-25 09:26:58', '2024-11-25 09:26:58'),
(4, 1, 'AkijBashir Group', '01738040305', NULL, '960398090.jpg', '2024-11-25 09:35:26', '2024-11-25 09:35:26'),
(5, 1, 'AkijBashir Glass', '01738040305', NULL, '1922948762.jpg', '2024-11-25 11:13:47', '2024-11-25 11:13:47'),
(6, 1, 'AkijBashir Group', '01738040305', NULL, '2029134049.jpg', '2024-11-25 11:15:20', '2024-11-25 11:15:20'),
(7, 1, 'AkijBashir Group', '+8801738040305', NULL, '396649383.jpg', '2024-11-25 11:55:03', '2024-11-25 11:55:03'),
(8, 1, 'AkijBashir Group', '01738040305', NULL, '646849889.jpg', '2024-11-25 11:59:48', '2024-11-25 11:59:48'),
(9, 1, 'AkijBashir Group', '01738040305', NULL, '387236632.jpg', '2024-11-25 12:00:54', '2024-11-25 12:00:54'),
(10, 1, 'AkijBashir Group', '01738040305', NULL, '2104220679.jpg', '2024-11-25 12:01:54', '2024-11-25 12:01:54'),
(11, 1, NULL, NULL, NULL, '163556186.jpg', '2024-11-25 12:54:30', '2024-11-25 12:54:30'),
(12, 1, NULL, NULL, NULL, '1018556498.jpg', '2024-11-25 12:55:14', '2024-11-25 12:55:14'),
(13, 1, NULL, NULL, NULL, '111733635.jpg', '2024-11-25 12:56:11', '2024-11-25 12:56:11');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `favicon`, `company_name`, `language`, `meta_title`, `facebook`, `twitter`, `instagram`, `youtube`, `linkedin`, `telegram`, `created_at`, `updated_at`) VALUES
(1, '1767993180.png', NULL, 'AkijBashir Glass', 'en', 'AkijBashir Glass', 'https://www.facebook.com/akijbashirglass/', NULL, NULL, 'https://www.youtube.com/@AkijBashirGlass', 'https://www.linkedin.com/company/akijbashir-glass/posts/?feedView=all', NULL, '2024-11-25 06:48:55', '2024-11-25 13:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Azizul Islam', 'cseazizul@gmail.com', NULL, '$2y$12$qnszJxNVPiELAdSRqGmpauQqKmfHKSqbBQ/mQuxGpKJ5pUtI.XAPG', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `perticipants`
--
ALTER TABLE `perticipants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perticipants`
--
ALTER TABLE `perticipants`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
