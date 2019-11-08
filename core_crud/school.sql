-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2019 at 04:57 AM
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
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `email`, `pass`, `image`) VALUES
(39, 'mukesh', 'kumar@gmail.com', 'mukesh12', '918306090174-1433364280.jpg'),
(40, 'mukesh', 'kumar@gmail.com', 'mukesh12', '918306090174-1433364280.jpg'),
(41, 'vivek', 'limbanivivek@gmail.com', 'vivek123', 'Disha 20160103_183333.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `address` varchar(60) NOT NULL,
  `image` varchar(255) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `mobile_no` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstname`, `lastname`, `email`, `pass`, `address`, `image`, `state`, `city`, `mobile_no`) VALUES
(3, 'harsiddhi', 'thakkar', 'harthakkar@gmail.com', '1234', 'sabarmati', '', 'gujarat', 'ahmedabad', '9656325964'),
(62, 'manan', 'gajjar', 'limbanivivek01@gmail.com', 'manu123', '150FT. RING ROAD, BH. RADHE HOTEL, KISHAN PARK-1,\r\nRajkot, g', 'PASSPORT IMAGE.jpeg', 'Gujarat', 'Rajkot', '9528726975'),
(65, 'mohit', 'parmar', 'mohit@gmail.com', 'mohit123', 'bhavnagar', '917874119646.jpg', 'Gujarat', 'Rajkot', '7383690567'),
(66, 'deep', 'bhut', 'deep@gmail.com', 'deep123', 'surat', '29.jpg', 'Gujarat', 'Rajkot', '7383690567'),
(79, 'mansi', 'ghetia', 'mansi@gmail.com', 'manu123', 'navrang circle, Ahmedabad', '6.jpg', 'Gujarat', 'Rajkot', '7383690567'),
(80, 'manan', 'limbani', 'manan@gmail.com', 'manan123', 'rajkot', '31.jpg', 'Gujarat', 'Rajkot', '7383690567'),
(81, 'yesha', 'desai', 'yesha@gmail.com', 'yesha123', 'canada', '24.jpg', 'Gujarat', 'Rajkot', '7383690567'),
(82, 'khushi', 'padya', 'limbanivivek01@gmail.com', 'khubu123', '150FT. RING ROAD, BH. RADHE HOTEL, KISHAN PARK-1,Rajkot, g', '', 'Gujarat', 'Rajkot', '7383690567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
