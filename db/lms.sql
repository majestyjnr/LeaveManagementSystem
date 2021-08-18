-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 11:31 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `phone`, `role`) VALUES
(1, 'Matthew', 'Afeawo', 'slurry', 'matthewafeawo22@gmail.com', '123', '0556023022', 'admin'),
(3, 'John', 'Paul', 'Majesty', 'johndoe22@gmail.com', '123', '+1 02556036088', 'admin'),
(4, 'Nicholas', 'Asare', 'lahm', 'nicholasare@gmail.com', '111', '0246987545', 'admin'),
(5, 'Bismark', 'Tetteh', 'cocoflex', 'bismarktetteh@gmail.com', '000', '0247893369', 'admin'),
(6, 'Solomon', 'Aidoo Jnr', 'Majesty', 'aidoojuniorsolomon@gmail.com', 'Majesty1@', '0574321997', 'admin'),
(7, 'Default ', 'Admin', 'DefaultAdmin', 'admin@gmail.com', 'admin1', '0544148747', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `joining_date` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `joining_date`, `phone`, `role`) VALUES
(2, 'Joseph', 'Banfo', 'joseph', 'josephbanfo@gmail.com', '123', '05/07/2021', '0261478955', 'employee'),
(3, 'Solomon', 'Aidoo Jnr', 'Majesty', 'developermajesty@gmail.com', 'Majesty1@', '16/08/2021', '0574321997', 'employee'),
(4, 'Default Staff', 'Staff', 'DefaultStaff', 'staff@gmail.com', 'staff1', '16/08/2021', '0544148747', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `employeeName` varchar(100) NOT NULL,
  `employeeEmail` varchar(100) NOT NULL,
  `leaveType` varchar(20) NOT NULL,
  `startDate` varchar(10) NOT NULL,
  `endDate` varchar(10) NOT NULL,
  `duration` int(10) NOT NULL,
  `reason` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `employeeName`, `employeeEmail`, `leaveType`, `startDate`, `endDate`, `duration`, `reason`, `status`) VALUES
(1, 'Olando', 'olandoboll@gmail.com', 'Casual Leave', '5', '23/08/2021', 27, 'Dubai', 'Pending'),
(2, 'Jeremiah', 'dejeremiah@gmail.com', 'Casual Leave', '2', '23/08/2021', 24, 'Vacation', 'Pending'),
(3, 'Solomon', 'developermajesty@gmail.com', 'Casual Leave', '10', '23/08/2021', 1, 'Vacation Holiday', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
