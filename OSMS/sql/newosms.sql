-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 04:29 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newosms`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin_db`
--

CREATE TABLE `adminlogin_db` (
  `a_login_id` int(11) NOT NULL,
  `a_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `a_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `e_password` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `adminlogin_db`
--

INSERT INTO `adminlogin_db` (`a_login_id`, `a_name`, `a_email`, `e_password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assert_tb`
--

CREATE TABLE `assert_tb` (
  `pid` int(11) NOT NULL,
  `pname` varchar(60) COLLATE utf8_bin NOT NULL,
  `pdop` date NOT NULL,
  `pava` int(11) NOT NULL,
  `ptotal` int(11) NOT NULL,
  `poriginalcost` float NOT NULL,
  `psellingcost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `assert_tb`
--

INSERT INTO `assert_tb` (`pid`, `pname`, `pdop`, `pava`, `ptotal`, `poriginalcost`, `psellingcost`) VALUES
(1, 'printer ink', '2021-05-05', 10, 5, 435, 480),
(2, 'keyboard', '2021-05-19', 5, 6, 300, 350),
(3, 'display', '2021-05-18', 9, 10, 250, 300);

-- --------------------------------------------------------

--
-- Table structure for table `assignwork_tb`
--

CREATE TABLE `assignwork_tb` (
  `rno` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `request_info` text COLLATE utf8_bin NOT NULL,
  `request_desc` text COLLATE utf8_bin NOT NULL,
  `requester_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_add1` text COLLATE utf8_bin NOT NULL,
  `requester_add2` text COLLATE utf8_bin NOT NULL,
  `requester_city` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_state` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_zip` int(11) NOT NULL,
  `requester_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_mobile` bigint(20) NOT NULL,
  `assign_tech` varchar(60) COLLATE utf8_bin NOT NULL,
  `assign_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `assignwork_tb`
--

INSERT INTO `assignwork_tb` (`rno`, `request_id`, `request_info`, `request_desc`, `requester_name`, `requester_add1`, `requester_add2`, `requester_city`, `requester_state`, `requester_zip`, `requester_email`, `requester_mobile`, `assign_tech`, `assign_date`) VALUES
(7, 1, 'display problem', 'display  not working', 'Abhishek Darokar', 'warud', 'warud', 'Amravati', 'Maharashtra', 444906, 'abhishekdarokar@gmail.com', 917798078667, 'Sonali', '2021-05-02'),
(31, 2, 'TV problem', 'starting problem ', 'Ghansham Wasule', 'house  no.43', 'Radhesham nager', 'Jarud', 'Maharashatra', 444906, 'ghanshamwasule@gmail.com', 32165478546, 'soham vihani', '2021-05-18'),
(34, 34, 'Wifi not working.', 'wifi not connected to any devices, shutdown automatically  ', 'Rahul Mahajan', 'Gandhi Nager', 'Padmavati Chock', 'Delhi', 'Delhi', 119854, 'rahulmahajan@gmail.com', 9895654570, 'Abhishek', '2021-05-13'),
(35, 38, 'Mobile Battery Change', 'Battery Damaged', 'sham', 'Goregao', 'ward no-2', 'Mumbai', 'Maharashta', 444101, 'sham@gmail.com', 7894561230, 'sumedh chavan', '2021-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tb`
--

CREATE TABLE `customer_tb` (
  `custid` int(11) NOT NULL,
  `custname` varchar(60) COLLATE utf8_bin NOT NULL,
  `custadd` varchar(60) COLLATE utf8_bin NOT NULL,
  `cpname` varchar(60) COLLATE utf8_bin NOT NULL,
  `cpquantity` int(11) NOT NULL,
  `cpeach` float NOT NULL,
  `cptotal` int(11) NOT NULL,
  `cpdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `customer_tb`
--

INSERT INTO `customer_tb` (`custid`, `custname`, `custadd`, `cpname`, `cpquantity`, `cpeach`, `cptotal`, `cpdate`) VALUES
(5, 'soham vihani', 'Gandhi Nager', 'display', 1, 300, 300, '2021-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`) VALUES
(1, 'user', 'user@gmail.com', 'user123'),
(12, 'Abhishek Darokar', 'abhishekdarokar@gmail.com', 'Abhishek@02'),
(13, 'Akshata Ingle', 'akshata@gmail.com', 'Akshata@01'),
(19, 'soham', 'soham@gmail.com', 'Soham@02'),
(20, 'Ravi', 'ravi@gmail.com', 'Ravi@123'),
(22, 'Sumedh Chavan', 'sumedhchavan@gmail.com', 'Sumedh123');

-- --------------------------------------------------------

--
-- Table structure for table `submitrequest_db`
--

CREATE TABLE `submitrequest_db` (
  `request_id` int(11) NOT NULL,
  `request_info` text COLLATE utf8_bin NOT NULL,
  `request_desc` text COLLATE utf8_bin NOT NULL,
  `requester_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_add1` text COLLATE utf8_bin NOT NULL,
  `requester_add2` text COLLATE utf8_bin NOT NULL,
  `requester_city` varchar(50) COLLATE utf8_bin NOT NULL,
  `requester_state` varchar(50) COLLATE utf8_bin NOT NULL,
  `requester_zip` int(11) NOT NULL,
  `requester_email` varchar(70) COLLATE utf8_bin NOT NULL,
  `requester_mobile` bigint(20) NOT NULL,
  `request_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `submitrequest_db`
--

INSERT INTO `submitrequest_db` (`request_id`, `request_info`, `request_desc`, `requester_name`, `requester_add1`, `requester_add2`, `requester_city`, `requester_state`, `requester_zip`, `requester_email`, `requester_mobile`, `request_date`) VALUES
(35, 'Mobile Battery Change', 'Battery Damaged', 'Akshata Ingle', 'D-Block', 'Uraja Nager', 'Chandrapur', 'Maharashtra', 444247, 'akshata@gmail.com', 8546971546, '2021-05-20'),
(38, 'Mobile Battery Change', 'Battery Damaged', 'sham', 'Goregao', 'ward no-2', 'Mumbai', 'Maharashta', 444101, 'sham@gmail.com', 7894561230, '2021-05-11'),
(39, 'printer', 'enter key not press and Function keys are not working', 'sham', 'Goregao', 'ward no-2', 'Mumbai', 'Maharashta', 444101, 'sham@gmail.com', 7894561230, '2021-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `technician_tb`
--

CREATE TABLE `technician_tb` (
  `empid` int(11) NOT NULL,
  `empName` varchar(30) COLLATE utf8_bin NOT NULL,
  `empCity` varchar(30) COLLATE utf8_bin NOT NULL,
  `empMobile` bigint(20) NOT NULL,
  `empEmail` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `technician_tb`
--

INSERT INTO `technician_tb` (`empid`, `empName`, `empCity`, `empMobile`, `empEmail`) VALUES
(4, 'Abhishek Darokar', 'Amravati', 7894561230, 'abhishekdarokar@gmail.com'),
(5, 'sham', 'Mumbai', 7894561231, 'sham@gmail.com'),
(6, 'soham vihani', 'Delhi', 1234567890, 'soham@gmail.com'),
(7, 'Akshata', 'Chandrapur', 8546971546, 'akshata@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin_db`
--
ALTER TABLE `adminlogin_db`
  ADD PRIMARY KEY (`a_login_id`);

--
-- Indexes for table `assert_tb`
--
ALTER TABLE `assert_tb`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `assignwork_tb`
--
ALTER TABLE `assignwork_tb`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `customer_tb`
--
ALTER TABLE `customer_tb`
  ADD PRIMARY KEY (`custid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submitrequest_db`
--
ALTER TABLE `submitrequest_db`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `technician_tb`
--
ALTER TABLE `technician_tb`
  ADD PRIMARY KEY (`empid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin_db`
--
ALTER TABLE `adminlogin_db`
  MODIFY `a_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assert_tb`
--
ALTER TABLE `assert_tb`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assignwork_tb`
--
ALTER TABLE `assignwork_tb`
  MODIFY `rno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `customer_tb`
--
ALTER TABLE `customer_tb`
  MODIFY `custid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `submitrequest_db`
--
ALTER TABLE `submitrequest_db`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `technician_tb`
--
ALTER TABLE `technician_tb`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
