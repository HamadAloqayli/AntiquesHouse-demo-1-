-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 19, 2019 at 06:24 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `empId` int(100) NOT NULL,
  `empName` varchar(200) NOT NULL,
  `postId` int(100) NOT NULL,
  `postImg` int(200) NOT NULL,
  `postTitle` varchar(200) NOT NULL,
  `postPrice` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `text` varchar(200) NOT NULL,
  `date` date DEFAULT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `title`, `text`, `date`, `status`) VALUES
(33, 'check', 'check check check check check check check ', NULL, 0),
(27, 'adf', 'ajdfjlakd', NULL, 0),
(28, 'asdf', 'ddaasdf', NULL, 0),
(29, 'Test Test', 'tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 ', NULL, 0),
(30, 'ad', 'dfasdf', NULL, 0),
(31, 'likjhgf', 'kfufyyrkury ymujyd', NULL, 0),
(32, 'ddd', 'dddd d d d d dd', NULL, 0),
(34, 'test1', 'tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 tit 2 ', NULL, 1),
(35, 'test1', 'asd;lfasdfaf adfasdfa asdfasdfasdf ', NULL, 1),
(36, 'asdf', 'dfasdf', '2019-05-11', 1),
(37, 'd', 'ddaasdf', '2019-05-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
CREATE TABLE IF NOT EXISTS `content` (
  `id` int(127) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `textA` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `image`, `textA`) VALUES
(46, 'aaa.png', 'kkjld'),
(45, '', ''),
(44, '', ''),
(43, '', ''),
(42, 'aaa.png', 'Image 1!'),
(41, 'bbb.png', 'Greate Image!');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `password`, `role`) VALUES
(38, 'saad', 'saad@gmail.com', '123', 'client'),
(37, 'saleh', 'saleh@gmail.com', '123', 'client'),
(33, 'yazeed', 'yazeed@gmail.com', '123', 'worker'),
(34, 'mohammed', 'mohammed@gmail.com', '123', 'worker'),
(22, 'hamad', 'hamad@gmail.com', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orderr`
--

DROP TABLE IF EXISTS `orderr`;
CREATE TABLE IF NOT EXISTS `orderr` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `Eid` int(3) NOT NULL,
  `Pid` int(3) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `Eid` (`Eid`),
  KEY `Pid` (`Pid`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderr`
--

INSERT INTO `orderr` (`id`, `Eid`, `Pid`, `status`) VALUES
(59, 33, 75, 3),
(61, 33, 77, 1),
(60, 33, 76, 3);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `image`, `title`, `text`, `category`, `price`) VALUES
(78, '283Ø£_600x800.jpg', 'sadf asd f', 'a sdfa sdf dds fsa sadf55', 'old', 545),
(76, '641Ø´-min.jpg', 'ddda', 'dsfasfa as fda afs dfa', 'new', 580),
(77, '4Ø¨_500x600.jpg', 'dfadsfa', 'asdfasd fasd fas df asfd ', 'old', 444),
(75, '19_500x500.jpg', 'dallah', 'dallah dallah dallah dallah dallah dallah dallah dallah dallah dallah ', 'old', 125);

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

DROP TABLE IF EXISTS `table1`;
CREATE TABLE IF NOT EXISTS `table1` (
  `Id` int(127) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Age` int(127) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=105 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`Id`, `Username`, `Password`, `Age`) VALUES
(104, 'aa', '10', 10),
(50, 'hamad', '5555', 5555),
(45, 'b', '2', 2),
(47, 'asdf', '052', 5252),
(48, 'hamad', '41414', 1414),
(49, 'hamad', '11', 11),
(92, 'h', '10', 10),
(93, 'd', '10', 10),
(94, 'l', '10', 10),
(95, 'l', '10', 10),
(96, 'a', '10', 10),
(97, 'a', '10', 10),
(98, 'a', '10', 10),
(99, 'a', '10', 10),
(100, 'a', '10', 10),
(101, 'aa', '10', 10),
(102, 'aa', '10', 10),
(103, 'aa', '10', 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
