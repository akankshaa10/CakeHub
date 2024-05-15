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
-- Table structure for table `egglesstbl`
--

CREATE TABLE `egglesstbl` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `links` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `egglesstbl`
--

INSERT INTO `egglesstbl` (`id`, `name`, `code`, `image`, `price`, `links`) VALUES
(1, 'Eggless Butterscotch Cake', '3DcBS01', 'product-images/egglessbutter.jpg', 500.00, 'foregglessinfo1.php'),
(2, 'Eggless Cardamom Cake', 'CARD02', 'product-images/egglesscardamom.jpg', 400.00, 'foregglessinfo2.php'),
(3, 'Eggless Black Forest Chocolate Cake', 'BLKFOR03', 'product-images/egglessblackfor.jpg', 400.00, 'foregglessinfo3.php'),
(4, 'Eggless Red Velvet Cake', 'REDVEL09', 'product-images/egglessredvelvet.jpg', 700.00, 'foregglessinfo4.php'),
(5, 'Eggless Strawberry Jam Cake', 'STRAW02', 'product-images/egglessstrawberry.jpg', 1000.00, 'foregglessinfo5.php'),
(6, 'Eggless Rose and Pistachio Cake', 'RPC45', 'product-images/egglessrose.jpg', 300.00, 'foregglessinfo6.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `egglesstbl`
--
ALTER TABLE `egglesstbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `egglesstbl`
--
ALTER TABLE `egglesstbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
