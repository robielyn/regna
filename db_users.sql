-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2023 at 10:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `activityName` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `dateOfActivity` date NOT NULL,
  `timeOfActivity` time NOT NULL,
  `ootd` varchar(255) NOT NULL,
  `userID` int(11) NOT NULL,
  `remarks` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `activityName`, `location`, `dateOfActivity`, `timeOfActivity`, `ootd`, `userID`, `remarks`, `created_at`) VALUES
(1, 'badmidton', 'nug-as', '2023-10-03', '24:46:20', 'disney princess', 15, 'done', '2023-10-14 07:47:57');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `text` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `text`, `created_at`) VALUES
(1, 'tatata', '2023-10-14 07:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `gender`, `address`, `email`, `password`, `role`, `status`) VALUES
(1, 'rov', 'pardero', 'Female', 'talamban', 'rov@gmail.com', 'rove', 'admin', 'admin'),
(15, 'carmel', 'sombilon', 'Female', 'argao', 'carms@gmail.com', '123', 'user', 'active'),
(16, 'paul', 'henry', 'Male', 'bantayan', 'paul@gmail.com', '123', 'user', NULL),
(17, 'carmel', 'sombilon', 'Male', 'argao', 'rov@gmail.com', '123', 'user', ''),
(18, 'carmel', 'sombilon', 'Female', 'argao', 'rov@gmail.com', '123', 'user', 'active'),
(19, 'carmel', 'sombilon', 'Male', 'argao', 'rov@gmail.com', '123', 'user', ''),
(20, 'carmel', 'sombilon', 'Female', 'argao', 'rov@gmail.com', '123', 'user', 'active'),
(21, 'carmel', 'sombilon', 'Male', 'argao', 'rov@gmail.com', '123', 'user', ''),
(22, 'carmel', 'sombilon', 'Male', 'argao', 'rov@gmail.com', '123', 'user', ''),
(23, 'carmel', 'sombilon', 'Male', 'argao', 'rov@gmail.com', '123', 'user', ''),
(24, 'carmel', 'sombilon', 'Male', 'argao', 'rov@gmail.com', '123', 'user', ''),
(25, 'carmel', 'sombilon', 'Male', 'argao', 'rov@gmail.com', '123', 'user', ''),
(26, 'carmel', 'sombilon', 'Male', 'argao', 'rov@gmail.com', '123', 'user', ''),
(27, 'carmel', 'sombilon', 'Male', 'argao', 'rov@gmail.com', '123', 'user', ''),
(28, 'carmel', 'sombilon', 'Male', 'argao', 'rov@gmail.com', '123', 'user', ''),
(29, 'carmel', 'sombilon', 'Male', 'argao', 'rov@gmail.com', '123', 'user', ''),
(30, 'carmel', 'sombilon', 'Male', 'argao', 'rov@gmail.com', '123', 'user', ''),
(31, 'carmel', 'sombilon', 'Male', 'argao', 'rov@gmail.com', '123', 'user', ''),
(32, 'carmel', 'sombilon', 'Male', 'argao', 'rov@gmail.com', '123', 'user', 'active'),
(33, 'carmel', 'sombilon', 'Female', 'argao', 'rov@gmail.com', '123', 'user', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
