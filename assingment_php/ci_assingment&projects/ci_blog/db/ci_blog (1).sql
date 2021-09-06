-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2018 at 08:11 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `addblogs`
--

CREATE TABLE `addblogs` (
  `bid` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descriptions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addblogs`
--

INSERT INTO `addblogs` (`bid`, `photo`, `title`, `descriptions`) VALUES
(8, './uploads/tick.png', 'akil kaida is gretesh men', ' is gretesh men');

-- --------------------------------------------------------

--
-- Table structure for table `addcountry`
--

CREATE TABLE `addcountry` (
  `coid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcountry`
--

INSERT INTO `addcountry` (`coid`, `cname`) VALUES
(13, 'india'),
(14, 'america'),
(15, 'pakistan'),
(17, 'afghanistan');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'a123');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cid`, `cname`) VALUES
(1, 'mumbai'),
(2, 'rajkot'),
(3, 'ahemdabad'),
(4, 'jamnagar'),
(5, 'anjar'),
(6, 'bhuj');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `sid` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`sid`, `sname`) VALUES
(1, 'gujrat'),
(2, 'punjab'),
(3, 'rajshthan'),
(4, 'utter pradesh'),
(5, 'jammu kashmir'),
(6, 'jarkhand'),
(8, 'maharastra');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `firstname`, `lastname`, `password`) VALUES
(1, 'p', 'p', 'pp'),
(2, 'p', 'p', 'p'),
(3, 'mmm', 'mmm', 'mmm'),
(4, 'p', 'p', 'p'),
(5, 'p', 'p', 'p'),
(6, 'm', 'm', 'm'),
(7, 'p', 'p', 'p'),
(8, 'p', 'p', 'p'),
(9, 'p', 'p', 'p'),
(10, 'ooo', 'ooo', 'ooo'),
(11, 'p', 'p', 'p'),
(12, 'p', 'p', 'p'),
(13, 'p', 'p', 'p'),
(14, 'mmm', 'mmmm', 'mmm'),
(15, 'mmm', 'mmmm', 'mmm'),
(16, 'lll', 'lll', 'lll'),
(17, 'i', 'i', 'i'),
(18, 'p', 'p', 'p'),
(19, 'o', 'o', 'o'),
(20, 'p', 'p', ''),
(21, 'pooo', 'oooo', 'oooo'),
(22, 'p', 'p', 'p'),
(23, 'p', 'p', 'nnnnnnnnnnnnn'),
(24, 'k', 'k', 'k'),
(25, 'p', 'p', 'p'),
(26, 'kkkkkkkkkk', 'kkkkkkkkkk', 'kkkkkkkkkkk'),
(27, 'pppppppp', 'pppppppppp', 'pppppppp'),
(28, 'mmmmmmmm', 'mmmmmmmmmm', 'mmmmmmmmmmmmm'),
(29, 'p', 'p', 'p'),
(30, 'p', 'p', 'p'),
(31, 'p', 'p', 'p'),
(32, 'p', 'p', 'p'),
(33, 'llllllllllll', 'llllllllllllllllllllll', 'lllllllllllllllllll'),
(34, 'm', 'm', 'm'),
(35, 'champak', 'chopada', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addblogs`
--
ALTER TABLE `addblogs`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `addcountry`
--
ALTER TABLE `addcountry`
  ADD PRIMARY KEY (`coid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addblogs`
--
ALTER TABLE `addblogs`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `addcountry`
--
ALTER TABLE `addcountry`
  MODIFY `coid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
