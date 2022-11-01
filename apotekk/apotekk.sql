-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 06:09 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotekk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_obat`
--

INSERT INTO `tbl_obat` (`id`, `nama`, `kategori`, `harga`, `note`) VALUES
(1, 'Paracetamol', 'analgesik', 28000, 'Tanpa resep dokter, Obat analgesik dan antipiretik yang banyak dipakai untuk meredakan sakit kepala ringan akut, nyeri ringan hingga sedang, serta demam.'),
(2, 'Komik Herbal', 'obat herbal', 80000, 'Obat yang membantu meredakan batuk berdahak. \r\nKategori : flu dan batuk'),
(3, 'Imboost Tablet', 'suplemen', 78000, 'Suplemen yang bermanfaat untuk menjaga daya tahan tubuh'),
(4, 'Amplodipin', 'antibiotik', 48000, 'Obat Resep. Menurunkan tekanan darah pada kondisi hipertensi.'),
(7, 'Ambroxol', 'mukolotik', 2000, 'Obat pemecah dahak'),
(10, 'boderx', 'gatau', 4500, 'obat sakit kepala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
