-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 05:07 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customizecake`
--

CREATE TABLE `customizecake` (
  `name` varchar(100) NOT NULL,
  `em` varchar(100) NOT NULL,
  `mobno` varchar(100) NOT NULL,
  `expdte` varchar(100) NOT NULL,
  `rqwt` varchar(100) NOT NULL,
  `requi` varchar(100) NOT NULL,
  `uplimg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customizecake`
--

INSERT INTO `customizecake` (`name`, `em`, `mobno`, `expdte`, `rqwt`, `requi`, `uplimg`) VALUES
('Akanksha', 'kateamol3532@gmail.com', '1234567890', '2021-05-23', '500 gm', 'Big in size and want blueberry cake', 'badge.png'),
('Akanksha', 'kateamol3532@gmail.com', '1234567890', '2021-05-24', '500 gm', 'Want big and photo cake', 'Screenshot (1).png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
