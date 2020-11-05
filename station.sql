-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2020 at 05:00 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `station`
--

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `s_id` int(3) NOT NULL,
  `de_name` varchar(255) NOT NULL,
  `de_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`s_id`, `de_name`, `de_time`) VALUES
(1, 'กรุงเทพ', '14:15:00'),
(2, 'นครราชสีมา', '09:50:00'),
(3, 'กรุงเทพ', '14:55:00'),
(4, 'นครราชสีมา', '11:45:00'),
(5, 'กรุงเทพ', '23:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `huayrach`
--

CREATE TABLE `huayrach` (
  `s_id` int(3) NOT NULL,
  `hr_to` time NOT NULL,
  `hr_out` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `huayrach`
--

INSERT INTO `huayrach` (`s_id`, `hr_to`, `hr_out`) VALUES
(1, '05:53:00', '05:54:00'),
(2, '07:39:00', '07:40:00'),
(3, '08:22:00', '08:23:00'),
(4, '09:38:00', '09:39:00'),
(5, '21:00:00', '21:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `theorigin`
--

CREATE TABLE `theorigin` (
  `s_id` int(3) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_timeout` time NOT NULL,
  `s_notation` varchar(255) NOT NULL,
  `s_procession` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `theorigin`
--

INSERT INTO `theorigin` (`s_id`, `s_name`, `s_timeout`, `s_notation`, `s_procession`) VALUES
(1, 'สุรินทร์', '05:20:00', 'รถธรรมดา', 234),
(2, 'สำโรงทาบ', '05:50:00', 'รถดีเซลราง', 424),
(3, 'อุบลราชธานี', '05:40:00', 'รถด่วรดีเซลราง', 72),
(4, 'อุบราชธานี', '06:20:00', 'ดีเซลราง', 428);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `huayrach`
--
ALTER TABLE `huayrach`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `theorigin`
--
ALTER TABLE `theorigin`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `s_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `huayrach`
--
ALTER TABLE `huayrach`
  MODIFY `s_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `theorigin`
--
ALTER TABLE `theorigin`
  MODIFY `s_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `huayrach`
--
ALTER TABLE `huayrach`
  ADD CONSTRAINT `huayrach_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `theorigin` (`s_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `theorigin`
--
ALTER TABLE `theorigin`
  ADD CONSTRAINT `theorigin_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `destination` (`s_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
