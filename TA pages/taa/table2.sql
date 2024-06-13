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
-- Database: `table2`
--

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE `table2` (
  `id` int(11) NOT NULL,
  `offer1` enum('yes','no') NOT NULL,
  `offer2` enum('yes','no') NOT NULL,
  `offer3` enum('yes','no') NOT NULL,
  `offer4` enum('yes','no') NOT NULL,
  `offer5` enum('yes','no') NOT NULL,
  `offer6` enum('yes','no') NOT NULL,
  `offer7` enum('yes','no') NOT NULL,
  `_number` int(11) NOT NULL,
  `_date` date NOT NULL,
  `namedean` varchar(255) NOT NULL,
  `namevice` varchar(255) NOT NULL,
  `_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table2`
--

INSERT INTO `table2` (`id`, `offer1`, `offer2`, `offer3`, `offer4`, `offer5`, `offer6`, `offer7`, `_number`, `_date`, `namedean`, `namevice`, `_name`) VALUES
(1, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 0, '0000-00-00', '12/16/2020', 'llllll', 'nnnnnnnnnnnnnnn'),
(2, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 0, '0000-00-00', 'ooooo', '12/16/2020', 'nnnnnnnnnnnnnnn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table2`
--
ALTER TABLE `table2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table2`
--
ALTER TABLE `table2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
