-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 10:37 AM
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
(7, 'Adele', 'Adele', '20000138222', 'TOP', 'stiwebapplication@gmail.com'),
(8, 'Nesha', 'Nesha', '020014258', 'BSTM', 'nesha@gmail.com'),
(9, 'Baby marie', 'Baby marie', '20000138223', 'TOP', 'marie@gmail.com'),
(10, 'Adele', 'Adele', '2000013822d', 'BSHM', 'stiwebapplication@gmail.com'),
(11, 'Nesha', 'Nesha', '12121125', 'GAS', 'nesha@gmail.com'),
(12, 'Mary', 'Mary', '12121212', 'BSTM', 'ragnarok.delle@gmail.com'),
(13, 'Adele', 'Adele', '11111e22', 'BMMA', 'stiwebapplication@gmail.com'),
(14, 'Jorge', 'Jorge', '2000013822', 'TOP', 'jorgegalang21@gmail.com'),
(15, 'Jorge Michael', 'Galang', '2000013822', 'BSCPE', 'jorgegalang21@gmail.com'),
(16, 'Jorge Michael', 'Galang', '2000013822	', 'BSCPE', 'jorgegalang21@gmail.com'),
(17, 'Jorge Michael', 'Galang', '2000013822	', 'BSCPE', 'jorgegalang21@gmail.com'),
(18, 'Mary Adelaine', 'Diola', '2000148556', 'BSIT', 'adelainediola@gmail.com'),
(19, 'Nesha', 'Sorita', '2000148965', 'BSTM', 'neshasorita@gmail,com'),
(20, 'Baby Marie', 'Menorca', '200016542', 'BSHM', 'mariemenorca@gmail.coom'),
(21, 'Adelew', 'Diola', '11111e22', 'BSCS', 'stiwebapplwcation@gmail.com'),
(22, '', '', '', '', ''),
(23, '', '', '', '', ''),
(24, '', '', '', '', ''),
(25, '', '', '', '', ''),
(26, '', '', '', '', ''),
(27, 'Nesha', 'Sorita', '12345', 'BSCPE', 'test@gmail.com');

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
(1, 1, 'Jorge Michael', 'Galang', 2000013822, 'BSCPE', 'jorgegalang21@gmail.com', '2022-05-15 14:19:32.000000', '2022-05-15 19:49:19.000000'),
(2, 2, 'Mary Adelaine', 'Diola', 2000148965, 'BSCPE', 'adelainediola@gmail.com', '2022-06-10 20:02:43.000000', '2022-06-18 20:02:43.000000'),
(3, 7, 'Marie', 'Menorca', 200123458, 'BSHM', 'menorca@gmail.com', '2022-06-14 20:06:45.000000', '2022-06-15 20:06:45.000000'),
(4, 6, 'Ronier', 'Ko', 200135248, 'Faculty', 'ronier@gmail.com', '2022-06-19 20:06:45.000000', '2022-06-16 20:13:24.000000'),
(5, 4, 'Nesha', 'Sorita', 2001245362, 'BSIT', 'adelainediola@gmail.com', '2022-06-30 20:02:43.000000', '2022-06-23 20:02:43.000000');

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
  `qr_time_out` datetime(6) DEFAULT NULL,
  `qr_pin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_qr`
--

INSERT INTO `log_qr` (`count`, `id`, `qr_firstname`, `qr_lastname`, `qr_studentid`, `qr_course`, `qr_time_in`, `qr_time_out`, `qr_pin`) VALUES
(1, 1, 'Mary Adelaine', 'Diola', 200015448, 'BSCPE', '2022-05-13 02:14:49.000000', '2022-05-13 02:14:49.000000', NULL),
(22, 0, 'Mary Adelaine', 'Diola', 20154283, 'BSCPE', NULL, NULL, ''),
(23, 0, 'Mary Adelaine', 'Diola', 20154283, 'BSCPE', NULL, NULL, '');

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

-- --------------------------------------------------------

--
-- Table structure for table `qr_pending`
--

CREATE TABLE `qr_pending` (
  `id` int(3) NOT NULL COMMENT 'System ID#',
  `qr_firstname` char(32) DEFAULT NULL,
  `qr_lastname` char(32) DEFAULT NULL,
  `qr_number` char(16) DEFAULT NULL,
  `qr_gender` varchar(255) DEFAULT NULL,
  `qr_purpose` varchar(16) DEFAULT NULL,
  `visit_time_in` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `visit_time_out` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `qr_pin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `visit_time_out` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `qr_pin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qr_users`
--

INSERT INTO `qr_users` (`id`, `qr_firstname`, `qr_lastname`, `qr_number`, `qr_gender`, `qr_purpose`, `visit_time_in`, `visit_time_out`, `qr_pin`) VALUES
(1, 'Mary Adelaine', 'Diola', '09271841082', 'female', 'Enrollement', '2022-06-03 02:52:32.989490', '2022-06-03 02:52:32.989490', '6sd6a52'),
(2, 'Mary Adelaine', 'Diola', '09271841082', '', 'Enrollement', '2022-06-04 02:16:34.038152', '2022-06-04 02:16:34.038152', ''),
(3, 'Mary Adelaine', 'Diola', '09271841082', '', 'Enrollement', '2022-06-04 02:16:34.060708', '2022-06-04 02:16:34.060708', ''),
(4, 'Mary Adelaine', 'Diola', '09271841082', '', 'Enrollement', '2022-06-04 02:16:34.076117', '2022-06-04 02:16:34.076117', ''),
(5, 'Mary Adelaine', 'Diola', '09271841082', '', 'Enrollement', '2022-06-04 02:16:34.127718', '2022-06-04 02:16:34.127718', ''),
(6, 'Mary Adelaine', 'Diola', '09271841082', '', 'Enrollement', '2022-06-04 02:16:34.166289', '2022-06-04 02:16:34.166289', ''),
(15, 'User', 'User', '2015346', 'male', 'Guidance', '2022-06-01 20:28:35.569081', '2022-06-01 20:28:35.569081', '6c9f39'),
(16, '', '', '', '', '', '2022-06-02 10:35:39.959208', '2022-06-02 10:35:39.959208', 'ac4e8b'),
(17, 'Mary Adelaine', 'Diola', '09271841082', 'female', 'Enrollement', '2022-06-03 02:52:32.783739', '2022-06-03 02:52:32.783739', '6sd6a52'),
(18, 'Tao', 'Tao', '52139', 'female', 'Payment', '2022-06-03 17:58:38.088226', '2022-06-03 17:58:38.088226', 'ab3c0f'),
(19, 'Tao', 'Tao', '52139', 'female', 'Payment', '2022-06-03 17:59:00.415960', '2022-06-03 17:59:00.415960', '5d170d'),
(20, 'Marie', 'Marie', '09273814921', 'female', 'Enrollment', '2022-06-03 18:59:49.844695', '2022-06-03 18:59:49.844695', 'b3202a'),
(21, 'Mary Adelaine', 'Diola', '09271841082', '', 'Enrollement', '2022-06-04 02:16:33.824661', '2022-06-04 02:16:33.824661', '');

-- --------------------------------------------------------

--
-- Table structure for table `reg_qr`
--

CREATE TABLE `reg_qr` (
  `count` int(3) NOT NULL COMMENT 'System ID#',
  `id` int(3) DEFAULT NULL,
  `qr_firstname` char(32) DEFAULT NULL,
  `qr_lastname` char(32) DEFAULT NULL,
  `qr_studentid` int(16) DEFAULT NULL,
  `qr_course` varchar(16) DEFAULT NULL,
  `qr_time_in` datetime(6) DEFAULT NULL,
  `qr_time_out` datetime(6) DEFAULT NULL,
  `qr_pin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_qr`
--

INSERT INTO `reg_qr` (`count`, `id`, `qr_firstname`, `qr_lastname`, `qr_studentid`, `qr_course`, `qr_time_in`, `qr_time_out`, `qr_pin`) VALUES
(2, 2, 'Jorge', 'Galang', 232445, 'BSCPE', NULL, NULL, NULL);

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
(87, 'Ronier', 'Ramos', '2013645', 'ASCT', 'ronierramos@gmail.com'),
(88, 'Loisa', 'Rodriguez', '203154282', 'GAS', 'rodriguezloisa@gmail.com'),
(89, 'Stephen', 'Ko', '200136524', 'Faculty', 'stephenko@gmail.com');

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
-- Indexes for table `qr_pending`
--
ALTER TABLE `qr_pending`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qr_users`
--
ALTER TABLE `qr_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_qr`
--
ALTER TABLE `reg_qr`
  ADD PRIMARY KEY (`count`);

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'System ID#', AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `count` int(3) NOT NULL AUTO_INCREMENT COMMENT 'System ID#', AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `log_qr`
--
ALTER TABLE `log_qr`
  MODIFY `count` int(3) NOT NULL AUTO_INCREMENT COMMENT 'System ID#', AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pending_users`
--
ALTER TABLE `pending_users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'System ID#', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `qr_pending`
--
ALTER TABLE `qr_pending`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'System ID#', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qr_users`
--
ALTER TABLE `qr_users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'System ID#', AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reg_qr`
--
ALTER TABLE `reg_qr`
  MODIFY `count` int(3) NOT NULL AUTO_INCREMENT COMMENT 'System ID#', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rgstrd_users`
--
ALTER TABLE `rgstrd_users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'System ID#', AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
