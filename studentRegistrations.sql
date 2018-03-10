-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 07, 2018 at 07:11 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esummit18`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentRegistrations`
--

CREATE TABLE `studentRegistrations` (
  `id` int(10) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `collegeName` varchar(1000) NOT NULL,
  `contactNumber` bigint(10) NOT NULL,
  `wNumber` bigint(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `events` text NOT NULL,
  `SIPP` varchar(5) NOT NULL,
  `Txn_id` varchar(10) NOT NULL,
  `fdate` date NOT NULL,
  `ftime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentRegistrations`
--

INSERT INTO `studentRegistrations` (`id`, `fullname`, `collegeName`, `contactNumber`, `wNumber`, `email`, `profession`, `events`, `SIPP`, `Txn_id`, `fdate`, `ftime`) VALUES
(1, 'raj', 'ajd', 34, 21, 'm@m.com', 'student', 'Blockchain Basics Machine Learning and AI Drones and Mobility Jugaad', 'yes', '2018-03-06', '0000-00-00', '00:02:13'),
(2, 'raj', 'ajd', 34, 21, 'm@m.com', 'student', 'Blockchain Basics Machine Learning and AI Drones and Mobility Jugaad', 'yes', '213', '2018-03-06', '00:00:00'),
(3, 'raj', 'ajd', 34, 21, 'm@m.com', 'student', 'Blockchain Basics Machine Learning and AI Drones and Mobility Jugaad', 'yes', '213', '2018-03-06', '00:00:00'),
(4, 'hgggh', 'fhghjg', 786786, 0, 'dfgg@ghg.com', '', '   ', '', '54568', '2018-03-06', '00:00:00'),
(5, 'hgggh', 'fhghjg', 786786, 0, 'dfgg@ghg.com', '', '   ', '', '54568', '2018-03-06', '00:00:00'),
(6, 'jnjjjsdfjdf', 'sdfndjsfn', 349934893, 9304834, 'shdjh@jsjf.com', 'student', ' Business Model  Jugaad', 'yes', '3243243242', '2018-03-06', '00:00:00'),
(7, 'Shikhar Vaish', 'bvp', 2734324763, 832473289, 'shikarvaish@gmail.com', 'student', 'Blockchain Basics   ', 'yes', '3123123', '2018-03-06', '00:00:00'),
(8, 'Shikhar Vaish', 'bvp', 2734324763, 832473289, 'shikarvaish@gmail.com', 'student', 'Blockchain Basics   ', 'yes', '3123123', '2018-03-06', '00:00:00'),
(9, 'Shikhar Vaish', 'BVP', 9238827587, 3847278497, 'shikarvaish@gmail.com', 'student', 'Blockchain Basics Machine Learning and AI Drones and Mobility Jugaad', 'yes', '8271329371', '2018-03-07', '838:59:59'),
(10, 'Shikhar Vaish', 'BVP', 9238827587, 3847278497, 'shikarvaish@gmail.com', 'student', 'Blockchain Basics Machine Learning and AI Drones and Mobility Jugaad', 'yes', '8271329371', '2018-03-07', '00:00:00'),
(11, 'Shikhar Vaish', 'BVP', 9238827587, 3847278497, 'shikarvaish@gmail.com', 'student', 'Blockchain Basics Machine Learning and AI Drones and Mobility Jugaad', 'yes', '8271329371', '2018-03-07', '838:59:59'),
(12, 'Shikhar Vaish', 'BVP', 9238827587, 3847278497, 'shikarvaish@gmail.com', 'student', 'Blockchain Basics Machine Learning and AI Drones and Mobility Jugaad', 'yes', '8271329371', '2018-03-07', '838:59:59'),
(13, 'asdasd', 'yiqwuqiu', 92971, 8273789, 'e87@hdgjsd.com', 'student', 'Blockchain Basics Machine Learning and AI Drones and Mobility ', 'yes', '7182739721', '2018-03-07', '00:00:00'),
(14, 'asdasd', 'yiqwuqiu', 92971, 8273789, 'e87@hdgjsd.com', 'student', 'Blockchain Basics Machine Learning and AI Drones and Mobility ', 'yes', '7182739721', '2018-03-07', '00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentRegistrations`
--
ALTER TABLE `studentRegistrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentRegistrations`
--
ALTER TABLE `studentRegistrations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
