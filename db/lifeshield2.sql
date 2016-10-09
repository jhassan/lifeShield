-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 08, 2016 at 03:39 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lifeshield2`
--

-- --------------------------------------------------------

--
-- Table structure for table `our_family`
--

CREATE TABLE IF NOT EXISTS `our_family` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `user_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1: Male, 2: Female',
  `dob` date DEFAULT NULL,
  `death_date` date DEFAULT NULL,
  `father_id` int(11) NOT NULL DEFAULT '0',
  `mother_id` int(11) NOT NULL DEFAULT '0',
  `spous_id` int(11) NOT NULL DEFAULT '0',
  `married_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: No, 1: Yes',
  `date_created` datetime DEFAULT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `user_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `our_family`
--

INSERT INTO `our_family` (`user_id`, `user_name`, `user_type`, `dob`, `death_date`, `father_id`, `mother_id`, `spous_id`, `married_status`, `date_created`, `user_image`, `user_order`) VALUES
(1, 'Jawad Hassan', 1, '1983-10-08', '0000-00-00', 2, 3, 12, 0, '2015-09-07 20:27:33', '', 4),
(2, 'Muhammad Siddiq Ansari', 1, '1955-08-25', '0000-00-00', 4, 5, 3, 0, '2015-09-02 21:17:53', '', 0),
(3, 'Kausar Parveen', 2, '1959-08-20', '0000-00-00', 6, 49, 2, 0, '2015-09-02 21:16:26', '', 0),
(4, 'Haji Ahmad Hassan', 1, '1926-05-06', '0000-00-00', 20, 0, 5, 0, '2015-09-06 18:11:57', '', 0),
(5, 'Nazeeran Bagum', 2, '0000-00-00', '0000-00-00', 23, 0, 4, 0, '2015-09-02 21:18:20', '', 0),
(6, 'Haji Talib Hussain', 1, '0000-00-00', '0000-00-00', 0, 0, 49, 0, '2015-09-02 21:13:31', '', 0),
(7, 'Doctar Isfaq Ahmad Ansari', 1, '0000-00-00', '2002-06-16', 4, 5, 45, 0, '2015-09-06 18:10:37', '', 0),
(8, 'Asif Ansari', 1, '0000-00-00', '0000-00-00', 4, 5, 9, 0, '2015-09-06 18:07:19', '', 0),
(9, 'Aasia Parveen', 2, '0000-00-00', '0000-00-00', 25, 0, 8, 0, '2015-09-02 21:13:03', '', 0),
(10, 'Hammad Hassan', 1, '1982-03-03', '0000-00-00', 2, 3, 11, 0, '2015-09-06 18:10:56', '', 0),
(11, 'Sara Hammad', 2, '0000-00-00', '0000-00-00', 7, 45, 10, 0, '2015-09-02 21:18:31', '', 0),
(12, 'Sana Jawad', 2, '1994-09-07', '0000-00-00', 36, 61, 1, 0, '2015-09-02 21:17:34', '', 0),
(13, 'Fawad Hassan', 1, '0000-00-00', '0000-00-00', 2, 3, 0, 0, '2015-09-02 20:45:56', '', 0),
(14, 'Muhammad Awais', 1, '0000-00-00', '0000-00-00', 2, 3, 0, 0, '2015-09-02 20:46:18', '', 0),
(15, 'Sidra Ahsan', 2, '0000-00-00', '0000-00-00', 2, 3, 0, 0, '2015-09-02 20:46:58', '', 0),
(16, 'Muhammad Ahsan', 1, '0000-00-00', '0000-00-00', 8, 9, 15, 0, '2015-09-06 18:12:41', '', 0),
(17, 'Noor Fatima', 2, '0000-00-00', '0000-00-00', 16, 15, 0, 0, '2015-09-02 20:48:30', '', 0),
(18, 'Muhammad Ahmad', 1, '0000-00-00', '0000-00-00', 16, 15, 0, 0, '2015-09-02 20:48:49', '', 0),
(19, 'Mian Barkudar', 1, '0000-00-00', '0000-00-00', 0, 0, 0, 0, '2015-09-02 20:49:36', '', 0),
(20, 'Hafiz Wahid Baksh', 1, '0000-00-00', '0000-00-00', 0, 0, 0, 0, '2015-09-02 20:49:56', '', 0),
(21, 'Hafiz Allah Baksh', 1, '0000-00-00', '0000-00-00', 0, 0, 0, 0, '2015-09-02 20:50:21', '', 0),
(22, 'Munshi Hussain Baksh', 1, '1919-08-21', '0000-00-00', 20, 0, 0, 0, '2015-09-02 20:51:11', '', 0),
(23, 'Master Elahi Baksh', 1, '0000-00-00', '0000-00-00', 0, 0, 0, 0, '2015-09-02 20:51:48', '', 0),
(24, 'Rahemm Dad', 1, '0000-00-00', '0000-00-00', 0, 0, 0, 0, '2015-09-02 20:52:07', '', 0),
(25, 'Haji Mumtaz Ahmad Ansari', 1, '0000-00-00', '0000-00-00', 23, 0, 0, 0, '2015-09-02 20:52:43', '', 0),
(26, 'Haji Faiz Rasool Ansari', 1, '0000-00-00', '0000-00-00', 23, 0, 0, 0, '2015-09-02 20:58:07', '', 0),
(27, 'Haji Iqbal Ansari', 1, '0000-00-00', '0000-00-00', 23, 0, 0, 0, '2015-09-02 20:53:29', '', 0),
(28, 'Haji Maqbool Ansari', 1, '0000-00-00', '0000-00-00', 23, 0, 0, 0, '2015-09-02 20:53:51', '', 0),
(29, 'Shahbaz Ansari', 1, '0000-00-00', '0000-00-00', 25, 0, 0, 0, '2015-09-02 20:54:34', '', 0),
(30, 'Niaz Ahmad Ansari', 1, '0000-00-00', '0000-00-00', 25, 0, 0, 0, '2015-09-02 20:55:01', '', 0),
(31, 'Ghulam Abas', 1, '0000-00-00', '0000-00-00', 25, 0, 0, 0, '2015-09-02 20:55:18', '', 0),
(32, 'Munawar Sultana', 2, '0000-00-00', '0000-00-00', 25, 0, 0, 0, '2015-09-02 20:55:41', '', 0),
(33, 'Musarat Parveen', 2, '0000-00-00', '0000-00-00', 25, 0, 0, 0, '2015-09-02 20:56:24', '', 0),
(34, 'Noor Jahan', 2, '0000-00-00', '0000-00-00', 25, 0, 0, 0, '2015-09-02 20:56:46', '', 0),
(35, 'Najeeb Ansari', 1, '0000-00-00', '0000-00-00', 26, 0, 0, 0, '2015-09-02 20:57:36', '', 0),
(36, 'Khalid Rasool Ansari', 1, '0000-00-00', '0000-00-00', 26, 37, 0, 0, '2015-09-02 21:16:40', '', 0),
(37, 'Mumtaz Bibi', 2, '0000-00-00', '0000-00-00', 0, 0, 26, 0, '2015-09-02 20:59:16', '', 0),
(38, 'Athar Rasool Ansari', 1, '0000-00-00', '0000-00-00', 26, 37, 0, 0, '2015-09-02 21:00:02', '', 0),
(39, 'Zahida Parveen', 2, '0000-00-00', '0000-00-00', 26, 37, 0, 0, '2015-09-02 21:00:29', '', 0),
(40, 'Aabia Parveen', 2, '0000-00-00', '0000-00-00', 26, 37, 0, 0, '2015-09-02 21:00:50', '', 0),
(41, 'Lubna Parveen', 2, '0000-00-00', '0000-00-00', 26, 37, 0, 0, '2015-09-02 21:01:12', '', 0),
(42, 'Younas Ansari', 1, '0000-00-00', '0000-00-00', 28, 46, 43, 0, '2015-09-02 21:18:58', '', 0),
(43, 'Hijab Fatima', 2, '0000-00-00', '0000-00-00', 26, 37, 42, 0, '2015-09-02 21:02:03', '', 0),
(44, 'Farooq Ansari', 1, '0000-00-00', '1988-05-05', 28, 46, 0, 0, '2015-09-02 21:12:48', '', 0),
(45, 'Tahira Parveen', 2, '0000-00-00', '1993-08-18', 28, 46, 7, 0, '2015-09-02 21:18:41', '', 0),
(46, 'Khursaid Bibi', 2, '0000-00-00', '0000-00-00', 0, 0, 28, 0, '2015-09-02 21:03:45', '', 0),
(47, 'Samia Fatima', 2, '0000-00-00', '0000-00-00', 28, 46, 0, 0, '2015-09-02 21:04:14', '', 0),
(48, 'Rizwana Parveen', 2, '0000-00-00', '0000-00-00', 28, 46, 7, 0, '2015-09-02 21:04:57', '', 0),
(49, 'Sardaran Bibi', 2, '0000-00-00', '0000-00-00', 23, 0, 6, 0, '2015-09-02 21:06:34', '', 0),
(50, 'Shokat Hussain', 1, '0000-00-00', '0000-00-00', 6, 49, 0, 0, '2015-09-02 21:06:59', '', 0),
(51, 'Shafqat Hussain', 1, '0000-00-00', '0000-00-00', 6, 49, 0, 0, '2015-09-02 21:07:20', '', 0),
(52, 'Nasir Hussain', 1, '0000-00-00', '0000-00-00', 6, 49, 0, 0, '2015-09-02 21:07:38', '', 0),
(53, 'Arshad Hussain', 1, '0000-00-00', '0000-00-00', 6, 49, 0, 0, '2015-09-02 21:07:57', '', 0),
(54, 'Saleem Akhtar', 2, '0000-00-00', '0000-00-00', 6, 49, 29, 0, '2015-09-02 21:08:25', '', 0),
(55, 'Kalsoom Akhtar', 2, '0000-00-00', '0000-00-00', 6, 49, 0, 0, '2015-09-02 21:08:46', '', 0),
(56, 'Shamim Akhtar', 2, '0000-00-00', '0000-00-00', 6, 49, 59, 0, '2015-09-06 18:04:35', '', 0),
(57, 'Rasheeda Parveen', 2, '0000-00-00', '0000-00-00', 6, 49, 0, 0, '2015-09-02 21:09:37', '', 0),
(58, 'Misbah Amjad', 2, '0000-00-00', '0000-00-00', 2, 3, 0, 0, '2015-09-02 21:10:56', '', 0),
(59, 'Haji Ahmad Yar', 1, '0000-00-00', '0000-00-00', 0, 0, 56, 0, '2015-09-02 21:11:22', '', 0),
(60, 'Amjad Shazad', 1, '0000-00-00', '0000-00-00', 59, 56, 58, 0, '2015-09-02 21:11:58', '', 0),
(61, 'Shabana Parveen', 2, '0000-00-00', '0000-00-00', 29, 54, 36, 0, '2015-09-02 21:17:15', '', 0),
(62, 'Tasleem Bibi', 2, '0000-00-00', '0000-00-00', 4, 5, 0, 0, '2015-09-03 20:04:20', '', 0),
(63, 'Muhammad Ramzan', 1, '0000-00-00', '0000-00-00', 0, 0, 62, 0, '2015-09-03 20:05:23', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblbanner`
--

CREATE TABLE IF NOT EXISTS `tblbanner` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_image` varchar(100) DEFAULT NULL,
  `banner_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblbanner`
--

INSERT INTO `tblbanner` (`banner_id`, `banner_image`, `banner_status`) VALUES
(1, 'g2V131111.jpg', 1),
(2, 'NEmBDILYDBookBanner.jpg', 0),
(3, 'nkMyILoveYouMaa.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE IF NOT EXISTS `tbluser` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(32) DEFAULT NULL,
  `user_login` varchar(32) DEFAULT NULL,
  `user_password` varchar(32) DEFAULT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT '1',
  `user_email` varchar(20) DEFAULT NULL,
  `user_permissions` varchar(255) DEFAULT NULL,
  `user_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1: admin, 0: client',
  `employee_id` int(11) NOT NULL DEFAULT '0',
  `sales_report_status` tinyint(1) NOT NULL DEFAULT '0',
  `sales_report_url` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`user_id`, `user_name`, `user_login`, `user_password`, `user_status`, `user_email`, `user_permissions`, `user_type`, `employee_id`, `sales_report_status`, `sales_report_url`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'jawad@gmail.com', '5,4', 1, 0, 0, ''),
(2, 'dayShift', 'employee', '1d7a44d70719af2c03b5b9f22be5ec6c', 1, 'jawad@gmail.com', '5,4', 0, 0, 0, ''),
(3, 'noonShift', 'employee', 'e81bebf6de9c695e4f7af943d4221e12', 1, 'jawad@gmail.com', '5,4', 0, 0, 0, ''),
(4, 'nightShift', 'employee', '7c897cf57d3595042a961c61ea7d48ff', 1, 'jawad@gmail.com', '5,4', 0, 0, 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
