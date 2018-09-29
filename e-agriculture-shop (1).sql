-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 29, 2018 at 03:12 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-agriculture-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(10) NOT NULL AUTO_INCREMENT,
  `pro_id` varchar(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `ip_add` text NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `pro_id`, `qty`, `ip_add`) VALUES
(19, '19', 1, '::1'),
(9, '9', 3, '::1'),
(13, '13', 3, '::1'),
(16, '11', 1, '::1'),
(15, '23', 2, '::1'),
(17, '10', 1, '::1'),
(20, '', 1, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `main_cat`
--

DROP TABLE IF EXISTS `main_cat`;
CREATE TABLE IF NOT EXISTS `main_cat` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_cat`
--

INSERT INTO `main_cat` (`cat_id`, `cat_name`) VALUES
(22, 'others'),
(21, 'Crops'),
(20, 'Fruits'),
(19, 'Vegetables'),
(18, 'livestocks'),
(17, 'Poultry');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `pro_id` int(10) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(100) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `sub_cat_id` varchar(10) NOT NULL,
  `pro_img1` varchar(100) NOT NULL,
  `pro_img2` varchar(100) NOT NULL,
  `pro_img3` varchar(100) NOT NULL,
  `pro_img4` varchar(100) NOT NULL,
  `availability` varchar(100) NOT NULL,
  `pro_feature2` varchar(100) NOT NULL,
  `pro_feature3` varchar(100) NOT NULL,
  `pro_feature4` varchar(100) NOT NULL,
  `pro_feature5` text NOT NULL,
  `pro_price` varchar(100) NOT NULL,
  `pro_model` varchar(100) NOT NULL,
  `pro_keyword` varchar(100) NOT NULL,
  `pro_added_date` timestamp NULL DEFAULT NULL,
  `rating` int(100) NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

DROP TABLE IF EXISTS `product_review`;
CREATE TABLE IF NOT EXISTS `product_review` (
  `review_id` int(100) NOT NULL AUTO_INCREMENT,
  `pro_id` int(100) NOT NULL,
  `users_name` varchar(100) NOT NULL,
  `users_email` varchar(100) NOT NULL,
  `review` text NOT NULL,
  `review_added_date` timestamp NOT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_review`
--

INSERT INTO `product_review` (`review_id`, `pro_id`, `users_name`, `users_email`, `review`, `review_added_date`, `rating`) VALUES
(1, 1, '1', '1', 'dsada', '2018-09-26 16:00:00', 1),
(2, 10, '', 'cabanlit08@gmail.com', ' propropropropropropropropropropropropropropropropropropropropropropropropropropropropropro', '2018-09-27 05:54:29', 4),
(3, 10, 'wilson', 'cabanlit08@gmail.com', ' propropropropropropropropropropropropropropropropropropropropropropropropropropropropropro', '2018-09-27 05:54:48', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

DROP TABLE IF EXISTS `sub_cat`;
CREATE TABLE IF NOT EXISTS `sub_cat` (
  `sub_cat_id` int(50) NOT NULL AUTO_INCREMENT,
  `sub_cat_name` varchar(100) NOT NULL,
  `cat_id` int(50) NOT NULL,
  PRIMARY KEY (`sub_cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_cat`
--

INSERT INTO `sub_cat` (`sub_cat_id`, `sub_cat_name`, `cat_id`) VALUES
(14, 'Fresh', 19),
(15, 'Organic', 19),
(18, 'Frozen', 19),
(19, 'Canned', 19);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Bday` date NOT NULL,
  `Address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `Fname`, `Lname`, `Gender`, `Bday`, `Address`) VALUES
(1, 'asda', 'asdas', 'asdas', '', 'asda', '0321-12-31', 'dasdas'),
(2, 'asda', 'asdas', 'asdas', '', 'asda', '0321-12-31', 'dasdas'),
(3, 'asda', 'asdas', 'asdas', '', 'asda', '0321-12-31', 'dasdas'),
(4, 'asda', 'asdas', 'asdas', 'asdas', 'asda', '0321-12-31', 'dasdas'),
(5, 'wilson', 'wilson', 'wilson', 'wilson', 'male', '2018-06-13', 'sadasdasdas'),
(6, 'dkasd', 'fnvdfg', 'skdfsd', 'sdf', 'sdfsdfds', '0021-12-31', 'sdfs'),
(7, 'werwer', 'werwerew', 'dsfsdfsd', 'fsdfsd', 'fsdfsd', '3132-12-31', 'sdfsdfdsdfs'),
(8, 'badak123', '123456789', 'badak', 'alterado', 'female', '2000-02-12', 'BAT. compound davao city'),
(9, 'sdsfjb', '`hsbdgfhbshj`', 'hdbvjdbvh', 'shdbvdh', 'sdfshg', '8345-03-05', '`sbdgds'),
(10, 'sdkjgfjdfg', 'jhghjdgsf', 'hgjhghjdfg', 'hjghjdgfhg', 'jdshf', '2018-09-23', 'jhghjg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
