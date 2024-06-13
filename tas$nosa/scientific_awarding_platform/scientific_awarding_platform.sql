-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2024 at 11:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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

--
-- Dumping data for table `faculty_users`
--

INSERT INTO `faculty_users` (`id`, `name_arabic`, `name_english`, `birthday`, `birth_place`, `national_id`, `national_id_expiry`, `passport_number`, `passport_issuing_authority`, `passport_expiry`, `address`, `doctorate_obtaining_date`, `doctorate_obtaining_destination`, `scientific_degree`, `current_degree_appointment_date`, `university`, `collage`, `department`, `postal_code`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'يوسف ايمن', 'Yousif Ayman', '1997-12-24', 'أسيوط', '29712241545645', '2024-01-11', 'A12345', 'Assiut', '2024-02-02', 'أسيوط', '2024-01-11', 'أسيوط', 'رئيس الجامعة', '2024-01-12', 'EELU', 'IT', 'IT', 123456, '01011836243', 'yewess97@gmail.com', '2024-01-07 22:19:20', '2024-01-07 20:15:12');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_user_travel_data`
--

CREATE TABLE `faculty_user_travel_data` (
  `id` int(10) UNSIGNED NOT NULL,
  `travel_from_date` date DEFAULT NULL,
  `travel_to_date` date DEFAULT NULL,
  `months_num` int(11) DEFAULT NULL,
  `south_valley_university_expense` varchar(100) DEFAULT NULL,
  `foreign_university_expense` varchar(100) DEFAULT NULL,
  `private_expense` varchar(100) DEFAULT NULL,
  `ministry_expense` varchar(100) DEFAULT NULL,
  `other_expense` varchar(100) DEFAULT NULL,
  `ministry_approval_date` date DEFAULT NULL,
  `committee_approval_date` date DEFAULT NULL,
  `public_administration_approval_date` date DEFAULT NULL,
  `last_travel_date` date DEFAULT NULL,
  `last_contribution` int(11) DEFAULT NULL,
  `currency` varchar(50) DEFAULT NULL,
  `faculty_user` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_user_travel_data`
--

INSERT INTO `faculty_user_travel_data` (`id`, `travel_from_date`, `travel_to_date`, `months_num`, `south_valley_university_expense`, `foreign_university_expense`, `private_expense`, `ministry_expense`, `other_expense`, `ministry_approval_date`, `committee_approval_date`, `public_administration_approval_date`, `last_travel_date`, `last_contribution`, `currency`, `faculty_user`, `created_at`, `updated_at`) VALUES
(1, '2024-01-18', '2024-01-05', 8, 'تذاكر', 'إقامة', 'إعاشة', 'راتب شهري', 'تذاكر', '2024-02-21', '2024-01-26', '2024-02-09', '2024-02-05', 7, 'دولار', 1, '2024-01-07 20:15:13', '2024-01-07 20:15:13');

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

--
-- Dumping data for table `foreign_host_users`
--

INSERT INTO `foreign_host_users` (`id`, `travel_date`, `scholarship_duration`, `scholarship_beginning`, `scholarship_end`, `name`, `degree`, `country`, `city`, `university`, `collage`, `department`, `postal_code`, `phone`, `email`, `foreign_host_faculty_user`, `created_at`, `updated_at`) VALUES
(1, '2024-01-17', '3 شهور', '2024-01-10', '2024-01-29', 'تسنيم خالد', 'عميدة الكلية', 'مصر', 'الفيوم', 'EELU', 'IT', 'IT', 12345, '01189234578', 'tasneem@mail.com', 1, '2024-01-07 20:15:12', '2024-01-07 20:15:12');

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
-- Indexes for table `faculty_user_travel_data`
--
ALTER TABLE `faculty_user_travel_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculty_user` (`faculty_user`);

--
-- Indexes for table `foreign_host_users`
--
ALTER TABLE `foreign_host_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `foreign_host_faculty_user` (`foreign_host_faculty_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_users`
--
ALTER TABLE `faculty_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty_user_travel_data`
--
ALTER TABLE `faculty_user_travel_data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `foreign_host_users`
--
ALTER TABLE `foreign_host_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faculty_user_travel_data`
--
ALTER TABLE `faculty_user_travel_data`
  ADD CONSTRAINT `faculty_user` FOREIGN KEY (`faculty_user`) REFERENCES `faculty_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `foreign_host_users`
--
ALTER TABLE `foreign_host_users`
  ADD CONSTRAINT `foreign_host_faculty_user` FOREIGN KEY (`foreign_host_faculty_user`) REFERENCES `faculty_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
