-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2020 at 01:34 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bitcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_info`
--

CREATE TABLE IF NOT EXISTS `cart_info` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_rate` float NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category_info`
--

CREATE TABLE IF NOT EXISTS `category_info` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(40) NOT NULL,
  `cat_dname` varchar(40) NOT NULL,
  `image_path` text NOT NULL,
  `cat_type` varchar(10) NOT NULL,
  `cat_parent_id` int(11) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `category_info`
--

INSERT INTO `category_info` (`cat_id`, `cat_name`, `cat_dname`, `image_path`, `cat_type`, `cat_parent_id`, `reg_date`) VALUES
(1, 'Electronics', 'Electronics', 'images (2).jpeg', 'Primary', 0, '2020-08-05'),
(2, 'Furniture', 'Furniture', 'images (76).jpeg', 'Primary', 0, '2020-08-05'),
(3, 'Mobile', 'Mobile', 'download (2).jpeg', 'Secondary', 1, '2020-08-05'),
(4, 'Chair', 'Chair', 'images (77).jpeg', 'Secondary', 2, '2020-08-05'),
(5, 'Jewellary', 'Jewellary', 'maxresdefault.jpg', 'Primary', 0, '2020-08-06'),
(6, 'Television', 'Television', 'images (69).jpeg', 'Secondary', 1, '2020-08-06'),
(7, 'Samsung Mobile', 'Samsung', 'images (61).jpeg', 'Secondary', 3, '2020-08-06'),
(8, 'Apple Mobile', 'Apple', 'images (2).jpeg', 'Secondary', 3, '2020-08-06'),
(9, 'Samsung TV', 'Samsung', 'images (72).jpeg', 'Secondary', 6, '2020-08-06'),
(10, 'LG Mobile', 'LG', 'images (4).jpeg', 'Secondary', 3, '2020-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE IF NOT EXISTS `customer_info` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(30) NOT NULL,
  `cust_email` varchar(30) NOT NULL,
  `cust_mobile` varchar(30) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `user_type` varchar(5) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`cust_id`, `cust_name`, `cust_email`, `cust_mobile`, `user_name`, `user_pass`, `user_type`, `reg_date`) VALUES
(1, 'ram', 'ram@gmail.com', '2376732647', 'ram', 'r', 'user', '0000-00-00'),
(3, 'mohan kumar singh', 'mohan123@gmail.com', '9888844556', 'mohan', 'mohan', 'user', '2020-08-01'),
(4, 'sohan', 'sohan@gmail.com', '9989989898', 'sohan', 'sohan', 'user', '2020-08-01'),
(5, 'Vijay Guptaq', 'vijay@gmail.com', '9997888878', 'admin', 'a', 'admin', '2020-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `item_info`
--

CREATE TABLE IF NOT EXISTS `item_info` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(30) NOT NULL,
  `item_detail` text NOT NULL,
  `image_path` text NOT NULL,
  `parent_category` int(11) NOT NULL,
  `item_rate` float NOT NULL,
  `item_discount` float NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `item_info`
--

INSERT INTO `item_info` (`item_id`, `item_name`, `item_detail`, `image_path`, `parent_category`, `item_rate`, `item_discount`, `reg_date`) VALUES
(1, 'Samsung Note 2', '13MP Back, 8MP front came, 5000MH', 'images (61).jpeg', 7, 20000, 10, '2020-08-06'),
(2, 'Titan Watch 34', '12 inch circular wall clock', 'images (87).jpeg', 0, 1200, 0, '2020-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `message_info`
--

CREATE TABLE IF NOT EXISTS `message_info` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `msg_heading` text NOT NULL,
  `msg_detail` text NOT NULL,
  `sender_name` varchar(30) NOT NULL,
  `receiver_name` varchar(30) NOT NULL,
  `sent_date` datetime NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `message_info`
--

INSERT INTO `message_info` (`msg_id`, `msg_heading`, `msg_detail`, `sender_name`, `receiver_name`, `sent_date`) VALUES
(1, 'Sony Dealer from Chandigarh is giving wrong product', 'Dear sir,\r\nI had given order of Sony T.V. of 43" with order no. 1123.\r\nbut i did not receive proper product.', 'ram', 'admin', '2020-08-21 16:29:05'),
(2, 'complain received', 'we will take fruitful action against that vendor very soon. \r\nfor right now , you can apply for returning this product.', 'admin', 'ram', '2020-08-21 17:12:31');

-- --------------------------------------------------------

--
-- Table structure for table `news_info`
--

CREATE TABLE IF NOT EXISTS `news_info` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_heading` text NOT NULL,
  `news_detail` text NOT NULL,
  `reg_date` date NOT NULL,
  `del_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news_info`
--

INSERT INTO `news_info` (`news_id`, `news_heading`, `news_detail`, `reg_date`, `del_status`) VALUES
(1, 'We will open offer on next month', 'In this offer you will get more then 50% discount in each product.', '2020-08-21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `offer_info`
--

CREATE TABLE IF NOT EXISTS `offer_info` (
  `offer_id` int(11) NOT NULL AUTO_INCREMENT,
  `offer_name` text NOT NULL,
  `offer_start_dt` datetime NOT NULL,
  `offer_end_dt` datetime NOT NULL,
  `cat_type` text NOT NULL,
  `offer_discount` float NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`offer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `offer_info`
--

INSERT INTO `offer_info` (`offer_id`, `offer_name`, `offer_start_dt`, `offer_end_dt`, `cat_type`, `offer_discount`, `reg_date`) VALUES
(1, 'Happy Independance Dhamaka', '2020-08-12 00:00:00', '2020-08-16 00:00:00', '1-3-7-8-10-6-9', 25, '2020-08-10'),
(2, 'Janmashtami offer', '2020-08-10 00:00:00', '2020-08-15 00:00:00', '1-3-7-8-10-6-9', 10, '2020-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `order_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_rate` float NOT NULL,
  `order_ref_id` int(11) NOT NULL,
  PRIMARY KEY (`order_detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_detail_id`, `item_id`, `item_quantity`, `item_rate`, `order_ref_id`) VALUES
(1, 2, 3, 1200, 1),
(3, 2, 2, 1200, 3),
(4, 1, 1, 18000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE IF NOT EXISTS `order_master` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `order_date` datetime NOT NULL,
  `total_amount` float NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `last_update_date` date NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`order_id`, `user_name`, `order_date`, `total_amount`, `order_status`, `last_update_date`) VALUES
(1, 'mohan', '2020-08-09 00:00:00', 23600, 'Received', '2020-08-18'),
(3, 'ram', '2020-08-18 17:23:40', 22400, 'Cancel', '2020-08-19');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
