-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2023 at 09:31 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iki`
--

-- --------------------------------------------------------

--
-- Table structure for table `dt_bkt`
--

CREATE TABLE `dt_bkt` (
  `kd` int NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `min_bak` varchar(50) DEFAULT NULL,
  `esai` text,
  `dt_mhsw_id` int NOT NULL,
  `nim` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dt_mhsw`
--

CREATE TABLE `dt_mhsw` (
  `id` int NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nim` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dt_mhsw`
--

INSERT INTO `dt_mhsw` (`id`, `nama`, `nim`) VALUES
(3, 'adas', '214'),
(1, 'Syahrul', '23414'),
(2, 'udh', '3112'),
(4, 'tfgv', '67478');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dt_bkt`
--
ALTER TABLE `dt_bkt`
  ADD PRIMARY KEY (`kd`),
  ADD UNIQUE KEY `dt_bkt__idx` (`dt_mhsw_id`),
  ADD UNIQUE KEY `dt_bkt__idxv1` (`nim`);

--
-- Indexes for table `dt_mhsw`
--
ALTER TABLE `dt_mhsw`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dt_bkt`
--
ALTER TABLE `dt_bkt`
  MODIFY `kd` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dt_bkt`
--
ALTER TABLE `dt_bkt`
  ADD CONSTRAINT `dt_bkt_dt_mhsw_fk` FOREIGN KEY (`nim`) REFERENCES `dt_mhsw` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
