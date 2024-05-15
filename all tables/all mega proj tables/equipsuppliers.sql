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
-- Table structure for table `equipsuppliers`
--

CREATE TABLE `equipsuppliers` (
  `supid` varchar(100) NOT NULL,
  `supnme` varchar(100) NOT NULL,
  `supage` varchar(100) NOT NULL,
  `supgend` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `supitem` varchar(100) NOT NULL,
  `totbil` varchar(100) NOT NULL,
  `supdte` varchar(100) NOT NULL,
  `addres` varchar(100) NOT NULL,
  `supeml` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipsuppliers`
--

INSERT INTO `equipsuppliers` (`supid`, `supnme`, `supage`, `supgend`, `phone`, `supitem`, `totbil`, `supdte`, `addres`, `supeml`) VALUES
('1', 'Manav', '25', 'Male', '8976543212', 'Spatula', '800', '2021-06-10', 'Manik Chowk', 'manav56@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
