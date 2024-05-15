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
-- Table structure for table `premiumtbl`
--

CREATE TABLE `premiumtbl` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `links` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `premiumtbl`
--

INSERT INTO `premiumtbl` (`id`, `name`, `code`, `image`, `price`, `links`) VALUES
(1, 'Cosmetic Delight Premium Cake', 'COS324D', 'product-images/cosmetic.jpg', 1700.00, 'forpremiuminfo1.php'),
(2, 'Chocolate Overloaded Premium Cake', 'OVR12A', 'product-images/overloaded.jpg', 1600.00, 'forpremiuminfo2.php'),
(3, 'Belgian Chocolate Cherry Premium Cake', 'BEL76B', 'product-images/belgian.jpg', 1000.00, 'forpremiuminfo3.php'),
(4, 'Premium Caramel Chocolate Cake', 'CAR78Z', 'product-images/caramelprem.jpg', 1300.00, 'forpremiuminfo4.php'),
(5, 'Dark Vancho Premium Cake', 'VAN09L', 'product-images/vancho.jpg', 1200.00, 'forpremiuminfo5.php'),
(6, 'Orao Premium Cake', 'OR0DF', 'product-images/oreo.jpg', 800.00, 'forpremiuminfo6.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `premiumtbl`
--
ALTER TABLE `premiumtbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `premiumtbl`
--
ALTER TABLE `premiumtbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
