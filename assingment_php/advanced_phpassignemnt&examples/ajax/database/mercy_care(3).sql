-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2020 at 08:19 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mercy_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `email`, `password`) VALUES
(1, 'mercyadmin@gmail.com', 'af8f9dffa5d420fbc249141645b962ee');

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `chid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `type of children` varchar(255) NOT NULL,
  `eid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`chid`, `name`, `gender`, `type of children`, `eid`) VALUES
(1, 'raj', 'male', 'mentally retired', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `ctid` int(11) NOT NULL,
  `ctname` varchar(255) NOT NULL,
  `sid` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`ctid`, `ctname`, `sid`, `status`) VALUES
(1, 'Rajkot', 7, 1),
(2, 'Ahmedabad', 7, 1),
(3, 'Surat', 7, 0),
(4, 'Gandhinagar', 7, 0),
(5, 'Jamnagar', 7, 1),
(6, 'Junagdh', 7, 1),
(7, 'Oxford', 1, 1),
(8, 'Cambridge', 1, 1),
(9, 'Elstow', 1, 1),
(10, 'Batley', 2, 1),
(11, 'Elland', 2, 1),
(12, 'Otley', 2, 1),
(13, 'Burari', 12, 1),
(14, 'Carston', 3, 1),
(15, 'Childwall', 3, 1),
(16, 'Dingle', 3, 1),
(17, 'Kota', 11, 1),
(18, 'Ajmer', 11, 1),
(19, 'Coventry', 4, 1),
(20, 'Herefort', 4, 1),
(21, 'Worcester', 4, 1),
(22, 'Udaipur', 11, 1),
(23, 'West Godavari', 5, 1),
(24, 'Adoni', 5, 1),
(25, 'Tirupti', 5, 1),
(26, 'Nagarjuna Sagar', 5, 1),
(27, 'Bomdila', 6, 1),
(28, 'Tawang', 6, 1),
(29, 'Itanagar', 6, 1),
(30, 'Noida', 9, 1),
(31, 'Allahabad', 9, 1),
(32, 'Agra', 9, 1),
(33, 'Gokul', 9, 1),
(34, 'Varansi', 9, 1),
(35, 'Ayodhya', 9, 1),
(36, 'South Valley', 13, 1),
(37, 'Silver City', 13, 1),
(38, 'Ujjain', 10, 1),
(39, 'Bhopal', 10, 1),
(40, 'Chanderi', 10, 1),
(41, 'Chitrakoot', 10, 1),
(42, 'Columbus', 13, 1),
(43, 'Gig Harbor', 14, 1),
(44, 'Kent', 14, 1),
(46, 'Onomichi', 17, 1),
(50, 'kgj', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cloth`
--

CREATE TABLE `cloth` (
  `clothid` int(11) NOT NULL,
  `orid` int(11) NOT NULL,
  `cloth_catid` int(11) NOT NULL,
  `nochild` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `ddate` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cloth`
--

INSERT INTO `cloth` (`clothid`, `orid`, `cloth_catid`, `nochild`, `gender`, `ddate`) VALUES
(1, 4, 2, 12, 'male', '12/12/2019'),
(2, 3, 4, 20, 'female', '23/2/2020'),
(3, 3, 4, 20, 'female', '23/2/2020'),
(4, 6, 5, 30, 'male', '12/05/2020'),
(6, 3, 3, 20, 'female', '2019-11-11'),
(7, 3, 2, 12, 'male', '1098-12-11'),
(8, 7, 1, 4, 'male', '2020-02-23'),
(9, 8, 3, 10, 'female', '2019-01-22');

-- --------------------------------------------------------

--
-- Table structure for table `cloth_category`
--

CREATE TABLE `cloth_category` (
  `cloth_catid` int(11) NOT NULL,
  `clothnm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cloth_category`
--

INSERT INTO `cloth_category` (`cloth_catid`, `clothnm`) VALUES
(1, 'T-shirt'),
(2, 'Jeans'),
(3, 'Dress'),
(4, 'Top'),
(5, 'Paired-cloth'),
(6, 'shirt');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`cid`, `cname`, `status`) VALUES
(1, 'India', '0'),
(2, 'United Kingdom', '1'),
(3, 'United States', '1'),
(4, 'Canada', '1'),
(5, 'Japan', '1'),
(6, 'China', '1'),
(9, 'France', '1'),
(10, 'Jarmani', '1');

-- --------------------------------------------------------

--
-- Table structure for table `donator`
--

CREATE TABLE `donator` (
  `did` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `ctid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donator`
--

INSERT INTO `donator` (`did`, `photo`, `fname`, `lname`, `email`, `password`, `phone`, `dob`, `gender`, `address`, `cid`, `sid`, `ctid`) VALUES
(1, 'uploads/f3.jpg', 'brijesh', 'pandey', 'bkpandey.pandey@gmail.com', '123456', 9173357217, '1222-02-12', 'male', 'kk', 1, 1, 1),
(2, 'uploads/IMG-20181007-WA0000_1538926736040.jpg', 'parth', 'savaliya', 'p@gmail.com', '123456', 9909049699, '1998-12-11', 'male', 'rajkot', 1, 27, 1),
(3, 'uploads/1.png', 'ankur', 'mrkana', 'a@gmail.com', '123456', 9909049699, '5666-04-04', 'male', 'hsd\r\nada', 1, 27, 16);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ephone` bigint(20) NOT NULL,
  `ebod` varchar(255) NOT NULL,
  `egender` varchar(255) NOT NULL,
  `eaddress` text NOT NULL,
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `ctid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `fname`, `lname`, `email`, `password`, `ephone`, `ebod`, `egender`, `eaddress`, `cid`, `sid`, `ctid`) VALUES
(1, 'Dhara', 'Patel', 'dp@gmail.com', 'patel123', 90909090, '2019-10-09', 'female', 'nana mava', 1, 7, 1),
(2, 'Rajvi', 'Sorthiya', 'sorthiya.rajvi112@gmail.com', 'rajvi123', 8765479432, '2006-06-20', 'female', 'S.g. road, near sarkhej', 1, 7, 1),
(3, 'dimple', 'savaliya', 'dimple.savaliya@gmail.com', 'dimple123', 8765479432, '1999-08-10', 'female', 'juhu bag, karol colony', 1, 10, 18),
(4, 'rushil', 'koyani', 'rk@gmail.com', 'rushil123', 8160057115, '1999-09-12', 'male', 'jkhkhaj', 1, 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `fid` int(11) NOT NULL,
  `orid` int(11) NOT NULL,
  `fcatid` int(11) NOT NULL,
  `nochild` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`fid`, `orid`, `fcatid`, `nochild`, `date`) VALUES
(5, 6, 2, 45, '2015-12-11'),
(2, 2, 3, 45, '2019-11-18'),
(3, 1, 1, 12, '1998-12-11'),
(6, 3, 3, 20, '1998-05-30'),
(7, 5, 1, 34, '1998-12-11'),
(8, 3, 2, 45, '12/12/2020'),
(10, 1, 1, 14, '2020-02-08'),
(11, 7, 1, 12, '2019-01-22'),
(12, 8, 1, 12, '2020-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `food_category`
--

CREATE TABLE `food_category` (
  `fcatid` int(11) NOT NULL,
  `foodnm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_category`
--

INSERT INTO `food_category` (`fcatid`, `foodnm`) VALUES
(1, 'Breakfast'),
(2, 'Dinner'),
(3, 'Lunch');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `orid` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `oname` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `ctid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `clothid` int(11) NOT NULL,
  `otherid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`orid`, `photo`, `oname`, `address`, `cid`, `sid`, `ctid`, `fid`, `clothid`, `otherid`) VALUES
(1, 'org/o1.jpg', 'Kathiyawar Nirashrit Balashram', 'https://goo.gl/maps/2ccsBBT2GcZCV9k6A', 1, 27, 1, 2, 6, 1),
(2, 'org/o2.jpeg', 'NAVJEEVAN TRUST', 'https://goo.gl/maps/1qArZ9Cy15jQ1tW59', 1, 9, 34, 1, 2, 2),
(3, 'org/o3.jpg', 'AMBA', 'Jayant Society, Mavdi Plot, Rajkot - 360004 (Map)', 1, 27, 1, 3, 3, 3),
(4, 'org/o4.jpg', 'AEKRANG CHILDREN DEVELOPMENT INSTITUTE', 'https://goo.gl/maps/rJX4CuD5fh3qEJ9c9', 1, 27, 1, 3, 5, 4),
(5, 'org/o5.jpeg', 'MOTHER TERESA ASHRAM', 'https://goo.gl/maps/8i8eyLGxz97YSPam8', 1, 27, 1, 2, 2, 2),
(6, 'org/o6.jpg', 'SHREE VIRBAIMA VATSALYADHAM ANATH AASHRAM', 'https://goo.gl/maps/sYarYB4CBpxW8WgJ9', 1, 27, 1, 1, 1, 1),
(7, 'org/o7.jpg', 'Brijesh Orphan Center', 'https://goo.gl/maps/sYarYB4CBpxW8WgJ9', 1, 27, 2, 1, 1, 2),
(8, 'org/o8.jpg', 'Rushita Orphan Trust Pvt lTd Junagad', 'https://goo.gl/maps/sYarYB4CBpxW8WgJ9', 1, 27, 6, 2, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE `other` (
  `otherid` int(11) NOT NULL,
  `orid` int(11) NOT NULL,
  `other_catid` int(11) NOT NULL,
  `nochild` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `ddate` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other`
--

INSERT INTO `other` (`otherid`, `orid`, `other_catid`, `nochild`, `gender`, `ddate`) VALUES
(1, 2, 3, 10, 'male', '3/12/2019'),
(2, 2, 0, 20, 'male', '1998-12-11'),
(3, 1, 4, 45, 'male', '1999-12-23'),
(4, 3, 2, 45, 'male', '2019-12-12'),
(5, 1, 2, 10, 'male', '1998-12-11'),
(6, 7, 2, 32, 'male', '2019-01-22'),
(7, 8, 2, 12, 'male', '2020-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `other_category`
--

CREATE TABLE `other_category` (
  `other_catid` int(11) NOT NULL,
  `othernm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_category`
--

INSERT INTO `other_category` (`other_catid`, `othernm`) VALUES
(1, 'Gift'),
(2, 'Toys'),
(3, 'Kites'),
(4, 'Crackers');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `type of currency` varchar(255) NOT NULL,
  `did` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `amount`, `type of currency`, `did`, `eid`, `phone`) VALUES
(1, 10000, 'rupees', 1, 1, 9607805683);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `sid` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `cid` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`sid`, `sname`, `cid`, `status`) VALUES
(1, 'london', 2, '0'),
(2, 'West Yorkshire', 2, '1'),
(3, 'Liverpool', 2, '1'),
(4, 'West-Midlands', 2, '1'),
(5, 'Andhra Pradesh', 1, '1'),
(6, 'Arunachal Pradesh', 1, '1'),
(9, 'Uttar Pradesh', 1, '1'),
(10, 'Madhya Pradesh', 1, '1'),
(11, 'Rajasthan', 1, '1'),
(12, 'Delhi', 1, '1'),
(13, 'New Mexico', 3, '1'),
(14, 'Washington', 3, '1'),
(15, 'Georgia', 3, '1'),
(16, 'Lowa', 3, '1'),
(17, 'Hiroshima	', 5, '1'),
(18, 'Beijing', 6, '1'),
(19, 'Shanghai', 6, '1'),
(20, 'Guangdong', 6, '1'),
(21, 'Jiangsu', 6, '1'),
(22, 'Gansu', 6, '1'),
(23, 'Nagano', 5, '1'),
(24, 'Tokushima', 5, '1'),
(25, 'Alberta', 4, '1'),
(26, 'Manitoba', 4, '1'),
(27, 'Gujarat', 1, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`chid`),
  ADD KEY `eid` (`eid`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`ctid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `cloth`
--
ALTER TABLE `cloth`
  ADD PRIMARY KEY (`clothid`),
  ADD KEY `orid` (`orid`),
  ADD KEY `cloth_catid` (`cloth_catid`);

--
-- Indexes for table `cloth_category`
--
ALTER TABLE `cloth_category`
  ADD PRIMARY KEY (`cloth_catid`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `donator`
--
ALTER TABLE `donator`
  ADD PRIMARY KEY (`did`),
  ADD KEY `cid` (`cid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `ctid` (`ctid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `ctid` (`ctid`),
  ADD KEY `cid` (`cid`) USING BTREE,
  ADD KEY `sid` (`sid`) USING BTREE;

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `oid` (`orid`),
  ADD KEY `catid` (`fcatid`);

--
-- Indexes for table `food_category`
--
ALTER TABLE `food_category`
  ADD PRIMARY KEY (`fcatid`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`orid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `ctid` (`ctid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `fid` (`fid`),
  ADD KEY `clothid` (`clothid`),
  ADD KEY `otherid` (`otherid`);

--
-- Indexes for table `other`
--
ALTER TABLE `other`
  ADD PRIMARY KEY (`otherid`),
  ADD KEY `orid` (`orid`),
  ADD KEY `other_catid` (`other_catid`);

--
-- Indexes for table `other_category`
--
ALTER TABLE `other_category`
  ADD PRIMARY KEY (`other_catid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `did` (`did`),
  ADD KEY `eid` (`eid`),
  ADD KEY `phone` (`phone`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `chid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `ctid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `cloth`
--
ALTER TABLE `cloth`
  MODIFY `clothid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cloth_category`
--
ALTER TABLE `cloth_category`
  MODIFY `cloth_catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `donator`
--
ALTER TABLE `donator`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `food_category`
--
ALTER TABLE `food_category`
  MODIFY `fcatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `orid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
  MODIFY `otherid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `other_category`
--
ALTER TABLE `other_category`
  MODIFY `other_catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
