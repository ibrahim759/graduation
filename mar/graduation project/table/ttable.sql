-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2023 at 03:57 AM
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
-- Database: `table`
--

-- --------------------------------------------------------

--
-- Table structure for table `ttable`
--

CREATE TABLE `ttable` (
  `id` int(11) NOT NULL,
  `InfoUser` enum('نعم','لا') NOT NULL,
  `travelcond` enum('نعم','لا') NOT NULL,
  `RightToTravel` enum('نعم','لا') NOT NULL,
  `returneddephead` enum('نعم','لا') NOT NULL,
  `rejected` enum('نعم','لا') NOT NULL,
  `snumber` int(100) NOT NULL,
  `datte` date NOT NULL,
  `nameDepCouncil` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ttable`
--

INSERT INTO `ttable` (`id`, `InfoUser`, `travelcond`, `RightToTravel`, `returneddephead`, `rejected`, `snumber`, `datte`, `nameDepCouncil`) VALUES
(1, 'لا', 'لا', 'لا', 'لا', 'لا', 1, '0000-00-00', 'ابراهيم نصر '),
(2, 'نعم', 'لا', 'لا', 'لا', 'نعم', 2, '0000-00-00', 'ابراهيم نصر '),
(3, 'لا', 'لا', 'لا', 'لا', 'نعم', 4, '0000-00-00', 'ابراهيم نصر '),
(4, 'نعم', 'لا', 'نعم', 'نعم', 'نعم', 4, '0000-00-00', 'ابراهيم نصر '),
(5, 'لا', 'نعم', 'لا', 'لا', 'نعم', 785, '2023-02-02', 'AHMED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ttable`
--
ALTER TABLE `ttable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ttable`
--
ALTER TABLE `ttable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
