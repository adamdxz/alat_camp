-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2023 at 12:06 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(2, 'admin2', '$2y$10$umL7b0gu6Ib2uSwQ7OPll.j6bAt75AGlsA4rZFnJizS02sNuhU80ua'),
(3, 'admin3', '$2y$10$wDgUebeKAn.4rGp78Y0ycutFS.kpbqS5K9tV8vYbWMp49UdFfn.k2y'),
(4, 'admin', '$2y$10$sLyOdX30JDTAkryX0oojL.GmbcL9OGYwem.Z/akCN3h03b9cNz.ku');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `total_harga` decimal(10,2) NOT NULL,
  `tent_4` int(11) NOT NULL,
  `gas` int(11) NOT NULL,
  `kompor` int(11) NOT NULL,
  `nesting` int(11) NOT NULL,
  `lampu` int(11) NOT NULL,
  `tent_2` int(11) NOT NULL,
  `sleeping_bag` int(11) NOT NULL,
  `matras` int(11) NOT NULL,
  `kayu_bakar` int(11) NOT NULL,
  `flysheet` int(11) NOT NULL,
  `tanggal_pesan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('menunggu','on rent','clear') NOT NULL DEFAULT 'menunggu'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `nama`, `mail`, `no_hp`, `total_harga`, `tent_4`, `gas`, `kompor`, `nesting`, `lampu`, `tent_2`, `sleeping_bag`, `matras`, `kayu_bakar`, `flysheet`, `tanggal_pesan`, `status`) VALUES
(1, 'Siti Fatimah', 'siti@example.com', '081234567890', '1250.00', 2, 3, 1, 0, 1, 0, 1, 0, 0, 0, '2023-10-20 09:14:12', 'menunggu'),
(2, 'Budi Santoso', 'budi@example.com', '087654321000', '850.00', 1, 0, 2, 1, 0, 0, 1, 0, 0, 0, '2023-10-20 09:14:12', 'menunggu'),
(3, 'Putri Permata', 'putri@example.com', '085551234567', '260.00', 0, 4, 0, 0, 0, 2, 0, 0, 1, 0, '2023-10-20 09:14:12', 'menunggu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
