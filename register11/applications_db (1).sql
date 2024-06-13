-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 07:51 AM
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
-- Database: `applications_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `conditions`
--

CREATE TABLE `conditions` (
  `id` int(11) NOT NULL,
  `offer1` enum('yes','no') NOT NULL,
  `offer2` enum('yes','no') NOT NULL,
  `offer3` enum('yes','no') NOT NULL,
  `offer4` enum('yes','no') NOT NULL,
  `offer5` enum('yes','no') NOT NULL,
  `offer6` enum('yes','no') NOT NULL,
  `offer7` enum('yes','no') NOT NULL,
  `name` varchar(10) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conditions`
--

INSERT INTO `conditions` (`id`, `offer1`, `offer2`, `offer3`, `offer4`, `offer5`, `offer6`, `offer7`, `name`, `status`) VALUES
(16, '', '', '', '', '', '', '', '', ''),
(17, '', '', '', '', '', '', '', '', ''),
(18, '', '', '', '', '', '', '', '', ''),
(19, '', '', '', '', '', '', '', '', ''),
(20, 'yes', 'yes', '', '', '', '', '', '', ''),
(21, 'yes', 'yes', '', '', '', '', '', '', ''),
(22, '', '', '', '', '', '', '', '', ''),
(23, 'yes', 'yes', '', '', '', '', '', '', ''),
(24, '', '', '', '', '', '', '', '', ''),
(26, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'mariam', ''),
(27, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'mariam', '');

-- --------------------------------------------------------

--
-- Table structure for table `page2`
--

CREATE TABLE `page2` (
  `id` int(11) NOT NULL,
  `offer1` enum('yes','no') NOT NULL,
  `offer2` enum('yes','no') NOT NULL,
  `offer3` enum('yes','no') NOT NULL,
  `offer4` enum('yes','no') NOT NULL,
  `offer5` enum('yes','no') NOT NULL,
  `offer6` enum('yes','no') NOT NULL,
  `Sessionnumber` int(10) NOT NULL,
  `SessionDate` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page2`
--

INSERT INTO `page2` (`id`, `offer1`, `offer2`, `offer3`, `offer4`, `offer5`, `offer6`, `Sessionnumber`, `SessionDate`, `name`, `status`) VALUES
(2, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 2002029, '2023-12-11', 'مريم سيد', ''),
(3, 'no', 'no', 'no', 'no', 'no', 'no', 2215892, '2023-12-06', 'نوسا', ''),
(4, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 1234, '2023-12-19', 'mariam', ''),
(5, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 1234, '2023-12-19', 'mariam', ''),
(6, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 1234, '2023-12-19', 'mariam', ''),
(7, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 1234, '2023-12-19', 'mariam', ''),
(8, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 1234, '2023-12-12', 'mariam', ''),
(9, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 1234, '2023-12-12', 'mariam', ''),
(10, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 12234, '2023-12-19', 'maiam', ''),
(11, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 12234, '2023-12-19', 'maiam', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conditions`
--
ALTER TABLE `conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page2`
--
ALTER TABLE `page2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conditions`
--
ALTER TABLE `conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `page2`
--
ALTER TABLE `page2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
