-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 05:14 PM
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
-- Database: `regdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `fname` varchar(200) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `passw` varchar(100) NOT NULL,
  `cpassw` varchar(100) NOT NULL,
  `eml` varchar(100) NOT NULL,
  `utype` varchar(100) NOT NULL,
  `cty` varchar(100) NOT NULL,
  `stat` varchar(100) NOT NULL,
  `pinc` varchar(100) NOT NULL,
  `fadd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fname`, `mob`, `passw`, `cpassw`, `eml`, `utype`, `cty`, `stat`, `pinc`, `fadd`) VALUES
('Akanksha', '1234567890', 'Akanksha@123', 'Akanksha@123', 'kateamol3532@gmail.com', 'user', 'Pune', 'Maharashtra', '411051', 'Anand Nagar'),
('Amol ', '3456789023', 'Amol@123', 'Amol@123', 'kateamol.amk@gmail.com', 'user', 'Pune', 'maharashtra', '411051', 'Anand nagar'),
('Akankshak', '43356078124', 'Anvi1025', 'Anvi1025', 'kateamol3532@gmail.com', 'user', 'Pune', 'Maharashtra', '411041', 'Nagar'),
('Riya', '4576239087', 'Riya1234', 'Riya1234', 'riya11@gmail.com', 'user', 'mahad', 'Maharashtra', '411061', 'Wadgaon'),
('Rani', '5676341267', 'Rani0101', 'Rani0101', 'rani001@gmail.com', 'admin', 'Solapur', 'Japan', '411812', 'Raykar Mala');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
