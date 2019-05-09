-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 12:56 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpbasicdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(5) NOT NULL,
  `fullname` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fullname`, `email`, `password`, `tel`, `status`) VALUES
(1, 'Apirak', 'apirak@email.com', '654321', '087-58456582', 33),
(2, 'กิตติพงษ์ กิจการ', 'killupop@hotmail.com', '123456', '091-7749301', 1),
(3, 'Apirak', 'apirak@email.com', '654321', '087-58456582', 33),
(4, 'Apirak', 'apirak@email.com', '654321', '087-58456582', 1),
(5, 'Apirak', 'apirak@email.com', '654321', '087-58456582', 1),
(6, 'test01', 'testemail', ' testpassword', 'testtel', 0),
(7, 'test02', 'testemail', ' testpassword', 'testtel', 1),
(8, 'กิตติพงษ์ กิจการ', 'killupop@hotmail.com', ' testpassword', '0877881280', 2),
(9, 'กิตติพงษ์ กิจการ', 'killupop@hotmail.com', ' testpassword', '0877881280', 2),
(10, 'กิตติพงษ์ กิจการ', 'killupop@hotmail.com', ' testpassword', '0877881280', 2),
(15, 'ghghghg', 'killupop@hotmail.com', ' hghghg', '0877881280', 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
