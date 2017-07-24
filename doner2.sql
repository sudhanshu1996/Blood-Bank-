-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2016 at 08:03 PM
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
-- Table structure for table `doner2`
--

CREATE TABLE `doner2` (
  `name` varchar(50) NOT NULL,
  `Did` int(15) NOT NULL,
  `bgp` varchar(5) NOT NULL,
  `Oid` int(15) NOT NULL,
  `amt` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doner2`
--

INSERT INTO `doner2` (`name`, `Did`, `bgp`, `Oid`, `amt`) VALUES
('', 0, 'A', 0, 0),
('', 0, 'A', 0, 0),
('', 0, 'A', 0, 0),
('', 0, 'A', 0, 0),
('', 0, 'A', 0, 0),
('mvjbmb', 0, '7fc', 6, 0),
('', 0, 'A', 0, 0),
('', 0, 'A', 0, 0),
('', 89797, 'A', 0, 0),
('', 9979, 'A', 0, 0),
('', 852963741, 'A', 0, 41),
('', 141070049, 'A', 0, 500),
('krish', 150, 'A', 0, 250),
('krish', 150, 'A', 0, 250),
('hiwc', 88, 'A', 0, 100),
('ppp', 66, 'A', 36, 200),
('ksnc', 21, '-O', 12, 300),
('', 0, 'A', 25639, 0),
('', 0, 'A', 123, 0),
('', 0, 'A', 123, 0),
('', 0, 'A', 0, 0),
('', 0, 'A', 0, 0),
('', 0, 'A', 0, 0),
('', 0, 'A', 0, 0),
('', 0, 'A', 0, 0),
('', 0, 'A', 0, 0),
('zvjzv', 112165, 'A', 661654, 210);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
