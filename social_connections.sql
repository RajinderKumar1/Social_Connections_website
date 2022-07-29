-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 29, 2022 at 11:53 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_connections`
--

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `thread_id` int(12) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `sub_des` text NOT NULL,
  `user_id` int(12) NOT NULL,
  `cat_id` varchar(12) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`thread_id`, `subject`, `sub_des`, `user_id`, `cat_id`, `time`) VALUES
(1, 'Unable to install mongoose db in python', 'I want to install mongo database for use in python but facing errors please any one tell me how i install it.', 1, '1', '2022-07-28 17:39:18'),
(2, 'How to download python', 'Anyone please help me to download python in my windows10', 2, '1', '2022-07-28 17:56:20'),
(3, 'Please anyone suggest me any best javascript tutorial', 'I want to learn javascript so please suggest me best js tutorial', 3, '2', '2022-07-28 18:10:16'),
(4, 'How to download javasecript', 'I want to download js please tell me process', 4, '2', '2022-07-28 18:12:35'),
(5, 'anyone suggest me best python tutorial', 'I want to download python please tell me process', 5, '1', '2022-07-28 18:13:38'),
(6, 'Is javascript case sensitive or not', 'I am currently work with js and i want to ask u to all that please tell me that javascript is case sensitve or not', 1, '2', '2022-07-29 14:29:26'),
(7, 'How to use flask module', 'I want to lern flask', 1, '1', '2022-07-29 15:45:56'),
(10, 'How to download Javascript in linux', 'Hi i want to learn js but i have linux os so please help me to download js in my linux os ', 1, '2', '2022-07-29 16:37:42'),
(11, 'I want to become an amazone member', 'I have a shop i want start my bussiness please help me ', 1, '3', '2022-07-29 16:40:00'),
(12, 'Help me to get my shop on amzone', 'I have a shop i want to upload my shop on amzone please help me ', 1, '3', '2022-07-29 16:43:24');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `sr_no` int(12) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(700) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`sr_no`, `heading`, `description`, `time`, `img`) VALUES
(1, 'Python programming', 'Python is a highlevel programming language . it provide us various modules and functions python is esy to learn as comapare it with other programming languages it comes with many built in functions which are help us to work done in few steps so the conclusion is that the python programming is a great language', '2022-07-27 15:25:50', 'img/py.jpg'),
(2, 'Javascript', 'Javascript is a scripting language used for frontend also for backend scripting', '2022-07-27 15:26:54', 'img/javascript.webp'),
(3, 'Amazone ', 'I think amazone is a great platform for shopping also it give us many offers', '2022-07-27 15:42:47', 'img/bs.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`thread_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `thread_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `sr_no` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
