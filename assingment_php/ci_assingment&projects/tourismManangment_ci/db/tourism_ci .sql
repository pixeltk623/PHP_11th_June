-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 07:44 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism_ci`
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
(11, 'admin@gmail.com', 'a123'),
(12, 'dharmesh@gmail.com', 'd123');

-- --------------------------------------------------------

--
-- Table structure for table `tour_category`
--

CREATE TABLE `tour_category` (
  `cid` int(11) NOT NULL,
  `spcid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `sdate` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_category`
--

INSERT INTO `tour_category` (`cid`, `spcid`, `cname`, `sdate`) VALUES
(1, 301, 'Rajasthan', '18/06/19'),
(2, 301, 'Himachal Pradesh', '18/06/19'),
(3, 301, 'Uttarakhand', '18/06/19'),
(4, 301, 'Jammu & Kashmir', '18/06/19'),
(5, 302, 'Kerala', '18/06/19'),
(6, 302, 'Karnataka', '18/06/19'),
(7, 302, 'Tamil Nadu', '18/06/19'),
(8, 302, 'Andhra Pradesh', '18/06/19'),
(9, 303, 'Sikkim', '18/06/19'),
(10, 303, 'Assam', '18/06/19'),
(11, 303, 'Nagaland', '18/06/19'),
(12, 303, 'Tripura', '18/06/19'),
(13, 304, 'Goa', '18/06/19'),
(14, 304, 'Gujarat', '18/06/19'),
(15, 304, 'Maharahtra', '18/06/19'),
(16, 305, 'Madhya Pradesh', '18/06/19'),
(17, 305, 'Chhattisgarh', '18/06/19'),
(18, 306, 'Wildlife', '18/06/19'),
(19, 306, 'Hill Station', '18/06/19'),
(20, 306, 'Beaches', '18/06/19'),
(21, 306, 'Honeymoon', '18/06/19'),
(22, 306, 'Heritage', '18/06/19'),
(23, 306, 'Yoga And Aruyveda', '18/06/19'),
(24, 307, 'Trekking', '18/06/19'),
(25, 307, 'Skiing', '18/06/19'),
(26, 307, 'Motor Biking', '18/06/19'),
(27, 307, 'River Rafting', '18/06/19'),
(28, 307, 'Horse Safari', '18/06/19'),
(29, 307, 'Camel Safari', '18/06/19'),
(30, 309, 'Wildlife Tour', '18/06/19'),
(31, 309, 'Adventure', '18/06/19'),
(32, 309, 'Honeymoon', '18/06/19'),
(33, 309, 'Beaches', '18/06/19'),
(34, 309, 'Hill Station', '18/06/19'),
(35, 309, 'Heritage Tours', '18/06/19'),
(36, 309, 'Ayurveda Tours', '18/06/19'),
(37, 309, 'Cultural', '18/06/19'),
(38, 341, 'Jammu & Kashmir', '18/06/19'),
(39, 341, 'Rajasthan', '18/06/19'),
(40, 341, 'Kerala', '18/06/19'),
(41, 341, 'Gujarat', '18/06/19'),
(42, 341, 'Maharashtra', '18/06/19'),
(43, 341, 'Himachal Pradesh', '18/06/19'),
(44, 341, 'Karnataka', '18/06/19'),
(45, 342, 'Golden Triangle Tour', '18/06/19'),
(46, 342, 'Classical India Tour', '18/06/19'),
(47, 342, 'Sikkim Darjeeling Tour', '18/06/19'),
(48, 342, 'Frozen River Trek', '18/06/19'),
(49, 315, 'Frozen River Trek', '18/06/19'),
(50, 315, 'Heritage on Wheels', '18/06/19'),
(51, 315, 'Maharaja Express', '18/06/19'),
(52, 315, 'Royal Rajasthan on Wheels', '18/06/19'),
(53, 315, 'Buddhist Circuit Train', '18/06/19'),
(54, 343, 'Indian Wildlife Tour', '18/06/19'),
(55, 343, 'Temple Trails Tour India', '18/06/19'),
(56, 343, 'Buddhist Circuit Tours', '18/06/19'),
(57, 343, 'Himalayan Wonder', '18/06/19'),
(58, 325, 'Agra Hotels', '18/06/19'),
(59, 325, 'Jaipur Hotels', '18/06/19'),
(60, 325, 'Udaipur Hotels', '18/06/19'),
(61, 325, 'Manali Hotels', '18/06/19'),
(62, 326, 'Ranthambore National Park', '18/06/19'),
(63, 326, 'Bandhavgarh National Park', '18/06/19'),
(64, 326, 'Corbett National Park', '18/06/19'),
(65, 326, 'Kanha National Park', '18/06/19'),
(66, 326, 'Pench National Park', '18/06/19'),
(67, 326, 'Tadoba National Park', '18/06/19'),
(68, 327, 'The Park Calangute', '18/06/19'),
(69, 327, 'Neelam the Grand', '18/06/19'),
(70, 327, 'Hotel Calangute Towers', '18/06/19'),
(71, 327, 'Alor Holiday Resort', '18/06/19'),
(72, 328, 'Aman-i-Khas, Ranthambore', '18/06/19'),
(73, 328, 'Hyatt, Bangalore', '18/06/19'),
(74, 328, 'Hyatt Regency, Delhi', '18/06/19'),
(75, 328, 'Leela Palace, Udaipur', '18/06/19'),
(76, 328, 'ITC Grand Chola, Chennai', '18/06/19'),
(77, 329, 'Weekend Getaways Delhi', '18/06/19'),
(78, 329, 'Weekend Getaways Chennai', '18/06/19'),
(79, 329, 'Weekend Getaways Cochin', '18/06/19'),
(80, 329, 'Weekend Getaways Ahmedabad', '18/06/19'),
(81, 329, 'Weekend Getaways Jaipur', '18/06/19');

-- --------------------------------------------------------

--
-- Table structure for table `tour_city`
--

CREATE TABLE `tour_city` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_city`
--

INSERT INTO `tour_city` (`cid`, `cname`) VALUES
(201, 'Rajkot'),
(202, 'Ahmedabad'),
(203, 'Amreli'),
(204, 'Junagadh'),
(205, 'Surat'),
(206, 'Bhavnagar'),
(207, 'Jamnagar'),
(208, 'Porbandar'),
(209, 'Bharuch'),
(210, 'Veraval');

-- --------------------------------------------------------

--
-- Table structure for table `tour_contact`
--

CREATE TABLE `tour_contact` (
  `conid` int(11) NOT NULL,
  `conname` varchar(255) NOT NULL,
  `conemail` varchar(255) NOT NULL,
  `consubject` varchar(255) NOT NULL,
  `conmessage` text NOT NULL,
  `condate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tour_gallery`
--

CREATE TABLE `tour_gallery` (
  `imgid` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `imgdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_gallery`
--

INSERT INTO `tour_gallery` (`imgid`, `photo`, `imgdate`) VALUES
(3, '1.jpg', '23/06/19'),
(4, '2.jpg', '23/06/19'),
(5, '3.jpg', '23/06/19'),
(6, '4.jpg', '23/06/19'),
(7, '5.jpg', '23/06/19'),
(8, '7.jpg', '23/06/19'),
(9, '8.jpg', '23/06/19'),
(10, '9.jpg', '23/06/19'),
(11, '10.jpg', '23/06/19'),
(12, '12.jpg', '23/06/19'),
(13, '13.jpg', '23/06/19'),
(14, '6.jpg', '23/06/19'),
(15, '16.jpg', '23/06/19'),
(16, '17.jpg', '23/06/19'),
(17, '18.jpg', '23/06/19'),
(18, '19.jpg', '23/06/19'),
(19, '20.jpg', '23/06/19'),
(20, '21.jpg', '23/06/19'),
(21, '22.jpg', '23/06/19'),
(22, '23.jpg', '23/06/19');

-- --------------------------------------------------------

--
-- Table structure for table `tour_mpcategory`
--

CREATE TABLE `tour_mpcategory` (
  `mpcid` int(11) NOT NULL,
  `mpcname` varchar(255) NOT NULL,
  `cdate` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_mpcategory`
--

INSERT INTO `tour_mpcategory` (`mpcid`, `mpcname`, `cdate`) VALUES
(201, 'Destinations', '18/06/19'),
(202, 'Holidays Idea', '18/06/19'),
(203, 'Packages', '18/06/19'),
(204, 'Places To Stay', '18/06/19'),
(205, 'Weekand Getway', '18/06/19'),
(206, 'Travel by Month', '18/06/19'),
(207, 'International', '18/06/19');

-- --------------------------------------------------------

--
-- Table structure for table `tour_spcategory`
--

CREATE TABLE `tour_spcategory` (
  `spcid` int(11) NOT NULL,
  `spcname` varchar(255) NOT NULL,
  `mpcid` int(11) NOT NULL,
  `spcdate` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_spcategory`
--

INSERT INTO `tour_spcategory` (`spcid`, `spcname`, `mpcid`, `spcdate`) VALUES
(301, 'North India', 201, '18/06/19'),
(302, 'South India', 201, '18/06/19'),
(303, 'East India', 201, '18/06/19'),
(304, 'West India', 201, '18/06/19'),
(305, 'Central India', 201, '18/06/19'),
(306, 'Popular India Tourism Destinations  ', 202, '18/06/19'),
(307, 'Adventure Tourism', 202, '18/06/19'),
(309, 'Holidays by Interest', 203, '18/06/19'),
(344, 'sssss', 201, '23/06/19'),
(343, 'Special Packages', 203, '18/06/19'),
(342, 'Popular Tour Packages', 203, '18/06/19'),
(315, 'Luxury Train Tour', 203, '18/06/19'),
(341, 'Packages by State', 203, '18/06/19'),
(319, 'Singapore Tour', 207, '18/06/19'),
(320, 'Thailand Tour', 207, '18/06/19'),
(321, 'Malaysia Tour', 207, '18/06/19'),
(322, 'Indonesia Tour', 207, '18/06/19'),
(323, 'Dubai Tour ', 207, '18/06/19'),
(324, ' Australia Tour', 207, '18/06/19'),
(325, 'City Wise', 204, '18/06/19'),
(326, 'Wildlife Resorts', 204, '18/06/19'),
(327, 'Beach Resorts', 204, '18/06/19'),
(328, 'Luxury Hotels', 204, '18/06/19'),
(329, 'Top Weekend Breaks & Short Getaways Near Your City', 205, '18/06/19'),
(330, 'January', 206, '18/06/19'),
(331, 'February', 206, '18/06/19'),
(332, 'March', 206, '18/06/19'),
(333, 'April', 206, '18/06/19'),
(334, 'June', 206, '18/06/19'),
(335, 'July', 206, '18/06/19'),
(336, 'August', 206, '18/06/19'),
(337, 'September', 206, '18/06/19'),
(338, 'October', 206, '18/06/19'),
(339, 'November', 206, '18/06/19'),
(340, 'December', 206, '18/06/19');

-- --------------------------------------------------------

--
-- Table structure for table `tour_user`
--

CREATE TABLE `tour_user` (
  `uid` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `uemail` varchar(255) NOT NULL,
  `umobile` bigint(20) NOT NULL,
  `upassword` varchar(255) NOT NULL,
  `udate` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_user`
--

INSERT INTO `tour_user` (`uid`, `uname`, `uemail`, `umobile`, `upassword`, `udate`) VALUES
(101, 'dharmesh', 'dharmesh@gmail.com', 9689658965, '1234', '22/06/19'),
(105, 'jay', 'jay@gmail.com', 9898989898, '1234', '23/06/19 21:57 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tour_category`
--
ALTER TABLE `tour_category`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `spcid` (`spcid`);

--
-- Indexes for table `tour_city`
--
ALTER TABLE `tour_city`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tour_contact`
--
ALTER TABLE `tour_contact`
  ADD PRIMARY KEY (`conid`);

--
-- Indexes for table `tour_gallery`
--
ALTER TABLE `tour_gallery`
  ADD PRIMARY KEY (`imgid`);

--
-- Indexes for table `tour_mpcategory`
--
ALTER TABLE `tour_mpcategory`
  ADD PRIMARY KEY (`mpcid`);

--
-- Indexes for table `tour_spcategory`
--
ALTER TABLE `tour_spcategory`
  ADD PRIMARY KEY (`spcid`),
  ADD KEY `mpcid` (`mpcid`);

--
-- Indexes for table `tour_user`
--
ALTER TABLE `tour_user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tour_category`
--
ALTER TABLE `tour_category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `tour_city`
--
ALTER TABLE `tour_city`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `tour_contact`
--
ALTER TABLE `tour_contact`
  MODIFY `conid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tour_gallery`
--
ALTER TABLE `tour_gallery`
  MODIFY `imgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tour_mpcategory`
--
ALTER TABLE `tour_mpcategory`
  MODIFY `mpcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `tour_spcategory`
--
ALTER TABLE `tour_spcategory`
  MODIFY `spcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=345;

--
-- AUTO_INCREMENT for table `tour_user`
--
ALTER TABLE `tour_user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
