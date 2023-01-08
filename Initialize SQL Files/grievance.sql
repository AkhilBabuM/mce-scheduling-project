-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 07:55 AM
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
-- Table structure for table `grievance`
--

CREATE TABLE `grievance` (
  `usn` varchar(40) NOT NULL,
  `name` text NOT NULL,
  `subject` text NOT NULL,
  `text` longtext NOT NULL,
  `radio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grievance`
--

INSERT INTO `grievance` (`usn`, `name`, `subject`, `text`, `radio`) VALUES
('4MC20CS006', 'Akhil', 'class time', 'Since the class hours are a lot , the schedule is getting very hectic and is getting very difficult to manage class and other activities', 'no'),
('4MC20CS013', 'Anish Kashyap N', 'break time', 'zxczxczxczxczxczxc', 'yes'),
('4MC20CS021', 'B R Nikilesh', 'quantum computing', 'ASaqsASASDASDASDasdasdasdjahsdk jhaksdjhkajshd kjahsdk jhaksdj haksjdh kajsdh kajshd kjahsdkj ahskdj haksdj hakjsd hkajsdh kjahsd kjahsdl iuasghydil uaghsduh.', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grievance`
--
ALTER TABLE `grievance`
  ADD PRIMARY KEY (`usn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
