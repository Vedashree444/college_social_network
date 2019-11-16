-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 16, 2019 at 12:30 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_network`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('sai baba', '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `sender` varchar(32) NOT NULL,
  `message` varchar(1024) NOT NULL,
  `cdate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`sender`, `message`, `cdate`) VALUES
('tom', 'hello, when do we have internals', '2019-11-15 16:47:58'),
('tom', 'hello, when do we have internals', '2019-11-15 16:47:58'),
('tom', 'hello, when do we have internals', '2019-11-15 16:47:58'),
('tom', 'hello, when do we have internals', '2019-11-15 16:47:58'),
('tom', 'hello, when do we have internals', '2019-11-15 16:47:58'),
('dora', 'it starts from november 24th', '2019-11-15 16:53:27'),
('admin', 'prepare well for you internala', '2019-11-15 16:54:40'),
('ninja', 'folks.. any idea about dbms portions', '2019-11-15 16:56:13'),
('rockstar', 'module 4 & 5', '2019-11-15 16:57:13'),
(' ', 'thank you', '2019-11-15 23:46:45'),
(' ', 'admin please do upload the time table of internal.', '2019-11-16 00:03:25'),
(' ', 'uploaded', '2019-11-16 00:15:17'),
('tom@gmail.com', 'ok', '2019-11-16 00:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `image` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `slno` int(4) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`slno`, `name`) VALUES
(1, 'tom@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `image` varchar(512) NOT NULL,
  `sender` varchar(64) NOT NULL,
  `cdate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`image`, `sender`, `cdate`) VALUES
('student/Aadhaar0001.jpg', 'tom@gmail.com', '2019-11-16 15:26:39'),
('student/FeeReceipt.jpg', 'tom@gmail.com', '2019-11-16 15:25:55'),
('student/', 'tom@gmail.com', '2019-11-16 15:10:44');

-- --------------------------------------------------------

--
-- Table structure for table `senior_details`
--

DROP TABLE IF EXISTS `senior_details`;
CREATE TABLE IF NOT EXISTS `senior_details` (
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `stream` varchar(16) NOT NULL,
  `batch` varchar(8) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `senior_details`
--

INSERT INTO `senior_details` (`name`, `email`, `phone`, `stream`, `batch`, `password`) VALUES
('aaa', 'aaa@gmail.com', '2345678', 'ise', '2021', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

DROP TABLE IF EXISTS `student_details`;
CREATE TABLE IF NOT EXISTS `student_details` (
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `branch` varchar(64) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `year` int(4) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`name`, `email`, `branch`, `phone`, `year`, `password`) VALUES
('tom', 'tom@gmail.com', 'ise', '9876543210', 4, 'tom'),
('dora', 'dora@gmail.com', 'ise', '9875421365', 3, 'dora'),
('nobi', 'nobi@gmail.com', 'cse', '9123456789', 2, 'nobi'),
('ninja', 'ninja@gmail.com', 'eee', '9654781235', 1, 'ninja'),
('rockstar', 'rockstar@gmail.com', 'tce', '9123457862', 3, 'rockstar');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
