-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 15, 2022 at 02:19 PM
-- Server version: 10.3.34-MariaDB-0+deb10u1
-- PHP Version: 7.3.31-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(16) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `count` int(3) NOT NULL COMMENT 'System ID#',
  `id` int(3) NOT NULL,
  `ru_firstname` char(32) NOT NULL,
  `ru_lastname` char(32) NOT NULL,
  `ru_studentid` int(16) NOT NULL,
  `ru_course` varchar(16) NOT NULL,
  `ru_email` varchar(32) NOT NULL,
  `time_in` datetime(6) NOT NULL,
  `time_out` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`count`, `id`, `ru_firstname`, `ru_lastname`, `ru_studentid`, `ru_course`, `ru_email`, `time_in`, `time_out`) VALUES
(1, 1, 'Jorge Michael', 'Galang', 2000013822, 'BSCPE', 'jorgegalang21@gmail.com', '2022-05-15 14:19:32.000000', '2022-05-15 19:49:19.000000');

-- --------------------------------------------------------

--
-- Table structure for table `pending_users`
--

CREATE TABLE `pending_users` (
  `id` int(3) NOT NULL COMMENT 'System ID#',
  `ru_firstname` char(32) NOT NULL,
  `ru_lastname` char(32) NOT NULL,
  `ru_studentid` int(16) NOT NULL,
  `ru_course` varchar(16) NOT NULL,
  `ru_email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rgstrd_users`
--

CREATE TABLE `rgstrd_users` (
  `id` int(3) NOT NULL COMMENT 'System ID#',
  `ru_firstname` char(32) NOT NULL,
  `ru_lastname` char(32) NOT NULL,
  `ru_studentid` int(16) NOT NULL,
  `ru_course` varchar(16) NOT NULL,
  `ru_email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rgstrd_users`
--

INSERT INTO `rgstrd_users` (`id`, `ru_firstname`, `ru_lastname`, `ru_studentid`, `ru_course`, `ru_email`) VALUES
(1, 'Jorge Michael', 'Galang', 2000013822, 'BSCPE', 'jorgegalang21@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `password` (`password`),
  ADD KEY `password_2` (`password`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`count`);

--
-- Indexes for table `pending_users`
--
ALTER TABLE `pending_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rgstrd_users`
--
ALTER TABLE `rgstrd_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `count` int(3) NOT NULL AUTO_INCREMENT COMMENT 'System ID#', AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pending_users`
--
ALTER TABLE `pending_users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'System ID#';
--
-- AUTO_INCREMENT for table `rgstrd_users`
--
ALTER TABLE `rgstrd_users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'System ID#', AUTO_INCREMENT=68;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
