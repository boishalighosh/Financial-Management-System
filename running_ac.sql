-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 07:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `running_ac`
--

-- --------------------------------------------------------

--
-- Table structure for table `rabill_1`
--

CREATE TABLE `rabill_1` (
  `id` int(11) NOT NULL,
  `quantity` decimal(10,2) DEFAULT NULL,
  `up_to_date` decimal(10,2) DEFAULT NULL,
  `previous_bill` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rabill_1`
--

INSERT INTO `rabill_1` (`id`, `quantity`, `up_to_date`, `previous_bill`) VALUES
(1, '1.00', '37000.00', '0.00'),
(2, '1.00', '148.00', '0.00'),
(3, '1.00', '592.00', '0.00'),
(4, '1.00', '148.00', '0.00'),
(5, '1.00', '296.00', '0.00'),
(6, '1.00', '222.00', '0.00'),
(7, '1.00', '666.00', '0.00'),
(8, '1.00', '1184.00', '0.00'),
(9, '1.00', '2960.00', '0.00'),
(10, '1.00', '6660.00', '0.00'),
(11, '1.00', '84.00', '0.00'),
(12, '1.00', '276.00', '0.00'),
(13, '1.00', '71.00', '0.00'),
(14, '1.00', '1122.00', '0.00'),
(15, '1.00', '41.00', '0.00'),
(16, '1.00', '44.00', '0.00'),
(17, '1.00', '220.00', '0.00'),
(18, '1.00', '25.00', '0.00'),
(19, '1.00', '72.00', '0.00'),
(20, '1.00', '1122.00', '0.00'),
(21, '1.00', '1871.00', '0.00'),
(22, '1.00', '52.00', '0.00'),
(23, '1.00', '12.00', '0.00'),
(24, '1.00', '10.00', '0.00'),
(25, '1.00', '8384.00', '0.00'),
(26, '1.00', '9673.00', '0.00'),
(27, '1.00', '8473.00', '0.00'),
(28, '1.00', '3741.00', '0.00'),
(29, '1.00', '99.00', '0.00'),
(30, '1.00', '5620.00', '0.00'),
(31, '1.00', '7356.00', '0.00'),
(32, '1.00', '7551.00', '0.00'),
(33, '1.00', '8818.00', '0.00'),
(34, '1.00', '9309.00', '0.00'),
(35, '1.00', '8494.00', '0.00'),
(36, '1.00', '14892.00', '0.00'),
(37, '1.00', '740.00', '0.00'),
(38, '1.00', '7126.00', '0.00'),
(39, '1.00', '2919.00', '0.00'),
(40, '1.00', '188.00', '0.00'),
(41, '1.00', '511.00', '0.00'),
(42, '1.00', '1011.00', '0.00'),
(43, '1.00', '296.00', '0.00'),
(44, '1.00', '79025.00', '0.00'),
(45, '1.00', '805.00', '0.00'),
(46, '1.00', '2623.00', '0.00'),
(47, '1.00', '148.00', '0.00'),
(48, '1.00', '12410.00', '0.00'),
(49, '1.00', '967.00', '0.00'),
(50, '1.00', '878.00', '0.00'),
(51, '1.00', '26900.00', '0.00'),
(52, '1.00', '16280.00', '0.00'),
(53, '1.00', '1200.00', '0.00'),
(54, '1.00', '1400.00', '0.00'),
(55, '1.00', '99.00', '0.00'),
(56, '1.00', '528.00', '0.00'),
(57, '1.00', '5620.00', '0.00'),
(58, '1.00', '1011.00', '0.00'),
(59, '1.00', '296.00', '0.00'),
(60, '1.00', '7166.00', '0.00'),
(61, '1.00', '7356.00', '0.00'),
(62, '1.00', '8303.00', '0.00'),
(63, '1.00', '14892.00', '0.00'),
(64, '1.00', '79025.00', '0.00'),
(65, '1.00', '99.00', '0.00'),
(66, '1.00', '84.00', '0.00'),
(67, '1.00', '276.00', '0.00'),
(68, '1.00', '814.00', '0.00'),
(69, '1.00', '37000.00', '0.00'),
(70, '1.00', '967.00', '0.00'),
(71, '1.00', '878.00', '0.00'),
(72, '1.00', '5620.00', '0.00'),
(73, '1.00', '7166.00', '0.00'),
(74, '1.00', '296.00', '0.00'),
(75, '1.00', '30.00', '0.00'),
(76, '1.00', '30.00', '0.00'),
(77, '1.00', '8646.00', '0.00'),
(78, '1.00', '8818.00', '0.00'),
(79, '1.00', '79205.00', '0.00'),
(80, '1.00', '99.00', '0.00'),
(81, '1.00', '5620.00', '0.00'),
(82, '1.00', '7166.00', '0.00'),
(83, '1.00', '7126.00', '0.00'),
(84, '1.00', '8818.00', '0.00'),
(85, '1.00', '298.00', '0.00'),
(86, '1.00', '506.00', '0.00'),
(87, '1.00', '654.00', '0.00'),
(88, '1.00', '7166.00', '0.00'),
(89, '1.00', '1480.00', '0.00'),
(90, '1.00', '2451.00', '0.00'),
(91, '1.00', '709.00', '0.00'),
(92, '1.00', '1776.00', '0.00'),
(93, '1.00', '2836.00', '0.00'),
(94, '1.00', '4070.00', '0.00'),
(95, '1.00', '2569.00', '0.00'),
(96, '1.00', '336.00', '0.00'),
(97, '1.00', '444.00', '0.00'),
(98, '1.00', '259.00', '0.00'),
(99, '1.00', '269.00', '0.00'),
(100, '1.00', '148.00', '0.00'),
(101, '1.00', '370.00', '0.00'),
(102, '1.00', '6660.00', '0.00'),
(103, '1.00', '5090.00', '0.00'),
(104, '1.00', '2027.00', '0.00'),
(105, '1.00', '444.00', '0.00'),
(106, '1.00', '370.00', '0.00'),
(107, '1.00', '148000.00', '0.00'),
(108, '1.00', '81.00', '0.00'),
(109, '1.00', '84.00', '0.00'),
(110, NULL, '755997.00', '0.00'),
(111, NULL, '755997.00', '0.00'),
(112, NULL, '37799.85', '0.00'),
(113, NULL, '718197.15', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `rabill_2`
--

CREATE TABLE `rabill_2` (
  `id` int(11) NOT NULL,
  `quantity` decimal(10,2) DEFAULT NULL,
  `up_to_date` decimal(10,2) DEFAULT NULL,
  `previous_bill` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rabill_2`
--

INSERT INTO `rabill_2` (`id`, `quantity`, `up_to_date`, `previous_bill`) VALUES
(1, '2.00', '74000.00', '1.00'),
(2, '2.00', '296.00', '1.00'),
(3, '2.00', '1184.00', '1.00'),
(4, '2.00', '296.00', '1.00'),
(5, '2.00', '592.00', '1.00'),
(6, '2.00', '444.00', '1.00'),
(7, '2.00', '1332.00', '1.00'),
(8, '2.00', '2368.00', '1.00'),
(9, '2.00', '5920.00', '1.00'),
(10, '2.00', '13320.00', '1.00'),
(11, '2.00', '168.00', '1.00'),
(12, '2.00', '552.00', '1.00'),
(13, '2.00', '142.00', '1.00'),
(14, '2.00', '2244.00', '1.00'),
(15, '2.00', '82.00', '1.00'),
(16, '2.00', '88.00', '1.00'),
(17, '2.00', '440.00', '1.00'),
(18, '2.00', '50.00', '1.00'),
(19, '2.00', '144.00', '1.00'),
(20, '2.00', '2244.00', '1.00'),
(21, '2.00', '3742.00', '1.00'),
(22, '2.00', '104.00', '1.00'),
(23, '2.00', '24.00', '1.00'),
(24, '2.00', '20.00', '1.00'),
(25, '2.00', '16768.00', '1.00'),
(26, '2.00', '19346.00', '1.00'),
(27, '2.00', '16946.00', '1.00'),
(28, '2.00', '7482.00', '1.00'),
(29, '2.00', '198.00', '1.00'),
(30, '2.00', '11240.00', '1.00'),
(31, '2.00', '14712.00', '1.00'),
(32, '2.00', '15102.00', '1.00'),
(33, '2.00', '17636.00', '1.00'),
(34, '2.00', '18618.00', '1.00'),
(35, '2.00', '16988.00', '1.00'),
(36, '2.00', '29784.00', '1.00'),
(37, '2.00', '1480.00', '1.00'),
(38, '2.00', '14252.00', '1.00'),
(39, '2.00', '5838.00', '1.00'),
(40, '2.00', '376.00', '1.00'),
(41, '2.00', '1022.00', '1.00'),
(42, '2.00', '2022.00', '1.00'),
(43, '2.00', '592.00', '1.00'),
(44, '2.00', '158050.00', '1.00'),
(45, '2.00', '1610.00', '1.00'),
(46, '2.00', '5246.00', '1.00'),
(47, '2.00', '296.00', '1.00'),
(48, '2.00', '24820.00', '1.00'),
(49, '2.00', '1934.00', '1.00'),
(50, '2.00', '1756.00', '1.00'),
(51, '2.00', '53800.00', '1.00'),
(52, '2.00', '32560.00', '1.00'),
(53, '2.00', '2400.00', '1.00'),
(54, '2.00', '2800.00', '1.00'),
(55, '2.00', '198.00', '1.00'),
(56, '2.00', '1056.00', '1.00'),
(57, '2.00', '11240.00', '1.00'),
(58, '2.00', '2022.00', '1.00'),
(59, '2.00', '592.00', '1.00'),
(60, '2.00', '14332.00', '1.00'),
(61, '2.00', '14712.00', '1.00'),
(62, '2.00', '16606.00', '1.00'),
(63, '2.00', '29784.00', '1.00'),
(64, '2.00', '158050.00', '1.00'),
(65, '2.00', '198.00', '1.00'),
(66, '2.00', '168.00', '1.00'),
(67, '2.00', '552.00', '1.00'),
(68, '2.00', '1628.00', '1.00'),
(69, '2.00', '74000.00', '1.00'),
(70, '2.00', '1934.00', '1.00'),
(71, '2.00', '1756.00', '1.00'),
(72, '2.00', '11240.00', '1.00'),
(73, '2.00', '14332.00', '1.00'),
(74, '2.00', '592.00', '1.00'),
(75, '2.00', '60.00', '1.00'),
(76, '2.00', '60.00', '1.00'),
(77, '2.00', '17292.00', '1.00'),
(78, '2.00', '17636.00', '1.00'),
(79, '2.00', '158410.00', '1.00'),
(80, '2.00', '198.00', '1.00'),
(81, '2.00', '11240.00', '1.00'),
(82, '2.00', '14332.00', '1.00'),
(83, '2.00', '14252.00', '1.00'),
(84, '2.00', '17636.00', '1.00'),
(85, '2.00', '596.00', '1.00'),
(86, '2.00', '1012.00', '1.00'),
(87, '2.00', '1308.00', '1.00'),
(88, '2.00', '14332.00', '1.00'),
(89, '2.00', '2960.00', '1.00'),
(90, '2.00', '4902.00', '1.00'),
(91, '2.00', '1418.00', '1.00'),
(92, '2.00', '3552.00', '1.00'),
(93, '2.00', '5672.00', '1.00'),
(94, '2.00', '8140.00', '1.00'),
(95, '2.00', '5138.00', '1.00'),
(96, '2.00', '672.00', '1.00'),
(97, '2.00', '888.00', '1.00'),
(98, '2.00', '518.00', '1.00'),
(99, '2.00', '538.00', '1.00'),
(100, '2.00', '296.00', '1.00'),
(101, '2.00', '740.00', '1.00'),
(102, '2.00', '13320.00', '1.00'),
(103, '2.00', '10180.00', '1.00'),
(104, '2.00', '4054.00', '1.00'),
(105, '2.00', '888.00', '1.00'),
(106, '2.00', '740.00', '1.00'),
(107, '2.00', '296000.00', '1.00'),
(108, '2.00', '162.00', '1.00'),
(109, '2.00', '168.00', '1.00'),
(110, NULL, '1511994.00', '109.00'),
(111, NULL, '1511994.00', '109.00'),
(112, NULL, '75599.70', '5.45'),
(113, NULL, '1436394.30', '103.55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rabill_1`
--
ALTER TABLE `rabill_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rabill_2`
--
ALTER TABLE `rabill_2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rabill_1`
--
ALTER TABLE `rabill_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `rabill_2`
--
ALTER TABLE `rabill_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
