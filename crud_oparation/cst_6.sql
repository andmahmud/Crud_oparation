-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2024 at 07:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cst`
--

-- --------------------------------------------------------

--
-- Table structure for table `cst_6`
--

CREATE TABLE `cst_6` (
  `Si` int(255) NOT NULL,
  `Id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cst_6`
--

INSERT INTO `cst_6` (`Si`, `Id`, `name`, `department`, `email`) VALUES
(1, '721', 'monirul ', 'cst', 'monir@gmail.com'),
(3, '683', 'soikot tg', 'cst_6', 'soikot@gmail.com'),
(4, '7677', 'rakib', 'cst', 'thh@gmail.com'),
(7, '1234', 'tanvir', 'rc', 'arc@gmail.com'),
(9, '67890', 'leon', 'mats', 'leon@gmail.com'),
(10, '8520', 'lion', 'bibahito', 'bibahito@gmailcom'),
(11, '963', 'soikot', 'Lion', 'bbedi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cst_6`
--
ALTER TABLE `cst_6`
  ADD PRIMARY KEY (`Si`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cst_6`
--
ALTER TABLE `cst_6`
  MODIFY `Si` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
