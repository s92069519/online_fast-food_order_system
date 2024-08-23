-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 02, 2023 at 06:50 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `green_star`
--

-- --------------------------------------------------------

--
-- Table structure for table `beverge`
--

DROP TABLE IF EXISTS `beverge`;
CREATE TABLE IF NOT EXISTS `beverge` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `burgers`
--

DROP TABLE IF EXISTS `burgers`;
CREATE TABLE IF NOT EXISTS `burgers` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `burgers`
--

INSERT INTO `burgers` (`Id`, `fname`, `price`, `pic`) VALUES
(6, 'Zinger Burger with Cheese', '990', 'zinger Burger with Cheese.jpg'),
(7, 'Double Decker Burger', '1390', 'Double Decker Burger.jpg'),
(8, 'Veggie Burger', '650', 'Vegie Burger.png'),
(9, 'Veggie Burger + Cheese', '750', 'Veggie Burger.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chicken`
--

DROP TABLE IF EXISTS `chicken`;
CREATE TABLE IF NOT EXISTS `chicken` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chicken`
--

INSERT INTO `chicken` (`Id`, `fname`, `price`, `pic`) VALUES
(19, 'Full/8Pc (HC)', '3800', 'BUCKET-6PC (H&C).jpg'),
(16, 'Quarter/2Pc (HC)', '1060', 'Quarter_2Pc.jpg'),
(17, 'Half /4Pc (HC)', '1990', 'Half-4Pc (HC).jpg'),
(18, 'BUCKET/6PC (H&C)', '2850', 'BUCKET-6PC (H&C).jpg'),
(20, 'Bucket/12 Pc (HC)', '5250', 'BUCKET-6PC (H&C).jpg'),
(24, 'chicken', '1000', 'BUCKET-6PC (H&C).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `coutactus`
--

DROP TABLE IF EXISTS `coutactus`;
CREATE TABLE IF NOT EXISTS `coutactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(200) NOT NULL,
  `uemail` varchar(200) NOT NULL,
  `uphone` varchar(15) NOT NULL,
  `cmessage` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coutactus`
--

INSERT INTO `coutactus` (`id`, `cname`, `uemail`, `uphone`, `cmessage`) VALUES
(4, 'Sabrin', 'sabrinsaja@gmail.com', '0757841258', 'Hi '),
(5, 'israth', 'israthb8@gmail.com', '0771234561', 'hi'),
(6, 'Sabrin', 'sabrin@gmail.com', '0757841258', 'nice'),
(7, 'mujahith', 'mujahith@gmail.com', '0759010698', 'good product');

-- --------------------------------------------------------

--
-- Table structure for table `drumifts`
--

DROP TABLE IF EXISTS `drumifts`;
CREATE TABLE IF NOT EXISTS `drumifts` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hot-drumifts`
--

DROP TABLE IF EXISTS `hot-drumifts`;
CREATE TABLE IF NOT EXISTS `hot-drumifts` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hot-drumifts`
--

INSERT INTO `hot-drumifts` (`Id`, `fname`, `price`, `pic`) VALUES
(4, 'Hot Drumlets 3PC', '600', 'HOT DRUMLETS 6PCS.png');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `p_name` varchar(150) NOT NULL,
  `Quentity` int(11) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `Total` decimal(10,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pizza`
--

DROP TABLE IF EXISTS `pizza`;
CREATE TABLE IF NOT EXISTS `pizza` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`Id`, `fname`, `price`, `pic`) VALUES
(6, 'pizza with cheese', '950', 'CHEESE-PIZZA.png');

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

DROP TABLE IF EXISTS `snacks`;
CREATE TABLE IF NOT EXISTS `snacks` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `submarine`
--

DROP TABLE IF EXISTS `submarine`;
CREATE TABLE IF NOT EXISTS `submarine` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uname` varchar(200) NOT NULL,
  `uemail` varchar(200) NOT NULL,
  `uaddress` varchar(200) NOT NULL,
  `upassword` varchar(12) NOT NULL,
  `uphone` varchar(15) NOT NULL,
  PRIMARY KEY (`uemail`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uname`, `uemail`, `uaddress`, `upassword`, `uphone`) VALUES
('Aslam', 'Aslam@gmail.com', 'Kalmunai', 'Aslam', '0774152789'),
('Razik', 'Razik12@gmail.com', 'Sammanthurai', 'Razik101010', '0758539390'),
('Hanees', 'Hanees@gmail.com', 'Sammanthurai', 'Heysqa101010', '0775486543');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
