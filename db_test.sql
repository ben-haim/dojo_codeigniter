-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2013 at 07:07 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE IF NOT EXISTS `tbl_video` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `video_name` varchar(255) NOT NULL,
  `video_content` text NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`video_id`, `video_name`, `video_content`, `create_date`, `update_date`) VALUES
(1, 'agile thailand 2013', 'Video Detail', '2013-07-13 23:12:09', '2013-07-13 23:12:09'),
(2, 'Video Thai SE', 'Content video 2', '2013-07-13 23:28:42', '2013-07-13 23:28:42');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
