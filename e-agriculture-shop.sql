-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 24, 2018 at 04:54 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `pro_id`, `qty`, `ip_add`) VALUES
(1, '', 1, '::1'),
(2, '9', 1, '::1');

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
  `pro_feature1` varchar(100) NOT NULL,
  `pro_feature2` varchar(100) NOT NULL,
  `pro_feature3` varchar(100) NOT NULL,
  `pro_feature4` varchar(100) NOT NULL,
  `pro_feature5` varchar(100) NOT NULL,
  `pro_price` varchar(100) NOT NULL,
  `pro_model` varchar(100) NOT NULL,
  `pro_keyword` varchar(100) NOT NULL,
  `pro_added_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `cat_id`, `sub_cat_id`, `pro_img1`, `pro_img2`, `pro_img3`, `pro_img4`, `pro_feature1`, `pro_feature2`, `pro_feature3`, `pro_feature4`, `pro_feature5`, `pro_price`, `pro_model`, `pro_keyword`, `pro_added_date`) VALUES
(9, 'native egg', 17, '19', 'eggs2854-450x303.jpg', '', '', '', 'na', 'na', 'na', 'na', 'na', '180', 'magnolia', 'fresh chicken', '2018-08-11 16:31:42'),
(8, 'chicken', 17, '19', 'RawChicken020617-1540x800.jpg', '', '', '', 'na', 'na', 'na', 'na', 'na', '200', 'magnolia', 'fresh chicken', '2018-08-11 16:31:09'),
(10, 'chic native', 17, '19', 'Sanderson-Farms-Q2-2016.jpg', '', '', '', 'na', 'na', 'na', 'na', 'na', '350', 'magnolia', 'fresh chicken', '2018-08-11 16:32:16'),
(11, 'beef', 17, '19', 'TF-8-23-MCOOL-422x281.jpg', '', '', '', 'na', 'na', 'na', 'na', 'na', '500', 'corn beef', 'fresbeef', '2018-08-11 16:32:55'),
(13, 'pig', 18, '15', 'Pig+Farming+in+Nigeria.jpg', '', '', '', '50 killo', 'nothing', 'boy', '', '', '150', 'na', 'livestock', '2018-08-11 18:21:42'),
(14, 'goat', 18, '18', 'Pig+Farming+in+Nigeria.jpg', '', '', '', '20 killo', 'nothing', 'boy', '', '', '300', 'na', 'livestock', '2018-08-11 18:22:04'),
(15, 'cow', 18, '19', 'cattle-must-be-vaccinated-against-disease.jpg', '', '', '', '30 killo', 'nothing', 'boy', '', '', '350', 'na', 'livestock', '2018-08-11 18:22:51'),
(16, 'pig', 18, '19', 'Pig+Farming+in+Nigeria.jpg', '', '', '', 'na', 'na', 'na', 'na', 'na', '250', 'na', 'sadsdas', '2018-08-11 18:32:48'),
(17, 'Kambing', 18, '15', 'goats-index.jpg', '', '', '', '', '', '', '', '', '770', '', 'organic', '2018-08-15 04:59:04'),
(18, 'pumpkin', 19, '14', 'pumpkin.jpg', '', '', '', '', '', '', '', '', '50', '', 'kalabasa', '2018-08-29 02:16:47'),
(19, 'carrots', 19, '14', 'carrots.jpeg', '', '', '', '', '', '', '', '', '80', '', 'carrots', '2018-08-29 02:17:08'),
(20, 'repolyo', 19, '14', 'repolyo.jpg', '', '', '', '', '', '', '', '', '100', '', 'repolyo', '2018-08-29 02:18:04'),
(21, 'talong', 19, '14', 'eggplant.jpg', '', '', '', '', '', '', '', '', '70', '', 'talong', '2018-08-29 02:18:34'),
(22, 'durian', 20, '14', 'Fresh-Durian.jpg', '', '', '', '', '', '', '', '', '50', '', 'fresh', '2018-08-29 02:47:37'),
(23, 'mango', 20, '14', 'mango.jpg', '', '', '', '', '', '', '', '', '70', '', 'fresh', '2018-08-29 02:47:55'),
(24, 'grapes', 20, '14', 'grapes.jpg', '', '', '', '', '', '', '', '', '70', '', 'fresh', '2018-08-29 02:48:14'),
(25, 'native egg', 17, '14', 'silo-brown-egg.jpg', '', '', '', '', '', '', '', '', '9', '', '', '2018-09-18 21:28:38');

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

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
(9, 'sdsfjb', '`hsbdgfhbshj`', 'hdbvjdbvh', 'shdbvdh', 'sdfshg', '8345-03-05', '`sbdgds');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
