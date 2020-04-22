-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 05:01 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `crudtable`
--

CREATE TABLE `crudtable` (
  `id` int(255) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` varchar(12) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crudtable`
--

INSERT INTO `crudtable` (`id`, `firstname`, `lastname`, `email`, `number`, `date`) VALUES
(1, 'shivam ', 'agrahari', 'shivam@gmail.com', '123456789', '2020-04-14 14:36:51'),
(3, 'Prabhst', 'ege', 'wege', '23456789', '2020-04-14 14:36:51'),
(5, 'Shivam', 'Agrahari', 'aaaa@gmail.com', '8765838539', '2020-04-17 10:57:47'),
(11, 'Agrahari', 'Sandeep', 'san@gmail.com', '54546757', '2020-04-14 14:36:51'),
(12, 'deepak', 'dubey', 'deepak@gmail.com', '12345', '2020-04-14 14:36:51'),
(13, '', '', '', '', '2020-04-21 15:18:53'),
(14, '', '', '', '', '2020-04-21 15:18:58'),
(15, '', '', '', '', '2020-04-21 15:22:17'),
(16, '', '', '', '', '2020-04-21 15:22:35'),
(17, '', '', '', '', '2020-04-21 15:23:22'),
(18, '', '', '', '', '2020-04-21 15:23:39'),
(19, '', '', '', '', '2020-04-21 15:23:52'),
(20, '', '', '', '', '2020-04-21 15:24:15'),
(21, '', '', '', '', '2020-04-21 15:24:45'),
(22, '', '', '', '', '2020-04-21 15:25:36'),
(23, '', '', '', '', '2020-04-21 15:26:18'),
(24, '', '', '', '', '2020-04-21 15:29:10'),
(25, 'gaew', '', '', '', '2020-04-21 15:30:17'),
(26, 'j', '', '', '', '2020-04-21 15:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `firstname` varchar(56) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `email` varchar(76) NOT NULL,
  `image` text NOT NULL,
  `password` varchar(88) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crudtable`
--
ALTER TABLE `crudtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crudtable`
--
ALTER TABLE `crudtable`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
