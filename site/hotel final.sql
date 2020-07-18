-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 02:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Sl_no` int(11) NOT NULL,
  `Username` varchar(220) NOT NULL,
  `Password` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Sl_no`, `Username`, `Password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `sl_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `feed` varchar(300) NOT NULL,
  `datestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`sl_no`, `name`, `email`, `username`, `feed`, `datestamp`) VALUES
(1, 'Santosh Reddy', 'santoshreddybothgi12@gmail.com', '_muttu_reddy', 'FEEDBACKSubmited', '2020-05-18 18:17:28'),
(2, 'Santosh B', 'sb@gmail.com', 'santosh', 'GOod', '2020-05-19 03:50:03'),
(3, 'Santosh Reddy', 'santosh@gmail.com', 'san', 'Good treat', '2020-05-19 04:58:13');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Sl_no` int(20) NOT NULL,
  `Firstname` varchar(220) NOT NULL,
  `Lastname` varchar(220) NOT NULL,
  `Email` varchar(220) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Logintime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Sl_no`, `Firstname`, `Lastname`, `Email`, `Username`, `Password`, `Logintime`) VALUES
(2, 'Santosh', 'Reddy', 'santoshreddybothgi12@gmail.com', '_muttu_reddy', 'Santu', '2020-05-18 17:48:17'),
(3, 'Dhrithi', 'V', 'dhrithi@gmail.com', 'dhrithi', 'd123', '2020-05-18 16:59:55'),
(4, 'Md', 'Azar', 'md@gmail.com', 'azar', 'md', '2020-05-18 17:00:19'),
(5, 'Sham', 'D', 'sham@gmail.com', 'sham', '123', '2020-05-18 17:00:42'),
(7, 'Santosh', 'Reddy', 'santosh@gmail.com', 'san', 'santosh', '2020-05-19 04:56:36');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `sl_no` int(11) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `card_type` varchar(200) NOT NULL,
  `card_name` varchar(220) NOT NULL,
  `card_no` varchar(20) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `cvv` int(4) NOT NULL,
  `address` varchar(220) NOT NULL,
  `room_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`sl_no`, `uname`, `email`, `card_type`, `card_name`, `card_no`, `month`, `year`, `cvv`, `address`, `room_no`, `amount`) VALUES
(4, '_muttu_reddy', 'santoshreddybothgi12@gmail.com', 'Credit card', 'Santuu', '2147483647', 'February', '2021', 121, 'Bidar', 301, 13000),
(8, 'santosh', 'sb@gmail.com', 'Credit card', 'sb', '7845789678967896', 'April', '2023', 124, 'Hydrabad', 201, 16000),
(9, 'san', 'santosh@gmail.com', 'Credit card', 'Santosh', '8787878787878787', 'October', '2033', 787, 'Bengaluru', 101, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `roomb`
--

CREATE TABLE `roomb` (
  `Sl_no` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Email` varchar(220) NOT NULL,
  `National` char(15) NOT NULL,
  `Phone` int(10) NOT NULL,
  `TRoom` varchar(220) NOT NULL,
  `People` int(10) NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `No_days` int(20) NOT NULL,
  `booking_time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomb`
--

INSERT INTO `roomb` (`Sl_no`, `Username`, `Fname`, `Lname`, `Email`, `National`, `Phone`, `TRoom`, `People`, `cin`, `cout`, `status`, `No_days`, `booking_time`) VALUES
(2, '_muttu_reddy', 'Santosh', 'Reddy', 'santoshreddybothgi12@gmail.com', 'Indian', 2147483647, 'LUXURY ROOM', 2, '2020-05-10', '2020-05-31', 'Confirmed', 21, NULL),
(3, '_muttu_reddy', 'Santosh', 'Reddy', 'santoshreddybothgi12@gmail.com', 'Indian', 2147483647, 'DELUXE ROOM', 3, '2020-05-20', '2020-05-30', 'Confirmed', 10, NULL),
(5, 'san', 'Santosh', 'Reddy', 'santosh@gmail.com', 'Indian', 2147483647, 'DELUXE ROOM', 3, '2020-05-19', '2020-05-31', 'Confirmed', 12, '2020-05-19 10:23:33');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `sl_no` int(11) NOT NULL,
  `roomtype` varchar(220) NOT NULL,
  `room_no` int(10) NOT NULL,
  `fees` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`sl_no`, `roomtype`, `room_no`, `fees`) VALUES
(4, 'DELUXE ROOM', 101, 20000),
(5, 'GUEST HOUSE', 201, 16000),
(6, 'LUXURY ROOM', 301, 13000),
(7, 'SINGLE ROOM', 401, 8000);

-- --------------------------------------------------------

--
-- Table structure for table `tblogin`
--

CREATE TABLE `tblogin` (
  `sl_no` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `login` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Sl_no`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`sl_no`,`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Sl_no`,`Email`,`Username`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `roomb`
--
ALTER TABLE `roomb`
  ADD PRIMARY KEY (`Sl_no`,`Username`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`sl_no`,`fname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Sl_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roomb`
--
ALTER TABLE `roomb`
  MODIFY `Sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblogin`
--
ALTER TABLE `tblogin`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
