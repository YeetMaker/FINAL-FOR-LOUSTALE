-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 20, 2020 at 08:45 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livegamelove`
--

-- --------------------------------------------------------

--
-- Table structure for table `gamingmouse`
--

DROP TABLE IF EXISTS `gamingmouse`;
CREATE TABLE IF NOT EXISTS `gamingmouse` (
  `ID` int(10) NOT NULL,
  `BRAND` varchar(20) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `WIRELESS` enum('Yes','No') NOT NULL,
  `MAX_DPI` mediumint(10) NOT NULL,
  `BUTTONS` int(3) NOT NULL,
  `COLOR` varchar(20) NOT NULL,
  `PRICE` decimal(6,2) NOT NULL,
  `IN_STOCK` enum('Yes','No') NOT NULL,
  `PIC_FILE_NAME` varchar(100) NOT NULL,
  `DAY_DEAL` enum('Monday','Tuesday','Wednesday','Thursday','Friday','None') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gamingmouse`
--

INSERT INTO `gamingmouse` (`ID`, `BRAND`, `NAME`, `WIRELESS`, `MAX_DPI`, `BUTTONS`, `COLOR`, `PRICE`, `IN_STOCK`, `PIC_FILE_NAME`, `DAY_DEAL`) VALUES
(1, 'Utech', 'Venus MMO', 'No', 16400, 18, 'Black', '69.95', 'Yes', 'venusmmo.jpg', 'Thursday'),
(2, 'Chico High', 'Loustale Mouse', 'No', 100, 3, 'black/grey', '0.99', 'Yes', 'loustalemouse.jpg', 'Monday'),
(3, 'Rat Company', 'THE RAT', 'No', 8000, 8, 'black', '74.95', 'Yes', 'rat.jpg', 'Tuesday');

-- --------------------------------------------------------

--
-- Table structure for table `graphics_card`
--

DROP TABLE IF EXISTS `graphics_card`;
CREATE TABLE IF NOT EXISTS `graphics_card` (
  `ID` int(10) NOT NULL,
  `BRAND` varchar(30) DEFAULT NULL,
  `NAME` varchar(10) DEFAULT NULL,
  `VERSION` int(4) DEFAULT NULL,
  `PRICE` decimal(6,2) DEFAULT NULL,
  `PIC_FILE_NAME` varchar(100) NOT NULL,
  `IN_STOCK` enum('Yes','No') NOT NULL,
  `DAY_DEAL` enum('Monday','Tuesday','Wednesday','Thursday','Friday','None') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graphics_card`
--

INSERT INTO `graphics_card` (`ID`, `BRAND`, `NAME`, `VERSION`, `PRICE`, `PIC_FILE_NAME`, `IN_STOCK`, `DAY_DEAL`) VALUES
(1, 'NVIDIA', 'RTX', 2060, '1199.99', 'gc1.jpg', 'Yes', 'Monday'),
(2, 'Gigabyte', '', 2020, '559.99', 'giga.jpg', 'Yes', 'Wednesday');

-- --------------------------------------------------------

--
-- Table structure for table `keyboards`
--

DROP TABLE IF EXISTS `keyboards`;
CREATE TABLE IF NOT EXISTS `keyboards` (
  `ID` int(3) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `BRAND` varchar(20) NOT NULL,
  `PURPOSE` enum('Gaming','Typing') NOT NULL,
  `WIRELESS` enum('Yes','No') NOT NULL,
  `LED` enum('Yes','No') NOT NULL,
  `COLOR` varchar(20) NOT NULL,
  `PRICE` decimal(6,2) NOT NULL,
  `IN_STOCK` enum('Yes','No') NOT NULL,
  `DAY_DEAL` enum('Monday','Tuesday','Wednesday','Thursday','Friday','None') NOT NULL,
  `PIC_FILE_NAME` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keyboards`
--

INSERT INTO `keyboards` (`ID`, `NAME`, `BRAND`, `PURPOSE`, `WIRELESS`, `LED`, `COLOR`, `PRICE`, `IN_STOCK`, `DAY_DEAL`, `PIC_FILE_NAME`) VALUES
(1, 'Typer', 'Typing Brand', 'Typing', 'No', 'No', 'black', '27.95', 'No', 'Tuesday', 'typer.jpg'),
(2, 'Computer Controller', 'HyperX', 'Gaming', 'No', 'Yes', 'Black', '45.95', 'Yes', 'Tuesday', 'hyperx.png');

-- --------------------------------------------------------

--
-- Table structure for table `laptops`
--

DROP TABLE IF EXISTS `laptops`;
CREATE TABLE IF NOT EXISTS `laptops` (
  `ID` int(10) NOT NULL,
  `NAME` varchar(20) DEFAULT NULL,
  `BRAND` varchar(20) DEFAULT NULL,
  `PRICE` decimal(6,2) DEFAULT NULL,
  `TOUCH_SCREEN` enum('Yes','No') NOT NULL,
  `STORAGE_IN_GIGABYTES` int(4) DEFAULT NULL,
  `RAM` bit(64) DEFAULT NULL,
  `PIC_FILE_NAME` varchar(30) NOT NULL,
  `IN_STOCK` enum('Yes','No') NOT NULL,
  `DAY_DEAL` enum('Monday','Tuesday','Wednesday','Thursday','Friday','None') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptops`
--

INSERT INTO `laptops` (`ID`, `NAME`, `BRAND`, `PRICE`, `TOUCH_SCREEN`, `STORAGE_IN_GIGABYTES`, `RAM`, `PIC_FILE_NAME`, `IN_STOCK`, `DAY_DEAL`) VALUES
(1, 'Type Steel', 'Computer Goods', '699.99', 'Yes', 500, b'0000000000000000000000000000000000000000000000000000000000001000', 'laptop.jpg', 'Yes', 'None'),
(2, 'Type Writer', 'Old Phasion', '499.99', 'No', 0, b'0000000000000000000000000000000000000000000000000000000000000000', 'laptop2.jpg', 'Yes', 'Friday'),
(3, 'Mom Computer', 'VAIO', '849.99', 'Yes', 2000, b'0000000000000000000000000000000000000000000000000000000000001000', 'momcomputer.png', 'Yes', 'Monday'),
(4, 'Coffee Ti', 'Laptop Inc.', '559.99', 'No', 600, b'0000000000000000000000000000000000000000000000000000000000001000', 'coffeeti.jpg', 'No', 'Wednesday');

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

DROP TABLE IF EXISTS `pc`;
CREATE TABLE IF NOT EXISTS `pc` (
  `ID` int(10) NOT NULL,
  `NAME` varchar(30) DEFAULT NULL,
  `BRAND` varchar(30) DEFAULT NULL,
  `GRAPHICS_CARD` varchar(30) DEFAULT NULL,
  `RAM` int(3) DEFAULT NULL,
  `STORAGE_IN_GIGABYTES` int(10) DEFAULT NULL,
  `PRICE` decimal(6,2) DEFAULT NULL,
  `PIC_FILE_NAME` varchar(100) NOT NULL,
  `IN_STOCK` enum('Yes','No') NOT NULL,
  `DAY_DEAL` enum('Monday','Tuesday','Wednesday','Thursday','Friday','None') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`ID`, `NAME`, `BRAND`, `GRAPHICS_CARD`, `RAM`, `STORAGE_IN_GIGABYTES`, `PRICE`, `PIC_FILE_NAME`, `IN_STOCK`, `DAY_DEAL`) VALUES
(1, 'Black Box', 'Alien Ware', 'RTX 2060', 16, 1000, '2499.99', 'blackbox.jpg', 'Yes', 'Monday'),
(2, 'Timmy Gaming Computer', 'Neal Dow', 'NVIDIA RTX 2080', 16, 1500, '1749.99', 'timmycomputer.jpg', 'Yes', 'None'),
(3, 'Barracuda', 'MyProperty.com', 'NVIDIA GTX 1070', 16, 500, '445.95', 'barracuda.jpg', 'No', 'Wednesday'),
(4, 'Big Boy', 'Big Boy Inc.', 'NVIDIA GTX 1080', 16, 1950, '1449.99', 'bigboy.jpg', 'No', 'Monday');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
