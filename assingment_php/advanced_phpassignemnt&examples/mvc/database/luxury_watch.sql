-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2020 at 08:07 AM
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
-- Database: `luxury_watch`
--

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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Cat_id` int(11) NOT NULL,
  `categories` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Cat_id`, `categories`, `date`) VALUES
(1, 'Mens Watches', '2020-06-30'),
(2, 'Womens Watch', '2020-06-30'),
(3, 'kids Watches', '2020-06-30'),
(4, 'Offers', '2020-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `ctid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `ctname` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`ctid`, `sid`, `ctname`) VALUES
(1, 1, 'Ahemdabad'),
(2, 1, 'Rajkot'),
(3, 1, 'Surat'),
(4, 1, 'Gandhinagar'),
(5, 2, 'Lucknow'),
(6, 2, 'Varansi'),
(7, 2, 'Gaziabad'),
(8, 2, 'Mathura'),
(9, 3, 'Jaipur'),
(10, 3, 'Udaipur'),
(11, 3, 'Kota'),
(12, 3, 'Raipur'),
(13, 4, 'Mumbai'),
(14, 4, 'Nasik'),
(15, 4, 'Pune'),
(16, 4, 'kambli');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contid`, `name`, `phone`, `email`, `message`) VALUES
(1, 'prateek', 91221212, 'bkpandey.pandey@gmail.com', 'hello please contact with me'),
(2, 'bhavika', 921221, 'bhavika@gmail.com', 'hi i want to return my products but i cant fount your customer care number please can u help me');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `custid` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `address` text NOT NULL,
  `sid` int(11) NOT NULL,
  `ctid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custid`, `photo`, `firstname`, `lastname`, `email`, `mobile`, `hobby`, `gender`, `password`, `pincode`, `address`, `sid`, `ctid`) VALUES
(5, 'uploads/ford_junagad.jpg', 'brijesh', 'pandey', 'bkpandey.pandey@gmail.com', 911212121, 'reading', 'male', 'YnJpajEyMw==', 9411212, 'bbb', 1, 1),
(6, 'uploads/mensshirts3.jpg', 'prateek', 'pandya', 'pateek@gmail.com', 922212122, 'reading', 'male', 'MTIzNA==', 360005, 'rajkot', 1, 1),
(7, 'uploads/mensshirts6.jpg', 'meet', 'pandya', 'meet@gmail.com', 9121212121, 'reading', 'male', 'MTIz', 360005, 'rajkot', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `Cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `oldprice` int(11) NOT NULL,
  `newprice` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `Cat_id`, `subcat_id`, `image1`, `image2`, `image3`, `productname`, `qty`, `oldprice`, `newprice`, `date`, `description`) VALUES
(3, 1, 2, 'uploads/WO-WAT-0010-2.jpg', 'uploads/WO-WAT-0006-3.jpg', 'uploads/WO-WAT-0004-4.jpg', 'Casio  Mens watch', 10, 1250, 1100, '2020-06-29', 'Luxary Watch'),
(4, 1, 2, 'uploads/WO-WAT-0004-2.jpg', 'uploads/ME-WAT-0006-4.jpg', 'uploads/WO-WAT-0010-4.jpg', 'Rebook sports 001', 1, 3500, 3000, '2020-06-30', '<p>good products</p>');

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
(1, 'Gujrat'),
(2, 'Uttar pradesh'),
(3, 'Rajsthan'),
(4, 'Mahrstra');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `subcat_id` int(11) NOT NULL,
  `subcategories` varchar(50) NOT NULL,
  `Cat_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`subcat_id`, `subcategories`, `Cat_id`, `date`) VALUES
(2, 'Rebook Mens Watches', 1, '2020-06-27'),
(3, 'Rado Mens Watches', 1, '2020-06-27'),
(4, 'Rado Kids Watches', 3, '2020-06-26'),
(5, 'Fastrak Mens Watches', 1, '2020-06-27'),
(6, 'Fastrak Kids Watches', 3, '2020-06-27'),
(7, 'Fastrak Kids Watches', 4, '2020-06-27'),
(8, 'Titan MensWatches', 1, '2020-06-27'),
(9, 'Titan Kids Watches', 3, '2020-06-27'),
(10, 'Titan Kids Watches', 4, '2020-06-27'),
(11, 'Sonata Mens Watches', 1, '2020-06-27'),
(12, 'Sonata Kids Watches', 3, '2020-06-27'),
(13, 'Sonata Mens Watches', 4, '2020-06-27'),
(14, 'Rado Womens Watches', 2, '2020-06-30'),
(15, 'fastrak Womens Watches', 2, '2020-06-30'),
(16, 'Titan Womens Watches', 2, '2020-06-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Cat_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`ctid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`custid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `ctid` (`ctid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`subcat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `ctid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `custid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
