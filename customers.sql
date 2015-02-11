-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Feb 10, 2015 at 08:25 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `order_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
`id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `member_since` date NOT NULL,
  `subscriber` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_list`
--

CREATE TABLE `customer_list` (
`id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `member_since` date NOT NULL,
  `subscriber` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_list`
--

INSERT INTO `customer_list` (`id`, `first_name`, `last_name`, `phone`, `email`, `address`, `member_since`, `subscriber`) VALUES
(5, 'Sevika', 'Singh', '3055195920', 's.singh10@umiami.edu', '15013 Southwest 67th Lane', '0000-00-00', 'Y'),
(6, 'Steve', 'Pierre', '3059780446', 'stevepierre31@gmail.com', '455 NW 88th ST Miami, FL 33150', '0000-00-00', 'Y'),
(7, 'Clay', 'Ewing', '7189912938', 'c.ewing@miami.edu', '1234 Cherry Ville', '0000-00-00', 'N'),
(8, 'Lien', 'Tran', '2039448429', 'l.tran@miami.edu', '1234 Cherry Ville', '0000-00-00', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_list`
--
ALTER TABLE `customer_list`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer_list`
--
ALTER TABLE `customer_list`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;