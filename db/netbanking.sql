-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2013 at 02:01 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `netbanking`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountmaster`
--

CREATE TABLE IF NOT EXISTS `accountmaster` (
  `accounttype` varchar(25) NOT NULL,
  `prefix` varchar(11) NOT NULL,
  `minbalance` double(12,2) NOT NULL,
  `interest` double(10,2) NOT NULL,
  PRIMARY KEY (`accounttype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountmaster`
--

INSERT INTO `accountmaster` (`accounttype`, `prefix`, `minbalance`, `interest`) VALUES
('current', 'fd', 6000.00, 600.00),
('dfd', 'gdf', 45.00, 7546.00),
('salary account', 'SAL', 0.00, 10.00),
('saving', 'sb', 4000.00, 500.00);

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `accno` varchar(25) NOT NULL,
  `customerid` int(10) NOT NULL,
  `accstatus` varchar(25) NOT NULL,
  `primaryacc` varchar(10) NOT NULL,
  `accopendate` date NOT NULL,
  `accounttype` varchar(25) NOT NULL,
  `accountbalance` double(10,2) NOT NULL,
  `unclearbalance` double(10,2) NOT NULL,
  `accuredinterest` double(10,2) NOT NULL,
  PRIMARY KEY (`accno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`accno`, `customerid`, `accstatus`, `primaryacc`, `accopendate`, `accounttype`, `accountbalance`, `unclearbalance`, `accuredinterest`) VALUES
('4666', 98683, 'active', '40000', '2013-02-11', 'sv', 100000.00, 100.00, 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `ifsccode` varchar(25) NOT NULL,
  `branchname` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `branchaddress` text NOT NULL,
  `state` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  PRIMARY KEY (`ifsccode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`ifsccode`, `branchname`, `city`, `branchaddress`, `state`, `country`) VALUES
('5249898', 'Mangalore', 'gfhdh', 'hdjjj', 'PAKISTAN', 'MAHARASTRA'),
('KARB0000404', 'karkala', 'karkala', 'NEAR BUS STAND,KARLA COMPLEX,1ST FLOOR,PB 19,KARKALA 574104,UDUPI DIST', 'KARNATAKA', 'india'),
('tyg', 'yfy', 'fy', 'yfg', 'PAKISTAN', 'MAHARASTRA');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customerid` int(10) NOT NULL AUTO_INCREMENT,
  `ifsccode` varchar(25) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `loginid` varchar(25) NOT NULL,
  `accpassword` varchar(50) NOT NULL,
  `transpasword` varchar(50) NOT NULL,
  `accstatus` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `accopendate` date NOT NULL,
  `lastlogin` datetime NOT NULL,
  PRIMARY KEY (`customerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98684 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `ifsccode`, `firstname`, `lastname`, `loginid`, `accpassword`, `transpasword`, `accstatus`, `city`, `state`, `country`, `accopendate`, `lastlogin`) VALUES
(98680, 'KARB0000404', 'sadf', 'werwe', '23432', 'fgdfg', 'werwe', 'ACTIVE', '23423', 'KARNATAKA', 'INDIA', '2013-02-02', '0000-00-00 00:00:00'),
(98682, '5249898', 'Raj', 'kiran', '123456', '987654', '123456', 'ACTIVE', 'mangaloree', 'KARNATAKA', 'INDIA', '2013-02-02', '0000-00-00 00:00:00'),
(98683, '5249898', 'john', 'mark', 'cust', 'cust', 'cust', 'ACTIVE', 'mangalore', 'KARNATAKA', 'INDIA', '2013-02-09', '2013-02-16 05:25:20');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `empid` int(10) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(25) NOT NULL,
  `loginid` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `contactno` varchar(30) NOT NULL,
  `createdat` date NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`empid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=313800 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`empid`, `employee_name`, `loginid`, `password`, `emailid`, `contactno`, `createdat`, `last_login`) VALUES
(313786, 'soudhabanu', '445545', '125487', 'soudha_ban@52yahoo.com', '9535543313', '2012-12-15', '2012-12-03 11:27:00'),
(313787, 'mahesh', 'mahesh', 'qwert', 'mahesh@gmail.com', '98478872783', '0000-00-00', '0000-00-00 00:00:00'),
(313788, 'jyothi', '3535355', '3636', 'jyothi@yahoo.com', '95425422424', '2013-01-02', '0000-00-00 00:00:00'),
(313791, 'admin', 'admin', 'admin', 'admin', 'admin', '2013-01-12', '2013-01-12 00:00:00'),
(313798, 'raj', 'rajkiran', '123456', 'abc@gmail.com', '9874563210', '2013-02-02', '0000-00-00 00:00:00'),
(313799, 'peter king', 'emp', 'emp', 'emp@gmail.com', '987456321', '2013-02-09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE IF NOT EXISTS `loan` (
  `loanid` int(10) NOT NULL AUTO_INCREMENT,
  `loantype` varchar(25) NOT NULL,
  `loanamt` varchar(25) NOT NULL,
  `period` varchar(25) NOT NULL,
  `interest` float(10,2) NOT NULL,
  `startdate` date NOT NULL,
  PRIMARY KEY (`loanid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2147483647 ;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`loanid`, `loantype`, `loanamt`, `period`, `interest`, `startdate`) VALUES
(2147483647, 'homeloan', '300000', 'monthly', 63.09, '2012-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `loanpayment`
--

CREATE TABLE IF NOT EXISTS `loanpayment` (
  `paymentid` int(10) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `paidamt` float(10,2) NOT NULL,
  `principleamt` float(10,2) NOT NULL,
  `interestamt` float(10,2) NOT NULL,
  `balance` float(10,2) NOT NULL,
  PRIMARY KEY (`paymentid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2147483647 ;

--
-- Dumping data for table `loanpayment`
--

INSERT INTO `loanpayment` (`paymentid`, `date`, `paidamt`, `principleamt`, `interestamt`, `balance`) VALUES
(2147483647, '2012-01-03', 50000.00, 25000.00, 2500.50, 250000.00);

-- --------------------------------------------------------

--
-- Table structure for table `loantype`
--

CREATE TABLE IF NOT EXISTS `loantype` (
  `loantype` varchar(25) NOT NULL,
  `prefix` varchar(25) NOT NULL,
  `maximumamt` float(10,2) NOT NULL,
  `minimumamt` float(10,2) NOT NULL,
  `interest` float(10,2) NOT NULL,
  `status` varchar(25) NOT NULL,
  UNIQUE KEY `loantype` (`loantype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loantype`
--

INSERT INTO `loantype` (`loantype`, `prefix`, `maximumamt`, `minimumamt`, `interest`, `status`) VALUES
('current', 'sb', 70000.00, 50000.00, 3000.00, 'active'),
('homeloan', 'hl', 1000000.00, 50000.00, 65.09, 'active'),
('sb', 'fd', 7000.00, 5000.00, 400.00, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `mailid` int(10) NOT NULL AUTO_INCREMENT,
  `subject` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `mdatetime` datetime NOT NULL,
  `senderid` varchar(25) NOT NULL,
  `reciverid` varchar(25) NOT NULL,
  PRIMARY KEY (`mailid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`mailid`, `subject`, `message`, `mdatetime`, `senderid`, `reciverid`) VALUES
(10, 'sdfgfdg', 'dfgfdg', '2013-01-19 05:05:58', '0', 'admin'),
(12, 'fdgdfsgsd', 'fgdsfgdsfg', '2013-02-02 05:32:29', 'admin', '98682'),
(13, 'hello this is test pag', 'this is test page to all emp', '2013-02-02 05:33:00', 'admin', '98682'),
(14, 'good morning raj kiran', 'this is welcome page', '2013-02-02 05:36:16', 'admin', '98682');

-- --------------------------------------------------------

--
-- Table structure for table `registerdpayee`
--

CREATE TABLE IF NOT EXISTS `registerdpayee` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `payeename` varchar(25) NOT NULL,
  `accountnumber` varchar(25) NOT NULL,
  `accounttype` varchar(25) NOT NULL,
  `bankname` varchar(25) NOT NULL,
  `ifsccode` varchar(25) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `registerdpayee`
--

INSERT INTO `registerdpayee` (`slno`, `payeename`, `accountnumber`, `accounttype`, `bankname`, `ifsccode`) VALUES
(101, 'arpitha', '26548', 'saving', 'canarabank', 'KARB0000404');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `transactionid` int(10) NOT NULL AUTO_INCREMENT,
  `transactiondate` date NOT NULL,
  `paymentdate` datetime NOT NULL,
  `payeeid` int(25) NOT NULL,
  `receiveid` int(10) NOT NULL,
  `debitac` varchar(25) NOT NULL,
  `amount` float(10,2) NOT NULL,
  `paymentstat` varchar(25) NOT NULL,
  PRIMARY KEY (`transactionid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2147483647 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transactionid`, `transactiondate`, `paymentdate`, `payeeid`, `receiveid`, `debitac`, `amount`, `paymentstat`) VALUES
(2147483647, '2012-12-13', '2012-12-03 04:21:10', 111232154, 0, '150000', 100000.00, 'active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
