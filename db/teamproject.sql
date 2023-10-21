-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 03:09 PM
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
-- Database: `teamproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `Activity` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Farmer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fdetails`
--

CREATE TABLE `fdetails` (
  `femail` varchar(40) NOT NULL,
  `fpassword` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fdetails`
--

INSERT INTO `fdetails` (`femail`, `fpassword`) VALUES
('ronomathew21@gmail.com', 'Kibet123'),
('korir@gmail.com', 'Korir123'),
('ronomathew21@gmail.com', '383471'),
('jk@gmail.com', 'Jk123'),
('ronomathew21@gmail.com', '383471'),
('ronomathew21@gmail.co', 'Kibet123'),
('ronomathew21@gmail.com', '383471'),
('kibett@gmail.com', '12345'),
('kibett@gmail.com', '12345'),
('', ''),
('ronomathew21@gmail.com', 'kibet123');

-- --------------------------------------------------------

--
-- Table structure for table `finfo`
--

CREATE TABLE `finfo` (
  `fname` varchar(30) NOT NULL,
  `femail` varchar(40) NOT NULL,
  `fnumber` int(10) NOT NULL,
  `fgender` varchar(6) NOT NULL,
  `fdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `finfo`
--

INSERT INTO `finfo` (`fname`, `femail`, `fnumber`, `fgender`, `fdate`) VALUES
('Kibet', 'ronomathew21@gmail.com', 723434454, 'male', '2023-07-18'),
('Kibet', 'ronomathew21@gmail.com', 723434454, 'male', '2023-07-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
