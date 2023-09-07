-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2023 at 07:34 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('0', '12345'),
('admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `accounttype` varchar(15) NOT NULL,
  `phonenumber` int(15) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`firstname`, `lastname`, `email`, `accounttype`, `phonenumber`, `password`) VALUES
('veer', 'singh', 'veer2002@gmail.com', 'student', 123456789, '123456'),
('jassi', 'ass', 'jasveersingh182002@gmail.com', 'industry', 1125452, '1234556');

-- --------------------------------------------------------

--
-- Table structure for table `industryperson`
--

CREATE TABLE `industryperson` (
  `select` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `industryperson`
--

INSERT INTO `industryperson` (`select`, `email`, `password`, `date`) VALUES
('Industry', 'veer2002@gmail.com', '123456', '2023-0'),
('Industry', 'Lakhvinderdhanoa@gmail.com', '467390', '2023-0');

-- --------------------------------------------------------

--
-- Table structure for table `signup2`
--

CREATE TABLE `signup2` (
  `select` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup2`
--

INSERT INTO `signup2` (`select`, `email`, `password`, `date`) VALUES
('Industry', 'veer2002@gmail.com', '123456', '2023-08-24 00:00:00.000000'),
('Student', 'jasveersingh182002@gmail.com', '245redfdtg', '2023-08-24 00:00:00.000000'),
('Industry', 'Lakhvinderdhanoa@gmail.com', '2345678', '2023-08-24 00:00:00.000000'),
('Student', 'jassi123445@gmail.com', '09876543210', '2023-08-24 00:00:00.000000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
