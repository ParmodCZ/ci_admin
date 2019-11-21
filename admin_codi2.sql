-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2019 at 04:00 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_codi2`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `commericial_rent_additional_information_details`
--

CREATE TABLE `commericial_rent_additional_information_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `previous_occupancy` varchar(255) NOT NULL,
  `locality_type` varchar(255) NOT NULL,
  `who_will_show_the_house` varchar(255) NOT NULL,
  `secondary_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commericial_rent_amenities_details`
--

CREATE TABLE `commericial_rent_amenities_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `power_backup` varchar(255) NOT NULL,
  `lift` varchar(255) NOT NULL,
  `parking` varchar(255) NOT NULL,
  `available_slots` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commericial_rent_locality_details`
--

CREATE TABLE `commericial_rent_locality_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL,
  `street_area` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `locality_lat` varchar(255) NOT NULL,
  `locality_long` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commericial_rent_photo_details`
--

CREATE TABLE `commericial_rent_photo_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `upload_images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commericial_rent_property_details`
--

CREATE TABLE `commericial_rent_property_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `floor_info` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `age_of_property` varchar(255) NOT NULL,
  `furnishing` varchar(255) NOT NULL,
  `other_features` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commericial_rent_rental_details`
--

CREATE TABLE `commericial_rent_rental_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `expected_rent` varchar(255) NOT NULL,
  `maintenance` varchar(255) NOT NULL,
  `deposit` varchar(255) NOT NULL,
  `lease_duration` varchar(255) NOT NULL,
  `lockin_period` varchar(255) NOT NULL,
  `available_from` varchar(255) NOT NULL,
  `ideal_for` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commericial_sale_additional_information_details`
--

CREATE TABLE `commericial_sale_additional_information_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `previous_occupancy` varchar(255) NOT NULL,
  `locality_type` varchar(255) NOT NULL,
  `who_will_show_the_house` varchar(255) NOT NULL,
  `secondary_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commericial_sale_amenities_details`
--

CREATE TABLE `commericial_sale_amenities_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `power_backup` varchar(255) NOT NULL,
  `lift` varchar(255) NOT NULL,
  `parking` varchar(255) NOT NULL,
  `available_slots` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commericial_sale_location_details`
--

CREATE TABLE `commericial_sale_location_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL,
  `street_area` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commericial_sale_photo_details`
--

CREATE TABLE `commericial_sale_photo_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `upload_images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commericial_sale_properity_details`
--

CREATE TABLE `commericial_sale_properity_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `floor_info` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `age_of_property` varchar(255) NOT NULL,
  `furnishing` varchar(255) NOT NULL,
  `other_features` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commericial_sale_resale_details`
--

CREATE TABLE `commericial_sale_resale_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `expected_price` varchar(255) NOT NULL,
  `negotiable` varchar(255) NOT NULL,
  `ownership_type` varchar(255) NOT NULL,
  `available_from` varchar(355) NOT NULL,
  `ideal_for` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `last_login`
--

CREATE TABLE `last_login` (
  `id` bigint(20) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `sessionData` varchar(2048) NOT NULL,
  `machineIp` varchar(1024) NOT NULL,
  `userAgent` varchar(128) NOT NULL,
  `agentString` varchar(1024) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `createdDtm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `last_login`
--

INSERT INTO `last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES
(1, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 77.0.3865.120', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', 'Windows 7', '2019-11-14 22:51:14'),
(2, 9, '{\"role\":\"2\",\"roleText\":\"admin\",\"name\":\"pk\"}', '::1', 'Chrome 78.0.3904.97', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'Windows 7', '2019-11-14 00:00:00'),
(3, 9, '{\"role\":\"2\",\"roleText\":\"Manager\",\"name\":\"Parmod\"}', '::1', 'Chrome 77.0.3865.120', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', 'Windows 7', '2019-11-14 23:03:07'),
(4, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 77.0.3865.120', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', 'Windows 7', '2019-11-14 23:04:15'),
(5, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.97', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'Windows 7', '2019-11-16 00:26:07'),
(6, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.97', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'Windows 7', '2019-11-16 00:54:55'),
(7, 10, '{\"role\":\"3\",\"roleText\":\"Employee\",\"name\":\"Devesh Choudhry\"}', '::1', 'Chrome 78.0.3904.97', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'Windows 7', '2019-11-16 00:55:37'),
(8, 11, '{\"role\":\"2\",\"roleText\":\"Manager\",\"name\":\"Sunil Kumar\"}', '::1', 'Chrome 78.0.3904.97', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'Windows 7', '2019-11-16 00:56:41'),
(9, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.97', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'Windows 7', '2019-11-16 01:58:36'),
(10, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.97', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'Linux', '2019-11-19 17:57:23'),
(11, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.97', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'Linux', '2019-11-20 19:13:16'),
(12, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.97', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'Linux', '2019-11-21 10:17:04'),
(13, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.97', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'Linux', '2019-11-21 10:42:21'),
(14, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.97', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'Linux', '2019-11-21 18:06:13');

-- --------------------------------------------------------

--
-- Table structure for table `mzb_additional_property`
--

CREATE TABLE `mzb_additional_property` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `locality_type` varchar(50) NOT NULL,
  `who_will_show_the_house` varchar(50) NOT NULL,
  `previous_occupancy` varchar(50) NOT NULL,
  `secondry_number` varchar(50) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mzb_location_details`
--

CREATE TABLE `mzb_location_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `locality` varchar(50) NOT NULL,
  `landmark` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `long` varchar(50) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mzb_otp_verify`
--

CREATE TABLE `mzb_otp_verify` (
  `id` int(11) NOT NULL,
  `otp` int(6) DEFAULT NULL,
  `expiration_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mzb_otp_verify`
--

INSERT INTO `mzb_otp_verify` (`id`, `otp`, `expiration_time`, `email`, `mobile`) VALUES
(101068, 436146, '2019-11-03 07:04:46', NULL, NULL),
(101069, 271492, '2019-11-03 07:23:17', NULL, NULL),
(101070, 309902, '2019-11-03 07:24:05', NULL, NULL),
(101071, 476936, '2019-11-03 07:28:08', NULL, NULL),
(101072, 568789, '2019-11-03 07:35:00', NULL, NULL),
(101073, 154329, '2019-11-03 07:36:18', NULL, NULL),
(101074, 853144, '2019-11-03 09:17:24', NULL, NULL),
(101075, 986552, '2019-11-03 17:19:21', NULL, NULL),
(101076, 642991, '2019-11-03 20:41:54', NULL, NULL),
(101077, 568338, '2019-11-03 20:44:35', NULL, NULL),
(101078, 526864, '2019-11-03 20:56:51', NULL, NULL),
(101079, 139381, '2019-11-03 21:03:54', NULL, NULL),
(101080, 704143, '2019-11-03 21:06:56', NULL, NULL),
(101081, 821680, '2019-11-03 21:14:44', NULL, NULL),
(101082, 762883, '2019-11-03 21:18:52', NULL, NULL),
(101083, 357864, '2019-11-03 21:21:24', NULL, NULL),
(101084, 5283, '2019-11-03 21:24:36', NULL, NULL),
(101085, 7251, '2019-11-03 21:26:56', NULL, '9879798897'),
(101086, 6352, '2019-11-03 21:37:46', NULL, '5645465465'),
(101087, 8911, '2019-11-03 21:40:13', NULL, '6566656'),
(101088, 3687, '2019-11-03 21:49:48', NULL, '987987987'),
(101089, 1072, '2019-11-03 22:12:33', NULL, '987987987'),
(101090, 9257, '2019-11-04 08:56:53', NULL, 'XC'),
(101091, 2669, '2019-11-04 19:16:48', NULL, '9780979631'),
(101092, 921, '2019-11-04 19:19:34', NULL, NULL),
(101093, 2983, '2019-11-04 19:20:32', NULL, NULL),
(101094, 6429, '2019-11-04 19:20:45', NULL, NULL),
(101095, 5194, '2019-11-04 19:42:38', NULL, NULL),
(101096, 633, '2019-11-04 19:44:54', NULL, NULL),
(101097, 8033, '2019-11-04 19:46:46', NULL, NULL),
(101098, 2703, '2019-11-04 19:51:40', NULL, NULL),
(101099, 6019, '2019-11-06 19:10:52', NULL, '987654321'),
(101100, 4348, '2019-11-06 20:18:52', NULL, NULL),
(101101, 2776, '2019-11-06 21:09:28', NULL, NULL),
(101102, 8485, '2019-11-06 21:10:26', NULL, NULL),
(101103, 4441, '2019-11-06 21:10:49', NULL, NULL),
(101104, 8306, '2019-11-06 21:11:00', NULL, NULL),
(101105, 1260, '2019-11-06 21:18:38', NULL, NULL),
(101106, 4851, '2019-11-06 21:18:40', NULL, NULL),
(101107, 1823, '2019-11-06 21:18:43', NULL, NULL),
(101108, 6259, '2019-11-06 21:18:46', NULL, NULL),
(101109, 5830, '2019-11-06 21:18:51', NULL, NULL),
(101110, 7861, '2019-11-06 21:30:16', NULL, NULL),
(101111, 3332, '2019-11-06 21:33:16', NULL, NULL),
(101112, 395, '2019-11-06 21:33:31', NULL, NULL),
(101113, 4226, '2019-11-06 21:38:12', NULL, NULL),
(101114, 391, '2019-11-06 21:43:40', NULL, NULL),
(101115, 4648, '2019-11-06 21:51:00', NULL, NULL),
(101116, 7152, '2019-11-06 21:51:08', NULL, NULL),
(101117, 5170, '2019-11-06 21:53:50', NULL, NULL),
(101118, 16, '2019-11-06 21:53:58', NULL, NULL),
(101119, 5462, '2019-11-06 21:54:25', NULL, NULL),
(101120, 2733, '2019-11-06 21:54:28', NULL, NULL),
(101121, 3983, '2019-11-06 21:54:49', NULL, NULL),
(101122, 7868, '2019-11-06 22:08:08', NULL, NULL),
(101123, 5581, '2019-11-06 22:08:16', NULL, NULL),
(101124, 5287, '2019-11-06 22:08:32', NULL, NULL),
(101125, 3004, '2019-11-06 22:08:35', NULL, NULL),
(101126, 7619, '2019-11-06 22:08:46', NULL, NULL),
(101127, 2347, '2019-11-06 22:11:35', NULL, NULL),
(101128, 5735, '2019-11-06 22:11:43', NULL, NULL),
(101129, 5548, '2019-11-06 22:12:04', NULL, NULL),
(101130, 705, '2019-11-06 22:12:08', NULL, NULL),
(101131, 4607, '2019-11-06 22:12:22', NULL, NULL),
(101132, 5758, '2019-11-06 22:15:45', NULL, NULL),
(101133, 4932, '2019-11-07 20:06:28', NULL, '9876541230'),
(101134, 8432, '2019-11-07 20:11:11', NULL, '7987987987'),
(101135, 6598, '2019-11-07 20:38:14', NULL, '9631587455'),
(101136, 9023, '2019-11-07 20:40:09', NULL, '9632587414'),
(101137, 1010, '2019-11-07 20:40:21', NULL, '9632587416'),
(101138, 8545, '2019-11-07 20:40:42', NULL, '9632587414'),
(101139, 2417, '2019-11-07 20:41:07', NULL, '9632587418'),
(101140, 388, '2019-11-07 20:43:09', NULL, '9635587458'),
(101141, 9600, '2019-11-07 20:43:23', NULL, '9635587458'),
(101142, 2159, '2019-11-07 20:44:01', NULL, '9789789778'),
(101143, 5877, '2019-11-07 20:44:13', NULL, '9632587458'),
(101144, 9745, '2019-11-07 20:47:03', NULL, '9635887458'),
(101145, 2101, '2019-11-07 20:48:43', NULL, '9876543214'),
(101146, 3135, '2019-11-07 20:55:04', NULL, '9876543217'),
(101147, 2132, '2019-11-07 20:55:42', NULL, '9876543217'),
(101148, 3856, '2019-11-07 22:06:11', NULL, NULL),
(101149, 3777, '2019-11-08 15:32:17', NULL, NULL),
(101150, 9454, '2019-11-08 15:32:51', NULL, '9876543211'),
(101151, 4340, '2019-11-08 15:33:19', NULL, '9876543211'),
(101152, 2050, '2019-11-08 15:33:30', NULL, '9876543211'),
(101153, 2305, '2019-11-08 15:34:51', NULL, NULL),
(101154, 4657, '2019-11-08 15:35:25', NULL, NULL),
(101155, 3427, '2019-11-08 15:37:43', NULL, NULL),
(101156, 1828, '2019-11-08 15:38:26', NULL, NULL),
(101157, 5790, '2019-11-08 15:38:55', NULL, NULL),
(101158, 7062, '2019-11-08 15:39:28', NULL, NULL),
(101159, 5290, '2019-11-09 10:34:14', NULL, '9999999991'),
(101160, 568, '2019-11-09 10:36:26', NULL, NULL),
(101161, 9692, '2019-11-09 10:36:55', NULL, NULL),
(101162, 5911, '2019-11-09 10:37:15', NULL, NULL),
(101163, 4343, '2019-11-09 10:38:24', NULL, NULL),
(101164, 7598, '2019-11-09 10:38:43', NULL, NULL),
(101165, 3397, '2019-11-09 10:39:09', NULL, NULL),
(101166, 7593, '2019-11-09 15:26:27', NULL, '8623976978'),
(101167, 1819, '2019-11-09 15:26:49', NULL, '8623976978'),
(101168, 2943, '2019-11-09 15:26:54', NULL, '8623976978'),
(101169, 2024, '2019-11-09 15:27:21', NULL, '0862397697'),
(101170, 6943, '2019-11-09 15:30:01', NULL, '0862397697'),
(101171, 9820, '2019-11-09 15:34:37', NULL, '0862397697'),
(101172, 2716, '2019-11-09 15:36:20', NULL, NULL),
(101173, 2892, '2019-11-09 15:37:19', NULL, NULL),
(101174, 469, '2019-11-09 15:37:43', NULL, NULL),
(101175, 14, '2019-11-09 15:39:01', NULL, NULL),
(101176, 7732, '2019-11-09 15:39:11', NULL, NULL),
(101177, 5093, '2019-11-09 15:39:44', NULL, NULL),
(101178, 5613, '2019-11-09 21:28:36', NULL, '9876543211'),
(101179, 6001, '2019-11-09 21:29:20', NULL, '9876543211'),
(101180, 3453, '2019-11-09 21:30:07', NULL, '9876543211'),
(101181, 6432, '2019-11-09 21:30:44', NULL, '9876543211'),
(101182, 2276, '2019-11-09 21:35:22', NULL, '9876543211'),
(101183, 6156, '2019-11-09 21:38:21', NULL, '9876543211'),
(101184, 2003, '2019-11-09 21:39:22', NULL, '9876543211'),
(101185, 2100, '2019-11-09 21:46:40', NULL, '9876543211'),
(101186, 7776, '2019-11-10 18:03:43', NULL, '9876543211'),
(101187, 2891, '2019-11-10 18:05:58', NULL, NULL),
(101188, 7435, '2019-11-10 18:06:31', NULL, NULL),
(101189, 9471, '2019-11-10 18:21:49', NULL, NULL),
(101190, 1591, '2019-11-10 18:21:58', NULL, NULL),
(101191, 5239, '2019-11-10 19:12:58', NULL, NULL),
(101192, 1712, '2019-11-10 19:13:33', NULL, NULL),
(101193, 8427, '2019-11-10 19:13:49', NULL, NULL),
(101194, 6515, '2019-11-10 19:14:20', NULL, NULL),
(101195, 5404, '2019-11-10 19:15:06', NULL, NULL),
(101196, 4735, '2019-11-10 19:15:40', NULL, NULL),
(101197, 6153, '2019-11-11 15:07:41', NULL, NULL),
(101198, 3887, '2019-11-11 15:08:26', NULL, NULL),
(101199, 9422, '2019-11-11 15:08:54', NULL, NULL),
(101200, 1319, '2019-11-11 15:10:20', NULL, NULL),
(101201, 3283, '2019-11-11 15:10:27', NULL, NULL),
(101202, 9001, '2019-11-11 15:11:07', NULL, NULL),
(101203, 2787, '2019-11-11 15:21:30', NULL, '0862397697'),
(101204, 5234, '2019-11-11 15:22:59', NULL, '8623976978'),
(101205, 1860, '2019-11-11 19:20:22', NULL, '9876543211'),
(101206, 4323, '2019-11-11 20:52:20', NULL, NULL),
(101207, 1094, '2019-11-11 22:26:30', NULL, NULL),
(101208, 4702, '2019-11-11 22:26:36', NULL, NULL),
(101209, 5635, '2019-11-12 20:48:21', NULL, '9876543211'),
(101210, 3171, '2019-11-12 20:49:00', NULL, NULL),
(101211, 3140, '2019-11-13 17:38:10', NULL, '9876543211'),
(101212, 4482, '2019-11-13 17:38:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mzb_post_details`
--

CREATE TABLE `mzb_post_details` (
  `id` int(11) NOT NULL,
  `propertyid` varchar(20) NOT NULL,
  `userID` int(11) NOT NULL,
  `property_details` int(11) NOT NULL,
  `locality_details` int(11) NOT NULL DEFAULT 0,
  `rental_details` int(11) NOT NULL DEFAULT 0,
  `gallery_details` int(11) NOT NULL DEFAULT 0,
  `amenities_details` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mzb_post_details`
--

INSERT INTO `mzb_post_details` (`id`, `propertyid`, `userID`, `property_details`, `locality_details`, `rental_details`, `gallery_details`, `amenities_details`, `created_at`) VALUES
(1, 'RR374621901', 11, 1, 0, 0, 0, 0, '2019-11-11 20:37:40'),
(2, 'RR374621901', 11, 1, 1, 0, 0, 0, '2019-11-11 20:37:40'),
(3, 'RR374621901', 11, 1, 1, 1, 0, 0, '2019-11-11 20:37:40'),
(4, 'RR957033141', 11, 1, 0, 0, 0, 0, '2019-11-11 21:57:06'),
(5, 'RR957033141', 11, 1, 0, 0, 0, 0, '2019-11-11 21:58:03'),
(6, 'RR957033141', 11, 1, 1, 0, 0, 0, '2019-11-11 21:58:03'),
(7, 'RR957033141', 11, 1, 1, 1, 0, 0, '2019-11-11 21:58:03'),
(8, 'RR957033141', 11, 1, 0, 0, 0, 0, '2019-11-11 22:11:51'),
(9, 'RR957033141', 11, 1, 1, 0, 0, 0, '2019-11-11 22:11:51'),
(10, 'RR957033141', 11, 1, 1, 1, 0, 0, '2019-11-11 22:11:51'),
(11, 'RR957033141', 11, 1, 1, 1, 0, 1, '2019-11-11 22:11:51'),
(13, 'RR759512907', 11, 1, 0, 0, 0, 0, '2019-11-12 21:05:26'),
(14, 'RR759512907', 11, 1, 0, 0, 0, 0, '2019-11-12 21:07:46'),
(15, 'RR759512907', 11, 1, 0, 0, 0, 0, '2019-11-12 21:08:29'),
(16, 'RR759512907', 11, 1, 0, 0, 0, 0, '2019-11-12 21:14:22'),
(17, 'RR759512907', 11, 1, 0, 0, 0, 0, '2019-11-12 21:16:54'),
(18, 'RR759512907', 11, 1, 0, 0, 0, 0, '2019-11-12 21:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `mzb_property_amenities`
--

CREATE TABLE `mzb_property_amenities` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `power_backup` varchar(50) NOT NULL,
  `lift` varchar(50) NOT NULL,
  `parking` varchar(50) NOT NULL,
  `available_slots` varchar(50) NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mzb_property_details`
--

CREATE TABLE `mzb_property_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `property_type` varchar(50) NOT NULL,
  `floor_info` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `age_of_property` varchar(50) NOT NULL,
  `furnishing` varchar(50) NOT NULL,
  `is_posted` enum('0','1') NOT NULL,
  `is_active` enum('0','1') NOT NULL,
  `shortlist` enum('0','1') NOT NULL,
  `report_abuse` int(11) NOT NULL DEFAULT 0,
  `craeted_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mzb_property_photos`
--

CREATE TABLE `mzb_property_photos` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `photos` varchar(1000) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mzb_rental_details`
--

CREATE TABLE `mzb_rental_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `expected_rent` varchar(50) NOT NULL,
  `is_rent_negotiable` enum('0','1') NOT NULL,
  `maintenance_extra` enum('0','1') NOT NULL,
  `maintenance_rent` varchar(50) NOT NULL,
  `deposit` varchar(50) NOT NULL,
  `is_deposit_negotiable` enum('0','1') NOT NULL,
  `lease_duration` varchar(50) NOT NULL,
  `lockin_period` varchar(50) NOT NULL,
  `available_from` varchar(50) NOT NULL,
  `idial_for` varchar(50) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `property_type_table`
--

CREATE TABLE `property_type_table` (
  `id` int(11) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `tablename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_type_table`
--

INSERT INTO `property_type_table` (`id`, `property_type`, `tablename`) VALUES
(1, 'commericial_rent', '	commericial_rent_additional_information_details'),
(2, 'commericial_rent', 'commericial_rent_amenities_details'),
(3, 'commericial_rent', 'commericial_rent_locality_details'),
(4, 'commericial_rent', 'commericial_rent_photo_details'),
(5, 'commericial_rent', 'commericial_rent_property_details'),
(6, 'commericial_rent', 'commericial_rent_rental_details'),
(7, 'commericial_sale', '	commericial_sale_additional_information_details'),
(8, 'commericial_sale', 'commericial_sale_amenities_details'),
(9, 'commericial_sale', 'commericial_sale_location_details'),
(10, 'commericial_sale', 'commericial_sale_photo_details'),
(11, 'commericial_sale', 'commericial_sale_properity_details'),
(12, 'commericial_sale', 'commericial_sale_resale_details'),
(13, 'resident_flatmates', 'resident_flatmates_amenities_details'),
(14, 'resident_flatmates', 'resident_flatmates_gallery_details'),
(15, 'resident_flatmates', 'resident_flatmates_ locality_details'),
(16, 'resident_flatmates', 'resident_flatmates_ property_details'),
(17, 'resident_flatmates', 'resident_flatmates_rental_details'),
(18, 'resident_flatmates', 'resident_flatmates_ schedule_details');

-- --------------------------------------------------------

--
-- Table structure for table `reset_password`
--

CREATE TABLE `reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` bigint(20) NOT NULL DEFAULT 1,
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resident_flatmates_ amenities_details`
--

CREATE TABLE `resident_flatmates_ amenities_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `balcony` int(11) NOT NULL,
  `water_supply` varchar(255) NOT NULL,
  `gym` varchar(255) NOT NULL,
  `non_veg_allowed` varchar(255) NOT NULL,
  `gated_security` varchar(255) NOT NULL,
  `who_will_show_the_house` varchar(255) NOT NULL,
  `secondary_number` varchar(255) NOT NULL,
  `select_the_amenities_available` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resident_flatmates_ gallery_details`
--

CREATE TABLE `resident_flatmates_ gallery_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `upload_images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resident_flatmates_ locality_details`
--

CREATE TABLE `resident_flatmates_ locality_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL,
  `street_area` varchar(255) NOT NULL,
  `locality_lat` varchar(255) NOT NULL,
  `locality_long` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resident_flatmates_ property_details`
--

CREATE TABLE `resident_flatmates_ property_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `apartment_type` varchar(255) NOT NULL,
  `apartment_name` varchar(255) NOT NULL,
  `bhk_type` varchar(255) NOT NULL,
  `floor` varchar(255) NOT NULL,
  `total_floor` varchar(255) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `tenant_type` varchar(255) NOT NULL,
  `property_age` varchar(255) NOT NULL,
  `facing` varchar(255) NOT NULL,
  `property_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resident_flatmates_rental_details`
--

CREATE TABLE `resident_flatmates_rental_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `expected_rent` varchar(255) NOT NULL,
  `expected_deposit` varchar(255) NOT NULL,
  `negotiable` varchar(255) NOT NULL,
  `maintenance` varchar(255) NOT NULL,
  `available_form` varchar(255) NOT NULL,
  `furnishing` varchar(255) NOT NULL,
  `parking` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resident_flatmates_ schedule_details`
--

CREATE TABLE `resident_flatmates_ schedule_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `available_all_day` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resident_pg_amenities_details`
--

CREATE TABLE `resident_pg_amenities_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `available_service_laundry` varchar(255) NOT NULL,
  `available_service_room_cleaning` varchar(255) NOT NULL,
  `available_service_warden_facility` varchar(255) NOT NULL,
  `available_amenities` varchar(255) NOT NULL,
  `parking` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resident_pg_gallery_details`
--

CREATE TABLE `resident_pg_gallery_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `upload_images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resident_pg_locality_details`
--

CREATE TABLE `resident_pg_locality_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL,
  `street_area` varchar(255) NOT NULL,
  `locality_lat` varchar(255) NOT NULL,
  `locality_long` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resident_pg_pg_details`
--

CREATE TABLE `resident_pg_pg_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `place_is_available_for` varchar(255) NOT NULL,
  `preferred_guests` varchar(255) NOT NULL,
  `available_from` varchar(255) NOT NULL,
  `food_included` varchar(255) NOT NULL,
  `pg_hostel_rules` varchar(255) NOT NULL,
  `gate_closing_time` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resident_ pg_room_details`
--

CREATE TABLE `resident_ pg_room_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `select_the_type_of_rooms` varchar(255) NOT NULL,
  `expected_rent_per_person` varchar(255) NOT NULL,
  `expected_deposit_per_person` varchar(255) NOT NULL,
  `room_amenities` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resident_pg_ schedule_details`
--

CREATE TABLE `resident_pg_ schedule_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `available_all_day` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resident_rent_amenities_details`
--

CREATE TABLE `resident_rent_amenities_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(20) NOT NULL,
  `bathrooms` varchar(55) NOT NULL,
  `balcony` varchar(255) NOT NULL,
  `water_supply` varchar(255) NOT NULL,
  `gym` varchar(255) NOT NULL,
  `non_veg_allowed` varchar(255) NOT NULL,
  `gated_security` varchar(255) NOT NULL,
  `who_will_show_the_house` varchar(255) NOT NULL,
  `secondary_number` varchar(255) NOT NULL,
  `select_the_amenities_available` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_rent_amenities_details`
--

INSERT INTO `resident_rent_amenities_details` (`id`, `userID`, `propertyid`, `bathrooms`, `balcony`, `water_supply`, `gym`, `non_veg_allowed`, `gated_security`, `who_will_show_the_house`, `secondary_number`, `select_the_amenities_available`) VALUES
(1, 11, '0', '10', '10', 'Corporation', '1', '1', '1', 'I will show', '22', 'a:5:{i:0;s:17:\"internet_services\";i:1;s:15:\"air_conditioner\";i:2;s:10:\"club_house\";i:3;s:8:\"intercom\";i:4;s:13:\"swimming_pool\";}'),
(3, 1, 'RR5dd62202a9be2', '43', '', '43', '34', '43', '345', '43', '43', '43');

-- --------------------------------------------------------

--
-- Table structure for table `resident_rent_gallery_details`
--

CREATE TABLE `resident_rent_gallery_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `upload_images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_rent_gallery_details`
--

INSERT INTO `resident_rent_gallery_details` (`id`, `userID`, `propertyid`, `upload_images`) VALUES
(2, 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `resident_rent_locality_details`
--

CREATE TABLE `resident_rent_locality_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(20) NOT NULL,
  `city` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL,
  `street_addres` varchar(255) NOT NULL,
  `locality_lat` varchar(255) NOT NULL,
  `locality_long` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_rent_locality_details`
--

INSERT INTO `resident_rent_locality_details` (`id`, `userID`, `propertyid`, `city`, `locality`, `street_addres`, `locality_lat`, `locality_long`, `created_at`) VALUES
(1, 11, '0', 'Chandigarh', '', 'HGT', '30.6942091', '76.86056499999995', '2019-11-11 21:04:17'),
(2, 11, '0', 'Chandigarh', '', 'HGT', '30.6942091', '76.86056499999995', '2019-11-11 21:07:34'),
(3, 11, '0', 'Chandigarh', '', 'HGT', '30.6942091', '76.86056499999995', '2019-11-11 21:08:54'),
(4, 11, '0', 'Chandigarh', '', 'HGT', '30.6942091', '76.86056499999995', '2019-11-11 21:09:53'),
(5, 11, '0', 'Chandigarh', '', 'HGT', '30.6942091', '76.86056499999995', '2019-11-11 21:10:57'),
(6, 11, 'RR957033141', 'Delhi', '', 'hkj', '28.68627380000001', '77.22178310000004', '2019-11-11 21:58:48'),
(7, 11, 'RR957033141', 'Select', '', 'd', '32.7766642', '-96.79698789999998', '2019-11-11 22:11:59'),
(9, 1, 'RR5dd62202a9be2', '3', '435', '34', '', '', '2019-11-21 05:34:58');

-- --------------------------------------------------------

--
-- Table structure for table `resident_rent_property_details`
--

CREATE TABLE `resident_rent_property_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(11) NOT NULL,
  `apartment_type` varchar(255) NOT NULL,
  `apartment_name` varchar(255) NOT NULL,
  `bhk_type` varchar(255) NOT NULL,
  `floor` varchar(255) NOT NULL,
  `top_floor` varchar(255) NOT NULL,
  `property_age` varchar(255) NOT NULL,
  `facing` varchar(255) NOT NULL,
  `property_size` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_rent_property_details`
--

INSERT INTO `resident_rent_property_details` (`id`, `userID`, `propertyid`, `apartment_type`, `apartment_name`, `bhk_type`, `floor`, `top_floor`, `property_age`, `facing`, `property_size`, `created_at`) VALUES
(1, 0, '0', 'residential', 'dhanana', '2', '6', '8', '0', 'west', '1230', '2019-11-11 19:28:36'),
(2, 0, '0', 'residential', 'dhanana', '2', '6', '8', '5-10', 'west', '1230', '2019-11-11 19:29:21'),
(3, 11, '0', 'residential', 'Dhananajy', '2', '3', '1', '-1', 'north', 'd', '2019-11-11 20:26:51'),
(4, 11, 'PD591359086', 'residential', 'Dhananajy', '2', '3', '1', '-1', 'north', 'd', '2019-11-11 20:28:36'),
(5, 11, 'RR833002635', 'residential', 'Dhananajy', '2', '3', '1', '-1', 'north', 'd', '2019-11-11 20:36:37'),
(6, 11, 'RR110853135', 'residential', 'Dhananajy', '2', '3', '1', '-1', 'north', 'd', '2019-11-11 20:36:46'),
(7, 11, 'RR374621901', 'residential', 'Dhananajy', '2', '3', '1', '-1', 'north', 'd', '2019-11-11 20:37:40'),
(8, 11, 'RR957033141', 'residential', 'villa hai ek', '3', '6', '6', '5-10', 'west', '20', '2019-11-11 21:57:06'),
(9, 11, 'RR978602077', 'residential', 'villa hai ek', '3', '6', '6', '5-10', 'west', '20', '2019-11-11 21:58:03'),
(10, 11, 'RR554049203', 'residential', 'dss', 'Select', 'Select', 'Select', 'Select', 'Select', 'd', '2019-11-11 22:11:50'),
(11, 11, 'RR966721616', 'residential', 'dhananjay', 'value', 'value', 'value', 'value', 'value', '1201', '2019-11-12 21:04:23'),
(12, 11, 'RR707696173', 'residential', 'dhananjay', 'value', 'value', 'value', 'value', 'value', '1201', '2019-11-12 21:05:26'),
(13, 11, 'RR814947341', 'residential', 'dhananjay', 'value', 'value', 'value', 'value', 'value', '1201', '2019-11-12 21:07:46'),
(14, 11, 'RR774148256', 'residential', 'dhananjay', 'value', 'value', 'value', 'value', 'value', '1201', '2019-11-12 21:08:29'),
(16, 1, 'RR5dd62202a', '543', '34', '34', '34', '43', '43', '43', '43', '2019-11-21 05:34:58');

-- --------------------------------------------------------

--
-- Table structure for table `resident_rent_rental_details`
--

CREATE TABLE `resident_rent_rental_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(20) NOT NULL,
  `is_available_for_lease` varchar(255) NOT NULL,
  `expected_lease_amount` varchar(255) NOT NULL,
  `expected_depost` varchar(50) NOT NULL,
  `is_negotiable` varchar(255) NOT NULL,
  `maintenance` varchar(255) NOT NULL,
  `availablle_from` varchar(255) NOT NULL,
  `preferred_tenants` varchar(255) NOT NULL,
  `furnishing` varchar(255) NOT NULL,
  `parking` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_rent_rental_details`
--

INSERT INTO `resident_rent_rental_details` (`id`, `userID`, `propertyid`, `is_available_for_lease`, `expected_lease_amount`, `expected_depost`, `is_negotiable`, `maintenance`, `availablle_from`, `preferred_tenants`, `furnishing`, `parking`, `description`) VALUES
(1, 11, '0', 'yes', '20000', '1000', 'on', '0', '', 'FAMILY', '', 'Car', 'its a good house for the rent you can fuck any girl here'),
(2, 11, 'RR957033141', 'yes', '2000', '10', 'on', '0', '', 'ANYONE', '', 'Bike', 'kn'),
(3, 11, 'RR957033141', 'yes', 's', 'as', 'on', 'Select', '', 'Select', '', 'Select', 's'),
(5, 1, 'RR5dd62202a9be2', '43', '43', '435', '345', '34', '43', '43', '43', '43', '43');

-- --------------------------------------------------------

--
-- Table structure for table `resident_rent_ schedule_details`
--

CREATE TABLE `resident_rent_ schedule_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `available_all_day)` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resident_rent_schedule_details`
--

CREATE TABLE `resident_rent_schedule_details` (
  `id` int(191) NOT NULL,
  `userID` varchar(255) NOT NULL,
  `propertyid` varchar(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `available_all_day` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resident_rent_schedule_details`
--

INSERT INTO `resident_rent_schedule_details` (`id`, `userID`, `propertyid`, `availability`, `start_time`, `end_time`, `available_all_day`) VALUES
(0, '1', 'RR5dd62202a9be2', '435', '435', '435', '34'),
(1, '22', '0', 'sfsdf', 'sdf', 'sdf', 'sfdsdf');

-- --------------------------------------------------------

--
-- Table structure for table `resident_resale_additional_information_details`
--

CREATE TABLE `resident_resale_additional_information_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `do_you_have_sale_deed_certificate` varchar(255) NOT NULL,
  `select_have_you_paid_propery_tax` varchar(255) NOT NULL,
  `do_you_have_occupancy_certificate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resident_resale_amenities_details`
--

CREATE TABLE `resident_resale_amenities_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `balcony` int(11) NOT NULL,
  `water_supply` varchar(255) NOT NULL,
  `gym` varchar(255) NOT NULL,
  `power_backup` varchar(255) NOT NULL,
  `gated_security` varchar(255) NOT NULL,
  `who_will_show_house` varchar(255) NOT NULL,
  `secondary_number` varchar(255) NOT NULL,
  `select_the_amenities_available` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resident_resale_gallery_details`
--

CREATE TABLE `resident_resale_gallery_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `upload_images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resident_resale_locality_details`
--

CREATE TABLE `resident_resale_locality_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL,
  `street_addres` varchar(255) NOT NULL,
  `locality_lat` varchar(255) NOT NULL,
  `locality_long` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resident_resale_property_details`
--

CREATE TABLE `resident_resale_property_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `apartment_type` varchar(255) NOT NULL,
  `apartment_name` varchar(255) NOT NULL,
  `bhk_type` varchar(255) NOT NULL,
  `ownership_type` varchar(255) NOT NULL,
  `property_size` int(11) NOT NULL,
  `property_age` varchar(255) NOT NULL,
  `facing` varchar(255) NOT NULL,
  `floor` varchar(255) NOT NULL,
  `total_floor` varchar(255) NOT NULL,
  `floor_type` varchar(255) NOT NULL,
  `no_of_units` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_resale_property_details`
--

INSERT INTO `resident_resale_property_details` (`id`, `userID`, `propertyid`, `apartment_type`, `apartment_name`, `bhk_type`, `ownership_type`, `property_size`, `property_age`, `facing`, `floor`, `total_floor`, `floor_type`, `no_of_units`) VALUES
(1, 11, 0, 'residential', 'lk', 'value', 'value', 20, 'value', 'value', 'value', 'value', '', '10'),
(2, 11, 0, 'residential', 'lk', 'value', 'value', 20, 'value', 'value', 'value', 'value', '', '10'),
(3, 11, 0, 'residential', 'hi', 'value', 'value', 0, 'value', 'value', 'value', 'value', '', '102'),
(4, 11, 0, 'residential', 'mllk', 'value', 'value', 0, 'value', 'value', 'value', 'value', '', 'kl');

-- --------------------------------------------------------

--
-- Table structure for table `resident_resale_resale_details`
--

CREATE TABLE `resident_resale_resale_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `expected_cost` int(11) NOT NULL,
  `maintenance_cost` varchar(255) NOT NULL,
  `is_price_negotiable` varchar(255) NOT NULL,
  `is_currently_under_loan` varchar(255) NOT NULL,
  `no_of_lease_years` varchar(255) NOT NULL,
  `available_forms` varchar(255) NOT NULL,
  `furnishing` varchar(255) NOT NULL,
  `parking` varchar(255) NOT NULL,
  `kitchen_type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resident_resale_schedule_details`
--

CREATE TABLE `resident_resale_schedule_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `available_all_day` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Manager'),
(3, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(222) NOT NULL,
  `mobile` varchar(222) NOT NULL,
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `roleId` tinyint(4) NOT NULL,
  `address` varchar(222) DEFAULT NULL,
  `dob` varchar(222) DEFAULT NULL,
  `get_whats_app_updates` tinyint(1) NOT NULL DEFAULT 1,
  `country` int(11) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `lat` varchar(222) DEFAULT NULL,
  `lng` varchar(222) DEFAULT NULL,
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `mobile`, `password`, `name`, `roleId`, `address`, `dob`, `get_whats_app_updates`, `country`, `state`, `city`, `lat`, `lng`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`, `isDeleted`) VALUES
(1, 'admin@example.com', '', '$2y$10$xzegWCF81W31YUE68aSH6u8ud7yr6SdlX7nHAqjvpWZ0b/i.zSWge', 'System Administrator', 1, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 0, '2015-07-01 18:56:49', 1, '2019-11-15 21:29:40', 0),
(2, 'gdwdgj@dhd.dhdh', '', '$2y$10$2dumS46BuRkxNT4VEFf78eN9czB.Y8aKoNmutuePAxSZsGSvFJQtm', 'Manager', 2, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, '2016-12-09 17:49:56', 1, '2019-11-14 18:29:09', 1),
(3, 'dgggjd@ysbhs.dshd', '', '$2y$10$2dumS46BuRkxNT4VEFf78eN9czB.Y8aKoNmutuePAxSZsGSvFJQtm', 'Employee', 3, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, '2016-12-09 17:50:22', 1, '2019-11-15 19:59:30', 1),
(9, 'pramod.kumar@contriverz.com', '', '$2y$10$it4oy.OsQQbN5qH1z3jAMeuW1q93jJld9dI7rb2YO4p2TI8txnCvC', 'Parmod', 2, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 0, '0000-00-00 00:00:00', 1, '2019-11-14 18:22:31', 0),
(10, 'asdasd@dh.do', '', '$2y$10$OCr3Mx1BXEyU9DqLITK1wuTPcnXwYeGZ/d9AD9KZ4Fpt1qRvefG9u', 'Devesh Choudhry', 3, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, '2019-11-14 18:28:04', 1, '2019-11-15 19:59:15', 0),
(11, 'sunil.kumar@gmail.com', '5654855151', '$2y$10$1.wCqBPYfnNnXxtkGkgKV.bRkwzDlDinp8xmloFTHp.581jizxalW', 'Compnayuserteststudent', 2, 'ghfdsg                                                                ', '5435435', 0, 47, 575, 45747, 'ff', 'fghfg', 1, '2019-11-15 20:00:25', 1, '2019-11-19 14:22:12', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `commericial_rent_additional_information_details`
--
ALTER TABLE `commericial_rent_additional_information_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commericial_rent_amenities_details`
--
ALTER TABLE `commericial_rent_amenities_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commericial_rent_locality_details`
--
ALTER TABLE `commericial_rent_locality_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commericial_rent_photo_details`
--
ALTER TABLE `commericial_rent_photo_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commericial_rent_property_details`
--
ALTER TABLE `commericial_rent_property_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commericial_rent_rental_details`
--
ALTER TABLE `commericial_rent_rental_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commericial_sale_additional_information_details`
--
ALTER TABLE `commericial_sale_additional_information_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commericial_sale_amenities_details`
--
ALTER TABLE `commericial_sale_amenities_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commericial_sale_location_details`
--
ALTER TABLE `commericial_sale_location_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commericial_sale_photo_details`
--
ALTER TABLE `commericial_sale_photo_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commericial_sale_resale_details`
--
ALTER TABLE `commericial_sale_resale_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`),
  ADD KEY `propertyid` (`propertyid`);

--
-- Indexes for table `last_login`
--
ALTER TABLE `last_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mzb_additional_property`
--
ALTER TABLE `mzb_additional_property`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `mzb_location_details`
--
ALTER TABLE `mzb_location_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `mzb_otp_verify`
--
ALTER TABLE `mzb_otp_verify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mzb_post_details`
--
ALTER TABLE `mzb_post_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `propertyid` (`propertyid`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `mzb_property_details`
--
ALTER TABLE `mzb_property_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `mzb_property_photos`
--
ALTER TABLE `mzb_property_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `mzb_rental_details`
--
ALTER TABLE `mzb_rental_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `property_type_table`
--
ALTER TABLE `property_type_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_flatmates_ amenities_details`
--
ALTER TABLE `resident_flatmates_ amenities_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_flatmates_ gallery_details`
--
ALTER TABLE `resident_flatmates_ gallery_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_flatmates_ locality_details`
--
ALTER TABLE `resident_flatmates_ locality_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_flatmates_ property_details`
--
ALTER TABLE `resident_flatmates_ property_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_flatmates_rental_details`
--
ALTER TABLE `resident_flatmates_rental_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_flatmates_ schedule_details`
--
ALTER TABLE `resident_flatmates_ schedule_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_pg_amenities_details`
--
ALTER TABLE `resident_pg_amenities_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_pg_gallery_details`
--
ALTER TABLE `resident_pg_gallery_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_pg_locality_details`
--
ALTER TABLE `resident_pg_locality_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_pg_pg_details`
--
ALTER TABLE `resident_pg_pg_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_ pg_room_details`
--
ALTER TABLE `resident_ pg_room_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `resident_pg_ schedule_details`
--
ALTER TABLE `resident_pg_ schedule_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_rent_amenities_details`
--
ALTER TABLE `resident_rent_amenities_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_rent_gallery_details`
--
ALTER TABLE `resident_rent_gallery_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_rent_locality_details`
--
ALTER TABLE `resident_rent_locality_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_rent_property_details`
--
ALTER TABLE `resident_rent_property_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `propertyid` (`propertyid`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `resident_rent_rental_details`
--
ALTER TABLE `resident_rent_rental_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_rent_ schedule_details`
--
ALTER TABLE `resident_rent_ schedule_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_resale_additional_information_details`
--
ALTER TABLE `resident_resale_additional_information_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_resale_amenities_details`
--
ALTER TABLE `resident_resale_amenities_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_resale_gallery_details`
--
ALTER TABLE `resident_resale_gallery_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_resale_locality_details`
--
ALTER TABLE `resident_resale_locality_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_resale_property_details`
--
ALTER TABLE `resident_resale_property_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_resale_resale_details`
--
ALTER TABLE `resident_resale_resale_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_resale_schedule_details`
--
ALTER TABLE `resident_resale_schedule_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commericial_rent_additional_information_details`
--
ALTER TABLE `commericial_rent_additional_information_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commericial_rent_amenities_details`
--
ALTER TABLE `commericial_rent_amenities_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commericial_rent_locality_details`
--
ALTER TABLE `commericial_rent_locality_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commericial_rent_photo_details`
--
ALTER TABLE `commericial_rent_photo_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commericial_rent_property_details`
--
ALTER TABLE `commericial_rent_property_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commericial_rent_rental_details`
--
ALTER TABLE `commericial_rent_rental_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commericial_sale_additional_information_details`
--
ALTER TABLE `commericial_sale_additional_information_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commericial_sale_amenities_details`
--
ALTER TABLE `commericial_sale_amenities_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commericial_sale_location_details`
--
ALTER TABLE `commericial_sale_location_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commericial_sale_photo_details`
--
ALTER TABLE `commericial_sale_photo_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commericial_sale_resale_details`
--
ALTER TABLE `commericial_sale_resale_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `last_login`
--
ALTER TABLE `last_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mzb_otp_verify`
--
ALTER TABLE `mzb_otp_verify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101213;

--
-- AUTO_INCREMENT for table `mzb_post_details`
--
ALTER TABLE `mzb_post_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `property_type_table`
--
ALTER TABLE `property_type_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reset_password`
--
ALTER TABLE `reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resident_flatmates_ amenities_details`
--
ALTER TABLE `resident_flatmates_ amenities_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident_flatmates_ gallery_details`
--
ALTER TABLE `resident_flatmates_ gallery_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident_flatmates_ locality_details`
--
ALTER TABLE `resident_flatmates_ locality_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident_flatmates_ property_details`
--
ALTER TABLE `resident_flatmates_ property_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident_flatmates_rental_details`
--
ALTER TABLE `resident_flatmates_rental_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident_flatmates_ schedule_details`
--
ALTER TABLE `resident_flatmates_ schedule_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident_pg_amenities_details`
--
ALTER TABLE `resident_pg_amenities_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident_pg_gallery_details`
--
ALTER TABLE `resident_pg_gallery_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident_pg_locality_details`
--
ALTER TABLE `resident_pg_locality_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident_pg_pg_details`
--
ALTER TABLE `resident_pg_pg_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident_ pg_room_details`
--
ALTER TABLE `resident_ pg_room_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident_pg_ schedule_details`
--
ALTER TABLE `resident_pg_ schedule_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident_rent_amenities_details`
--
ALTER TABLE `resident_rent_amenities_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resident_rent_gallery_details`
--
ALTER TABLE `resident_rent_gallery_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resident_rent_locality_details`
--
ALTER TABLE `resident_rent_locality_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `resident_rent_property_details`
--
ALTER TABLE `resident_rent_property_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `resident_rent_rental_details`
--
ALTER TABLE `resident_rent_rental_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resident_rent_ schedule_details`
--
ALTER TABLE `resident_rent_ schedule_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident_resale_additional_information_details`
--
ALTER TABLE `resident_resale_additional_information_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident_resale_amenities_details`
--
ALTER TABLE `resident_resale_amenities_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident_resale_gallery_details`
--
ALTER TABLE `resident_resale_gallery_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident_resale_locality_details`
--
ALTER TABLE `resident_resale_locality_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident_resale_property_details`
--
ALTER TABLE `resident_resale_property_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resident_resale_resale_details`
--
ALTER TABLE `resident_resale_resale_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident_resale_schedule_details`
--
ALTER TABLE `resident_resale_schedule_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
