-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 05:06 PM
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
-- Database: `contactdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `partnertbl`
--

CREATE TABLE `partnertbl` (
  `pname` varchar(100) NOT NULL,
  `pem` varchar(100) NOT NULL,
  `pmobno` varchar(100) NOT NULL,
  `pwsno` varchar(100) NOT NULL,
  `ref` varchar(100) NOT NULL,
  `req` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partnertbl`
--

INSERT INTO `partnertbl` (`pname`, `pem`, `pmobno`, `pwsno`, `ref`, `req`) VALUES
('Akanksha', 'kateamol3532@gmail.com', '1234567890', '8600456223', 'gog', 'Anand Nagar is location'),
('Akanksha', 'kateamol3532@gmail.com', '1234567890', 'xzv', 'selec', 'xcvbz'),
('Akanksha', 'kateamol3532@gmail.com', '1234567890', '1234567890', 'jst', 'asdfdf'),
('Akanksha', 'kateamol3532@gmail.com', '1234567890', '8600456223', 'gog', 'Want franchise');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
