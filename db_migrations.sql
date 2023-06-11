-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 11, 2023 at 11:48 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adve`
--

-- --------------------------------------------------------

--
-- Table structure for table `BookingRequest`
--

CREATE TABLE `BookingRequest` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `special_request` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `BookingRequest`
--

INSERT INTO `BookingRequest` (`id`, `name`, `email`, `date`, `package`, `special_request`) VALUES
(1, 'Hossam', 'hossam.deiab@gmail.com', '05/15/2023', 'Taba 2', 'This is a request'),
(2, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ContactRequest`
--

CREATE TABLE `ContactRequest` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ContactRequest`
--

INSERT INTO `ContactRequest` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Hossam', 'hossam.deiab@gmail.com', 'Thank you for the great service', 'Thanks a lot');

-- --------------------------------------------------------

--
-- Table structure for table `UserAccount`
--

CREATE TABLE `UserAccount` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `UserAccount`
--

INSERT INTO `UserAccount` (`ID`, `first_name`, `last_name`, `username`, `email`, `password`) VALUES
(1, 'Hossam', 'Deiab', '', 'hossam.deiab@gmail.com', 'pass123'),
(3, 'Hossam', 'Deiab', 'hossamdeiab', 'hossam.deiab1@gmail.com', 'pass123'),
(5, 'Hossam', 'Deiab', 'hossamdeiab1', 'hossam.deiab2@gmail.com', '1234'),
(6, 'Hossam', 'Deiab', 'hussamdeiab2', 'hossamdeiab2@gmail.com', 'pass12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BookingRequest`
--
ALTER TABLE `BookingRequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ContactRequest`
--
ALTER TABLE `ContactRequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `UserAccount`
--
ALTER TABLE `UserAccount`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `BookingRequest`
--
ALTER TABLE `BookingRequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ContactRequest`
--
ALTER TABLE `ContactRequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `UserAccount`
--
ALTER TABLE `UserAccount`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
