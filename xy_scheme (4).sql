-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 11:28 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xy_scheme`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(30) NOT NULL,
  `fullname` varchar(30) DEFAULT NULL,
  `department` varchar(30) NOT NULL,
  `responsibility` varchar(30) DEFAULT NULL,
  `level` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `fullname`, `department`, `responsibility`, `level`, `username`, `password`) VALUES
(8, 'Kwizera Elvis', 'Management', 'HR', 'level 9', 'elvis@gmail.com', 'elvis123'),
(9, 'Buntu Mike', 'Supervisor', 'Worker Management', 'level8', 'ygkoff@gmail.com', 'koff123'),
(10, 'Uhirwa', 'Supervisor', 'Worker Management', 'level8', 'uhirwa@gamil.com', 'uhirwa123'),
(11, 'mike', 'Management', 'Worker Management', 'level8', 'mike@gmail.com', 'mike123');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `farmid` int(30) NOT NULL,
  `farmername` varchar(30) DEFAULT NULL,
  `idnumber` int(11) DEFAULT NULL,
  `croptype` varchar(30) DEFAULT NULL,
  `seasontype` varchar(30) DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `regdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`farmid`, `farmername`, `idnumber`, `croptype`, `seasontype`, `quantity`, `regdate`) VALUES
(4, 'Nshuti', 234532, '2024-2025', 'Cassava', 99, '2024-01-21 12:52:53'),
(5, 'Kwizera', 234567543, '2024-Season A', 'Coffee', 1000, '2024-01-21 14:13:41'),
(6, 'Nshuti', 6767698, '2024-Season A', 'hybrid', 70, '2024-01-21 18:57:53'),
(7, 'Kwizera Elvis', 243, '2020-2023', 'hybrid', 2342, '2024-01-21 21:01:21');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payid` int(11) NOT NULL,
  `farmid` int(30) DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `price_per_unit` int(11) DEFAULT NULL,
  `total_payment` int(11) DEFAULT NULL,
  `paydate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payid`, `farmid`, `quantity`, `price_per_unit`, `total_payment`, `paydate`) VALUES
(22, 4, 200, 0, 0, '2024-01-22 16:37:31');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `farmid` int(30) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `cost_per_unit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `farmid`, `pname`, `cost_per_unit`) VALUES
(6, 6, 'ibigori', '800'),
(7, 5, 'RICE', '800'),
(8, 4, 'Ibirayi', '345'),
(9, 7, 'RICE', '3000'),
(12, 4, 'hascga', 'fe'),
(13, 4, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`farmid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payid`),
  ADD KEY `farmid` (`farmid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `foreign key` (`farmid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `farmid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`farmid`) REFERENCES `farmer` (`farmid`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`farmid`) REFERENCES `farmer` (`farmid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
