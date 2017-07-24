-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2016 at 11:55 AM
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
-- Table structure for table `doner`
--

CREATE TABLE `doner` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `bgroup` varchar(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `city` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doner`
--

INSERT INTO `doner` (`fname`, `lname`, `bgroup`, `email`, `pass`, `city`) VALUES
('', '', '', '', 'd41d8cd98f00', ''),
('s', 's', '', '213@gmail.com', '4de35585e43001e7436de75dae44b67f', ''),
('a', 'a', '', 'aaa@gmail.com', '733d7be2196ff70efaf6913fc8bdcabf', ''),
('Khairnar', 'vikas', '', 'anis6546unn515y@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
('sunny', 'ani', '', 'anisu5465nny@gmail.com', '81dc9bdb52d0', ''),
('sunny', 'ani', '', 'anisunn515y@gmail.com', '81dc9bdb52d0', ''),
('sunny', 'ani', '', 'anisunny@gmail.com', '81dc9bdb52d0', ''),
('b', 'a', '', 'c@gmail.com', 'a424ed4bd3a7d6aea720b86d4a360f75', ''),
('c', 'c', '', 'ced@gmail.com', 'a45fdb1e4ac646c9e65a1769663e5704', ''),
('bhu', 'stuv', '', 'dfgh@gmail.com', 'e35cf7b66449df565f93c607d5a81d09', ''),
('f', 'f', '', 'email@gail.com', '5583413443164b56500def9a533c7c70', ''),
('Khairnar', 'ani', '', 'fd55sfsd@gmail.com', '81dc9bdb52d0', ''),
('Khairnar', 'vikas', '', 'fdsfs212d@gmail.com', '81dc9bdb52d0', ''),
('g', 'g', '', 'g@mail.com', '8e452e79cd525671ce2fb6997b73aaf9', ''),
('lk', 'lk', '', 'l@gmail.com', 'a424ed4bd3a7d6aea720b86d4a360f75', ''),
('p', 'p', '', 'p@gmail.com', '6786f3c62fbf9021694f6e51cc07fe3c', ''),
('q', 'q', '', 'plm@gmail.com', 'a2f2e411c5d6b2ac64cd005253fb082c', ''),
('q', 'q', '', 'qaz@gmail.com', '4607e782c4d86fd5364d7e4508bb10d9', ''),
('q', 'q', '', 'qpo@gmail.com', '1c1d4df596d01da60385f0bb17a4a9e0', ''),
('srb', 'srb', '', 'qwer@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
('kavale', 'rohit', '', 'rohit@gmail.com', 'd07907595ade6c5751d6e340dccbc7ac', ''),
('s', 's', '', 'sdf@gmail.com', '4607e782c4d86fd5364d7e4508bb10d9', ''),
('bhandarwar', 'sudhanshu', '', 'srb12031996@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
('b', 's', '', 'srb12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
('b', 's', '', 'srb@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
('bhnadarwar', 'sudhanshu', '', 'sudha@gmail.com', '8e452e79cd525671ce2fb6997b73aaf9', ''),
('bhandarwar', 'sudhanshu', '', 'sudhanshu1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
('bhandarwar', 'sudhanshu', '', 'sudhanshu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', ''),
('t', 't', '', 'tdfg@Gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
('Khairnar', 'tushar', 'b-', 'tush@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
('uyt', 'tyu', '', 'tyu@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
('bf55', 'c14', '', 'vd565d@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'abcs'),
('Khairnar', 'vikas', 'o+', 'vdd@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
('Khairnar', 'vikas', '', 'Vik2as@gmail.com', '81dc9bdb52d0', ''),
('Khairnar', 'vikas', '', 'Vikas1555641654@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'nashik'),
('vdsvsd', 'vf d', 'a+', 'Vikas15641654@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
('abc', 'xyz', '', 'Vikas1569854@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Nashik'),
('Khairnar', 'vikas', '', 'Vikas1@gmail.com', '81dc9bdb52d0', ''),
('Khairnar02', 'vikas01', '', 'vikas5959@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Mumbai'),
('Khairnar', 'vikas', '', 'Vikas@gmail.com', '827ccb0eea8a', '');

-- --------------------------------------------------------

--
-- Table structure for table `doner1`
--

CREATE TABLE `doner1` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `blg` varchar(3) NOT NULL,
  `city` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doner1`
--

INSERT INTO `doner1` (`fname`, `lname`, `blg`, `city`, `email`, `pass`) VALUES
('sharma', 'kapil ', 'o+', 'Mumbai', 'dvfdsfsd@gmail.com', '81dc9bdb52d0'),
('ani', 'sun', '', 'nashik', 'scas@gmail.com', '265165165'),
('Khairnar', 'vicky', 'sel', 'Mumbai', 'srb5315112031996@gmail.com', '81dc9bdb52d0'),
('khairnar', 'tushar', 'sel', 'nashik', 'vdsfsdd@gmail.com', '81dc9bdb52d0'),
('Khairnar', 'vikas01', '', 'Nashik', 'Vikas@gmail.com', '81dc9bdb52d0');

-- --------------------------------------------------------

--
-- Table structure for table `org`
--

CREATE TABLE `org` (
  `oname` varchar(12) NOT NULL,
  `oid` varchar(15) NOT NULL,
  `otype` varchar(10) NOT NULL,
  `address` varchar(70) NOT NULL,
  `city` varchar(15) NOT NULL,
  `pincode` int(8) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `org`
--

INSERT INTO `org` (`oname`, `oid`, `otype`, `address`, `city`, `pincode`, `contact_no`, `email`, `pass1`) VALUES
('bloodpoint', '123456', 'goverment', 'near five garden , vjti colleg,matunga', 'mumbai', 400019, 2147483647, 'vikas@gmail.com', '81dc9bdb52d0'),
('bloodpoint', '569874123', 'private', 'near five garden , vjti colleg,matunga', 'mumbai', 400019, 2147483647, 'vikas@gmail.com', '81dc9bdb52d0'),
('bloodpoint', '987466211', 'goverment', 'near five garden , vjti colleg,matunga', 'mumbai', 400019, 2147483647, 'vik1as@gmail.com', '81dc9bdb52d0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doner`
--
ALTER TABLE `doner`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `doner1`
--
ALTER TABLE `doner1`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `org`
--
ALTER TABLE `org`
  ADD PRIMARY KEY (`oid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
