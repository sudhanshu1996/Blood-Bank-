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
-- Table structure for table `reciever2`
--

CREATE TABLE `reciever2` (
  `rname` varchar(50) NOT NULL,
  `rid` int(15) NOT NULL,
  `orgid` int(15) NOT NULL,
  `bgp` varchar(3) NOT NULL,
  `amts` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reciever2`
--

INSERT INTO `reciever2` (`rname`, `rid`, `orgid`, `bgp`, `amts`) VALUES
('', 0, 0, 'A', 0),
('', 0, 0, 'A', 0),
('sudhanshu', 1234, 1234, 'O', 250),
('vikas', 141070037, 141070037, 'AB', 250),
('sjcBH', 546135, 164646, '-AB', 100);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
