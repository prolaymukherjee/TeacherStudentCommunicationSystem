-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 05:10 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrollment`
--

-- --------------------------------------------------------

--
-- Table structure for table `counselling`
--

CREATE TABLE `counselling` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_roll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counselling`
--

INSERT INTO `counselling` (`id`, `student_name`, `student_roll`, `semester`, `reason`, `action`, `date`, `subject`) VALUES
(3, 'Prolay Mukherjee', '151-15-5182', 'Level 1 Term 2', 'Develop Your Behavior', 'How Can You Delevop Your Behavior', '2018-11-03', 'Dear Guardian I want to meet with you.'),
(4, 'Prolay Mukherjee', '151-15-5182', 'Level 1 Term 2', 'Develop Your Behavior', 'How Can You Delevop Your CGPA', '2018-11-01', 'Dear Guardian I want to meet with you.');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled`
--

CREATE TABLE `enrolled` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrolled`
--

INSERT INTO `enrolled` (`id`, `student_id`, `teacher_id`, `created_at`, `updated_at`) VALUES
(4, 10, 2, NULL, NULL),
(5, 11, 2, NULL, NULL),
(6, 10, 4, NULL, NULL),
(7, 14, 4, NULL, NULL),
(8, 13, 4, NULL, NULL),
(9, 15, 4, NULL, NULL),
(10, 16, 4, NULL, NULL),
(11, 17, 4, NULL, NULL),
(12, 11, 4, NULL, NULL),
(13, 12, 4, NULL, NULL),
(14, 18, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `teacher_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`, `teacher_name`) VALUES
(8, 'Md. Safayet Hossain', 'safayet2218@gmail.com', 'Hello, Red', NULL, NULL, 'masud rabbani'),
(9, 'Prolay Mukherjee', 'prolaycsediu@gmail.com', 'hi prolay', NULL, NULL, 'masud rabbani');

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
(1, '2018_05_13_200109_create_admin_tbl_table', 1),
(2, '2018_05_15_192349_create_student_tbl_table', 2),
(3, '2018_05_17_200519_create_teacher_tbl_table', 3),
(4, '2018_09_20_064501_create_notification_tbl_table', 4),
(5, '2018_09_27_052301_add_counselling_table', 5),
(6, '2018_09_27_065657_create_jobs_table', 6),
(7, '2018_09_27_065759_create_failed_jobs_table', 6),
(8, '2018_09_27_075455_create_message_table', 7),
(9, '2018_09_27_082314_create_student_to_teacher_message_table', 8),
(10, '2018_10_02_184141_create_result_table', 9),
(11, '2018_10_02_184947_create_result_table', 10),
(12, '2018_10_09_051602_add_teacher_initial_to_teacher_tbl', 11),
(13, '2018_10_09_053139_enrolled', 12),
(14, '2018_10_09_072030_add_teacher_name_to_message', 13),
(15, '2018_10_09_072803_add_student_name_to_student_to_teacher_message', 14);

-- --------------------------------------------------------

--
-- Table structure for table `notification_tbl`
--

CREATE TABLE `notification_tbl` (
  `notification_id` int(10) UNSIGNED NOT NULL,
  `notification_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notification_tbl`
--

INSERT INTO `notification_tbl` (`notification_id`, `notification_content`) VALUES
(4, 'hi all student'),
(5, 'hi all student'),
(6, 'hi'),
(7, 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_roll` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_semester` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_result` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `student_name`, `student_roll`, `student_semester`, `student_result`) VALUES
(6, 'Prolay', '151-15-5182', 'Lavel-1 Term-1', '3.50'),
(7, 'Prolay', '151-15-5182', 'Lavel-1 Term-3', '3.50'),
(8, 'Prolay', '151-15-5182', 'Lavel-1 Term-1', '3.33');

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_roll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_fathername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_mothername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`student_id`, `student_name`, `student_roll`, `student_fathername`, `student_mothername`, `student_email`, `student_password`, `student_address`, `student_year`, `student_department`, `student_image`, `created_at`, `updated_at`) VALUES
(12, 'Sadia Sultana', '151-15-4689', 'Md. Abdus Samad Sheakh', 'Selina Begum', 'eqnx.tania@gmail.com', '22222', 'Magura', '2014', 'CSE', 'image/nuzdUFPTUF5MOQPftkSK.png', NULL, NULL),
(18, 'Prolay Mukherjee', '151-15-5182', 'Susthanto Mukherjee', 'Laxmi Mukherjee', 'prolaycsediu@gmail.com', '12345', 'Narail', '2014', 'CSE', 'image/OSaefBwX3lf6uBnJS4kC.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_to_teacher_message`
--

CREATE TABLE `student_to_teacher_message` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `student_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_to_teacher_message`
--

INSERT INTO `student_to_teacher_message` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`, `student_name`) VALUES
(5, 'masud rabbani', 'rabbani@gmail.com', 'sir', NULL, NULL, 'Prolay Mukherjee');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_tbl`
--

CREATE TABLE `teacher_tbl` (
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `teacher_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `password` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_initial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_tbl`
--

INSERT INTO `teacher_tbl` (`teacher_id`, `teacher_Name`, `teacher_department`, `teacher_image`, `teacher_email`, `teacher_phone`, `created_at`, `updated_at`, `password`, `teacher_initial`) VALUES
(3, 'Sadman', 'BBA', 'image/byYMDtdoii7HRUgorbz4.png', 'sadman@gmail.com', '3224', NULL, NULL, '12124', 'DMCX'),
(4, 'masud rabbani', 'CSE', 'image/8plJ40grH02AZL4aPkod.jpg', 'rabbani@gmail.com', '0170000000', NULL, NULL, '12345', 'MR'),
(7, 'Alamin', 'CSE', 'image/VAV2KugOpUfGzKN6yJpo.png', 'alamin@gmail.com', '01700000', NULL, NULL, '12345', 'Al');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counselling`
--
ALTER TABLE `counselling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolled`
--
ALTER TABLE `enrolled`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_tbl`
--
ALTER TABLE `notification_tbl`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_to_teacher_message`
--
ALTER TABLE `student_to_teacher_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_tbl`
--
ALTER TABLE `teacher_tbl`
  ADD PRIMARY KEY (`teacher_id`),
  ADD UNIQUE KEY `teacher_tbl_teacher_initial_unique` (`teacher_initial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counselling`
--
ALTER TABLE `counselling`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `enrolled`
--
ALTER TABLE `enrolled`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `notification_tbl`
--
ALTER TABLE `notification_tbl`
  MODIFY `notification_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `student_to_teacher_message`
--
ALTER TABLE `student_to_teacher_message`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `teacher_tbl`
--
ALTER TABLE `teacher_tbl`
  MODIFY `teacher_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
