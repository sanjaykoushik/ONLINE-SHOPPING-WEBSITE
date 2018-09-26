-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2015 at 08:45 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `mode` varchar(25) NOT NULL,
  `paymentid` int(11) NOT NULL AUTO_INCREMENT,
  `productname` varchar(25) NOT NULL,
  `amount` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`paymentid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`name`, `email`, `username`, `mode`, `paymentid`, `productname`, `amount`, `balance`) VALUES
('', '', 'abc', 'COD', 40, 'bulb', 100, 0),
('', '', 'abc', 'COD', 41, 'tubelight', 150, 0),
('', '', 'abc', 'COD', 42, 'thali', 100, 0),
('', '', 'abc', 'COD', 43, 'snacks', 40, 0),
('', '', 'anish', 'COD', 44, 'bulb', 100, 0),
('', '', 'anish', 'COD', 45, 'tubelight', 150, 0),
('', '', 'anish', 'COD', 46, 'thali', 100, 0),
('', '', 'anish', 'COD', 47, 'snacks', 40, 0),
('', '', 'anish', 'COD', 48, 'bulb', 100, 0),
('', '', 'anish', 'Billing', 49, 'bulb', 100, 0),
('', '', 'anish', 'monthly', 50, 'bulb', 100, 100),
('', '', 'anish', 'COD', 51, 'bulb', 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `userid` int(25) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `username`, `password`, `address`, `gender`, `userid`) VALUES
('anish', 'anish@gmail.com', 'anish', 'abc', 'abcd', 'male', 1),
('abc', 'abc@gmail.com', 'abc', 'abc', 'abc', 'male', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
