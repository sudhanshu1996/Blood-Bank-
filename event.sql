-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2016 at 08:04 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `ename` varchar(50) NOT NULL,
  `orgid` int(15) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`ename`, `orgid`, `addr`, `city`, `date`, `time`) VALUES
('', 0, 'matunga near five garden', 'mumbai', '2016-12-20', '00:00:00'),
('', 0, 'matunga near five garden', '', '0000-00-00', '00:00:00'),
('', 0, '', '', '0000-00-00', '00:00:00'),
('', 0, '', '', '0000-00-00', '00:00:00'),
('aman organisation', 123, 'matunga near five garden', 'mumbai', '2016-12-14', '00:00:00'),
('blood donation camp', 1234, 'matunga near five garden', 'mumbai', '2016-11-08', '11:30:00'),
('blood donation camp', 1234, 'matunga near five garden', 'mumbai', '2016-11-08', '11:30:00'),
('ckJ C', 6131, 'cb ssJBCJM nkjc', 'cbzjmbc', '2016-09-29', '00:01:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
