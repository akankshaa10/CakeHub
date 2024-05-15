-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 05:13 PM
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
-- Database: `egglessdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `phototbl`
--

CREATE TABLE `phototbl` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `links` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phototbl`
--

INSERT INTO `phototbl` (`id`, `name`, `code`, `image`, `price`, `links`) VALUES
(1, 'Chocolate Cake', 'CHOC45C', 'product-images/family.jpg', 350.00, 'forphotoinfo1.php'),
(2, 'Blue Berry Cake', 'BLU00BER', 'product-images/wedding.jpg', 400.00, 'forphotoinfo2.php'),
(3, 'Vanilla Cake', 'VAN11CK', 'product-images/girl.jpg', 400.00, 'forphotoinfo3.php'),
(4, 'Creamy Vanilla Cake', 'CRM090D', 'product-images/sweetgirl.jpg', 500.00, 'forphotoinfo4.php'),
(5, 'Vanilla-Blue Berry Mix Cake', 'VAN12BLU', 'product-images/flowergirl.jpg', 700.00, 'forphotoinfo5.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phototbl`
--
ALTER TABLE `phototbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phototbl`
--
ALTER TABLE `phototbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
