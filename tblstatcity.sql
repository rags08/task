-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2022 at 02:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblstatcity`
--

CREATE TABLE `tblstatcity` (
  `userid` int(60) NOT NULL,
  `states` varchar(60) NOT NULL,
  `districts` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstatcity`
--

INSERT INTO `tblstatcity` (`userid`, `states`, `districts`) VALUES
(1, 'tamilnadu', 'chennai'),
(2, 'tamilnadu', 'Dindigul'),
(3, '	LONDON', '	HOUNSLOW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblstatcity`
--
ALTER TABLE `tblstatcity`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblstatcity`
--
ALTER TABLE `tblstatcity`
  MODIFY `userid` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
