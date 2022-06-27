-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 11:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'news', NULL, '1', '2022-05-30 01:29:18', '2022-05-30 01:30:52');

-- --------------------------------------------------------

--
-- Table structure for table `districs`
--

CREATE TABLE `districs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districs`
--

INSERT INTO `districs` (`id`, `division_id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(4, '2', 'Barguna', 'barguna', '1', '2022-06-02 01:08:34', '2022-06-02 01:08:34'),
(5, '2', 'Barisal', 'barisal', '1', '2022-06-02 01:08:55', '2022-06-02 01:08:55'),
(6, '2', 'Bhola', 'bhola', '1', '2022-06-02 01:09:17', '2022-06-02 01:09:17'),
(7, '2', 'Jhalokati', 'jhalokati', '1', '2022-06-02 01:09:33', '2022-06-02 01:09:33'),
(8, '2', 'Patuakhali', 'patuakhali', '1', '2022-06-02 01:09:55', '2022-06-02 01:09:55'),
(9, '2', 'Pirojpur', 'pirojpur', '1', '2022-06-02 01:10:14', '2022-06-02 01:10:14'),
(10, '3', 'Bandarban', 'bandarban', '1', '2022-06-02 01:16:34', '2022-06-02 01:16:34'),
(11, '3', 'Brahmanbaria', 'brahmanbaria', '1', '2022-06-02 01:16:57', '2022-06-02 01:16:57'),
(12, '3', 'Chandpur', 'chandpur', '1', '2022-06-02 01:17:15', '2022-06-02 01:17:15'),
(13, '3', 'Chittagong', 'chittagong', '1', '2022-06-02 01:17:33', '2022-06-02 01:17:33'),
(14, '3', 'Comilla', 'comilla', '1', '2022-06-02 01:17:53', '2022-06-02 01:17:53'),
(15, '3', 'Cox\'s Bazar', 'coxs-bazar', '1', '2022-06-02 01:18:11', '2022-06-02 01:18:11'),
(16, '3', 'Feni', 'feni', '1', '2022-06-02 01:18:27', '2022-06-02 01:18:27'),
(17, '3', 'Khagrachhari', 'khagrachhari', '1', '2022-06-02 01:18:45', '2022-06-02 01:18:45'),
(18, '3', 'Lakshmipur', 'lakshmipur', '1', '2022-06-02 01:19:05', '2022-06-02 01:19:05'),
(19, '3', 'Noakhali', 'noakhali', '1', '2022-06-02 01:19:20', '2022-06-02 01:19:20'),
(20, '3', 'Rangamati', 'rangamati', '1', '2022-06-02 01:19:36', '2022-06-02 01:19:36'),
(21, '1', 'Dhaka', 'dhaka', '1', '2022-06-02 01:26:44', '2022-06-02 01:26:44'),
(22, '1', 'Faridpur', 'faridpur', '1', '2022-06-02 01:27:04', '2022-06-02 01:27:04'),
(23, '1', 'Gazipur', 'gazipur', '1', '2022-06-02 01:27:16', '2022-06-02 01:27:16'),
(24, '1', 'Gopalganj', 'gopalganj', '1', '2022-06-02 01:27:30', '2022-06-02 01:27:30'),
(25, '1', 'Kishoreganj', 'kishoreganj', '1', '2022-06-02 01:27:47', '2022-06-02 01:27:47'),
(26, '1', 'Madaripur', 'madaripur', '1', '2022-06-02 01:28:02', '2022-06-02 01:28:02'),
(27, '1', 'Manikganj', 'manikganj', '1', '2022-06-02 01:28:13', '2022-06-02 01:28:13'),
(28, '1', 'Munshiganj', 'munshiganj', '1', '2022-06-02 01:28:30', '2022-06-02 01:28:30'),
(29, '1', 'Narayanganj', 'narayanganj', '1', '2022-06-02 01:28:44', '2022-06-02 01:28:44'),
(30, '1', 'Narsingdi', 'narsingdi', '1', '2022-06-02 01:29:01', '2022-06-02 01:29:01'),
(31, '1', 'Rajbari', 'rajbari', '1', '2022-06-02 01:29:15', '2022-06-02 01:29:15'),
(32, '1', 'Shariatpur', 'shariatpur', '1', '2022-06-02 01:29:28', '2022-06-02 01:29:28'),
(33, '1', 'Tangail', 'tangail', '1', '2022-06-02 01:29:44', '2022-06-02 01:29:44');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 'dhaka', '1', '2022-05-26 00:15:09', '2022-05-26 00:19:29'),
(2, 'Barisal', 'barisal', '1', '2022-05-30 03:04:40', '2022-05-30 03:04:40'),
(3, 'Chittagong', 'chittagong', '1', '2022-05-30 03:05:04', '2022-05-30 03:05:16'),
(4, 'Khulna', 'khulna', '1', '2022-05-30 03:05:30', '2022-05-30 03:05:30'),
(5, 'Mymensingh', 'mymensingh', '1', '2022-05-30 03:05:42', '2022-05-30 03:05:42'),
(6, 'Rajshahi', 'rajshahi', '1', '2022-05-30 03:05:50', '2022-05-30 03:05:50'),
(7, 'Sylhet', 'sylhet', '1', '2022-05-30 03:06:10', '2022-05-30 03:06:10'),
(8, 'Rangpur', 'rangpur', '1', '2022-05-30 03:06:20', '2022-05-30 03:06:20');

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
-- Table structure for table `hostipals`
--

CREATE TABLE `hostipals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `distric_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hostipals`
--

INSERT INTO `hostipals` (`id`, `distric_id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(3, '21', 'PG', 'pg', '1', '2022-06-02 01:32:45', '2022-06-02 01:32:45'),
(4, '21', 'Dhaka Medical College', 'dhaka-medical-college', '1', '2022-06-05 08:58:10', '2022-06-05 08:58:10');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent_id` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generic_name` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `name`, `company`, `slug`, `status`, `created_at`, `updated_at`, `parent_id`, `generic_name`) VALUES
(4, 'Vitamin C', 'Tablet', 'vitamin-c', '1', '2022-05-29 22:42:00', '2022-06-05 09:04:39', NULL, 'Ascorbic Acid'),
(5, 'Vitamin C', 'Tablet', 'vitamin-c', '1', '2022-06-01 02:25:32', '2022-06-05 09:04:21', NULL, 'Ascorbic Acid');

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
(5, '2022_05_24_142707_create_divisions_table', 2),
(6, '2022_05_25_171951_create_districs_table', 3),
(7, '2022_05_25_175236_create_hostipals_table', 4),
(8, '2022_05_25_193153_create_medicines_table', 5),
(9, '2022_05_29_171503_create_departments_table', 6),
(10, '2022_05_29_183805_create_reports_table', 7),
(11, '2022_06_23_140301_create_report_details_table', 8);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reporter_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reporter_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reporter_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reporter_post_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reporter_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distric_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hospital_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hospital_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prescription_window` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicine_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generic_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dose` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicine_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicine_used` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `type`, `reporter_name`, `reporter_email`, `reporter_phone`, `reporter_post_code`, `reporter_by`, `division_id`, `distric_id`, `hospital_id`, `first_name`, `last_name`, `phone_number`, `post_code`, `gender`, `age`, `weight`, `height`, `hospital_name`, `department_id`, `prescription_window`, `noa`, `no_of_other`, `medicine_id`, `generic_name`, `company`, `dose`, `unit`, `medicine_price`, `medicine_used`, `start_date`, `end_date`, `image`, `file`, `created_at`, `updated_at`) VALUES
(83, 'reporter', 'shakir ahmed', 'phpdeveloper.shakir@gmail.com', '01740125203', '1216', 'doctor', '1', '21', '3', 'shakir', 'ahmed', '01740125203', '1216', 'male', '25', '59', '5\'6', 'PG', '1', 'mnne', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1656016491.jpg', NULL, '2022-06-24 03:34:51', '2022-06-24 03:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `report_details`
--

CREATE TABLE `report_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `report_id` int(11) DEFAULT NULL,
  `medicine_id` int(11) DEFAULT NULL,
  `generic_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dose` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicine_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicine_used` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report_details`
--

INSERT INTO `report_details` (`id`, `report_id`, `medicine_id`, `generic_name`, `company`, `dose`, `unit`, `medicine_price`, `medicine_used`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(15, 83, 4, 'Ascorbic Acid', 'Tablet', 'one', '400mg', '11', 'mwtbir', '2022-06-23', '2022-06-24', '2022-06-24 03:34:51', '2022-06-24 03:34:51');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `mobile`, `image`) VALUES
(5, 'Super Admin', 'admin@gmail.com', NULL, '$2y$10$FzeVXtVrkxHPM7yytcl9.u1A3hwUG9zbTt440kkhJbiJ5EkXRr.Zm', NULL, '2022-05-31 03:06:50', '2022-06-02 01:30:12', '017000000', '1654108211.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districs`
--
ALTER TABLE `districs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hostipals`
--
ALTER TABLE `hostipals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_details`
--
ALTER TABLE `report_details`
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
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districs`
--
ALTER TABLE `districs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostipals`
--
ALTER TABLE `hostipals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `report_details`
--
ALTER TABLE `report_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
