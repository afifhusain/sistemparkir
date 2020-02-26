-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2020 at 10:53 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemparkir`
--

-- --------------------------------------------------------

--
-- Table structure for table `tampildata`
--

CREATE TABLE `tampildata` (
  `id_tampil` int(8) NOT NULL,
  `no_faktur` int(11) NOT NULL,
  `no_plat` varchar(255) NOT NULL,
  `jenis_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `warna_mobil` varchar(255) NOT NULL,
  `waktu_masuk` timestamp NULL DEFAULT NULL,
  `hak_akses` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tampildata`
--

INSERT INTO `tampildata` (`id_tampil`, `no_faktur`, `no_plat`, `jenis_mobil`, `merk_mobil`, `warna_mobil`, `waktu_masuk`, `hak_akses`) VALUES
(1, 123, 'ba 125 bc', 'minibus', 'avanza', 'merah', NULL, 'user'),
(2, 567, 'ba 09 lq', 'truk', 'isuzu', 'putih', NULL, 'admin'),
(3, 123, 'ba 789', 'minibus', 'kijang', 'merah', NULL, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(8) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hak_akses` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `hak_akses`) VALUES
(10, 'afif01', '$2y$10$.kvTG/PDM14z5Spq8AzlzeeJ.I8OCCvjjdn5GPLe/8QiIiByk1a0S', 'afif1@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tampildata`
--
ALTER TABLE `tampildata`
  ADD PRIMARY KEY (`id_tampil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tampildata`
--
ALTER TABLE `tampildata`
  MODIFY `id_tampil` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
