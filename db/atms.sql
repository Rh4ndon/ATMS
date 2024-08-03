-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 02:56 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atms`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `temp` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `htme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `username`, `firstname`, `lastname`, `gender`, `temp`, `section`, `date`, `htme`) VALUES
(14, '12345678', 'Sample', 'Student', 'female', '34.5', 'G12-Example', '22-01-23', '01:24:32'),
(15, '123456789', 'Example', 'Student', 'male', '36.5', 'G11-Narra', '22-01-23', '01:25:29'),
(16, '123456789845345', 'Xamplessss', 'Studentss', 'Female', '36.7', 'G12-Example', '22-01-23', '01:26:06'),
(17, '12345678', 'Sample', 'Student', 'female', '34.5', 'G12-Example', '22-01-23', '02:13:01'),
(24, '123456789845345', 'Xamplessss', 'Studentss', 'Female', '34.5', 'G12-Example', '22-01-23', '08:54:42'),
(25, '123456789845345', 'Xamplessss', 'Studentss', 'Female', '34.5', 'G12-Example', '22-01-23', '08:55:10'),
(26, '123456789845345', 'Xamplessss', 'Studentss', 'Female', '34.5', 'G12-Example', '22-01-23', '08:55:34'),
(27, '12345678', 'Sample', 'Student', 'female', '34.5', 'G12-Example', '22-01-23', '08:59:23'),
(31, '12345678', 'Sample', 'Student', 'female', '34.5', 'G12-Example', '22-01-23', '09:09:09'),
(32, '123456789', 'Example', 'Student', 'male', '34.5', 'G11-Narra', '22-01-23', '09:10:58'),
(33, '123456789', 'Example', 'Student', 'male', '34.5', 'G11-Narra', '22-01-23', '09:11:44'),
(34, '123456789', 'Example', 'Student', 'male', '34.5', 'G11-Narra', '22-01-23', '09:11:53'),
(35, '12345678', 'Sample', 'Student', 'female', '34.5', 'G12-Example', '23-01-23', '09:41:12'),
(36, '12345678', 'Sample', 'Student', 'female', '34.5', 'G12-Example', '23-01-23', '21:42:16'),
(37, '12345678', 'Sample', 'Student', 'female', '34.5', 'G12-Example', '23-01-23', '21:43:21'),
(38, '12345678', 'Sample', 'Student', 'female', '34.5', 'G12-Example', '23-01-23', '21:44:24'),
(39, '12345678', 'Sample', 'Student', 'female', '34.5', 'G12-Example', '23-01-23', '21:47:37'),
(41, '12345678', 'Sample', 'Student', 'female', '34.5', 'G12-Example', '01-23-23', '21:52:07'),
(42, '12345678', 'Sample', 'Student', 'female', '34.5', 'G12-Example', '01-23-23', '22:43'),
(43, '12345678', 'Sample', 'Student', 'female', '34.5', 'G12-Example', '01-23-23', '22:44'),
(44, '', '', '', '', '34.5', '', '01-23-23', '22:44'),
(45, '', '', '', '', '34.5', '', '01-23-23', '22:45'),
(46, '12345678', 'Sample', 'Student', 'female', '34.5', 'G12-Example', '01-23-23', '22:45');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`) VALUES
(24, 'G12-Example'),
(25, 'G11-Narra');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gender_id` int(11) NOT NULL,
  `gender_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender_id`, `gender_name`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `class_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `parent` varchar(100) NOT NULL,
  `parent_no` varchar(13) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `firstname`, `lastname`, `class_id`, `username`, `gender`, `location`, `status`, `parent`, `parent_no`) VALUES
(221, 'Example', 'Student', 25, '123456789', 'male', 'uploads/avatar.jpg', 'Registered', '', ''),
(220, 'Sample', 'Student', 24, '12345678', 'female', 'uploads/black-wallpaper-20121914165931.jpg', 'Registered', '', ''),
(239, 'Xamplessss', 'Studentss', 24, '123456789845345', 'Female', 'uploads/wallpaperflare.com_wallpaper.jpg', 'Unregistered', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'admin', 'admin123', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
