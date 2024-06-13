-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2023 at 09:03 PM
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
-- Database: `scientific_awarding_platform`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_users`
--

CREATE TABLE `faculty_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name_arabic` varchar(50) NOT NULL,
  `name_english` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `birth_place` varchar(100) NOT NULL,
  `national_id` varchar(14) NOT NULL,
  `national_id_expiry` date NOT NULL,
  `passport_number` varchar(50) NOT NULL,
  `passport_issuing_authority` varchar(100) NOT NULL,
  `passport_expiry` date NOT NULL,
  `address` text NOT NULL,
  `doctorate_obtaining_date` date NOT NULL,
  `doctorate_obtaining_destination` varchar(200) NOT NULL,
  `scientific_degree` varchar(50) NOT NULL,
  `current_degree_appointment_date` date NOT NULL,
  `university` varchar(200) NOT NULL,
  `collage` varchar(150) NOT NULL,
  `department` varchar(100) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foreign_host_users`
--

CREATE TABLE `foreign_host_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `travel_date` date DEFAULT NULL,
  `scholarship_duration` varchar(50) DEFAULT NULL,
  `scholarship_beginning` date DEFAULT NULL,
  `scholarship_end` date DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `degree` varchar(100) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `university` varchar(200) DEFAULT NULL,
  `collage` varchar(150) DEFAULT NULL,
  `department` varchar(200) DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `foreign_host_faculty_user` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `orderNumber` int(255) NOT NULL,
  `orderStatus` varchar(255) NOT NULL,
  `serviceName` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_users`
--
ALTER TABLE `faculty_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `national_id` (`national_id`),
  ADD UNIQUE KEY `passport_number` (`passport_number`);

--
-- Indexes for table `foreign_host_users`
--
ALTER TABLE `foreign_host_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `foreign_host_faculty_user` (`foreign_host_faculty_user`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_users`
--
ALTER TABLE `faculty_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foreign_host_users`
--
ALTER TABLE `foreign_host_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foreign_host_users`
--
ALTER TABLE `foreign_host_users`
  ADD CONSTRAINT `foreign_host_faculty_user` FOREIGN KEY (`foreign_host_faculty_user`) REFERENCES `faculty_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
