-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2018 at 11:28 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esummit`
--

-- --------------------------------------------------------

--
-- Table structure for table `esummit18studentregistration`
--

CREATE TABLE `esummit18studentregistration` (
  `id` int(10) NOT NULL,
  `fullname` varchar(300) NOT NULL,
  `collegeName` varchar(500) NOT NULL,
  `contactNumber` bigint(10) NOT NULL,
  `wNumber` bigint(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `profession` varchar(1000) NOT NULL,
  `events` varchar(2000) NOT NULL,
  `SIPP` varchar(5) NOT NULL,
  `fdate` date NOT NULL,
  `ftime` time NOT NULL,
  `Txn_id` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `esummit18studentregistration`
--
ALTER TABLE `esummit18studentregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `esummit18studentregistration`
--
ALTER TABLE `esummit18studentregistration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
