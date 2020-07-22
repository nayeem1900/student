-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 10:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_students`
--

CREATE TABLE `assign_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL COMMENT 'user_id=student_id',
  `roll` int(11) DEFAULT NULL,
  `class_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `shift_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_students`
--

INSERT INTO `assign_students` (`id`, `student_id`, `roll`, `class_id`, `year_id`, `group_id`, `shift_id`, `created_at`, `updated_at`) VALUES
(27, 27, NULL, 4, 2, NULL, NULL, '2020-07-16 06:33:15', '2020-07-16 06:33:15'),
(28, 27, NULL, 5, 1, NULL, NULL, '2020-07-16 08:56:29', '2020-07-16 08:56:29'),
(29, 28, NULL, 4, 1, NULL, NULL, '2020-07-19 20:25:10', '2020-07-19 20:25:10');

-- --------------------------------------------------------

--
-- Table structure for table `assign_subjects`
--

CREATE TABLE `assign_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `full_mark` double NOT NULL,
  `pass_mark` double NOT NULL,
  `subjective_mark` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_subjects`
--

INSERT INTO `assign_subjects` (`id`, `class_id`, `subject_id`, `full_mark`, `pass_mark`, `subjective_mark`, `created_at`, `updated_at`) VALUES
(7, 5, 1, 100, 33, 100, '2020-07-02 20:30:24', '2020-07-02 20:30:24'),
(8, 5, 2, 100, 33, 100, '2020-07-02 20:30:24', '2020-07-02 20:30:24'),
(9, 5, 3, 100, 33, 100, '2020-07-02 20:30:24', '2020-07-02 20:30:24'),
(10, 6, 1, 100, 33, 100, '2020-07-02 20:31:20', '2020-07-02 20:31:20'),
(11, 6, 2, 100, 33, 100, '2020-07-02 20:31:20', '2020-07-02 20:31:20'),
(12, 6, 3, 100, 33, 100, '2020-07-02 20:31:20', '2020-07-02 20:31:20'),
(13, 6, 4, 100, 33, 100, '2020-07-02 20:31:20', '2020-07-02 20:31:20'),
(14, 6, 5, 100, 33, 100, '2020-07-02 20:31:20', '2020-07-02 20:31:20'),
(15, 6, 6, 100, 33, 100, '2020-07-02 20:31:20', '2020-07-02 20:31:20'),
(16, 7, 1, 100, 33, 100, '2020-07-02 20:32:20', '2020-07-02 20:32:20'),
(17, 7, 2, 100, 33, 100, '2020-07-02 20:32:20', '2020-07-02 20:32:20'),
(18, 7, 3, 100, 33, 100, '2020-07-02 20:32:20', '2020-07-02 20:32:20'),
(19, 7, 4, 100, 33, 100, '2020-07-02 20:32:20', '2020-07-02 20:32:20'),
(20, 7, 5, 100, 33, 100, '2020-07-02 20:32:20', '2020-07-02 20:32:20'),
(21, 7, 6, 100, 33, 100, '2020-07-02 20:32:20', '2020-07-02 20:32:20'),
(22, 8, 1, 100, 33, 100, '2020-07-02 20:35:27', '2020-07-02 20:35:27'),
(23, 8, 2, 100, 33, 100, '2020-07-02 20:35:27', '2020-07-02 20:35:27'),
(24, 8, 3, 100, 33, 100, '2020-07-02 20:35:27', '2020-07-02 20:35:27'),
(25, 8, 4, 100, 33, 100, '2020-07-02 20:35:27', '2020-07-02 20:35:27'),
(26, 8, 5, 100, 33, 100, '2020-07-02 20:35:27', '2020-07-02 20:35:27'),
(27, 8, 6, 100, 33, 100, '2020-07-02 20:35:27', '2020-07-02 20:35:27'),
(28, 4, 1, 100, 33, 100, '2020-07-03 00:28:38', '2020-07-03 00:28:38'),
(29, 4, 3, 100, 33, 100, '2020-07-03 00:28:38', '2020-07-03 00:28:38'),
(30, 4, 2, 100, 33, 100, '2020-07-03 00:28:38', '2020-07-03 00:28:38');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Assistan Teacher', '2020-07-03 01:10:16', '2020-07-03 01:10:16'),
(2, 'Teacher', '2020-07-03 01:10:46', '2020-07-03 01:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `discount_students`
--

CREATE TABLE `discount_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assign_student_id` int(11) NOT NULL,
  `fee_category_id` int(11) DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discount_students`
--

INSERT INTO `discount_students` (`id`, `assign_student_id`, `fee_category_id`, `discount`, `created_at`, `updated_at`) VALUES
(7, 27, 1, 20, '2020-07-16 06:33:15', '2020-07-16 06:38:23'),
(8, 28, 1, 20, '2020-07-16 08:56:29', '2020-07-16 08:56:29'),
(9, 29, 1, 20, '2020-07-19 20:25:10', '2020-07-19 20:25:10');

-- --------------------------------------------------------

--
-- Table structure for table `exam_types`
--

CREATE TABLE `exam_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_types`
--

INSERT INTO `exam_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '1st Terminal Examination', '2020-07-02 11:00:13', '2020-07-02 11:00:13'),
(2, '2nd Terminal Examination', '2020-07-02 11:01:09', '2020-07-02 11:05:29'),
(3, 'Final Examination', '2020-07-02 11:05:42', '2020-07-02 11:05:42');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fee_categories`
--

CREATE TABLE `fee_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_categories`
--

INSERT INTO `fee_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Regestration Fee', '2020-06-28 16:43:01', '2020-06-28 16:43:01'),
(2, 'Monthly Fee', '2020-06-28 16:43:49', '2020-06-28 16:44:47'),
(3, 'Exam Fee', '2020-06-28 16:45:11', '2020-06-28 16:45:11');

-- --------------------------------------------------------

--
-- Table structure for table `fee_category_amounts`
--

CREATE TABLE `fee_category_amounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fee_category_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_category_amounts`
--

INSERT INTO `fee_category_amounts` (`id`, `fee_category_id`, `class_id`, `amount`, `created_at`, `updated_at`) VALUES
(88, 1, 4, 100, '2020-07-02 09:50:14', '2020-07-02 09:50:14'),
(89, 1, 5, 200, '2020-07-02 09:50:14', '2020-07-02 09:50:14'),
(90, 1, 6, 500, '2020-07-02 09:50:14', '2020-07-02 09:50:14'),
(91, 1, 7, 700, '2020-07-02 09:50:14', '2020-07-02 09:50:14'),
(92, 1, 8, 600, '2020-07-02 09:50:14', '2020-07-02 09:50:14'),
(93, 2, 4, 100, '2020-07-02 10:04:39', '2020-07-02 10:04:39'),
(94, 2, 5, 100, '2020-07-02 10:04:39', '2020-07-02 10:04:39'),
(95, 2, 6, 300, '2020-07-02 10:04:39', '2020-07-02 10:04:39'),
(96, 2, 7, 400, '2020-07-02 10:04:39', '2020-07-02 10:04:39'),
(97, 2, 8, 500, '2020-07-02 10:04:39', '2020-07-02 10:04:39'),
(98, 3, 4, 100, '2020-07-02 10:05:19', '2020-07-02 10:05:19'),
(99, 3, 5, 200, '2020-07-02 10:05:19', '2020-07-02 10:05:19'),
(100, 3, 6, 300, '2020-07-02 10:05:19', '2020-07-02 10:05:19'),
(101, 3, 7, 400, '2020-07-02 10:05:19', '2020-07-02 10:05:19'),
(102, 3, 8, 500, '2020-07-02 10:05:19', '2020-07-02 10:05:19');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_06_21_235848_create_sliders_table', 4),
(6, '2020_06_26_051314_create_student_classes_table', 5),
(7, '2020_06_27_004712_create_years_table', 6),
(8, '2020_06_27_031239_create_student_groups_table', 7),
(9, '2020_06_28_000138_create_student_shifts_table', 8),
(10, '2020_06_28_142935_create_fee_categories_table', 9),
(11, '2020_06_28_231242_create_fee_category_amounts_table', 10),
(12, '2020_07_02_163937_create_exam_types_table', 11),
(13, '2020_07_02_235237_create_subjects_table', 12),
(14, '2020_07_03_005245_create_assign_subjects_table', 13),
(15, '2020_07_03_065638_create_designations_table', 14),
(17, '2014_10_12_000000_create_users_table', 15),
(18, '2020_07_03_151547_create_assign_students_table', 16),
(21, '2020_07_03_152226_create_discount_students_table', 17);

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
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(5, '202006231233slider1.png', 1, NULL, '2020-06-23 06:33:55', '2020-06-23 06:33:55'),
(6, '202006231234slider2.jpg', 1, NULL, '2020-06-23 06:34:06', '2020-06-23 06:34:06'),
(7, '202006231234slider3.jpg', 1, NULL, '2020-06-23 06:34:17', '2020-06-23 06:34:17'),
(8, '202006231549ctg.jpg', 1, NULL, '2020-06-23 09:49:31', '2020-06-23 09:49:31');

-- --------------------------------------------------------

--
-- Table structure for table `student_classes`
--

CREATE TABLE `student_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_classes`
--

INSERT INTO `student_classes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'One', '2020-06-26 18:23:21', '2020-06-26 18:23:21'),
(5, 'Two', '2020-07-01 10:33:05', '2020-07-01 10:33:05'),
(6, 'Three', '2020-07-01 10:39:40', '2020-07-01 10:39:40'),
(7, 'Four', '2020-07-01 10:39:50', '2020-07-01 10:39:50'),
(8, 'Five', '2020-07-01 10:40:00', '2020-07-01 10:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `student_groups`
--

CREATE TABLE `student_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_groups`
--

INSERT INTO `student_groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Commerce', '2020-06-26 21:28:22', '2020-07-09 19:13:15'),
(2, 'Arts', '2020-06-26 21:29:17', '2020-06-26 21:29:17'),
(3, 'Science', '2020-06-27 18:21:25', '2020-07-09 19:13:04');

-- --------------------------------------------------------

--
-- Table structure for table `student_shifts`
--

CREATE TABLE `student_shifts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_shifts`
--

INSERT INTO `student_shifts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Shift A', '2020-06-27 18:29:58', '2020-07-09 19:12:40');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bangla', '2020-07-02 18:12:21', '2020-07-02 18:12:21'),
(2, 'Math', '2020-07-02 18:12:40', '2020-07-02 18:12:53'),
(3, 'English', '2020-07-02 18:15:46', '2020-07-02 18:15:46'),
(4, 'General Science', '2020-07-02 18:16:10', '2020-07-02 18:16:10'),
(5, 'Social Science', '2020-07-02 18:16:23', '2020-07-02 18:16:23'),
(6, 'Islamic Studies', '2020-07-02 18:16:39', '2020-07-02 18:16:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'student,employee,admin',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_occupation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_occupation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'admin=head of software,operator=computer operator,user=employee',
  `join_date` date DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `monthly_income_family` double DEFAULT NULL,
  `examination_centre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `center_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medical_exam_roll` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_merit_list` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_institute_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsc_institute_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_year_passing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_result` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_board_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsc_year_passing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsc_result` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsc_board_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive,1=active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `email`, `email_verified_at`, `password`, `mobile`, `address`, `gender`, `image`, `fname`, `mname`, `f_occupation`, `m_occupation`, `religion`, `id_no`, `dob`, `code`, `role`, `join_date`, `designation_id`, `salary`, `monthly_income_family`, `examination_centre`, `center_code`, `medical_exam_roll`, `position_merit_list`, `ssc_institute_name`, `hsc_institute_name`, `ssc_year_passing`, `ssc_result`, `ssc_board_name`, `hsc_year_passing`, `hsc_result`, `hsc_board_name`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Nayeem', 'nayeembd84@gmail.com', NULL, '$2y$10$h3EMrzKz9IPtPFR8BEqdHe.fB1GQBkeC/vvUZEd18F.U.dSaK4mhq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(2, 'admin', 'Nayeem', 'harun.ibf@gmail.com', NULL, '$2y$10$i84zNWMSVPdVyvrsQ/5BIePWSSJ8VilNy9qYJefKH/SfRBLTLcPea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4657', 'Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2020-07-03 10:36:21', '2020-07-03 10:39:50'),
(3, 'admin', 'masud', 'masud@gmail.com', NULL, '$2y$10$8ioUA/ZF7tmmYMs2s6GJY.seltRXWmOMff1LZhFJD4KlA4Lqmb/pC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2366', 'Operator', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2020-07-08 17:51:44', '2020-07-08 17:51:44'),
(27, 'student', 'Saymon', NULL, NULL, '$2y$10$CQUFB/H7o5zMHWhDEjWkheIeNhFsSqzH/PkJ5jWsZE/0McesBjnhC', '0181736374839', 'Raipur, Lakshmipur', 'male', NULL, 'Iqbal', 'Hasina', NULL, NULL, 'islam', '20190001', '2014-11-16', '8166', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2020-07-16 06:33:15', '2020-07-16 06:33:15'),
(28, 'student', 'Kulsum Akter', NULL, NULL, '$2y$10$FEmgYrBCmKwjwebo9SKz0uP9BDP6AwNu0BGT45/rHRAZzSdZJZkE2', '01812345678', 'Kalikapur, SOnaimuri, Noakhali', 'female', '202007201232download (1).jpg', 'Abdul Malek', 'Amena Begum', NULL, NULL, 'islam', '20200028', '1999-02-20', '3045', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2020-07-19 20:25:10', '2020-07-20 06:32:03');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '2020', '2020-06-26 19:18:24', '2020-06-26 19:18:24'),
(2, '2019', '2020-06-26 19:24:05', '2020-06-26 19:24:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_students`
--
ALTER TABLE `assign_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_subjects`
--
ALTER TABLE `assign_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `designations_name_unique` (`name`);

--
-- Indexes for table `discount_students`
--
ALTER TABLE `discount_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_types`
--
ALTER TABLE `exam_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `exam_types_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_categories`
--
ALTER TABLE `fee_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fee_categories_name_unique` (`name`);

--
-- Indexes for table `fee_category_amounts`
--
ALTER TABLE `fee_category_amounts`
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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_classes`
--
ALTER TABLE `student_classes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_classes_name_unique` (`name`);

--
-- Indexes for table `student_groups`
--
ALTER TABLE `student_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_groups_name_unique` (`name`);

--
-- Indexes for table `student_shifts`
--
ALTER TABLE `student_shifts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_shifts_name_unique` (`name`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subjects_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `years_name_unique` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_students`
--
ALTER TABLE `assign_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `assign_subjects`
--
ALTER TABLE `assign_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `discount_students`
--
ALTER TABLE `discount_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `exam_types`
--
ALTER TABLE `exam_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_categories`
--
ALTER TABLE `fee_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fee_category_amounts`
--
ALTER TABLE `fee_category_amounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_classes`
--
ALTER TABLE `student_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_groups`
--
ALTER TABLE `student_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_shifts`
--
ALTER TABLE `student_shifts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
