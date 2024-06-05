-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 06:59 PM
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
-- Database: `major`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_Id` int(3) NOT NULL,
  `A_Name` varchar(15) NOT NULL,
  `A_DOB` date NOT NULL,
  `A_Gender` varchar(6) NOT NULL,
  `A_Phone` varchar(10) NOT NULL,
  `A_Email` varchar(20) NOT NULL,
  `A_Address` varchar(30) NOT NULL,
  `A_PAN` varchar(10) NOT NULL,
  `A_AADHAAR` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_Id`, `A_Name`, `A_DOB`, `A_Gender`, `A_Phone`, `A_Email`, `A_Address`, `A_PAN`, `A_AADHAAR`) VALUES
(1, 'sanjay patra', '1990-07-20', 'male', '9854672219', 'sanjay@gmail.com', 'beltola guwahati', 'ANRG12345C', '8729 3781 0478'),
(2, 'manik ghosh', '1990-07-21', 'male', '9435550302', 'manik@gmail.com', 'jayanagar guwahati', 'ANRG12345D', '8720 7392 4729');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `E_Id` int(3) NOT NULL,
  `E_Name` varchar(15) NOT NULL,
  `E_DOB` date NOT NULL,
  `E_Gender` varchar(6) NOT NULL,
  `E_Phone` varchar(10) NOT NULL,
  `E_Email` varchar(20) NOT NULL,
  `E_Address` varchar(30) NOT NULL,
  `E_PAN` varchar(10) NOT NULL,
  `E_AADHAAR` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`E_Id`, `E_Name`, `E_DOB`, `E_Gender`, `E_Phone`, `E_Email`, `E_Address`, `E_PAN`, `E_AADHAAR`) VALUES
(1, 'boi ghosh', '2002-07-20', 'female', '6003177203', 'boi@gmail.com', 'jayanagar guwahati', 'AUNG13451C', '3456 0987 4567'),
(2, 'bishal ghosh', '2008-07-21', 'male', '9401448909', 'bishal@gmail.com', 'jayanagar guwahati', 'AUNG13451D', '1234 5678 0987'),
(3, 'mohd uzaif', '2000-04-21', 'male', '8755516441', 'uzaif@email.com', 'roorkee uttrakhand', 'AUNG13421C', '1234 0987 4567'),
(4, 'gauri patra', '1990-07-30', 'female', '9134682045', 'gauri@gmail.com', 'beltola guwhati', 'AUNG13458C', '6789 3456 2345'),
(5, 'rakhi ghosh', '1976-01-30', 'female', '7002616840', 'rakhi@gmail.com', 'jayanagar guwahati', 'AUNG15421C', '2056 1899 7356'),
(6, 'jash patra', '2001-01-01', 'male', '9120667889', 'jash@gmail.com', 'beltola guwhati', 'AUNG13421V', '1290 7689 3456'),
(7, 'minakshi deka', '2001-01-18', 'female', '8769011567', 'mina@gmail.com', 'beltola guwahati', 'AUNG12359E', '1234 8907 4830'),
(8, 'rohit chetri', '2001-01-11', 'male', '8974652395', 'rohit@gmail.com', 'barnihat meghalaya', 'AUNG13471E', '0987 2457 8763'),
(9, 'riya biswas', '2002-08-18', 'female', '8822194016', 'riya@gmail.com', 'karimganj assam', 'AUNG12763E', '7628 9826 3982'),
(10, 'tina yein', '2001-12-06', 'female', '9101558397', 'tina@gmail.com', 'belatola guwahati', 'AUNG12345E', '0987 4567 8765'),
(11, 'ayush das', '2001-01-10', 'male', '8299651772', 'ayush@gmail.com', 'hatigaon guwahati', 'AUNG12763K', '8972 4092 6782'),
(12, 'pompy deka', '1992-07-02', 'female', '9983766528', 'pom@gmail.com', 'beltola guwahati', 'AUNG12763D', '2094 3981 4093'),
(13, 'mika singh', '1992-07-09', 'male', '8893765529', 'mika@gmail.com', 'mumbai india', 'AUNG12789E', '7890 1987 3092');

-- --------------------------------------------------------

--
-- Table structure for table `pe`
--

CREATE TABLE `pe` (
  `s_no` int(11) NOT NULL,
  `rabill_no` varchar(12) NOT NULL,
  `month` varchar(10) NOT NULL,
  `work_done` decimal(10,2) NOT NULL,
  `variation` decimal(10,2) NOT NULL,
  `escalation_amt` decimal(10,2) NOT NULL,
  `l_base` decimal(10,2) NOT NULL,
  `l_current` decimal(10,2) NOT NULL,
  `l_amt` decimal(10,2) NOT NULL,
  `m_base` decimal(10,2) NOT NULL,
  `m_current` decimal(10,2) NOT NULL,
  `m_amt` decimal(10,2) NOT NULL,
  `f_base` decimal(10,2) NOT NULL,
  `f_current` decimal(10,2) NOT NULL,
  `f_amt` decimal(10,2) NOT NULL,
  `c_base` decimal(10,2) NOT NULL,
  `c_current` decimal(10,2) NOT NULL,
  `c_amt` decimal(10,2) NOT NULL,
  `s_base` decimal(10,2) NOT NULL,
  `s_current` decimal(10,2) NOT NULL,
  `s_amt` decimal(10,2) NOT NULL,
  `b_base` decimal(10,2) NOT NULL,
  `b_current` decimal(10,2) NOT NULL,
  `b_amt` decimal(10,2) NOT NULL,
  `p_base` decimal(10,2) NOT NULL,
  `p_current` decimal(10,2) NOT NULL,
  `p_amt` decimal(10,2) NOT NULL,
  `total_amt` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pe`
--

INSERT INTO `pe` (`s_no`, `rabill_no`, `month`, `work_done`, `variation`, `escalation_amt`, `l_base`, `l_current`, `l_amt`, `m_base`, `m_current`, `m_amt`, `f_base`, `f_current`, `f_amt`, `c_base`, `c_current`, `c_amt`, `s_base`, `s_current`, `s_amt`, `b_base`, `b_current`, `b_amt`, `p_base`, `p_current`, `p_amt`, `total_amt`) VALUES
(1, 'rabill_1', 'jan-march', '99999999.99', '0.00', '67455120.00', '173.00', '191.00', '1491421.00', '154.20', '170.10', '2660474.55', '40.77', '48.23', '524568.21', '153.00', '172.00', '361634.39', '155.10', '166.90', '218109.24', '43192.25', '51058.72', '1044258.23', '130.90', '138.80', '173018.00', '6473483.63'),
(2, 'rabill_2', 'april-june', '99999999.99', '0.00', '11524714.00', '173.00', '189.00', '226498.06', '154.20', '171.30', '488849.12', '40.77', '48.27', '90103.39', '153.00', '171.30', '58584.17', '155.10', '166.50', '36000.92', '43192.25', '51212.50', '181899.99', '130.90', '138.80', '29560.25', '1111495.89');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_Id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`E_Id`);

--
-- Indexes for table `pe`
--
ALTER TABLE `pe`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `E_Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
