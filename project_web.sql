-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 03:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_cadet_data`
--

CREATE TABLE `add_cadet_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classNo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_cadet_data`
--

INSERT INTO `add_cadet_data` (`id`, `name`, `department`, `classNo`, `year`, `created_at`, `updated_at`) VALUES
(32, 'Austin R', 'BCA', '662', 'Third Year', '2024-04-14 13:39:13', '2024-04-14 13:39:13'),
(33, 'Nishanth R', 'BCA', '254', 'Third Year', '2024-04-14 13:39:28', '2024-04-14 13:39:28'),
(34, 'Prince Rojer R', 'BA English', '125', 'Third Year', '2024-04-14 13:39:48', '2024-04-14 13:39:48'),
(35, 'Pavithra', 'BA Tamil', '589', 'Third Year', '2024-04-14 13:40:07', '2024-04-14 13:40:07'),
(36, 'Rethika', 'BA English', '258', 'Third Year', '2024-04-14 13:40:42', '2024-04-14 13:40:42'),
(37, 'Binolin', 'BA English (Self)', '897', 'Third Year', '2024-04-14 13:40:55', '2024-04-14 13:40:55'),
(38, 'Babisha', 'History', '25', 'Third Year', '2024-04-14 13:41:08', '2024-04-14 13:41:08'),
(39, 'Agash R', 'Chmistory', '78', 'Second Year', '2024-04-14 13:41:24', '2024-04-14 13:41:24'),
(40, 'Sanjay', 'BA English', '58', 'First Year', '2024-04-14 13:41:42', '2024-04-14 13:41:42'),
(41, 'Ponkumar', 'B.Com', '65', 'Second Year', '2024-04-14 13:42:14', '2024-04-14 13:42:14'),
(42, 'Ananya', 'BBA', '356', 'Second Year', '2024-04-14 13:42:47', '2024-04-14 13:42:47'),
(43, 'vibisha', 'BA English', '87', 'Second Year', '2024-04-14 13:43:35', '2024-04-14 13:43:35'),
(44, 'vini', 'BA English', '25', 'Second Year', '2024-04-14 13:43:47', '2024-04-14 13:43:47'),
(45, 'selva besy', 'BA English', '256', 'Second Year', '2024-04-14 13:44:10', '2024-04-14 13:44:10'),
(47, 'reneesh', 'History', '889', 'Second Year', '2024-04-14 13:44:57', '2024-04-14 13:44:57'),
(48, 'navanithan', 'Chmistory', '662', 'Second Year', '2024-04-14 13:45:18', '2024-04-14 13:45:18'),
(49, 'Toni', 'Computer Science', '789', 'First Year', '2024-04-14 13:45:55', '2024-04-14 13:45:55'),
(50, 'Aakash ram', 'Computer Science', '784', 'First Year', '2024-04-14 13:46:05', '2024-04-14 13:46:05'),
(51, 'aarif', 'Computer Science', '78', 'First Year', '2024-04-14 13:46:14', '2024-04-14 13:46:14'),
(52, 'pravin', 'BBA', '787', 'First Year', '2024-04-14 13:46:29', '2024-04-14 13:46:29'),
(53, 'meena', 'Data Science', '444', 'First Year', '2024-04-14 13:47:12', '2024-04-14 13:47:12'),
(54, 'aswitha', 'BA English', '447', 'First Year', '2024-04-14 13:47:30', '2024-04-14 13:47:30'),
(55, 'aswini KL', 'History', '899', 'First Year', '2024-04-14 13:47:43', '2024-04-14 13:47:43'),
(56, 'siva selvan', 'History', '789', 'First Year', '2024-04-14 13:48:10', '2024-04-14 13:48:10'),
(57, 'agith', 'History', '781', 'First Year', '2024-04-14 13:48:19', '2024-04-14 13:48:19'),
(58, 'sugenthan', 'History', '787', 'First Year', '2024-04-14 13:48:29', '2024-04-14 13:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department`, `created_at`, `updated_at`) VALUES
(2, 'BCA', '2024-04-09 06:46:34', '2024-04-09 06:46:34'),
(4, 'Computer Science', '2024-04-09 07:18:35', '2024-04-09 07:18:35'),
(5, 'Maths', '2024-04-09 07:19:39', '2024-04-09 07:19:39'),
(10, 'BA Tamil', '2024-04-10 10:46:27', '2024-04-10 10:46:27'),
(12, 'BA English', '2024-04-14 13:37:50', '2024-04-14 13:37:50'),
(13, 'BA English (Self)', '2024-04-14 13:38:03', '2024-04-14 13:38:03'),
(14, 'Chmistory', '2024-04-14 13:38:28', '2024-04-14 13:38:28'),
(15, 'Data Science', '2024-04-14 13:38:51', '2024-04-14 13:38:51'),
(16, 'History', '2024-04-14 13:40:27', '2024-04-14 13:40:27'),
(17, 'B.Com', '2024-04-14 13:42:00', '2024-04-14 13:42:00');

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
-- Table structure for table `make_ods`
--

CREATE TABLE `make_ods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FD_FY` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FD_SY` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FD_TY` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HD_FY` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HD_SY` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HD_TY` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `make_ods`
--

INSERT INTO `make_ods` (`id`, `Date`, `FD_FY`, `FD_SY`, `FD_TY`, `HD_FY`, `HD_SY`, `HD_TY`, `created_at`, `updated_at`) VALUES
(14, '2024-04-14', '40,49,50,51,52,53,54,55,56', '39,41,42,43,44', '32,33,34', '57,58', '47,48', '37,38', '2024-04-14 13:49:58', '2024-04-14 13:50:53');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_07_181737_create_departments_table', 2),
(6, '2024_04_09_132416_create_add_cadet_data_table', 3),
(9, '2024_04_14_073216_create_make_ods_table', 4);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_cadet_data`
--
ALTER TABLE `add_cadet_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `make_ods`
--
ALTER TABLE `make_ods`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `make_ods_date_unique` (`Date`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_cadet_data`
--
ALTER TABLE `add_cadet_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `make_ods`
--
ALTER TABLE `make_ods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
