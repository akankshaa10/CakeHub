-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 05:11 PM
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
-- Table structure for table `drytbl`
--

CREATE TABLE `drytbl` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `links` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drytbl`
--

INSERT INTO `drytbl` (`id`, `name`, `code`, `image`, `price`, `links`) VALUES
(1, 'Cherry Chocolate Dry Cake', 'CHER56O', 'product-images/drychoco.jpg', 800.00, 'fordryinfo1.php'),
(2, 'Dry Cake with Dates and Valnuts', 'VAL56V', 'product-images/drypnut.jpg', 1000.00, 'fordryinfo2.php'),
(3, 'Vanilla Almond Dry Cake', 'ALM45B', 'product-images/dryalmond.jpg', 700.00, 'fordryinfo3.php'),
(4, 'Cheese Dry Cake', 'CHES45G', 'product-images/drycheese.jpg', 400.00, 'fordryinfo4.php'),
(5, 'Blueberry Dry cake', 'BLU56BER97', 'product-images/dryblueber.jpg', 700.00, 'fordryinfo5.php'),
(6, 'Mango Dry Cake', 'MAN09K', 'product-images/drymango.jpg', 400.00, 'fordryinfo6.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drytbl`
--
ALTER TABLE `drytbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drytbl`
--
ALTER TABLE `drytbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
