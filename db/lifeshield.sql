-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2016 at 03:42 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifeshield`
--

-- --------------------------------------------------------

--
-- Table structure for table `accompanying`
--

CREATE TABLE `accompanying` (
  `accompanying_id` int(11) NOT NULL,
  `accompanying_name` varchar(32) NOT NULL,
  `accompanying_vehicle` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `depart_id` int(11) NOT NULL,
  `depart_name` varchar(50) NOT NULL,
  `depart_created` datetime NOT NULL,
  `depart_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`depart_id`, `depart_name`, `depart_created`, `depart_modified`) VALUES
(1, 'Laboratory', '2016-09-16 22:23:41', '2016-09-16 22:24:33'),
(2, 'Blow Room', '2016-09-16 22:24:44', '0000-00-00 00:00:00'),
(3, 'Carding', '2016-09-16 22:42:27', '2016-09-16 22:42:37'),
(4, 'Drawing', '2016-09-16 22:42:56', '0000-00-00 00:00:00'),
(5, 'Simplex', '2016-09-16 22:43:40', '0000-00-00 00:00:00'),
(6, 'Ring', '2016-09-16 22:43:00', '0000-00-00 00:00:00'),
(7, 'AutoCone', '2016-09-16 22:43:11', '0000-00-00 00:00:00'),
(8, 'Packing', '2016-09-16 22:43:16', '0000-00-00 00:00:00'),
(9, 'Office', '2016-09-16 23:03:29', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designation_id` int(11) NOT NULL,
  `designation_name` varchar(50) NOT NULL,
  `designation_created` datetime NOT NULL,
  `designation_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `designation_name`, `designation_created`, `designation_modified`) VALUES
(1, 'General Manager (GM)', '2016-09-16 22:32:11', '2016-09-16 22:36:43'),
(2, 'Technical manager (TM)', '0000-00-00 00:00:00', '2016-09-16 22:35:23'),
(3, 'Super Manager (SM)', '2016-09-16 22:23:41', '2016-09-16 22:36:35'),
(4, 'Assistant Super Manager (ASM)', '2016-09-16 22:24:44', '2016-09-16 22:37:21'),
(5, 'Laboratory Incharge', '2016-09-16 22:39:15', '0000-00-00 00:00:00'),
(6, 'Quality Checker', '2016-09-16 22:39:24', '0000-00-00 00:00:00'),
(7, 'Testing Clark', '2016-09-16 22:39:37', '0000-00-00 00:00:00'),
(8, 'Wrapping Boy', '2016-09-16 22:39:47', '0000-00-00 00:00:00'),
(9, 'Foreman', '2016-09-16 22:39:54', '0000-00-00 00:00:00'),
(10, 'Worker', '2016-09-16 22:40:04', '2016-09-16 22:41:58'),
(11, 'Head Jabbar', '2016-09-23 18:13:24', '0000-00-00 00:00:00'),
(12, 'Jabbar', '2016-09-23 18:13:30', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `emp_family_rec`
--

CREATE TABLE `emp_family_rec` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(32) NOT NULL,
  `member_father_name` varchar(32) DEFAULT NULL,
  `member_husband_name` varchar(32) DEFAULT NULL,
  `spouse_department` varchar(32) NOT NULL,
  `entry_time` time NOT NULL,
  `exit_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp_rec`
--

CREATE TABLE `emp_rec` (
  `emp_rec_id` int(11) NOT NULL,
  `emp_name` varchar(32) NOT NULL,
  `emp_department` varchar(32) NOT NULL,
  `emp_CNIC` int(17) NOT NULL,
  `entry_time` time NOT NULL,
  `exit_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_rec`
--

CREATE TABLE `school_rec` (
  `child_id` int(11) NOT NULL,
  `child_name` varchar(32) NOT NULL,
  `child_age` int(11) NOT NULL,
  `child_class` varchar(32) NOT NULL,
  `entry_time` time NOT NULL,
  `exit_time` time NOT NULL,
  `return_pass` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblchief`
--

CREATE TABLE `tblchief` (
  `chief_id` int(11) NOT NULL,
  `chief_name` varchar(32) NOT NULL,
  `dob` date NOT NULL,
  `NIC_no` varchar(32) NOT NULL,
  `phone_no` decimal(13,0) NOT NULL,
  `join_date` date NOT NULL,
  `last_designation` varchar(32) NOT NULL,
  `address` varchar(255) NOT NULL,
  `leave_date` date NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblchief`
--

INSERT INTO `tblchief` (`chief_id`, `chief_name`, `dob`, `NIC_no`, `phone_no`, `join_date`, `last_designation`, `address`, `leave_date`, `img_name`, `date_created`, `date_modified`) VALUES
(1, 'Fawad', '1989-08-12', '36302-0630392-5', '3056206195', '2014-01-01', 'Security Chief', 'Khuni Burj Multan', '0000-00-00', '20agHjnWTgchief.jpg', '2016-09-11 20:09:16', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployee`
--

CREATE TABLE `tblemployee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(32) NOT NULL,
  `depart_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `emp_sector` varchar(32) NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_phone` varchar(13) NOT NULL,
  `emp_address` varchar(255) NOT NULL,
  `emp_NIC` varchar(15) NOT NULL,
  `emp_Join_date` date DEFAULT NULL,
  `marital_status` varchar(32) NOT NULL,
  `children` int(11) NOT NULL,
  `emp_img_name` varchar(255) NOT NULL,
  `emp_officer` varchar(32) NOT NULL,
  `emp_created` datetime NOT NULL,
  `emp_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemployee`
--

INSERT INTO `tblemployee` (`emp_id`, `emp_name`, `depart_id`, `designation_id`, `emp_sector`, `emp_dob`, `emp_phone`, `emp_address`, `emp_NIC`, `emp_Join_date`, `marital_status`, `children`, `emp_img_name`, `emp_officer`, `emp_created`, `emp_modified`) VALUES
(1, 'Shahbaz Ali', 1, 6, '1', '1986-01-01', '03210021001', 'Qasim pur colony', '36302-312123-0', '2003-02-01', '2', 1, 'Iqiri11221465_129226290774275_4411027193913380835_n.jpg', 'dayOfficer', '2016-09-17 19:22:22', '2016-09-19 10:53:03'),
(2, 'Irfan Ahmed', 1, 7, '1', '1987-05-02', '03211231231', 'near 9 bahar nahar outside multan', '36302-0987652-1', '2011-05-12', '2', 2, '38w9ZTestingClark2.jpg', 'dayOfficer', '2016-09-20 14:30:00', '0000-00-00 00:00:00'),
(3, 'Zahid khan', 1, 7, '1', '1987-02-11', '03211238754', '11 no chungi Multan', '36302-0996532-1', '2011-08-02', '2', 1, 'GqwQDTestingClark3.jpg', 'dayOfficer', '2016-09-20 14:31:22', '0000-00-00 00:00:00'),
(4, 'Muhammad Kashif ', 1, 7, '1', '1983-02-15', '03001231231', 'Double phatak Dera ada multan', '36302-0923352-1', '2002-08-22', '2', 0, 'HZTkwTestingClark.jpg', 'dayOfficer', '2016-09-20 14:32:53', '0000-00-00 00:00:00'),
(5, 'Shair bahadur', 1, 5, '1', '1980-01-31', '03110023331', 'Double phatak Dera ada multan', '36302-0909052-1', '2001-01-02', '2', 0, 'aWWcVLabIncharge.jpg', 'dayOfficer', '2016-09-20 14:35:15', '0000-00-00 00:00:00'),
(6, 'Abdul Khaliq', 9, 1, '1', '1971-01-01', '03000000001', 'back side of Allah wasaya textile mill', '36302-9754321-1', '2007-08-01', '2', 4, 'O1ehRGM.jpg', 'dayOfficer', '2016-09-20 14:50:58', '0000-00-00 00:00:00'),
(7, 'Latef', 1, 2, '1', '1977-09-08', '03340021001', 'Kabeer wala lahore road', '32054-1294716-2', '2005-03-10', '2', 4, 'vpJ4OScreenshot_4.png', 'dayOfficer', '2016-09-20 14:52:50', '2016-09-20 15:01:40'),
(8, 'Majid', 1, 3, '1', '1981-02-05', '03347721021', 'Double phatak Dera ada multan', '36302-0765452-1', '2008-02-14', '2', 3, 'ea0zRSM.png', 'dayOfficer', '2016-09-20 14:54:38', '0000-00-00 00:00:00'),
(9, 'Muhammad Qamar ', 7, 4, '1', '1984-10-31', '03211238754', 'back side of Allah wasaya textile mill', '36302-0909052-1', '2014-05-08', '2', 4, 'BEhYYDSM1.jpg', 'dayOfficer', '2016-09-20 15:04:01', '0000-00-00 00:00:00'),
(10, 'Muhammad Iabal', 1, 8, '1', '1975-02-06', '93994859302', 'near 9 bahar nahar outside multan', '83938-9837485-4', '2001-03-01', '2', 6, '1qnAURapingBoy1.jpg', '', '2016-09-23 18:15:47', '0000-00-00 00:00:00'),
(11, 'Muhammad asif', 1, 8, '1', '1974-05-31', '93893829382', 'near BC.G chock vehari road multan', '83958-3948576-3', '2008-11-25', '1', 0, '2zWFXRapingBoy2.jpg', '', '2016-09-23 18:17:12', '0000-00-00 00:00:00'),
(12, 'naveed razzaq', 1, 8, '1', '1985-02-01', '93849583982', 'qasim pur kalony multan', '29384-0293847-5', '2010-10-01', '2', 1, 'BUCEzRapingBoy3.jpg', '', '2016-09-23 18:18:43', '0000-00-00 00:00:00'),
(13, 'kashif rasheed', 1, 8, '1', '1974-01-08', '83948598432', 'near ansari chock multan', '29384-9485768-4', '2005-10-01', '1', 0, 'ID653RapingBoy4.jpg', '', '2016-09-23 18:20:06', '0000-00-00 00:00:00'),
(14, 'Arslan aslam', 1, 8, '1', '1974-01-08', '93948576940', 'qasim pur kalony multan', '83948-4095768-4', '2009-04-21', '1', 0, 'zMYqjRapingBoy5.jpg', '', '2016-09-23 18:20:57', '0000-00-00 00:00:00'),
(15, 'muhammad najeeb', 2, 9, '2', '1968-02-01', '93847583985', 'near 14 no chungi multan', '39485-9384758-4', '1998-02-12', '2', 4, 'fAOnpBlowRoom.jpg', '', '2016-09-23 18:23:32', '0000-00-00 00:00:00'),
(16, 'rasheed hussain', 3, 9, '2', '1961-08-19', '938394865903', 'qasim pur kalony multan', '83949-5039485-4', '1990-04-10', '2', 4, 'COmZrCarding1.jpg', '', '2016-09-23 18:24:45', '0000-00-00 00:00:00'),
(17, 'shreef bhatti', 5, 9, '2', '1963-02-01', '93849586970', 'chock shahbaz near double phatak multan', '84938-0394857-3', '2004-01-01', '2', 7, 'UkdR4Simplex.jpg', '', '2016-09-23 18:26:41', '0000-00-00 00:00:00'),
(18, 'faqeer muhammad', 6, 9, '2', '1961-05-26', '93849586943', 'chock shahbaz near double phatak multan', '94039-8945039-5', '1999-05-20', '2', 3, 'UNfKbRing1.jpg', '', '2016-09-23 18:30:58', '0000-00-00 00:00:00'),
(19, 'nazish hussain', 7, 9, '2', '1973-03-01', '930349568503', 'near chock bahar ralway road multan', '39404-3049839-3', '2002-08-02', '2', 2, 'XqVKpautocone.png', '', '2016-09-23 18:32:18', '0000-00-00 00:00:00'),
(20, 'tanveer iqbal', 8, 9, '2', '1973-05-24', '83948832948', 'khad factory lahore road multan', '83948-9485039-4', '2000-08-29', '2', 3, '3LeaHPacking.jpg', '', '2016-09-23 18:33:40', '0000-00-00 00:00:00'),
(21, 'tayyeb ahmed', 2, 10, '2', '1986-05-29', '93039486905', 'near fish bazar eid ghah road multan', '84930-2988938-4', '2010-01-20', '1', 0, 'L5Gn5Carding 2.jpg', '', '2016-09-23 18:40:22', '0000-00-00 00:00:00'),
(22, 'naveed akhtar', 3, 10, '2', '1986-03-08', '839302938502', 'near 9 bahar nahar outside multan', '83948-2039857-4', '2009-03-13', '1', 0, 'CBKW8Ring2.jpg', '', '2016-09-23 18:41:39', '2016-09-23 19:15:35'),
(23, 'ahsan kareem', 4, 10, '2', '1974-05-25', '930394809695', 'shah shams road multan', '92839-9485039-4', '2010-05-19', '1', 0, 'i2BgT058.jpg', '', '2016-09-23 18:43:36', '2016-09-23 19:16:07'),
(24, 'muhavar hussain', 6, 10, '2', '1986-05-29', '03039485768', 'muhalla nazir abad vihari road multan', '83948-0942938-4', '2013-10-01', '1', 0, 'K2tv6tumblr_inline_mwit8aKQ6z1s23oe9.jpg', '', '2016-09-23 19:21:39', '0000-00-00 00:00:00'),
(25, 'bashir ahmad', 7, 10, '2', '1981-11-01', '93049289384', 'khumaran road nazeer abad multan', '38290-0238492-4', '2010-05-01', '1', 0, 'Rcbxkimages (1).jpg', '', '2016-09-23 19:23:00', '0000-00-00 00:00:00'),
(26, 'samar abbas', 5, 10, '2', '1974-03-01', '39384938273', 'nazeed abad muhala gardezi multan', '28938-0948728-2', '2009-07-01', '2', 3, 'aWxTRimages (3).jpg', '', '2016-09-23 19:25:09', '0000-00-00 00:00:00'),
(27, 'shabir ahmed', 8, 10, '2', '1973-02-15', '93920394829', 'khumaran road nazeer abad multan', '39029-0394837-5', '1998-11-01', '2', 3, 'vp214Jabran-Shahid-1.jpg', '', '2016-09-23 19:26:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblstafemp`
--

CREATE TABLE `tblstafemp` (
  `staf_id` int(11) NOT NULL,
  `staf_name` varchar(32) NOT NULL,
  `staf_dob` date NOT NULL,
  `staf_phone` varchar(13) NOT NULL,
  `staf_address` varchar(255) NOT NULL,
  `staf_NIC` varchar(15) NOT NULL,
  `staf_Join_date` date DEFAULT NULL,
  `staf_designation` varchar(255) NOT NULL,
  `staf_img_name` varchar(255) NOT NULL,
  `emp_officer` varchar(32) NOT NULL,
  `staf_created` datetime NOT NULL,
  `staf_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstafemp`
--

INSERT INTO `tblstafemp` (`staf_id`, `staf_name`, `staf_dob`, `staf_phone`, `staf_address`, `staf_NIC`, `staf_Join_date`, `staf_designation`, `staf_img_name`, `emp_officer`, `staf_created`, `staf_modified`) VALUES
(1, 'Omer Ali', '1990-01-03', '01231231231', 'Kupri patoliyan near pak gate multan', '12301-2313513-2', '2016-09-01', '1', 'VADuh578ecccd84e38.image.jpg', 'dayOfficer', '2016-09-20 15:44:31', '2016-09-20 15:48:08'),
(2, 'Farukh Ali', '1990-05-26', '09879876123', 'khuni burj multan', '12345-9876512-3', '2014-02-08', '2', '8VmjT5928c48212b12777c6b3b479be793256.jpg', 'dayOfficer', '2016-09-20 15:50:04', '0000-00-00 00:00:00'),
(3, 'Nabeel', '1991-01-01', '09879876123', 'khuni burj multan', '12301-2313513-2', '2014-02-14', '2', '7sDn110817894_816548688412459_428862711_a.jpg', 'dayOfficer', '2016-09-20 15:51:32', '0000-00-00 00:00:00'),
(4, 'Qasim', '1978-05-25', '0987123422', 'khuni burj multan', '09876-1234567-0', '2009-11-01', '2', 'IUqz411189627_847485891990712_1593159531_n.jpg', 'dayOfficer', '2016-09-20 15:52:26', '0000-00-00 00:00:00'),
(5, 'Atif', '1983-02-01', '0123123421', 'Kupri patoliyan near pak gate multan', '78906-8765432-9', '2009-10-01', '2', 'ZHfpw85068537.jpg', 'dayOfficer', '2016-09-20 15:53:31', '0000-00-00 00:00:00'),
(6, 'Hubab', '1987-01-23', '08665547798', 'farooq ganj khuni burj multan', '09875-9467985-3', '2010-08-01', '2', '3C9VEApartment-Security-Guard.jpg', 'dayOfficer', '2016-09-20 15:54:41', '0000-00-00 00:00:00'),
(7, 'Anvish', '1986-05-22', '09877297563', 'shah khurram near khuni burj multan', '98654-8765876-2', '2009-02-19', '2', '9cFAj85068537.jpg', 'dayOfficer', '2016-09-20 15:55:54', '0000-00-00 00:00:00'),
(8, 'kashif', '1985-05-30', '09886789542', 'khuni burj multan', '98653-0543875-4', '2002-09-28', '2', '7oi3Narrest_photo-Amit_Singh_jpg_300x300_q85.jpg', 'dayOfficer', '2016-09-20 15:58:12', '0000-00-00 00:00:00'),
(9, 'khurram', '1983-12-02', '07665555771', 'khuni burj multan', '98765-0543217-7', '2015-06-17', '2', 'gNHbnarticle-0-14BE0A7C000005DC-274_306x423.jpg', 'dayOfficer', '2016-09-20 15:59:17', '2016-09-20 15:59:50'),
(10, 'Hamza', '1986-05-28', '08776675533', 'ganta ghar near kachari road multan', '90876-8765433-2', '2014-05-14', '2', '9cnelBrining-640x480.jpg', 'dayOfficer', '2016-09-20 16:01:14', '0000-00-00 00:00:00'),
(11, 'Muhammad sajid', '1989-01-07', '09887727164', 'toyota pump lahore road ', '87309-9375987-5', '2015-02-05', '1', 'oVRztk19804857.jpg', 'nightOfficer', '2016-09-21 22:56:49', '0000-00-00 00:00:00'),
(12, 'Shahzad ahmad', '1980-09-25', '09338765498', 'muhallah qadeer abad lakar mandi multan', '87654-8764328-7', '2014-02-13', '2', 'r0nRmsecurity-guard-uniform-250x250.jpg', 'nightOfficer', '2016-09-21 23:11:22', '0000-00-00 00:00:00'),
(13, 'Ahmad bilal', '1975-05-23', '09867876542', 'muhallah jik pak gate multan', '87659-86543215-', '2008-11-26', '2', 'oka2Tsecurity_guard.jpg', 'nightOfficer', '2016-09-21 23:12:51', '0000-00-00 00:00:00'),
(14, 'usman iftekhar', '1984-05-24', '876599932124', 'near chock khumahran multan', '87983-9846726-4', '2011-03-04', '2', 'PathanGuard.JPG', 'nightOfficer', '2016-09-21 23:14:00', '2016-09-21 23:14:30'),
(15, 'khurram iftikhar', '1987-02-03', '09382243928', 'ameer abad near 7 no chungi multan', '98395-0349856-3', '2010-05-06', '2', '7gk4oPakistani man Saifdeen.jpg', 'nightOfficer', '2016-09-21 23:17:17', '0000-00-00 00:00:00'),
(16, 'ismaeel yousaf', '1986-05-22', '03423355395', 'near BZU multan', '83945-2396935-3', '2014-01-01', '2', 'XO7Ybe5021aae818b8b55f2a89b6265ebafb0.jpg', 'nightOfficer', '2016-09-21 23:18:46', '0000-00-00 00:00:00'),
(17, 'irfan khan', '1996-02-07', '03459285295', 'near BZU multan', '83945-0395868-4', '2012-02-16', '2', 'HH9FCguard1-225x300.png', 'nightOfficer', '2016-09-21 23:21:11', '0000-00-00 00:00:00'),
(18, 'Talat husain', '1975-05-14', '93494481232', 'near BZU multan', '83945-4875835-5', '2005-11-30', '2', 'Jnm6nfeature_1250.jpg', 'nightOfficer', '2016-09-21 23:22:13', '0000-00-00 00:00:00'),
(19, 'malik zubair', '1980-08-01', '93405829934', 'muhallah jik pak gate multan', '829340-2395934-', '2001-10-01', '2', '2iUVCimages (2).jpg', 'nightOfficer', '2016-09-21 23:23:18', '0000-00-00 00:00:00'),
(20, 'waqas nazir', '1973-03-09', '93432238843', 'muhallah qadeer abad lakar mandi multan', '83948-9345953-3', '2013-02-21', '2', 'OkYy4images (2).jpg', 'nightOfficer', '2016-09-21 23:24:13', '0000-00-00 00:00:00'),
(21, 'ali raza', '1986-05-22', '02132387232', 'muhallah jik andron pak gate multan', '83792-0394823-4', '2009-01-01', '1', 'pSx84jon-kortajarena_1-662x448.jpg', 'noonOfficer', '2016-09-22 09:41:28', '0000-00-00 00:00:00'),
(22, 'shahid hussain', '1987-05-14', '03432233994', 'near khuni burj multan', '38945-0239423-2', '2010-02-05', '2', 'elc2zimages (6).jpg', 'noonOfficer', '2016-09-22 09:42:32', '0000-00-00 00:00:00'),
(23, 'adil ali', '1986-05-29', '83939932012', 'andron pak gate multan', '38934-3853234-4', '2011-05-17', '2', 'W3Enpimages.jpg', 'noonOfficer', '2016-09-22 09:43:48', '0000-00-00 00:00:00'),
(24, 'umer zahid', '1986-05-22', '93443231129', 'near mumtazabad market multan', '93839-20395839-', '2015-09-18', '2', 'KKl8pimages (2).jpg', 'noonOfficer', '2016-09-22 10:14:05', '2016-09-22 10:15:41'),
(25, 'usman shahid', '1990-02-15', '93848923429', 'near mumtazabad market multan', '83748-2938475-4', '2016-02-02', '2', 'v3X2Vimages (1).jpg', 'noonOfficer', '2016-09-22 10:16:59', '0000-00-00 00:00:00'),
(26, 'shaban ahmed', '1980-08-28', '02339823458', 'alang near dolat gate multan', '93894-0394856-4', '2002-03-28', '2', 'DWjnyimages (4).jpg', 'noonOfficer', '2016-09-22 10:23:04', '0000-00-00 00:00:00'),
(27, 'hassan siyal', '1985-04-30', '93043493211', 'house no 32 bahar choke multan', '23932-2304958-6', '2010-08-19', '2', '3PXApBrining-640x480.jpg', 'noonOfficer', '2016-09-22 10:25:21', '0000-00-00 00:00:00'),
(28, 'hassan siyal', '1985-04-30', '93043493211', 'house no 32 bahar choke multan', '23932-2304958-6', '2010-08-19', '2', 'cuHMiBrining-640x480.jpg', 'noonOfficer', '2016-09-22 10:25:22', '0000-00-00 00:00:00'),
(29, 'hashir ali', '1974-05-16', '03229323322', 'near khuni burj multan', '39430-3239423-4', '2010-10-07', '2', 'hdNkTsecurity_guard.jpg', 'noonOfficer', '2016-09-22 10:26:43', '0000-00-00 00:00:00'),
(30, 'naeem ahmed', '1986-05-22', '33032948399', 'near bahar choke silver karkhana multan', '39239-3982323-3', '2009-07-21', '2', '4Wce3578ecccd84e38.image.jpg', 'noonOfficer', '2016-09-22 10:28:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(32) DEFAULT NULL,
  `user_password` varchar(32) DEFAULT NULL,
  `user_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1: officers, 3: admin, 2: client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`user_id`, `user_name`, `user_password`, `user_type`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 3),
(2, 'dayShift', '1d7a44d70719af2c03b5b9f22be5ec6c', 2),
(3, 'noonShift', 'e81bebf6de9c695e4f7af943d4221e12', 2),
(4, 'nightShift', '7c897cf57d3595042a961c61ea7d48ff', 2),
(5, 'dayOfficer', '46c07aa0f6a06d77db8e1cf66a315a8b', 1),
(6, 'noonOfficer', '9e692493a9c35d1c3db2bec472c7e24d', 1),
(7, 'nightOfficer', '0d33a32bd2358c9235b8bbb084602717', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sec_off`
--

CREATE TABLE `tbl_sec_off` (
  `off_id` int(11) NOT NULL,
  `off_name` varchar(32) NOT NULL,
  `off_dob` date NOT NULL,
  `off_phone` varchar(13) NOT NULL,
  `off_address` varchar(255) NOT NULL,
  `off_NIC` varchar(15) NOT NULL,
  `off_Join_date` date DEFAULT NULL,
  `off_designation` varchar(255) NOT NULL,
  `off_img_name` varchar(255) NOT NULL,
  `off_shift` varchar(32) NOT NULL,
  `off_created` datetime NOT NULL,
  `off_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sec_off`
--

INSERT INTO `tbl_sec_off` (`off_id`, `off_name`, `off_dob`, `off_phone`, `off_address`, `off_NIC`, `off_Join_date`, `off_designation`, `off_img_name`, `off_shift`, `off_created`, `off_modified`) VALUES
(1, 'Gulzar Ahmad', '1988-01-01', '03111212121', 'Mumtazabad Multan', '36302-1234567-5', '2013-02-01', '1', 'GY0TVarab_man.jpg', 'dayOfficer', '2016-09-10 10:57:25', '2016-09-20 15:17:14'),
(2, 'Shoaib Ahmed', '1985-02-07', '03027979717', 'Hassan abad gate no 2 near khad factory ', '22112-9875214-2', '2013-02-15', '2', 'lTHBNimages.jpg', 'noonOfficer', '2016-09-20 15:25:18', '0000-00-00 00:00:00'),
(3, 'Usman Danish', '1992-05-14', '03131212121', 'fazi road lakar mandi multan', '12123-1212231-4', '2016-09-02', '3', 'BjV70Pakistan-acquits-4-of-helping-NYC-bomber-0P1JIMFG-x-large.jpg', 'nightOfficer', '2016-09-20 15:27:33', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `visitor_id` int(11) NOT NULL,
  `visitor_name` varchar(32) NOT NULL,
  `visitor_NICN` int(17) NOT NULL,
  `visitor_vehicle` varchar(15) DEFAULT NULL,
  `whome_to_meet` varchar(32) NOT NULL,
  `entry_time` time NOT NULL,
  `accompanying_id,` int(11) DEFAULT NULL,
  `exit_time` time NOT NULL,
  `return_pass` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accompanying`
--
ALTER TABLE `accompanying`
  ADD PRIMARY KEY (`accompanying_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`depart_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `emp_family_rec`
--
ALTER TABLE `emp_family_rec`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `emp_rec`
--
ALTER TABLE `emp_rec`
  ADD PRIMARY KEY (`emp_rec_id`);

--
-- Indexes for table `school_rec`
--
ALTER TABLE `school_rec`
  ADD PRIMARY KEY (`child_id`);

--
-- Indexes for table `tblchief`
--
ALTER TABLE `tblchief`
  ADD PRIMARY KEY (`chief_id`);

--
-- Indexes for table `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `tblstafemp`
--
ALTER TABLE `tblstafemp`
  ADD PRIMARY KEY (`staf_id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_sec_off`
--
ALTER TABLE `tbl_sec_off`
  ADD PRIMARY KEY (`off_id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`visitor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accompanying`
--
ALTER TABLE `accompanying`
  MODIFY `accompanying_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `depart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `emp_family_rec`
--
ALTER TABLE `emp_family_rec`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emp_rec`
--
ALTER TABLE `emp_rec`
  MODIFY `emp_rec_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `school_rec`
--
ALTER TABLE `school_rec`
  MODIFY `child_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblchief`
--
ALTER TABLE `tblchief`
  MODIFY `chief_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblemployee`
--
ALTER TABLE `tblemployee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tblstafemp`
--
ALTER TABLE `tblstafemp`
  MODIFY `staf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_sec_off`
--
ALTER TABLE `tbl_sec_off`
  MODIFY `off_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
