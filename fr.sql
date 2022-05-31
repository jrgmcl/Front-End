-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2022 at 02:20 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
-- Table structure for table `archived`
--

CREATE TABLE `archived` (
  `id` int(3) NOT NULL COMMENT 'System ID#',
  `ru_firstname` char(32) DEFAULT NULL,
  `ru_lastname` char(32) DEFAULT NULL,
  `ru_studentid` char(16) DEFAULT NULL,
  `ru_course` varchar(16) DEFAULT NULL,
  `ru_email` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `archived`
--

INSERT INTO `archived` (`id`, `ru_firstname`, `ru_lastname`, `ru_studentid`, `ru_course`, `ru_email`) VALUES
(1, 'Jorge Michael', 'Galang', '2000013822', 'BSCPE', 'jorgegalang21@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `count` int(3) NOT NULL COMMENT 'System ID#',
  `id` int(3) DEFAULT NULL,
  `ru_firstname` char(32) DEFAULT NULL,
  `ru_lastname` char(32) DEFAULT NULL,
  `ru_studentid` int(16) DEFAULT NULL,
  `ru_course` varchar(16) DEFAULT NULL,
  `ru_email` varchar(32) DEFAULT NULL,
  `time_in` datetime(6) DEFAULT NULL,
  `time_out` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`count`, `id`, `ru_firstname`, `ru_lastname`, `ru_studentid`, `ru_course`, `ru_email`, `time_in`, `time_out`) VALUES
(1, 1, 'Jorge Michael', 'Galang', 2000013822, 'BSCPE', 'jorgegalang21@gmail.com', '2022-05-15 14:19:32.000000', '2022-05-15 19:49:19.000000');

-- --------------------------------------------------------

--
-- Table structure for table `log_qr`
--

CREATE TABLE `log_qr` (
  `count` int(3) NOT NULL COMMENT 'System ID#',
  `id` int(3) DEFAULT NULL,
  `qr_firstname` char(32) DEFAULT NULL,
  `qr_lastname` char(32) DEFAULT NULL,
  `qr_studentid` int(16) DEFAULT NULL,
  `qr_course` varchar(16) DEFAULT NULL,
  `qr_time_in` datetime(6) DEFAULT NULL,
  `qr_time_out` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_qr`
--

INSERT INTO `log_qr` (`count`, `id`, `qr_firstname`, `qr_lastname`, `qr_studentid`, `qr_course`, `qr_time_in`, `qr_time_out`) VALUES
(1, 1, 'Mary Adelaine', 'Diola', 200015448, 'BSCPE', '2022-05-13 02:14:49.000000', '2022-05-13 02:14:49.000000');

-- --------------------------------------------------------

--
-- Table structure for table `pending_users`
--

CREATE TABLE `pending_users` (
  `id` int(3) NOT NULL COMMENT 'System ID#',
  `ru_firstname` char(32) DEFAULT NULL,
  `ru_lastname` char(32) DEFAULT NULL,
  `ru_studentid` int(16) DEFAULT NULL,
  `ru_course` varchar(16) DEFAULT NULL,
  `ru_email` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending_users`
--

INSERT INTO `pending_users` (`id`, `ru_firstname`, `ru_lastname`, `ru_studentid`, `ru_course`, `ru_email`) VALUES
(1, 'Jorge Michael', 'Galang', 200148555, 'BSCPE', 'jorgegalang21@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `qr_users`
--

CREATE TABLE `qr_users` (
  `id` int(3) NOT NULL COMMENT 'System ID#',
  `qr_firstname` char(32) DEFAULT NULL,
  `qr_lastname` char(32) DEFAULT NULL,
  `qr_number` char(16) DEFAULT NULL,
  `qr_gender` varchar(255) DEFAULT NULL,
  `qr_purpose` varchar(16) DEFAULT NULL,
  `visit_time_in` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `visit_time_out` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qr_users`
--

INSERT INTO `qr_users` (`id`, `qr_firstname`, `qr_lastname`, `qr_number`, `qr_gender`, `qr_purpose`, `visit_time_in`, `visit_time_out`) VALUES
(1, 'Adele', 'Adele', '', 'female', 'Enrollment', '2022-05-28 02:14:02.593434', '2022-05-28 02:14:33.493093');

-- --------------------------------------------------------

--
-- Table structure for table `rgstrd_users`
--

CREATE TABLE `rgstrd_users` (
  `id` int(3) NOT NULL COMMENT 'System ID#',
  `ru_firstname` char(32) DEFAULT NULL,
  `ru_lastname` char(32) DEFAULT NULL,
  `ru_studentid` char(16) DEFAULT NULL,
  `ru_course` varchar(16) DEFAULT NULL,
  `ru_email` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rgstrd_users`
--

INSERT INTO `rgstrd_users` (`id`, `ru_firstname`, `ru_lastname`, `ru_studentid`, `ru_course`, `ru_email`) VALUES
(1, 'Jorge Michael', 'Galang', '2000013822	', 'BSCPE', 'jorgegalang21@gmail.com');

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
-- Indexes for table `archived`
--
ALTER TABLE `archived`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`count`);

--
-- Indexes for table `log_qr`
--
ALTER TABLE `log_qr`
  ADD PRIMARY KEY (`count`);

--
-- Indexes for table `pending_users`
--
ALTER TABLE `pending_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qr_users`
--
ALTER TABLE `qr_users`
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
-- AUTO_INCREMENT for table `archived`
--
ALTER TABLE `archived`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'System ID#', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `count` int(3) NOT NULL AUTO_INCREMENT COMMENT 'System ID#', AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `log_qr`
--
ALTER TABLE `log_qr`
  MODIFY `count` int(3) NOT NULL AUTO_INCREMENT COMMENT 'System ID#', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pending_users`
--
ALTER TABLE `pending_users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'System ID#', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qr_users`
--
ALTER TABLE `qr_users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'System ID#', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rgstrd_users`
--
ALTER TABLE `rgstrd_users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'System ID#', AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
