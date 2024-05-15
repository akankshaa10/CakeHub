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
-- Database: `customerdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `custid` varchar(100) NOT NULL,
  `custnme` varchar(200) NOT NULL,
  `custag` varchar(100) NOT NULL,
  `custgen` varchar(100) NOT NULL,
  `phno` varchar(100) NOT NULL,
  `dte` varchar(100) NOT NULL,
  `cakenm` varchar(100) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `custem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`custid`, `custnme`, `custag`, `custgen`, `phno`, `dte`, `cakenm`, `cost`, `addr`, `custem`) VALUES
('', '', '', '', '', '', '', '', '', ''),
('1', 'Akanksha', '25', 'Female', '1234567890', '2021-06-10', 'Butterscotch Cake', '500', 'Anand Nagar', 'kateamol3532@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
