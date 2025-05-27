-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2025 at 02:10 PM
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
-- Database: `pengaduan`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `judul_laporan` varchar(150) DEFAULT NULL,
  `isi_laporan` text DEFAULT NULL,
  `status` varchar(50) DEFAULT 'Belum Diproses'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `nama`, `judul_laporan`, `isi_laporan`, `status`) VALUES
(1, 'Ahmad Fauzi', 'Lampu Jalan Mati', 'Lampu jalan di RT 03 RW 05 sudah mati selama 1 minggu.', 'Belum Diproses'),
(2, 'Siti Nurhaliza', 'Sampah Menumpuk', 'Tempat pembuangan sampah penuh dan belum diangkut.', 'Diproses'),
(3, 'Budi Santoso', 'Jalan Berlubang', 'Jalan dekat sekolah berlubang dan membahayakan pengendara.', 'Selesai'),
(4, 'Dewi Lestari', 'Air PDAM Mati', 'Air mati sejak kemarin pagi di daerah saya.', 'Belum Diproses');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
