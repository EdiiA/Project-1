-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 10:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `vetura`
--

CREATE TABLE `vetura` (
  `ID` int(11) NOT NULL,
  `Emri` varchar(255) NOT NULL,
  `VitiProdhimit` int(11) NOT NULL,
  `Km` int(11) NOT NULL,
  `Motori` float NOT NULL,
  `HP` float NOT NULL,
  `Cmimi` double NOT NULL,
  `Foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vetura`
--

INSERT INTO `vetura` (`ID`, `Emri`, `VitiProdhimit`, `Km`, `Motori`, `HP`, `Cmimi`, `Foto`) VALUES
(3, 'Porsche 911', 2020, 85000, 3.8, 530, 250000, 0x504f524348452e706e67),
(4, 'Audi RS Q8', 2021, 55000, 4.2, 600, 1400000, 0x51382e706e67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vetura`
--
ALTER TABLE `vetura`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vetura`
--
ALTER TABLE `vetura`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
