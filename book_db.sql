-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 05:02 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `guests` int(255) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES
(3, 'hanzala', 'hanzalatufail55@gmail.com', '03123935648', 'jaranwala road Faisalabad ', 'naran', 5, '2023-06-03', '2023-06-03'),
(4, 'umar', 'umar123@gmail.com', '0312345678', 'Mujahid town', 'sawat', 4, '2023-06-04', '2023-06-09'),
(5, 'mehboob', 'mehboobali@gmail.com', '0300056788', 'Satyana road', 'japan', 3, '2023-06-13', '2023-03-24'),
(6, 'hamza', 'hamza123@gmail.com', '03123459654', 'tariqabad', 'karachi', 7, '2023-06-16', '2023-06-19'),
(7, 'umar', 'umar123@gmail.com', '03123935648', 'narwala chowk', 'germany', 4, '2023-06-16', '2023-06-26'),
(8, 'hamza', 'nahlahcshops@gmail.com', '12345678', 'mehmoodabad', 'switzerland', 2, '2023-06-03', '2023-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `contact`, `email`, `password`) VALUES
(1, 'hanzala', '03123935648', 'hanzalatufail55@gmail.com', '$2y$10$YsJyzbqYYBjaGZsXlBLTAuJ4wAcw.tkjddcuZ5760dCM4ZLuscX1W'),
(2, 'honey', '1234', 'honey@gmail.com', '$2y$10$ZsVrwOyTl4XqmCH/Pz3JceDiI42jaNvfBxVp24IIwjrxfUHMD5K9O'),
(3, 'hny', '1245', 'jeremiahjuwe@gmail.com', '$2y$10$Gi8vkPAvCumPof6U798DZOucp9fqttC08/vwAZCeNXoEz9FKOOkke'),
(4, 'umar', '03123353533', 'umar123@gmail.com', '$2y$10$rZpvpzprktM3LvsPPljAxOiU5Uo0kCMgPw.1G76vpcOTpK2n7JCKu'),
(5, 'hami', '124523234', 'nahlahcshops@gmail.com', '$2y$10$HfmYLDNAr9pgwzlfWiKObuVia8Z.V98QvF7sZ8.pPloR7P/3.a5ji');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
