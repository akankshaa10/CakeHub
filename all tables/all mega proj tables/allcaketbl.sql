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
-- Table structure for table `allcaketbl`
--

CREATE TABLE `allcaketbl` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `links` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allcaketbl`
--

INSERT INTO `allcaketbl` (`id`, `name`, `code`, `image`, `price`, `links`) VALUES
(1, 'Chocolate Strawberry Cake', 'CS56C', 'product-images/chocostraw.jpg', 500.00, 'forchocolateinfo1.php'),
(2, 'Moist Chocolate Cake', 'MOS8C', 'product-images/chocomoist.jpg', 350.00, 'forchocolateinfo2.php'),
(3, 'Chocolate Caramel Cake', 'CHO00CAR', 'product-images/chococaramel.jpg', 400.00, 'forchocolateinfo3.php'),
(4, 'Chocolate Design Cake', 'DES56', 'product-images/chocodesign.jpg', 800.00, 'forchocolateinfo4.php'),
(5, 'Ice creame Chocolate Cake', '67IC', 'product-images/chocoice.jpg', 800.00, 'forchocolateinfo5.php'),
(6, 'Raspberry Chocolate Cake', 'RASP007', 'product-images/chocorasp.jpg', 400.00, 'forchocolateinfo6.php'),
(7, 'Cherry Chocolate Dry Cake', 'CHER56O', 'product-images/drychoco.jpg', 800.00, 'fordryinfo1.php'),
(8, 'Dry Cake with Dates and Valnuts', 'VAL56V', 'product-images/drypnut.jpg', 1000.00, 'fordryinfo2.php'),
(9, 'Vanilla Almond Dry Cake', 'ALM45B', 'product-images/dryalmond.jpg', 700.00, 'fordryinfo3.php'),
(10, 'Cheese Dry Cake', 'CHES45G', 'product-images/drycheese.jpg', 400.00, 'fordryinfo4.php'),
(11, 'Blueberry Dry Cake', 'BLU56BER97', 'product-images/dryblueber.jpg', 700.00, 'fordryinfo5.php'),
(12, 'Mango Dry Cake', 'MAN09K', 'product-images/drymango.jpg', 400.00, 'fordryinfo6.php'),
(13, 'Eggless Butterscotch Cake', '3DcBS01', 'product-images/egglessbutter.jpg', 500.00, 'foregglessinfo1.php'),
(14, 'Eggless Cardamom Cake', 'CARD02', 'product-images/egglesscardamom.jpg', 400.00, 'foregglessinfo2.php'),
(15, 'Eggless Black Forest Chocolate Cake', 'BLKFOR03', 'product-images/egglessblackfor.jpg', 400.00, 'foregglessinfo3.php'),
(16, 'Eggless Red Velvet Cake', 'REDVEL09', 'product-images/egglessredvelvet.jpg', 700.00, 'foregglessinfo4.php'),
(17, 'Eggless Strawberry Jam Cake', 'STRAW02', 'product-images/egglessstrawberry.jpg', 1000.00, 'foregglessinfo5.php'),
(18, 'Eggless Rose and Pistachio Cake', 'RPC45', 'product-images/egglessrose.jpg', 300.00, 'foregglessinfo6.php'),
(19, 'Panda Cake', 'PAN56', 'product-images/panda.jpg', 500.00, 'forkidsinfo1.php'),
(20, 'Minny Mouse Cake', 'MIN56CA0', 'product-images/minni.jpg', 400.00, 'forkidsinfo2.php'),
(21, 'Barbie Cake', 'BARB011', 'product-images/barbie.jpg', 800.00, 'forkidsinfo3.php'),
(22, 'Minions Cake', 'MINI456', 'product-images/minion.jpg', 700.00, 'forkidsinfo4.php'),
(23, 'Chota Bheem Cake', 'CB5621', 'product-images/bheem.jpg', 1000.00, 'forkidsinfo5.php'),
(24, 'Smiley Cake', 'SM0B5', 'product-images/smiley.jpg', 300.00, 'forkidsinfo6.php'),
(25, 'Chocolate Cake', 'CHOC45C', 'product-images/family.jpg', 350.00, 'forphotoinfo1.php'),
(26, 'Blue Berry Cake', 'BLU00BER', 'product-images/wedding.jpg', 400.00, 'forphotoinfo2.php'),
(27, 'Vanilla Cake', 'VAN11CK', 'product-images/girl.jpg', 400.00, 'forphotoinfo3.php'),
(28, 'Creamy Vanilla Cake', 'CRM090D', 'product-images/sweetgirl.jpg', 500.00, 'forphotoinfo4.php'),
(29, 'Vanilla Blue Berry Mix Cake', 'VAN12BLU', 'product-images/flowergirl.jpg', 700.00, 'forphotoinfo5.php'),
(30, 'Cosmetic Delight Premium Cake', 'COS324D', 'product-images/cosmetic.jpg', 1700.00, 'forpremiuminfo1.php'),
(31, 'Chocolate Overloaded Premium Cake', 'OVR12A', 'product-images/overloaded.jpg', 1600.00, 'forpremiuminfo2.php'),
(32, 'Belgian Chocolate Cherry Premium Cake', 'BEL76B', 'product-images/belgian.jpg', 1000.00, 'forpremiuminfo3.php'),
(33, 'Premium Caramel Chocolate Cake', 'CAR78Z', 'product-images/caramelprem.jpg', 1300.00, 'forpremiuminfo4.php'),
(34, 'Dark Vancho Premium Cake', 'VAN09L', 'product-images/vancho.jpg', 1200.00, 'forpremiuminfo5.php'),
(35, 'Oreo Premium Cake', 'OR0DF', 'product-images/oreo.jpg', 800.00, 'forpremiuminfo6.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allcaketbl`
--
ALTER TABLE `allcaketbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allcaketbl`
--
ALTER TABLE `allcaketbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
