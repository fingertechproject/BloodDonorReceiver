-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 06:57 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donoconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodreq`
--

CREATE TABLE `bloodreq` (
  `srn` int(4) NOT NULL,
  `pfname` varchar(30) NOT NULL,
  `bg` varchar(10) NOT NULL,
  `page` int(3) NOT NULL,
  `datetime` date NOT NULL,
  `unit` int(2) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `hname` varchar(40) NOT NULL,
  `hlocate` text NOT NULL,
  `padd` text NOT NULL,
  `pdisc` text NOT NULL,
  `timedate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodreq`
--

INSERT INTO `bloodreq` (`srn`, `pfname`, `bg`, `page`, `datetime`, `unit`, `mobile`, `hname`, `hlocate`, `padd`, `pdisc`, `timedate`) VALUES
(1, 'firoz', 'b+', 105, '2021-02-03', 55, '6393036775', 'era hospital', 'meerut', 'meerut', 'accident', '2021-02-23 14:11:30'),
(2, 'firoz', 'b+', 105, '2021-02-03', 55, '6393036775', 'era hospital', 'zsCdsacdfsa', 'sdcsacfascfsac', 'cscscscsc', '2021-02-23 14:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `srn` int(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `bgroup` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `userid` text NOT NULL,
  `password` int(10) NOT NULL,
  `rpassword` int(10) NOT NULL,
  `availbility` varchar(15) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`srn`, `fname`, `bgroup`, `age`, `mobile`, `state`, `district`, `city`, `email`, `userid`, `password`, `rpassword`, `availbility`, `datetime`) VALUES
(1, 'khalid', 'b+', 21, '6393036775', 'up', 'moradabad', 'moradabad', '900umarkhalid@gmail.com', '5655kjskd', 555555, 555555, 'yes', '2021-02-23 09:39:19'),
(2, 'Khalid Khan', 'Select You', 22, '0639303677', '17', '16', '13', '900umarkhalid@gmail.com', '565656', 22222, 22222, '1', '2021-02-23 13:27:24'),
(3, 'arif Ali saifi', 'Select You', 0, '0639303677', 'Select Your State', 'Select Your District', 'Select Your City', '900umarkhalid@gmail.com', '565656', 22222, 0, 'Please Confirm ', '2021-02-23 13:28:54'),
(4, 'arif Ali saifi', '1', 52, '0639303677', '18', '17', '16', '900umarkhalid@gmail.com', 'arifalisaifiiiiiiiii', 12345, 12345, '2', '2021-02-23 13:30:27'),
(5, 'arif Ali saifi', '1', 52, '0639303677', '18', '17', '16', '900umarkhalid@gmail.com', 'arifalisaifiiiiiiiii', 12345, 12345, '2', '2021-02-23 13:34:22'),
(6, 'anukoo', 'Select You', 0, '', 'Select Your State', 'Select Your District', 'Select Your City', '', '565656', 22222, 0, 'Please Confirm ', '2021-02-23 13:34:29'),
(7, 'anukool', '', 99, '7545185784', '', '', '', 'anukoolrocker@gmail.com', '1111111', 123456789, 123456789, '2', '2021-02-23 13:35:20'),
(8, 'AArif ali saifi', '', 21, '8755600408', '', 'Select Your District', 'Select Your City', 'theaarifali53915@gmail.com', '53915', 0, 0, '1', '2021-02-23 23:01:25'),
(9, 'sajar ', '', 22, '0639303677', '', '', '', 'sajar@gmail.com', '565656', 22222, 0, '2', '2021-02-24 03:25:06'),
(10, 'Farman Ali', '', 22, '5656565565', '', '', '', 'farman@gmail.com', 'farman12345', 123456789, 123456789, '1', '2021-02-24 11:40:06'),
(11, 'Farman Ali', '', 22, '5656565565', '', '', '', 'farman@gmail.com', 'farman12345', 123456789, 123456789, '1', '2021-02-24 11:42:30'),
(12, 'Farman ', 'Select You', 0, '', 'Select Your State', 'Select Your District', 'Select Your City', '', '565656', 22222, 0, 'Please Confirm ', '2021-02-24 11:42:39'),
(13, '', '1', 22, '1010101010', '12', '11', '13', 'farman@gmail.com', '123456789', 11111111, 11111111, '1', '2021-02-24 11:43:17'),
(14, 'Khalid Khan', '1', 21, '0639303677', '12', '11', '13', '900umarkhalid@gmail.com', '565656', 22222, 654654654, '2', '2021-02-24 11:44:14'),
(15, 'Khalid Khan', 'Select You', 0, '0639303677', 'Select Your State', 'Select Your District', 'Select Your City', '900umarkhalid@gmail.com', '565656', 22222, 0, 'Please Confirm ', '2021-02-24 13:59:42'),
(16, 'Khalid Khan', 'Select You', 0, '0639303677', 'Select Your State', 'Select Your District', 'Select Your City', '900umarkhalid@gmail.com', '565656', 22222, 0, 'Please Confirm ', '2021-02-24 14:00:00'),
(17, 'Khalid Khan', 'Select You', 0, '0639303677', 'Select Your State', 'Select Your District', 'Select Your City', '900umarkhalid@gmail.com', '565656', 22222, 0, 'Please Confirm ', '2021-02-24 14:00:09'),
(18, 'Khalid Khan', 'Select You', 0, '0639303677', 'Select Your State', 'Select Your District', 'Select Your City', '900umarkhalid@gmail.com', '565656', 22222, 0, 'Please Confirm ', '2021-02-24 14:01:43'),
(19, 'Khalid Khan', 'Select You', 0, '0639303677', 'Select Your State', 'Select Your District', 'Select Your City', '900umarkhalid@gmail.com', '565656', 22222, 0, 'Please Confirm ', '2021-02-24 14:01:52'),
(20, 'Khalid Khan', 'Select You', 0, '0639303677', 'Select Your State', 'Select Your District', 'Select Your City', '900umarkhalid@gmail.com', '565656', 22222, 0, 'Please Confirm ', '2021-02-24 14:02:59'),
(21, 'Khalid Khan', 'Select You', 0, '0639303677', 'Select Your State', 'Select Your District', 'Select Your City', '900umarkhalid@gmail.com', '565656', 22222, 0, 'Please Confirm ', '2021-02-24 14:03:48'),
(22, 'Khalid Khan', 'Select You', 0, '0639303677', 'Select Your State', 'Select Your District', 'Select Your City', '900umarkhalid@gmail.com', '565656', 22222, 0, 'Please Confirm ', '2021-02-24 14:04:27'),
(23, 'Khalid Khan', 'A+', 22, '0639303677', 'A1-', 'A1-', 'A1-', '900umarkhalid@gmail.com', '565656', 22222, 0, '1', '2021-02-25 02:27:22'),
(24, 'Khalid Khan', 'A+', 22, '0639303677', 'Bombay Blood Group', 'Bombay Blood Group', 'Bombay Blood Group', '900umarkhalid@gmail.com', '565656', 22222, 0, '1', '2021-02-25 10:10:41'),
(25, 'anukool', 'A+', 77, '565656565', 'AB+', 'AB+', 'AB+', '900umarkhalid@gmail.com', '565656', 22222, 0, '1', '2021-02-25 11:24:46'),
(26, 'b', 'A+', 52, '1212121212', 'O+', 'O+', 'O+', '900umarkhalid@gmail.com', '565656', 22222, 22222, '1', '2021-02-25 11:25:19'),
(27, 'vc', '0+', 22, '1215254141', 'O+', 'O+', 'O+', '900umarkhalid@gmail.com', '565656', 22222, 0, '1', '2021-02-25 11:25:50'),
(28, 'qs', '0+', 52, '0639303677', 'O+', 'O+', 'O+', '900umarkhalid@gmail.com', '565656', 22222, 22222, '1', '2021-02-25 11:26:18'),
(29, 'bg', '0+', 22, '0639303677', 'O+', 'O+', 'O+', '900umarkhalid@gmail.com', '565656', 22222, 22222, '1', '2021-02-25 11:26:40'),
(30, 'Khalid Khan', '0+', 52, '0639303677', 'O+', 'O+', 'O+', '900umarkhalid@gmail.com', '565656', 22222, 22222, '2', '2021-02-25 11:27:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodreq`
--
ALTER TABLE `bloodreq`
  ADD PRIMARY KEY (`srn`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`srn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodreq`
--
ALTER TABLE `bloodreq`
  MODIFY `srn` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `srn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
