-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2023 at 07:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `Name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `usn` varchar(14) NOT NULL,
  `password` varchar(100) NOT NULL,
  `bys` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`Name`, `email`, `usn`, `password`, `bys`) VALUES
('Abhinandan', 'abhinandan123@gmail.com', '4MC20CS002', '$2y$10$5U0TGsbT1pWvnjz9vCA9U.btb0zax//8WIaPfC1c7aQm9WemwbdYW', 'CSE5A'),
('Akhil', 'akhil@gmail.com', '4MC20CS006', '$2y$10$6LHipDFVS074R/TEPurW4.qYmrOAkQVpzUIaXvml3jK/mIQCpJwj.', ''),
('Anish Kashyap N', 'anishkashyap8@gmail.com', '4MC20CS013', '$2y$10$fHEgSjoNYBRmODtiiYsUa.HMbE7Ar5ipRgjK4ADuLcArc0hKSO0.q', ''),
('B R Nikilesh', 'brnikilesh@gmail.com', '4MC20CS021', '$2y$10$gAdr7iSzymKPZnOZxeR8eetPtcRCq0kKjkmPQsiLo8SnHD5Xe7jQy', ''),
('Ajay kumar', 'kasdjdjk@gmail.com', '7842387mc', '$2y$10$LJxwAJ1Uhd.Pi6Bu1MXQCOFrqg4UUqzw4QiAwcPTuhxVeQTmfGjTG', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`usn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
