-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 16, 2015 at 02:06 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mycms`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_info`
--

CREATE TABLE IF NOT EXISTS `booking_info` (
  `name` varchar(40) NOT NULL,
  `nationality` varchar(40) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(40) NOT NULL,
  `occupation` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` int(11) NOT NULL,
  `car_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_info`
--


-- --------------------------------------------------------

--
-- Table structure for table `buying_info`
--

CREATE TABLE IF NOT EXISTS `buying_info` (
  `name` varchar(30) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` int(11) NOT NULL,
  `car_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buying_info`
--

INSERT INTO `buying_info` (`name`, `nationality`, `age`, `address`, `occupation`, `email`, `mobile`, `car_name`) VALUES
('riyad', 'bangladeshi', 22, 'dhaka', 'student', 'riyad.ruet113023@gmail.com', 1783108841, 'Lamborghini Gallardo');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL auto_increment,
  `cat_title` varchar(30) NOT NULL,
  PRIMARY KEY  (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Lamborghini'),
(2, 'Chevrolet'),
(3, 'Audi'),
(4, 'Bmw'),
(5, 'Jaguar'),
(6, 'Honda'),
(7, 'Ford'),
(8, 'Ferrari');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_name` varchar(40) NOT NULL,
  `comment` text NOT NULL,
  `status` text NOT NULL,
  `Date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_name`, `comment`, `status`, `Date`) VALUES
(4, 'sujon', 'Very expensive...', 'approved', '2015-02-06 19:27:44'),
(21, 'sujon', 'What a great car!!!', 'approved', '2015-02-06 19:43:38'),
(21, 'riyad', 'Gorgeous looking car', 'approved', '2015-02-06 19:56:33'),
(21, 'nishat', 'definitely buy this car', 'approved', '2015-02-06 20:03:47'),
(20, 'riyad', 'This Ford car is so exclusive.Engine displacement is attractive.', 'approved', '2015-02-06 21:35:44'),
(2, 'tarek', 'I think  this the best lamborghini car ever.outstanding design and outlook.', 'approved', '2015-02-06 21:38:55'),
(9, 'nishat', 'owesome outlook.wanna test it.', 'approved', '2015-02-06 21:41:07'),
(17, 'riyad', 'I recommend this car for those guy''s who want to buy ford..', 'approved', '2015-02-06 21:43:44'),
(21, 'shimu', 'I will buy this car', 'approved', '2015-02-10 15:50:54'),
(21, 'shimu', 'I will buy this car', 'unapproved', '2015-02-10 15:51:01');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL auto_increment,
  `category_id` varchar(30) NOT NULL,
  `post_title` varchar(30) NOT NULL,
  `post_price` varchar(30) NOT NULL,
  `post_image` text NOT NULL,
  `car_keywords` text NOT NULL,
  `post_content` text NOT NULL,
  PRIMARY KEY  (`post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `category_id`, `post_title`, `post_price`, `post_image`, `car_keywords`, `post_content`) VALUES
(2, '1', 'Lamborghini Gallardo', '$35,000', '2014_lamborghini_asterion_lpi_910_4_2-t2.jpg', 'lamborghini,Lamborghini,Gallardo', '<center><div style="margin:15px;color:red;"><h2>Full Car Specification</h2></div></center>\r\n\r\n<div style="border:1px solid #20B2AA;width:600px;color:green;text-align:center;margin:auto;">\r\n\r\n<table width="600" height="650">\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Performance</h3></td></tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">250kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Displacement(cc)</td>\r\n<td bgcolor="#00FFFF";">2400</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Maximum Power</td>\r\n<td bgcolor="#00FFFF";">160Nm@2000rpm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">240kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Description</td>\r\n<td bgcolor="#00FFFF";">1.5-litre 63.1bhp 8V In-Line Diesel Engine</td>\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">No. of Cylinders</td>\r\n<td bgcolor="#00FFFF";">4</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Comfort</h3></td>\r\n\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Air Conditioner</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Power Steering</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Start/Stop Button</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Transmission Type</td>\r\n<td bgcolor="#00FFFF";">Mannual</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Accessory Power Outlet</td>\r\n<td bgcolor="#00FFFF";">No</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Capacity</h3></td></tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Length</td>\r\n<td bgcolor="#00FFFF";">3825mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Width</td>\r\n<td bgcolor="#00FFFF";">1665mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Height</td>\r\n<td bgcolor="#00FFFF";">1525mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Ground Clearance</td>\r\n<td bgcolor="#00FFFF";">150mm</td>\r\n</tr>\r\n</table>\r\n</div>\r\n'),
(14, '2', 'Chevrolet-Camaro-invertible', '$27,000', 'chevrolet-camaro-convertible-2_653.jpg', 'Chevrolet,Camaro,invertible', '<center><div style="margin:15px;color:red;"><h2>Full Car Specification</h2></div></center>\r\n\r\n<div style="border:1px solid #20B2AA;width:600px;color:green;text-align:center;margin:auto;">\r\n\r\n<table width="600" height="650">\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Performance</h3></td></tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">250kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Displacement(cc)</td>\r\n<td bgcolor="#00FFFF";">2400</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Maximum Power</td>\r\n<td bgcolor="#00FFFF";">160Nm@2000rpm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">240kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Description</td>\r\n<td bgcolor="#00FFFF";">1.5-litre 63.1bhp 8V In-Line Diesel Engine</td>\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">No. of Cylinders</td>\r\n<td bgcolor="#00FFFF";">4</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Comfort</h3></td>\r\n\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Air Conditioner</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Power Steering</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Start/Stop Button</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Transmission Type</td>\r\n<td bgcolor="#00FFFF";">Mannual</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Accessory Power Outlet</td>\r\n<td bgcolor="#00FFFF";">No</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Capacity</h3></td></tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Length</td>\r\n<td bgcolor="#00FFFF";">3825mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Width</td>\r\n<td bgcolor="#00FFFF";">1665mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Height</td>\r\n<td bgcolor="#00FFFF";">1525mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Ground Clearance</td>\r\n<td bgcolor="#00FFFF";">150mm</td>\r\n</tr>\r\n</table>\r\n</div>\r\n'),
(4, '1', 'Lamborghini Murcielago', '$18,000', 'Lamborghini-Murcielago-2.jpg', 'Lamborghini,Murcielago', '<center><div style="margin:15px;color:red;"><h2>Full Car Specification</h2></div></center>\r\n\r\n<div style="border:1px solid #20B2AA;width:600px;color:green;text-align:center;margin:auto;">\r\n\r\n<table width="600" height="650">\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Performance</h3></td></tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">250kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Displacement(cc)</td>\r\n<td bgcolor="#00FFFF";">2400</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Maximum Power</td>\r\n<td bgcolor="#00FFFF";">160Nm@2000rpm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">240kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Description</td>\r\n<td bgcolor="#00FFFF";">1.5-litre 63.1bhp 8V In-Line Diesel Engine</td>\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">No. of Cylinders</td>\r\n<td bgcolor="#00FFFF";">4</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Comfort</h3></td>\r\n\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Air Conditioner</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Power Steering</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Start/Stop Button</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Transmission Type</td>\r\n<td bgcolor="#00FFFF";">Mannual</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Accessory Power Outlet</td>\r\n<td bgcolor="#00FFFF";">No</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Capacity</h3></td></tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Length</td>\r\n<td bgcolor="#00FFFF";">3825mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Width</td>\r\n<td bgcolor="#00FFFF";">1665mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Height</td>\r\n<td bgcolor="#00FFFF";">1525mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Ground Clearance</td>\r\n<td bgcolor="#00FFFF";">150mm</td>\r\n</tr>\r\n</table>\r\n</div>\r\n'),
(9, '6', 'Honda Accord', '$18,000', '2013-honda-accord-phev-11_653.jpg', 'Honda,Accord', '<center><div style="margin:15px;color:red;"><h2>Full Car Specification</h2></div></center>\r\n\r\n<div style="border:1px solid #20B2AA;width:600px;color:green;text-align:center;margin:auto;">\r\n\r\n<table width="600" height="650">\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Performance</h3></td></tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">250kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Displacement(cc)</td>\r\n<td bgcolor="#00FFFF";">2400</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Maximum Power</td>\r\n<td bgcolor="#00FFFF";">160Nm@2000rpm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">240kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Description</td>\r\n<td bgcolor="#00FFFF";">1.5-litre 63.1bhp 8V In-Line Diesel Engine</td>\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">No. of Cylinders</td>\r\n<td bgcolor="#00FFFF";">4</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Comfort</h3></td>\r\n\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Air Conditioner</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Power Steering</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Start/Stop Button</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Transmission Type</td>\r\n<td bgcolor="#00FFFF";">Mannual</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Accessory Power Outlet</td>\r\n<td bgcolor="#00FFFF";">No</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Capacity</h3></td></tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Length</td>\r\n<td bgcolor="#00FFFF";">3825mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Width</td>\r\n<td bgcolor="#00FFFF";">1665mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Height</td>\r\n<td bgcolor="#00FFFF";">1525mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Ground Clearance</td>\r\n<td bgcolor="#00FFFF";">150mm</td>\r\n</tr>\r\n</table>\r\n</div>\r\n'),
(10, '3', 'Audi-A3-Sedan', '$28,000', '2015-audi-a3-sedan-1_318.jpg', 'Audi,A3,Sedan', '<center><div style="margin:15px;color:red;"><h2>Full Car Specification</h2></div></center>\r\n\r\n<div style="border:1px solid #20B2AA;width:600px;color:green;text-align:center;margin:auto;">\r\n\r\n<table width="600" height="650">\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Performance</h3></td></tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">250kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Displacement(cc)</td>\r\n<td bgcolor="#00FFFF";">2400</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Maximum Power</td>\r\n<td bgcolor="#00FFFF";">160Nm@2000rpm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">240kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Description</td>\r\n<td bgcolor="#00FFFF";">1.5-litre 63.1bhp 8V In-Line Diesel Engine</td>\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">No. of Cylinders</td>\r\n<td bgcolor="#00FFFF";">4</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Comfort</h3></td>\r\n\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Air Conditioner</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Power Steering</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Start/Stop Button</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Transmission Type</td>\r\n<td bgcolor="#00FFFF";">Mannual</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Accessory Power Outlet</td>\r\n<td bgcolor="#00FFFF";">No</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Capacity</h3></td></tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Length</td>\r\n<td bgcolor="#00FFFF";">3825mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Width</td>\r\n<td bgcolor="#00FFFF";">1665mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Height</td>\r\n<td bgcolor="#00FFFF";">1525mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Ground Clearance</td>\r\n<td bgcolor="#00FFFF";">150mm</td>\r\n</tr>\r\n</table>\r\n</div>\r\n'),
(16, '1', 'Lamborghini Explorar', '$28,000', 'lamborghini-1920x1200w.jpg', 'Lamborghini,Explorar', '<center><div style="margin:15px;color:red;"><h2>Full Car Specification</h2></div></center>\r\n\r\n<div style="border:1px solid #20B2AA;width:600px;color:green;text-align:center;margin:auto;">\r\n\r\n<table width="600" height="650">\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Performance</h3></td></tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">250kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Displacement(cc)</td>\r\n<td bgcolor="#00FFFF";">2400</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Maximum Power</td>\r\n<td bgcolor="#00FFFF";">160Nm@2000rpm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">240kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Description</td>\r\n<td bgcolor="#00FFFF";">1.5-litre 63.1bhp 8V In-Line Diesel Engine</td>\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">No. of Cylinders</td>\r\n<td bgcolor="#00FFFF";">4</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Comfort</h3></td>\r\n\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Air Conditioner</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Power Steering</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Start/Stop Button</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Transmission Type</td>\r\n<td bgcolor="#00FFFF";">Mannual</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Accessory Power Outlet</td>\r\n<td bgcolor="#00FFFF";">No</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Capacity</h3></td></tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Length</td>\r\n<td bgcolor="#00FFFF";">3825mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Width</td>\r\n<td bgcolor="#00FFFF";">1665mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Height</td>\r\n<td bgcolor="#00FFFF";">1525mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Ground Clearance</td>\r\n<td bgcolor="#00FFFF";">150mm</td>\r\n</tr>\r\n</table>\r\n</div>\r\n'),
(17, '7', 'Ford Mustang', '$50,000', '2015-ford-mustang-gt-12_653.jpg', 'Ford,Mustang', '<center><div style="margin:15px;color:red;"><h2>Full Car Specification</h2></div></center>\r\n\r\n<div style="border:1px solid #20B2AA;width:600px;color:green;text-align:center;margin:auto;">\r\n\r\n<table width="600" height="650">\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Performance</h3></td></tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">250kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Displacement(cc)</td>\r\n<td bgcolor="#00FFFF";">2400</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Maximum Power</td>\r\n<td bgcolor="#00FFFF";">160Nm@2000rpm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">240kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Description</td>\r\n<td bgcolor="#00FFFF";">1.5-litre 63.1bhp 8V In-Line Diesel Engine</td>\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">No. of Cylinders</td>\r\n<td bgcolor="#00FFFF";">4</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Comfort</h3></td>\r\n\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Air Conditioner</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Power Steering</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Start/Stop Button</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Transmission Type</td>\r\n<td bgcolor="#00FFFF";">Mannual</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Accessory Power Outlet</td>\r\n<td bgcolor="#00FFFF";">No</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Capacity</h3></td></tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Length</td>\r\n<td bgcolor="#00FFFF";">3825mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Width</td>\r\n<td bgcolor="#00FFFF";">1665mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Height</td>\r\n<td bgcolor="#00FFFF";">1525mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Ground Clearance</td>\r\n<td bgcolor="#00FFFF";">150mm</td>\r\n</tr>\r\n</table>\r\n</div>\r\n'),
(18, '5', 'Jaguar XJ-2010', '$37,000', 'JaguarXJ_2010_1024x768_wallpaper_0f.jpg', 'Jaguar,XJ', '<center><div style="margin:15px;color:red;"><h2>Full Car Specification</h2></div></center>\r\n\r\n<div style="border:1px solid #20B2AA;width:600px;color:green;text-align:center;margin:auto;">\r\n\r\n<table width="600" height="650">\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Performance</h3></td></tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">250kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Displacement(cc)</td>\r\n<td bgcolor="#00FFFF";">2400</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Maximum Power</td>\r\n<td bgcolor="#00FFFF";">160Nm@2000rpm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">240kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Description</td>\r\n<td bgcolor="#00FFFF";">1.5-litre 63.1bhp 8V In-Line Diesel Engine</td>\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">No. of Cylinders</td>\r\n<td bgcolor="#00FFFF";">4</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Comfort</h3></td>\r\n\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Air Conditioner</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Power Steering</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Start/Stop Button</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Transmission Type</td>\r\n<td bgcolor="#00FFFF";">Mannual</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Accessory Power Outlet</td>\r\n<td bgcolor="#00FFFF";">No</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Capacity</h3></td></tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Length</td>\r\n<td bgcolor="#00FFFF";">3825mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Width</td>\r\n<td bgcolor="#00FFFF";">1665mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Height</td>\r\n<td bgcolor="#00FFFF";">1525mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Ground Clearance</td>\r\n<td bgcolor="#00FFFF";">150mm</td>\r\n</tr>\r\n</table>\r\n</div>\r\n'),
(19, '5', 'Jaguar XJ-XIR-2015', '$43,000', 'jaguar_xj_xjr_2015_exterior_angularfront.jpg', 'Jaguar,XJ,XIR,', '<center><div style="margin:15px;color:red;"><h2>Full Car Specification</h2></div></center>\r\n\r\n<div style="border:1px solid #20B2AA;width:600px;color:green;text-align:center;margin:auto;">\r\n\r\n<table width="600" height="650">\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Performance</h3></td></tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">250kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Displacement(cc)</td>\r\n<td bgcolor="#00FFFF";">2400</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Maximum Power</td>\r\n<td bgcolor="#00FFFF";">160Nm@2000rpm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">240kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Description</td>\r\n<td bgcolor="#00FFFF";">1.5-litre 63.1bhp 8V In-Line Diesel Engine</td>\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">No. of Cylinders</td>\r\n<td bgcolor="#00FFFF";">4</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Comfort</h3></td>\r\n\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Air Conditioner</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Power Steering</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Start/Stop Button</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Transmission Type</td>\r\n<td bgcolor="#00FFFF";">Mannual</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Accessory Power Outlet</td>\r\n<td bgcolor="#00FFFF";">No</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Capacity</h3></td></tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Length</td>\r\n<td bgcolor="#00FFFF";">3825mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Width</td>\r\n<td bgcolor="#00FFFF";">1665mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Height</td>\r\n<td bgcolor="#00FFFF";">1525mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Ground Clearance</td>\r\n<td bgcolor="#00FFFF";">150mm</td>\r\n</tr>\r\n</table>\r\n</div>\r\n'),
(20, '7', 'Ford-Edge-Sport', '$30,000', 'ford-edge-sport-3_653.jpg', 'Ford,Edge,Sport', '<center><div style="margin:15px;color:red;"><h2>Full Car Specification</h2></div></center>\r\n\r\n<div style="border:1px solid #20B2AA;width:600px;color:green;text-align:center;margin:auto;">\r\n\r\n<table width="600" height="650">\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Performance</h3></td></tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">250kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Displacement(cc)</td>\r\n<td bgcolor="#00FFFF";">2400</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Maximum Power</td>\r\n<td bgcolor="#00FFFF";">160Nm@2000rpm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">240kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Description</td>\r\n<td bgcolor="#00FFFF";">1.5-litre 63.1bhp 8V In-Line Diesel Engine</td>\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">No. of Cylinders</td>\r\n<td bgcolor="#00FFFF";">4</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Comfort</h3></td>\r\n\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Air Conditioner</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Power Steering</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Start/Stop Button</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Transmission Type</td>\r\n<td bgcolor="#00FFFF";">Mannual</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Accessory Power Outlet</td>\r\n<td bgcolor="#00FFFF";">No</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Capacity</h3></td></tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Length</td>\r\n<td bgcolor="#00FFFF";">3825mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Width</td>\r\n<td bgcolor="#00FFFF";">1665mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Height</td>\r\n<td bgcolor="#00FFFF";">1525mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Ground Clearance</td>\r\n<td bgcolor="#00FFFF";">150mm</td>\r\n</tr>\r\n</table>\r\n</div>\r\n'),
(21, '4', 'BMW-3-series-sedan', '$50,000', '2012-bmw-3-series-sedan-19_653.jpg', 'BMW,3,series,sedan', '<center><div style="margin:15px;color:red;"><h2>Full Car Specification</h2></div></center>\r\n\r\n<div style="border:1px solid #20B2AA;width:600px;color:green;text-align:center;margin:auto;">\r\n\r\n<table width="600" height="650">\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Performance</h3></td></tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">250kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Displacement(cc)</td>\r\n<td bgcolor="#00FFFF";">2400</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Maximum Power</td>\r\n<td bgcolor="#00FFFF";">160Nm@2000rpm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">240kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Description</td>\r\n<td bgcolor="#00FFFF";">1.5-litre 63.1bhp 8V In-Line Diesel Engine</td>\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">No. of Cylinders</td>\r\n<td bgcolor="#00FFFF";">4</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Comfort</h3></td>\r\n\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Air Conditioner</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Power Steering</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Start/Stop Button</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Transmission Type</td>\r\n<td bgcolor="#00FFFF";">Mannual</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Accessory Power Outlet</td>\r\n<td bgcolor="#00FFFF";">No</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Capacity</h3></td></tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Length</td>\r\n<td bgcolor="#00FFFF";">3825mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Width</td>\r\n<td bgcolor="#00FFFF";">1665mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Height</td>\r\n<td bgcolor="#00FFFF";">1525mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Ground Clearance</td>\r\n<td bgcolor="#00FFFF";">150mm</td>\r\n</tr>\r\n</table>\r\n</div>\r\n'),
(22, '4', 'BMW-1-series-sedan', '$45,000', 'BMW-1-Series-Right-Front-Three-Quater-19339.jpg', 'BMW,series,sedan', '<center><div style="margin:15px;color:red;"><h2>Full Car Specification</h2></div></center>\r\n\r\n<div style="border:1px solid #20B2AA;width:600px;color:green;text-align:center;margin:auto;">\r\n\r\n<table width="600" height="650">\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Performance</h3></td></tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">250kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Displacement(cc)</td>\r\n<td bgcolor="#00FFFF";">2400</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Maximum Power</td>\r\n<td bgcolor="#00FFFF";">160Nm@2000rpm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Top Speed</td>\r\n<td bgcolor="#00FFFF";">240kmph</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Description</td>\r\n<td bgcolor="#00FFFF";">1.5-litre 63.1bhp 8V In-Line Diesel Engine</td>\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">No. of Cylinders</td>\r\n<td bgcolor="#00FFFF";">4</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Comfort</h3></td>\r\n\r\n</tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Air Conditioner</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Power Steering</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Engine Start/Stop Button</td>\r\n<td bgcolor="#00FFFF";">Yes</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Transmission Type</td>\r\n<td bgcolor="#00FFFF";">Mannual</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Accessory Power Outlet</td>\r\n<td bgcolor="#00FFFF";">No</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD"><h3 style="color:green;">Capacity</h3></td></tr>\r\n\r\n<tr>\r\n<td bgcolor="#DDA0DD">Length</td>\r\n<td bgcolor="#00FFFF";">3825mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Width</td>\r\n<td bgcolor="#00FFFF";">1665mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Height</td>\r\n<td bgcolor="#00FFFF";">1525mm</td>\r\n</tr>\r\n<tr>\r\n<td bgcolor="#DDA0DD">Ground Clearance</td>\r\n<td bgcolor="#00FFFF";">150mm</td>\r\n</tr>\r\n</table>\r\n</div>\r\n'),
(26, '1', 'Lamborghini sprit', '$35,000', 'Green-Exotic-Lamborghini-Car-37.jpg', 'Lamborghini, sprit', 'fgsfgfsgfgsfg'),
(27, '1', 'Lamborghini sprit', '$35,000', 'Green-Exotic-Lamborghini-Car-37.jpg', 'Lamborghini, sprit', 'fgsfgfsgfgsfg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirmpassword` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `confirmpassword`, `email`) VALUES
(1, 'riyad', 'riyad113023', '123', '123', 'riyad@gmail.com'),
(2, 'riyad', '123', '123', '123', 'nishat@gmail.com'),
(10, 'anik', 'anik', '123', '123', 'anik@gmail.com'),
(8, 'shimu', 'shimu', '123', '123', 'sh@gmail.com'),
(9, 'nishat', 'nishat', '123', '123', 't@gmail.com'),
(11, 'shimu', 'shimu', '1234', '1234', 's@gmail.com');
