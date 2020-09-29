-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 11:37 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cisunmoontechtestdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(12) NOT NULL,
  `addby` varchar(9) NOT NULL,
  `adddate` varchar(12) NOT NULL,
  `title` varchar(90) NOT NULL,
  `artist` varchar(90) NOT NULL,
  `lyrics` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `addby`, `adddate`, `title`, `artist`, `lyrics`) VALUES
(3, '12', '2020/09/29', 'My Heart Will Go On', 'Celine', 'Every night in my dreams I see you, I feel you'),
(7, '12', '2020/09/29', 'sdsd', 'sdsd', 'sdsd'),
(8, '12', '2020/09/29', 'ddfddfd', 'df', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(9) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `password`) VALUES
(2, 'luci', 'claros', 'luci', '123456'),
(3, 'aaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaa'),
(4, 'jayson', 'claros', 'claros', '123456789'),
(5, 'asas', 'asas', 'asasas', 'asasas'),
(6, 'sdsd', 'sdsdd', 'sdsdsdd', 'ssssss'),
(7, 'sddsds', 'sdsdsd', 'sd', 'ssssss'),
(8, 'sdsd', 'sdsdsd', 'ssss', 'sssss'),
(9, 'df', 'dfdf', 'df', '111'),
(10, 'sdsdsdsd', 'dsdsdsdsd', 'sdsdsd', '$2y$10$3Xczpt4NoPIPaZYNjVY1MOgNZluA/7VCGE.bJcRoz9LVHSzF80WWa'),
(11, 'sdsdsdsds', 'sdsd', 'ssss', '$2y$10$lfQGaL2B9bUjQfuTRr7jQelZbAqoJSYb/AbJhjNLkIIPkaIQt7Bk.'),
(12, 'jayson', 'claros', 'jayson', '$2y$10$daZuYTRiPgCfkAiPbH.G/OEMGwBZf5hFx2K49S/M8zWjlSVjSbW8.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
