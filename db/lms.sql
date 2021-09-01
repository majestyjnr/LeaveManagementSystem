-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2021 at 12:32 PM
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
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `phone`) VALUES
(1, 'Matthew', 'Afeawo', 'slurry', 'matthewafeawo22@gmail.com', '123', '0556023022'),
(4, 'Nicholas', 'Asare', 'lahm', 'nicholasare@gmail.com', '111', '0246987545'),
(5, 'Bismark', 'Tetteh', 'cocoflex', 'bismarktetteh@gmail.com', '000', '0247893369'),
(6, 'Solomon', 'Aidoo Jnr', 'Majesty', 'aidoojuniorsolomon@gmail.com', 'Majesty1@', '0574321997'),
(8, 'Default', 'Admin', 'Default Admin', 'defaultadmin@gmail.com', 'admin', '0514141611');

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
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `phone`) VALUES
(2, 'Jeremiah', 'Banfo', 'jere', 'dejeremiah@gmail.com', '123', '0261478955'),
(3, 'Solomon', 'Aidoo Jnr', 'Majesty', 'developermajesty@gmail.com', 'Majesty1@', '0574321997'),
(4, 'Olando', 'Boll', 'DefaultStaff', 'sirolando@gmail.com', 'staff1', '0544148747'),
(5, 'Default', 'Staff', 'Default Staff', 'defaultstaff@gmail.com', 'staff', '0574321997');

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
(1, 'Olando', 'sirolando@gmail.com', 'Casual Leave', '20/08/2021', '23/08/2021', 3, 'Dubai', 'Declined'),
(2, 'Jeremiah', 'dejeremiah@gmail.com', 'Casual Leave', '23/08/2021', '25/08/2021', 2, 'Vacation', 'Pending'),
(3, 'Solomon', 'developermajesty@gmail.com', 'Casual Leave', '18/08/2021', '28/08/2021', 10, 'Vacation Holiday', 'Declined'),
(4, 'Solomon', 'developermajesty@gmail.com', 'Casual Leave', '15/08/2021', '30/08/2021', 15, 'I want to travel to Germany for an appointment with the prime minister.', 'Approved');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
