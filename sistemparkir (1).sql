-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 11:48 AM
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
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status` varchar(255) NOT NULL,
  `waktu_keluar` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `no_faktur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tampildata`
--

CREATE TABLE `tampildata` (
  `id_tampil` int(8) NOT NULL,
  `no_faktur` int(11) DEFAULT NULL,
  `no_plat` varchar(255) DEFAULT NULL,
  `jenis_mobil` varchar(255) DEFAULT NULL,
  `merk_mobil` varchar(255) DEFAULT NULL,
  `warna_mobil` varchar(255) DEFAULT NULL,
  `waktu_masuk` timestamp NULL DEFAULT current_timestamp(),
  `hak_akses` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `waktu_keluar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tampildata`
--

INSERT INTO `tampildata` (`id_tampil`, `no_faktur`, `no_plat`, `jenis_mobil`, `merk_mobil`, `warna_mobil`, `waktu_masuk`, `hak_akses`, `status`, `waktu_keluar`) VALUES
(7, 123, 'ba 86', 'minubus', 'avanza', 'hitam', '2020-03-04 10:13:29', NULL, '', ''),
(8, 567, 'ba 879', 'truk', 'colt', 'kuning', '2020-03-10 04:49:52', NULL, '', ''),
(9, 5674, 'ba 879 lt', 'minubus', 'rush', 'hitam', '2020-03-10 04:50:26', NULL, '', ''),
(11, 123, 'ba 86', 'minubus', 'avanza', 'hitam', '2020-03-10 04:02:20', NULL, '', ''),
(12, 123, 'ba 879', 'minubus', 'colt', 'kuning', '2020-03-10 10:03:50', NULL, '', ''),
(13, 5674, 'ba 879', 'minubus', 'avanza', 'hitam', '2020-03-10 10:06:56', NULL, 'masuk', '');

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
(10, 'afif01', '$2y$10$.kvTG/PDM14z5Spq8AzlzeeJ.I8OCCvjjdn5GPLe/8QiIiByk1a0S', 'afif1@gmail.com', 'admin'),
(11, 'afif00', '$2y$10$UjATmIHePFgOvPzMEgQDre8ptASHZ8BElnNE2bZA7Rj6B9dXprjrG', 'afif28@gmail.com', 'petugas'),
(12, 'afif888', '$2y$10$ind2lWidxJVxxc1PEtCVnOn25jpX.fZscsqRjNifwwgOf6734/rbq', '88@ymail.com', 'petugas'),
(13, 'abcde', '$2y$10$w9Pr3kj0l7wSnc2zyqpvKuZDrxRXqCtNREUUqx9ft/JeA73EFPap2', 'afif112@gmail.com', 'petugas');

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
  MODIFY `id_tampil` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
