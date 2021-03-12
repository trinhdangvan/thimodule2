-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 12, 2021 at 10:36 AM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thi`
--

-- --------------------------------------------------------

--
-- Table structure for table `Hanghoa`
--

CREATE TABLE `Hanghoa` (
  `Id` int NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Price` int NOT NULL,
  `Amount` int NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Descirbe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Hanghoa`
--

INSERT INTO `Hanghoa` (`Id`, `Name`, `Type`, `Price`, `Amount`, `Date`, `Descirbe`) VALUES
(4, 'sam sung galaxy not 10', 'Điện Thoại', 300, 9, '12', 'Mặt lưng máy gây ấn tượng mạnh với cụm camera \'siêu to khổng lồ\'');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Hanghoa`
--
ALTER TABLE `Hanghoa`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Hanghoa`
--
ALTER TABLE `Hanghoa`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
