-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2015 at 10:46 PM
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
  `c_type` tinyint(1) NOT NULL,
  `c_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
`e_id` int(11) NOT NULL,
  `e_name` varchar(50) NOT NULL,
  `e_description` varchar(500) NOT NULL,
  `e_photo` varchar(100) DEFAULT NULL,
  `e_venue` varchar(50) NOT NULL,
  `e_time` varchar(100) NOT NULL,
  `e_date` varchar(100) NOT NULL,
  `e_duration` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`e_id`, `e_name`, `e_description`, `e_photo`, `e_venue`, `e_time`, `e_date`, `e_duration`) VALUES
(1, 'Debate Club Session', 'This is an informal session for practising on an abstract topic to help the students to prepare for their GD Rounds for placements.', '0', 'CEP 110', '17:00:00', '2015-03-31', '2 hours'),
(2, 'MUN Session', 'Model United Nations.Each member would be given a country and he has to speak on that.', NULL, 'CEP 102', '10:00:00', '2015-04-02', '5hours');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`f_id`, `f_authorID`, `f_topic`, `f_description`, `f_time`) VALUES
(1, 1, 'Political Issue', 'What do you think India should give Kashmir to Pakistan?', '2015-03-31 09:29:26');

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
  `p_y` int(11) DEFAULT NULL,
  `p_n` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `polling`
--

INSERT INTO `polling` (`p_id`, `p_authorID`, `p_topic`, `p_time`, `p_y`, `p_n`) VALUES
(1, 201201024, 'Are schools more protected than they should be?', '2015-04-01 12:31:48', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

CREATE TABLE IF NOT EXISTS `polls` (
  `po_id` int(11) NOT NULL,
  `po_u_ID` int(11) NOT NULL,
  `po_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `polls`
--

INSERT INTO `polls` (`po_id`, `po_u_ID`, `po_time`) VALUES
(1, 201201002, '2015-04-01 20:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `u_emailID` varchar(30) NOT NULL,
  `u_aemailID` varchar(50) NOT NULL,
  `u_password` varchar(20) NOT NULL,
  `u_isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `u_photo` varchar(100) DEFAULT NULL,
  `u_rating` int(11) DEFAULT '0',
  `u_securityQ` varchar(100) DEFAULT NULL,
  `u_securityA` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_emailID`, `u_aemailID`, `u_password`, `u_isAdmin`, `u_photo`, `u_rating`, `u_securityQ`, `u_securityA`) VALUES
(201201024, 'Aarsee', '201201024@daiict.ac.in', 'aarseeaeron@gmail.com', 'password', 1, '0', 0, 'My name', 'Password'),
(201201038, 'Sayli', '201201038@daiict.ac.in', 'sayli.digh@gmail.com', 'password', 0, NULL, 0, 'My name', 'password');

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
-- Indexes for table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`e_id`);

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
MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `polling`
--
ALTER TABLE `polling`
MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
