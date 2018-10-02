-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 02, 2018 at 12:32 PM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(150) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `UserName`, `Password`, `UpdationDate`) VALUES
(1, 'admin', '$2y$12$MfmOgftQmWElPINWrmSKGej66IG3o6.aUOA0YqI6cTQXmSy9zhixK', '2018-10-01 20:50:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbladminremarks`
--

CREATE TABLE `tbladminremarks` (
  `id` int(11) NOT NULL,
  `contactFormId` int(11) DEFAULT NULL,
  `adminRemark` mediumtext,
  `remarkDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladminremarks`
--

INSERT INTO `tbladminremarks` (`id`, `contactFormId`, `adminRemark`, `remarkDate`) VALUES
(1, 4, 'good', '2018-10-01 13:37:58'),
(2, 1, 'nice\r\n', '2018-10-01 13:39:54'),
(3, 3, 'ok', '2018-10-01 13:40:12'),
(4, 2, 'great', '2018-10-01 13:40:28'),
(5, 6, 'thank you for contacting us', '2018-10-02 09:52:15');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactdata`
--

CREATE TABLE `tblcontactdata` (
  `id` int(11) NOT NULL,
  `FullName` varchar(200) DEFAULT NULL,
  `PhoneNumber` char(12) DEFAULT NULL,
  `EmailId` varchar(200) DEFAULT NULL,
  `Subject` varchar(255) DEFAULT NULL,
  `Message` mediumtext,
  `UserIp` varbinary(16) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Is_Read` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactdata`
--

INSERT INTO `tblcontactdata` (`id`, `FullName`, `PhoneNumber`, `EmailId`, `Subject`, `Message`, `UserIp`, `PostingDate`, `Is_Read`) VALUES
(1, 'Lucky Babuje', '0703132562', 'delivingwater2@gmail.com', 'nHub Nigeria 3rd floor Taen Building, opposite former NITEL', 'nHub Nigeria 3rd floor Taen Building, opposite former NITEL\r\nnHub Nigeria 3rd floor Taen Building, opposite former NITEL\r\nnHub Nigeria 3rd floor Taen Building, opposite former NITEL\r\nnHub Nigeria 3rd floor Taen Building, opposite former NITEL', 0x3a3a31, '2018-10-01 13:25:08', 1),
(2, 'Lucky Babuje', '0703132562', 'delivingwater2@gmail.com', 'nHub Nigeria 3rd floor Taen Building, opposite former NITEL', 'nHub Nigeria 3rd floor Taen Building, opposite former NITEL\r\nnHub Nigeria 3rd floor Taen Building, opposite former NITEL\r\nnHub Nigeria 3rd floor Taen Building, opposite former NITEL\r\nnHub Nigeria 3rd floor Taen Building, opposite former NITEL', 0x3a3a31, '2018-10-01 13:31:37', 1),
(3, 'Lucky Babuje', '7031325626', 'delivingwater2@gmail.com', 'nHub Nigeria 3rd floor Taen Building, opposite former NITEL', 'nHub Nigeria 3rd floor Taen Building, opposite former NITEL', 0x3a3a31, '2018-10-01 13:33:31', 1),
(4, 'Lucky Babuje', '7031325626', 'delivingwater2@gmail.com', 'nHub Nigeria 3rd floor Taen Building, opposite former NITEL', 'hfnHub Nigeria 3rd floor Taen Building, opposite former NITEL', 0x3a3a31, '2018-10-01 13:36:59', 1),
(5, 'Babuje Lucky', '07031325626', 'delivingwater@gmail.com', 'Hello', 'Testing', 0x3a3a31, '2018-10-01 20:58:34', 1),
(6, 'Lucky Babuje', '07031325626', 'delivingwater2@gmail.com', 'nHub Nigeria 3rd floor Taen Building, opposite former NITEL', 'dhsjafhsajdhsjd', 0x3a3a31, '2018-10-02 09:49:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblemail`
--

CREATE TABLE `tblemail` (
  `id` int(11) NOT NULL,
  `emailId` varchar(250) DEFAULT NULL,
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemail`
--

INSERT INTO `tblemail` (`id`, `emailId`, `UpdationDate`) VALUES
(1, 'mgbojikwechukwuebuka@gmail.com', '2018-10-02 09:51:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladminremarks`
--
ALTER TABLE `tbladminremarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactdata`
--
ALTER TABLE `tblcontactdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblemail`
--
ALTER TABLE `tblemail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbladminremarks`
--
ALTER TABLE `tbladminremarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblcontactdata`
--
ALTER TABLE `tblcontactdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tblemail`
--
ALTER TABLE `tblemail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
