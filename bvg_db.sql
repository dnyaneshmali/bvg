-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2017 at 12:39 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bvg_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_allocate`
--

CREATE TABLE `tbl_allocate` (
  `allocate_id` int(11) NOT NULL,
  `site_id` varchar(100) NOT NULL,
  `supervisor_id` varchar(100) NOT NULL,
  `allocate_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bvgadmin`
--

CREATE TABLE `tbl_bvgadmin` (
  `admin_id` int(11) NOT NULL,
  `admin_fname` varchar(100) NOT NULL,
  `admin_lname` varchar(100) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_number` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_avatar` varchar(500) NOT NULL,
  `admin_role` varchar(20) NOT NULL,
  `admin_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bvgadmin`
--

INSERT INTO `tbl_bvgadmin` (`admin_id`, `admin_fname`, `admin_lname`, `admin_username`, `admin_password`, `admin_number`, `admin_email`, `admin_avatar`, `admin_role`, `admin_date`) VALUES
(1, 'Dnyanesh', 'M', 'dnyanesh', 'e6e061838856bf47e1de730719fb2609', '9689483519', 'dnyanesh@softinfology.com', '', 'superadmin', '2017-04-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sites`
--

CREATE TABLE `tbl_sites` (
  `site_id` int(11) NOT NULL,
  `site_name` varchar(100) NOT NULL,
  `site_type` varchar(100) NOT NULL,
  `site_road` varchar(100) NOT NULL,
  `site_area` varchar(100) NOT NULL,
  `site_city` varchar(100) NOT NULL,
  `site_pin` int(10) NOT NULL,
  `site_shift_name` varchar(100) NOT NULL,
  `site_shift_time` varchar(50) NOT NULL,
  `site_start_date` date NOT NULL,
  `site_end_date` date NOT NULL,
  `site_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sites`
--

INSERT INTO `tbl_sites` (`site_id`, `site_name`, `site_type`, `site_road`, `site_area`, `site_city`, `site_pin`, `site_shift_name`, `site_shift_time`, `site_start_date`, `site_end_date`, `site_date`) VALUES
(1, 'Savali', 'construction', 'Bypass', 'Kharadi', 'Pune', 2147483647, 'General', '01:00', '2017-04-11', '2017-04-29', '2017-04-25 03:29:00'),
(2, 'WTC', 'security', 'EON IT Park', 'Kharadi', 'Pune', 2147483647, 'Night', '07:00', '2017-04-23', '2017-04-29', '2017-04-25 03:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supervisor`
--

CREATE TABLE `tbl_supervisor` (
  `supervisor_id` int(11) NOT NULL,
  `supervisor_fname` varchar(100) NOT NULL,
  `supervisor_lanme` varchar(100) NOT NULL,
  `supervisor_username` varchar(100) NOT NULL,
  `supervisor_password` varchar(100) NOT NULL,
  `supervisor_number` varchar(20) NOT NULL,
  `supervisor_email` varchar(100) NOT NULL,
  `supervisor_addr` varchar(500) NOT NULL,
  `supervisor_dob` date NOT NULL,
  `supervisor_avatar` varchar(500) NOT NULL,
  `supervisor_role` varchar(20) NOT NULL,
  `supervisor_adhar` varchar(20) NOT NULL,
  `supervisor_thumb` varchar(500) NOT NULL,
  `supervisor_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_supervisor`
--

INSERT INTO `tbl_supervisor` (`supervisor_id`, `supervisor_fname`, `supervisor_lanme`, `supervisor_username`, `supervisor_password`, `supervisor_number`, `supervisor_email`, `supervisor_addr`, `supervisor_dob`, `supervisor_avatar`, `supervisor_role`, `supervisor_adhar`, `supervisor_thumb`, `supervisor_date`) VALUES
(1, 'Swapnil', 'T', 'swapnil', 'e6e061838856bf47e1de730719fb2609', '1234567890', 'swapnil@gmail.com', 'Pune', '2016-04-24', '', 'supervisor', '2342342', '', '2017-04-24 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_allocate`
--
ALTER TABLE `tbl_allocate`
  ADD PRIMARY KEY (`allocate_id`);

--
-- Indexes for table `tbl_bvgadmin`
--
ALTER TABLE `tbl_bvgadmin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_username` (`admin_username`),
  ADD UNIQUE KEY `admin_number` (`admin_number`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `tbl_sites`
--
ALTER TABLE `tbl_sites`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `tbl_supervisor`
--
ALTER TABLE `tbl_supervisor`
  ADD PRIMARY KEY (`supervisor_id`),
  ADD UNIQUE KEY `supervisor_username` (`supervisor_username`),
  ADD UNIQUE KEY `supervisor_email` (`supervisor_email`),
  ADD UNIQUE KEY `supervisor_adhar` (`supervisor_adhar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_allocate`
--
ALTER TABLE `tbl_allocate`
  MODIFY `allocate_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_bvgadmin`
--
ALTER TABLE `tbl_bvgadmin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_sites`
--
ALTER TABLE `tbl_sites`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_supervisor`
--
ALTER TABLE `tbl_supervisor`
  MODIFY `supervisor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
