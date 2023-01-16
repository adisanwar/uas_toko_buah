-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2023 at 04:38 PM
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
-- Database: `uas_toko_buah`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_buah`
--

CREATE TABLE `data_buah` (
  `id` int(5) NOT NULL,
  `Kodebuah` varchar(10) NOT NULL,
  `Namabuah` varchar(25) NOT NULL,
  `Hargabuah` double NOT NULL,
  `Jenisbuah` varchar(10) NOT NULL,
  `Readystock` int(1) NOT NULL,
  `gambarbuah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_buah`
--

INSERT INTO `data_buah` (`id`, `Kodebuah`, `Namabuah`, `Hargabuah`, `Jenisbuah`, `Readystock`, `gambarbuah`) VALUES
(1, 'FRT-001', 'Apel', 20000, 'import', 1, 'apel.png'),
(2, 'FRT-002', 'Jeruk', 10000, 'lokal', 1, 'jeruk.png'),
(3, 'FRT-003', 'Mangga', 15000, 'lokal', 0, 'mangga.png'),
(4, 'FRT-004', 'Anggur', 25000, 'import', 1, 'anggur.png'),
(5, 'FRT-005', 'Salak', 8000, 'lokal', 0, 'salak.png'),
(6, 'FRT-006', 'Durian', 6500, 'lokal', 1, 'durian.png');

-- --------------------------------------------------------

--
-- Table structure for table `kontak_kami`
--

CREATE TABLE `kontak_kami` (
  `id` int(5) NOT NULL,
  `Tanggalkirim` date NOT NULL,
  `namapengirim` varchar(50) NOT NULL,
  `emailpengirim` varchar(50) NOT NULL,
  `Subjekpesan` varchar(255) NOT NULL,
  `Isipesan` text NOT NULL,
  `kategoripesan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(5) NOT NULL,
  `Nmlengkap` varchar(100) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Jnskelamin` varchar(5) NOT NULL,
  `Provinsi` varchar(50) NOT NULL,
  `Alamat` text NOT NULL,
  `Kodepos` int(6) NOT NULL,
  `Nohp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_buah`
--
ALTER TABLE `data_buah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak_kami`
--
ALTER TABLE `kontak_kami`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_buah`
--
ALTER TABLE `data_buah`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kontak_kami`
--
ALTER TABLE `kontak_kami`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
