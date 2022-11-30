-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2015 at 11:58 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `secondary_result`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(25) NOT NULL,
  `password` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE IF NOT EXISTS `art` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s1` varchar(50) NOT NULL,
  `s2` varchar(50) NOT NULL,
  `s3` varchar(50) NOT NULL,
  `s4` varchar(50) NOT NULL,
  `s5` varchar(50) NOT NULL,
  `s6` varchar(50) NOT NULL,
  `s7` varchar(50) NOT NULL,
  `s8` varchar(50) NOT NULL,
  `s9` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `commercial`
--

CREATE TABLE IF NOT EXISTS `commercial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s1` varchar(50) NOT NULL,
  `s2` varchar(50) NOT NULL,
  `s3` varchar(50) NOT NULL,
  `s4` varchar(50) NOT NULL,
  `s5` varchar(50) NOT NULL,
  `s6` varchar(50) NOT NULL,
  `s7` varchar(50) NOT NULL,
  `s8` varchar(50) NOT NULL,
  `s9` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s1_ca1` varchar(30) NOT NULL,
  `s1_ca2` varchar(30) NOT NULL,
  `total_s1` varchar(30) NOT NULL,
  `e1` varchar(30) NOT NULL,
  `s1_percentage` varchar(30) NOT NULL,
  `s1_grade` varchar(30) NOT NULL,
  `s1_remark` varchar(30) NOT NULL,
  `s2_ca1` varchar(30) NOT NULL,
  `s2_ca2` varchar(30) NOT NULL,
  `total_s2` varchar(30) NOT NULL,
  `e2` varchar(30) NOT NULL,
  `s2_percentage` varchar(30) NOT NULL,
  `s2_grade` varchar(30) NOT NULL,
  `s2_remark` varchar(30) NOT NULL,
  `s3_ca1` varchar(30) NOT NULL,
  `s3_ca2` varchar(30) NOT NULL,
  `total_s3` varchar(30) NOT NULL,
  `e3` varchar(30) NOT NULL,
  `s3_percentage` varchar(30) NOT NULL,
  `s3_grade` varchar(30) NOT NULL,
  `s3_remark` varchar(30) NOT NULL,
  `s4_ca1` varchar(30) NOT NULL,
  `s4_ca2` varchar(30) NOT NULL,
  `total_s4` varchar(30) NOT NULL,
  `e4` varchar(30) NOT NULL,
  `s4_percentage` varchar(30) NOT NULL,
  `s4_grade` varchar(30) NOT NULL,
  `s4_remark` varchar(30) NOT NULL,
  `s5_ca1` varchar(30) NOT NULL,
  `s5_ca2` varchar(30) NOT NULL,
  `total_s5` varchar(30) NOT NULL,
  `e5` varchar(30) NOT NULL,
  `s5_percentage` varchar(30) NOT NULL,
  `s5_grade` varchar(30) NOT NULL,
  `s5_remark` varchar(30) NOT NULL,
  `s6_ca1` varchar(30) NOT NULL,
  `s6_ca2` varchar(30) NOT NULL,
  `total_s6` varchar(30) NOT NULL,
  `e6` varchar(30) NOT NULL,
  `s6_percentage` varchar(30) NOT NULL,
  `s6_grade` varchar(30) NOT NULL,
  `s6_remark` varchar(30) NOT NULL,
  `s7_ca1` varchar(30) NOT NULL,
  `s7_ca2` varchar(30) NOT NULL,
  `total_s7` varchar(30) NOT NULL,
  `e7` varchar(30) NOT NULL,
  `s7_percentage` varchar(30) NOT NULL,
  `s7_grade` varchar(30) NOT NULL,
  `s7_remark` varchar(30) NOT NULL,
  `s8_ca1` varchar(30) NOT NULL,
  `s8_ca2` varchar(30) NOT NULL,
  `total_s8` varchar(30) NOT NULL,
  `e8` varchar(30) NOT NULL,
  `s8_percentage` varchar(30) NOT NULL,
  `s8_grade` varchar(30) NOT NULL,
  `s8_remark` varchar(30) NOT NULL,
  `s9_ca1` varchar(30) NOT NULL,
  `s9_ca2` varchar(30) NOT NULL,
  `total_s9` varchar(30) NOT NULL,
  `e9` varchar(30) NOT NULL,
  `s9_percentage` varchar(30) NOT NULL,
  `s9_grade` varchar(30) NOT NULL,
  `s9_remark` varchar(30) NOT NULL,
  `all_total` varchar(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `class` varchar(30) NOT NULL,
  `admission_no` varchar(30) NOT NULL,
  `class_type` varchar(30) NOT NULL,
  `av` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `s1_ca1`, `s1_ca2`, `total_s1`, `e1`, `s1_percentage`, `s1_grade`, `s1_remark`, `s2_ca1`, `s2_ca2`, `total_s2`, `e2`, `s2_percentage`, `s2_grade`, `s2_remark`, `s3_ca1`, `s3_ca2`, `total_s3`, `e3`, `s3_percentage`, `s3_grade`, `s3_remark`, `s4_ca1`, `s4_ca2`, `total_s4`, `e4`, `s4_percentage`, `s4_grade`, `s4_remark`, `s5_ca1`, `s5_ca2`, `total_s5`, `e5`, `s5_percentage`, `s5_grade`, `s5_remark`, `s6_ca1`, `s6_ca2`, `total_s6`, `e6`, `s6_percentage`, `s6_grade`, `s6_remark`, `s7_ca1`, `s7_ca2`, `total_s7`, `e7`, `s7_percentage`, `s7_grade`, `s7_remark`, `s8_ca1`, `s8_ca2`, `total_s8`, `e8`, `s8_percentage`, `s8_grade`, `s8_remark`, `s9_ca1`, `s9_ca2`, `total_s9`, `e9`, `s9_percentage`, `s9_grade`, `s9_remark`, `all_total`, `name`, `class`, `admission_no`, `class_type`, `av`) VALUES
(1, '3', '	22', '25', '35', '46', 'D', 'Pass', '23', '23', '46', '26', '48', 'D', 'Pass', '22', '15', '32', '45', '77', 'B+', 'Very Good', '21', '3', '24', '20', '40', 'D', 'Pass', '14', '15', '25', '45', '70', 'B+', 'Very Good', '14', '17', '31', '46', '77', 'B+', 'Very Good', '17', '16', '33', '50', '83', 'A', 'Excellent', '20', '17', '32', '45', '77', 'B+', 'Very Good', '15', '12', '17', '13', '30', 'F', 'Fail', '548', 'Zainab Mohammed', 'JSS 1', '002', 'Science', ''),
(2, '10', '10', '20', '36', '56', 'C', 'Cedit', '8', '5', '13', '39', '52', 'C', 'Credit', '2', '1', '3', '19', '22', 'F', 'Fail', '7', '6', '13', '44', '57', 'C', 'Credit', '10', '10', '20', '39', '59', 'B', 'Good', '10', '7', '17', '56', '73', 'B+', 'Very Good', '7', '7', '14', '45', '59', 'B', 'Good', '6', '10', '16', '39', '55', 'C', 'Credit', '9', '10', '19', '22', '41', 'D', 'Pass', '501', 'Abdullahi  Abubakar', 'SS 1', '003', 'Science', ''),
(3, '10', '8', '18', '32', '50', 'C', 'Cedit', '15', '4', '19', '23', '42', 'D', 'Pass', '15', '12', '27', '27', '54', 'C', 'Credit', '4', '8', '12', '38', '50', 'C', 'Credit', '9', '5', '14', '40', '54', 'C', 'Credit', '2', '7', '9', '23', '32', 'F', 'Fail', '6', '20', '26', '13', '39', 'D', 'Pass', '23', '5', '28', '40', '68', 'B', 'Good', '23', '2', '25', '54', '79', 'A', 'Excellent', '468', 'Lawan  Habu', 'SS 1', '004', 'Science', ''),
(4, '5', '7', '12', '45', '57', 'C', 'Cedit', '4', '8', '12', '3', '15', 'F', 'Fail', '23', '4', '27', '23', '50', 'C', 'Credit', '21', '3', '24', '18', '42', 'D', 'Pass', '3', '5', '8', '51', '59', 'B', 'Good', '4', '10', '14', '32', '46', 'D', 'Pass', '12', '19', '31', '20', '51', 'C', 'Credit', '23', '12', '35', '4', '39', 'D', 'Pass', '21', '3', '24', '54', '78', 'B+', 'Very Good', '437', 'Fatima Hassan', 'SS 1', '005', 'Science', ''),
(5, '5', '2', '7', '10', '17', 'F', 'Fail', '3', '16', '19', '20', '39', 'D', 'Pass', '3', '15', '18', '20', '38', 'F', 'Fail', '18', '3', '21', '34', '55', 'C', 'Credit', '4', '15', '19', '23', '42', 'D', 'Pass', '8', '16', '24', '19', '43', 'D', 'Pass', '12', '2', '14', '19', '33', 'F', 'Fail', '10', '10', '20', '30', '50', 'C', 'Credit', '2', '9', '11', '19', '30', 'F', 'Fail', '500', 'Hauwa Inuwa', 'SS 1', '006', 'Science', ''),
(7, '4', '23', '27', '2', '29', 'F', 'Fail', '23', '23', '46', '23', '69', 'B+', 'Very Good', '21', '16', '37', '32', '69', 'B+', 'Very Good', '6', '8', '14', '15', '29', 'F', 'Fail', '16', '21', '37', '10', '47', 'D', 'Pass', '23', '18', '41', '12', '53', 'C', 'Credit', '16', '4', '20', '16', '36', 'F', 'Fail', '18', '12', '30', '22', '52', 'C', 'Credit', '25', '25', '50', '25', '75', 'B+', 'Very Good', '459', 'umar adamu', 'SS 1', '123', 'Art', '229.5');

-- --------------------------------------------------------

--
-- Table structure for table `science`
--

CREATE TABLE IF NOT EXISTS `science` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s1` varchar(50) NOT NULL,
  `s2` varchar(50) NOT NULL,
  `s3` varchar(50) NOT NULL,
  `s4` varchar(50) NOT NULL,
  `s5` varchar(50) NOT NULL,
  `s6` varchar(50) NOT NULL,
  `s7` varchar(50) NOT NULL,
  `s8` varchar(50) NOT NULL,
  `s9` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `birth` varchar(23) NOT NULL,
  `state` varchar(40) NOT NULL,
  `l_g_a` varchar(33) NOT NULL,
  `class` varchar(32) NOT NULL,
  `class_type` varchar(40) NOT NULL,
  `admission_no` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `first_name`, `last_name`, `gender`, `birth`, `state`, `l_g_a`, `class`, `class_type`, `admission_no`) VALUES
(2, 'Musa', 'Jalo', 'Male', '2015-08-27', 'Yobe', 'Damaturu', 'JSS 1', 'Science', '001'),
(3, 'Zainab', 'Mohammed', 'Female', '1999-02-02', 'Yobe', 'Fune', 'JSS 1', 'Science', '002'),
(4, 'Abdullahi ', 'Abubakar', 'Male', '1991-01-29', 'Yobe', 'Fune', 'SS 1', 'Science', '003'),
(5, 'Lawan ', 'Habu', 'Male', '2003-01-27', 'Yobe', 'Damaturu', 'SS 1', 'Science', '004'),
(6, 'Fatima', 'Hassan', 'Male', '1995-01-09', 'Yobe', 'Damaturu', 'SS 1', 'Science', '005'),
(7, 'Hauwa', 'Inuwa', 'Female', '1996-01-07', 'Yobe', 'Damaturu', 'SS 1', 'Science', '006'),
(8, 'umar', 'adamu', 'Male', '2015-08-11', 'Yobe', 'Damaturu', 'SS 1', 'Art', '123'),
(9, 'MARYAM', 'HABIB', 'Female', '2015-09-06', 'KADUNA', 'KADUNA', 'SS 3', 'Science', '430030');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(65) NOT NULL,
  `subject_for` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject_name`, `subject_for`) VALUES
(12, 'English', 'Commercial'),
(13, 'Mathematics', 'Commercial'),
(14, 'Commerce', 'Commercial'),
(15, 'Accounting', 'Commercial'),
(16, 'Economic', 'Commercial'),
(17, 'Economic', 'Commercial'),
(18, 'Geography', 'Commercial'),
(19, 'IRK/CRK', 'Commercial'),
(20, 'Hausa', 'Commercial'),
(21, 'Biology', 'Commercial'),
(22, 'English', 'Science'),
(23, 'Mathematics', 'Science'),
(24, 'Biology', 'Science'),
(25, 'Chemistry', 'Science'),
(26, 'Physics', 'Science'),
(27, 'Geography', 'Science'),
(28, 'Agriculture', 'Science'),
(29, 'IRK/CRK', 'Science'),
(30, 'Hausa', 'Science'),
(35, 'Mathematics', 'Art'),
(36, 'English', 'Art'),
(37, 'Government', 'Art'),
(38, 'Economic', 'Art'),
(39, 'Biology', 'Art'),
(40, 'History', 'Art'),
(41, 'Geography', 'Art'),
(42, 'IRK/CRK', 'Art'),
(45, 'Igbo', 'Art');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
