-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 09:19 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workspacephp`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phno` bigint(20) NOT NULL,
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `email`, `phno`, `query`) VALUES
(1, '18A81A0485', '17pa1a0529@vishnu.edu.in', 2147483647, 'kjnndgnf'),
(2, 'I\'m rider', 'Imrider@gmail.com', 99933366, 'apple dies by newton'),
(3, '', '', 0, ''),
(4, 'rike', 'apple@gmail.com', 888663454, 'HI '),
(5, '', '', 0, ''),
(6, 'Surya Prakash', '17pa1a0559@vishnu.edu.in', 99933366, 'lamwsmand m.zm '),
(7, '', '', 0, ''),
(8, '', '', 0, ''),
(9, '', '', 0, ''),
(10, 'Surya Prakash Kadali', 'suryaprakashkadali456@gmail.com', 2147483647, 'cgfgsg'),
(11, 'Surya Prakash', '17pa1a0559@vishnu.edu.in', 1234567890, 'sddf'),
(12, 'Surya Prakash', '17pa1a0559@vishnu.edu.in', 1234567890, 'sddf'),
(13, 'Surya Prakash Kadali', 'suryaprakashkadali456@gmail.com', 2147483647, 'l,kmnmnk'),
(14, '18A81A0485', 'suryaprakashkadali456@gmail.com', 2147483647, 'bjnkbjhb'),
(15, 'Surya Prakash', '17pa1a0559@vishnu.edu.in', 2147483647, 'bhgkhhvjhkgv'),
(16, 'Surya Prakash Kadali', 'suryaprakashkadali456@gmail.com', 967645627, 'fjggihg'),
(17, 'Surya Prakash', 'suryaprakashkadali456@gmail.com', 9784239874, 'jccjk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
