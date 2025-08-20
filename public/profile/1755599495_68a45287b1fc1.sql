-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 14, 2025 at 05:52 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `winngooboostmedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

DROP TABLE IF EXISTS `announcements`;
CREATE TABLE IF NOT EXISTS `announcements` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `announcements_created_by_foreign` (`created_by`)
) ENGINE=MyISAM AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `message`, `image`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Meeting Reminder', 'Don\'t forget the 11AM meeting.', NULL, 33, '2025-07-24 04:42:55', '2025-07-24 04:42:55'),
(91, 'good evening', 'good mrng', 'announcements/V0zizuEuY7HuBlakAD8p28aGVb9Pzi6r0hmdgFdH.mp4', 33, '2025-08-05 04:35:47', '2025-08-05 04:35:47'),
(92, 'good evening', 'good mrng', 'announcements/wXx6SN924lRgtqRwSrdQgVGpzqlZThcYcNTB06t9.mp4', 33, '2025-08-05 04:49:54', '2025-08-05 04:49:54'),
(93, 'good evening', 'good mrng', 'announcements/k3JOkJYYGrr85llISE4sb2Qdyy7t7sfsUeXbGdyf.mp4', 33, '2025-08-05 06:31:29', '2025-08-05 06:31:29'),
(94, 'good evening', 'hi', 'announcements/689331a7b272e.png', 33, '2025-08-06 06:12:47', '2025-08-06 06:12:47'),
(95, 'good evening', 'good mrnggg', NULL, 33, '2025-08-06 06:15:20', '2025-08-06 06:15:20'),
(96, 'good evening', 'hi', 'announcements/68944d6d776be.png', 33, '2025-08-07 02:23:33', '2025-08-07 02:23:33'),
(88, 'good evening', 'good mrng', 'announcements/kCGRYBlB0FHlSRVNR41wf0zo0FhpkemIjicUBcxJ.mp4', 33, '2025-08-05 03:42:40', '2025-08-05 03:42:40'),
(89, 'good evening', 'good mrng', 'announcements/u2g4zcIYZKsYNTVQ69emmVSnqObStVMqo6Oi2uZw.mp4', 33, '2025-08-05 04:27:43', '2025-08-05 04:27:43'),
(90, 'good evening', 'good mrng', 'announcements/w3fZSYQDhuRcB7SkxOaOhsJhjh7hzodfzJ9KnwPK.mp4', 33, '2025-08-05 04:29:01', '2025-08-05 04:29:01'),
(97, NULL, NULL, 'announcements/68997cc58ed2e.png', 33, '2025-08-11 00:46:53', '2025-08-11 00:46:53');

-- --------------------------------------------------------

--
-- Table structure for table `announcement_comments`
--

DROP TABLE IF EXISTS `announcement_comments`;
CREATE TABLE IF NOT EXISTS `announcement_comments` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `announcement_id` bigint UNSIGNED NOT NULL,
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `user_type` enum('employee','employer') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `announcement_comments_announcement_id_foreign` (`announcement_id`),
  KEY `announcement_comments_parent_id_foreign` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcement_comments`
--

INSERT INTO `announcement_comments` (`id`, `announcement_id`, `parent_id`, `user_type`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 91, NULL, 'employer', 23, 'Hello guys i\'m a new hr', '2025-08-07 00:49:51', '2025-08-07 00:49:51'),
(2, 91, 1, 'employee', 32, 'welocome to our company', '2025-08-07 00:50:40', '2025-08-07 00:50:40'),
(3, 91, 1, 'employee', 16, 'super mam', '2025-08-07 00:51:26', '2025-08-07 00:51:26'),
(4, 91, NULL, 'employer', 33, 'the company is opening on', '2025-08-07 00:53:27', '2025-08-07 00:53:27'),
(5, 91, 4, 'employee', 22, 'it\'s very good news', '2025-08-07 00:54:01', '2025-08-07 00:54:01'),
(6, 91, 4, 'employee', 22, 'it\'s very good news', '2025-08-07 01:53:19', '2025-08-07 01:53:19'),
(7, 91, 1, 'employer', 29, 'thanks for your update', '2025-08-13 06:27:34', '2025-08-13 06:27:34');

-- --------------------------------------------------------

--
-- Table structure for table `announcement_likes`
--

DROP TABLE IF EXISTS `announcement_likes`;
CREATE TABLE IF NOT EXISTS `announcement_likes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `announcement_id` bigint UNSIGNED NOT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reaction_type` enum('like','love','laugh') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'like',
  PRIMARY KEY (`id`),
  UNIQUE KEY `announcement_likes_announcement_id_employee_id_unique` (`announcement_id`,`employee_id`),
  KEY `announcement_likes_employee_id_foreign` (`employee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcement_likes`
--

INSERT INTO `announcement_likes` (`id`, `announcement_id`, `employee_id`, `created_at`, `updated_at`, `reaction_type`) VALUES
(1, 1, 23, NULL, NULL, 'like'),
(2, 1, 5, NULL, NULL, 'like'),
(4, 1, 8, NULL, NULL, 'like');

-- --------------------------------------------------------

--
-- Table structure for table `announcement_reads`
--

DROP TABLE IF EXISTS `announcement_reads`;
CREATE TABLE IF NOT EXISTS `announcement_reads` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `announcement_id` bigint UNSIGNED NOT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `announcement_reads_announcement_id_foreign` (`announcement_id`),
  KEY `announcement_reads_employee_id_foreign` (`employee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcement_reads`
--

INSERT INTO `announcement_reads` (`id`, `announcement_id`, `employee_id`, `read_at`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '2025-07-25 03:16:35', '2025-07-25 03:16:35', '2025-07-25 03:16:35'),
(2, 1, 5, '2025-07-25 03:16:35', '2025-07-25 03:16:35', '2025-07-25 03:16:35'),
(3, 1, 6, '2025-07-25 03:16:35', '2025-07-25 03:16:35', '2025-07-25 03:16:35');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `check_in` timestamp NULL DEFAULT NULL,
  `check_out` timestamp NULL DEFAULT NULL,
  `total_work_minutes` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `attendance_employee_id_foreign` (`employee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `employee_id`, `date`, `check_in`, `check_out`, `total_work_minutes`, `created_at`, `updated_at`) VALUES
(1, 'Emp-377581', '2025-06-24', '2025-06-24 15:04:58', NULL, NULL, '2025-06-24 15:04:58', '2025-06-24 15:04:58'),
(2, 'Emp-122697', '2025-06-24', '2025-06-24 15:21:49', NULL, NULL, '2025-06-24 15:21:49', '2025-06-24 15:21:49'),
(3, 'Emp-871118', '2025-06-24', '2025-06-24 15:48:21', '2025-06-24 16:16:42', NULL, '2025-06-24 15:48:21', '2025-06-24 16:16:42'),
(4, 'Emp-233548', '2025-06-24', '2025-06-24 16:16:23', NULL, NULL, '2025-06-24 15:56:53', '2025-06-24 16:16:23'),
(5, 'Emp-184950', '2025-06-24', '2025-06-24 17:55:15', '2025-06-24 17:29:44', NULL, '2025-06-24 17:28:46', '2025-06-24 17:55:15'),
(6, 'Emp-227823', '2025-06-24', '2025-06-24 18:02:16', '2025-06-24 18:24:20', NULL, '2025-06-24 18:02:16', '2025-06-24 18:24:20'),
(7, 'Emp-844361', '2025-06-24', '2025-06-24 19:52:28', '2025-06-24 19:55:01', NULL, '2025-06-24 19:52:28', '2025-06-24 19:55:01'),
(8, 'Emp-844361', '2025-07-01', '2025-07-01 14:23:15', NULL, NULL, '2025-07-01 14:23:15', '2025-07-01 14:23:15'),
(9, 'Emp-844361', '2025-07-02', '2025-07-02 18:49:10', '2025-07-02 18:51:20', NULL, '2025-07-02 18:49:10', '2025-07-02 18:51:20'),
(10, 'Emp-844361', '2025-07-03', '2025-07-03 15:02:18', NULL, NULL, '2025-07-03 15:02:18', '2025-07-03 15:02:18'),
(11, 'Emp-844361', '2025-08-04', '2025-08-04 02:07:00', NULL, NULL, '2025-08-04 02:07:00', '2025-08-04 02:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
CREATE TABLE IF NOT EXISTS `coupons` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `discount` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `status` enum('active','inactive') CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `coupon_type` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `coupons_code_unique` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `discount`, `start_date`, `expiry_date`, `status`, `created_at`, `updated_at`, `coupon_type`) VALUES
(1, 'MKLO123', '5', '2024-01-10', '2025-07-20', 'active', '2024-07-15 09:38:30', '2025-02-11 15:28:25', 'fixed'),
(2, 'MKLO125', '10', '2024-07-15', '2024-07-19', 'inactive', '2024-07-15 09:38:51', '2024-07-17 12:25:56', 'fixed');

-- --------------------------------------------------------

--
-- Table structure for table `employee_register`
--

DROP TABLE IF EXISTS `employee_register`;
CREATE TABLE IF NOT EXISTS `employee_register` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `employer_id` bigint UNSIGNED DEFAULT NULL,
  `employee_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Emergency_num` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `signature_uload` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driving_license` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offerletter` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` enum('IT','NON-IT') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('Male','Female') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `employment_type` enum('Full-time','part-time','Internship') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `basic_salary` decimal(10,2) NOT NULL,
  `joining_date` date NOT NULL,
  `designation` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employee_register_email_unique` (`email`),
  UNIQUE KEY `employee_register_company_email_unique` (`company_email`),
  KEY `fk_employee_employer` (`employer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_register`
--

INSERT INTO `employee_register` (`id`, `is_active`, `employer_id`, `employee_id`, `first_name`, `last_name`, `email`, `company_email`, `password`, `phone_number`, `Emergency_num`, `profile`, `address`, `city`, `post_code`, `signature_uload`, `driving_license`, `passport`, `offerletter`, `department`, `gender`, `employment_type`, `basic_salary`, `joining_date`, `designation`, `blood_group`, `date_of_birth`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(2, 1, NULL, 'Emp-370631', 'Mathi', 'vaithi', 'mathi1@yopmail.com', 'mathi@winngoo.com', '$2y$10$56v1Q3djqfgepFoZjSBNeecW1Ee9PIk8aWm0ksB59g7dwCKc4d2M2', '9876543210', '9999988888', NULL, '123 Main Street', 'Chennai', '600001', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 50000.00, '2025-07-08', 'PHP Developer', 'O+', '2025-08-07', '09:00:00', '18:00:00', '2025-06-19 13:21:48', '2025-08-13 05:18:38'),
(3, 0, NULL, 'Emp-813149', 'Mathi', 'vaithi', 'mathi2@yopmail.com', 'nancy@yopmail.com', '$2y$10$HMadvuQtEMuqVYWfsBvlAu0OrU4xhLyQAPgJ3c2uuPfpVGx5Unjau', '9876543210', '9999988888', NULL, '123 Main Street', 'Chennai', '600001', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 50000.00, '2025-06-20', 'PHP Developer', 'O+', '1990-01-01', '09:00:00', '18:00:00', '2025-06-19 13:42:13', '2025-06-19 13:42:13'),
(4, 0, NULL, 'Emp-844361', 'vembu', 'vaithi', 'mathi3@yopmail.com', 'nancy1@yopmail.com', '$2y$10$IbHnKVIhiTaAQAyJvr/NL.s/Th1iLDLSmLuqoiPRRTjOdg4lusk22', '9876543210', '9999988888', NULL, '123 Main Street', 'Chennai', '600001', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 10000.00, '2025-06-20', 'UI/UX Designer', 'O+', '1990-01-01', '09:00:00', '18:00:00', '2025-06-19 13:45:08', '2025-06-19 13:45:08'),
(5, 0, NULL, 'Emp-163986', 'vembu', 'vaithi', 'mathi4@yopmail.com', 'nancy2@winngoo.com', '$2y$10$NAnc72EcwymOHXdDj9YXPulFt1enJwlIKTsxX1I3bmC05Vo1eeWdq', '9876543210', '9999988888', NULL, '123 Main Street', 'Chennai', '600001', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 10000.00, '2025-06-20', 'UI/UX Designer', 'O+', '1990-01-01', '09:00:00', '18:00:00', '2025-06-19 15:41:42', '2025-06-19 15:41:42'),
(6, 0, NULL, 'Emp-227823', 'vembu', 'vaithi', 'mathi5@yopmail.com', 'nancy3@winngoo.com', '$2y$10$AxBiz73XRg3ZoUf7FcSrPO0ylSC4ZADdynNmZS6YreMyQzyOChphm', '9876543210', '9999988888', NULL, '123 Main Street', 'Chennai', '600001', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 10000.00, '2025-06-20', 'UI/UX Designer', 'O+', '1990-01-01', '09:00:00', '18:00:00', '2025-06-19 15:46:40', '2025-06-19 15:46:40'),
(7, 0, NULL, 'Emp-719922', 'vembu', 'vaithi', 'mathi6@yopmail.com', 'nancy4@winngoo.com', '$2y$10$YwDcyWalhXccYZUt/ZeDYObatdlkT/ZVQd2/Tbrbi6iFtUUJp9Tk.', '9876543210', '9999988888', NULL, '123 Main Street', 'Chennai', '600001', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 10000.00, '2025-06-20', 'UI/UX Designer', 'O+', '1990-01-01', '09:00:00', '18:00:00', '2025-06-19 16:01:07', '2025-06-19 16:01:07'),
(8, 1, NULL, 'Emp-184950', 'vembu', 'vaithi', 'mathi7@yopmail.com', 'nancy7@winngoo.com', '$2y$10$nFbFHoN/5S5HXnyaoaotGOzIVaZsxiDDduLjEmVKLAsE2K6VcTOsS', '9876543210', '9999988888', NULL, '123 Main Street', 'Chennai', '600001', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 10000.00, '2025-06-20', 'UI/UX Designer', 'O+', '1990-01-01', '09:00:00', '18:00:00', '2025-06-19 16:03:48', '2025-08-13 04:56:31'),
(9, 0, NULL, 'Emp-508873', 'vembu', 'vaithi', 'mathi8@yopmail.com', 'nancy8@winngoo.com', '$2y$10$mYVll6lbckrB6wIfW2CJhujFsMAtSaj59CupWdv6tnjPJpz/nrBIm', '9876543210', '9999988888', NULL, '123 Main Street', 'Chennai', '600001', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 10000.00, '2025-06-20', 'UI/UX Designer', 'O+', '1990-01-01', '09:00:00', '18:00:00', '2025-06-19 16:10:28', '2025-06-19 16:10:28'),
(10, 0, NULL, 'Emp-357855', 'vembu', 'vaithi', 'mathi9@yopmail.com', 'nancy9@winngoo.com', '$2y$10$vcRRk/ynfCCtpnDABNu/4.hD1fWpKgp4G92GP38CWNP.D/Pj1NuA2', '9876543210', '9999988888', NULL, '123 Main Street', 'Chennai', '600001', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 10000.00, '2025-06-20', 'UI/UX Designer', 'O+', '1990-01-01', '09:00:00', '18:00:00', '2025-06-19 16:22:48', '2025-06-19 16:22:48'),
(11, 0, NULL, 'Emp-972310', 'vembu', 'vaithi', 'mathi10@yopmail.com', 'nancy10@winngoo.com', '$2y$10$Jo6n6CvNLIgCOhFqHCHskeypOmtKpExrdDDaaniY2M2HOl5T.0ki6', '9876543210', '9999988888', NULL, '123 Main Street', 'Chennai', '600001', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 10000.00, '2025-06-20', 'UI/UX Designer', 'O+', '1990-01-01', '09:00:00', '18:00:00', '2025-06-19 16:24:03', '2025-06-19 16:24:03'),
(12, 0, NULL, 'Emp-233548', 'vembu', 'vaithi', 'mathi11@yopmail.com', 'nancy11@winngoo.com', '$2y$10$5ra5V1JzQMXK.pFDRJWaquzPJ/2q1HDFHRoTpFv6HsuJpBFr7C53K', '9876543210', '9999988888', NULL, '123 Main Street', 'Chennai', '600001', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 40000.00, '2025-06-20', 'React Developer', 'O+', '1990-01-01', '09:00:00', '18:00:00', '2025-06-19 16:41:46', '2025-06-19 16:41:46'),
(13, 0, NULL, 'Emp-871118', 'vembu', 'vaithi', 'mathi12@yopmail.com', 'nancy12@winngoo.com', '$2y$10$/zS07Qp6oGKsmT.bBO2E3euJ3NNxigqidXDFoAfzhAR7kMyX7Ty9W', '9876543210', '9999988888', NULL, '123 Main Street', 'Chennai', '600001', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 40000.00, '2025-06-20', 'React Developer', 'O+', '1990-01-01', '09:00:00', '18:00:00', '2025-06-20 12:13:16', '2025-06-20 12:13:16'),
(14, 0, NULL, 'Emp-377581', 'vembu', 'vaithi', 'mathi15@yopmail.com', 'nancy15@winngoo.com', '$2y$10$ok3u0ADWwsyQrP3K2xoQdeRDdivbvsDdolv9hK.y.9ks9u1ffpHBy', '9876543210', '9999988888', NULL, '123 Main Street', 'Chennai', '600001', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 40000.00, '2025-06-20', 'React Developer', 'O+', '1990-01-01', '09:00:00', '18:00:00', '2025-06-20 12:30:13', '2025-06-20 12:30:13'),
(15, 0, NULL, 'Emp-801425', 'vembu', 'vaithi', 'mathi16@yopmail.com', 'nancy15@yopmail.com', '$2y$10$I7.nuj1bmQtuzW8As1U56OI09pGP8fudWjR34HMuEQTO4.UWJCU9e', '9876543210', '9999988888', 'profile/1752312343_68722a176d33d.png', '123 Main Street', 'Chennai', '600001', 'profile/1752312343_68722a176d634.pdf', 'profile/1751455705_686517d9d715d.jpg', 'profile/1751455705_686517d9d77de.jpg', NULL, 'IT', 'Female', 'Full-time', 40000.00, '2025-06-20', 'React Developer', 'O+', '1990-01-01', '09:00:00', '18:00:00', '2025-06-20 12:50:41', '2025-07-12 17:25:43'),
(16, 0, NULL, 'Emp-122697', 'saraswathi', 'Vaithiyanathan', 'saraswathi@yopmail.com', 'saraswathi@winngoo.com', '$2y$10$e/Zir741aoNMptLDHxY7jOYpEpqxrDCDDc83XCjU3l3jU9Uk5QjGi', '9876543210', NULL, 'profile/1750674407_68592be7aa65e.jpg', 'sdasdsadasd', 'Chennai', '609304', 'profile/1750674407_68592be7aa9e5.jpg', 'profile/1750674407_68592be7aaf2e.jpg', 'profile/1750674407_68592be7ab36a.jpg', NULL, 'IT', 'Female', 'Full-time', 22000.00, '2025-06-23', 'Business Manager', 'B+', '1990-07-01', '09:00:00', '18:00:00', '2025-06-23 17:26:47', '2025-06-23 17:26:47'),
(17, 0, NULL, 'Emp-266495', 'vembu', 'vaithi', 'suba@yopmail.com', 'vembu@winngoo.com', '$2y$10$7x.TSSDcoI1P0YBZnZ4.dOe6K3cfPeotwD9r7MZknCiDX0JGSTJjS', '9876543210', '9999988888', 'profile/1752312329_68722a0960222.png', '123 Main Street', 'Chennai', '600001', 'profile/1752312329_68722a0960434.pdf', '1751455255_6865161793de9.jpg', '1751455255_686516179435d.jpg', NULL, 'IT', 'Female', 'Full-time', 40000.00, '2025-06-20', 'React Developer', 'O+', '1990-01-01', '09:00:00', '18:00:00', '2025-07-02 18:06:35', '2025-07-12 17:25:29'),
(18, 0, NULL, 'Emp-831778', 'saraswathi', 'Vaithiyanathan', 'lingesh@yopmail.com', 'dharsan@winngoo.com', '$2y$10$65pC2ifoDb4bdKRA4uruAe/AY/0TZxuMUgV/lvsPQG8R4/mFtub..', '9876543210', NULL, '/tmp/php2mTeV3', 'sdasdsadasd', 'Chennai', '609304', NULL, NULL, '/tmp/phpROytMC', NULL, 'IT', 'Female', 'Full-time', 22000.00, '2025-06-23', 'Business Manager', 'B+', '1990-01-01', '09:00:00', '18:00:00', '2025-07-02 18:08:11', '2025-07-02 18:31:00'),
(19, 0, NULL, 'Emp-858261', 'saraswathi', 'Vaithiyanathan', 'lingesh1@yopmail.com', 'dharsan1@yopmail.com', '$2y$10$WVEraj7Slki5Aqtc9pESjOodwTjnlesgFCNrbXBwHNDgCMvWAMX32', '9876543210', NULL, NULL, 'sdasdsadasd', 'Chennai', '609304', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 22000.00, '2025-06-23', 'Business Manager', 'B+', '1990-01-01', '09:00:00', '18:00:00', '2025-07-02 19:39:38', '2025-07-02 19:39:38'),
(20, 0, NULL, 'Emp-491242', 'saraswathi', 'Vaithiyanathan', 'lingesh2@yopmail.com', 'dharsan2@yopmail.com', '$2y$10$vPJCqQS95YQ23Ka8SBPJveFplz/Ait.1FtBy/bvU1C.nkoM2Xi7Bi', '9876543210', NULL, NULL, 'sdasdsadasd', 'Chennai', '609304', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 22000.00, '2025-06-23', 'Business Manager', 'B+', '1990-01-01', '09:00:00', '18:00:00', '2025-07-02 20:17:58', '2025-07-02 20:17:58'),
(21, 0, NULL, 'Emp-460671', 'priya', 'a', 'priya@yopmail.com', 'priya@yopmail.com', '$2y$10$wG7u49LiYM78Q5IkWq2Ske53a9nLFFbQyrY1bO1PhG35WD0oRGjHq', '9876543212', NULL, NULL, NULL, 'chennai', '654325', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 21000.00, '2025-04-01', 'Developer', 'B+', '1998-04-01', '09:00:00', '06:00:00', '2025-07-09 18:10:14', '2025-07-09 18:10:14'),
(22, 0, NULL, 'Emp-788748', 'priya', 'a', 'kirsh@yopmail.com', 'kirsh@yopmail.com', '$2y$10$QrkFyF2JgnoOcy7MfTMhYeIvemne6SCkSEByOaE8iGCeEYfDR.cYu', '9876543212', '76543344', NULL, 'abc street', 'chennai', '654325', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 21000.00, '2025-04-01', 'Developer', 'B+', '1998-04-01', '09:00:00', '06:00:00', '2025-07-09 18:25:09', '2025-07-09 18:25:09'),
(23, 0, NULL, 'Emp-559549', 'priya', 'a', 'kirshna@yopmail.com', 'kirshna@yopmail.com', '$2y$10$ZcDyuWlX8lPacdZhoO/f1eblgIY5m.ED9CbRtZULnrOdR7xYEQcRa', '9876543212', '76543344', NULL, 'abc street', 'chennai', '654325', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 21000.00, '2025-04-01', 'Developer', 'B+', '1998-04-01', '09:00:00', '06:00:00', '2025-07-10 14:33:42', '2025-07-10 14:33:42'),
(24, 0, NULL, 'Emp-942998', 'Krishnapriya', 't', 'krishnapriya@yopmail.com', 'krishnapriya@yopmail.com', '$2y$10$UYLcWDYbO8iRvKD6GP7jDuqvLPAcruzXI58GKDGFoWOthm4Czfemy', '675432345', '4532423123', NULL, 'abc street', 'chennai', '624702', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 1000.00, '2025-04-01', 'Business Manager', 'B+', '2025-04-01', '10:00:00', '18:00:00', '2025-07-10 17:29:43', '2025-07-10 17:29:43'),
(25, 0, NULL, 'Emp-704219', 'kumar', 't', 'kumar@yopmail.com', 'kumars@yopmail.com', '$2y$10$NtqKKtVzxRKpJMahlcHQMOls8u6yXoDswMt1nzcK47fOBHwHiIyba', '654234542213', '323445255256', NULL, 'ABC', 'Chennai', '624785', NULL, NULL, NULL, NULL, 'IT', 'Male', 'Full-time', 150000.00, '2025-04-16', 'app developer', 'A+', '2025-04-16', '05:00:00', '18:00:00', '2025-07-10 18:14:28', '2025-07-10 18:14:28'),
(26, 0, NULL, 'Emp-140481', 'kumar', 't', 'tsk@yopmail.com', 'csk@yopmail.com', '$2y$10$SGvqVm6VCa2CYmXahn/El.5Y3lVa7kjFF92Rp.f.63l5eZe3dCMsi', '5434224352', '34552467433', NULL, 'ABC street', 'Eriyodu', '624700', NULL, NULL, NULL, NULL, 'IT', 'Male', 'Full-time', 150000.00, '2025-04-01', 'app developer', 'B+ve', '2025-04-01', '10:00:00', '18:00:00', '2025-07-10 18:35:16', '2025-07-10 18:35:16'),
(27, 0, NULL, 'Emp-929099', 'kumar', 't', 'tsks@yopmail.com', 'csks@yopmail.com', '$2y$10$I3evxxU8QsVU0bXccgEf/e0jJItE3iiCbvjs7wGtxLwkUwNjaM3sy', '5434224352', '34552467433', NULL, 'ABC street', 'Eriyodu', '624700', NULL, NULL, NULL, NULL, 'IT', 'Male', 'Full-time', 150000.00, '2025-04-01', 'app developer', 'B+ve', '2025-04-01', '10:00:00', '18:00:00', '2025-07-10 18:39:57', '2025-07-10 18:39:57'),
(28, 0, NULL, 'Emp-252149', 'kumar', 't', 'jsk@yopmail.com', 'jss@yopmail.com', '$2y$10$StkLWpAMmk0rFRnolI1tfu8/VgsyjgT7NRHcntNvDIoYkKP86dFdC', '5434224352', '34552467433', NULL, 'ABC street', 'Eriyodu', '624700', NULL, NULL, NULL, NULL, 'IT', 'Male', 'Full-time', 150000.00, '2025-04-01', 'app developer', 'B+ve', '2025-04-01', '10:00:00', '18:00:00', '2025-07-10 18:42:13', '2025-07-10 18:42:13'),
(29, 0, NULL, 'Emp-348345', 'kumar', 't', 'sk@yopmail.com', 'sk@yopmail.com', '$2y$10$YGeFR7.gCei3aY.ph6dizOPa.AoQplG6sY7KqP3RubyK9xdKxXoY2', '6352542145', '524178236', NULL, 'abs', 'Dindigul', '624782', NULL, NULL, NULL, NULL, 'IT', 'Male', 'Full-time', 20000.00, '2025-04-01', 'app', 'B', '2025-04-23', '05:00:00', '18:00:00', '2025-07-10 19:54:10', '2025-07-10 19:54:10'),
(30, 0, NULL, 'Emp-967365', 'kumar', 't', 'sks@yopmail.com', 'sks@yopmail.com', '$2y$10$N/ioXnRZ5M35QHW/smzW/O37u8xZstHp8Z14gJwd.eWx5PEHAUqre', '6352542145', '524178236', NULL, 'abs', 'Dindigul', '624782', NULL, NULL, NULL, NULL, 'IT', 'Male', 'Full-time', 20000.00, '2025-04-01', 'app', 'B', '2025-04-23', '05:00:00', '18:00:00', '2025-07-10 20:09:46', '2025-07-10 20:09:46'),
(31, 0, NULL, 'Emp-449468', 'kumar', 't', 'ss@yopmail.com', 'ss@yopmail.com', '$2y$10$RE0MgMdByoL5DDv2pXSsyuiiA4GEXSAg1Cbz62PfIlT9reP23qalO', '6352542145', '524178236', NULL, 'abs', 'Dindigul', '624782', NULL, NULL, NULL, NULL, 'IT', 'Male', 'Full-time', 20000.00, '2025-04-01', 'app', 'B', '2025-04-23', '05:00:00', '18:00:00', '2025-07-10 20:13:03', '2025-07-10 20:13:03'),
(32, 0, NULL, 'Emp-343547', 'kumar', 't', 'ts@yopmail.com', 'ts@yopmail.com', '$2y$10$w4JUR7x7piziHcas9rNCxeIxUgfHEhBsJBoB5i3llsEQRR.8219wW', '6352542145', '524178236', NULL, 'abs', 'Dindigul', '624782', NULL, NULL, NULL, NULL, 'IT', 'Male', 'Full-time', 20000.00, '2025-04-01', 'app', 'B', '2025-04-23', '05:00:00', '18:00:00', '2025-07-10 20:36:56', '2025-07-10 20:36:56'),
(33, 0, NULL, 'Emp-183841', 'kumar', 't', 'kumart@yopmail.com', 'kumart@yopmail.com', '$2y$10$FqBaRyo8X6S2Trs23siHKu.EXJn/2JHvH6s9De4ZNQmQm2/TO0S.e', '5555555555', '5555555555', NULL, 'abc', 'Dindigul', '624702', NULL, NULL, NULL, NULL, 'IT', 'Male', 'Full-time', 20000.00, '2025-04-09', 'App developer', 'B', '2002-08-25', '10:00:00', '18:00:00', '2025-07-11 10:33:02', '2025-07-11 10:33:02'),
(34, 0, NULL, 'Emp-211460', 'kumar', 't', 'ks@yopmail.com', 'ssk@yopmail.com', '$2y$10$DkTw/EfEml5RRcb.4H442.QqXNNMRFAl4kyh54IEzoc4Zke8uxxPC', '6385255255', '6525552554', NULL, 'abs', 'Eriyodu', '624702', NULL, NULL, NULL, NULL, 'IT', 'Male', 'Full-time', 15000.00, '2025-04-09', 'app', 'A+', '2025-04-30', '10:00:00', '18:00:00', '2025-07-11 12:55:37', '2025-07-11 12:55:37'),
(35, 0, NULL, 'Emp-610379', 'kumar', 't', 'kirshnas@yopmail.com', 'kirshnas@yopmail.com', '$2y$10$f06XKPhlP4PMKUIpBqgp4ebaq.k83VuggTf4G593euL80FbI.iPNG', '6582874128', '255418088', NULL, 'abc', 'Dindigul', '2588055', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 20000.00, '2025-04-15', 'be', 'B+', '2025-04-15', '10:00:00', '18:00:00', '2025-07-11 20:41:30', '2025-07-11 20:41:30'),
(36, 0, NULL, 'Emp-951956', 'kumar', 't', 'sss@yopmail.com', 'sss@yopmail.com', '$2y$10$r/uJko9XkEQ3VUdFFKCNvORxj4WDgQp0/PPSzdkW8j3aNUTzmmbB.', '6258528888', '6528888444', NULL, 'Eriyodu', 'Dindigul', '625588', NULL, NULL, NULL, NULL, 'IT', 'Male', 'Full-time', 12555.00, '2025-04-09', 'cse', 'b', '2025-04-23', '10:00:00', '18:00:00', '2025-07-14 13:13:39', '2025-07-14 13:13:39'),
(37, 0, NULL, 'Emp-525112', 'priya', 'a', 'kp@yopmail.com', 'kp@yopmail.com', '$2y$10$.3or5J7DtKMgbQmlNrv1beYXrLoEWAwKSbBDpLcl5TgbV4S4movhe', '9876543212', '76543344', NULL, 'abc street', 'chennai', '654325', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 21000.00, '2025-04-01', 'Developer', 'B+', '1998-04-01', '09:00:00', '06:00:00', '2025-07-14 13:24:21', '2025-07-14 13:24:21'),
(38, 0, NULL, 'Emp-639534', 'priya', 'a', 'Kumar78@yopmail.com', 'Kumar78@yopmail.com', '$2y$10$2Oxij.AL.CJvspdpzvjJdOhdvpbSHH8HNlFwK4HTMDUZKd.l5cBs.', '9876543212', '76543344', NULL, 'abc street', 'chennai', '654325', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 21000.00, '2025-04-01', 'Developer', 'B+', '1998-04-01', '09:00:00', '06:00:00', '2025-07-15 12:23:44', '2025-07-15 12:23:44'),
(1, 0, NULL, NULL, 'John', 'Doe', 'john@example.com', 'employer@example.com', 'hashedpassword', '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, 'IT', 'Male', 'Full-time', 0.00, '0000-00-00', '', '', '0000-00-00', '00:00:00', '00:00:00', NULL, NULL),
(39, 0, NULL, 'Emp-591785', 'kaviya', 'manikandan', 'kaviya123@yopmail.com', 'kaviya123@winngoo.com', '$2y$10$/YlQyYDrC3zH1zfHejhpmeJbq7SVbPemJkg6BHXbk8rld/7zrSmv2', '9876543213', NULL, NULL, 'sdasdsadasd', 'Chennai', '609304', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 22000.00, '2025-07-31', 'php developer', 'B+', '1990-01-01', '09:00:00', '18:00:00', '2025-07-31 04:01:37', '2025-07-31 04:01:37'),
(54, 0, 23, 'EMP-002', 'sowmiya', 'manikandan', 'Sowmiya321@yopmail.com', 'Sowmiya321@winngoo.com', '$2y$10$HJGhJBo1vRDDz7Qj2geuc.u65M4NbLHlL47eGgnU1l8VwOcUxXGUi', '9876543212', NULL, NULL, 'sdasdsadasd', 'Chennai', '609304', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 22000.00, '2025-07-31', 'php developer', 'B+', '1990-01-01', '09:00:00', '18:00:00', '2025-08-11 03:30:18', '2025-08-11 03:30:18'),
(53, 1, 23, 'EMP-001', 'sowmiya', 'manikandan', 'Sowmiya32@yopmail.com', 'Sowmiya32@winngoo.com', '$2y$10$Z1dfY5eCXxQDaFcGDzjj6.tzJ5juxyzov9mNEW4ECo.8cbkR7BiZ6', '9876543212', NULL, NULL, 'sdasdsadasd', 'Chennai', '609304', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 22000.00, '2025-07-31', 'php developer', 'B+', '1990-01-01', '09:00:00', '18:00:00', '2025-08-11 03:27:31', '2025-08-13 05:08:30'),
(55, 0, 23, 'EMP-003', 'sowmiya', 'manikandan', 'Sowmiya2@yopmail.com', 'Sowmiya2@winngoo.com', '$2y$10$MC0p7UG7NNxzLcytCs6E3.f4lvdMAQANx2xSJfC.AopyaCqbbm1z.', '9876543212', NULL, NULL, 'sdasdsadasd', 'Chennai', '609304', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 22000.00, '2025-07-31', 'php developer', 'B+', '1990-01-01', '09:00:00', '18:00:00', '2025-08-11 03:38:45', '2025-08-11 03:38:45'),
(56, 0, 23, 'EMP-004', 'sowmiya', 'manikandan', 'Sowmiya1@yopmail.com', 'Sowmiya1@winngoo.com', '$2y$10$sa.DWaKVYNzKzHSeeA3B1ucrXzy.54FQ521BoW.aAetL7UVeDjcXq', '9876543212', NULL, NULL, 'sdasdsadasd', 'Chennai', '609304', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 22000.00, '2025-07-31', 'php developer', 'B+', '1990-01-01', '09:00:00', '18:00:00', '2025-08-11 03:40:35', '2025-08-11 03:40:35'),
(67, 0, 23, 'EMP-005', 'sowmiya', 'manikandan', 'Sowmiya831230@yopmail.com', 'Sowmiya831230@winngoo.com', '$2y$10$MhHEP0NGx7J0SK9bWngXU.ZDfMuLRZRBaZbjdLvN2vKgbeK3w/Ila', '9876543212', NULL, NULL, 'sdasdsadasd', 'Chennai', '609304', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 22000.00, '2025-07-31', 'php developer', 'B+', '1990-01-01', '09:00:00', '18:00:00', '2025-08-11 04:39:25', '2025-08-11 04:39:25'),
(68, 0, 23, 'EMP-006', 'sowmiya', 'manikandan', 'Sowmiya831231@yopmail.com', 'Sowmiya831231@winngoo.com', '$2y$10$XFa.3bZq/EnOad.9oIDNKOi88i/AeQacetLgyxpysjT34GXzOL4p.', '9876543212', NULL, NULL, 'sdasdsadasd', 'Chennai', '609304', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 22000.00, '2025-07-31', 'php developer', 'B+', '1990-01-01', '09:00:00', '18:00:00', '2025-08-11 04:40:32', '2025-08-11 04:40:32'),
(69, 0, 23, 'EMP-007', 'sowmiya', 'manikandan', 'Sowmiya831235@yopmail.com', 'Sowmiya831235@winngoo.com', '$2y$10$5g.kTXaysOgMOt8xq8t70.ZQIj.IqCYMnmPvy2fO.TedsqWOg5muq', '9876543212', NULL, NULL, 'sdasdsadasd', 'Chennai', '609304', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 22000.00, '2025-07-31', 'php developer', 'B+', '1990-01-01', '09:00:00', '18:00:00', '2025-08-11 04:40:57', '2025-08-11 04:40:57'),
(70, 0, 23, 'EMP-008', 'sowmiya', 'manikandan', 'Sowmiya831239@yopmail.com', 'Sowmiya831239@winngoo.com', '$2y$10$oqPZIaYaEcBCLGYQZ8Ja3.vTGnl6lyxQgY4yw.UV8uiK9CPRge9Tu', '9876543212', NULL, NULL, 'sdasdsadasd', 'Chennai', '609304', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 22000.00, '2025-07-31', 'php developer', 'B+', '1990-01-01', '09:00:00', '18:00:00', '2025-08-11 04:41:34', '2025-08-11 04:41:34'),
(71, 0, 23, 'EMP-009', 'sowmiya', 'manikandan', 'Sowmiya8312303@yopmail.com', 'Sowmiya8312303@winngoo.com', '$2y$10$JJQBGFBdnGMuEeax49TgYOVDw.iwURjdrgxxxWBxy2rTCwM/8FAFO', '9876543212', NULL, NULL, 'sdasdsadasd', 'Chennai', '609304', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 22000.00, '2025-07-31', 'php developer', 'B+', '1990-01-01', '09:00:00', '18:00:00', '2025-08-11 04:42:05', '2025-08-11 04:42:05'),
(72, 0, 23, 'EMP-010', 'sowmiya', 'manikandan', 'Sowmiya8312302@yopmail.com', 'Sowmiya8312302@winngoo.com', '$2y$10$WUn.chLRyY775dL7PyhKbewW/W7HKL.4h2CIcxEopUE7xAkc7FHKG', '9876543212', NULL, NULL, 'sdasdsadasd', 'Chennai', '609304', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 22000.00, '2025-07-31', 'php developer', 'B+', '1990-01-01', '09:00:00', '18:00:00', '2025-08-11 04:42:25', '2025-08-11 04:42:25'),
(73, 0, 29, 'EMP-001', 'sowmiya', 'manikandan', 'Sowmiya83123021@yopmail.com', 'Sowmiya83123021@winngoo.com', '$2y$10$jS7nSioiBJJNF1AgwYcwLOwmEKUCiIVo3Srm4QxQaufavfWjlkjCC', '9876543212', NULL, NULL, 'sdasdsadasd', 'Chennai', '609304', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 22000.00, '2025-07-31', 'php developer', 'B+', '1990-01-01', '09:00:00', '18:00:00', '2025-08-11 04:44:08', '2025-08-11 04:44:08'),
(74, 0, 29, 'EMP-002', 'sowmiya', 'manikandan', 'kaviya@yopmail.com', 'kaviya@yopmail.com', '$2y$10$VHPjjK0K16VTpu1IFd8XVud0zHLLWi5kq8IYUizVGdSkup4f/pUR2', '9876543212', NULL, NULL, 'sdasdsadasd', 'Chennai', '609304', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 22000.00, '2025-07-31', 'php developer', 'B+', '1990-01-01', '09:00:00', '18:00:00', '2025-08-11 04:46:53', '2025-08-11 04:46:53'),
(75, 0, NULL, 'Emp-924259', 'sowmiya', 'manikandan', 'kaviya1@yopmail.com', 'kaviya1@yopmail.com', '$2y$10$Dc3L.N2q/fDLgN0ZcQVaHuVdsLf6bbCFo3nNQAzreHluOd/QtF8IK', '9876543212', NULL, NULL, 'sdasdsadasd', 'Chennai', '609304', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 22000.00, '2025-07-31', 'php developer', 'B+', '1990-01-01', '09:00:00', '18:00:00', '2025-08-11 05:56:17', '2025-08-11 05:56:17'),
(76, 0, NULL, 'Emp-157386', 'sowmiya', 'manikandan', 'kaviya3@yopmail.com', 'kaviya3@yopmail.com', '$2y$10$th806nmUjtNbbvCS5Iom0upryxhOL87zK6hTpku230bNWQfnkgDnq', '9876543212', NULL, NULL, 'sdasdsadasd', 'Chennai', '609304', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 22000.00, '2025-07-31', 'php developer', 'B+', '1990-01-01', '09:00:00', '18:00:00', '2025-08-11 05:58:21', '2025-08-11 05:58:21'),
(77, 0, 29, 'EMP-003', 'sowmiya', 'manikandan', 'kaviya31@yopmail.com', 'kaviya31@yopmail.com', '$2y$10$8QayeAW7JWdJD2jeZqLSeurkPuws2z5Bw1dl35s1EoaNWwjEuOkW2', '9876543212', NULL, NULL, 'sdasdsadasd', 'Chennai', '609304', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 22000.00, '2025-07-31', 'php developer', 'B+', '1990-01-01', '09:00:00', '18:00:00', '2025-08-11 06:02:34', '2025-08-11 06:02:34'),
(78, 0, 29, 'EMP-004', 'sowmiya', 'manikandan', 'kaviya312@yopmail.com', 'kaviya312@yopmail.com', '$2y$10$uE7BsbikSpDnwt4K2lQy7OpYlvrHADXAij7D8Fviot/2syMW2DLNG', '9876543212', NULL, NULL, 'sdasdsadasd', 'Chennai', '609304', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 22000.00, '2025-07-31', 'php developer', 'B+', '1990-01-01', '09:00:00', '18:00:00', '2025-08-11 06:08:28', '2025-08-11 06:08:28'),
(83, 0, 29, 'EMP-005', 'luna', 'manikandan', 'luna@yopmail.com', 'luna123@yopmail.com', '$2y$10$ARu0JPe7VNPlJqF5sNtjC.gpvwVvMY0CKEUW.Z1zWUN2iCaabzI2q', '9876543212', NULL, NULL, 'sdasdsadasd', 'Chennai', '609304', NULL, NULL, NULL, NULL, 'IT', 'Female', 'Full-time', 22000.00, '2025-07-31', 'php developer', 'B+', '1990-01-01', '09:00:00', '18:00:00', '2025-08-13 05:05:57', '2025-08-13 05:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `employerregister`
--

DROP TABLE IF EXISTS `employerregister`;
CREATE TABLE IF NOT EXISTS `employerregister` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verification_code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `email_verification_code_gen_date` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `employer_type_id` bigint UNSIGNED NOT NULL,
  `status` enum('approved','rejected','hold','pending') CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'pending',
  `coupon_code` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `profile_upload` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `designation` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `employerregister_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employerregister`
--

INSERT INTO `employerregister` (`id`, `firstname`, `lastname`, `companyname`, `email`, `email_verification_code`, `email_verification_code_gen_date`, `email_verified_at`, `password`, `address1`, `address2`, `city`, `country`, `post_code`, `employer_type_id`, `status`, `coupon_code`, `profile_upload`, `designation`, `phone`, `created_at`, `updated_at`, `is_active`) VALUES
(29, 'kumar', 't', 'winngoo', 'san@yopmail.com', '63a99876-823b-4ae1-b4fd-7f275361cc4e', '2025-07-11 16:45:39', '2025-07-11 09:37:39', '@123Wingoo', '16', '16', 'madurai', 'india', '782322', 2, 'approved', NULL, 'profile/1752640417.jpg', 'app developer', '4532211122', '2025-07-11 16:45:39', '2025-07-16 12:39:50', 1),
(28, 'kumar', 't', 'wingoo', 'tsks@yopmail.com', '5865eeea-59e9-47b2-82a4-8d605001d367', '2025-07-08 17:28:19', NULL, '$2y$10$0Zuyz09nW2HPp.cLD9hZVeG1CCi8mhk6xXuM/g4KBsdW5iZqvzucm', 'eriyodu', 'dindigul', 'chennai', 'india', '624702', 3, 'pending', NULL, NULL, 'flutter developer', '6788999999', '2025-07-08 17:28:19', '2025-07-08 17:28:19', 0),
(27, 'kumar', 't', 'wingooo', 'ts@yopmail.com', '8a677861-47c9-487f-a4f9-cc309146961d', '2025-07-07 00:08:09', NULL, '$2y$10$dFN7LYC2LLup5yevmwv0PeTvcmp6W410RktWarXNrxzOS9gz6WyXG', 'eriyodu', 'eriyodu', 'dindigul', 'india', '624702', 3, 'pending', NULL, NULL, 'developer', '2222222222', '2025-07-07 00:08:09', '2025-07-07 00:08:09', 0),
(26, 'kumar', 't', 'wingoo', 'kumarsk@yopmail.com', '0c2476f5-1fa4-4b7f-a9cd-3b275315ef5f', '2025-07-07 00:04:20', NULL, '$2y$10$zpWjk./DRxgKpYoq/n6LhuJKZi.vMMyFyB/ouFAlXIdkDWhZrgpnG', 'eriyodu', 'dindigul', 'chennai', 'india', '432233', 3, 'pending', NULL, NULL, 'developer', '2122222222', '2025-07-07 00:04:20', '2025-07-07 00:04:20', 0),
(25, 'saravanan', 't', 'winggoo', 'kumars@yopmail.com', '26ceb0f7-7a1c-45ae-b138-23cd9e2e05fe', '2025-07-06 23:51:24', '2025-07-11 08:10:23', '$2y$10$odXr/sl1Aotsbiz7VAIR4uiObnjV8ET02eKBJdullCIJJiGOo2vma', '15', 'old', 'Dindigul', 'india', '656565', 3, 'approved', NULL, 'profile/1752597029.jpg', 'developer', '2884708258', '2025-07-06 23:51:24', '2025-07-16 12:44:02', 0),
(24, 'kumar', 't', 'winngoo', 'kumar@yopmail.com', 'eb1ce631-79b0-448a-b673-a40b2edfb297', '2025-07-04 20:41:16', NULL, '$2y$10$8YSSFO4mLP59uT62E0iANuW5uLW44jmtk.BbzJlO5YxMxclPN4UNO', 'Eriyodu', 'Dindigul', 'Chennai', 'India', '624702', 1, 'pending', NULL, NULL, 'developer', '6548888555', '2025-07-04 20:41:16', '2025-07-08 20:54:38', 0),
(23, 'kumar', 'r', 'winngoo', 'tsaravanakumar2582002@gmail.com', 'ac3b7145-d5ac-4ec5-8d4a-e484d3abd680', '2025-07-04 18:27:01', NULL, '$2y$10$sCRv98jF75pHQ3vZFOb6teEezcg7j5pqxxkVuHp.QVnpruPuf3Rly', 'Eriyodu', 'Dindigul', 'Chennai', 'india', '624692', 2, 'pending', NULL, NULL, 'developer', '6382833135', '2025-07-04 18:27:02', '2025-07-04 18:27:02', 0),
(22, 'kumar', 't', 'wingoo', 'tsk@yopmail.com', '24e0acbd-1349-4777-bb48-4c323f919d59', '2025-07-04 18:07:00', NULL, '$2y$10$.dwR3XSA8cLXH0qe4L6KkefIOc2In0rTdeurKGi2q1eNFvA2O15uK', 'eri', 'din', 'che', 'ind', '624702', 2, 'pending', NULL, NULL, 'developer', '9087654321', '2025-07-04 18:07:00', '2025-07-04 18:07:00', 0),
(21, 'vel', 'kumar', 'winngoo', 'saravanakumar2582002@gmail.com', '9233cdc8-109a-49e8-bf8c-e20784c9720e', '2025-07-03 12:45:58', '2025-07-03 12:47:44', '$2y$10$DsONnZt741DEYmJ27nsKTOKJ3h1TcZzY.kLI3/IkCKXqAcfz2Jbfy', 'eriyodu', 'dindigul', 'chennai', 'india', '624702', 1, 'pending', NULL, 'profile/1751517958.png', 'developer', '65556788134', '2025-07-03 12:45:58', '2025-07-03 12:47:44', 0),
(20, 'vembu', 'vaithi', 'winngoo', 'vembu2@yopmail.com', '715bdfcc-2e70-45b6-879a-1ad53b71da51', '2025-06-20 15:28:29', '2025-06-20 20:59:10', '$2y$10$xTNpIKwKvgEe8Hr9dux//O75KmojBNe1sG68KWiKdo7xHdB6M692u', 'dfds', 'dddd', 'chennai', 'India', '609093', 1, 'approved', NULL, 'profile/1750408109.jpg', 'Node Js Developer', '7777666655', '2025-06-20 15:28:29', '2025-06-20 15:28:29', 0),
(19, 'suba', 'vaithiyanathan', 'winngoo', 'vembu1@yopmail.com', 'bf116168-9e0a-4e74-92dd-1cfded914eab', '2025-06-20 15:15:38', '2025-06-20 20:47:10', '$2y$10$5AsUGunUz0BhKyQJcQG1k.98c6LXqrYFjdegRQzGAvnvIFWEKss7q', 'guindy', 'dddd', 'chennai', 'India', '609093', 1, 'approved', NULL, 'profile/1750416920.jpg', 'Node Js Developer', '7777666655', '2025-06-20 15:15:39', '2025-07-13 13:12:29', 0),
(18, 'Indhu', 'Nancy', 'winngoo', 'indhu1@yopmail.com', '9ccf272f-6333-4b6d-80c3-43f39b42e16a', '2025-06-20 12:13:59', NULL, '$2y$10$PGh7gkKcK59vgbVo/42Rp.gfBW8WVf2zjhl9MSKBQbt6SsZQBNjSi', '123 Street', 'Apt 456', 'Chennai', 'India', '600001', 1, 'pending', NULL, NULL, 'HR', '87687676765', '2025-06-20 12:13:59', '2025-06-20 12:13:59', 0),
(17, 'Indhu', 'Nancy', 'winngoo', 'indhu@yopmail.com', 'd8c00237-345d-4b05-ab48-273cc5298e5d', '2025-06-18 14:27:54', '2025-06-18 15:15:32', '$2y$10$JxMPZCXY.UXokj/SiCsyuOPE7OpUXZo7.spbKbj1hC3hFLoTjqzVe', '123 Street', 'Apt 456', 'Chennai', 'India', '600001', 1, 'approved', NULL, NULL, 'HR', '87687676765', '2025-06-18 14:27:54', '2025-07-09 21:13:16', 0),
(30, 'kumar', 't', 'winngoo', 'vembu@yopmail.com', '0de5692b-f7ac-41e7-95a2-266b1b02a7cd', '2025-07-11 16:52:32', NULL, '$2y$10$ZLkrizVJ4NCa.v.IyvXRB.MCOJOsslQ3D1DK8GZpl/HTut3GUduge', 'abc', 'street', 'Dindigul', 'India', '2525188', 1, 'pending', NULL, NULL, 'developer', '5282882288', '2025-07-11 16:52:33', '2025-07-11 16:52:33', 0),
(31, 'kumar', 't', 'ffg', 'Sanki@yopmail.com', '86cf5ba1-7954-447e-8f13-9ff2b617e4a3', '2025-07-11 17:07:42', NULL, '$2y$10$Hck/9iglNaLUm0iyj4JKE.XMysJk6Fi5qJbufHfv9DgJpaksDZ.nW', 'eeitff', 'Eriyodu', 'sun', 'India', '528844', 3, 'pending', NULL, NULL, 'sddd', '8525428865', '2025-07-11 17:07:42', '2025-07-11 17:07:42', 0),
(32, 'kujar', 't', 'eeee', 'vino@yopmail.com', 'f92f03a9-0ef7-47ed-9645-25eb3b6f6a12', '2025-07-11 17:18:44', NULL, '$2y$10$Td5c0uQ3bWuSssDUxKBFAOmk9cAM4Qn9ecAUAZB.tAXnVwFMR60vK', 'Eriyodu', 'Dindigul', 'Chennai', 'india', '5282214', 3, 'pending', NULL, NULL, 'bee', '2554886399', '2025-07-11 17:18:44', '2025-07-11 17:18:44', 0),
(33, 'Sara', 'kumar', 'winngoo', 'saravana@yopmail.com', 'a6e1c4d2-2ecc-424c-8b4d-e9749fe6dee2', '2025-07-11 17:28:31', '2025-07-11 09:38:18', '$2y$10$DPvBBKtUoqKYJXgsHyg/MekG1DYC8njDYs5KcnUnmM2gKyOYFRYI2', '15', 'old', 'Dindigul', 'india', '624702', 1, 'approved', NULL, 'profile/1752641833.png', 'developer', '65556788134', '2025-07-11 17:28:31', '2025-07-16 12:57:55', 0),
(34, 'vel', 'kumar', 'winngoo', 'saravanan@yopmail.com', '1568a649-b300-401e-9cc9-34fdc6964f82', '2025-07-11 17:30:26', '2025-07-11 09:38:21', '$2y$10$1gAHACiX66ezGNwoDm6kXOvypCDkbG.zQ848kzAakEPe7og8kpcgS', 'eriyodu', 'dindigul', 'chennai', 'india', '624702', 1, 'approved', NULL, NULL, 'developer', '65556788134', '2025-07-11 17:30:26', '2025-07-11 17:30:26', 0),
(35, 'kannq', 'dasab', 'Winngoo', 'kannadhasancse278@gmail.com', '4cc2ae58-3e8a-46f6-89e9-586f98e351fd', '2025-07-11 23:19:32', NULL, '$2y$10$1uyF9RxtnBadRwVl2zkFnuehBDUCjAdXBB8/LPeUN0NygmgF8.EHC', 'tesr', 'test', 'test', 'trst', '623251', 1, 'pending', NULL, NULL, 'tedd', '9965702481', '2025-07-11 23:19:32', '2025-07-11 23:19:32', 0),
(36, 'kumar', 't', 'kumag', 'kuma@rgg.mn', 'f36f1133-a9e1-44a4-beee-5877e810805d', '2025-07-13 01:04:44', NULL, '$2y$10$WhWOA5xjZzkURaasNN0T5OW289KZOX4u5pEByHMS2BHw3JCqhaFZe', 'vbc', 'vbb', 'ciyh', 'india', 'app', 2, 'pending', NULL, NULL, 'asdd', '6545432344', '2025-07-13 01:04:44', '2025-07-13 01:04:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employer_payments`
--

DROP TABLE IF EXISTS `employer_payments`;
CREATE TABLE IF NOT EXISTS `employer_payments` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `register_id` bigint UNSIGNED NOT NULL,
  `card_holder_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_last_four` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_month` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_year` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_payment_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `currency` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'GBP',
  `status` enum('pending','successful','failed') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `employer_payments_register_id_foreign` (`register_id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employer_payments`
--

INSERT INTO `employer_payments` (`id`, `register_id`, `card_holder_name`, `card_last_four`, `exp_month`, `exp_year`, `stripe_payment_id`, `amount`, `currency`, `status`, `created_at`, `updated_at`) VALUES
(32, 32, 'N/A', '4242', '7', '2026', 'ch_3Rjd6NDth7XBa0cB0H9eq57Q', 50.00, 'GBP', 'successful', '2025-07-11 17:18:44', '2025-07-11 17:18:44'),
(31, 31, 'N/A', '4242', '7', '2026', 'ch_3RjcvhDth7XBa0cB2eGdUMal', 50.00, 'GBP', 'successful', '2025-07-11 17:07:42', '2025-07-11 17:07:42'),
(30, 30, 'N/A', '4242', '7', '2026', 'ch_3Rjch2Dth7XBa0cB09LpHy2q', 10.00, 'GBP', 'successful', '2025-07-11 16:52:33', '2025-07-11 16:52:33'),
(29, 29, 'N/A', '4242', '7', '2026', 'ch_3RjcaMDth7XBa0cB0aUBHqBW', 20.00, 'GBP', 'successful', '2025-07-11 16:45:39', '2025-07-11 16:45:39'),
(28, 28, 'N/A', '4242', '7', '2026', 'ch_3RiXp0Dth7XBa0cB0YoRzoTV', 50.00, 'GBP', 'successful', '2025-07-08 17:28:19', '2025-07-08 17:28:19'),
(27, 27, 'N/A', '4242', '7', '2026', 'ch_3Rhv6rDth7XBa0cB13WlZ0Bo', 50.00, 'GBP', 'successful', '2025-07-07 00:08:09', '2025-07-07 00:08:09'),
(26, 26, 'N/A', '4242', '7', '2026', 'ch_3Rhv3ADth7XBa0cB0jV6js2o', 50.00, 'GBP', 'successful', '2025-07-07 00:04:20', '2025-07-07 00:04:20'),
(25, 25, 'N/A', '4242', '7', '2026', 'ch_3RhuqdDth7XBa0cB2S2K6h4r', 50.00, 'GBP', 'successful', '2025-07-06 23:51:24', '2025-07-06 23:51:24'),
(24, 24, 'N/A', '4242', '7', '2026', 'ch_3Rh8vXDth7XBa0cB1WHvrIg7', 10.00, 'GBP', 'successful', '2025-07-04 20:41:16', '2025-07-04 20:41:16'),
(23, 23, 'N/A', '4242', '7', '2026', 'ch_3Rh6pdDth7XBa0cB1fbuycx2', 20.00, 'GBP', 'successful', '2025-07-04 18:27:02', '2025-07-04 18:27:02'),
(22, 22, 'N/A', '4242', '7', '2026', 'ch_3Rh6WFDth7XBa0cB2HX0XNRq', 20.00, 'GBP', 'successful', '2025-07-04 18:07:00', '2025-07-04 18:07:00'),
(21, 21, 'N/A', '4242', '7', '2026', 'ch_3Rgf22Dth7XBa0cB0S2dem1a', 10.00, 'GBP', 'successful', '2025-07-03 12:45:58', '2025-07-03 12:45:58'),
(20, 20, 'N/A', '4242', '6', '2026', 'ch_3Rc0JEDth7XBa0cB0grcizJO', 10.00, 'GBP', 'successful', '2025-06-20 15:28:29', '2025-06-20 15:28:29'),
(19, 19, 'N/A', '4242', '6', '2026', 'ch_3Rc06oDth7XBa0cB1j3TAb4u', 10.00, 'GBP', 'successful', '2025-06-20 15:15:39', '2025-06-20 15:15:39'),
(18, 18, 'N/A', '4242', '6', '2026', 'ch_3RbxH0Dth7XBa0cB1yABZIzL', 10.00, 'GBP', 'successful', '2025-06-20 12:13:59', '2025-06-20 12:13:59'),
(17, 17, 'N/A', '4242', '6', '2026', 'ch_3RbGPVDth7XBa0cB0n3IvzTf', 10.00, 'GBP', 'successful', '2025-06-18 14:27:54', '2025-06-18 14:27:54'),
(33, 33, 'N/A', '4242', '7', '2026', 'ch_3RjdFqDth7XBa0cB2FDplH8Q', 10.00, 'GBP', 'successful', '2025-07-11 17:28:31', '2025-07-11 17:28:31'),
(34, 34, 'N/A', '4242', '7', '2026', 'ch_3RjdHiDth7XBa0cB1eCqQ14y', 10.00, 'GBP', 'successful', '2025-07-11 17:30:26', '2025-07-11 17:30:26'),
(35, 35, 'N/A', '4242', '7', '2026', 'ch_3RjijXDth7XBa0cB2JwAxoQh', 10.00, 'GBP', 'successful', '2025-07-11 23:19:32', '2025-07-11 23:19:32'),
(36, 36, 'N/A', '4242', '7', '2026', 'ch_3Rk6quDth7XBa0cB1n2jZW9v', 20.00, 'GBP', 'successful', '2025-07-13 01:04:44', '2025-07-13 01:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `employer_prize`
--

DROP TABLE IF EXISTS `employer_prize`;
CREATE TABLE IF NOT EXISTS `employer_prize` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `range` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employer_prize`
--

INSERT INTO `employer_prize` (`id`, `type`, `range`, `price`, `vat`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 'Basic', NULL, '10.00', '0.00', '10.00', '2025-06-12 07:11:21', '2025-06-12 07:11:23'),
(2, 'Standard', NULL, '30.00', '0.00', '30.00', '2025-06-12 07:12:19', '2025-06-12 07:12:21'),
(3, 'Premium', NULL, '50.00', '0.00', '50.00', '2025-06-12 07:13:10', '2025-06-12 07:13:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faq_category` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `faq_category`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'Who is Winngoo Pages India?', 'Winngoo', '<p class=\"MsoNormal\" style=\"text-align:justify\"><span lang=\"EN\">Winngoo Pages India\r\nis a digital business directory that allows users to advertise their businesses\r\nand you can find A-Z products and services at your locality.<o:p></o:p></span></p>', '2025-06-18 22:01:28', '2025-06-18 22:01:30'),
(2, 'What is the purpose of Winngoo Pages India?', 'Winngoo', '<p class=\"MsoNormal\" style=\"text-align:justify\"><span lang=\"EN\">The purpose of\r\nWinngoo Pages India is to increase local and small companies\' visibility\r\nthroughout India. And make customers reach the right service or product within\r\ntheir locality.&nbsp;<o:p></o:p></span></p>', '2025-06-18 22:01:38', '2025-06-18 22:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `festivals`
--

DROP TABLE IF EXISTS `festivals`;
CREATE TABLE IF NOT EXISTS `festivals` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_management`
--

DROP TABLE IF EXISTS `leave_management`;
CREATE TABLE IF NOT EXISTS `leave_management` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `type` enum('casual','sick','permission') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `total_days` int NOT NULL,
  `status` enum('pending','approved','cancelled') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `action_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `leave_management_register_id_foreign` (`employee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_management`
--

INSERT INTO `leave_management` (`id`, `employee_id`, `from_date`, `to_date`, `type`, `description`, `total_days`, `status`, `action_by`, `created_at`, `updated_at`) VALUES
(1, '4', '2025-06-26', '2025-06-27', 'sick', 'Family function', 2, 'pending', 0, '2025-06-25 14:10:29', '2025-06-25 14:10:29'),
(0, '5', '2025-07-27', '2025-07-27', 'sick', 'Family function', 2, 'approved', 29, '2025-06-25 15:09:21', '2025-07-30 02:27:29'),
(3, '7', '2025-07-25', '2025-07-25', 'sick', 'Family function', 2, 'approved', NULL, '2025-06-25 15:10:20', '2025-06-25 15:10:20'),
(4, '8', '2025-06-26', '2025-06-27', 'sick', 'Family function', 2, '', NULL, '2025-06-25 15:22:19', '2025-06-25 15:22:19'),
(6, '9', '2025-07-02', '2025-07-27', 'permission', 'approved issue', 1, 'approved', NULL, '2025-07-01 13:54:26', '2025-07-01 13:54:26'),
(7, '9', '2025-07-03', '2025-07-02', 'sick', 'cancel issue', 1, '', NULL, '2025-07-01 13:54:34', '2025-07-01 13:54:34'),
(8, '\r\nEmp-357855\r\n', '2025-07-02', '2025-07-02', 'sick', 'cancel issue', 1, 'approved', NULL, '2025-07-02 17:04:00', '2025-07-02 17:04:00'),
(9, 'Emp-184950', '2025-07-03', '2025-07-27', 'casual', 'cancel issue', 2, 'approved', NULL, '2025-07-02 17:45:45', '2025-07-02 17:45:45'),
(22, 'Emp-831778', '2025-07-30', '2025-07-30', 'permission', 'Updated by public access', 2, 'approved', 1, '2025-07-03 15:15:49', '2025-07-27 10:43:51'),
(32, 'Emp-370631', '2025-07-27', '2025-07-27', 'sick', 'cancel issue', 0, 'approved', 29, '2025-07-27 23:35:37', '2025-08-04 01:15:30'),
(33, 'Emp-370631', '2025-07-27', '2025-07-29', 'permission', 'cancel issue', 0, 'cancelled', 29, '2025-07-27 23:58:31', '2025-08-04 02:33:21'),
(41, 'Emp-871118', '2025-07-30', '2025-07-30', 'permission', 'text', 1, 'pending', NULL, '2025-07-30 05:10:45', '2025-07-30 05:10:45'),
(34, '9', '2025-07-24', '2025-07-26', 'sick', 'i\'m suffering from fever', 1, 'pending', NULL, '2025-07-01 13:30:31', '2025-07-01 13:30:31'),
(31, 'Emp-858261', '2025-07-27', '2025-07-30', 'permission', 'cancel issue', 0, 'cancelled', 29, '2025-07-27 11:42:14', '2025-08-04 08:19:02'),
(37, 'Emp-972310', '2025-07-30', '2025-07-31', 'sick', 'cancel issue', 2, 'cancelled', 29, '2025-07-30 02:26:08', '2025-08-04 08:19:21'),
(36, 'Emp-972310', '2025-07-30', '2025-07-31', 'sick', 'cancel issue', 2, 'approved', 29, '2025-07-30 01:29:14', '2025-07-30 02:12:48'),
(38, 'Emp-140481', '2025-07-30', '2025-07-31', 'sick', 'family function', 2, 'approved', 29, '2025-07-30 02:26:44', '2025-07-30 02:29:17'),
(39, 'Emp-122697', '2025-07-30', '2025-07-31', 'sick', 'brother marriage', 2, 'approved', 29, '2025-07-30 02:31:44', '2025-08-04 08:20:05'),
(40, 'Emp-122697', '2025-07-30', '2025-07-31', 'sick', 'brother marriage', 2, 'pending', NULL, '2025-07-30 03:01:08', '2025-07-30 03:01:08'),
(42, 'Emp-122697', '2025-07-30', '2025-07-31', 'permission', 'brother marriage', 2, 'pending', NULL, '2025-07-30 05:45:50', '2025-07-30 05:45:50'),
(43, 'Emp-122697', '2025-07-30', '2025-07-31', 'permission', 'texttt', 2, 'cancelled', 29, '2025-07-30 05:46:37', '2025-08-04 08:15:54'),
(71, 'Emp-858261', '2025-07-30', '2025-07-30', 'sick', 'text', 1, 'pending', NULL, '2025-08-07 03:41:12', '2025-08-07 03:41:12'),
(49, 'Emp-871118', '2025-07-30', '2025-07-30', 'permission', 'text', 1, 'pending', NULL, '2025-08-01 03:19:54', '2025-08-01 03:19:54'),
(50, 'Emp-871118', '2025-07-30', '2025-07-30', 'permission', 'text', 1, 'pending', NULL, '2025-08-01 03:23:29', '2025-08-01 03:23:29'),
(51, 'Emp-871118', '2025-07-30', '2025-07-30', 'sick', 'text', 1, 'pending', NULL, '2025-08-01 03:23:56', '2025-08-01 03:23:56'),
(52, 'Emp-871118', '2025-07-30', '2025-07-30', 'permission', 'text', 1, 'pending', NULL, '2025-08-01 03:24:19', '2025-08-01 03:24:19'),
(53, 'Emp-871118', '2025-07-30', '2025-07-30', 'permission', 'text', 1, 'pending', NULL, '2025-08-01 03:31:12', '2025-08-01 03:31:12'),
(54, 'Emp-871118', '2025-07-30', '2025-07-30', 'permission', 'text', 1, 'pending', NULL, '2025-08-01 03:33:25', '2025-08-01 03:33:25'),
(55, 'Emp-858261', '2025-07-30', '2025-07-30', 'permission', 'text', 1, 'pending', NULL, '2025-08-01 03:36:12', '2025-08-01 03:36:12'),
(56, 'Emp-858261', '2025-07-30', '2025-07-30', 'sick', 'text', 1, 'pending', NULL, '2025-08-01 03:36:31', '2025-08-01 03:36:31'),
(57, 'Emp-858261', '2025-07-30', '2025-07-30', 'sick', 'text', 1, 'pending', NULL, '2025-08-03 23:16:42', '2025-08-03 23:16:42'),
(58, 'Emp-858261', '2025-07-30', '2025-07-30', 'sick', 'text', 1, 'pending', NULL, '2025-08-03 23:17:17', '2025-08-03 23:17:17'),
(70, 'Emp-858261', '2025-07-30', '2025-07-30', 'sick', 'text', 1, 'pending', NULL, '2025-08-07 03:40:56', '2025-08-07 03:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `sender_id` bigint UNSIGNED NOT NULL,
  `sender_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_id` bigint UNSIGNED NOT NULL,
  `receiver_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `sender_type`, `receiver_id`, `receiver_type`, `message`, `created_at`, `updated_at`) VALUES
(1, 1, 'employee', 2, 'employer', 'Hello!', '2025-07-23 01:30:07', '2025-07-23 01:30:07'),
(2, 1, 'employee', 2, 'employer', 'Hello!', '2025-07-23 01:30:21', '2025-07-23 01:30:21'),
(3, 1, 'employee', 2, 'employer', 'Hello!', '2025-07-23 01:43:52', '2025-07-23 01:43:52'),
(4, 2, 'employee', 29, 'employer', 'Hi Kumar sir!', '2025-07-23 01:44:11', '2025-07-23 01:44:11'),
(5, 3, 'employee', 21, 'employer', 'Hi saravana kumar sir!', '2025-07-23 01:57:56', '2025-07-23 01:57:56'),
(6, 21, 'employer', 3, 'employee', 'Hi Mathi, how can I help you?', '2025-07-23 02:10:36', '2025-07-23 02:10:36'),
(7, 25, 'employer', 29, 'employee', 'Hi Kumar', '2025-07-23 02:22:26', '2025-07-23 02:22:26'),
(8, 25, 'employee', 29, 'employer', 'Hi Kumar', '2025-07-23 02:22:51', '2025-07-23 02:22:51'),
(9, 25, 'employee', 29, 'employer', 'Hi Kumar', '2025-07-23 02:34:13', '2025-07-23 02:34:13'),
(10, 25, 'employer', 29, 'employee', 'Hi Mathi, how can I help you?', '2025-07-23 04:19:19', '2025-07-23 04:19:19'),
(11, 9, 'employer', 29, 'employee', 'Hi Mathi, how can I help you?', '2025-07-23 04:26:45', '2025-07-23 04:26:45'),
(12, 9, 'employer', 12, 'employee', 'Hi Mathi, how can I help you?', '2025-07-23 04:29:30', '2025-07-23 04:29:30'),
(13, 23, 'employer', 12, 'employee', 'Hi Mathi, how can I help you?', '2025-07-23 04:30:27', '2025-07-23 04:30:27'),
(14, 2, 'employer', 26, 'employee', 'welcome', '2025-07-23 07:01:39', '2025-07-23 07:01:39'),
(15, 2, 'employer', 26, 'employee', 'welcome', '2025-07-24 07:00:37', '2025-07-24 07:00:37'),
(16, 2, 'employer', 26, 'employee', 'welcome', '2025-07-24 07:01:15', '2025-07-24 07:01:15'),
(17, 2, 'employer', 26, 'employee', 'welcome', '2025-07-24 07:01:28', '2025-07-24 07:01:28'),
(18, 2, 'employer', 26, 'employee', 'welcome', '2025-07-24 23:45:51', '2025-07-24 23:45:51'),
(19, 2, 'employer', 26, 'employee', 'welcome', '2025-07-25 01:11:18', '2025-07-25 01:11:18'),
(20, 2, 'employer', 26, 'employee', 'welcome', '2025-07-29 03:03:11', '2025-07-29 03:03:11'),
(21, 2, 'employer', 26, 'employee', 'welcome', '2025-07-31 00:53:28', '2025-07-31 00:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_06_11_115828_create_employerregister_table', 2),
(6, '2025_06_12_070251_create_employer_prize_table', 3),
(7, '2025_06_12_085334_create_employer_payments_table', 4),
(8, '2025_06_17_083921_create_password_resets_table', 5),
(9, '2025_06_17_094746_create_password_resets_table', 6),
(10, '2025_07_22_112740_create_announcements_table', 7),
(11, '2025_07_22_121328_add_created_by_to_announcements_table', 8),
(12, '2025_07_22_125530_create_permissions_table', 9),
(14, '2025_07_23_054157_create_messages_table', 10),
(16, '2025_07_24_060407_create_announcements_table', 11),
(18, '2025_07_24_085907_create_nots_table', 12),
(19, '2025_07_24_090401_create_notes_table', 12),
(23, '2025_07_24_103855_create_announcement_reads_table', 13),
(27, '2025_07_25_084452_create_festivals_table', 14),
(28, '2025_07_31_064309_add_employer_id_to_notes_table', 15),
(29, '2025_07_31_064753_add_employer_id_to_notes_table', 15),
(34, '2025_07_31_064828_add_employer_id_to_notes_table', 16),
(36, '2025_08_06_044636_create_announcement_comments_table', 17),
(39, '2025_08_07_064022_create_announcement_likes_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `employer_id` bigint UNSIGNED NOT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unread',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `employee_id`, `employer_id`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Emp-719922', 0, 'This is a sample note for the employer.', 'read', '2025-07-24 03:45:14', '2025-07-24 03:45:14'),
(2, 'Emp-719922', 0, 'This is a sample note for the employer.', 'unread', '2025-07-24 03:47:13', '2025-07-24 03:47:13'),
(3, 'Emp-719922', 0, 'This is a sample note for the employer.', 'unread', '2025-07-24 03:58:14', '2025-07-24 03:58:14'),
(4, 'Emp-719922', 0, 'This is a sample note for the employer.', 'unread', '2025-07-24 03:58:19', '2025-07-24 03:58:19'),
(5, 'Emp-719922', 0, 'This is a sample note for the employer.', 'unread', '2025-07-24 03:58:21', '2025-07-24 03:58:21'),
(38, 'Emp-942998', 33, 'Hello sir, please review my weekly report.', 'unread', '2025-08-01 02:19:55', '2025-08-01 02:19:55'),
(39, 'Emp-942998', 33, 'Hello sir, please review my weekly report.', 'unread', '2025-08-01 02:31:39', '2025-08-01 02:31:39'),
(40, 'Emp-942998', 33, 'Hello sir, please review my weekly report.', 'unread', '2025-08-01 05:22:27', '2025-08-01 05:22:27'),
(41, 'Emp-942998', 33, 'Hello sir, please review my weekly report.', 'unread', '2025-08-01 05:36:11', '2025-08-01 05:36:11'),
(42, 'Emp-942998', 33, 'Hello sir, please review my weekly report.', 'unread', '2025-08-01 05:38:50', '2025-08-01 05:38:50'),
(43, 'Emp-942998', 33, 'Hello sir, please review my weekly report.', 'unread', '2025-08-01 05:39:12', '2025-08-01 05:39:12'),
(44, 'Emp-942998', 33, 'Hello sir, please review my weekly report.', 'unread', '2025-08-03 23:18:58', '2025-08-03 23:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `offer_letters`
--

DROP TABLE IF EXISTS `offer_letters`;
CREATE TABLE IF NOT EXISTS `offer_letters` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `employee_id` bigint UNSIGNED NOT NULL,
  `file_path` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `offer_letters_employee_id_foreign` (`employee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offer_letters`
--

INSERT INTO `offer_letters` (`id`, `employee_id`, `file_path`, `created_at`, `updated_at`) VALUES
(1, 10, 'Offerletter/offer_letter_Emp-357855.pdf', '2025-06-19 16:22:56', '2025-06-19 16:22:56'),
(2, 11, 'Offerletter/offer_letter_Emp-972310.pdf', '2025-06-19 16:24:11', '2025-06-19 16:24:11'),
(3, 12, 'Offerletter/offer_letter_Emp-233548.pdf', '2025-06-19 16:41:54', '2025-06-19 16:41:54'),
(4, 15, 'Offerletter/offer_letter_Emp-801425.pdf', '2025-06-20 12:50:41', '2025-06-20 12:50:41'),
(5, 16, 'Offerletter/offer_letter_Emp-122697.pdf', '2025-06-23 17:26:47', '2025-06-23 17:26:47'),
(6, 17, 'Offerletter/offer_letter_Emp-266495.pdf', '2025-07-02 18:06:35', '2025-07-02 18:06:35'),
(7, 18, 'Offerletter/offer_letter_Emp-831778.pdf', '2025-07-02 18:08:11', '2025-07-02 18:08:11'),
(8, 19, 'Offerletter/offer_letter_Emp-858261.pdf', '2025-07-02 19:39:38', '2025-07-02 19:39:38'),
(9, 20, 'Offerletter/offer_letter_Emp-491242.pdf', '2025-07-02 20:17:58', '2025-07-02 20:17:58'),
(10, 21, 'Offerletter/offer_letter_Emp-460671.pdf', '2025-07-09 18:10:14', '2025-07-09 18:10:14'),
(11, 22, 'Offerletter/offer_letter_Emp-788748.pdf', '2025-07-09 18:25:09', '2025-07-09 18:25:09'),
(12, 23, 'Offerletter/offer_letter_Emp-559549.pdf', '2025-07-10 14:33:43', '2025-07-10 14:33:43'),
(13, 24, 'Offerletter/offer_letter_Emp-942998.pdf', '2025-07-10 17:29:44', '2025-07-10 17:29:44'),
(14, 25, 'Offerletter/offer_letter_Emp-704219.pdf', '2025-07-10 18:14:28', '2025-07-10 18:14:28'),
(15, 26, 'Offerletter/offer_letter_Emp-140481.pdf', '2025-07-10 18:35:16', '2025-07-10 18:35:16'),
(16, 27, 'Offerletter/offer_letter_Emp-929099.pdf', '2025-07-10 18:39:57', '2025-07-10 18:39:57'),
(17, 28, 'Offerletter/offer_letter_Emp-252149.pdf', '2025-07-10 18:42:13', '2025-07-10 18:42:13'),
(18, 29, 'Offerletter/offer_letter_Emp-348345.pdf', '2025-07-10 19:54:10', '2025-07-10 19:54:10'),
(19, 30, 'Offerletter/offer_letter_Emp-967365.pdf', '2025-07-10 20:09:46', '2025-07-10 20:09:46'),
(20, 31, 'Offerletter/offer_letter_Emp-449468.pdf', '2025-07-10 20:13:03', '2025-07-10 20:13:03'),
(21, 32, 'Offerletter/offer_letter_Emp-343547.pdf', '2025-07-10 20:36:56', '2025-07-10 20:36:56'),
(22, 33, 'Offerletter/offer_letter_Emp-183841.pdf', '2025-07-11 10:33:02', '2025-07-11 10:33:02'),
(23, 34, 'Offerletter/offer_letter_Emp-211460.pdf', '2025-07-11 12:55:37', '2025-07-11 12:55:37'),
(24, 35, 'Offerletter/offer_letter_Emp-610379.pdf', '2025-07-11 20:41:30', '2025-07-11 20:41:30'),
(25, 36, 'Offerletter/offer_letter_Emp-951956.pdf', '2025-07-14 13:13:39', '2025-07-14 13:13:39'),
(26, 37, 'Offerletter/offer_letter_Emp-525112.pdf', '2025-07-14 13:24:21', '2025-07-14 13:24:21'),
(27, 38, 'Offerletter/offer_letter_Emp-639534.pdf', '2025-07-15 12:23:44', '2025-07-15 12:23:44'),
(28, 39, 'Offerletter/offer_letter_Emp-591785.pdf', '2025-07-31 04:01:41', '2025-07-31 04:01:41'),
(29, 40, 'Offerletter/offer_letter_Emp-191025.pdf', '2025-07-31 04:22:31', '2025-07-31 04:22:31'),
(30, 41, 'Offerletter/offer_letter_Emp-573241.pdf', '2025-07-31 04:23:55', '2025-07-31 04:23:55'),
(31, 42, 'Offerletter/offer_letter_Emp-811828.pdf', '2025-07-31 04:39:10', '2025-07-31 04:39:10'),
(32, 43, 'Offerletter/offer_letter_Emp-835170.pdf', '2025-08-08 04:47:39', '2025-08-08 04:47:39'),
(33, 44, 'Offerletter/offer_letter_Emp-835171.pdf', '2025-08-11 02:14:55', '2025-08-11 02:14:55'),
(34, 45, 'Offerletter/offer_letter_Emp-591786.pdf', '2025-08-11 02:17:58', '2025-08-11 02:17:58'),
(35, 46, 'Offerletter/offer_letter_EMP-001.pdf', '2025-08-11 02:25:24', '2025-08-11 02:25:24'),
(36, 47, 'Offerletter/offer_letter_EMP-002.pdf', '2025-08-11 02:26:40', '2025-08-11 02:26:40'),
(37, 48, 'Offerletter/offer_letter_EMP-001.pdf', '2025-08-11 03:13:43', '2025-08-11 03:13:43'),
(38, 49, 'Offerletter/offer_letter_EMP-001.pdf', '2025-08-11 03:15:58', '2025-08-11 03:15:58'),
(39, 50, 'Offerletter/offer_letter_EMP-001.pdf', '2025-08-11 03:19:12', '2025-08-11 03:19:12'),
(40, 51, 'Offerletter/offer_letter_EMP-001.pdf', '2025-08-11 03:20:51', '2025-08-11 03:20:51'),
(41, 52, 'Offerletter/offer_letter_EMP-001.pdf', '2025-08-11 03:23:08', '2025-08-11 03:23:08'),
(42, 53, 'Offerletter/offer_letter_EMP-001.pdf', '2025-08-11 03:27:32', '2025-08-11 03:27:32'),
(43, 54, 'Offerletter/offer_letter_EMP-002.pdf', '2025-08-11 03:30:18', '2025-08-11 03:30:18'),
(44, 55, 'Offerletter/offer_letter_EMP-003.pdf', '2025-08-11 03:38:45', '2025-08-11 03:38:45'),
(45, 56, 'Offerletter/offer_letter_EMP-004.pdf', '2025-08-11 03:40:35', '2025-08-11 03:40:35'),
(46, 57, 'Offerletter/offer_letter_EMP-005.pdf', '2025-08-11 03:41:15', '2025-08-11 03:41:15'),
(47, 58, 'Offerletter/offer_letter_EMP-006.pdf', '2025-08-11 03:41:52', '2025-08-11 03:41:52'),
(48, 59, 'Offerletter/offer_letter_EMP-007.pdf', '2025-08-11 03:44:34', '2025-08-11 03:44:34'),
(49, 60, 'Offerletter/offer_letter_EMP-008.pdf', '2025-08-11 03:46:10', '2025-08-11 03:46:10'),
(50, 77, 'Offerletter/offer_letter_EMP-003.pdf', '2025-08-11 06:02:34', '2025-08-11 06:02:34'),
(51, 78, 'Offerletter/offer_letter_EMP-004.pdf', '2025-08-11 06:08:28', '2025-08-11 06:08:28'),
(52, 79, 'Offerletter/offer_letter_EMP-005.pdf', '2025-08-11 06:10:52', '2025-08-11 06:10:52'),
(53, 80, 'Offerletter/offer_letter_EMP-005.pdf', '2025-08-13 04:59:33', '2025-08-13 04:59:33'),
(54, 81, 'Offerletter/offer_letter_EMP-005.pdf', '2025-08-13 05:00:50', '2025-08-13 05:00:50'),
(55, 82, 'Offerletter/offer_letter_EMP-005.pdf', '2025-08-13 05:04:32', '2025-08-13 05:04:32'),
(56, 83, 'Offerletter/offer_letter_EMP-005.pdf', '2025-08-13 05:05:57', '2025-08-13 05:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `password_resets_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `otp`, `token`, `is_verified`, `created_at`, `updated_at`) VALUES
(10, 'vembu1@yopmail.com', '820447', '4tPR9Yqa9ON6k2IwRrNTstXsxV4lD8sFR8lAhFkv0Xb3a3VjNIwgU0uqZajkFO41', 0, '2025-07-11 10:25:55', '2025-07-11 10:25:55'),
(9, 'kumar@yopmail.com', '496848', '93txwOMCa6Z4ZGpvBAgqQ2ZqdzroPaGH8nXv6orKxVfXBDow2psiVESAtCn6JdHP', 0, '2025-07-09 21:48:49', '2025-07-09 21:48:49');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `expires_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `otp`, `is_verified`, `expires_at`, `created_at`) VALUES
('indhu11@yopmail.com', 'rmh0647LBdyqXC54CipeFc7vvGpgaHtUp6DmBooBJ7bZ9EtldOOPYIHhl4mZS6Kc', '227754', 0, '2025-06-17 04:06:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `type` enum('casual','sick','permission','') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'casual',
  `from_time` time NOT NULL,
  `to_time` time NOT NULL,
  `reason` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` enum('pending','approved','rejected') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `action_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `employee_id`, `date`, `type`, `from_time`, `to_time`, `reason`, `status`, `action_by`, `created_at`, `updated_at`) VALUES
(8, 'Emp-460671', '2025-07-22', 'casual', '09:00:00', '12:00:00', 'personal', 'approved', NULL, '2025-07-22 12:54:09', '2025-07-22 12:54:09'),
(3, 'Emp-377581', '2025-07-22', 'casual', '09:00:00', '11:00:00', 'Doctor appointment', 'pending', NULL, '2025-07-22 09:33:16', '2025-07-22 09:33:16'),
(4, 'Emp-813149', '2025-07-22', 'casual', '09:00:00', '11:00:00', 'emerncy', 'approved', NULL, '2025-07-22 09:34:11', '2025-07-22 09:34:11'),
(5, 'Emp-227823', '2025-07-23', 'casual', '09:00:00', '11:00:00', 'personal', 'pending', NULL, '2025-07-22 09:35:40', '2025-07-22 09:35:40'),
(6, 'Emp-227823', '2025-07-23', 'casual', '09:00:00', '12:00:00', 'personal', 'approved', NULL, '2025-07-22 09:36:38', '2025-07-22 09:36:38'),
(7, 'Emp-801425', '2025-07-23', 'casual', '09:00:00', '12:00:00', 'personal', 'approved', NULL, '2025-07-22 09:46:42', '2025-07-22 09:46:42'),
(9, 'Emp-266495', '2025-07-23', '', '09:00:00', '12:00:00', 'personal', 'approved', NULL, '2025-07-23 11:05:08', '2025-07-23 11:05:08'),
(10, 'Emp-831778', '2025-07-27', 'permission', '09:00:00', '12:00:00', 'personal', 'approved', NULL, '2025-07-23 11:06:15', '2025-07-23 11:06:15');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM AUTO_INCREMENT=435 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Employer\\register', 11, 'merchant-api-token', 'b2dd01a91e5011494ed48cbe2f768a5440eaec910e27eb7ba172c9aa235cba81', '[\"*\"]', NULL, NULL, '2025-06-13 05:00:30', '2025-06-13 05:00:30'),
(2, 'App\\Models\\Employer\\register', 11, 'merchant-api-token', '67498e12d7476d22208ba2fe866816b99e9c9efa934ebd007b6595441c7e9bf7', '[\"*\"]', NULL, NULL, '2025-06-13 05:01:39', '2025-06-13 05:01:39'),
(3, 'App\\Models\\Employer\\register', 11, 'merchant-api-token', '968fe3d34ba15fcaffb69a6461ac1a058d61386efac8deb7651b7ed620ffa1dc', '[\"*\"]', NULL, NULL, '2025-06-13 05:02:01', '2025-06-13 05:02:01'),
(4, 'App\\Models\\Employer\\register', 11, 'merchant-api-token', '821f23b18bb6a8facbf475a4e03696655f80f4eeaa54824d268c10afd470c957', '[\"*\"]', NULL, NULL, '2025-06-15 23:50:31', '2025-06-15 23:50:31'),
(5, 'App\\Models\\Employer\\register', 11, 'merchant-api-token', '8f1e510701e8374aa7e3f5e8237ad52ad53185d568d78ea621c0bbe957df7058', '[\"*\"]', NULL, NULL, '2025-06-16 06:59:38', '2025-06-16 06:59:38'),
(6, 'App\\Models\\Employer\\register', 12, 'merchant-api-token', '63188244a783c0e29326326179f04947fcacb1667ccc0699915532fd33f4f213', '[\"*\"]', NULL, NULL, '2025-06-17 05:25:17', '2025-06-17 05:25:17'),
(8, 'App\\Models\\Employer\\register', 12, 'merchant-api-token', '1f46fc151770f1cd2b907e1832c4c4e39e34198050401f7e175c3d35aa255244', '[\"*\"]', '2025-06-17 06:36:08', NULL, '2025-06-17 06:33:36', '2025-06-17 06:36:08'),
(9, 'App\\Models\\Employer\\register', 12, 'merchant-api-token', 'fbba44b4d45906e90c75505500de329ff531fb7a63452c50be924313f304776c', '[\"*\"]', '2025-06-17 06:48:57', NULL, '2025-06-17 06:47:40', '2025-06-17 06:48:57'),
(11, 'App\\Models\\Employer\\register', 17, 'merchant-api-token', '935032f66456bc546f796374a65acea787b9b8b4f96ee14d2d785f31f8c37d10', '[\"*\"]', '2025-06-18 17:16:39', NULL, '2025-06-18 17:16:16', '2025-06-18 17:16:39'),
(12, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '07611949d7a441a35b0d217c773592d1d36457713008dc7eaddd03076a3e0d2d', '[\"*\"]', '2025-06-20 15:17:54', NULL, '2025-06-20 15:17:34', '2025-06-20 15:17:54'),
(13, 'App\\Models\\Employer\\register', 20, 'merchant-api-token', 'aada164dbfa48201eafd06b47085acd0b6ed8179ff2b170969bc646586024d7d', '[\"*\"]', '2025-07-02 18:41:16', NULL, '2025-06-20 15:29:37', '2025-07-02 18:41:16'),
(14, 'App\\Models\\Employee\\Register', 15, 'merchant-api-token', 'a12de4c1502b61e6dc9925c3645fe5ce70d52d862ced4527f1a4cdb5e355c567', '[\"*\"]', '2025-07-31 04:49:26', NULL, '2025-06-20 19:17:55', '2025-07-31 04:49:26'),
(15, 'App\\Models\\Employee\\Register', 1, 'merchant-api-token', '743ce61733e3824e0e6afde9afa71c02d47a984a2ea399e29b81bf3b60b14543', '[\"*\"]', '2025-06-23 12:26:32', NULL, '2025-06-23 12:26:18', '2025-06-23 12:26:32'),
(16, 'App\\Models\\Employee\\Register', 15, 'merchant-api-token', '818b4a1a455e75b100c444cde7f34d36e715f836b6d66bee3b4a5ab43e7db28c', '[\"*\"]', '2025-06-23 16:02:25', NULL, '2025-06-23 16:00:02', '2025-06-23 16:02:25'),
(17, 'App\\Models\\Employee\\Register', 15, 'merchant-api-token', '3abcb36c4ae062d8c5e11e7a85a695ef271e90ea03f214d5ddb3a3ada74094bb', '[\"*\"]', NULL, NULL, '2025-06-23 16:03:01', '2025-06-23 16:03:01'),
(18, 'App\\Models\\Employee\\Register', 16, 'merchant-api-token', 'cf1b299fa21fa4792d519060042d8111331c942a607a9d58846f2468e17218db', '[\"*\"]', NULL, NULL, '2025-06-23 17:28:37', '2025-06-23 17:28:37'),
(19, 'App\\Models\\Employee\\Register', 19, 'merchant-api-token', 'e051aee017494955a87ee80a9eb3ba144a4cbe656b2165ca79f3dc1172507aad', '[\"*\"]', '2025-07-02 20:15:39', NULL, '2025-07-02 19:40:17', '2025-07-02 20:15:39'),
(20, 'App\\Models\\Employee\\Register', 20, 'merchant-api-token', '7fa809ac823872215bfa149ea31d768b3a781da51b557ad807f503ba13c5f6c2', '[\"*\"]', '2025-07-02 20:19:00', NULL, '2025-07-02 20:18:47', '2025-07-02 20:19:00'),
(21, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '73da54b0e109a3703eef2f15e8dba75de3165b8ffc14de97347848d2eee6017e', '[\"*\"]', NULL, NULL, '2025-07-08 16:14:41', '2025-07-08 16:14:41'),
(22, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', 'a70794dfbe1d78b2a62ab4880539c8252ee14e87ae0332c2a994409bb0c780a1', '[\"*\"]', NULL, NULL, '2025-07-08 18:12:45', '2025-07-08 18:12:45'),
(23, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', 'def424a0431f4be9fb726223883aca1bce8673318bacf200d797a40a62ca561a', '[\"*\"]', NULL, NULL, '2025-07-08 18:19:54', '2025-07-08 18:19:54'),
(24, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '20826f913baae43c0d3ef330bef96cf25611c0ac9ead6ad1b332af4866451eef', '[\"*\"]', NULL, NULL, '2025-07-08 18:23:27', '2025-07-08 18:23:27'),
(25, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '89c0e92e80a1de3b20b8f4fae9bb63aa455cb668a65c06c5b9d35d0c76d3d06f', '[\"*\"]', NULL, NULL, '2025-07-08 18:43:45', '2025-07-08 18:43:45'),
(26, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', 'ff0c4b2a3f99f198835c1817c6af5ed9ae5ddf1a80cd1b1d941aac20a95b9e6b', '[\"*\"]', NULL, NULL, '2025-07-08 18:52:13', '2025-07-08 18:52:13'),
(27, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', 'b6e2324d715cb4268a75c1f0943cf79b51665bf369ecdd6fe7f062e64901a44a', '[\"*\"]', NULL, NULL, '2025-07-08 18:52:46', '2025-07-08 18:52:46'),
(28, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '1072c0ad54e03f418894b204d70c8e4091725edeb59ff610cf184eb2ee677696', '[\"*\"]', NULL, NULL, '2025-07-08 18:54:29', '2025-07-08 18:54:29'),
(29, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', 'dab73f73176fe05b715dbae74e2c03d81e8bdd35ebb8523cfb08c7f241cbacd0', '[\"*\"]', NULL, NULL, '2025-07-08 18:54:40', '2025-07-08 18:54:40'),
(44, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '3813b488e2036f6512cf1ebb94f4355d71c5a4102c3e3eb7484ec46467875b59', '[\"*\"]', NULL, NULL, '2025-07-08 20:28:53', '2025-07-08 20:28:53'),
(53, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '7cf0e719b946a204dd1485e9742f158dbc986f585c6cd9f20b713a51406ad255', '[\"*\"]', '2025-07-10 20:40:07', NULL, '2025-07-09 13:42:50', '2025-07-10 20:40:07'),
(46, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', 'bd6dec6617c360cdd168b9a68a40b6128de7fd5cb77817d4dfb3d10904b5079f', '[\"*\"]', NULL, NULL, '2025-07-09 12:05:24', '2025-07-09 12:05:24'),
(54, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '7b951d17dc8a61846e066f12176ee407f111dd203be4f0db210986e2981dc9d1', '[\"*\"]', NULL, NULL, '2025-07-09 13:44:57', '2025-07-09 13:44:57'),
(55, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '752c7e7cee8f5e047c19b72e9eafd500db826ad5a51e9faf787b873988d73472', '[\"*\"]', NULL, NULL, '2025-07-09 13:45:12', '2025-07-09 13:45:12'),
(57, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '7a7f0b27e1f572c8b4203a6c91db07af826bc123f147f46969f4015a89679def', '[\"*\"]', NULL, NULL, '2025-07-09 14:04:45', '2025-07-09 14:04:45'),
(58, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', 'ea5abcf6d1d3aba81b1cfe4e45df263fc7b8e586ea5b4533f15be8585dbf63dd', '[\"*\"]', NULL, NULL, '2025-07-09 15:56:57', '2025-07-09 15:56:57'),
(59, 'App\\Models\\Employee\\Register', 16, 'merchant-api-token', '83e72cb31f4a940147290224ccd350e3df093ab9ae6a677de6cf523e109a94a8', '[\"*\"]', NULL, NULL, '2025-07-09 17:26:54', '2025-07-09 17:26:54'),
(60, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '3dbf6c8ed0f2c9943210bddf3e968ec9449fde0dce0905113a3dc36b5c61b449', '[\"*\"]', NULL, NULL, '2025-07-09 18:01:36', '2025-07-09 18:01:36'),
(61, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '69d27d7d65f325a6c2d5a56664bbe16ca81171ebd37830577058385ebcf5fd76', '[\"*\"]', NULL, NULL, '2025-07-09 19:44:35', '2025-07-09 19:44:35'),
(62, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '2fee1dec0db941b650a18bfaf72fb91b6ad67114736d177e81b47d42ed54cb0a', '[\"*\"]', NULL, NULL, '2025-07-09 20:05:42', '2025-07-09 20:05:42'),
(63, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '558d7ab1fea930dd5ed3e30f65f5e93b6c168f0de35b7955c36a27e4c6e7075e', '[\"*\"]', NULL, NULL, '2025-07-09 21:00:18', '2025-07-09 21:00:18'),
(64, 'App\\Models\\Employer\\register', 17, 'merchant-api-token', 'f641fb800d55dadb3e0795869f6f389f053e52cbbdab25a5e8285669a45df608', '[\"*\"]', NULL, NULL, '2025-07-09 21:14:39', '2025-07-09 21:14:39'),
(65, 'App\\Models\\Employer\\register', 17, 'merchant-api-token', 'b17bf894559644d91186c12087697644e7afbb5f8d5335d426249e6f97a01ad7', '[\"*\"]', NULL, NULL, '2025-07-09 21:23:02', '2025-07-09 21:23:02'),
(66, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '35e7cc43ae5d641c5f187766bda8a6a67542882afb442dfaf955d4e06e6b21bd', '[\"*\"]', NULL, NULL, '2025-07-09 21:23:14', '2025-07-09 21:23:14'),
(67, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '9b4acaacd487f5ac052b7d43cd3ed13f10827c85c2e3d3e140fa571900ce81d4', '[\"*\"]', NULL, NULL, '2025-07-09 21:24:13', '2025-07-09 21:24:13'),
(69, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '2f4bedb80ee7e91d936766afc0d6c071873409f80bc0579895791647c29122dd', '[\"*\"]', NULL, NULL, '2025-07-09 21:25:06', '2025-07-09 21:25:06'),
(71, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '9ff59c457cd98c2ef9609371d01a944ddb58f577ec1d5f29e7bf1b96754bfcd6', '[\"*\"]', NULL, NULL, '2025-07-09 21:56:20', '2025-07-09 21:56:20'),
(72, 'App\\Models\\Employee\\Register', 16, 'merchant-api-token', '4bed1532b1c1c17cd051e88f881e5393431d114ce835aeeca6f7cd2687c8ef7f', '[\"*\"]', NULL, NULL, '2025-07-10 02:10:29', '2025-07-10 02:10:29'),
(73, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', 'f2a884e84f32a06b65374903b10b3cd73190e72b3bf2f97280d49405a807a503', '[\"*\"]', NULL, NULL, '2025-07-10 13:30:06', '2025-07-10 13:30:06'),
(74, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', 'b4b640ac7f38feb0d8669e03a2f269d9829b1dd3e7d6e02c712f296df37e2d91', '[\"*\"]', NULL, NULL, '2025-07-10 13:34:07', '2025-07-10 13:34:07'),
(75, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '86cf38ef970860d2021286bcc3624ed5728a1f854dd8f11e216f3809c0160e82', '[\"*\"]', NULL, NULL, '2025-07-10 16:48:21', '2025-07-10 16:48:21'),
(76, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '0626634ac41a46113ea97e2f4f3580921548b393493f3a6ecf9faf12eace3a53', '[\"*\"]', NULL, NULL, '2025-07-10 16:52:52', '2025-07-10 16:52:52'),
(77, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', 'a7292c9c91de25ce17b411ad6bb582401a9e51bf4bb247c594bc903601eed7dc', '[\"*\"]', NULL, NULL, '2025-07-10 17:42:11', '2025-07-10 17:42:11'),
(78, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '0785bfd017157008c6a1ae75552a3107c113cb16df0ff973d9f1021fe5c0227a', '[\"*\"]', NULL, NULL, '2025-07-10 18:10:19', '2025-07-10 18:10:19'),
(79, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '0979b33f5cc7c62df335a55c878db5dcadb8fa26bb9217661f3ac6cb580ef200', '[\"*\"]', NULL, NULL, '2025-07-10 18:32:10', '2025-07-10 18:32:10'),
(80, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '062006d36d42ebc6d60069f82cbf975a454ab460421947de22911e675cb7fa0d', '[\"*\"]', NULL, NULL, '2025-07-10 19:16:22', '2025-07-10 19:16:22'),
(81, 'App\\Models\\Employee\\Register', 28, 'merchant-api-token', 'eb49140e0739dba83e73656d7fd80340cebb9c5e801e714cf7b7b2f2eb37f13f', '[\"*\"]', '2025-07-10 19:38:44', NULL, '2025-07-10 19:38:22', '2025-07-10 19:38:44'),
(82, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '766926350345c6d67f7da59d29bbe76008030b21e4db632df4a54e87d7eb4ee8', '[\"*\"]', NULL, NULL, '2025-07-10 19:51:39', '2025-07-10 19:51:39'),
(83, 'App\\Models\\Employee\\Register', 29, 'merchant-api-token', '0fdef17e872241e0af619d3e09957bfb13f3840e9436acdc2922755136bd26df', '[\"*\"]', '2025-07-10 19:55:14', NULL, '2025-07-10 19:54:58', '2025-07-10 19:55:14'),
(84, 'App\\Models\\Employee\\Register', 30, 'merchant-api-token', '28ffab30ddab08b83b5d6226c2997698cdfd21aede6cf2216a469001d02f3981', '[\"*\"]', '2025-07-10 20:10:41', NULL, '2025-07-10 20:10:20', '2025-07-10 20:10:41'),
(85, 'App\\Models\\Employee\\Register', 31, 'merchant-api-token', '5387342dfca2577e05c36a33665020aa4209efa8f1036771e7299618ce0a730f', '[\"*\"]', NULL, NULL, '2025-07-10 20:13:27', '2025-07-10 20:13:27'),
(86, 'App\\Models\\Employee\\Register', 31, 'merchant-api-token', '43b15bdcb89c11252d762b07d691a33543b0ddaeda32c4a5d879324b500f403c', '[\"*\"]', NULL, NULL, '2025-07-10 20:13:33', '2025-07-10 20:13:33'),
(87, 'App\\Models\\Employee\\Register', 31, 'merchant-api-token', 'c8eea7df13255f0279fd27910a55281b933a57ce074245186beaa7cd139fdcda', '[\"*\"]', '2025-07-10 20:13:55', NULL, '2025-07-10 20:13:38', '2025-07-10 20:13:55'),
(88, 'App\\Models\\Employee\\Register', 23, 'merchant-api-token', 'cb956a8be8e4fd9b4ae16ac5603771449bc88b6adf4bbc5bdf5614e32ac4065e', '[\"*\"]', '2025-07-10 20:35:41', NULL, '2025-07-10 20:34:57', '2025-07-10 20:35:41'),
(89, 'App\\Models\\Employee\\Register', 32, 'merchant-api-token', '5215fc405d996a5e49274b9c0a753b38831da374db8d19a01d177056dee33dfd', '[\"*\"]', '2025-07-14 13:25:36', NULL, '2025-07-10 20:37:20', '2025-07-14 13:25:36'),
(92, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '4c562dc574882ededa951c3367654b71305165f5a3f1bf0db4398b734936d2fa', '[\"*\"]', NULL, NULL, '2025-07-11 01:02:16', '2025-07-11 01:02:16'),
(94, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', 'd678f5a4a450b30d9aca3d063a0c8570cb0364cd24310f1a0d29563ae22b1c61', '[\"*\"]', NULL, NULL, '2025-07-11 01:04:17', '2025-07-11 01:04:17'),
(96, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '6f19428c632b353c781c1a21089efa2fb4577a637654aef9ad9a2f5802a957d6', '[\"*\"]', NULL, NULL, '2025-07-11 10:29:14', '2025-07-11 10:29:14'),
(97, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', 'd0b0cb6ea19f8cad72ed4610184a944f5ae764061de9acc4dde5b6ffec13e1f9', '[\"*\"]', NULL, NULL, '2025-07-11 11:49:43', '2025-07-11 11:49:43'),
(98, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '0fa9760b03c2964001d016578a5e3b923f80a323b3800782dc439c7353f2f699', '[\"*\"]', NULL, NULL, '2025-07-11 12:09:46', '2025-07-11 12:09:46'),
(99, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '384b44ab579af494334925e959ffebf91433ddbaf654240f36f8e5a5bec9dcfb', '[\"*\"]', NULL, NULL, '2025-07-11 12:12:05', '2025-07-11 12:12:05'),
(100, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '2b0fa1f86e868298852a2ed60b75697dee15ef060c5df8b6000b41dd8ebc8d7a', '[\"*\"]', NULL, NULL, '2025-07-11 12:17:13', '2025-07-11 12:17:13'),
(104, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '853722716224b62288b4601a87aecce486c64b652b4d2e23f70d01fe97f301fd', '[\"*\"]', '2025-07-11 14:48:48', NULL, '2025-07-11 14:01:22', '2025-07-11 14:48:48'),
(105, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '4b83887a28a9a46ecd16f3aa1000da3602e739946b61ed84e536dd06b8fb749b', '[\"*\"]', '2025-07-11 14:03:02', NULL, '2025-07-11 14:02:41', '2025-07-11 14:03:02'),
(106, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '438b01cd37d657c56bc105a88df95cecd283ccdacb2deb21c54773b7c22a5c36', '[\"*\"]', '2025-07-11 15:50:18', NULL, '2025-07-11 14:54:55', '2025-07-11 15:50:18'),
(107, 'App\\Models\\Employee\\Register', 31, 'merchant-api-token', '1fd092ecc7804e215be1f0da90f7e0645fdd00449ec45ca91349981ec96093ac', '[\"*\"]', NULL, NULL, '2025-07-11 16:01:35', '2025-07-11 16:01:35'),
(108, 'App\\Models\\Employee\\Register', 27, 'merchant-api-token', '05cb0c376444c525947ba55f2a8a2ba39e169e847bab1ce66643e14f9baddf99', '[\"*\"]', NULL, NULL, '2025-07-11 16:02:52', '2025-07-11 16:02:52'),
(114, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '9272cb5401fd8b5e9c66f42be61d012848278afc5a281fdc971e746541786f20', '[\"*\"]', '2025-07-11 17:01:28', NULL, '2025-07-11 17:01:12', '2025-07-11 17:01:28'),
(111, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'f38dde49f3cbd34a9195d9eab3e63945f0cb35984fa38f12cb19e6af197aa885', '[\"*\"]', '2025-07-11 16:38:40', NULL, '2025-07-11 16:38:27', '2025-07-11 16:38:40'),
(112, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '389c37d727430748437b4f5116e2e9bff38c2ed34df3cd1ded29aa212ae35203', '[\"*\"]', '2025-07-11 16:59:08', NULL, '2025-07-11 16:39:49', '2025-07-11 16:59:08'),
(115, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '6cfc582f5b98b0d5240231aada64cd0c379e48dcd4995415c46649e41a15d4ac', '[\"*\"]', '2025-07-11 17:03:01', NULL, '2025-07-11 17:02:33', '2025-07-11 17:03:01'),
(117, 'App\\Models\\Employee\\Register', 28, 'merchant-api-token', '7e6aeac622bd8979daf65c6c5768826666240c8c5e7e407c58e808a8c140f972', '[\"*\"]', NULL, NULL, '2025-07-11 17:33:39', '2025-07-11 17:33:39'),
(118, 'App\\Models\\Employee\\Register', 32, 'merchant-api-token', 'dc9668320ab7dc2452365402f64e7600182f2b9d0d34329efa947b904d71b206', '[\"*\"]', NULL, NULL, '2025-07-11 17:34:04', '2025-07-11 17:34:04'),
(124, 'App\\Models\\Employer\\register', 33, 'merchant-api-token', 'e7bbebfcb8cea349bc6b1a51039491f8193bc06dbc7fb27c5da3d273ce450a6b', '[\"*\"]', NULL, NULL, '2025-07-11 17:49:59', '2025-07-11 17:49:59'),
(123, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '01d283b30953eee3b57e8b17d828e9acf2c8271f9ed1933f99c849d953084c36', '[\"*\"]', '2025-07-11 17:52:37', NULL, '2025-07-11 17:47:50', '2025-07-11 17:52:37'),
(125, 'App\\Models\\Employer\\register', 33, 'merchant-api-token', '960284548e49a063a0442f42d588cccbcb0063339b7cd25e22e2ea80f7e452af', '[\"*\"]', '2025-07-11 17:50:14', NULL, '2025-07-11 17:50:09', '2025-07-11 17:50:14'),
(130, 'App\\Models\\Employer\\register', 34, 'merchant-api-token', '199cde8fbc071d18f538301877d7c7ebd6ea45de5047d34ce062eb78e1aa41c0', '[\"*\"]', NULL, NULL, '2025-07-11 18:04:43', '2025-07-11 18:04:43'),
(127, 'App\\Models\\Employer\\register', 34, 'merchant-api-token', '1ed9a0a3402fbfcc9e473f7e8d410085c72c779b026e0e60bda4263536e663ee', '[\"*\"]', '2025-07-11 18:04:01', NULL, '2025-07-11 17:53:05', '2025-07-11 18:04:01'),
(128, 'App\\Models\\Employer\\register', 34, 'merchant-api-token', 'b8b590e9e0e99c9b814f2e1abdecbc6cf0d887a858d9481c066429e34afcee27', '[\"*\"]', '2025-07-11 17:58:59', NULL, '2025-07-11 17:58:39', '2025-07-11 17:58:59'),
(129, 'App\\Models\\Employer\\register', 33, 'merchant-api-token', '8416ffc797a44e4fc08f50dec64ddf1e640b35a55fd13c2b000004e0b66e4ea8', '[\"*\"]', '2025-07-11 17:59:53', NULL, '2025-07-11 17:59:36', '2025-07-11 17:59:53'),
(131, 'App\\Models\\Employer\\register', 34, 'merchant-api-token', 'cf9fa6d38b85315482102307aabad428bddf744f2edbba389e7505b61a82dc83', '[\"*\"]', '2025-07-11 18:07:39', NULL, '2025-07-11 18:07:38', '2025-07-11 18:07:39'),
(132, 'App\\Models\\Employer\\register', 34, 'merchant-api-token', '08070cb644a296d917f361c2be9fc9d5549d4e64b1511305aeb33de86ba7e30a', '[\"*\"]', '2025-07-11 18:08:39', NULL, '2025-07-11 18:08:38', '2025-07-11 18:08:39'),
(134, 'App\\Models\\Employer\\register', 33, 'merchant-api-token', 'b56b26c4b3c4b1619cc733fb4a408b9bc1aac93502d8ee5d30f09146f433dd1b', '[\"*\"]', NULL, NULL, '2025-07-11 18:10:19', '2025-07-11 18:10:19'),
(135, 'App\\Models\\Employer\\register', 33, 'merchant-api-token', '75fed2fcda4e88f27335be49fdf5bc87375e3a0e6737fd73292ac4b9b80be397', '[\"*\"]', '2025-07-11 18:10:54', NULL, '2025-07-11 18:10:53', '2025-07-11 18:10:54'),
(136, 'App\\Models\\Employer\\register', 33, 'merchant-api-token', 'e17ef1de01578a8117688e12ad3aaf2f22619d8dc57cef33a570b1e0f1293612', '[\"*\"]', '2025-07-11 18:11:59', NULL, '2025-07-11 18:11:58', '2025-07-11 18:11:59'),
(137, 'App\\Models\\Employer\\register', 34, 'merchant-api-token', '6d79fbd09321acccb09f104bdc291b4eea7bfc40b8b29acc820b5aae26711609', '[\"*\"]', '2025-07-11 18:59:52', NULL, '2025-07-11 18:17:20', '2025-07-11 18:59:52'),
(138, 'App\\Models\\Employer\\register', 33, 'merchant-api-token', '9b1bbc7a3c711ea263220064b9d6ecadd6d34de9302bb16aeff37ec0ce358717', '[\"*\"]', NULL, NULL, '2025-07-11 19:00:40', '2025-07-11 19:00:40'),
(139, 'App\\Models\\Employer\\register', 34, 'merchant-api-token', '8edecea56f9f367ca896f6275fc5e32732aa1d30d2a15d2a9b546f4ee6dcd56e', '[\"*\"]', NULL, NULL, '2025-07-11 19:01:08', '2025-07-11 19:01:08'),
(140, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '0b3e50bf1795c3d705e276adbd017b9f003ce7ec1dc8f552a0adb891ac15f9a1', '[\"*\"]', NULL, NULL, '2025-07-11 19:01:54', '2025-07-11 19:01:54'),
(141, 'App\\Models\\Employer\\register', 34, 'merchant-api-token', '74502ead660a3ebaf1ec0835670f5a561f3975c155422102c1889e38629efc02', '[\"*\"]', '2025-07-11 19:06:48', NULL, '2025-07-11 19:06:47', '2025-07-11 19:06:48'),
(142, 'App\\Models\\Employer\\register', 33, 'merchant-api-token', 'd86ba653cb687476eae13c730892d263f48e50744331b4d4514aac79f0bd8c68', '[\"*\"]', '2025-07-11 19:07:13', NULL, '2025-07-11 19:07:12', '2025-07-11 19:07:13'),
(143, 'App\\Models\\Employer\\register', 34, 'merchant-api-token', '6c2bf1e7c0a328e2b5584417c9bd03856a3ce59c1da1ceae6b9f95323a54006f', '[\"*\"]', '2025-07-11 19:13:57', NULL, '2025-07-11 19:13:57', '2025-07-11 19:13:57'),
(146, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '88b707f1715ccfa4d3f1e5cf6df4746c151f7eadb07f3cf09f5d8280264bb59f', '[\"*\"]', NULL, NULL, '2025-07-11 20:14:51', '2025-07-11 20:14:51'),
(148, 'App\\Models\\Employer\\register', 33, 'merchant-api-token', '07627f328379980aa04e8f0ad3bb91769c37b7336258f229c3d9f3980c8b1e83', '[\"*\"]', NULL, NULL, '2025-07-11 20:18:19', '2025-07-11 20:18:19'),
(149, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'a0cf60d47a0483b36d4787f972156ec7790c331c9a0ffdd0a5627409c8bff314', '[\"*\"]', '2025-07-11 20:27:51', NULL, '2025-07-11 20:26:55', '2025-07-11 20:27:51'),
(151, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '27874b3d43dffa8e4a095b2c74df4059c2feeda78af045ece1b10e721c53d9f8', '[\"*\"]', NULL, NULL, '2025-07-11 20:30:00', '2025-07-11 20:30:00'),
(152, 'App\\Models\\Employee\\Register', 22, 'merchant-api-token', '31d0eaee4a033d787250817e859468b05cf637daf7698cdc1ffc72d139f29a3d', '[\"*\"]', NULL, NULL, '2025-07-11 20:38:21', '2025-07-11 20:38:21'),
(153, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'd3b190c3d49b70cd2f95e987413ff465c3611fc336d5917db9c3307c70b3ac8c', '[\"*\"]', '2025-07-11 20:39:30', NULL, '2025-07-11 20:39:29', '2025-07-11 20:39:30'),
(154, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'aca19a424b99b7e229cf10c95611b8c59cba06dd9eb9d1fbed99a175b3f4992b', '[\"*\"]', '2025-07-11 20:39:50', NULL, '2025-07-11 20:39:49', '2025-07-11 20:39:50'),
(155, 'App\\Models\\Employee\\Register', 34, 'merchant-api-token', '719129260a4c61ff0cb44734b2feb27bf21f44c0f8561819d8491e8606c530ff', '[\"*\"]', NULL, NULL, '2025-07-12 14:36:22', '2025-07-12 14:36:22'),
(156, 'App\\Models\\Employee\\Register', 34, 'merchant-api-token', 'c110f5daa7f8e6ac6f96246510203e4325d4b6fa85b8de3fe38bc6ad75f989a1', '[\"*\"]', NULL, NULL, '2025-07-12 14:37:16', '2025-07-12 14:37:16'),
(157, 'App\\Models\\Employee\\Register', 34, 'merchant-api-token', '015a8e686ee8771a5e3e9fa02ed43d109a4961f6b99dba143321895372d05b4f', '[\"*\"]', NULL, NULL, '2025-07-12 14:37:58', '2025-07-12 14:37:58'),
(159, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '54837cf730d5c0c38781944164ee1e51f6aba6b519a8398b106cf1f0d4ae8cf5', '[\"*\"]', NULL, NULL, '2025-07-12 14:49:57', '2025-07-12 14:49:57'),
(160, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '7fe6afc5b10451ecc0c2f7a159d650fc438eea9f3708f82c3e74613fd4595eea', '[\"*\"]', '2025-07-12 14:50:23', NULL, '2025-07-12 14:49:57', '2025-07-12 14:50:23'),
(161, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'f2090b067998d72bdfc943fc2aefab0df2d1dbc21bd81f7c0956712bb0b48b4c', '[\"*\"]', NULL, NULL, '2025-07-12 14:49:57', '2025-07-12 14:49:57'),
(162, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'ae1b2c74ed59aabd4277c9a604b2f948e6097b774efbb4cab4b5f73d96edeea1', '[\"*\"]', NULL, NULL, '2025-07-12 14:49:57', '2025-07-12 14:49:57'),
(163, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'a6e8b7131a6f91f1f26547d771b081f8432b692475c2fb3af86b143a7c3fa0c5', '[\"*\"]', NULL, NULL, '2025-07-12 14:49:57', '2025-07-12 14:49:57'),
(164, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '0a78779fae567e27f5d3c76fb0aefb301ef2ad03574374b9fd0f1d2c01824677', '[\"*\"]', NULL, NULL, '2025-07-12 14:49:57', '2025-07-12 14:49:57'),
(165, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '912a66ede4358884c7bad9797ac5302af24b1cd990305cfe500db7ed823afdcd', '[\"*\"]', NULL, NULL, '2025-07-12 14:49:57', '2025-07-12 14:49:57'),
(190, 'App\\Models\\Employee\\Register', 35, 'merchant-api-token', '8cc7b1eb8c0c5709250e66720c29217f40a10bf66c4b85488ef7d6273c907799', '[\"*\"]', NULL, NULL, '2025-07-12 14:55:50', '2025-07-12 14:55:50'),
(167, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'cc1bc562903737bc0affe0e63a2ca93f5ecc4b4faec2f6eadf7a4b1fac8913e0', '[\"*\"]', NULL, NULL, '2025-07-12 14:49:58', '2025-07-12 14:49:58'),
(168, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'd5453e08fc65895560d3c0b0acd1c794847ff0dbbe8b1063862f154c75421f69', '[\"*\"]', NULL, NULL, '2025-07-12 14:49:57', '2025-07-12 14:49:57'),
(169, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '5bd0be0619473fed36ce4100dc2081e70f0cf6202e510e29c5351f1f228c7578', '[\"*\"]', NULL, NULL, '2025-07-12 14:49:58', '2025-07-12 14:49:58'),
(170, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'b665ca69510033861954353de272bcc74bcb28e638845ca23f6c09c4679766b9', '[\"*\"]', NULL, NULL, '2025-07-12 14:49:58', '2025-07-12 14:49:58'),
(171, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '01e159b08f4a91fd973118fa0877a046c24a00a62deab423875fe1c66440b785', '[\"*\"]', NULL, NULL, '2025-07-12 14:49:58', '2025-07-12 14:49:58'),
(172, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'b551f89a55539ec2200a97151522980a69294b08e4f92bb9054609ce51bfae78', '[\"*\"]', NULL, NULL, '2025-07-12 14:49:58', '2025-07-12 14:49:58'),
(173, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '3b5d0ca3c1c29bc496ade635475001bbc247d5f57b05fce8a5957b21da6cbcf1', '[\"*\"]', NULL, NULL, '2025-07-12 14:49:58', '2025-07-12 14:49:58'),
(174, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '4b7f9797811403e1649b52f5fdf1cc7a96b8ec3d084d85f6e67c22731dc8edd3', '[\"*\"]', NULL, NULL, '2025-07-12 14:49:58', '2025-07-12 14:49:58'),
(175, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '686971e63bcb8d95d4b56cd983d3972440918a7989a6bde48cbef989a963e836', '[\"*\"]', NULL, NULL, '2025-07-12 14:49:58', '2025-07-12 14:49:58'),
(176, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'd3e5696afee4350be6825a1e1d9b4cc455851c9b1b8c2e1369c0179015642120', '[\"*\"]', NULL, NULL, '2025-07-12 14:49:58', '2025-07-12 14:49:58'),
(177, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '1625036ed49dc1b91d8f6909ee15990a11b1d35c0ed3d2ff7e0da5e92b205cbd', '[\"*\"]', NULL, NULL, '2025-07-12 14:49:58', '2025-07-12 14:49:58'),
(178, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'fddf09c4565c10711c11faee4d22458da2670b068cbc3e3e0313cb443bebc69a', '[\"*\"]', NULL, NULL, '2025-07-12 14:50:22', '2025-07-12 14:50:22'),
(179, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '903232ed5d73ef9744e97ce1bf97351e9a1e1079bbda345371176b1c864c9d0a', '[\"*\"]', NULL, NULL, '2025-07-12 14:50:22', '2025-07-12 14:50:22'),
(180, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '10a61907ef2475cb695c474dc15a1cd645cf52efdffffb800dbd6c76a004053b', '[\"*\"]', NULL, NULL, '2025-07-12 14:50:22', '2025-07-12 14:50:22'),
(181, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '803662457a561504f1e8af4319f50957bc8ed0ff68b183f09674be673b4af9c1', '[\"*\"]', NULL, NULL, '2025-07-12 14:50:22', '2025-07-12 14:50:22'),
(182, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '7cac879b3d64aa5469eb190735fde2e9dfbaf90300dee432b8dd468e3ce7f1c7', '[\"*\"]', NULL, NULL, '2025-07-12 14:50:22', '2025-07-12 14:50:22'),
(189, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'd18467457c95b2377d84ccd36c793716d6dd498307906bcc5ffaaf1f5798e61a', '[\"*\"]', NULL, NULL, '2025-07-12 14:50:57', '2025-07-12 14:50:57'),
(184, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'a97cee1dc2eba17b57eb6fae73201824b0877b2d84ed02a5c62f5dca51e9f0b2', '[\"*\"]', NULL, NULL, '2025-07-12 14:50:22', '2025-07-12 14:50:22'),
(185, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '26af642e4ff562f8200f251b451d0651967c29b052613da56372e09bc693d2ec', '[\"*\"]', NULL, NULL, '2025-07-12 14:50:23', '2025-07-12 14:50:23'),
(186, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '015466b34245e3ddb6999e37c235a57fb865e676b8ecf9fbe97a3ce2cb20ba5c', '[\"*\"]', NULL, NULL, '2025-07-12 14:50:22', '2025-07-12 14:50:22'),
(187, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'efc2c6d6ddec18a66e1517fb8f05c789d460a5748cd910f58c51a60f3d0847a2', '[\"*\"]', NULL, NULL, '2025-07-12 14:50:23', '2025-07-12 14:50:23'),
(188, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '70f0129728c730e881152e4d1bffe405602436d6d7fc22b4165f1dbc96e4df76', '[\"*\"]', NULL, NULL, '2025-07-12 14:50:23', '2025-07-12 14:50:23'),
(191, 'App\\Models\\Employee\\Register', 35, 'merchant-api-token', '139c3c2f959cae86d044f1d2354e060220efec167e7f9518c47d26b7eb5b382d', '[\"*\"]', NULL, NULL, '2025-07-12 15:12:09', '2025-07-12 15:12:09'),
(192, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'fabd91018203ddd69fc7cafd56129c153d8365e471c3660c1ce273b7306c6e90', '[\"*\"]', NULL, NULL, '2025-07-12 16:14:59', '2025-07-12 16:14:59'),
(193, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '1df2389408824b23f5cac177d3c023621a5058f67ab989c6515b1308765555d3', '[\"*\"]', NULL, NULL, '2025-07-12 16:15:32', '2025-07-12 16:15:32'),
(194, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'f95010a45fe1eb96f8a0cacbcdedf3c9854dcc9dd42d58bbb474c1f445b1de72', '[\"*\"]', NULL, NULL, '2025-07-12 16:19:41', '2025-07-12 16:19:41'),
(195, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'da2ed9990ca236c6e7c38de021140f697f451285d7952ea3fb4a7da9c44d7c99', '[\"*\"]', NULL, NULL, '2025-07-12 16:21:09', '2025-07-12 16:21:09'),
(196, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '89801872efd44466040129857da49bfc5b66a45b66a09ae34e47d11f253f2c54', '[\"*\"]', NULL, NULL, '2025-07-12 16:24:13', '2025-07-12 16:24:13'),
(199, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '33559e9ff5680538824c0e44375968f5bd0b167040de6aad018ffeeac07fa4b0', '[\"*\"]', NULL, NULL, '2025-07-12 16:30:53', '2025-07-12 16:30:53'),
(207, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '84e1e19dddf44bd19befe4b7e98de94a2f7f55bf24908b17a31c4f84a7f00d74', '[\"*\"]', NULL, NULL, '2025-07-12 17:19:31', '2025-07-12 17:19:31'),
(209, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'c518ef1fb60bd2a2ccc12e0e64c9f5ddba020b753ce138b9cf537bd00e40276f', '[\"*\"]', '2025-07-12 17:39:24', NULL, '2025-07-12 17:27:42', '2025-07-12 17:39:24'),
(210, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '3426571d5f1d11b52f1ffc7a8daae788621a32a3c548c24b70e6106f5eff045b', '[\"*\"]', '2025-07-12 17:40:00', NULL, '2025-07-12 17:39:59', '2025-07-12 17:40:00'),
(211, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'b503e3b46271294ab9fe0b6dc702a6b58aea5a1151b92f3eb0242c4eda1f63e0', '[\"*\"]', '2025-07-12 17:41:10', NULL, '2025-07-12 17:41:09', '2025-07-12 17:41:10'),
(213, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '8e3fba54df28b7cbe295fd8d31ca550644f6960ea1e7dbc08dd1e0392f4af8e3', '[\"*\"]', '2025-07-12 17:47:08', NULL, '2025-07-12 17:44:12', '2025-07-12 17:47:08'),
(217, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '5e74029da915fa786debbc458354c9be9591571d3ccfd42658ee0dbd36300597', '[\"*\"]', NULL, NULL, '2025-07-12 17:53:16', '2025-07-12 17:53:16'),
(219, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'a5003d14ddc8dfd2d6d7bc59b70515235e771c95701d014368a7129fafd1a456', '[\"*\"]', NULL, NULL, '2025-07-12 18:05:07', '2025-07-12 18:05:07'),
(220, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '9c48b3a9399e4411c95b91613a0f95fb838199bd19f281beb45cb85ee64786ef', '[\"*\"]', NULL, NULL, '2025-07-12 18:07:15', '2025-07-12 18:07:15'),
(221, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '0c0501a5ecd4a4a86b15846765f0e1b9ceb6d4c7d31e0f72bc110f9933dae9b1', '[\"*\"]', '2025-07-12 18:10:33', NULL, '2025-07-12 18:07:19', '2025-07-12 18:10:33'),
(225, 'App\\Models\\Employer\\register', 33, 'merchant-api-token', '9337c5d2483deeedc0e4a737ebd9098ee8225d423cff3331ea606738d7bd65ab', '[\"*\"]', '2025-07-12 18:16:58', NULL, '2025-07-12 18:16:57', '2025-07-12 18:16:58'),
(229, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', 'f623f34e1f240a899add3e978708cd629ebe32cbf009d5a7201a6b9328781089', '[\"*\"]', '2025-07-12 19:32:59', NULL, '2025-07-12 19:32:58', '2025-07-12 19:32:59'),
(227, 'App\\Models\\Employee\\Register', 35, 'merchant-api-token', '7ed7c42d9f71adc6dc7a10af098b0d1708f0e29aa3fde7da61fab128a00a71e5', '[\"*\"]', NULL, NULL, '2025-07-12 18:19:44', '2025-07-12 18:19:44'),
(228, 'App\\Models\\Employee\\Register', 35, 'merchant-api-token', '68a24075567402a10d9fa9d22756c8eb0a14f2f8158983a24331c029fd374219', '[\"*\"]', NULL, NULL, '2025-07-12 18:48:28', '2025-07-12 18:48:28'),
(231, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '3c1f7071948595c576435e924d603cf2645f3dceaedac5bd89b9dec94da33411', '[\"*\"]', '2025-07-13 13:09:01', NULL, '2025-07-13 13:09:00', '2025-07-13 13:09:01'),
(232, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '1f8f5fab76bd9df61ee0284e533e99dbba0274769372a445fbc540b541e421e5', '[\"*\"]', '2025-07-13 13:09:50', NULL, '2025-07-13 13:09:48', '2025-07-13 13:09:50'),
(234, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '5855e7ab79796c269809411b61115f7a7485589b8e582d36dbe2d5c8184bbea4', '[\"*\"]', '2025-07-13 13:13:12', NULL, '2025-07-13 13:13:10', '2025-07-13 13:13:12'),
(235, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '93b6e4d801043963dae2cb055ed53b3f66f8aa5e6dcc0fb65aac4964952eb44e', '[\"*\"]', '2025-07-13 13:43:22', NULL, '2025-07-13 13:35:44', '2025-07-13 13:43:22'),
(236, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '7da1f4cfb5ffecf9bb33eae7335e1f56064eaac848d63ac09e41126c4122cd9a', '[\"*\"]', NULL, NULL, '2025-07-13 13:51:10', '2025-07-13 13:51:10'),
(237, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '0dbc2fe83f1d9bb7cf383e3bd7c17173f564aaca0e78044175245c459f0c9dce', '[\"*\"]', NULL, NULL, '2025-07-13 13:51:14', '2025-07-13 13:51:14'),
(238, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '34656ed84398aa30f38b0b2357bcf6245325cd901169bafcff3513e3c9e49f88', '[\"*\"]', NULL, NULL, '2025-07-13 13:51:25', '2025-07-13 13:51:25'),
(239, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'a03950ff1bb52169472f3eabd0ad65ddba7e23462ec2d9c3b42ebfcaaf92d148', '[\"*\"]', NULL, NULL, '2025-07-13 13:51:28', '2025-07-13 13:51:28'),
(240, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '8f9f55a00b1db95344788827084d3d840cadd1c72bf0cc9c9cb60dfef16d10f5', '[\"*\"]', NULL, NULL, '2025-07-13 13:51:30', '2025-07-13 13:51:30'),
(241, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'df0b800f57fb7c69b076b6034233c6c9d562dbe39f634e48c98013d93465438d', '[\"*\"]', NULL, NULL, '2025-07-13 13:51:32', '2025-07-13 13:51:32'),
(242, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'b723697bb27819d5a11c673159e7f11663ed4d7eb1886977eba39487cfc02ff1', '[\"*\"]', NULL, NULL, '2025-07-13 13:51:36', '2025-07-13 13:51:36'),
(243, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'ed25083c0de1ba871f20c67f142b358d3871f1b36dbea8ebf7d22793f5944d3a', '[\"*\"]', NULL, NULL, '2025-07-13 13:51:46', '2025-07-13 13:51:46'),
(244, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'b896f70df2b118301fb1ed9550682b84077c4f2d11c96833cf81634a121a0cd7', '[\"*\"]', NULL, NULL, '2025-07-13 13:51:49', '2025-07-13 13:51:49'),
(245, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'eda0df8085c0795f0911d5bbe25a90585fab2f9b17e09508cf79d775c744180e', '[\"*\"]', NULL, NULL, '2025-07-13 13:51:49', '2025-07-13 13:51:49'),
(246, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'aa13a271b1b45bf827a1b43a9153a9dd5380daff1aa38ca1f0ccc0608780bc24', '[\"*\"]', NULL, NULL, '2025-07-13 13:51:50', '2025-07-13 13:51:50'),
(247, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'f407a4546719b0efbe0c954ba0c9a671246df786e0807372e3f12caaf92cf10a', '[\"*\"]', NULL, NULL, '2025-07-13 14:22:56', '2025-07-13 14:22:56'),
(248, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'bbfef41801a221d264507c21cda4723642c406c7aef52ec21795bdb070803a45', '[\"*\"]', NULL, NULL, '2025-07-13 14:23:02', '2025-07-13 14:23:02'),
(249, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '9cd965c654c1f8607183a7851451f11f5426a7e71af759e327f86e8ca0ed916d', '[\"*\"]', NULL, NULL, '2025-07-13 14:23:07', '2025-07-13 14:23:07'),
(250, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'c6c6d015233e1ffc58ce948459b9ace93c24a273366feef4a8264c3428a55171', '[\"*\"]', NULL, NULL, '2025-07-13 14:23:08', '2025-07-13 14:23:08'),
(251, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '363508156bad0bbd1ddd261797f5b99e6b793591aea510582ad509cac3ce38b7', '[\"*\"]', NULL, NULL, '2025-07-13 14:23:08', '2025-07-13 14:23:08'),
(252, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '9d49141da57fbb5015696ba9ab0b9178dc39a1ee8c2731fd5321619965f0c72c', '[\"*\"]', NULL, NULL, '2025-07-13 14:23:10', '2025-07-13 14:23:10'),
(253, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'c98f030d4bee5cc8eba510426da606e18e423dae108c577751739f29d61c02bd', '[\"*\"]', NULL, NULL, '2025-07-13 14:23:15', '2025-07-13 14:23:15'),
(254, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'e0024f4ef5395945ee051977502868895b78013233ad09d4c2a9e5935d2a386e', '[\"*\"]', NULL, NULL, '2025-07-13 14:23:21', '2025-07-13 14:23:21'),
(255, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '9814f1ff80f03e0bb1b7556527ce4fe17422904d42f65cc20804e89653e2a353', '[\"*\"]', NULL, NULL, '2025-07-13 14:23:22', '2025-07-13 14:23:22'),
(256, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '7a0924b22145ca1621ef356c89cb195178cc1276b6aeca5ee1ee03cf11794307', '[\"*\"]', NULL, NULL, '2025-07-13 14:23:28', '2025-07-13 14:23:28'),
(257, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'ae822be54da49574dbbf10f8b60a6c354cc609be16de23197fd489a6ba4af618', '[\"*\"]', NULL, NULL, '2025-07-13 14:23:29', '2025-07-13 14:23:29'),
(258, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '36f571cb9aa95f5b268dc1c295f6843437209ab1b36dce9e133d46f397262309', '[\"*\"]', NULL, NULL, '2025-07-13 14:23:29', '2025-07-13 14:23:29'),
(259, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '362246f316cff1705dc73e3c4849c937fc21f6549879af86322d017a4e6a6924', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:19', '2025-07-13 14:24:19'),
(260, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '31b7d212f9fb4c9878da9ce969062c6f697c0998840b1918186d508f5f0b1593', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:22', '2025-07-13 14:24:22'),
(261, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'd1fde3dedcee40a3ef3bfe72410cf129a8379e9ae1d7c80f6a02f58751c81fb4', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:26', '2025-07-13 14:24:26'),
(262, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'e1ed37d236f605780621ad74ff370d38febe0f3ddcec3b897974368fab05508d', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:28', '2025-07-13 14:24:28'),
(263, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'bf01c040c3b8673493c0419910171ce2b59d45a3d7629adb95a1a7f5d9650da7', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:29', '2025-07-13 14:24:29'),
(264, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'f87161e04c369d82f39640ff1366fbe1597696b646b4fc656ac2225d4a7f46f1', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:30', '2025-07-13 14:24:30'),
(265, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '83f7f5e8b87650e4c3fe37a9f590ea4a29b0be8a87e1c2c30a203401c85b5ca3', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:30', '2025-07-13 14:24:30'),
(266, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '8afdb8d97b5edfed87670ea54f496eed1a9aaf336b74d97cca4fceb851d038b3', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:31', '2025-07-13 14:24:31'),
(267, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '04c0ec2ef63c62574e5bc4a9b62045015657d2626c19597b85cea635331bb197', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:31', '2025-07-13 14:24:31'),
(268, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'af82501965688744e1474bad967cfe9d27718873e7bbddce76da1de38ecb853c', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:32', '2025-07-13 14:24:32'),
(269, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '315a495a1e767514733fe8b7bac5b01b80ffb7d707e477488cc9790b44dab076', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:33', '2025-07-13 14:24:33'),
(270, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'ea1c11390176726fb1176f745d357689dbb4d40e53d8b9a7a5ee61218ad41933', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:33', '2025-07-13 14:24:33'),
(271, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'efaacbbe56ca50fedf34d7377b33ce39f60a0e075a25c5bb7a7fe3ac93d6d422', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:34', '2025-07-13 14:24:34'),
(272, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'a0d2ee725c5b586144ba402f82b35522f0000af242569537ded69b9ca16773e5', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:43', '2025-07-13 14:24:43'),
(273, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '5919bab3f003599e7fb710128aec3b2c3fea0256d191a3838daab3782d47935a', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:43', '2025-07-13 14:24:43'),
(274, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'a6f97a606a953b002737a4424bbecd2654489363dd62859d0aca925cfad390f4', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:43', '2025-07-13 14:24:43'),
(275, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'd0ca33e1b73af4e42f1eced73c41e12f8abb5068f183d873c6f3a21e708d37fe', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:43', '2025-07-13 14:24:43'),
(276, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '58bd773344e931ff1f78ee1724fc3bf41ef57ffa1260d6155c17e93449cd6fdd', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:44', '2025-07-13 14:24:44'),
(277, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'd63be8ca6334ab379c2ea6fcb8af1556ff156cc232cf49017cef940f6f6626fd', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:44', '2025-07-13 14:24:44'),
(278, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '42727ea81cd2d81e083c08efa4d6e6ee4cde77ca9692c57225b36a9f02670b5b', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:44', '2025-07-13 14:24:44'),
(279, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '1fadeb47c50c3b820e5a249ee193fddcb7af10aa609944083959236e6acb388c', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:44', '2025-07-13 14:24:44'),
(280, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '54f6eb9c6048079d7ab0c6191339cb0f7524da95c2a7bb3e7ba24dd5f6e7663f', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:45', '2025-07-13 14:24:45'),
(281, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '665f8ee10854cf7435949290bfbe4805e81a6f65810ceda5b56cbcc972bf7873', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:45', '2025-07-13 14:24:45'),
(282, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '540f1a2379ace2cf8959bb72a93c6438d01dbc34b54c51d131a4f524b7a5d122', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:45', '2025-07-13 14:24:45'),
(283, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'c3a7316183a3dff5b4aa6ba58937870b295b80d50b38cbc31311c6a2d1095492', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:46', '2025-07-13 14:24:46'),
(284, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '04f06c60a17ece545624c8dafdd1bba66398bd69ba2c2bf4a8058bf70876e44a', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:46', '2025-07-13 14:24:46'),
(285, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'e38c11fab85cba6bb5e973b77c412791eb45783a1456a3b3b7b5736f265002f3', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:46', '2025-07-13 14:24:46'),
(286, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'b9f56d590d9b0b612eabd1e4b4d30021e217278769c37f075ff431fc19735f3e', '[\"*\"]', NULL, NULL, '2025-07-13 14:24:47', '2025-07-13 14:24:47'),
(287, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'd334cfe2ac14dc968aaae2252f9278c1370410fd32fb5ec848be245d9b787b54', '[\"*\"]', '2025-07-13 14:25:03', NULL, '2025-07-13 14:24:48', '2025-07-13 14:25:03'),
(288, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '08b1f2002c170e4eb3eb1ae28174c15075f041ca22a012711436e7af6e03cbd8', '[\"*\"]', '2025-07-13 14:25:45', NULL, '2025-07-13 14:25:44', '2025-07-13 14:25:45'),
(289, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '4e23ff0fff4290e859d5b7f5a7dc7543aff66cc1b782cb2b1fbdb89d657fa724', '[\"*\"]', NULL, NULL, '2025-07-13 14:29:43', '2025-07-13 14:29:43'),
(290, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '515325ec21abb24cf326460acfbf6cab8d747ddc4d09f62bd2b67d48c31b798f', '[\"*\"]', NULL, NULL, '2025-07-13 14:29:46', '2025-07-13 14:29:46'),
(291, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '149db98013c7b37fb56158c189ce05939088abe4c8e51ef98250ab741c7322b9', '[\"*\"]', NULL, NULL, '2025-07-13 14:29:47', '2025-07-13 14:29:47'),
(292, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '9889a426b4fcd41f9453cc283c30558a337edde5bca6e42450dd6d964bc219ff', '[\"*\"]', NULL, NULL, '2025-07-13 14:29:48', '2025-07-13 14:29:48'),
(293, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '1be6aec403c48af54565c961fb485930bdf4857f6765a1ec5470a495439048bc', '[\"*\"]', NULL, NULL, '2025-07-13 14:29:49', '2025-07-13 14:29:49'),
(294, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'bfcf0baa8cfa1d65a0d0e20bc2cbf29a9b98a032cc54e16963a9667020a1557b', '[\"*\"]', NULL, NULL, '2025-07-13 14:29:49', '2025-07-13 14:29:49'),
(295, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '7491aec7f28bb9332cc8cd15bc5a8fe2663ca551f3879467d004fe2b7d53a616', '[\"*\"]', NULL, NULL, '2025-07-13 14:29:50', '2025-07-13 14:29:50'),
(296, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '50e70b1a89a182b75c37d4574855ec46e8ec5550e956dbd73f3a2e6d354fa505', '[\"*\"]', NULL, NULL, '2025-07-13 14:29:51', '2025-07-13 14:29:51'),
(297, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'd3106c9e0b059b20fd09d151108ab71853470c6b1ef52567079915958ea010fa', '[\"*\"]', NULL, NULL, '2025-07-13 14:29:52', '2025-07-13 14:29:52'),
(298, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '1d4de1fddb429c89ec9fbbedf902ac23be46704e017fd2d7df80c82a28f1fbb9', '[\"*\"]', NULL, NULL, '2025-07-13 14:29:55', '2025-07-13 14:29:55'),
(299, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '07844bb0ad78cb6df0539ea0d7b523e2dec132241b7c85ded1a021a0e31b8ba1', '[\"*\"]', NULL, NULL, '2025-07-13 14:29:56', '2025-07-13 14:29:56'),
(300, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '46860a9217055a059d33354e5e90b7836b0a4e9647e07ebf313845ab8d2486c4', '[\"*\"]', NULL, NULL, '2025-07-13 14:29:56', '2025-07-13 14:29:56'),
(301, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'fe471e22ea8ecbd2fbd44264d8ac9f56c14f07c68aa7adb9d7be852f7061f995', '[\"*\"]', '2025-07-13 18:43:57', NULL, '2025-07-13 14:29:57', '2025-07-13 18:43:57'),
(307, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '3d4587f37b40cf5e8e601792b291bfe7ec01c2bea0c6b5988499b8102b0a9477', '[\"*\"]', '2025-07-14 13:09:14', NULL, '2025-07-14 10:06:16', '2025-07-14 13:09:14'),
(308, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '2a3ff85abf19126c85f8e9f3979d4d81d2af8139950e408e3c9a9ba0e685cc70', '[\"*\"]', '2025-07-14 11:53:32', NULL, '2025-07-14 11:53:31', '2025-07-14 11:53:32'),
(309, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '283408f4022302bbe1f4aa7720c6957004ef51f0e7923fbfdda251c9b3f4921d', '[\"*\"]', '2025-07-14 11:53:32', NULL, '2025-07-14 11:53:31', '2025-07-14 11:53:32'),
(310, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '0b176440a06eaf1c4643e279cba5ba69e7f3c81c0b0b9808243bd65b87cc7d14', '[\"*\"]', '2025-07-14 11:54:01', NULL, '2025-07-14 11:54:00', '2025-07-14 11:54:01'),
(311, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'cb1a6a783be52cfbd357932ea51f488e77bfab5ed2d8a75c33f48fb75ecda174', '[\"*\"]', '2025-07-14 11:54:26', NULL, '2025-07-14 11:54:26', '2025-07-14 11:54:26'),
(312, 'App\\Models\\Employee\\Register', 32, 'merchant-api-token', '2e2522228d7339d73540a8e33438e0d77f2b6c9a181c2526c4e224aef8a21f2b', '[\"*\"]', NULL, NULL, '2025-07-14 12:25:23', '2025-07-14 12:25:23'),
(313, 'App\\Models\\Employee\\Register', 32, 'merchant-api-token', 'a268fad3d29cb21ea111e29eb9e064589784778ef75200de428a0a9631a545d1', '[\"*\"]', '2025-07-14 12:26:34', NULL, '2025-07-14 12:26:02', '2025-07-14 12:26:34'),
(314, 'App\\Models\\Employee\\Register', 32, 'merchant-api-token', '26e5d59b175735e34a054e5cffa8ebd4c8ba915cec9815070043dae8db667561', '[\"*\"]', NULL, NULL, '2025-07-14 12:26:43', '2025-07-14 12:26:43'),
(315, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', 'a4f1a00a913e9059b875338d7af1c7e85df44270f2cc8a4b6b2d10608d753baf', '[\"*\"]', '2025-07-14 16:32:36', NULL, '2025-07-14 12:27:11', '2025-07-14 16:32:36'),
(316, 'App\\Models\\Employee\\Register', 35, 'merchant-api-token', '330c04df5f419a9989daae90f4738f03585024c3695cbc024d420f94cb5fbb2d', '[\"*\"]', NULL, NULL, '2025-07-14 12:30:58', '2025-07-14 12:30:58');
INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(317, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '81250b73c9dc05ceaf3209d70ecefed97cd4968e8ea5122eb54af6e755c04a16', '[\"*\"]', '2025-07-14 12:41:30', NULL, '2025-07-14 12:31:25', '2025-07-14 12:41:30'),
(318, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '9794a06f1310e87d4a2dae780c36ea41e0a11d9e18558a915d4662f8a0b7b33c', '[\"*\"]', '2025-07-14 12:52:29', NULL, '2025-07-14 12:52:28', '2025-07-14 12:52:29'),
(328, 'App\\Models\\Employee\\Register', 36, 'merchant-api-token', '8093ebf8ea4610fdff6d59c758f723cbb8567aaa3b59d146d1d3bf01141d6651', '[\"*\"]', NULL, NULL, '2025-07-14 13:17:03', '2025-07-14 13:17:03'),
(321, 'App\\Models\\Employee\\Register', 35, 'merchant-api-token', '05189ef1c30e0c403bc295b8983d9cf2fd986c696eb5b72558489bd98f83eb50', '[\"*\"]', NULL, NULL, '2025-07-14 13:04:27', '2025-07-14 13:04:27'),
(322, 'App\\Models\\Employee\\Register', 35, 'merchant-api-token', 'fdf2b800da1575445b9535c7e250107c826e079921da38ab1e44595c71b4fb4a', '[\"*\"]', NULL, NULL, '2025-07-14 13:04:34', '2025-07-14 13:04:34'),
(323, 'App\\Models\\Employee\\Register', 35, 'merchant-api-token', '08bb4626db89dbd03bd64575ae4431289750794f1782a47f9425be92f7d46d1b', '[\"*\"]', NULL, NULL, '2025-07-14 13:05:49', '2025-07-14 13:05:49'),
(324, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '53fbfc1d63e5aafbae5c50c3d32206ebbb11eea21554efceaf95e7a694385a3b', '[\"*\"]', '2025-07-14 20:17:41', NULL, '2025-07-14 13:09:34', '2025-07-14 20:17:41'),
(325, 'App\\Models\\Employee\\Register', 36, 'merchant-api-token', 'c1a17f5c4e5efd4788a8d372b610261c6176c119d27b4399e38d11ea8045d533', '[\"*\"]', NULL, NULL, '2025-07-14 13:16:10', '2025-07-14 13:16:10'),
(326, 'App\\Models\\Employee\\Register', 36, 'merchant-api-token', 'a57c353b5e5c708c45732746c3e95246f4e84637855eb8c5c8efaff228f08f94', '[\"*\"]', NULL, NULL, '2025-07-14 13:16:14', '2025-07-14 13:16:14'),
(327, 'App\\Models\\Employee\\Register', 36, 'merchant-api-token', '9f0e7f5a8e3eb7f0aab2b34eb34f9c1361aecdb8a0f167cc1f84e3c998480a75', '[\"*\"]', NULL, NULL, '2025-07-14 13:16:33', '2025-07-14 13:16:33'),
(329, 'App\\Models\\Employee\\Register', 16, 'merchant-api-token', '5a71c5db28ef616e8388907d0b0550b8909dd6c8b386d073493a4210c352bf6e', '[\"*\"]', NULL, NULL, '2025-07-14 13:17:07', '2025-07-14 13:17:07'),
(330, 'App\\Models\\Employee\\Register', 16, 'merchant-api-token', 'c385d3c2b0d699d89c9b8704bab935d4f797a4874de6db92383ca21bb8b0ddca', '[\"*\"]', NULL, NULL, '2025-07-14 13:17:32', '2025-07-14 13:17:32'),
(331, 'App\\Models\\Employee\\Register', 16, 'merchant-api-token', '4dd3ef79d6ef8ee368c224c918729422d792601316bab0139bdbb909a0bf2226', '[\"*\"]', NULL, NULL, '2025-07-14 13:21:12', '2025-07-14 13:21:12'),
(332, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'ca012143d2e9d1e4b96307dcb3a8d6e2aacd432520e62683b371e55760aab5e6', '[\"*\"]', '2025-07-14 13:21:57', NULL, '2025-07-14 13:21:56', '2025-07-14 13:21:57'),
(333, 'App\\Models\\Employee\\Register', 16, 'merchant-api-token', '8ec40ff520b1887e09e0bf6f0d9030680ed39fbb67733f421670dcb952ae132e', '[\"*\"]', NULL, NULL, '2025-07-14 13:25:30', '2025-07-14 13:25:30'),
(334, 'App\\Models\\Employee\\Register', 16, 'merchant-api-token', '061c1aba893ac8ba3292942487cce6938813d383428557c625ae5e583dbed860', '[\"*\"]', NULL, NULL, '2025-07-14 13:26:47', '2025-07-14 13:26:47'),
(335, 'App\\Models\\Employee\\Register', 32, 'merchant-api-token', '1ca092da160e30c50ddba97a88812da40b8c47f785c168938032888462ccd8ba', '[\"*\"]', NULL, NULL, '2025-07-14 13:27:21', '2025-07-14 13:27:21'),
(336, 'App\\Models\\Employee\\Register', 16, 'merchant-api-token', '10ead3d38f090ab69cf93b0612eec5e6525b1efd9e3fe3eb919555c022908307', '[\"*\"]', NULL, NULL, '2025-07-14 13:31:30', '2025-07-14 13:31:30'),
(337, 'App\\Models\\Employee\\Register', 36, 'merchant-api-token', '41bc89b0b9408572f798633504b8057fce8c74f14b3a1fb058a03616e788c8f5', '[\"*\"]', NULL, NULL, '2025-07-14 13:35:45', '2025-07-14 13:35:45'),
(338, 'App\\Models\\Employee\\Register', 36, 'merchant-api-token', '0aa5c6fc91a5187fd6f0032dfbc5f18ab7e8e8e283e5fb2833854973bcf06314', '[\"*\"]', NULL, NULL, '2025-07-14 13:37:06', '2025-07-14 13:37:06'),
(339, 'App\\Models\\Employee\\Register', 36, 'merchant-api-token', '7347eed049604a32b446cc25d470799bed7ccf5983ecc0a054142b78f6cb4ac4', '[\"*\"]', NULL, NULL, '2025-07-14 13:38:03', '2025-07-14 13:38:03'),
(340, 'App\\Models\\Employee\\Register', 16, 'merchant-api-token', '00b1e837711dcf61d66d765059e188c016c284c66e5f39a607051068acc56bb3', '[\"*\"]', NULL, NULL, '2025-07-14 13:50:53', '2025-07-14 13:50:53'),
(341, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '1bc404206dacf426041ea258cb355f67365ec6f248c9c8c12fe7e03d0798752c', '[\"*\"]', '2025-07-14 14:09:06', NULL, '2025-07-14 14:09:05', '2025-07-14 14:09:06'),
(342, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '55afbcd13c77941acaea8cd115903de6a321ee668d7bb52392235f519cce0457', '[\"*\"]', '2025-07-14 14:15:49', NULL, '2025-07-14 14:09:05', '2025-07-14 14:15:49'),
(343, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'fcc1d8e4a722fabc73b147c09be3ee803f01ee4d23288602c443faaf661166c7', '[\"*\"]', '2025-07-14 14:37:49', NULL, '2025-07-14 14:37:48', '2025-07-14 14:37:49'),
(344, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'b7363ebd111a524c2a60299befc38b79ac9792fe6e5db005208d4a97f96a627a', '[\"*\"]', '2025-07-14 14:44:06', NULL, '2025-07-14 14:38:08', '2025-07-14 14:44:06'),
(345, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '4b9826057a60d1f46fa4ed00df5a4b7f7c48537e5fc0577e127928c7c634e9ce', '[\"*\"]', '2025-07-14 14:52:20', NULL, '2025-07-14 14:45:30', '2025-07-14 14:52:20'),
(346, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '621cd82c3627b4077523d8357413551baf69f44da02b01cb92eb50c51f9901c6', '[\"*\"]', '2025-07-14 14:52:57', NULL, '2025-07-14 14:52:56', '2025-07-14 14:52:57'),
(348, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '7d66facc093e452d2e71bdfe98ddc3681c99a76fb76a72c7e8a439fed4713946', '[\"*\"]', '2025-07-14 15:13:40', NULL, '2025-07-14 15:13:40', '2025-07-14 15:13:40'),
(349, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'ee1851088d7fcf54d858acb3bc2cbf1b6be794c382b6a7d67047979c5f3a036b', '[\"*\"]', '2025-07-14 15:13:41', NULL, '2025-07-14 15:13:40', '2025-07-14 15:13:41'),
(350, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '3e1ee9eadec87fbb36f308989352e3cd4c86d655c0a90652bf7cf22dd1291134', '[\"*\"]', '2025-07-14 15:14:03', NULL, '2025-07-14 15:14:03', '2025-07-14 15:14:03'),
(351, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'bda1a7b1317271a51a147d3da4eceec61ba03bcd694f7d70290095e898ee9dd3', '[\"*\"]', '2025-07-14 15:14:23', NULL, '2025-07-14 15:14:23', '2025-07-14 15:14:23'),
(352, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '32606aac26d22900b899102a1b129a278f3ad6f0e237b91031e87dc9f71808d5', '[\"*\"]', '2025-07-14 15:23:05', NULL, '2025-07-14 15:23:04', '2025-07-14 15:23:05'),
(353, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '21e8d3f64fc731e4a57d34141137fff8ae1495cdb140185e1b5c025a7b07a218', '[\"*\"]', '2025-07-14 15:26:35', NULL, '2025-07-14 15:23:31', '2025-07-14 15:26:35'),
(354, 'App\\Models\\Employee\\Register', 36, 'merchant-api-token', 'c7a7b96fe044a0eccfd0af54966e6e04fcefca10888b3aea02cae85f2763c8b6', '[\"*\"]', NULL, NULL, '2025-07-14 15:27:10', '2025-07-14 15:27:10'),
(355, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '7d82a99225219c3bf5e6f54496882b54080c9f499d028294962cb1ee49b1e0c0', '[\"*\"]', '2025-07-14 16:51:40', NULL, '2025-07-14 15:48:26', '2025-07-14 16:51:40'),
(356, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '41a382c0507a4488eda70a67c2806b53b129f7cc0af5ca427e8aed12a21273d3', '[\"*\"]', NULL, NULL, '2025-07-14 16:32:21', '2025-07-14 16:32:21'),
(357, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '550e80c80a68a0d67c0e2176dc31ba9340c544c1703513765f0577a14dcafd53', '[\"*\"]', '2025-07-14 17:12:48', NULL, '2025-07-14 17:12:48', '2025-07-14 17:12:48'),
(358, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'c102529294c1e97c67bd0f1a24d5d64a2747f15cd64445e8bae4856a3a4733fc', '[\"*\"]', '2025-07-14 17:31:59', NULL, '2025-07-14 17:13:36', '2025-07-14 17:31:59'),
(359, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '9b3a3a4ba9c55a7c1e870d150bb6044f82d7124159a332a2c3a4bae95a128b35', '[\"*\"]', '2025-07-14 18:01:53', NULL, '2025-07-14 17:32:44', '2025-07-14 18:01:53'),
(360, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '4a28e6075bb04b34d0f44139672414f800cbd06ec1ecd81a2d62a4fe37a61923', '[\"*\"]', '2025-07-14 20:13:05', NULL, '2025-07-14 18:15:15', '2025-07-14 20:13:05'),
(361, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '0d877bdf4b0c02b002dbe5559c113a67905dc74849b1a30fc0530ee949700c39', '[\"*\"]', '2025-07-15 00:51:39', NULL, '2025-07-14 20:18:38', '2025-07-15 00:51:39'),
(362, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '770412d73697246fe59094a14ded97a88d8467728ccd8eb896ea888d407d9cf1', '[\"*\"]', '2025-07-14 20:45:18', NULL, '2025-07-14 20:35:01', '2025-07-14 20:45:18'),
(363, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '6380b013f79f0f34f4977b065bab86bb228104b78b06f413b901c40df4ecb16f', '[\"*\"]', '2025-07-15 21:07:17', NULL, '2025-07-15 00:52:10', '2025-07-15 21:07:17'),
(364, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '843ff94d34c1d53bf35d1dff7dc4f37591ac8d435d8e8b09f52381a556429f4f', '[\"*\"]', '2025-07-15 12:07:15', NULL, '2025-07-15 12:07:14', '2025-07-15 12:07:15'),
(365, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '8e70358c1e5ebedc2e57663dca63126e87f41f66fb044b6a2b35806480723798', '[\"*\"]', '2025-07-15 12:08:08', NULL, '2025-07-15 12:08:07', '2025-07-15 12:08:08'),
(366, 'App\\Models\\Employee\\Register', 38, 'merchant-api-token', '03d02c2fb9b5c248ff816acb9f02b154ae25898e80bff80bd195fc97e0f32691', '[\"*\"]', '2025-07-15 12:24:51', NULL, '2025-07-15 12:24:18', '2025-07-15 12:24:51'),
(367, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '0c01b9bc242818371ffcf5f362b259e1d67f1f7b995ea02688393b2c6a9d713e', '[\"*\"]', '2025-07-15 13:31:41', NULL, '2025-07-15 13:30:30', '2025-07-15 13:31:41'),
(368, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'dab98241ca969545591498e6241a7f69e7846cc2aa1fb4b079bd404768b4294f', '[\"*\"]', '2025-07-15 13:32:07', NULL, '2025-07-15 13:32:06', '2025-07-15 13:32:07'),
(369, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '1352308f98a458b1c2f6df15220b6242c28358ef41b09983905243e6f65003fa', '[\"*\"]', '2025-07-15 13:32:31', NULL, '2025-07-15 13:32:31', '2025-07-15 13:32:31'),
(370, 'App\\Models\\Employer\\register', 33, 'merchant-api-token', '3073ab8e59d66444abd220bd08c6b141b0ed4168d668b093ac0e81d62ea96793', '[\"*\"]', '2025-07-15 13:52:35', NULL, '2025-07-15 13:33:08', '2025-07-15 13:52:35'),
(371, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'd52a9ce0364fd8bf22409fe51247b37ded50b8278acb59091faab773b1960de7', '[\"*\"]', '2025-07-15 14:37:47', NULL, '2025-07-15 14:04:23', '2025-07-15 14:37:47'),
(372, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '13b5377608ba4e40355bc69caaccb3795762b5b2dda4d0873f7cc018cfc95680', '[\"*\"]', '2025-07-15 14:38:20', NULL, '2025-07-15 14:38:19', '2025-07-15 14:38:20'),
(373, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'c447656d8457c888876d65542e525411ab6a1a2c440f8eaa5e0433da5e25e9fe', '[\"*\"]', '2025-07-15 14:41:36', NULL, '2025-07-15 14:38:51', '2025-07-15 14:41:36'),
(374, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '14d09e2e29113d6bf46309acd89bce64924bb1fe0b21d77f5c36f6ece67f22f9', '[\"*\"]', '2025-07-15 14:44:53', NULL, '2025-07-15 14:44:53', '2025-07-15 14:44:53'),
(375, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '02461d2a3b6c0bfad8a2e06aedc241e7c91f85c004f182715ffb033388860f9e', '[\"*\"]', '2025-07-15 14:45:50', NULL, '2025-07-15 14:45:22', '2025-07-15 14:45:50'),
(376, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '6360ef5206d8358d7b65d47bf50c31268c5cbd5f225dab354289a9c94db74ced', '[\"*\"]', '2025-07-15 14:51:55', NULL, '2025-07-15 14:51:54', '2025-07-15 14:51:55'),
(377, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'bf74f68b67d6b8ee30066f5b68fd32949798298d6b1a5644cd4da35beeb31ac4', '[\"*\"]', '2025-07-15 14:54:15', NULL, '2025-07-15 14:54:15', '2025-07-15 14:54:15'),
(378, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '25a7674cc84aabf2f9e5da3ef871fffa36b9c30a1700534c20e0e79e152d2f13', '[\"*\"]', '2025-07-15 14:56:42', NULL, '2025-07-15 14:56:41', '2025-07-15 14:56:42'),
(379, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '0d99dcaae6ab79cf61a848458e388ed0bac65766b9585cc5090aaa22aabf1248', '[\"*\"]', '2025-07-15 15:22:58', NULL, '2025-07-15 14:57:59', '2025-07-15 15:22:58'),
(380, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'be206140736ccca2a64228932b6f02d20ef28febf39b59f0b064cee66ab47eeb', '[\"*\"]', '2025-07-15 15:49:20', NULL, '2025-07-15 15:26:29', '2025-07-15 15:49:20'),
(381, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '6993629b9244d1ba8575cdfeff8b4539d1b1d371680ba7069826638dd7b64e99', '[\"*\"]', '2025-07-15 15:56:55', NULL, '2025-07-15 15:56:54', '2025-07-15 15:56:55'),
(382, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '4afed60fb63c87ccec4d6d8f2412fb1ac1a773ebb76f86984a21a9a67d12a276', '[\"*\"]', '2025-07-15 16:01:58', NULL, '2025-07-15 16:01:58', '2025-07-15 16:01:58'),
(383, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '4a534ca8932f9d7faedcff21d35d6c76ee3151ad1563dc0147df8aaeb9aa74b8', '[\"*\"]', '2025-07-15 16:33:49', NULL, '2025-07-15 16:33:49', '2025-07-15 16:33:49'),
(384, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '11fb8f5660e5c1f6d75bda03d25879f924a54a964fd006cdc583b855ba0261ae', '[\"*\"]', '2025-07-15 16:39:18', NULL, '2025-07-15 16:39:17', '2025-07-15 16:39:18'),
(385, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '1a7867a0fbfb239d0cdd74c10226e5c3b9da591d9069f36962f7bb386034c98c', '[\"*\"]', '2025-07-15 16:45:42', NULL, '2025-07-15 16:45:42', '2025-07-15 16:45:42'),
(386, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '28ea3ea6c00423c9c8c532b837b8dc1c9763f6b65b134893ae070521845f1836', '[\"*\"]', '2025-07-15 17:01:46', NULL, '2025-07-15 16:56:13', '2025-07-15 17:01:46'),
(387, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'e094bc0e2dd71a059c2316354739a2aa6ff5d8088feb0457d62c0cb892ba93a2', '[\"*\"]', '2025-07-15 17:49:11', NULL, '2025-07-15 17:17:05', '2025-07-15 17:49:11'),
(388, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '1a44571e639a8aa384d311e1b58ae8b658be31ad08dbf34b9ba079d3d106a974', '[\"*\"]', '2025-07-15 18:29:25', NULL, '2025-07-15 17:49:47', '2025-07-15 18:29:25'),
(389, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'e118593927af3dfba34036e27c30106ca09cfc0635146e8954140fb607a12cfa', '[\"*\"]', '2025-07-15 19:41:16', NULL, '2025-07-15 18:36:27', '2025-07-15 19:41:16'),
(390, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '2d8ab2c3bf6f7fcfc25aeb56685d86635126456bb2f26138a6f98c7d968a0af6', '[\"*\"]', '2025-07-15 20:09:40', NULL, '2025-07-15 19:41:38', '2025-07-15 20:09:40'),
(391, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '52114faf5aa4e8d603976624e894fe1e970d3dfd4bbc761e407c2fe883539cf0', '[\"*\"]', '2025-07-15 20:21:37', NULL, '2025-07-15 20:10:51', '2025-07-15 20:21:37'),
(392, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '82143b6c2fdf455bdd927c0843c4a0d70e791396896f6f294ebdc604dce13ae5', '[\"*\"]', '2025-07-15 20:31:16', NULL, '2025-07-15 20:31:15', '2025-07-15 20:31:16'),
(393, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'd56330e824c451718fd9cb93f9416b803aea0ab9d6df89263840e1d08fb5ba2b', '[\"*\"]', '2025-07-15 20:37:05', NULL, '2025-07-15 20:31:16', '2025-07-15 20:37:05'),
(394, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '2df92bdf39625b07ea2d78020b0557d1e37b0ce4e9718afcfd95a1e26dbedcfd', '[\"*\"]', '2025-07-15 20:53:46', NULL, '2025-07-15 20:37:49', '2025-07-15 20:53:46'),
(396, 'App\\Models\\Employer\\register', 19, 'merchant-api-token', '9600b857a50c217aab3cd60f3bd6727f27e4b17f9bdff8ff8549faee740a37ce', '[\"*\"]', '2025-07-15 23:58:58', NULL, '2025-07-15 21:13:32', '2025-07-15 23:58:58'),
(397, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '14e418d199db10b8008fe132b4d8c9dd34527c99214213a00b3cbf4255807a7a', '[\"*\"]', '2025-07-15 23:38:30', NULL, '2025-07-15 23:34:41', '2025-07-15 23:38:30'),
(398, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '8dce520475eae2b7b1a0dc841771972d0b204b9fa7222e10ebe110a2295105b0', '[\"*\"]', '2025-07-15 23:54:15', NULL, '2025-07-15 23:40:31', '2025-07-15 23:54:15'),
(399, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'a0a6193fb5beeadb74ba61cb59ee17e4c53be34d38b48c1dd2d5cb2572a1430e', '[\"*\"]', '2025-07-16 00:04:06', NULL, '2025-07-15 23:57:48', '2025-07-16 00:04:06'),
(400, 'App\\Models\\Employer\\register', 33, 'merchant-api-token', 'a0cd654878b67045b508815b40c5f14a0ec6aea6d19d6a1e9e5643b5dcb791fc', '[\"*\"]', '2025-07-16 00:05:39', NULL, '2025-07-16 00:00:05', '2025-07-16 00:05:39'),
(401, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '4f355d25dd5e020d2c33e1ee15c30f0e81c9554adbe255dc222a1baee86a9bc8', '[\"*\"]', '2025-07-16 00:07:27', NULL, '2025-07-16 00:06:12', '2025-07-16 00:07:27'),
(402, 'App\\Models\\Employer\\register', 33, 'merchant-api-token', 'b16dfd7d8489b400874bfd2204e9ac43cff0725bdebcac17f3c7859c22878781', '[\"*\"]', '2025-07-16 00:08:21', NULL, '2025-07-16 00:07:53', '2025-07-16 00:08:21'),
(403, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', '5b99f350f9f0c27eadc05ac6bb16d3d640bb26116db71de9e2bf1ca7c635a19e', '[\"*\"]', '2025-07-16 00:32:19', NULL, '2025-07-16 00:08:37', '2025-07-16 00:32:19'),
(404, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '9af6ea880fbb193512c361fe57f5327f80175b7e8c61ea92df8c544ac6ca78ff', '[\"*\"]', '2025-07-16 00:32:37', NULL, '2025-07-16 00:32:35', '2025-07-16 00:32:37'),
(405, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'b71f586add954ae702a75c66821937436b5c9f06b49058a69ff65a3a3cd01054', '[\"*\"]', '2025-07-16 00:37:02', NULL, '2025-07-16 00:33:20', '2025-07-16 00:37:02'),
(407, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'b6dedfe159c4e18e4e49f34e2edf0c826342335481988db8274ed234361f706d', '[\"*\"]', '2025-07-16 00:52:55', NULL, '2025-07-16 00:50:00', '2025-07-16 00:52:55'),
(408, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'f82db228ce8a941f028d0c6f92b8614e31bfb31607d8ca7d46c8f22873a82ad1', '[\"*\"]', '2025-07-16 01:18:11', NULL, '2025-07-16 00:54:51', '2025-07-16 01:18:11'),
(409, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'd75bd7429c136d6ce04f49071a090fa3a5dd74a43a27bd12e2473a8e246f54a9', '[\"*\"]', '2025-07-16 01:28:27', NULL, '2025-07-16 01:19:02', '2025-07-16 01:28:27'),
(410, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'ec4865ec2b2ea074cbcb691517c101d0af118dc5d639e2642c7b6efabf784104', '[\"*\"]', '2025-07-16 01:29:01', NULL, '2025-07-16 01:28:40', '2025-07-16 01:29:01'),
(411, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '51d3e9d1f685e6074b5d89c159de05c9991b8de7dc20b65d66a1836d58f764eb', '[\"*\"]', '2025-07-16 01:54:08', NULL, '2025-07-16 01:29:15', '2025-07-16 01:54:08'),
(412, 'App\\Models\\Employer\\register', 33, 'merchant-api-token', '88f88810eb7f73e12c0e9f7f07fd69ef7878f6556a11b2ec9f5e67bda8cd1bc0', '[\"*\"]', '2025-07-16 01:56:04', NULL, '2025-07-16 01:54:36', '2025-07-16 01:56:04'),
(413, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '14ce1af6ef77454384df65f02c2a513c0879cad455d7290292b6e0c329c6bf96', '[\"*\"]', '2025-07-16 12:40:06', NULL, '2025-07-16 11:49:29', '2025-07-16 12:40:06'),
(414, 'App\\Models\\Employer\\register', 25, 'merchant-api-token', 'adba68e8cd614d8807049b05c1482d6073e1ac03e6b838e208443ac456d39787', '[\"*\"]', '2025-07-16 12:44:02', NULL, '2025-07-16 12:43:41', '2025-07-16 12:44:02'),
(415, 'App\\Models\\Employer\\register', 33, 'merchant-api-token', 'e34d79aed83811ab987643fc29327aa3e2a16fada1a380056999dee48410f8da', '[\"*\"]', '2025-07-16 12:47:22', NULL, '2025-07-16 12:44:39', '2025-07-16 12:47:22'),
(416, 'App\\Models\\Employer\\register', 33, 'merchant-api-token', '7b870e49c3d3de40d23cd3bd67045fe6879e8fb9a45b6c5f34250f9752e8341b', '[\"*\"]', '2025-07-16 12:58:05', NULL, '2025-07-16 12:54:07', '2025-07-16 12:58:05'),
(417, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '8e64302d7e1d4306ddab4ee59c1a0fb177bdf427652095b03e82f8cd8e4e2a7e', '[\"*\"]', NULL, NULL, '2025-07-30 01:58:30', '2025-07-30 01:58:30'),
(418, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '13ac2471e902981390e93faf1a5ffed70dfa9c85ac56ce207d819fb2df6735b7', '[\"*\"]', NULL, NULL, '2025-07-30 01:58:57', '2025-07-30 01:58:57'),
(419, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '627b8400fc0f669f5afa6a5e132276d3dc1174164159ece5bf2110e731b83da6', '[\"*\"]', '2025-08-04 08:25:03', NULL, '2025-07-30 01:59:56', '2025-08-04 08:25:03'),
(420, 'App\\Models\\Employer\\register', 33, 'merchant-api-token', 'ed2589e1af39c6bc465e9f42866ab2e378cf2c4e9338fb752e858a2682f985c5', '[\"*\"]', NULL, NULL, '2025-07-30 02:24:35', '2025-07-30 02:24:35'),
(421, 'App\\Models\\Employer\\register', 33, 'merchant-api-token', '443b63a7b1ac47752a581b0039cef75d0e401c32e1d6957ecf135dcdaa52a616', '[\"*\"]', NULL, NULL, '2025-07-30 02:24:46', '2025-07-30 02:24:46'),
(422, 'App\\Models\\Employer\\register', 33, 'merchant-api-token', 'e3af914d12eb08da4989cab4c2d764a45d307d7151d432145e597c9c2b923f2d', '[\"*\"]', NULL, NULL, '2025-07-30 02:25:07', '2025-07-30 02:25:07'),
(423, 'App\\Models\\Employer\\register', 33, 'merchant-api-token', 'eac983f9f974928ff582b676a07a1a213f2ab7d363eea7e985cf0742fcd1215e', '[\"*\"]', NULL, NULL, '2025-07-30 02:25:08', '2025-07-30 02:25:08'),
(424, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '1db0e1616e58f479197d1a1697637f5bc34c384aa2c3acf03f599362663fbe15', '[\"*\"]', NULL, NULL, '2025-07-30 02:37:04', '2025-07-30 02:37:04'),
(425, 'App\\Models\\Employee\\Register', 39, 'merchant-api-token', '444faa5f8bc02d5a683bcff96a85db2b9792384a569424a970241d00eb1f97f2', '[\"*\"]', NULL, NULL, '2025-07-31 04:08:48', '2025-07-31 04:08:48'),
(426, 'App\\Models\\Employee\\Register', 41, 'merchant-api-token', 'e26c25bf95e8a6439851874f2a3dfb263f3a1b1b26813d0acea007ff341b22f3', '[\"*\"]', NULL, NULL, '2025-07-31 04:27:05', '2025-07-31 04:27:05'),
(427, 'App\\Models\\Employee\\Register', 42, 'merchant-api-token', 'ddc622ce1f59ca5faa2f6e95d79ee50220d78cd1f7e8e47058a25bbf43e4c278', '[\"*\"]', '2025-08-05 02:23:40', NULL, '2025-07-31 04:41:38', '2025-08-05 02:23:40'),
(428, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'b0788abea31c7323912c399a1591ae2975c7706dac46300c7a4c76574b3c6d63', '[\"*\"]', '2025-08-04 01:10:59', NULL, '2025-08-04 01:09:38', '2025-08-04 01:10:59'),
(429, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '39bf4cbe529b0f562b1c8f65d70251f44166080eb932b4cde11c8c9bf2704a10', '[\"*\"]', '2025-08-04 02:33:21', NULL, '2025-08-04 01:11:34', '2025-08-04 02:33:21'),
(430, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', 'c59566b37230a5be61741063f1133c0ec02a4d01bda941973a3d0270db374415', '[\"*\"]', NULL, NULL, '2025-08-04 01:13:12', '2025-08-04 01:13:12'),
(431, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '96b9ae91ad095952f492e607397062c6a647a096e395937728ea62c7b08b9f48', '[\"*\"]', NULL, NULL, '2025-08-05 02:06:03', '2025-08-05 02:06:03'),
(432, 'App\\Models\\Employer\\register', 29, 'merchant-api-token', '477388ab2529062f42cc5543154d20a972df7af5e65f249edf05763030d8c613', '[\"*\"]', NULL, NULL, '2025-08-05 02:07:18', '2025-08-05 02:07:18'),
(433, 'App\\Models\\Employer\\register', 33, 'merchant-api-token', 'bc56b75e37a2bf8d243962fe6675c67dd50cdf0aa403c208fbc8910ba290dcee', '[\"*\"]', '2025-08-05 03:00:17', NULL, '2025-08-05 02:55:44', '2025-08-05 03:00:17'),
(434, 'App\\Models\\Employee\\Register', 43, 'merchant-api-token', 'b78329d2ae5dddaffa3e15ae567a852c84e646de6dec14fb8f1bb49c6fd95030', '[\"*\"]', '2025-08-08 04:48:50', NULL, '2025-08-08 04:48:33', '2025-08-08 04:48:50');

-- --------------------------------------------------------

--
-- Table structure for table `reactions`
--

DROP TABLE IF EXISTS `reactions`;
CREATE TABLE IF NOT EXISTS `reactions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `announcement_id` int NOT NULL,
  `employee_id` int NOT NULL,
  `reaction_type` enum('like','love','laugh','sad') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('qWEcpALcxfpqVdha9DFWgRUWdY55itBhyv77MopC', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVGVLM0VPcWNFNnpYQWNuaGp1SkNDcXZ4VUlKdU9VY1NMeGdkb3REMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9lbXBsb3llZS9lbXBsb3llZS1sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1755149929);

-- --------------------------------------------------------

--
-- Table structure for table `terminate`
--

DROP TABLE IF EXISTS `terminate`;
CREATE TABLE IF NOT EXISTS `terminate` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `termination_reason` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `termination_details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `termination_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `terminate_employee_id_foreign` (`employee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terminate`
--

INSERT INTO `terminate` (`id`, `employee_id`, `termination_reason`, `termination_details`, `termination_date`, `created_at`, `updated_at`) VALUES
(1, 'Emp-184950', 'Project completed', 'Employee contract ended after project delivery', '2025-06-24', '2025-06-24 12:31:18', '2025-06-24 12:31:18'),
(2, 'Emp-801425', 'perfomance', 'understanding issues', '2025-06-24', '2025-06-24 13:12:04', '2025-06-24 13:12:04'),
(3, 'Emp-801425', 'perfomance', 'understanding issues', '2025-06-24', '2025-06-24 13:15:43', '2025-06-24 13:15:43'),
(4, 'Emp-801425', 'perfomance', 'understanding issues', '2025-06-24', '2025-06-24 13:16:57', '2025-06-24 13:16:57'),
(5, 'Emp-801425', 'perfomance', 'understanding issues', '2025-06-24', '2025-07-03 16:07:51', '2025-07-03 16:07:51'),
(6, 'Emp-801425', 'perfomance', 'understanding issues', '2025-06-24', '2025-07-12 18:46:11', '2025-07-12 18:46:11'),
(7, 'Emp-801425', 'perfomance', 'understanding issues', '2025-06-24', '2025-07-14 11:46:45', '2025-07-14 11:46:45'),
(8, 'Emp-801425', 'perfomance', 'understanding issues', '2025-06-24', '2025-07-14 11:47:54', '2025-07-14 11:47:54'),
(9, 'Emp-801425', 'perfomance', 'understanding issues', '2025-06-24', '2025-07-14 18:17:20', '2025-07-14 18:17:20'),
(10, 'Emp-801425', 'understanding issues', 'understanding issues', '2025-07-13', '2025-07-14 20:40:01', '2025-07-14 20:40:01'),
(11, 'Emp-801425', 'understanding issues', 'understanding issues', '2025-07-13', '2025-07-14 20:40:24', '2025-07-14 20:40:24'),
(12, 'Emp-801425', 'understanding issues', 'understanding issues', '2025-06-24', '2025-07-14 20:41:54', '2025-07-14 20:41:54'),
(13, 'Emp-801425', 'understanding issues', 'understanding issues', '2025-06-09', '2025-07-14 20:42:16', '2025-07-14 20:42:16'),
(14, 'Emp-801425', 'understanding issues', 'understanding issues', '2025-06-09', '2025-07-14 20:42:36', '2025-07-14 20:42:36'),
(15, 'Emp-801425', 'understanding issues', 'understanding issues', '2025-07-08', '2025-07-14 20:43:40', '2025-07-14 20:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
