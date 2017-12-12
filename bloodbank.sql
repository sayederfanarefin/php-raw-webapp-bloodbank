-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2015 at 08:46 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(40) NOT NULL,
  `admin_pass` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1010101011 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_pass`) VALUES
(1010101010, 'meem', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `bb`
--

CREATE TABLE IF NOT EXISTS `bb` (
  `bb_id` int(10) NOT NULL,
  `bb_name` varchar(40) NOT NULL,
  `bb_inchargename` varchar(30) NOT NULL,
  `bb_contactno` int(15) NOT NULL,
  `bb_address` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bb`
--

INSERT INTO `bb` (`bb_id`, `bb_name`, `bb_inchargename`, `bb_contactno`, `bb_address`) VALUES
(101, 'Chittagong General Hospital', 'Mr. Y', 611407, 'Andarkillah,Chittagong'),
(102, 'Combined Military Hospital', 'Mr. XY', 681551, 'Chittagong Cantt, Chittagong'),
(103, 'Chittagong Medical College Hospital', 'Mr. Shuvo', 619597, 'Fazlul Kader Road, Chittagong'),
(104, 'B.B.M.H', 'Mr. Z', 659025, 'U.S.T.C Foy''s Lake'),
(105, 'National Hospital Chittagong', 'Mr. XYZ', 623753, '30, Mehedibag, Chittagong');

-- --------------------------------------------------------

--
-- Table structure for table `dash`
--

CREATE TABLE IF NOT EXISTS `dash` (
  `goid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  `bg` varchar(50) NOT NULL,
  `q` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `bb_id` int(10) NOT NULL,
  `A+` int(50) NOT NULL,
  `A-` int(50) NOT NULL,
  `B+` int(50) NOT NULL,
  `B-` int(50) NOT NULL,
  `O+` int(50) NOT NULL,
  `O-` int(50) NOT NULL,
  `AB+` int(50) NOT NULL,
  `AB-` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`bb_id`, `A+`, `A-`, `B+`, `B-`, `O+`, `O-`, `AB+`, `AB-`) VALUES
(101, 3, 0, 0, 0, 0, 0, 0, 0),
(102, 3, 0, 0, 0, 1, 0, 0, 0),
(103, 3, 6, 0, 0, 2, 0, 0, 0),
(104, 3, 0, 0, 0, 0, 0, 0, 0),
(105, 0, 0, 1, 0, 1, 0, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
  `donor_id` int(10) NOT NULL,
  `donor_name` varchar(40) NOT NULL,
  `donor_pincode` int(20) NOT NULL,
  `donor_age` int(10) NOT NULL,
  `donor_bloodgroup` varchar(5) NOT NULL,
  `donor_contactno` int(15) NOT NULL,
  `donor_address` varchar(40) NOT NULL,
  `donor_lastdonation` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `donor_name`, `donor_pincode`, `donor_age`, `donor_bloodgroup`, `donor_contactno`, `donor_address`, `donor_lastdonation`) VALUES
(11, 'mimbo', 12345, 23, 'O+', 1671111111, 'B-111,Bangabandhu Hall,CUET', '0000-00-00'),
(12, 'Gomir', 123, 23, 'AB+', 12222, 'bb', '0000-00-00'),
(13, 'Sam', 12345, 20, 'AB+', 1611111111, 'B101', '0000-00-00'),
(15, 'Bene', 12345, 20, 'O+', 16111111, 'B101', '0000-00-00'),
(16, 'Zubaer', 1233, 23, 'O+', 1622222, 'B103', '2015-08-28'),
(19, 'Mustafiz', 12345, 22, 'O-', 1828651567, 'B311', '2015-06-03'),
(20, 'MD. Habibur Rahman', 12345, 22, 'O+', 1685681407, 'B311', '2015-05-13'),
(21, 'shohan', 77, 21, 'B+', 1676703020, 'B-101,Bangabandhu Hall,CUET', '0000-00-00'),
(22, 'saif', 105, 21, 'o+', 231311, 'sd', '2015-08-28'),
(23, 'A', 123, 22, 'O+', 1671111111, 'aksk', '2015-08-28'),
(24, 'nayela', 112, 22, 'AB+', 1671111111, 'Sk hall', '2015-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `p_id` int(10) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_pincode` int(20) NOT NULL,
  `p_age` int(120) NOT NULL,
  `p_disease` varchar(30) NOT NULL,
  `p_hospital` varchar(30) NOT NULL,
  `p_doctor_contactno` varchar(15) NOT NULL,
  `p_bloodgroup` varchar(10) NOT NULL,
  `p_contactno` int(15) NOT NULL,
  `p_address` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `p_name`, `p_pincode`, `p_age`, `p_disease`, `p_hospital`, `p_doctor_contactno`, `p_bloodgroup`, `p_contactno`, `p_address`) VALUES
(1, 'Ridwan', 12345, 30, 'Dhojo', 'CMC', '123344', 'O+', 112132, 'B105'),
(2, 'nayela', 112, 22, 'bonno', 'CUET Medical', '123344', 'AB+', 2147483647, 'SK hall');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `user_nid` int(15) NOT NULL,
  `user_pincode` int(20) NOT NULL,
  `user_email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bb`
--
ALTER TABLE `bb`
  ADD PRIMARY KEY (`bb_id`);

--
-- Indexes for table `dash`
--
ALTER TABLE `dash`
  ADD PRIMARY KEY (`goid`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`bb_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1010101011;
--
-- AUTO_INCREMENT for table `bb`
--
ALTER TABLE `bb`
  MODIFY `bb_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `dash`
--
ALTER TABLE `dash`
  MODIFY `goid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `bb_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donor_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
ADD CONSTRAINT `bb` FOREIGN KEY (`bb_id`) REFERENCES `bb` (`bb_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
