-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 28, 2025 at 12:59 PM
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
-- Database: `winngoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_manual`
--

DROP TABLE IF EXISTS `enquiry_manual`;
CREATE TABLE IF NOT EXISTS `enquiry_manual` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `area` varchar(100) NOT NULL,
  `expectations` text,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `enquiry_manual`
--

INSERT INTO `enquiry_manual` (`id`, `name`, `mobile_no`, `area`, `expectations`, `status`, `created_at`, `updated_at`) VALUES
(46, 'SOWMIYA M', '9965702483', 'chennai', 'never', 1, '2025-07-28 12:49:14', '2025-07-28 12:49:14'),
(44, 'yugan', '6374946589', 'chennai', 'hi', 0, '2025-07-28 06:22:19', '2025-07-28 11:41:52'),
(45, 'SOWMIYA M', '9965702481', '623519', 'test', 0, '2025-07-28 11:29:52', '2025-07-28 11:41:23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
