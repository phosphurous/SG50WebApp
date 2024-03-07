-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2016 at 04:54 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `assignment2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE IF NOT EXISTS `tbadmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`id`, `username`, `password`) VALUES
(1, 'jack', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tboccunevent`
--

CREATE TABLE IF NOT EXISTS `tboccunevent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `occu` varchar(100) NOT NULL,
  `event` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tboccunevent`
--

INSERT INTO `tboccunevent` (`id`, `occu`, `event`) VALUES
(1, 'Manager', 'Social Media'),
(2, 'Engineer', 'Newspaper'),
(3, 'Clerk', 'Word of mouth'),
(4, 'CEO', 'Brochure');

-- --------------------------------------------------------

--
-- Table structure for table `tbregister`
--

CREATE TABLE IF NOT EXISTS `tbregister` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `age` int(99) NOT NULL,
  `contact` int(8) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `eventknowledge` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbregister`
--

INSERT INTO `tbregister` (`id`, `name`, `age`, `contact`, `email`, `gender`, `address`, `occupation`, `eventknowledge`) VALUES
(1, 'James', 20, 91234567, 'james@hotmail.com', 'Male', 'Blk 123', 'CEO', 'Newspaper'),
(2, 'Peter', 30, 91238412, 'peter@hotmail.com', 'Male', 'Blk 192', 'Manager', 'Newspaper');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
