-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2022 at 03:40 PM
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
('guard', 'c7e42d43b0a326f8979eb4bbeb3655f7deb91f40'),
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `fr_dropped-users`
--

CREATE TABLE `fr_dropped-users` (
  `id` int(3) NOT NULL COMMENT 'System ID#',
  `ru_firstname` char(32) DEFAULT NULL,
  `ru_lastname` char(32) DEFAULT NULL,
  `ru_studentid` char(16) DEFAULT NULL,
  `ru_course` varchar(16) DEFAULT NULL,
  `ru_email` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fr_dropped-users`
--

INSERT INTO `fr_dropped-users` (`id`, `ru_firstname`, `ru_lastname`, `ru_studentid`, `ru_course`, `ru_email`) VALUES
(0, 'Nesha', 'Sorita', '020000123456', 'BSCPE', NULL),
(1, 'Jorge Michael', 'Galang', '02000013822', 'BSCPE', NULL),
(2, 'Nesha', 'Sorita', '020000123456', 'BSCPE', NULL),
(3, 'Nesha', 'Sorita', '020000123456', 'BSCPE', NULL),
(4, 'Nesha', 'Sorita', '020000123456', 'BSCPE', NULL),
(5, 'Baby Marie', 'Menorca', '0200004546', 'BSBA', NULL),
(6, 'Nesha', 'Sorita', '020000123456', 'BSCPE', NULL),
(7, 'Nesha', 'Sorita', '020000123456', 'BSCPE', NULL),
(8, 'Nesha', 'Sorita', '020000123456', 'BSCPE', NULL),
(9, 'Nesha', 'Sorita', '020000123456', 'BSCPE', NULL),
(10, 'Nesha', 'Sorita', '020000123456', 'BSCPE', NULL),
(11, 'Nesha', 'Sorita', '020000123456', 'BSCPE', NULL),
(12, 'Nesha', 'Sorita', '020000123456', 'BSCPE', NULL),
(13, 'Baby Marie', 'Menorca', '02000012345', 'BSCPE', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fr_logs`
--

CREATE TABLE `fr_logs` (
  `count` int(3) NOT NULL COMMENT 'System ID#',
  `id` int(3) DEFAULT NULL,
  `ru_firstname` char(32) DEFAULT NULL,
  `ru_lastname` char(32) DEFAULT NULL,
  `ru_studentid` char(32) DEFAULT NULL,
  `ru_course` varchar(16) DEFAULT NULL,
  `ru_temp` float DEFAULT NULL,
  `time_in` datetime(6) DEFAULT NULL,
  `time_out` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fr_pending-users`
--

CREATE TABLE `fr_pending-users` (
  `id` int(3) NOT NULL COMMENT 'System ID#',
  `ru_firstname` char(32) DEFAULT NULL,
  `ru_lastname` char(32) DEFAULT NULL,
  `ru_studentid` int(16) DEFAULT NULL,
  `ru_course` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='All PENDING users has facial recognition records here.';

-- --------------------------------------------------------

--
-- Table structure for table `fr_registered-users`
--

CREATE TABLE `fr_registered-users` (
  `id` int(3) NOT NULL COMMENT 'System ID#',
  `ru_firstname` char(32) DEFAULT NULL,
  `ru_lastname` char(32) DEFAULT NULL,
  `ru_studentid` char(32) DEFAULT NULL,
  `ru_course` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fr_registered-users`
--

INSERT INTO `fr_registered-users` (`id`, `ru_firstname`, `ru_lastname`, `ru_studentid`, `ru_course`) VALUES
(0, NULL, NULL, NULL, NULL),
(1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `qr_logs-users`
--

CREATE TABLE `qr_logs-users` (
  `count` int(3) NOT NULL COMMENT 'System ID#',
  `qr_firstname` char(32) DEFAULT NULL,
  `qr_lastname` char(32) DEFAULT NULL,
  `qr_studentid` int(16) DEFAULT NULL,
  `qr_course` varchar(16) DEFAULT NULL,
  `imgpath` varchar(128) DEFAULT NULL,
  `qr_pin` varchar(6) NOT NULL,
  `time_in` date DEFAULT NULL,
  `time_out` date DEFAULT NULL,
  `rpi_out` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `qr_logs-visitors`
--

CREATE TABLE `qr_logs-visitors` (
  `id` int(3) NOT NULL COMMENT 'System ID#',
  `qr_firstname` char(32) DEFAULT NULL,
  `qr_lastname` char(32) DEFAULT NULL,
  `qr_number` char(16) DEFAULT NULL,
  `qr_purpose` varchar(16) DEFAULT NULL,
  `time_in` date DEFAULT NULL,
  `time_out` date DEFAULT NULL,
  `rpi` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `qr_pending-users`
--

CREATE TABLE `qr_pending-users` (
  `count` int(3) NOT NULL COMMENT 'System ID#',
  `qr_firstname` char(32) DEFAULT NULL,
  `qr_lastname` char(32) DEFAULT NULL,
  `qr_studentid` int(16) DEFAULT NULL,
  `qr_course` varchar(16) DEFAULT NULL,
  `qr_pin` varchar(6) NOT NULL,
  `rpi` enum('false','true') NOT NULL DEFAULT 'false',
  `rpi_out` enum('false','true') NOT NULL DEFAULT 'false',
  `approve` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `qr_pending-visitors`
--

CREATE TABLE `qr_pending-visitors` (
  `id` int(3) NOT NULL COMMENT 'System ID#',
  `qr_firstname` char(32) DEFAULT NULL,
  `qr_lastname` char(32) DEFAULT NULL,
  `qr_number` char(16) DEFAULT NULL,
  `qr_purpose` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rpi`
--

CREATE TABLE `rpi` (
  `rpi_signal` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rpi`
--

INSERT INTO `rpi` (`rpi_signal`) VALUES
('false');

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
-- Indexes for table `fr_dropped-users`
--
ALTER TABLE `fr_dropped-users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fr_logs`
--
ALTER TABLE `fr_logs`
  ADD PRIMARY KEY (`count`);

--
-- Indexes for table `fr_pending-users`
--
ALTER TABLE `fr_pending-users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fr_registered-users`
--
ALTER TABLE `fr_registered-users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qr_logs-users`
--
ALTER TABLE `qr_logs-users`
  ADD PRIMARY KEY (`count`);

--
-- Indexes for table `qr_logs-visitors`
--
ALTER TABLE `qr_logs-visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qr_pending-users`
--
ALTER TABLE `qr_pending-users`
  ADD PRIMARY KEY (`count`);

--
-- Indexes for table `qr_pending-visitors`
--
ALTER TABLE `qr_pending-visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fr_logs`
--
ALTER TABLE `fr_logs`
  MODIFY `count` int(3) NOT NULL AUTO_INCREMENT COMMENT 'System ID#', AUTO_INCREMENT=65;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
