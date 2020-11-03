-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 28, 2020 at 11:29 AM
-- Server version: 10.3.24-MariaDB-2
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--
CREATE DATABASE IF NOT EXISTS `akademik` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `akademik`;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nobp` char(13) NOT NULL,
  `nama` char(30) NOT NULL,
  `kelas` varchar(100) DEFAULT NULL,
  `prodi` varchar(100) DEFAULT NULL,
  `nohp` char(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nobp`, `nama`, `kelas`, `prodi`, `nohp`) VALUES
('1811080001', 'Babay G. Paraya', 'TRPL 3A', 'D4 TRPL', '08127117717'),
('1811080002', 'Babay', 'TRPL 3A', 'D4 TRPL', '08127117712'),
('1811080004', 'Bayu', 'TRPL 3A', 'D4 TRPL', '08127117714'),
('1811080005', 'Bayygus', 'TRPL 3A', 'D4 TRPL', '08127117715'),
('1811080006', 'Paraya', 'TRPL 3A', 'D4 TRPL', '08127117716'),
('1811080007', 'Gusti', 'TRPL 3A', 'D4 TRPL', '08127117717'),
('1811082018', 'Bayu Gusti Paraya', 'TRPL 3A', 'D4 TRPL', '0812710770700');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nobp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
