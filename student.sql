-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 09, 2023 at 12:08 PM
-- Server version: 8.0.32-0ubuntu0.22.04.2
-- PHP Version: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) DEFAULT NULL,
  `roll` bigint NOT NULL,
  `image` varchar(55) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `roll`, `image`, `created_at`) VALUES
(1, 'Mari Vance', 'mocigoxe@mailinator.com', 10, NULL, '2023-03-05 10:27:24'),
(2, 'Blaine Vincent', 'zynexof@mailinator.com', 3, NULL, '2023-03-05 10:27:29'),
(3, 'Raven Wilson', 'batod@mailinator.com', 69, NULL, '2023-03-05 10:33:35'),
(4, 'Alexis Sweeney', 'lenane@mailinator.com', 22, '1thumbnail_CPE.png', '2023-03-05 10:39:20'),
(5, 'Isaiah Mitchell', 'zefujor@mailinator.com', 15, '1thumbnail_CPE.png', '2023-03-05 10:40:15'),
(6, 'Tashya Cotton', 'kaxoq@mailinator.com', 54, '3thumbnail_Bikash-offer-mob-slider-625-x-650.jpg', '2023-03-05 10:40:46'),
(7, 'Cathleen Thornton', 'qysogepi@mailinator.com', 48, '3thumbnail_Bikash-offer-mob-slider-625-x-650.jpg', '2023-03-05 10:43:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
