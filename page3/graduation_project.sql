-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 10:52 PM
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
-- Database: `graduation project`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_travel`
--

CREATE TABLE `faculty_travel` (
  `id` int(11) NOT NULL,
  `travelFrom` date DEFAULT NULL,
  `travelTo` date DEFAULT NULL,
  `months` int(11) DEFAULT NULL,
  `expense1` varchar(50) DEFAULT NULL,
  `expense2` varchar(50) DEFAULT NULL,
  `expense3` varchar(50) DEFAULT NULL,
  `expense4` varchar(50) DEFAULT NULL,
  `expense5` varchar(50) DEFAULT NULL,
  `ministryApprovalDate` date DEFAULT NULL,
  `committeeApprovalDate` date DEFAULT NULL,
  `publicAdministrationApprovalDate` date DEFAULT NULL,
  `facultyMemberLastTravelDate` date DEFAULT NULL,
  `lastContribution` int(11) DEFAULT NULL,
  `currency` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_travel`
--

INSERT INTO `faculty_travel` (`id`, `travelFrom`, `travelTo`, `months`, `expense1`, `expense2`, `expense3`, `expense4`, `expense5`, `ministryApprovalDate`, `committeeApprovalDate`, `publicAdministrationApprovalDate`, `facultyMemberLastTravelDate`, `lastContribution`, `currency`) VALUES
(0, '2023-12-06', '2023-12-08', 7, 'Ration', 'Ration', 'tickets', 'tickets', 'Ration', '2023-12-25', '2023-12-15', '2023-12-14', '2023-12-19', 2, 'EGP'),
(0, '2023-12-17', '2023-12-22', 3, 'tickets', 'tickets', 'tickets', 'tickets', 'tickets', '2023-12-06', '2023-12-18', '2023-12-30', '2023-12-24', 2, 'EGP');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
