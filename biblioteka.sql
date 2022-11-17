-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 10:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `biblioteke`
--

CREATE TABLE `biblioteke` (
  `id` int(11) NOT NULL,
  `naziv` varchar(100) NOT NULL,
  `adresa` varchar(100) NOT NULL,
  `broj_knjiga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biblioteke`
--

INSERT INTO `biblioteke` (`id`, `naziv`, `adresa`, `broj_knjiga`) VALUES
(5, 'asd', 'asd', 4);

-- --------------------------------------------------------

--
-- Table structure for table `knjige`
--

CREATE TABLE `knjige` (
  `id` int(11) NOT NULL,
  `delo` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `biblioteka_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `knjige`
--

INSERT INTO `knjige` (`id`, `delo`, `autor`, `biblioteka_id`) VALUES
(3, 'asdas', 'wqeqw', 5),
(4, 'asda', 'lqweo', 5),
(5, 'www', 'asd', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biblioteke`
--
ALTER TABLE `biblioteke`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `knjige`
--
ALTER TABLE `knjige`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biblioteka_fk` (`biblioteka_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biblioteke`
--
ALTER TABLE `biblioteke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `knjige`
--
ALTER TABLE `knjige`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `knjige`
--
ALTER TABLE `knjige`
  ADD CONSTRAINT `knjige_ibfk_1` FOREIGN KEY (`biblioteka_id`) REFERENCES `biblioteke` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
