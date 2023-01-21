-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 21, 2023 at 06:46 PM
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
-- Database: `schedule`
--

-- --------------------------------------------------------

--
-- Table structure for table `cse5a`
--

CREATE TABLE `cse5a` (
  `day_` text NOT NULL,
  `h1` text NOT NULL,
  `h2` text NOT NULL,
  `h3` text NOT NULL,
  `h4` text NOT NULL,
  `h5` text NOT NULL,
  `h6` text NOT NULL,
  `h7` text NOT NULL,
  `h8` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cse5a`
--

INSERT INTO `cse5a` (`day_`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`, `h8`) VALUES
('mon', 'DC', 'WP', 'WP', 'AJ', '', '', 'CIP', 'CIP'),
('tue', 'DBMS', 'OS', 'DC', 'AJ', 'DBMS LAB', 'DBMS LAB', '', ''),
('wed', 'DC', 'DBMS', 'OS', 'WP', 'AJ LAB', 'AJ LAB', '', ''),
('thu', 'OS', 'DBMS', 'DC', 'AJ', 'WP LAB', 'WP LAB', '', ''),
('fri', 'WP', 'DBMS', 'TME', 'TME', '', '', '', ''),
('sat', '', '', 'TME', 'TME', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ocse5a`
--

CREATE TABLE `ocse5a` (
  `day_` text NOT NULL,
  `h1` text NOT NULL,
  `h2` text NOT NULL,
  `h3` text NOT NULL,
  `h4` text NOT NULL,
  `h5` text NOT NULL,
  `h6` text NOT NULL,
  `h7` text NOT NULL,
  `h8` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ocse5a`
--

INSERT INTO `ocse5a` (`day_`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`, `h8`) VALUES
('mon', 'DC', 'WP', 'WP', 'AJ', '', '', 'CIP', 'CIP'),
('tue', 'DBMS', 'OS', 'DC', 'AJ', 'DBMS LAB', 'DBMS LAB', '', ''),
('wed', 'DC', 'DBMS', 'OS', 'WP', 'AJ LAB', 'AJ LAB', '', ''),
('thu', 'OS', 'DBMS', 'DC', 'AJ', 'WP LAB', 'WP LAB', '', ''),
('fri', 'WP', 'DBMS', 'TME', 'TME', '', '', '', ''),
('sat', '', '', 'TME', 'TME', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
