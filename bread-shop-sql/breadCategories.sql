-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Oct 21, 2023 at 12:37 AM
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
-- Table structure for table `breadCategories`
--

CREATE TABLE IF NOT EXISTS `breadCategories` (
`breadCategoryID` int(11) NOT NULL,
  `breadCategoryName` varchar(255) NOT NULL,
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `breadCategories`
--

INSERT INTO `breadCategories` (`breadCategoryID`, `breadCategoryName`, `dateAdded`) VALUES
(1, 'French', '2023-10-16 18:21:41'),
(2, 'Indian', '2023-10-16 18:21:41'),
(3, 'German', '2023-10-16 18:21:41'),
(4, 'Russian', '2023-10-16 18:21:41'),
(5, 'Italian', '2023-10-16 18:21:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breadCategories`
--
ALTER TABLE `breadCategories`
 ADD PRIMARY KEY (`breadCategoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `breadCategories`
--
ALTER TABLE `breadCategories`
MODIFY `breadCategoryID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
