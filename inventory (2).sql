-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 01, 2020 at 02:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `contect` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user_id`, `fullname`, `contect`, `email`, `password`) VALUES
(11, '2', 'Ahamed Afraz', '123456', 'afras975@gmail.com', 12345),
(20, '3', 'Ahamed Afraz', '0456789', 'afraz865@gmail.com', 123),
(21, 'ewd', 'swed', '123456', '56375756@gsdgd', 1234),
(22, 'Use22', 'dfdasd', '0758432', 'udg@gmail.com', 123456),
(31, 'use001', 'dfdasd', '123123', 'abc@gmail.com', 123),
(34, 'ISD123', '123', '0987654', 'afras@gmail.com', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(31, 'cat'),
(24, 'fdf'),
(29, 'fdsfadfa'),
(27, 'j'),
(30, 'lhkn'),
(28, 'nn'),
(26, 're'),
(25, 'sfdsd');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `customer_uid` varchar(255) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `contect_no` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `customer_uid`, `cust_name`, `contect_no`, `address`, `address2`, `email`) VALUES
(2, 'cus002', 'kumar', 1111111111, '42342+321223', '', 'sdffdf@gfdsg.com'),
(9, 'cust004', 'hey', 1234567891, 'gfgsdfs', 'fgfsdfdf', 'abc@sd.com'),
(10, 'cust008', 'hello', 1234567891, 'gfgsdfs', 'fgfsdfdf', 'abc@sd.com'),
(11, 'cus098', 'basikth', 1234567890, '42342+321223', '', 'sdffdf@gfdsg.com'),
(12, 'cus003', 'santhi ', 1111111111, 'colomb', 'olombo ', 'sdffdf@gfdsg.com'),
(13, 'cus001', 'santhi kan', 1234567890, 'colombo', 'colombo 4', 'sdffdf@gfdsg.com'),
(14, 'cust005', 'mary', 1234567891, 'gfgsdfs', 'fgfsdfdf', 'abc@sd.com'),
(15, 'cus0032', 'santhi', 1234567890, 'colombo', 'colombo 4', 'sdffdf@gfdsg.com'),
(16, 'cust0056', 'mary', 1234567891, 'gfgsdfs', 'fgfsdfdf', 'abc@sd.com'),
(17, 'cus0039', 'santhi', 1234567890, 'colombo', 'colombo 4', 'sdffdf@gfdsg.com'),
(18, 'cust0076', 'nisha', 1234567891, 'gfgsdfs', 'fgfsdfdf', 'abc@sd.com'),
(19, 'cus0023', 'landni', 1234567890, 'colombo', 'colombo 4', 'sdffdf@gfdsg.com'),
(20, 'cus0033', 'sunil', 1234567890, 'colombo', 'colombo 4', 'sdffdf@gfdsg.com'),
(21, 'cus000', 'kiri dal', 1234567890, 'colomb', 'colombo re', 'sdffdf@gfdsg.com'),
(22, 'cus0024', 'ubul', 1234567890, 'colombo', 'colombo 4', 'sdffdf@gfdsg.com'),
(23, 'cust0058', 'mar', 1234567891, 'gfgsdfs', 'fgfsdfdf', 'abc@sd.com'),
(24, 'cust0089', 'nisha', 1234567891, 'gfgsdfs', 'fgfsdfdf', 'abc@sd.com'),
(25, 'cust0057', 'chen', 1234567891, 'gfgsdfs', 'fgfsdfdf', 'abc@sd.com'),
(26, 'cust0080', ' k kuthu tha', 1234567891, 'gfgsdfs', 'fgfsdfdf', 'abc@sd.com'),
(27, 'cus007', 'santhi mal', 1111111111, 'colombo', 'colombo 4', 'sdffdf@gfdsg.com'),
(28, 'cust0055', 'vijaya', 1234567891, 'gfgsdfs', 'fgfsdfdf', 'abc@sd.com'),
(29, 'cus0098', 'santhi ', 1234567890, 'colombo', 'colombo 4', 'sdffdf@gfdsg.com'),
(30, 'cus0038', 'santhi', 1234567890, 'colombo', 'colombo 4', 'sdffdf@gfdsg.com'),
(31, 'cus073', 'santhi mal', 1111111111, 'colombo', 'colombo 4', 'sdffdf@gfdsg.com'),
(32, 'cust0056t', 'mary', 1234567891, 'gfgsdfs', 'fgfsdfdf', 'abc@sd.com'),
(33, 'cust0053', 'mary', 1234567891, 'gfgsdfs', 'fgfsdfdf', 'abc@sd.com'),
(34, 'vatyyy', 'fsfdf', 1111111111, 'fdfdf', 'dfdfd', 'afras975@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `date_issue` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_hmT`
--

CREATE TABLE `invoice_hmT` (
  `i_id` int(11) NOT NULL,
  `item_no` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `discount` float NOT NULL DEFAULT 0,
  `value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_qid` int(11) NOT NULL,
  `item_id` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 0,
  `description` varchar(255) NOT NULL,
  `buy` float NOT NULL,
  `sell` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_qid`, `item_id`, `item_name`, `category`, `qty`, `description`, `buy`, `sell`) VALUES
(17, 'URY- 12345', 'PIEP', 'fiat', 50, 'hello', 1245, 3213),
(18, 'URY- 1234', 'helo\r\n', 'fiat', 113, 'hello', 1245, 3213),
(19, 'URL-0090', 'BASIN', 'fiat', 118, 'hello', 230, 320);

-- --------------------------------------------------------

--
-- Table structure for table `order_tb`
--

CREATE TABLE `order_tb` (
  `order_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `order_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `return_item`
--

CREATE TABLE `return_item` (
  `return_id` int(11) NOT NULL,
  `item_uid` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `reason` text NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `item_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `return_item`
--

INSERT INTO `return_item` (`return_id`, `item_uid`, `item_name`, `category`, `qty`, `reason`, `date_time`, `item_id`) VALUES
(1, 'HT#32456', 'wasing person', 'pasna', 12, 'I don\'t know', '2020-10-10 20:29:06', NULL),
(2, 'HT#32456', 'wasing person', 'pasna', 12, 'I don\'t know', '2020-10-10 20:29:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `sup_id` int(11) NOT NULL,
  `sup_uid` varchar(255) NOT NULL,
  `sup_name` varchar(255) NOT NULL,
  `contect_no` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sup_id`, `sup_uid`, `sup_name`, `contect_no`, `address`, `address2`, `email`) VALUES
(15, 'SUP002', 'Nihal', 776543212, 'ted,htn', 'dfsd', 'udg@gmail.com'),
(19, 'SUP00023', 'hudafs', 1234567890, 'gfgsdfs', 'fasdfsdf', 'sdffdf@gfdsg.com'),
(20, 'SUP00026', 'hudaf', 1234567890, 'gfgsdfs', 'fasdfsdf', 'sdffdf@gfdsg.com'),
(22, 'SUP00021', 'hudafs', 1234567890, 'gfgsdfs', 'fasdfsdf', 'sdffdf@gfdsg.com');

-- --------------------------------------------------------

--
-- Table structure for table `transporter`
--

CREATE TABLE `transporter` (
  `trans_id` int(11) NOT NULL,
  `trans_name` varchar(255) NOT NULL,
  `contect_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `Adm` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_name` (`cat_name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `CUS` (`customer_uid`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `invoice_hmT`
--
ALTER TABLE `invoice_hmT`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_qid`),
  ADD UNIQUE KEY `HGF` (`item_id`);

--
-- Indexes for table `return_item`
--
ALTER TABLE `return_item`
  ADD PRIMARY KEY (`return_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`sup_id`),
  ADD UNIQUE KEY `SUP` (`sup_uid`);

--
-- Indexes for table `transporter`
--
ALTER TABLE `transporter`
  ADD PRIMARY KEY (`trans_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice_hmT`
--
ALTER TABLE `invoice_hmT`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `return_item`
--
ALTER TABLE `return_item`
  MODIFY `return_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `sup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `transporter`
--
ALTER TABLE `transporter`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
