-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2026 at 06:05 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan_pbo_trpl1b_tifanakhmadalfarikh`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_tiket`
--

CREATE TABLE `tabel_tiket` (
  `id_tiket` int NOT NULL,
  `nama_film` varchar(150) NOT NULL,
  `jadwal_tayang` datetime NOT NULL,
  `jumlah_kursi` int NOT NULL,
  `harga_dasar_tiket` decimal(10,2) NOT NULL,
  `jenis_studio` enum('Regular','IMAX','Velvet') NOT NULL,
  `tipe_audio` varchar(50) DEFAULT NULL,
  `lokasi_baris` varchar(50) DEFAULT NULL,
  `kacamata_3d_id` varchar(50) DEFAULT NULL,
  `efek_gerak_fitur` varchar(50) DEFAULT NULL,
  `bantal_selimut_pack` tinyint(1) DEFAULT NULL,
  `layanan_butler` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_tiket`
--

INSERT INTO `tabel_tiket` (`id_tiket`, `nama_film`, `jadwal_tayang`, `jumlah_kursi`, `harga_dasar_tiket`, `jenis_studio`, `tipe_audio`, `lokasi_baris`, `kacamata_3d_id`, `efek_gerak_fitur`, `bantal_selimut_pack`, `layanan_butler`) VALUES
(1, 'Godzilla x Kong', '2026-06-20 13:00:00', 100, 50000.00, 'Regular', 'Dolby Atmos', 'A-J', NULL, NULL, NULL, NULL),
(2, 'Godzilla x Kong', '2026-06-20 15:30:00', 100, 50000.00, 'Regular', 'Dolby Atmos', 'A-J', NULL, NULL, NULL, NULL),
(3, 'Dune: Part Two', '2026-06-21 12:00:00', 120, 50000.00, 'Regular', 'Dolby Surround', 'A-L', NULL, NULL, NULL, NULL),
(4, 'Dune: Part Two', '2026-06-21 15:00:00', 120, 50000.00, 'Regular', 'Dolby Surround', 'A-L', NULL, NULL, NULL, NULL),
(5, 'Inside Out 2', '2026-06-22 10:00:00', 80, 45000.00, 'Regular', 'Standard', 'A-H', NULL, NULL, NULL, NULL),
(6, 'Inside Out 2', '2026-06-22 13:00:00', 80, 45000.00, 'Regular', 'Standard', 'A-H', NULL, NULL, NULL, NULL),
(7, 'Agak Laen', '2026-06-23 19:00:00', 150, 40000.00, 'Regular', 'Standard', 'A-O', NULL, NULL, NULL, NULL),
(8, 'Godzilla x Kong', '2026-06-20 14:00:00', 250, 100000.00, 'IMAX', 'IMAX 12-Track', 'A-M', 'GLS-001', 'Getaran Kursi', NULL, NULL),
(9, 'Godzilla x Kong', '2026-06-20 17:00:00', 250, 100000.00, 'IMAX', 'IMAX 12-Track', 'A-M', 'GLS-002', 'Getaran Kursi', NULL, NULL),
(10, 'Dune: Part Two', '2026-06-21 13:00:00', 300, 120000.00, 'IMAX', 'IMAX Laser', 'A-P', NULL, 'Seat Shaker', NULL, NULL),
(11, 'Dune: Part Two', '2026-06-21 16:30:00', 300, 120000.00, 'IMAX', 'IMAX Laser', 'A-P', NULL, 'Seat Shaker', NULL, NULL),
(12, 'Dune: Part Two', '2026-06-21 20:00:00', 300, 120000.00, 'IMAX', 'IMAX Laser', 'A-P', NULL, 'Seat Shaker', NULL, NULL),
(13, 'Oppenheimer', '2026-06-22 18:00:00', 200, 110000.00, 'IMAX', 'IMAX 70mm', 'A-K', NULL, NULL, NULL, NULL),
(14, 'Oppenheimer', '2026-06-22 21:30:00', 200, 110000.00, 'IMAX', 'IMAX 70mm', 'A-K', NULL, NULL, NULL, NULL),
(15, 'Dune: Part Two', '2026-06-20 19:00:00', 40, 200000.00, 'Velvet', 'Dolby Atmos', 'Bed A-D', NULL, NULL, 1, 1),
(16, 'Dune: Part Two', '2026-06-20 22:30:00', 40, 200000.00, 'Velvet', 'Dolby Atmos', 'Bed A-D', NULL, NULL, 1, 1),
(17, 'Kingdom of the Planet of the Apes', '2026-06-21 18:00:00', 30, 250000.00, 'Velvet', 'Dolby 7.1', 'Bed A-C', NULL, NULL, 1, 1),
(18, 'Kingdom of the Planet of the Apes', '2026-06-21 21:00:00', 30, 250000.00, 'Velvet', 'Dolby 7.1', 'Bed A-C', NULL, NULL, 1, 1),
(19, 'Bad Boys: Ride or Die', '2026-06-22 20:00:00', 50, 220000.00, 'Velvet', 'Dolby Atmos', 'Bed A-E', NULL, NULL, 1, 1),
(20, 'Bad Boys: Ride or Die', '2026-06-23 19:30:00', 50, 220000.00, 'Velvet', 'Dolby Atmos', 'Bed A-E', NULL, NULL, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  MODIFY `id_tiket` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
