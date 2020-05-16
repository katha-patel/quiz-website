-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 12:06 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(10) NOT NULL,
  `quizid1` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `timein` time NOT NULL,
  `timeout` time NOT NULL,
  `discription` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `quizid1`, `title`, `name`, `timein`, `timeout`, `discription`) VALUES
(1, 0, 'jhcsgsja', 'katha', '11:58:00', '14:22:00', 'kjxh.sdkajhc.sajhc'),
(2, 1589536195, 'jhcsgsja', 'katha', '11:58:00', '14:22:00', 'kjxh.sdkajhc.sajhc'),
(3, 1589536364, 'q', 'a', '15:30:00', '15:35:00', 'qwqe');

-- --------------------------------------------------------

--
-- Table structure for table `quizoid`
--

CREATE TABLE `quizoid` (
  `id` int(10) NOT NULL,
  `quizid` int(6) NOT NULL,
  `question` varchar(30) NOT NULL,
  `option1` varchar(20) NOT NULL,
  `option2` varchar(20) NOT NULL,
  `option3` varchar(20) NOT NULL,
  `option4` varchar(20) NOT NULL,
  `answer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quizoid`
--

INSERT INTO `quizoid` (`id`, `quizid`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 0, 'how you doing?', '1', '2', '3', '4', '2'),
(2, 0, 'qwerr', '23', '34', '45', '67', '23'),
(3, 0, 'rtyui', '1', '9', '8', '7', '7'),
(4, 1589536195, 'how you doing?', '1', '2', '3', '4', '2'),
(5, 1589536195, 'qwerr', '23', '34', '45', '67', '23'),
(6, 1589536195, 'rtyui', '1', '9', '8', '7', '7'),
(7, 1589536364, '12', '1', '2', '3', '4', '3'),
(8, 1589536364, '45', '3', '6', '7', '8', '6'),
(9, 1589536364, '78', '5', '4', '8', '3', '4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `role`, `password`) VALUES
(1, 'katha@hotmail.com', 'admin', '12345'),
(3, 'jk@bts.com', 'user', 'mytime');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizoid`
--
ALTER TABLE `quizoid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quizoid`
--
ALTER TABLE `quizoid`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
