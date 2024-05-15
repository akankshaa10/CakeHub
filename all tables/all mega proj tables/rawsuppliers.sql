-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 05:09 PM
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
-- Table structure for table `rawsuppliers`
--

CREATE TABLE `rawsuppliers` (
  `suppid` varchar(100) NOT NULL,
  `suppnme` varchar(100) NOT NULL,
  `suppag` varchar(100) NOT NULL,
  `suppgen` varchar(100) NOT NULL,
  `phnno` varchar(100) NOT NULL,
  `suppitm` varchar(100) NOT NULL,
  `bil` varchar(100) NOT NULL,
  `suppdate` varchar(100) NOT NULL,
  `adres` varchar(100) NOT NULL,
  `suppem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rawsuppliers`
--

INSERT INTO `rawsuppliers` (`suppid`, `suppnme`, `suppag`, `suppgen`, `phnno`, `suppitm`, `bil`, `suppdate`, `adres`, `suppem`) VALUES
('1', 'Siya', '18', 'Female', '5676341267', 'Premix', '300', '2021-06-10', 'Raykar Mala', 'siya123@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
