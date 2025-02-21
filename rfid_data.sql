-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2025 at 09:35 AM
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
-- Database: `rfid_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `rfid_data`
--

CREATE TABLE `rfid_data` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rfid_data`
--

INSERT INTO `rfid_data` (`id`, `uid`, `waktu`) VALUES
(100, '85eb3c2', '2025-01-16 12:51:25'),
(105, '85eb3c2', '2025-01-16 12:51:25'),
(106, '85eb3c2', '2025-01-16 12:51:25'),
(107, '85eb3c2', '2025-01-16 12:51:25'),
(108, '85eb3c2', '2025-01-16 12:51:25'),
(109, '85eb3c2', '2025-01-16 12:51:25'),
(110, '85eb3c2', '2025-01-16 12:51:25'),
(111, '85eb3c2', '2025-01-16 12:51:25'),
(112, '85eb3c2', '2025-01-16 12:51:25'),
(113, '85eb3c2', '2025-01-16 12:51:25'),
(114, '85eb3c2', '2025-01-16 12:51:25'),
(115, '85eb3c2', '2025-01-16 12:51:25'),
(116, '85eb3c2', '2025-01-16 12:51:25'),
(117, '85eb3c2', '2025-01-16 12:51:25'),
(118, '85eb3c2', '2025-01-16 12:51:25'),
(119, '85eb3c2', '2025-01-16 12:51:25'),
(120, '85eb3c2', '2025-01-16 12:51:25'),
(121, '85eb3c2', '2025-01-16 12:51:25'),
(122, '85eb3c2', '2025-01-16 12:51:25'),
(123, '85eb3c2', '2025-01-16 12:51:25'),
(124, '85eb3c2', '2025-01-16 12:51:25'),
(125, '85eb3c2', '2025-01-16 12:51:25'),
(126, '85eb3c2', '2025-01-16 12:51:25'),
(127, '85eb3c2', '2025-01-16 12:51:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rfid_data`
--
ALTER TABLE `rfid_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rfid_data`
--
ALTER TABLE `rfid_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
