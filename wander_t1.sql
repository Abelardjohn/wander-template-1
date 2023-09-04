-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2023 at 03:08 PM
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
-- Database: `wander_t1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishes`
--

CREATE TABLE `tbl_wishes` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `jumlah` varchar(128) NOT NULL,
  `ucapan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_wishes`
--

INSERT INTO `tbl_wishes` (`id`, `name`, `jumlah`, `ucapan`) VALUES
(1, 'john doe', '2', 'congratss!!'),
(12, 'Abelardjohn', '', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit recusandae facere porro corrupti nemo doloribus placeat, inventore ipsum ratione illo ipsa, maiores perferendis? Accusamus exercitationem quis similique porro reiciendis officia.'),
(13, 'Abelard Jovi John Pangalila', '', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit recusandae facere porro corrupti nemo doloribus placeat, inventore ipsum ratione illo ipsa, maiores perferendis? Accusamus exercitationem quis similique porro reiciendis officia.'),
(14, 'Kepala Biro', '', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit recusandae facere porro corrupti nemo doloribus placeat, inventore ipsum ratione illo ipsa, maiores perferendis? Accusamus exercitationem quis similique porro reiciendis officia.'),
(15, 'Abelard Pangalila', '', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit recusandae facere porro corrupti nemo doloribus placeat, inventore ipsum ratione illo ipsa, maiores perferendis? Accusamus exercitationem quis similique porro reiciendis officia.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_wishes`
--
ALTER TABLE `tbl_wishes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_wishes`
--
ALTER TABLE `tbl_wishes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
