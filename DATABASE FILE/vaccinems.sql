-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 02:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccinems`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

CREATE TABLE `admintb` (
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `appointmenttb`
--

CREATE TABLE `appointmenttb` (
  `pid` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `docFees` int(5) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `userStatus` int(5) NOT NULL,
  `doctorStatus` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointmenttb`
--

INSERT INTO `appointmenttb` (`pid`, `ID`, `fname`, `lname`, `gender`, `email`, `contact`, `doctor`, `docFees`, `appdate`, `apptime`, `userStatus`, `doctorStatus`) VALUES
(12, 14, 'Liam', 'Moore', 'Male', 'liam@gmail.com', '7412225680', 'WillWilliams', 435, '2021-07-06', '10:00:00', 1, 1),
(1, 15, 'Curtis', 'Hicks', 'Male', 'curtis@gmail.com', '7410000010', 'ryan', 440, '2021-07-05', '14:00:00', 0, 1),
(1, 16, 'Curtis', 'Hicks', 'Male', 'curtis@gmail.com', '7410000010', 'ryan', 440, '2021-07-05', '10:00:00', 1, 1),
(11, 17, 'Kathryn', 'Anderson', 'Female', 'kathryn@gmail.com', '7850002580', 'lewis', 280, '2021-07-05', '10:00:00', 1, 1),
(13, 18, 'Brian', 'Rowe', 'Male', 'brian@gmail.com', '7012569999', 'Ralph', 450, '2021-07-06', '08:00:00', 1, 1),
(14, 19, 'iqra', 'khan', 'Female', 'iqrak21617@gmail.com', '1334677767', 'WillWilliams', 435, '2023-01-26', '14:00:00', 1, 1),
(14, 20, 'iqra', 'khan', 'Female', 'iqrak21617@gmail.com', '1334677767', 'WillWilliams', 435, '2023-08-06', '10:00:00', 1, 1),
(15, 21, 'areeba', 'khan', 'Female', 'areebak@gmail.com', '0845084085', 'Ralph', 450, '2027-02-10', '12:00:00', 1, 1),
(15, 22, 'areeba', 'khan', 'Female', 'areebak@gmail.com', '0845084085', 'ryan', 440, '2023-03-15', '10:00:00', 0, 1),
(15, 23, 'areeba', 'khan', 'Female', 'areebak@gmail.com', '0845084085', 'Sinovac', 500, '2025-06-19', '10:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `contact` varchar(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `contact`, `message`) VALUES
('Demo', 'demo@demail.com', '7014500000', 'this is a demo test');

-- --------------------------------------------------------

--
-- Table structure for table `doctb`
--

CREATE TABLE `doctb` (
  `fname` varchar(255) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `doctorname` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `docFees` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `doctb`
--

INSERT INTO `doctb` (`fname`, `username`, `password`, `doctorname`, `email`, `spec`, `docFees`) VALUES
('Shahid', 'Polivirus', 'Shahid', 'Quaid International', 'shahid@gmail.com', 'Available', 1200),
('Sameer', 'Sinopharm', 'Sameer', 'Civil Hospital', 'sameer@gmail.com', 'Available', 450),
('Shaheer', 'Sinovac', 'Shaheer', 'Jinnah Hospital', 'shaheer@gmail.com', 'Available', 500),
('Daniyal', 'CanSino-Bio', 'Daniyal', 'Civil Hospital', 'daniyal@gmail.com', 'Available', 700);

-- --------------------------------------------------------

--
-- Table structure for table `patreg`
--

CREATE TABLE `patreg` (
  `pid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `patreg`
--

INSERT INTO `patreg` (`pid`, `fname`, `lname`, `gender`, `email`, `contact`, `password`, `cpassword`) VALUES
(1, 'Curtis', 'Hicks', 'Male', 'curtis@gmail.com', '7410000010', 'pass', 'pass'),
(2, 'Emily', 'Smith', 'Female', 'emily@gmail.com', '7896541222', 'pass', 'pass'),
(3, 'Robert', 'Ray', 'Male', 'robert@gmail.com', '7014744444', 'pass', 'pass'),
(4, 'Michael', 'Foster', 'Male', 'michael@gmail.com', '7023696969', 'pass', 'pass'),
(5, 'Victor', 'Owen', 'Male', 'victor@gmail.com', '7897895500', 'pass', 'pass'),
(6, 'Johnny', 'Collins', 'Male', 'johnny@gmail.com', '7530001250', 'pass', 'pass'),
(7, 'Elsie', 'Meads', 'Female', 'elsie@gmail.com', '7850001250', 'pass', 'pass'),
(8, 'David', 'Fburn', 'Male', 'david@gmail.com', '7301450000', 'pass', 'pass'),
(9, 'Brandon', 'Mckinnon', 'Male', 'brandon@gmail.com', '7026969500', 'pass', 'pass'),
(10, 'Tyler', 'Smith', 'Male', 'tyler@gmail.com', '7900145300', 'pass', 'pass'),
(11, 'Kathryn', 'Anderson', 'Female', 'kathryn@gmail.com', '7850002580', 'pass', 'pass'),
(12, 'Liam', 'Moore', 'Male', 'liam@gmail.com', '7412225680', 'password', 'password'),
(13, 'Brian', 'Rowe', 'Male', 'brian@gmail.com', '7012569999', 'password', 'password'),
(14, 'iqra', 'khan', 'Female', 'iqrak21617@gmail.com', '1334677767', 'iqrakhan', 'iqrakhan'),
(15, 'areeba', 'khan', 'Female', 'areebak@gmail.com', '0845084085', 'areebak', 'areebak');

-- --------------------------------------------------------

--
-- Table structure for table `prestb`
--

CREATE TABLE `prestb` (
  `doctor` varchar(50) NOT NULL,
  `pid` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `disease` varchar(250) NOT NULL,
  `allergy` varchar(250) NOT NULL,
  `prescription` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `prestb`
--

INSERT INTO `prestb` (`doctor`, `pid`, `ID`, `fname`, `lname`, `appdate`, `apptime`, `disease`, `allergy`, `prescription`) VALUES
('Jinnah Hospital', 1, 1, 'faisal', 'khan', '2023-01-02', '44:15:32', 'Corona', 'headache,cough,chest pain', 'Pfizer'),
('Abbasi Shaheed Hospital', 2, 2, 'Osama', 'Khan', '2023-01-06', '18:10:12', 'Omicron', 'Chest pain, Shortness in breathe', 'Sinopharm'),
('Liaquat National Hospital', 3, 3, 'Waniya', 'Shah', '2023-01-01', '27:16:03', 'Corona', 'Headache,Body rashes,Fever', 'Sinovac'),
('Civil Hospital', 4, 4, 'Faiqa', 'Sid', '2023-01-12', '02:18:57', 'Corona', 'Chest pain', 'CanSino-Bio');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointmenttb`
--
ALTER TABLE `appointmenttb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patreg`
--
ALTER TABLE `patreg`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointmenttb`
--
ALTER TABLE `appointmenttb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `patreg`
--
ALTER TABLE `patreg`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
