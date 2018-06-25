-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2018 at 09:22 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edostava`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(15) NOT NULL,
  `product_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_code`, `product_name`, `product_desc`, `price`, `units`, `total`, `date`, `email`) VALUES
(12, 'BOLT2', 'Srednja Pizza', 'Srednja pizza sa raznim prilozima. Savrsena za 2 osobe. \r\nPromjer: 40cm', 10, 1, 10, '2018-06-20 14:14:47', 'sjobs@apple.com'),
(13, 'BOLT2', 'Srednja Pizza', 'Srednja pizza sa raznim prilozima. Savrsena za 2 osobe. \r\nPromjer: 40cm', 10, 1, 10, '2018-06-20 14:16:21', 'sjobs@apple.com'),
(14, 'BOLT1', 'Jumbo Pizza', 'Jumbo pizza sa raznim prilozima po zelji. Savrsena za 4 osobe. \r\nPromjer: 60cm', 15, 1, 15, '2018-06-20 16:12:47', 'sjobs@apple.com'),
(15, 'BOLT6', 'Coca-Cola 0,5l', 'Osvjezavajuca Coca-Cola sa ledom.', 2, 1, 2, '2018-06-20 16:12:47', 'sjobs@apple.com'),
(16, 'BOLT1', 'Jumbo Pizza', 'Jumbo pizza sa raznim prilozima po zelji. Savrsena za 4 osobe. \r\nPromjer: 60cm', 15, 1, 15, '2018-06-20 16:13:08', 'sjobs@apple.com'),
(17, 'BOLT6', 'Coca-Cola 0,5l', 'Osvjezavajuca Coca-Cola sa ledom.', 2, 5, 10, '2018-06-20 16:31:21', 'sjobs@apple.com'),
(18, 'BOLT1', 'Jumbo Pizza', 'Jumbo pizza sa raznim prilozima po zelji. Savrsena za 4 osobe. \r\nPromjer: 60cm', 15, 1, 15, '2018-06-20 16:37:58', 'sjobs@apple.com'),
(19, 'BOLT2', 'Srednja Pizza', 'Srednja pizza sa raznim prilozima. Savrsena za 2 osobe. \r\nPromjer: 40cm', 10, 1, 10, '2018-06-20 16:37:58', 'sjobs@apple.com'),
(20, 'BOLT3', 'Mala Pizza', 'Mala pizza sa raznim prilozima po zelji. Savrsena za 1 osobu. \r\nPromjer: 30cm', 7, 1, 7, '2018-06-20 17:03:06', 'sjobs@apple.com'),
(21, 'BOLT16', 'Pomfrit', 'Broj 1 prilog uz svaku hranu.', 2, 1, 2, '2018-06-20 17:06:27', 'sjobs@apple.com'),
(22, 'BOLT1', 'Jumbo Pizza', 'Jumbo pizza sa raznim prilozima po zelji. Savrsena za 4 osobe. \r\nPromjer: 60cm', 15, 1, 15, '2018-06-20 17:16:06', 'sjobs@apple.com'),
(23, 'BOLT2', 'Srednja Pizza', 'Srednja pizza sa raznim prilozima. Savrsena za 2 osobe. \r\nPromjer: 40cm', 10, 1, 10, '2018-06-20 17:30:22', 'ante959@gmail.com'),
(24, 'BOLT16', 'Pomfrit', 'Broj 1 prilog uz svaku hranu.', 2, 1, 2, '2018-06-20 18:02:03', 'admin@admin.com'),
(25, 'BOLT6', 'Coca-Cola 0,5l', 'Osvjezavajuca Coca-Cola sa ledom.', 2, 1, 2, '2018-06-20 18:12:32', 'ante959@gmail.com'),
(26, 'BOLT16', 'Pomfrit', 'Broj 1 prilog uz svaku hranu.', 2, 1, 2, '2018-06-20 18:12:32', 'ante959@gmail.com'),
(27, 'BOLT1', 'Jumbo Pizza', 'Jumbo pizza sa raznim prilozima po zelji. Savrsena za 4 osobe. \r\nPromjer: 60cm', 15, 1, 15, '2018-06-20 18:12:55', 'ante959@gmail.com'),
(28, 'BOLT1', 'Jumbo Pizza', 'Jumbo pizza sa raznim prilozima po zelji. Savrsena za 4 osobe. \r\nPromjer: 60cm', 15, 1, 15, '2018-06-20 18:13:22', 'ante959@gmail.com'),
(29, 'BOLT6', 'Coca-Cola 0,5l', 'Osvjezavajuca Coca-Cola sa ledom.', 2, 1, 2, '2018-06-20 18:13:22', 'ante959@gmail.com'),
(30, 'BOLT1', 'Jumbo Pizza', 'Jumbo pizza sa raznim prilozima po zelji. Savrsena za 4 osobe. \r\nPromjer: 60cm', 15, 2, 30, '2018-06-20 19:18:11', 'ante959@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_type` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_desc` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_img_name` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_type`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(1, 'BOLT1', 'Jumbo Pizza', 'pizza', 'Jumbo pizza sa raznim prilozima po zelji. Savrsena za 4 osobe. \r\nPromjer: 60cm', 'jumbo_pizza.jpg', 92, '15.00'),
(2, 'BOLT2', 'Srednja Pizza', 'pizza', 'Srednja pizza sa raznim prilozima. Savrsena za 2 osobe. \r\nPromjer: 40cm', 'pizza1.jpg', 96, '10.00'),
(3, 'BOLT3', 'Mala Pizza', 'pizza', 'Mala pizza sa raznim prilozima po zelji. Savrsena za 1 osobu. \r\nPromjer: 30cm', 'mala_pizza.jpg', 99, '7.00'),
(4, 'BOLT4', 'Hamburger', 'burger', '\'Americki\' originalni hamburger.', 'hamburger1.jpg', 100, '5.00'),
(5, 'BOLT5', 'Cheeseburger', 'burger', '\'Americki\' originalni cheeseburger.', 'cheeseburger.jpg', 100, '5.00'),
(8, 'BOLT6', 'Coca-Cola 0,5l', 'pice', 'Osvjezavajuca Coca-Cola sa ledom.', 'cocacola05.jpg', 220, '2.00'),
(9, 'BOLT7', 'Fanta 0,5l', 'pice', 'Osvjezavajuca Fanta sa ledom.', 'fanta05.jpg', 100, '2.00'),
(10, 'BOLT8', 'Sprite 0,5l', 'pice', 'Osvjezavajuci Sprite s ledom.', 'sprite05.jpg', 100, '2.00'),
(11, 'BOLT9', 'Coca-Cola 0,33l', 'pice', 'Osvjezavajuca Coca-Cola s ledom.', 'cocacola03.jpg', 100, '1.00'),
(12, 'BOLT10', 'Fanta 0,33l', 'pice', 'Osvjezavajuca Fanta sa ledom.', 'fanta03.jpg', 100, '1.00'),
(13, 'BOLT11', 'Sprite 0,33l', 'pice', 'Osvjezavajuci Sprite sa ledom.', 'sprite03.jpg', 100, '1.00'),
(14, 'BOLT12', 'Fishburger', 'burger', '\'Americki\' originalni fishburger.', 'fishburger.jpg', 100, '4.00'),
(15, 'BOLT13', 'Cevapi Veliki', 'cevapi', 'Porcija od 10 komada u lepinji.', 'cevapiveliki.jpg', 100, '7.00'),
(16, 'BOLT14', 'Cevapi Mali', 'cevapi', 'Porcija od 5 komada u lepinji.', 'cevapimali.jpg', 120, '5.00'),
(17, 'BOLT15', 'Salata', 'prilog', 'Svjeza salata od domacih proizvoda', 'salata.jpg', 100, '2.00'),
(18, 'BOLT16', 'Pomfrit', 'prilog', 'Broj 1 prilog uz svaku hranu.', 'pomfrit.jpg', 97, '2.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pin` int(6) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `pin`, `email`, `password`, `type`) VALUES
(1, 'Ante', 'KraljeviÄ‡', 'Herceg Stjepana 43', 'Å iroki Brijeg', 88220, 'ante959@gmail.com', 'sifra123', 'user'),
(2, 'Admin', 'Webmaster', 'Internet', 'Electricity', 101010, 'admin@admin.com', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
