-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 05:04 PM
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
-- Database: `checkoutdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `cardname` varchar(100) NOT NULL,
  `cardnumber` varchar(100) NOT NULL,
  `cardtyp` varchar(100) NOT NULL,
  `expmonth` varchar(100) NOT NULL,
  `expyear` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL,
  `amtpd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`cardname`, `cardnumber`, `cardtyp`, `expmonth`, `expyear`, `cvv`, `amtpd`) VALUES
('Amol Madhukar Kate', '4444222277775555', 'visa', '2021-08', '2037', '098', ''),
('Amol Madhukar Kate', '222233334445555', 'visa', '2021-07', '2028', '987', ''),
('Akanksha Amol Kate', '1111333344444', 'visa', '2021-06', '2024', '123', ''),
('Amol Madhukar Kate', '1111333333444445', 'disc', '2021-06', '2028', '456', ''),
('Amol Madhukar Kate', '4444555566667777', 'amexx', '2021-06', '2024', '456', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
