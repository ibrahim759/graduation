-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2023 at 03:58 AM
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
-- Database: `testt`
--

-- --------------------------------------------------------

--
-- Table structure for table `heddep`
--

CREATE TABLE `heddep` (
  `id` int(11) NOT NULL,
  `InfoUser` enum('لا','نعم') NOT NULL,
  `travelCond` enum('لا','نعم') NOT NULL,
  `RightToTravel` enum('لا','نعم') NOT NULL,
  `returneddephead` enum('لا','نعم') NOT NULL,
  `rejected` enum('لا','نعم') NOT NULL,
  `Namedephead` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `heddep`
--

INSERT INTO `heddep` (`id`, `InfoUser`, `travelCond`, `RightToTravel`, `returneddephead`, `rejected`, `Namedephead`) VALUES
(1, '', '', '', '', '', ''),
(2, '', '', '', '', '', ''),
(3, '', '', '', '', '', ''),
(4, '', '', '', '', '', ''),
(5, 'لا', 'لا', 'لا', 'نعم', 'لا', ''),
(6, 'لا', 'نعم', 'لا', 'نعم', 'لا', ''),
(7, 'لا', 'نعم', 'لا', 'نعم', 'لا', ''),
(8, 'لا', 'نعم', 'لا', 'نعم', 'لا', ''),
(9, 'لا', 'لا', 'لا', 'نعم', 'نعم', ''),
(10, 'لا', 'لا', 'لا', 'نعم', 'نعم', ''),
(11, 'لا', 'لا', 'لا', 'لا', 'نعم', ''),
(12, 'لا', 'لا', 'لا', 'لا', 'نعم', ''),
(13, 'نعم', 'نعم', 'لا', 'لا', 'نعم', ''),
(14, 'لا', 'لا', 'لا', 'لا', 'نعم', ''),
(15, 'لا', 'لا', 'لا', 'لا', 'نعم', ''),
(16, 'لا', 'نعم', 'لا', 'لا', 'لا', ''),
(17, 'لا', 'نعم', 'لا', 'نعم', 'لا', ''),
(18, 'نعم', 'لا', 'نعم', 'لا', 'نعم', 'محمد زيدان'),
(19, 'لا', 'لا', 'لا', 'لا', 'لا', 'محمد زيدان'),
(20, 'نعم', 'نعم', 'نعم', 'نعم', 'نعم', 'علي احمد'),
(21, 'نعم', 'نعم', 'نعم', 'لا', 'لا', 'dr mohamed zidan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `heddep`
--
ALTER TABLE `heddep`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `heddep`
--
ALTER TABLE `heddep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
