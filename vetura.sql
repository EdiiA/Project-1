-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 08:50 PM
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
  `Foto` blob NOT NULL,
  `Modifikim` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vetura`
--

INSERT INTO `vetura` (`ID`, `Emri`, `VitiProdhimit`, `Km`, `Motori`, `HP`, `Cmimi`, `Foto`, `Modifikim`) VALUES
(4, 'Audi RS Q8', 2022, 55000, 4.2, 650, 140000, 0x51382e706e67, 'Edited By: edison'),
(5, 'Porsche 911', 2020, 55000, 3.8, 530, 250000, 0x504f524348452e706e67, NULL),
(6, 'Lambo Urus', 2022, 23000, 4, 625, 350000, 0x4c414d424f2e706e67, 'Edited By: edison'),
(7, 'Benz Maybach', 2022, 15000, 6.3, 650, 300000, 0x534d2e706e67, NULL),
(8, 'Range Rover', 2019, 54000, 4, 380, 110000, 0x52522e706e67, NULL),
(9, 'BMW 740d', 2023, 1000, 3, 345, 140000, 0x424d572e706e67, 'Edited By: edison');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
