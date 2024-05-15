-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 05:12 PM
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
-- Table structure for table `kidstbl`
--

CREATE TABLE `kidstbl` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `links` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kidstbl`
--

INSERT INTO `kidstbl` (`id`, `name`, `code`, `image`, `price`, `links`) VALUES
(1, 'Panda Cake', 'PAN56', 'product-images/panda.jpg', 500.00, 'forkidsinfo1.php'),
(2, 'Minny Mouse Cake', 'MIN56CA0', 'product-images/minni.jpg', 400.00, 'forkidsinfo2.php'),
(3, 'Barbie Cake', 'BARB011', 'product-images/barbie.jpg', 800.00, 'forkidsinfo3.php'),
(4, 'Minions Cake', 'MINI456', 'product-images/minion.jpg', 700.00, 'forkidsinfo4.php'),
(5, 'Chota Bheem Cake', 'CB5621', 'product-images/bheem.jpg', 1000.00, 'forkidsinfo5.php'),
(6, 'Smiley Cake', 'SM0B5', 'product-images/smiley.jpg', 300.00, 'forkidsinfo6.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kidstbl`
--
ALTER TABLE `kidstbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kidstbl`
--
ALTER TABLE `kidstbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
