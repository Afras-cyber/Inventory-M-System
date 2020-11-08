-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2020 at 12:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

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
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user_id`, `fullname`, `contect`, `email`, `password`) VALUES
(1, 'USER001', 'sam', '123456789', 'sam@gmail.com', 'e10adc3949ba59abbe56e057f20f883');

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
(4, 'BATHROOM ACCESSORIES'),
(5, 'MIRRORS'),
(6, 'PPR PIPES & FITTEINGS'),
(3, 'SHOWER MIXERS'),
(1, 'W/C SET'),
(2, 'WASH BASINS ');

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
(1, 'CUST002', 'jOHN', 1111111236, '34, RED ROAD', 'WILsDAN', 'JON@1234.com'),
(2, 'CUST003', 'Mikel', 1234569870, 'mike, Beach road', 'Susmasiya', 'mike43@g.com'),
(3, 'CUST004', 'Sam', 1111111236, '34, RED ROAD', 'WILsDAN', 'sam@1234.com'),
(4, 'CUST005', 'Gorge', 1234569870, 'Gorge, Beach road', 'Gorgiy', 'gogee43@g.com');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_hmt`
--

CREATE TABLE `invoice_hmt` (
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
(17, 'URY- 12345', 'PIEP', 'PPR PIPES & FITTEINGS', 48, 'hello', 1245, 3213),
(18, 'URY- 1234', 'helo\r\n', 'PPR PIPES & FITTEINGS', 258, 'hello', 1245, 3213),
(19, 'URL-0090', 'BASIN', 'PPR PIPES & FITTEINGS', 117, 'hello', 230, 320);

-- --------------------------------------------------------

--
-- Table structure for table `ordertb`
--

CREATE TABLE `ordertb` (
  `o_id` int(11) NOT NULL,
  `itm_no` varchar(255) NOT NULL,
  `itm_name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 0,
  `sup_name` varchar(255) NOT NULL,
  `sup_id` varchar(255) NOT NULL,
  `sup_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `p_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `sup_id` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
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
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `return_item`
--

INSERT INTO `return_item` (`return_id`, `item_uid`, `item_name`, `category`, `qty`, `reason`, `date_time`) VALUES
(24, 'URY- 1234', 'heu', 'hgfgbn', 5, 'hhjnhg', '2020-11-08 12:49:43'),
(25, 'URY- 1234', 'helo', 'dfsdfs', 5, 'un', '2020-11-08 12:50:10');

-- --------------------------------------------------------

--
-- Table structure for table `sales_info`
--

CREATE TABLE `sales_info` (
  `sales_id` int(11) NOT NULL,
  `cust_id` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `invoice_hmt`
--
ALTER TABLE `invoice_hmt`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_qid`),
  ADD UNIQUE KEY `HGF` (`item_id`);

--
-- Indexes for table `ordertb`
--
ALTER TABLE `ordertb`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `return_item`
--
ALTER TABLE `return_item`
  ADD PRIMARY KEY (`return_id`);

--
-- Indexes for table `sales_info`
--
ALTER TABLE `sales_info`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`sup_id`),
  ADD UNIQUE KEY `SUP` (`sup_uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `invoice_hmt`
--
ALTER TABLE `invoice_hmt`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `ordertb`
--
ALTER TABLE `ordertb`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `return_item`
--
ALTER TABLE `return_item`
  MODIFY `return_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `sales_info`
--
ALTER TABLE `sales_info`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `sup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
