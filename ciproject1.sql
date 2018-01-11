-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 11, 2018 at 11:55 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ciproject1`
--
CREATE DATABASE IF NOT EXISTS `ciproject1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ciproject1`;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `mobile` varchar(32) NOT NULL,
  `qualification` text NOT NULL,
  `city` varchar(32) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`, `mobile`, `qualification`, `city`, `pic`, `dob`, `gender`) VALUES
(78, 'neha kumari jan', 'neha@gmail.com', '123', '8602129246', '', 'patna', 'suman.jpg', '2017-08-09', 'female'),
(98, 'kumar', 'neha1@gmail.com', '123', '', '', '', '', NULL, NULL),
(99, 'suman kumar', 'suman@gmail.com', '1234', '', '', '', '', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
