-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 22, 2020 at 01:23 PM
-- Server version: 10.1.44-MariaDB-0+deb9u1
-- PHP Version: 7.0.33-0+deb9u7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bistromd`
--

-- --------------------------------------------------------

--
-- Table structure for table `dating`
--

CREATE TABLE `dating` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `passw` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `postnr` int(5) NOT NULL,
  `aboutme` varchar(1023) NOT NULL,
  `salary` int(10) NOT NULL,
  `seeking` int(1) UNSIGNED NOT NULL,
  `userrole` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dating`
--

INSERT INTO `dating` (`id`, `username`, `fullname`, `passw`, `email`, `postnr`, `aboutme`, `salary`, `seeking`, `userrole`) VALUES
(1, 'dennis', 'Dennis Biström', 'asd', 'asd', 420, 'asd', 1, 1, 1),
(2, 'dena', '', '688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6', 'asd', 420, 'dennis', 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dating`
--
ALTER TABLE `dating`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dating`
--
ALTER TABLE `dating`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
