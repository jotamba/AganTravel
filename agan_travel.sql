-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 04:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agan_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `total_harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `id_user`, `kode`, `asal`, `tujuan`, `tanggal`, `waktu`, `jumlah`, `harga`, `total_harga`) VALUES
(2, 2, 'Q999', 'Yogyakarta', 'Jakarta', 'Rabu, 20 Oktober 2021', '12.00 - 13.10', 4, 2000000, 8000000),
(3, 2, 'P086', 'Pekanbaru', 'Yogyakarta', 'Kamis, 21 Oktober 2021', '08:40 - 10:55', 3, 1300000, 3900000);

-- --------------------------------------------------------

--
-- Table structure for table `penerbangan`
--

CREATE TABLE `penerbangan` (
  `id` int(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penerbangan`
--

INSERT INTO `penerbangan` (`id`, `kode`, `asal`, `tujuan`, `tanggal`, `waktu`, `harga`) VALUES
(1, 'P200', 'Pekanbaru', 'Yogyakarta', 'Rabu, 20 Oktober 2021', '07:20 - 09:20', 1800000),
(2, 'P086', 'Pekanbaru', 'Yogyakarta', 'Kamis, 21 Oktober 2021', '08:40 - 10:55', 1300000),
(3, 'Q999', 'Yogyakarta', 'Jakarta', 'Rabu, 20 Oktober 2021', '12.00 - 13.10', 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `noTelepon` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isVerified` tinyint(1) NOT NULL,
  `verif_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `email`, `noTelepon`, `password`, `isVerified`, `verif_code`) VALUES
(3, 'test2', 'meta2', 'tfadriangawa@gmail.com', '081081081', '$2y$10$cCN/9g0gGJdVuFJGTYWFm.itBLIQHiNtBEMfrIQn3glaMBJ7hioty', 1, 'adbdf9392ae08611571ca4fe76e0b8cf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerbangan`
--
ALTER TABLE `penerbangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penerbangan`
--
ALTER TABLE `penerbangan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
