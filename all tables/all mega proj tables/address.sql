-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 05:15 PM
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
-- Database: `shippingadddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `cname` varchar(200) NOT NULL,
  `stret` varchar(200) NOT NULL,
  `housno` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `coun` varchar(100) NOT NULL,
  `pincde` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`cname`, `stret`, `housno`, `city`, `state`, `coun`, `pincde`) VALUES
('Riya', 'Wadgaon', '10', 'mahad', 'Maharashtra', 'India', '411061'),
('Nayna', 'Nagar wadi', '1', 'Pune', 'Maharashtra', 'manik', '411071'),
('Ananya', 'Alughar', '11', 'Palghar', 'Goa', 'India', '411081'),
('Akanksha', 'Anand Nagar', '11', 'Pune', 'Maharashtra', 'Japan', '411051'),
('Akanksha', 'Anand Nagar', '6', 'Pune', 'Maharashtra', 'Japan', '411051'),
('Akanksha', 'Anand Nagar', '10', 'Pune', 'Maharashtra', 'Japan', '411051');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
