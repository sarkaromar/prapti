-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Aug 06, 2017 at 06:39 PM
-- Server version: 5.5.54-38.7-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `praptitr_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `back_users`
--

CREATE TABLE IF NOT EXISTS `back_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `password` varchar(70) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `token` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `level` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `first_name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `phn` varchar(30) CHARACTER SET utf8 NOT NULL,
  `address` text CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'default.png',
  `joined_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `online_timestamp` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `back_users`
--

INSERT INTO `back_users` (`id`, `email`, `password`, `token`, `level`, `status`, `first_name`, `last_name`, `phn`, `address`, `image`, `joined_date`, `online_timestamp`) VALUES
(1, 'admin@test.com', '$2a$12$194Ikhvx5AZ9.HijXdjutu2DtnItiLCeo9X8jeEkn.uTh6VHN6j.S', '87e6ae3777174a1d6ac6ca7b8e7f77d6', 2, 1, 'Admin', 'test', '01914088503', 'Mirpur-1, Dhaka-1216', 'default.png', '2016-09-27 05:30:48', '1497779661'),
(4, 'monir@gmail.com', '$2a$12$194Ikhvx5AZ9.HijXdjutu2DtnItiLCeo9X8jeEkn.uTh6VHN6j.S', 'c5ba1e8fe6663c68a526796068d2ce1e', 1, 0, 'Monir', 'Hossain', '0123456789', 'Mirpur-1, Dhaka-1216', '8951174cd5ca25ef5532236604a0ebd4.jpg', '2017-06-18 07:58:33', '1497777351');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(512) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(1) NOT NULL COMMENT '1 = complete, 0 = on going',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `name`, `image`, `status`) VALUES
(3, 'test 2', 'bdaec20190c4d9d5f794bd8878e6c000.jpg', 0),
(4, 'test', '2e0161e81dbb2702dc36797b9c134225.jpg', 1),
(6, 'asdfasdf', '54cbcd7b7aa03bd33997e7103526b409.jpg', 1),
(7, 'asdfasdf', '073f87aa7b42eb22a41d36fd5d88b6ff.jpg', 1),
(8, 'aaaaaaaaaaaaaaa', 'e80d824cc009497128096ebf19ecbd8a.jpg', 1),
(9, 'Sdfsdf', '7fc98c4da46849c4a6868beb8efb549b.jpg', 0),
(10, 'ddddddddddddddd', 'edb17026830d925671be461a21e65cbf.jpg', 1),
(11, 'dddddddd', '46ee41c2763d615e8b5ddf57fc5f567d.jpg', 1),
(12, 'test 5', 'da376461b17111c05b4f09469d5697f8.jpg', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
