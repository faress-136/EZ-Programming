-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 04:48 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezprogramming`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Teacher_id` bigint(20) UNSIGNED NOT NULL,
  `PLanguage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Information` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` double(8,2) NOT NULL,
  `Start_date` date NOT NULL,
  `Image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `City` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `Teacher_id`, `PLanguage`, `Name`, `Information`, `Price`, `Start_date`, `Image`, `City`, `created_at`, `updated_at`) VALUES
(3, 1, 'Java', 'Easy Java 1.1', 'Java Easy 4 Week Course', 400.00, '2022-05-27', '1653178152.png', 'Alexandria', '2022-05-21 22:09:12', '2022-05-21 22:09:12'),
(4, 1, 'PHP', 'Easy PHP', 'Easy PHP 5 Weeks Course .', 150.00, '2022-05-26', '1653178314.png', 'Alexandria', '2022-05-21 22:11:54', '2022-05-21 22:11:54'),
(6, 1, 'C', 'C IS Easy', 'C Course.', 100.00, '2022-06-02', '1653178366.png', 'Alexandria', '2022-05-21 22:12:46', '2022-05-21 22:12:46'),
(8, 1, 'C++', 'C++', 'C++ Course', 200.00, '2022-06-09', '1653178536.png', 'Alexandria', '2022-05-21 22:15:36', '2022-05-21 22:15:36'),
(9, 1, 'Python', 'Python is Easy', 'Python is for everyone .', 500.00, '2022-06-11', '1653178571.png', 'Alexandria', '2022-05-21 22:16:11', '2022-05-21 22:16:11'),
(10, 2, 'CSharp', 'CSHARP is Easy', 'CSHARP Quick Course.', 185.00, '2022-06-10', '1653182433.png', 'Alexandria', '2022-05-21 23:20:33', '2022-05-21 23:20:33');

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
(5, '2021_12_17_201657_create_p_languages_table', 1),
(6, '2021_12_29_160930_create_offices_table', 1),
(7, '2021_12_29_176736_create_course_table', 1),
(8, '2022_05_17_205845_create_registered_courses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `City` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `Country`, `City`, `created_at`, `updated_at`) VALUES
(1, 'Egypt', 'Alexandria', '2022-05-21 19:10:31', '2022-05-21 19:10:31'),
(2, 'Online', 'Online', '2022-05-21 23:29:14', '2022-05-21 23:29:14');

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
-- Table structure for table `p_languages`
--

CREATE TABLE `p_languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `PLanguage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `PLanguage_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `p_languages`
--

INSERT INTO `p_languages` (`id`, `PLanguage`, `user_id`, `PLanguage_image`, `created_at`, `updated_at`) VALUES
(1, 'Python', 1, '1653167184.jpg', '2022-05-21 19:06:24', '2022-05-21 19:06:24'),
(2, 'Java', 1, '1653177710.png', '2022-05-21 22:01:50', '2022-05-21 22:01:50'),
(3, 'PHP', 1, '1653177727.png', '2022-05-21 22:02:07', '2022-05-21 22:02:07'),
(4, 'C', 1, '1653177742.png', '2022-05-21 22:02:22', '2022-05-21 22:02:22'),
(5, 'C++', 1, '1653177755.png', '2022-05-21 22:02:35', '2022-05-21 22:02:35'),
(7, 'CSharp', 1, '1653181494.png', '2022-05-21 23:04:54', '2022-05-21 23:04:54');

-- --------------------------------------------------------

--
-- Table structure for table `registered_courses`
--

CREATE TABLE `registered_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Course_id` bigint(20) UNSIGNED NOT NULL,
  `Teacher_id` bigint(20) UNSIGNED NOT NULL,
  `Student_id` bigint(20) UNSIGNED NOT NULL,
  `City` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Start_date` date NOT NULL,
  `End_Date` date NOT NULL,
  `Paid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TMoney` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registered_courses`
--

INSERT INTO `registered_courses` (`id`, `Course_id`, `Teacher_id`, `Student_id`, `City`, `Start_date`, `End_Date`, `Paid`, `TMoney`, `created_at`, `updated_at`) VALUES
(2, 9, 1, 2, 'Alexandria', '2022-05-02', '2025-05-18', 'Yes', 0.00, '2022-05-21 22:39:40', '2022-05-21 22:39:52'),
(3, 9, 1, 3, 'Alexandria', '2022-05-02', '2025-05-18', 'Yes', 0.00, '2022-05-21 23:03:27', '2022-05-21 23:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `role`, `profile_image`, `phoneNumber`, `age`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aly Aboelnasr', 'alyaboelnasr@gmail.com', 'Aboelnasr', NULL, '$2y$10$J/VAmdi2UVNTvBgiEW.x7Omhs8q0LZ/6C3dyH30tdyg8gSLf5f35y', 'Admin', '1653166603.png', '011119058000', 22, NULL, '2022-05-21 18:56:09', '2022-05-21 23:28:04'),
(2, 'Fares Ramadan', 'fofas@gmail.com', 'fofas', NULL, '$2y$10$c0ijWszfvSqG4AP.TVxytOXvM8.o.yBxHj5G.v2ArJzIKpCmzmo0W', 'Customer', '1653179957.jpeg', '011111111', 22, NULL, '2022-05-21 22:39:00', '2022-05-21 22:39:17'),
(3, 'Maged', 'Maged@gmail.com', 'Maged', NULL, '$2y$10$FGGKzze33O0IxUHF95xe0ODuFcwXBekBKJ8fw9KfM8HMBW1aAmwxm', 'Customer', '1653181385.jpeg', '6395', 22, NULL, '2022-05-21 23:02:47', '2022-05-21 23:03:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_teacher_id_foreign` (`Teacher_id`),
  ADD KEY `courses_planguage_foreign` (`PLanguage`),
  ADD KEY `courses_city_foreign` (`City`);

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
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `offices_city_unique` (`City`);

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
-- Indexes for table `p_languages`
--
ALTER TABLE `p_languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `p_languages_planguage_unique` (`PLanguage`),
  ADD KEY `p_languages_user_id_foreign` (`user_id`);

--
-- Indexes for table `registered_courses`
--
ALTER TABLE `registered_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registered_courses_course_id_foreign` (`Course_id`),
  ADD KEY `registered_courses_teacher_id_foreign` (`Teacher_id`),
  ADD KEY `registered_courses_student_id_foreign` (`Student_id`),
  ADD KEY `registered_courses_city_foreign` (`City`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `p_languages`
--
ALTER TABLE `p_languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registered_courses`
--
ALTER TABLE `registered_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_city_foreign` FOREIGN KEY (`City`) REFERENCES `offices` (`City`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_planguage_foreign` FOREIGN KEY (`PLanguage`) REFERENCES `p_languages` (`PLanguage`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_teacher_id_foreign` FOREIGN KEY (`Teacher_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `p_languages`
--
ALTER TABLE `p_languages`
  ADD CONSTRAINT `p_languages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `registered_courses`
--
ALTER TABLE `registered_courses`
  ADD CONSTRAINT `registered_courses_city_foreign` FOREIGN KEY (`City`) REFERENCES `courses` (`City`) ON DELETE CASCADE,
  ADD CONSTRAINT `registered_courses_course_id_foreign` FOREIGN KEY (`Course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `registered_courses_student_id_foreign` FOREIGN KEY (`Student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `registered_courses_teacher_id_foreign` FOREIGN KEY (`Teacher_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
