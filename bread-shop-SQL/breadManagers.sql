-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Nov 17, 2023 at 12:40 PM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rat6`
--

-- --------------------------------------------------------

--
-- Table structure for table `breadManagers`
--

CREATE TABLE IF NOT EXISTS `breadManagers` (
`breadManagerID` int(11) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `breadManagers`
--

INSERT INTO `breadManagers` (`breadManagerID`, `emailAddress`, `password`, `firstName`, `lastName`) VALUES
(1, 'bradpitt@gmail.com', '$2y$10$DHTAxyvEXDx2kKA9yVHnSucMSEaepSTvXbD45NSjKUSi5pZLq48Y2', 'Brad', 'Pitt'),
(2, 'angelinajolie@gmail.com', '$2y$10$v4M3yh1GrW7ekRJNVHcKbeKYKElzQAu6D5OOIiiTAd5eVgq7rCJ66', 'Angelina', 'Jolie'),
(3, 'jamiefoxx@gmail.com', '$2y$10$MO8hPE372L2htTlyXFDyP.xLOPc.Y/Zpd5DhZjt0ARy5/qkiyv6X.', 'Jamie', 'Foxx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breadManagers`
--
ALTER TABLE `breadManagers`
 ADD PRIMARY KEY (`breadManagerID`), ADD UNIQUE KEY `emailAddress` (`emailAddress`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `breadManagers`
--
ALTER TABLE `breadManagers`
MODIFY `breadManagerID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
