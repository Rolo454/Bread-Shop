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
-- Table structure for table `bread`
--

CREATE TABLE IF NOT EXISTS `bread` (
`breadID` int(11) NOT NULL,
  `breadCategoryID` int(11) NOT NULL,
  `breadCode` varchar(10) NOT NULL,
  `breadName` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `bread`
--

INSERT INTO `bread` (`breadID`, `breadCategoryID`, `breadCode`, `breadName`, `description`, `price`, `dateAdded`) VALUES
(1, 1, 'bagu', 'Baguette', 'A long loaf of bread from France.', 7.00, '2023-10-16 18:21:41'),
(2, 1, 'fice', 'Ficelle', 'Similar to a baguette, however much thinner.', 5.00, '2023-10-16 18:21:41'),
(4, 2, 'naan', 'Naan', 'A leavened flatbread cooked in a clay oven.', 4.50, '2023-10-16 18:21:41'),
(5, 2, 'roti', 'Roti', 'An unleavened flatbread cooked on an iron griddle.', 4.00, '2023-10-16 18:21:41'),
(6, 2, 'puri', 'Puri', 'An unleavened flatbread that is deep-fried.', 5.00, '2023-10-16 18:21:41'),
(7, 3, 'pretz', 'Pretzel', 'A soft bread baked in a knot and flavored with salt.', 4.00, '2023-10-16 18:21:41'),
(8, 3, 'b_brot', 'Bauerbrot', 'A rye bread that''s eaten as the staple loaf in many southern German homes.', 6.00, '2023-10-16 18:21:41'),
(9, 3, 'm_brot', 'Mischbrot', 'A lighter loaf made of a mixed dough that contains both rye and wheat flour', 5.00, '2023-10-16 18:21:41'),
(10, 4, 'n_baton', 'Nareznoy Baton', 'A fluffy, aromatic Russian wheat loaf.', 5.00, '2023-10-16 18:21:41'),
(11, 4, 'bl_rye', 'Black Rye', 'A high-fiber rye bread with a strong flavor and dark color.', 5.00, '2023-10-16 18:21:41'),
(12, 4, 'boro', 'Borodinsky', 'A lighter rye bread sprinkled with cumin.', 5.50, '2023-10-16 18:21:41'),
(13, 5, 'foca', 'Focaccia', 'An oven-baked flatbread with a similar texture and taste to authentic pizza dough.', 6.00, '2023-10-16 18:21:41'),
(14, 5, 'p_tosc', 'Pane Toscano', 'A salt-free loaf from Tuscany best eaten with strong meats or cheeses.', 4.00, '2023-10-16 18:21:41'),
(15, 5, 'ciab', 'Ciabatta', 'An airier, sweeter, and softer version of a French bagueete', 5.50, '2023-10-16 18:21:41'),
(17, 1, 'brioc', 'Brioche', 'A light, fluffy, buttery bread that is good for anything from plain dinner rolls to burgers.', 8.40, '2023-11-17 07:35:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bread`
--
ALTER TABLE `bread`
 ADD PRIMARY KEY (`breadID`), ADD UNIQUE KEY `breadCode` (`breadCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bread`
--
ALTER TABLE `bread`
MODIFY `breadID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
