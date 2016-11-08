-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2016 at 01:05 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `score_game`
--

CREATE TABLE `score_game` (
  `Serial` int(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Score` int(50) DEFAULT NULL,
  `Feedback` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score_game`
--

INSERT INTO `score_game` (`Serial`, `Name`, `Score`, `Feedback`) VALUES
(28, 'shivani', 240, '?'),
(30, 'sushma', 210, '?'),
(35, 'swetha', 370, '?'),
(36, 'swetha', 50, 'excellent'),
(41, 'swetha', 160, ''),
(48, 'swetha', 260, 'good'),
(49, 'swetha', 0, 'excellent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `score_game`
--
ALTER TABLE `score_game`
  ADD PRIMARY KEY (`Serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `score_game`
--
ALTER TABLE `score_game`
  MODIFY `Serial` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
