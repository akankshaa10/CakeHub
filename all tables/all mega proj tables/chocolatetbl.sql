-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 05:10 PM
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
-- Table structure for table `chocolatetbl`
--

CREATE TABLE `chocolatetbl` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `links` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chocolatetbl`
--

INSERT INTO `chocolatetbl` (`id`, `name`, `code`, `image`, `price`, `links`) VALUES
(1, 'Chocolate Strawberry Cake', 'CS56C', 'product-images/chocostraw.jpg', 500.00, 'forchocolateinfo1.php'),
(2, 'Moist Chocolate Cake', 'MOS8C', 'product-images/chocomoist.jpg', 350.00, 'forchocolateinfo2.php'),
(3, 'Chocolate Caramel Cake', 'CHO00CAR', 'product-images/chococaramel.jpg', 400.00, 'forchocolateinfo3.php'),
(4, 'Chocolate Design Cake', 'DES56', 'product-images/chocodesign.jpg', 800.00, 'forchocolateinfo4.php'),
(5, 'Ice creame Chocolate Cake', '67IC', 'product-images/chocoice.jpg', 800.00, 'forchocolateinfo5.php'),
(6, 'Raspberry Chocolate Cake', 'RASP007', 'product-images/chocorasp.jpg', 400.00, 'forchocolateinfo6.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chocolatetbl`
--
ALTER TABLE `chocolatetbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chocolatetbl`
--
ALTER TABLE `chocolatetbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
