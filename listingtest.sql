-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 04:28 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `listingtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`id`, `name`, `role`, `password`) VALUES
(1, 'Anjali', 'Manager', 'Anji'),
(2, 'Urvi', 'Employee', 'Urvi');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Content` varchar(5000) NOT NULL,
  `authName` varchar(50) NOT NULL,
  `publishDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `ID` int(11) NOT NULL,
  `listing_name` varchar(20) NOT NULL,
  `listing_category` varchar(20) NOT NULL,
  `listing_city` varchar(20) NOT NULL,
  `listing_contact` varchar(50) DEFAULT NULL,
  `listing_email` varchar(50) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `listing_featured` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`ID`, `listing_name`, `listing_category`, `listing_city`, `listing_contact`, `listing_email`, `published`, `listing_featured`) VALUES
(1, 'honest', 'restaurant', 'brampton', '9724330544', 'div@gmail.com', 0, 0),
(2, 'Rajdhani', 'restaurant', 'Etobicoke', '99982224312', 'ji@th.com', 0, 0),
(3, 'Kismat', 'restaurant', 'Toronto', '9998761232', 'kis@ks.com', 0, 0),
(4, 'Madras Hut', 'restaurant', 'Toronto', 'xxxxxxxx', 'madras@gmail.com', 0, 0),
(5, '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `comment` text NOT NULL,
  `post_time` varchar(30) NOT NULL,
  `listingid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `post_time`, `listingid`) VALUES
(1, 'great', '22', '2019-04-10 10:46:21', 1),
(5, 'acw', 'acw', '2019-04-10 12:41:14', 0),
(6, 'daw', 'vas', '2019-04-10 12:42:01', 5),
(21, 'gwe', 'wrw', '2019-04-10 18:35:52', 0),
(23, 'jikk', 'tyh', '2019-04-10 18:46:14', 0),
(24, 'ascvfawga', 'awfaw', '2019-04-10 18:58:31', 0),
(25, 'rd', 'wsgsr', '2019-04-10 18:59:58', 0),
(26, 'wq', 'ce', '2019-04-10 19:07:55', 0),
(27, 'divy', 'awdfaw', '2019-04-11 09:04:24', 0),
(28, 'efw', 'asdf', '2019-04-11 09:07:33', 0),
(29, 'vds', 'awcw', '2019-04-11 09:11:13', 2),
(30, 'dwad', 'cedc', '2019-04-11 09:12:01', 3),
(31, 'new', 'list3', '2019-04-11 10:17:12', 3);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `category`, `image`) VALUES
(1, 'nie', 'event', '388204.jpg'),
(3, 'Toronto', 'Restaurant', '545313.jpg'),
(6, 'test', 'Restaurant', '285157.jpg'),
(7, 'dive', 'place', '120897.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `listing_feedback`
--

CREATE TABLE `listing_feedback` (
  `feeback_id` int(11) NOT NULL,
  `feedback_email` varchar(50) NOT NULL,
  `feedback_msg` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing_feedback`
--

INSERT INTO `listing_feedback` (`feeback_id`, `feedback_email`, `feedback_msg`) VALUES
(1, 'd@tr.com', 'test'),
(2, 'new@divya.com', 'hettt there');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'divy123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_feedback`
--
ALTER TABLE `listing_feedback`
  ADD PRIMARY KEY (`feeback_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `listing_feedback`
--
ALTER TABLE `listing_feedback`
  MODIFY `feeback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
