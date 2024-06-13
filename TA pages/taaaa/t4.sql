-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 08:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `t4`
--

-- --------------------------------------------------------

--
-- Table structure for table `table4`
--

CREATE TABLE `table4` (
  `id` int(11) NOT NULL,
  `offer1` enum('yes','no') NOT NULL,
  `offer2` enum('yes','no') NOT NULL,
  `offer3` enum('yes','no') NOT NULL,
  `offer4` enum('yes','no') NOT NULL,
  `offer5` enum('yes','no') NOT NULL,
  `offer6` enum('yes','no') NOT NULL,
  `offer7` enum('yes','no') NOT NULL,
  `offer8` enum('yes','no') NOT NULL,
  `offer9` enum('yes','no') NOT NULL,
  `_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table4`
--

INSERT INTO `table4` (`id`, `offer1`, `offer2`, `offer3`, `offer4`, `offer5`, `offer6`, `offer7`, `offer8`, `offer9`, `_name`) VALUES
(0, 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', '&#1605;&#1581;&#1605;&#1583; &#1586;&#1610;&#1583;&#1575;&#1606;'),
(0, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '&#1605;&#1581;&#1605;&#1583; &#1586;&#1610;&#1583;&#1575;&#1606;'),
(0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '&#1601;&#1601;&#1601;&#1601;&#1601;'),
(0, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'yes', '&#1588;&#1579;&#1590;&#1590;&#1590;&#1590;&#1590;&#1590;&#1590;&#1590;'),
(0, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'yes', '&#1588;&#1579;&#1590;&#1590;&#1590;&#1590;&#1590;&#1590;&#1590;&#1590;');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
