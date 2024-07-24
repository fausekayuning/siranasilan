-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 05:32 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siranasilan`
--

-- --------------------------------------------------------

--
-- Table structure for table `pekerja`
--

CREATE TABLE `pekerja` (
  `id_petani` int(11) NOT NULL,
  `nama_petani` varchar(255) NOT NULL,
  `posisi_jabatan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat_petani` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pekerja`
--

INSERT INTO `pekerja` (`id_petani`, `nama_petani`, `posisi_jabatan`, `jenis_kelamin`, `alamat_petani`) VALUES
(1, 'Ahmad_Udin', 'sortir', 'laki-laki', 'jl manggis'),
(2, 'Siti_Lestari', 'sortir_hasil', 'wanita', 'jl_markisa'),
(3, 'Burhanuddin', 'pembibitan', 'pria', 'jl_jeruk'),
(4, 'Saiful_Malik', 'pengawasan_pertumbuhan', 'pria', 'jl_markisa'),
(5, 'Hachrul_Amrin', 'pembibitan', 'pria', 'jl_rambutan'),
(6, 'Habibur', 'pembibitan', 'pria', 'jl_markisa'),
(7, 'Aminah', 'sortir_hasil', 'wanita', 'jl_jeruk'),
(8, 'Hajar', 'sortir_hasil', 'wanita', 'jl_markisa'),
(9, 'Toyib', 'sortir_hasil', 'pria', 'jl_rambutan'),
(10, 'Samsudin', 'sortir_hasil', 'pria', 'jl_jeruk'),
(11, 'ayam', 'sapi', 'kuda', 'domba'),
(12, 'arga', 'ketua kelas', 'perempuan', 'krian'),
(13, 'arga', 'presiden', 'perempuan', 'krian'),
(14, 'sarini', 'sapi', 'laki-laki', 'jl manggis'),
(15, 'ayam', 'sapi', 'laki-laki', 'kuda'),
(16, 'poco', 'tanam', 'laki-laki', 'rambutan'),
(17, 'wedf', 'wesdf', 'laki-laki', '3wed'),
(18, 'tgrdgdsg', 'erfgdbfdbd', 'laki-laki', 'tngdbfv'),
(21, 'bbbbbbb', 'kjdcoljdocjd', 'laki-laki', 'djhkdshf'),
(22, 'dygeuigf', 'eufyioeyfoe', 'laki-laki', 'fkieyofeo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pekerja`
--
ALTER TABLE `pekerja`
  ADD PRIMARY KEY (`id_petani`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pekerja`
--
ALTER TABLE `pekerja`
  MODIFY `id_petani` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
