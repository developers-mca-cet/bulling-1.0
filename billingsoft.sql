-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2018 at 04:27 PM
-- Server version: 5.0.37-community-nt
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `billingsoft`
--
CREATE DATABASE IF NOT EXISTS `billingsoft` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `billingsoft`;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `c_id` int(5) NOT NULL,
  `dep_id` int(5) default NULL,
  `c_name` varchar(30) default NULL,
  `no_of_sem` int(5) default NULL,
  `ug_pg` varchar(5) default NULL,
  `reg_evg` varchar(10) default NULL,
  PRIMARY KEY  (`c_id`),
  KEY `dep_id` (`dep_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coursewise_fee`
--

CREATE TABLE IF NOT EXISTS `coursewise_fee` (
  `c_id` int(5) NOT NULL default '0',
  `fee_id` int(5) NOT NULL default '0',
  `sem` tinyint(3) NOT NULL default '0',
  `start_date` date default NULL,
  `end_date` date default NULL,
  `due_date` date default NULL,
  PRIMARY KEY  (`c_id`,`fee_id`,`sem`),
  KEY `fee_id` (`fee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `dep_id` int(5) NOT NULL auto_increment,
  `dep_name` varchar(30) NOT NULL,
  `hod_name` varchar(30) NOT NULL,
  PRIMARY KEY  (`dep_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `due`
--

CREATE TABLE IF NOT EXISTS `due` (
  `admno` int(7) default NULL,
  `fee_id` int(5) default NULL,
  `due_amount` float default NULL,
  `status` varchar(10) default NULL,
  KEY `admno` (`admno`),
  KEY `fee_id` (`fee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feetype`
--

CREATE TABLE IF NOT EXISTS `feetype` (
  `fee_id` int(5) NOT NULL,
  `fee_desc` varchar(30) NOT NULL,
  `amount` float NOT NULL,
  PRIMARY KEY  (`fee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(5) NOT NULL auto_increment,
  `u_name` varchar(30) NOT NULL,
  `passwd` varchar(30) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY  (`login_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `u_name`, `passwd`, `role`) VALUES
(100, 'jab', '1111', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(5) NOT NULL,
  `login_id` int(5) NOT NULL,
  `f_name` varchar(20) default NULL,
  `l_name` varchar(20) default NULL,
  `email` varchar(20) default NULL,
  `contact_no` varchar(11) default NULL,
  `status` text NOT NULL,
  PRIMARY KEY  (`staff_id`),
  KEY `login_id` (`login_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `admno` int(7) NOT NULL,
  `login_id` int(5) default NULL,
  `name` varchar(30) default NULL,
  `contact_no` varchar(11) default NULL,
  `yr_of_adm` int(5) default NULL,
  `curr_sem` int(3) default NULL,
  `c_id` int(5) default NULL,
  `hon_status` varchar(5) default NULL,
  `egrantz_sts` varchar(5) default NULL,
  `batch` varchar(5) default NULL,
  PRIMARY KEY  (`admno`),
  KEY `st_course` (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`dep_id`) REFERENCES `department` (`dep_id`);

--
-- Constraints for table `coursewise_fee`
--
ALTER TABLE `coursewise_fee`
  ADD CONSTRAINT `coursewise_fee_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `course` (`c_id`),
  ADD CONSTRAINT `coursewise_fee_ibfk_2` FOREIGN KEY (`fee_id`) REFERENCES `feetype` (`fee_id`);

--
-- Constraints for table `due`
--
ALTER TABLE `due`
  ADD CONSTRAINT `due_ibfk_1` FOREIGN KEY (`admno`) REFERENCES `student` (`admno`),
  ADD CONSTRAINT `due_ibfk_2` FOREIGN KEY (`fee_id`) REFERENCES `feetype` (`fee_id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `login` (`login_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `st_course` FOREIGN KEY (`c_id`) REFERENCES `course` (`c_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
