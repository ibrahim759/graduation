-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 08:45 PM
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
-- Database: `head`
--

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `id` int(11) NOT NULL,
  `offer1` enum('yes','no') NOT NULL,
  `offer2` enum('yes','no') NOT NULL,
  `offer3` enum('yes','no') NOT NULL,
  `offer4` enum('yes','no') NOT NULL,
  `offer5` enum('yes','no') NOT NULL,
  `offer6` enum('yes','no') NOT NULL,
  `offer7` enum('yes','no') NOT NULL,
  `offer8` enum('yes','no') NOT NULL,
  `_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id`, `offer1`, `offer2`, `offer3`, `offer4`, `offer5`, `offer6`, `offer7`, `offer8`, `_name`) VALUES
(1, 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'zazz'),
(2, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'zazz'),
(3, 'no', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'yes', 'zyzzznn'),
(4, 'yes', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', ',,,,,,,,'),
(5, 'yes', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'd,d,,,,fdd'),
(6, 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', ''),
(7, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', ''),
(8, 'yes', 'yes', 'yes', 'no', 'no', 'no', 'yes', 'no', '&#1605;&#1581;&#1605;&#1583; &#1586;&#1610;&#1583;&#1575;&#1606;');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
