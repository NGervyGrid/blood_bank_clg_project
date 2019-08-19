-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2018 at 05:04 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `usr` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`usr`, `pwd`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bdata`
--

CREATE TABLE `bdata` (
  `name` varchar(25) NOT NULL,
  `address` varchar(300) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `blood_group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bdata`
--

INSERT INTO `bdata` (`name`, `address`, `dob`, `phone`, `mobile`, `mail`, `blood_group`) VALUES
('akasj', '          hfdsjddsajhka              ', '21', '7472364236', '2343242344', 'bhs2@gmail.com', 'O'),
('asdfasdfdasf', 'O', 'asdfasdfa', 'asdfasfdas', 'asdfasdfas', 'asd@gmail.com', 'O'),
('aewafaqewf', '                    asdfdasfasdfasdfsa    ', 'w232343', '3243243243', '2342342342', 'sv@gmail.com', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

CREATE TABLE `bloodgroup` (
  `bg_id` int(10) NOT NULL,
  `bg_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodgroup`
--

INSERT INTO `bloodgroup` (`bg_id`, `bg_name`) VALUES
(1, 'O+'),
(2, 'A+'),
(3, 'B+'),
(4, 'AB+'),
(5, 'O-'),
(6, 'A-'),
(7, 'B-'),
(8, 'AB-');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `l_id` int(10) NOT NULL,
  `l_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`l_id`, `l_name`) VALUES
(1, 'Madurai central'),
(2, 'villapuram'),
(3, 'Madurai East'),
(4, 'Madurai West'),
(5, 'Madurai South'),
(6, 'Madurai North'),
(7, 'puthur'),
(8, 'sellur'),
(9, 'Simmakkal'),
(10, 'jaihindupuram'),
(11, 'Pasumalai'),
(12, 'Perungudi'),
(13, 'Avaniyapurum'),
(14, 'S.S.Colony'),
(15, 'K.K.Nagar'),
(15, 'Othakadai'),
(16, 'Thiru Nagar'),
(17, 'Thirupuramkundram'),
(18, 'Palaganatham'),
(19, 'Anupanadi');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `area` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`name`, `gender`, `age`, `mobile`, `blood_group`, `mail`, `area`) VALUES
('fin ab de', 'male', 23, '2147483647', '1', 'finabde33@gmail.com', ''),
('ginab de', 'female', 24, '2147483647', '2', 'ginabde@gmail.com', ''),
('lan bres', 'male', 23, '2147483647', '3', 'iranbres@gmail.com', ''),
('has deren', 'female', 35, '2147483647', '4', 'hasderen@gmail.com', ''),
('tren des', 'male', 22, '2147483647', '5', 'trndes23@gmail.com', ''),
('grende vis', 'male', 19, '2147483647', '6', 'grendevis34@gmail.co', ''),
('rende gen', 'female', 23, '2147483647', '7', 'rendegen23@gmail.com', ''),
('fren ren', 'female', 23, '2147483647', '8', 'fnren23@gmail.com', ''),
('mohamd asik', 'male', 18, '2147483647', '2', 'mohamedasik861@gmail', ''),
('sree', 'male', 39, '7777777777', '7', 'sj@gmail.com', ''),
('ggggggggggg', 'female', 19, '7665545454', '1', 'sj@gmail.com', ''),
('akash', 'male', 24, '2324343343', '3', 'sj@gmail.com', '2'),
('asik', 'male', 23, '2323323232', 'AB+', 'sj@gmail.com', '8'),
('shailuma', 'female', 23, '3232323232', 'O+', 'sj@gmail.com', '17');

-- --------------------------------------------------------

--
-- Table structure for table `req`
--

CREATE TABLE `req` (
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(20) NOT NULL,
  `mobile` int(10) NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `till_date` date NOT NULL,
  `details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `req`
--

INSERT INTO `req` (`name`, `gender`, `age`, `mobile`, `blood_group`, `mail`, `till_date`, `details`) VALUES
('vishwa', 'male', 18, 2147483647, 'O-', 'vishwsjv23@gmail.com', '2018-09-17', 'emergency '),
('mohamedasik ', 'male', 18, 2147483647, 'O+', 'mohamedasik861@gmail.com', '2018-09-20', 'madurai');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` int(10) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `org` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
