-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2016 at 06:24 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_network`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `poster_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(20) NOT NULL,
  `society_id` int(11) NOT NULL,
  `has_link` tinyint(1) NOT NULL,
  `link` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `societies`
--

CREATE TABLE `societies` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `societies`
--

INSERT INTO `societies` (`id`, `name`) VALUES
(1, 'CS130'),
(2, 'CS143'),
(3, 'CS188');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(11) NOT NULL,
  `topic_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_image` text NOT NULL,
  `user_year` varchar(100) NOT NULL,
  `last_login` date NOT NULL,
  `register_date` date NOT NULL,
  `status` text NOT NULL,
  `post` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_email`, `user_image`, `user_year`, `last_login`, `register_date`, `status`, `post`) VALUES
(0, 'Sepideh', '12345', 'sepideh.h91@gmail.com', '', 'freshman', '2016-10-12', '2016-10-02', 'unverified', 'no'),
(4674, 'fhjhkkjhjk', 'fhkjhkjkjlk', 'sepideh.h8@gmail.com', 'default.jpg', 'Junior', '2016-11-01', '2016-11-01', 'unverified', 'No'),
(12334, 'sdffsf', '12423424', 'sep@sep.com', 'default.jpg', 'Senior', '2016-11-01', '2016-11-01', 'unverified', 'No'),
(12345, 'sam', '12345678', 'sam@gmail.com', 'default.jpg', 'Senior', '2016-11-01', '2016-11-01', 'unverified', 'No'),
(1234567, 'sina', '123456789', 'sina@gmail.com', 'default.jpg', 'Sophomore', '2016-11-01', '2016-11-01', 'unverified', 'No'),
(1434242, 'sefdf', '13242432534', 'sepideh.h@gmail.com', 'default.jpg', 'Sophomore', '2011-01-16', '2011-01-16', 'unverified', 'No'),
(111111111, 'Andrew', 'andrew88', 'tester@gmail.com', 'default.jpg', 'Junior', '2016-11-01', '2016-11-01', 'unverified', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `societies`
--
ALTER TABLE `societies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
