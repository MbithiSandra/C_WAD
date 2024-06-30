-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2024 at 01:34 PM
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
-- Database: `thefarm`
--
CREATE DATABASE IF NOT EXISTS `thefarm` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `thefarm`;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `EmployeeID` bigint(10) NOT NULL AUTO_INCREMENT,
  `Fullname` varchar(100) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `EmploymentStatus` varchar(50) NOT NULL,
  PRIMARY KEY (`EmployeeID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `employee`
--

TRUNCATE TABLE `employee`;
--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeID`, `Fullname`, `DateOfBirth`, `JobTitle`, `EmploymentStatus`) VALUES
(1, 'Sandra Mbithi', '1994-06-02', 'Farm Manager', 'Full time'),
(2, 'Mariposa Victor', '1984-05-04', 'Veterinarian', 'Full Time'),
(3, 'Peter Kimani', '1997-09-13', 'Farm Hand', 'Part Time');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `messageId` int(1) NOT NULL AUTO_INCREMENT,
  `sender_name` varchar(60) NOT NULL DEFAULT '',
  `sender_email` varchar(60) NOT NULL DEFAULT '',
  `subject_line` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateupdated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`messageId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `messages`
--

TRUNCATE TABLE `messages`;
-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

DROP TABLE IF EXISTS `trainer`;
CREATE TABLE IF NOT EXISTS `trainer` (
  `TrainerID` varchar(11) NOT NULL,
  `TrainerName` varchar(50) NOT NULL,
  `Specialization` varchar(50) NOT NULL,
  `YearsOfExperience` int(50) NOT NULL,
  `EmploymentStatus` varchar(50) NOT NULL,
  PRIMARY KEY (`TrainerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `trainer`
--

TRUNCATE TABLE `trainer`;
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `UserID` bigint(11) NOT NULL AUTO_INCREMENT,
  `Fullname` varchar(50) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
