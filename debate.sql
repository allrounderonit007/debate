-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2015 at 11:53 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `debate`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
`b_id` int(11) NOT NULL,
  `b_authorID` int(11) NOT NULL,
  `b_topic` varchar(100) NOT NULL,
  `b_description` varchar(1000) NOT NULL,
  `b_category` varchar(100) NOT NULL,
  `b_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
`c_id` int(11) NOT NULL,
  `c_o_ID` int(11) NOT NULL,
  `c_authorID` int(11) NOT NULL,
  `c_text` varchar(10000) NOT NULL,
  `c_colour` varchar(11) NOT NULL DEFAULT 'white',
  `c_type` tinyint(1) NOT NULL,
  `c_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
`f_id` int(11) NOT NULL,
  `f_authorID` int(11) NOT NULL,
  `f_topic` varchar(100) NOT NULL,
  `f_description` varchar(1000) NOT NULL,
  `f_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE IF NOT EXISTS `like` (
  `l_id` int(11) NOT NULL,
  `l_o_ID` int(11) NOT NULL,
  `l_authorID` int(11) NOT NULL,
  `l_type` int(30) NOT NULL,
  `l_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `polling`
--

CREATE TABLE IF NOT EXISTS `polling` (
`p_id` int(11) NOT NULL,
  `p_authorID` int(11) NOT NULL,
  `p_topic` varchar(100) NOT NULL,
  `p_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `p_y` int(11) NOT NULL,
  `p_n` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

CREATE TABLE IF NOT EXISTS `polls` (
  `po_id` int(11) NOT NULL,
  `po_u_ID` int(11) NOT NULL,
  `po_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `u_emailID` varchar(30) NOT NULL,
  `u_aemailID` varchar(50) NOT NULL,
  `u_isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `u_photo` int(11) DEFAULT NULL,
  `u_rating` int(11) DEFAULT '0',
  `u_securityQ` varchar(100) DEFAULT NULL,
  `u_securityA` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
 ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
 ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `polling`
--
ALTER TABLE `polling`
 ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `polling`
--
ALTER TABLE `polling`
MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
