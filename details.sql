-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 04:31 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customers`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `Customer_ID` int(11) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Email_ID` varchar(20) NOT NULL,
  `Bank_Balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`Customer_ID`, `First_Name`, `Last_Name`, `Email_ID`, `Bank_Balance`) VALUES
(3, 'Daniel', 'Ricciardo', 'dannyrick@gmail.com', 150000),
(4, 'Lando', 'Norris', 'landomclaren@gmail.c', 100000),
(5, 'Sebastian', 'Vettel', 'sebvettle@gmail.com', 240000),
(7, 'Kimi', 'Raikkonen', 'coolkimi@gmail.com', 300000),
(11, 'Sergio', 'Perez', 'checoperez@gmail.com', 50000),
(14, 'Fernando', 'Alonso', 'fernando@gmail.com', 120000),
(16, 'Charles', 'Leclerc', 'charles112@gmail.com', 75000),
(33, 'Max', 'Verstappen', 'maxverstappen@gmail.', 150000),
(44, 'Lewis', 'Hamilton', 'hamilton@gmail.com', 450000),
(55, 'Carlos', 'Sainz', 'sainzcarlos55@gmail.', 90000),
(77, 'Valtteri', 'Bottas', 'valtteribottas@gmail', 250000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`Customer_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
