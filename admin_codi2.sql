-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2019 at 03:43 PM
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
-- Table structure for table `commercial_rent_additional_information_details`
--

CREATE TABLE `commercial_rent_additional_information_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `previous_occupancy` varchar(255) NOT NULL,
  `locality_type` varchar(255) NOT NULL,
  `who_will_show_the_house` varchar(255) NOT NULL,
  `secondary_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commercial_rent_additional_information_details`
--

INSERT INTO `commercial_rent_additional_information_details` (`id`, `userID`, `propertyid`, `description`, `previous_occupancy`, `locality_type`, `who_will_show_the_house`, `secondary_number`) VALUES
(1, 1, 'CR5dde354ed34f8', 'sdf', 'fds', 'sdfsfd', 'fds', 'sfd'),
(2, 1, 'CR5de524f2d52e4', 'fdg', 'fdg', 'fdg', 'fdg', 'fgd'),
(3, 1, 'CR0523703', 'asd', 'FIRST_TIME_RENTING', 'SHOPPING_MALL', 'NEED_HELP', '4543');

-- --------------------------------------------------------

--
-- Table structure for table `commercial_rent_amenities_details`
--

CREATE TABLE `commercial_rent_amenities_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
  `power_backup` varchar(255) NOT NULL,
  `lift` varchar(255) NOT NULL,
  `parking` varchar(255) NOT NULL,
  `available_slots` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commercial_rent_amenities_details`
--

INSERT INTO `commercial_rent_amenities_details` (`id`, `userID`, `propertyid`, `power_backup`, `lift`, `parking`, `available_slots`) VALUES
(1, 1, 'CR5dde354ed34f8', 'sdf', 'dsf', 'sd', 'sdf'),
(2, 1, 'CR5de524f2d52e4', 'fdg', 'fdg', 'fgd', 'fgd'),
(3, 1, 'CR0523703', 'DG_BACKUP', 'NONE', 'NONE', 'sadsa');

-- --------------------------------------------------------

--
-- Table structure for table `commercial_rent_locality_details`
--

CREATE TABLE `commercial_rent_locality_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
  `city` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL,
  `street_area` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `locality_lat` varchar(255) NOT NULL,
  `locality_long` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commercial_rent_locality_details`
--

INSERT INTO `commercial_rent_locality_details` (`id`, `userID`, `propertyid`, `city`, `locality`, `street_area`, `landmark`, `locality_lat`, `locality_long`) VALUES
(2, 1, 'CR5dde354ed34f8', 'dsf', 'sfd', 'fsd', 'dsf', '', ''),
(3, 1, 'CR5de524f2d52e4', 'gf', 'gdf', 'dfg', 'fdg', '', ''),
(4, 1, 'CR0523703', 'asdsa', 'asd', 'as', 'assd', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `commercial_rent_photo_details`
--

CREATE TABLE `commercial_rent_photo_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
  `upload_images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commercial_rent_photo_details`
--

INSERT INTO `commercial_rent_photo_details` (`id`, `userID`, `propertyid`, `upload_images`) VALUES
(1, 1, 'RZ5dde354ed34f8', ''),
(2, 1, 'CZ5de524f2d52e4', ''),
(3, 1, 'CR0523703', '');

-- --------------------------------------------------------

--
-- Table structure for table `commercial_rent_property_details`
--

CREATE TABLE `commercial_rent_property_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `floor_info` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `age_of_property` varchar(255) NOT NULL,
  `furnishing` varchar(255) NOT NULL,
  `other_features` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commercial_rent_property_details`
--

INSERT INTO `commercial_rent_property_details` (`id`, `userID`, `propertyid`, `property_type`, `floor_info`, `area`, `age_of_property`, `furnishing`, `other_features`) VALUES
(4, 1, 'CR5de524f2d52e4', 'apartment', 'g', 'dgfd', '1-3', 'dfg', 'dfg'),
(5, 1, 'CR0523703', 'OFFICE', '100', 'dsad', '0', 'SEMI_FURNISHED', 'On_Main_Road,CORNER_PROPERTY');

-- --------------------------------------------------------

--
-- Table structure for table `commercial_rent_rental_details`
--

CREATE TABLE `commercial_rent_rental_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
  `expected_rent` varchar(255) NOT NULL,
  `maintenance` varchar(255) NOT NULL,
  `deposit` varchar(255) NOT NULL,
  `lease_duration` varchar(255) NOT NULL,
  `lockin_period` varchar(255) NOT NULL,
  `available_from` varchar(255) NOT NULL,
  `ideal_for` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commercial_rent_rental_details`
--

INSERT INTO `commercial_rent_rental_details` (`id`, `userID`, `propertyid`, `expected_rent`, `maintenance`, `deposit`, `lease_duration`, `lockin_period`, `available_from`, `ideal_for`) VALUES
(2, 1, 'CR5dde354ed34f8', '', '', '', '', '', '', ''),
(3, 1, 'CR5de524f2d52e4', '', '', '', '', '', '', ''),
(4, 1, 'CR0523703', 'asd', 'sad', 'asd', '9', '16', '12/18/2019', 'BANK,SERVICE_CENTER,SHOWROOM,ATM');

-- --------------------------------------------------------

--
-- Table structure for table `commercial_sale_additional_information_details`
--

CREATE TABLE `commercial_sale_additional_information_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `previous_occupancy` varchar(255) NOT NULL,
  `locality_type` varchar(255) NOT NULL,
  `who_will_show_the_house` varchar(255) NOT NULL,
  `secondary_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commercial_sale_additional_information_details`
--

INSERT INTO `commercial_sale_additional_information_details` (`id`, `userID`, `propertyid`, `description`, `previous_occupancy`, `locality_type`, `who_will_show_the_house`, `secondary_number`) VALUES
(4, 1, 'CS5dde55ed1aeb3', 'sfd', 'sfd', 'sfd', 'sdf', 'sfd');

-- --------------------------------------------------------

--
-- Table structure for table `commercial_sale_amenities_details`
--

CREATE TABLE `commercial_sale_amenities_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
  `power_backup` varchar(255) NOT NULL,
  `lift` varchar(255) NOT NULL,
  `parking` varchar(255) NOT NULL,
  `available_slots` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commercial_sale_amenities_details`
--

INSERT INTO `commercial_sale_amenities_details` (`id`, `userID`, `propertyid`, `power_backup`, `lift`, `parking`, `available_slots`) VALUES
(4, 1, 'CS5dde55ed1aeb3', 'sdf', 'sdf', 'sdf', 'fds');

-- --------------------------------------------------------

--
-- Table structure for table `commercial_sale_location_details`
--

CREATE TABLE `commercial_sale_location_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
  `city` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL,
  `street_area` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commercial_sale_location_details`
--

INSERT INTO `commercial_sale_location_details` (`id`, `userID`, `propertyid`, `city`, `locality`, `street_area`, `landmark`) VALUES
(5, 1, 'CS5dde55ed1aeb3', 'sdf', 'sd', 'fds', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `commercial_sale_photo_details`
--

CREATE TABLE `commercial_sale_photo_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
  `upload_images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commercial_sale_photo_details`
--

INSERT INTO `commercial_sale_photo_details` (`id`, `userID`, `propertyid`, `upload_images`) VALUES
(4, 1, 'CS5dde55ed1aeb3', '');

-- --------------------------------------------------------

--
-- Table structure for table `commercial_sale_property_details`
--

CREATE TABLE `commercial_sale_property_details` (
  `id` int(191) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `floor_info` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `age_of_property` varchar(255) NOT NULL,
  `furnishing` varchar(255) NOT NULL,
  `other_features` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commercial_sale_resale_details`
--

CREATE TABLE `commercial_sale_resale_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
  `expected_price` varchar(255) NOT NULL,
  `negotiable` varchar(255) NOT NULL,
  `ownership_type` varchar(255) NOT NULL,
  `available_from` varchar(355) NOT NULL,
  `ideal_for` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commercial_sale_resale_details`
--

INSERT INTO `commercial_sale_resale_details` (`id`, `userID`, `propertyid`, `expected_price`, `negotiable`, `ownership_type`, `available_from`, `ideal_for`) VALUES
(4, 1, 'CS5dde55ed1aeb3', 'sdf', 'sdf', 'sfd', 'sdff', 'sdf');

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
(14, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.97', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'Linux', '2019-11-21 18:06:13'),
(15, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'Windows 10', '2019-11-22 01:29:38'),
(16, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.97', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'Linux', '2019-11-25 20:00:29'),
(17, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.97', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'Linux', '2019-11-26 17:12:53'),
(18, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.97', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'Linux', '2019-11-26 18:40:29'),
(19, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Linux', '2019-11-27 13:08:26'),
(20, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Linux', '2019-11-28 20:11:39'),
(21, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Linux', '2019-12-02 18:53:39'),
(22, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Linux', '2019-12-03 12:16:38'),
(23, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Linux', '2019-12-03 17:56:03'),
(24, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Linux', '2019-12-04 17:20:34'),
(25, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Linux', '2019-12-04 17:55:27'),
(26, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Linux', '2019-12-05 07:53:17'),
(27, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Linux', '2019-12-05 12:20:54'),
(28, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Linux', '2019-12-05 15:57:33'),
(29, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Linux', '2019-12-05 18:33:25'),
(30, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Linux', '2019-12-06 16:07:54'),
(31, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Linux', '2019-12-06 19:27:37'),
(32, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Linux', '2019-12-09 18:59:45'),
(33, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Linux', '2019-12-10 14:28:06'),
(34, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Linux', '2019-12-10 16:59:00'),
(35, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Linux', '2019-12-10 20:02:48'),
(36, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Linux', '2019-12-11 18:21:06');

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
-- Table structure for table `resident_flatmates_amenities_details`
--

CREATE TABLE `resident_flatmates_amenities_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(222) NOT NULL,
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

--
-- Dumping data for table `resident_flatmates_amenities_details`
--

INSERT INTO `resident_flatmates_amenities_details` (`id`, `userID`, `propertyid`, `bathroom`, `balcony`, `water_supply`, `gym`, `non_veg_allowed`, `gated_security`, `who_will_show_the_house`, `secondary_number`, `select_the_amenities_available`) VALUES
(3, 1, 'RF7308758', 0, 0, 'BOREWELL', 'true', 'true', 'true', 'NEED_HELP', 'sdf', 'LIFT,AC,INTERCOM,CPA'),
(4, 1, 'RF7738879', 0, 0, 'BOREWELL', 'true', 'true', 'true', 'I_HAVE_KEYS', 'sdff', 'LIFT,AC,INTERCOM,CPA');

-- --------------------------------------------------------

--
-- Table structure for table `resident_flatmates_gallery_details`
--

CREATE TABLE `resident_flatmates_gallery_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(222) NOT NULL,
  `upload_images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_flatmates_gallery_details`
--

INSERT INTO `resident_flatmates_gallery_details` (`id`, `userID`, `propertyid`, `upload_images`) VALUES
(3, 1, 'RF7308758', ''),
(4, 1, 'RF7738879', '');

-- --------------------------------------------------------

--
-- Table structure for table `resident_flatmates_locality_details`
--

CREATE TABLE `resident_flatmates_locality_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(222) NOT NULL,
  `city` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL,
  `street_area` varchar(255) NOT NULL,
  `locality_lat` varchar(255) NOT NULL,
  `locality_long` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_flatmates_locality_details`
--

INSERT INTO `resident_flatmates_locality_details` (`id`, `userID`, `propertyid`, `city`, `locality`, `street_area`, `locality_lat`, `locality_long`) VALUES
(3, 1, 'RF7308758', 'dfsd', 'sdf', 'sdf', '', ''),
(4, 1, 'RF7738879', 'fs', 'sdf', 'sdf', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `resident_flatmates_property_details`
--

CREATE TABLE `resident_flatmates_property_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(222) NOT NULL,
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

--
-- Dumping data for table `resident_flatmates_property_details`
--

INSERT INTO `resident_flatmates_property_details` (`id`, `userID`, `propertyid`, `apartment_type`, `apartment_name`, `bhk_type`, `floor`, `total_floor`, `room_type`, `tenant_type`, `property_age`, `facing`, `property_size`) VALUES
(3, 1, 'RF7308758', 'apartment', 'fd', 'BHK1', '15', '13', 'on', 'on', '1', 'W', 0),
(4, 1, 'RF7738879', 'independent', 'fsdf', 'RK1', '14', '12', 'on', 'on', '0', 'W', 0);

-- --------------------------------------------------------

--
-- Table structure for table `resident_flatmates_rental_details`
--

CREATE TABLE `resident_flatmates_rental_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(222) NOT NULL,
  `expected_rent` varchar(255) NOT NULL,
  `expected_deposit` varchar(255) NOT NULL,
  `negotiable` varchar(255) NOT NULL,
  `maintenance` varchar(255) NOT NULL,
  `available_form` varchar(255) NOT NULL,
  `furnishing` varchar(255) NOT NULL,
  `parking` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_flatmates_rental_details`
--

INSERT INTO `resident_flatmates_rental_details` (`id`, `userID`, `propertyid`, `expected_rent`, `expected_deposit`, `negotiable`, `maintenance`, `available_form`, `furnishing`, `parking`, `description`) VALUES
(3, 1, 'RF7308758', '', '', '', '', '', '', '', ''),
(4, 1, 'RF7738879', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `resident_flatmates_schedule_details`
--

CREATE TABLE `resident_flatmates_schedule_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(222) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `available_all_day` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_flatmates_schedule_details`
--

INSERT INTO `resident_flatmates_schedule_details` (`id`, `userID`, `propertyid`, `availability`, `start_time`, `end_time`, `available_all_day`) VALUES
(3, 1, 'RF7308758', 'EVERYDAY', '9:00 PM', '9:00 PM', 'true'),
(4, 1, 'RF7738879', 'EVERYDAY', '9:00 PM', '9:00 PM', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `resident_pg_amenities_details`
--

CREATE TABLE `resident_pg_amenities_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
  `available_service_laundry` varchar(255) NOT NULL,
  `available_service_room_cleaning` varchar(255) NOT NULL,
  `available_service_warden_facility` varchar(255) NOT NULL,
  `available_amenities` varchar(255) NOT NULL,
  `parking` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_pg_amenities_details`
--

INSERT INTO `resident_pg_amenities_details` (`id`, `userID`, `propertyid`, `available_service_laundry`, `available_service_room_cleaning`, `available_service_warden_facility`, `available_amenities`, `parking`) VALUES
(1, 1, 'PG5dde4722afa3c', 'rte', 'rte', 'ret', 'ret', 'ret'),
(2, 1, 'PG5dde814d063d7', 'rte', 'rte', 'ret', 'ret', 'ret'),
(3, 1, 'PG0595992', 'Yes', 'on', 'Yes', 'LIFT,AC,INTERCOM,CPA', 'TWO_WHEELER');

-- --------------------------------------------------------

--
-- Table structure for table `resident_pg_gallery_details`
--

CREATE TABLE `resident_pg_gallery_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
  `upload_images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_pg_gallery_details`
--

INSERT INTO `resident_pg_gallery_details` (`id`, `userID`, `propertyid`, `upload_images`) VALUES
(1, 1, 'PG5dde4722afa3c', ''),
(2, 1, 'PG5dde814d063d7', ''),
(3, 1, 'PG0595992', '');

-- --------------------------------------------------------

--
-- Table structure for table `resident_pg_locality_details`
--

CREATE TABLE `resident_pg_locality_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
  `city` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL,
  `street_area` varchar(255) NOT NULL,
  `locality_lat` varchar(255) NOT NULL,
  `locality_long` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_pg_locality_details`
--

INSERT INTO `resident_pg_locality_details` (`id`, `userID`, `propertyid`, `city`, `locality`, `street_area`, `locality_lat`, `locality_long`) VALUES
(1, 1, 'PG5dde4722afa3c', 'ret', 'rte', 'ret', '', ''),
(2, 1, 'PG5dde814d063d7', 'ret', 'rte', 'ret', '', ''),
(3, 1, 'PG0595992', 'dgf', 'sdf', 'sfd', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `resident_pg_pg_details`
--

CREATE TABLE `resident_pg_pg_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
  `place_is_available_for` varchar(255) NOT NULL,
  `preferred_guests` varchar(255) NOT NULL,
  `available_from` varchar(255) NOT NULL,
  `food_included` varchar(255) NOT NULL,
  `pg_hostel_rules` varchar(255) NOT NULL,
  `gate_closing_time` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_pg_pg_details`
--

INSERT INTO `resident_pg_pg_details` (`id`, `userID`, `propertyid`, `place_is_available_for`, `preferred_guests`, `available_from`, `food_included`, `pg_hostel_rules`, `gate_closing_time`, `description`) VALUES
(1, 1, 'PG5dde4722afa3c', 'fsfre', 'ertr', 'rte', 'rett', 'ret', 'ret', 'rte'),
(2, 1, 'PG5dde814d063d7', 'fsfre', 'ertr', 'rte', 'rett', 'ret', 'ret', 'rte'),
(3, 1, 'PG0595992', 'male', 'STUDENT', '12/11/2019', 'Yes', 'LIFT,AC,INTERCOM', '7:00 PM', 'sdfsd');

-- --------------------------------------------------------

--
-- Table structure for table `resident_pg_room_details`
--

CREATE TABLE `resident_pg_room_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
  `select_the_type_of_rooms` varchar(255) NOT NULL,
  `expected_rent_per_person` varchar(255) NOT NULL,
  `expected_deposit_per_person` varchar(255) NOT NULL,
  `room_amenities` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_pg_room_details`
--

INSERT INTO `resident_pg_room_details` (`id`, `userID`, `propertyid`, `select_the_type_of_rooms`, `expected_rent_per_person`, `expected_deposit_per_person`, `room_amenities`) VALUES
(3, 1, 'PG0595992', 'double', 'sdfs', 'sd', 'AC,INTERCOM,CPA');

-- --------------------------------------------------------

--
-- Table structure for table `resident_pg_schedule_details`
--

CREATE TABLE `resident_pg_schedule_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `available_all_day` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_pg_schedule_details`
--

INSERT INTO `resident_pg_schedule_details` (`id`, `userID`, `propertyid`, `availability`, `start_time`, `end_time`, `available_all_day`) VALUES
(1, 1, 'PG5dde4722afa3c', 'ret', 'rte', 'rte', 'ret'),
(2, 1, 'PG5dde814d063d7', 'ret', 'rte', 'rte', 'ret'),
(3, 1, 'PG0595992', 'sdf', 'sdf', 'sdf', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `resident_rent_amenities_details`
--

CREATE TABLE `resident_rent_amenities_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(222) NOT NULL,
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
(5, 1, 'RR5de5255043f5a', 'fdg', '', 'CORPORATION', 'true', 'true', 'true', 'NEED_HELP', 'dfgf', 'LIFT,AC'),
(6, 1, 'RR9875745', 'fdg', '', 'CORPORATION', 'true', 'true', 'true', 'NEED_HELP', 'dfgf', 'LIFT,AC'),
(7, 1, 'RR2232976', 'fdg', '', 'CORPORATION', 'true', 'true', 'true', 'NEED_HELP', 'dfgf', 'LIFT,AC'),
(8, 1, 'RR8514347', 'fdg', '', 'CORPORATION', 'true', 'true', 'true', 'NEED_HELP', 'dfgf', 'LIFT,AC'),
(9, 1, 'RR7677813', 'fdg', '', 'CORPORATION', 'true', 'true', 'true', 'NEED_HELP', 'dfgf', 'LIFT,AC');

-- --------------------------------------------------------

--
-- Table structure for table `resident_rent_gallery_details`
--

CREATE TABLE `resident_rent_gallery_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(222) NOT NULL,
  `upload_images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_rent_gallery_details`
--

INSERT INTO `resident_rent_gallery_details` (`id`, `userID`, `propertyid`, `upload_images`) VALUES
(4, 1, 'RR5de5255043f5a', ''),
(5, 1, 'RR9875745', ''),
(6, 1, 'RR2232976', ''),
(7, 1, 'RR8514347', ''),
(8, 1, 'RR7677813', '');

-- --------------------------------------------------------

--
-- Table structure for table `resident_rent_locality_details`
--

CREATE TABLE `resident_rent_locality_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(22) NOT NULL,
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
(11, 1, 'RR5de5255043f5a', 'sdfs', 'sfd', 'sdf', '', '', '2019-12-02 14:53:04'),
(12, 1, 'RR9875745', 'sdfs', 'sfd', 'sdf', '', '', '2019-12-04 12:31:21'),
(13, 1, 'RR2232976', 'sdfs', 'sfd', 'sdf', '', '', '2019-12-10 10:22:29'),
(14, 1, 'RR8514347', 'sdfs', 'sfd', 'sdf', '', '', '2019-12-10 10:43:15'),
(15, 1, 'RR7677813', 'sdfs', 'sfd', 'sdf', '', '', '2019-12-11 12:54:06');

-- --------------------------------------------------------

--
-- Table structure for table `resident_rent_property_details`
--

CREATE TABLE `resident_rent_property_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(222) NOT NULL,
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
(20, 1, 'RR2232976', 'independent', 'dfg', 'BHK1', '1', '3', '-1', 'N', '453', '2019-12-10 10:22:29'),
(21, 1, 'RR8514347', 'apartment', 'ssdfs', 'BHK1', '12', '12', '0', 'E', '35435', '2019-12-10 10:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `resident_rent_rental_details`
--

CREATE TABLE `resident_rent_rental_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(222) NOT NULL,
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
(7, 1, 'RR5de5255043f5a', 'Yes', 'sdf', 'sdf', '', '', '12/24/2019', 'ANYONE', 'SEMI_FURNISHED', 'FOUR_WHEELER', 'fgfhry'),
(8, 1, 'RR9875745', 'Yes', 'sdf', 'sdf', '', '', '12/24/2019', 'ANYONE', 'SEMI_FURNISHED', 'FOUR_WHEELER', 'fgfhry'),
(9, 1, 'RR2232976', 'Yes', 'sdf', 'sdf', '', '', '12/24/2019', 'ANYONE', 'SEMI_FURNISHED', 'FOUR_WHEELER', 'fgfhry'),
(10, 1, 'RR8514347', 'Yes', 'sdf', 'sdf', '', '', '12/24/2019', 'ANYONE', 'SEMI_FURNISHED', 'FOUR_WHEELER', 'fgfhry'),
(11, 1, 'RR7677813', 'Yes', 'sdf', 'sdf', '', '', '12/24/2019', 'ANYONE', 'SEMI_FURNISHED', 'FOUR_WHEELER', 'fgfhry');

-- --------------------------------------------------------

--
-- Table structure for table `resident_rent_ schedule_details`
--

CREATE TABLE `resident_rent_ schedule_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(222) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `available_all_day` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resident_rent_schedule_details`
--

CREATE TABLE `resident_rent_schedule_details` (
  `id` int(11) NOT NULL,
  `userID` varchar(255) NOT NULL,
  `propertyid` varchar(222) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `available_all_day` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resident_rent_schedule_details`
--

INSERT INTO `resident_rent_schedule_details` (`id`, `userID`, `propertyid`, `availability`, `start_time`, `end_time`, `available_all_day`) VALUES
(4, '1', 'RR5de5255043f5a', 'EVERYDAY', '4:15 PM', '4:15 PM', 'true'),
(5, '1', 'RR9875745', 'EVERYDAY', '4:15 PM', '4:15 PM', 'true'),
(6, '1', 'RR2232976', 'EVERYDAY', '4:15 PM', '4:15 PM', 'true'),
(7, '1', 'RR8514347', 'EVERYDAY', '4:15 PM', '4:15 PM', 'true'),
(8, '1', 'RR7677813', 'EVERYDAY', '4:15 PM', '4:15 PM', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `resident_resale_additional_information_details`
--

CREATE TABLE `resident_resale_additional_information_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
  `do_you_have_sale_deed_certificate` varchar(255) NOT NULL,
  `select_have_you_paid_propery_tax` varchar(255) NOT NULL,
  `do_you_have_occupancy_certificate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_resale_additional_information_details`
--

INSERT INTO `resident_resale_additional_information_details` (`id`, `userID`, `propertyid`, `do_you_have_sale_deed_certificate`, `select_have_you_paid_propery_tax`, `do_you_have_occupancy_certificate`) VALUES
(2, 1, 'RS5ddd1db3dcf86', 'No', 'YES', 'YES'),
(3, 1, 'RS3285581', 'No', 'YES', 'YES'),
(4, 1, 'RS7494606', 'No', 'YES', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `resident_resale_amenities_details`
--

CREATE TABLE `resident_resale_amenities_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
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

--
-- Dumping data for table `resident_resale_amenities_details`
--

INSERT INTO `resident_resale_amenities_details` (`id`, `userID`, `propertyid`, `bathroom`, `balcony`, `water_supply`, `gym`, `power_backup`, `gated_security`, `who_will_show_house`, `secondary_number`, `select_the_amenities_available`) VALUES
(3, 1, 'RS3285581', 0, 0, 'BOREWELL', 'false', 'Partial', 'false', 'NEED_HELP', '54353', 'POOL,FS'),
(4, 1, 'RS7494606', 0, 0, 'BOREWELL', 'false', 'Partial', 'false', 'NEED_HELP', '54353', 'POOL,FS');

-- --------------------------------------------------------

--
-- Table structure for table `resident_resale_gallery_details`
--

CREATE TABLE `resident_resale_gallery_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(222) NOT NULL,
  `upload_images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_resale_gallery_details`
--

INSERT INTO `resident_resale_gallery_details` (`id`, `userID`, `propertyid`, `upload_images`) VALUES
(3, 1, 'RS5ddd1db3dcf86', ''),
(4, 1, 'RS3285581', ''),
(5, 1, 'RS7494606', '');

-- --------------------------------------------------------

--
-- Table structure for table `resident_resale_locality_details`
--

CREATE TABLE `resident_resale_locality_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
  `city` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL,
  `street_addres` varchar(255) NOT NULL,
  `locality_lat` varchar(255) NOT NULL,
  `locality_long` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_resale_locality_details`
--

INSERT INTO `resident_resale_locality_details` (`id`, `userID`, `propertyid`, `city`, `locality`, `street_addres`, `locality_lat`, `locality_long`) VALUES
(3, 1, 'RS5ddd1db3dcf86', 'fgdfd', 'dfgf', 'fdg', '', ''),
(4, 1, 'RS3285581', 'fgdfd', 'dfgf', 'fdg', '', ''),
(7, 1, 'RS7494606', 'fgdfd', 'dfgf', 'fdg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `resident_resale_property_details`
--

CREATE TABLE `resident_resale_property_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
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
(8, 1, 'RS3285581', 'independent', 'gdfg', 'BHK1', '', 345, '0', 'NE', '15', '14', 'value', '4363'),
(11, 1, 'RS7494606', 'independent', 'gdfg', 'BHK1', 'Owned', 5465, '0', 'SE', '14', '14', 'MOSAIC', '4646');

-- --------------------------------------------------------

--
-- Table structure for table `resident_resale_resale_details`
--

CREATE TABLE `resident_resale_resale_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
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

--
-- Dumping data for table `resident_resale_resale_details`
--

INSERT INTO `resident_resale_resale_details` (`id`, `userID`, `propertyid`, `expected_cost`, `maintenance_cost`, `is_price_negotiable`, `is_currently_under_loan`, `no_of_lease_years`, `available_forms`, `furnishing`, `parking`, `kitchen_type`, `description`) VALUES
(3, 1, 'RS5ddd1db3dcf86', 0, 'dfgfd', 'Yes', 'Yes', 'dfg', '12/11/2019', 'FULLY_FURNISHED', 'FOUR_WHEELER', '', 'dfgfd'),
(4, 1, 'RS3285581', 0, 'dfgfd', 'Yes', 'Yes', 'dfg', '12/11/2019', 'FULLY_FURNISHED', 'FOUR_WHEELER', 'MODULAR', 'dfgfd'),
(7, 1, 'RS7494606', 0, 'dfgfd', 'Yes', 'Yes', 'dfg', '12/11/2019', 'FULLY_FURNISHED', 'FOUR_WHEELER', 'COVERED_SHELVES', 'dfgfd');

-- --------------------------------------------------------

--
-- Table structure for table `resident_resale_schedule_details`
--

CREATE TABLE `resident_resale_schedule_details` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `propertyid` varchar(100) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `available_all_day` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_resale_schedule_details`
--

INSERT INTO `resident_resale_schedule_details` (`id`, `userID`, `propertyid`, `availability`, `start_time`, `end_time`, `available_all_day`) VALUES
(2, 1, 'RS5ddd1db3dcf86', 'EVERYDAY', '6:30 PM', '6:30 PM', 'true'),
(3, 1, 'RS3285581', 'EVERYDAY', '6:30 PM', '6:30 PM', 'true'),
(4, 1, 'RS7494606', 'EVERYDAY', '6:30 PM', '6:30 PM', 'true');

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
-- Indexes for table `commercial_rent_additional_information_details`
--
ALTER TABLE `commercial_rent_additional_information_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commercial_rent_amenities_details`
--
ALTER TABLE `commercial_rent_amenities_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commercial_rent_locality_details`
--
ALTER TABLE `commercial_rent_locality_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commercial_rent_photo_details`
--
ALTER TABLE `commercial_rent_photo_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commercial_rent_property_details`
--
ALTER TABLE `commercial_rent_property_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commercial_rent_rental_details`
--
ALTER TABLE `commercial_rent_rental_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commercial_sale_additional_information_details`
--
ALTER TABLE `commercial_sale_additional_information_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commercial_sale_amenities_details`
--
ALTER TABLE `commercial_sale_amenities_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commercial_sale_location_details`
--
ALTER TABLE `commercial_sale_location_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commercial_sale_photo_details`
--
ALTER TABLE `commercial_sale_photo_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commercial_sale_property_details`
--
ALTER TABLE `commercial_sale_property_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commercial_sale_resale_details`
--
ALTER TABLE `commercial_sale_resale_details`
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
-- Indexes for table `resident_flatmates_amenities_details`
--
ALTER TABLE `resident_flatmates_amenities_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_flatmates_gallery_details`
--
ALTER TABLE `resident_flatmates_gallery_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_flatmates_locality_details`
--
ALTER TABLE `resident_flatmates_locality_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_flatmates_property_details`
--
ALTER TABLE `resident_flatmates_property_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_flatmates_rental_details`
--
ALTER TABLE `resident_flatmates_rental_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_flatmates_schedule_details`
--
ALTER TABLE `resident_flatmates_schedule_details`
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
-- Indexes for table `resident_pg_room_details`
--
ALTER TABLE `resident_pg_room_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `resident_pg_schedule_details`
--
ALTER TABLE `resident_pg_schedule_details`
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
-- Indexes for table `resident_rent_schedule_details`
--
ALTER TABLE `resident_rent_schedule_details`
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
-- AUTO_INCREMENT for table `commercial_rent_additional_information_details`
--
ALTER TABLE `commercial_rent_additional_information_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `commercial_rent_amenities_details`
--
ALTER TABLE `commercial_rent_amenities_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `commercial_rent_locality_details`
--
ALTER TABLE `commercial_rent_locality_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `commercial_rent_photo_details`
--
ALTER TABLE `commercial_rent_photo_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `commercial_rent_property_details`
--
ALTER TABLE `commercial_rent_property_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `commercial_rent_rental_details`
--
ALTER TABLE `commercial_rent_rental_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `commercial_sale_additional_information_details`
--
ALTER TABLE `commercial_sale_additional_information_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `commercial_sale_amenities_details`
--
ALTER TABLE `commercial_sale_amenities_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `commercial_sale_location_details`
--
ALTER TABLE `commercial_sale_location_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `commercial_sale_photo_details`
--
ALTER TABLE `commercial_sale_photo_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `commercial_sale_property_details`
--
ALTER TABLE `commercial_sale_property_details`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `commercial_sale_resale_details`
--
ALTER TABLE `commercial_sale_resale_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `last_login`
--
ALTER TABLE `last_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
-- AUTO_INCREMENT for table `resident_flatmates_amenities_details`
--
ALTER TABLE `resident_flatmates_amenities_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resident_flatmates_gallery_details`
--
ALTER TABLE `resident_flatmates_gallery_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resident_flatmates_locality_details`
--
ALTER TABLE `resident_flatmates_locality_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resident_flatmates_property_details`
--
ALTER TABLE `resident_flatmates_property_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resident_flatmates_rental_details`
--
ALTER TABLE `resident_flatmates_rental_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resident_flatmates_schedule_details`
--
ALTER TABLE `resident_flatmates_schedule_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resident_pg_amenities_details`
--
ALTER TABLE `resident_pg_amenities_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resident_pg_gallery_details`
--
ALTER TABLE `resident_pg_gallery_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resident_pg_locality_details`
--
ALTER TABLE `resident_pg_locality_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resident_pg_pg_details`
--
ALTER TABLE `resident_pg_pg_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resident_pg_room_details`
--
ALTER TABLE `resident_pg_room_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resident_pg_schedule_details`
--
ALTER TABLE `resident_pg_schedule_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resident_rent_amenities_details`
--
ALTER TABLE `resident_rent_amenities_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `resident_rent_gallery_details`
--
ALTER TABLE `resident_rent_gallery_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `resident_rent_locality_details`
--
ALTER TABLE `resident_rent_locality_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `resident_rent_property_details`
--
ALTER TABLE `resident_rent_property_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `resident_rent_rental_details`
--
ALTER TABLE `resident_rent_rental_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `resident_rent_ schedule_details`
--
ALTER TABLE `resident_rent_ schedule_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident_rent_schedule_details`
--
ALTER TABLE `resident_rent_schedule_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `resident_resale_additional_information_details`
--
ALTER TABLE `resident_resale_additional_information_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resident_resale_amenities_details`
--
ALTER TABLE `resident_resale_amenities_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resident_resale_gallery_details`
--
ALTER TABLE `resident_resale_gallery_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resident_resale_locality_details`
--
ALTER TABLE `resident_resale_locality_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `resident_resale_property_details`
--
ALTER TABLE `resident_resale_property_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `resident_resale_resale_details`
--
ALTER TABLE `resident_resale_resale_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `resident_resale_schedule_details`
--
ALTER TABLE `resident_resale_schedule_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
