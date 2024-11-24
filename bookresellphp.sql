-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2019 at 11:04 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookresellphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--
create database bookresellphp;
use bookresellphp;
CREATE TABLE IF NOT EXISTS `book` (
  `bookid` int(5) NOT NULL AUTO_INCREMENT,
  `bookname` varchar(50) DEFAULT NULL,
  `authorname` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `booklang` varchar(50) DEFAULT NULL,
  `bookimage` longtext,
  `purchasedate` varchar(30) DEFAULT NULL,
  `bookcondition` varchar(30) DEFAULT NULL,
  `quantity` varchar(30) NOT NULL,
  `price` varchar(30) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookid`, `bookname`, `authorname`, `category`, `booklang`, `bookimage`, `purchasedate`, `bookcondition`, `quantity`, `price`, `description`, `status`, `username`) VALUES
(3, 'book2', 'author2', 'Civil', 'English', 'uploadimage/a4.jpg', '2019-03-02', 'Good', '2', '500', 'civilbook', 'Available', 'admin'),
(5, 'Book4', 'author4', 'ComputerScience', 'English', 'uploadimage/a14.jpg', '2019-02-18', 'Good', '2', '100', 'desc888', 'Available', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `bookingid` int(11) NOT NULL AUTO_INCREMENT,
  `bookingdate` varchar(50) DEFAULT NULL,
  `customername` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `bookid` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `quantity` varchar(30) NOT NULL,
  `total` varchar(30) NOT NULL,
  `sellername` varchar(30) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `bookingdate`, `customername`, `email`, `contact`, `city`, `address`, `bookid`, `price`, `quantity`, `total`, `sellername`) VALUES
(1, '18-04-19', 'abcd', 'abcd@gmail.com', '9229465037', 'Bhopal', 'Indrapuri', 'Book1', '500', '1', '500', 'gaurav'),
(2, '18-04-19', 'gaurav', 'gaurav@gmail.com', '8602768217', 'bhopal', 'Indrapuri', 'Book4', '100', '3', '300', 'abcd'),
(3, '18-04-19', 'gaurav', 'gaurav@gmail.com', '8602768217', 'bhopal', 'Indrapuri', 'book2', '500', '3', '1500', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `categorytitle` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `siteuser`
--

CREATE TABLE IF NOT EXISTS `siteuser` (
  `username` varchar(30) NOT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `emailadd` varchar(50) DEFAULT NULL,
  `smsno` varchar(15) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siteuser`
--

INSERT INTO `siteuser` (`username`, `pwd`, `dob`, `city`, `address`, `emailadd`, `smsno`, `role`) VALUES
('abcd', 'abcd', '1990-04-17', 'Bhopal', 'Indrapuri', 'abcd@gmail.com', '9229465037', 'customer'),
('deepak', 'deepak', '1997-10-04', 'Bhopal', 'ayodhya', 'deepak555@gmail.com', '9229465037', 'admin'),
('gaurav', 'gaurav', '1994-04-15', 'bhopal', 'Indrapuri', 'gaurav@gmail.com', '8602768217', 'customer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
