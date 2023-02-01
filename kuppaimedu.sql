-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 07:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuppaimedu`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_booking`
--

CREATE TABLE `customer_booking` (
  `c_id` int(100) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_email` text NOT NULL,
  `c_wastetype` varchar(100) NOT NULL,
  `c_wasteid` int(50) NOT NULL,
  `c_wastename` varchar(50) NOT NULL,
  `c_wastedesc` text NOT NULL,
  `c_picupload` text NOT NULL,
  `c_createdat` timestamp NOT NULL DEFAULT current_timestamp(),
  `c_updatedat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gc_details`
--

CREATE TABLE `gc_details` (
  `gc_id` int(50) NOT NULL,
  `gc_name` varchar(30) NOT NULL,
  `gc_email` text NOT NULL,
  `c_id` int(50) NOT NULL,
  `c_wasteid` int(50) NOT NULL,
  `gc_createdat` timestamp NOT NULL DEFAULT current_timestamp(),
  `gc_updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `filename` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(10) NOT NULL,
  `u_firstname` varchar(50) NOT NULL,
  `u_lastname` varchar(15) NOT NULL,
  `u_username` varchar(30) NOT NULL,
  `u_password` text NOT NULL,
  `u_role` enum('Customer','Garbagecollector') NOT NULL,
  `u_phonenumber` int(10) NOT NULL,
  `u_email` text NOT NULL,
  `u_aadhar` int(15) NOT NULL,
  `u_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `u_updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_firstname`, `u_lastname`, `u_username`, `u_password`, `u_role`, `u_phonenumber`, `u_email`, `u_aadhar`, `u_created_at`, `u_updated_at`) VALUES
(1, '', 'm', '', '', '', 0, '', 0, '2022-09-19 06:43:54', '2022-09-19 12:13:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_booking`
--
ALTER TABLE `customer_booking`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `gc_details`
--
ALTER TABLE `gc_details`
  ADD PRIMARY KEY (`gc_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_booking`
--
ALTER TABLE `customer_booking`
  MODIFY `c_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gc_details`
--
ALTER TABLE `gc_details`
  MODIFY `gc_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
