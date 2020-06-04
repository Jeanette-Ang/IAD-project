-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 04:33 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcourses`
--
CREATE DATABASE IF NOT EXISTS `dbcourses` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbcourses`;

-- --------------------------------------------------------

--
-- Table structure for table `tblcourses`
--

CREATE TABLE `tblcourses` (
  `courseNo` int(11) NOT NULL,
  `courseName` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `availSeats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcourses`
--

INSERT INTO `tblcourses` (`courseNo`, `courseName`, `price`, `description`, `duration`, `availSeats`) VALUES
(2, 'Adobe Photoshop', 500, 'Photoshop is an extremely powerful application that\'s used by professional photographs and designers.', 3, 10),
(3, 'HTML5', 400, 'HTML5 is a markup used for structuring and presenting content on the World Wide Web.', 2, 2),
(4, 'Adobe InDesign', 300, 'Adobe InDesign is a desktop publishing software application. It can be used to create works such as flyers, posters, brochures and presentations.', 3, 3),
(5, 'Swift programming', 700, 'Swift is a powerful and intuitive programming language for macOs and iOS.', 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tblregistrants`
--

CREATE TABLE `tblregistrants` (
  `regid` int(11) NOT NULL,
  `regname` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblregistrants`
--

INSERT INTO `tblregistrants` (`regid`, `regname`, `course`, `email`, `phone`, `date`) VALUES
(3, 'Luigi', 'Adobe', 'no@yahoo.com', 131313, 'SSA'),
(4, 'ssss', 'Adobe', 'no@yahoo.com', 4201337, 'SSA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcourses`
--
ALTER TABLE `tblcourses`
  ADD PRIMARY KEY (`courseNo`);

--
-- Indexes for table `tblregistrants`
--
ALTER TABLE `tblregistrants`
  ADD PRIMARY KEY (`regid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcourses`
--
ALTER TABLE `tblcourses`
  MODIFY `courseNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblregistrants`
--
ALTER TABLE `tblregistrants`
  MODIFY `regid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
