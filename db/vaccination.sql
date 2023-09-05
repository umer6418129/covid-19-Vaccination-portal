-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2023 at 11:20 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccination`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` bigint(20) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `isapprove` varchar(50) DEFAULT NULL,
  `isactive` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `name`, `address`, `city`, `country`, `email`, `password`, `isapprove`, `isactive`, `create_at`) VALUES
(1, 'Eureka', '12/abc avenue', 'Ny', 'USA', 'admin@eureka.com', 'admin!eureka.12', 'Pending', 0, '2023-09-06 01:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `id` bigint(20) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password_hash` varchar(200) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`id`, `username`, `password_hash`, `create_at`) VALUES
(1, 'Admin@vaccine', 'Admin@vaccine564', '2023-09-06 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
