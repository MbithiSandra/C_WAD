-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2024 at 07:35 PM
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
-- Table structure for table `event_bookings`
--

DROP TABLE IF EXISTS `event_bookings`;
CREATE TABLE IF NOT EXISTS `event_bookings` (
  `bookingId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `phone` varchar(20) NOT NULL,
  `event_date` date NOT NULL,
  `event_type` enum('Wedding','Graduation party','Birthday party','team building','wine tasting','other') DEFAULT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateupdated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`bookingId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `event_bookings`
--

TRUNCATE TABLE `event_bookings`;
-- --------------------------------------------------------

--
-- Table structure for table `farmtours`
--

DROP TABLE IF EXISTS `farmtours`;
CREATE TABLE IF NOT EXISTS `farmtours` (
  `farmtourId` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `phone` varchar(20) NOT NULL,
  `date_of_tour` date NOT NULL,
  `knowledge_level` enum('Basic','Intermediate','Advanced') DEFAULT NULL,
  `language_spoken` enum('Swahili','English','Spanish','Japanese') DEFAULT NULL,
  `gender` enum('Female','Male','Rather not say') DEFAULT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateupdated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`farmtourId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `farmtours`
--

TRUNCATE TABLE `farmtours`;
--
-- Dumping data for table `farmtours`
--

INSERT INTO `farmtours` (`farmtourId`, `name`, `email`, `phone`, `date_of_tour`, `knowledge_level`, `language_spoken`, `gender`, `datecreated`, `dateupdated`) VALUES
(7, 'Sandra Mariposa', 'SandraMariposa@gmail.com', '0730504050', '2024-07-20', 'Advanced', 'Japanese', 'Male', '2024-07-06 19:58:58', '2024-07-06 19:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `messageId` int(1) NOT NULL,
  `sender_name` varchar(60) NOT NULL DEFAULT '',
  `sender_email` varchar(60) NOT NULL DEFAULT '',
  `subject_line` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateupdated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`messageId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `messages`
--

TRUNCATE TABLE `messages`;
--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messageId`, `sender_name`, `sender_email`, `subject_line`, `message`, `datecreated`, `dateupdated`) VALUES
(0, 'Peter ', 'Peter123@gmail.com', 'AMS Support', 'PLEASE', '2024-07-06 12:15:31', '2024-07-06 12:15:31');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `productId` int(1) NOT NULL AUTO_INCREMENT,
  `sender_name` varchar(60) NOT NULL DEFAULT '',
  `sender_email` varchar(60) NOT NULL DEFAULT '',
  `phone_number` varchar(60) NOT NULL DEFAULT '',
  `product_name` varchar(60) NOT NULL DEFAULT '',
  `quantity` text DEFAULT NULL,
  `price` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateupdated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`productId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `products`
--

TRUNCATE TABLE `products`;
--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `sender_name`, `sender_email`, `phone_number`, `product_name`, `quantity`, `price`, `description`, `datecreated`, `dateupdated`) VALUES
(2, 'Sandra Mariposa', 'SandraMariposa@gmail.com', '0730504050', 'Chicken', '500g', '400', 'Whole', '2024-07-06 18:00:42', '2024-07-06 18:00:42');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Fullname`, `Email`, `Username`, `Password`) VALUES
(1, 'Clara Hamilton', 'clarahamilton@gmail.com', 'clara', '$2y$10$3GittQCG./HmcN4.QSWSOu9duALrrKCswuBt0uId1wz');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
