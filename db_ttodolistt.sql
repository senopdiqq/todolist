-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 06:12 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tanah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_desa`
--

CREATE TABLE `tb_desa` (
  `idDesa` int(11) NOT NULL,
  `idKecamatan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `statusnya` enum('desa','kelurahan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `idKecamatan` int(11) NOT NULL,
  `nama_kecamatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`idKecamatan`, `nama_kecamatan`) VALUES
(4, 'Belajar Javascriptt'),
(5, 'Membuat Halaman Login'),
(6, 'Membuat Layout Responsive'),
(7, 'Membuat Backend'),
(8, 'Membuat fungsi Else Iff');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemohon`
--

CREATE TABLE `tb_pemohon` (
  `idPemohon` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `status_pemohon` enum('belum_terverifikasi','revisi','terverifikasi') NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pemohon`
--

INSERT INTO `tb_pemohon` (`idPemohon`, `nama`, `alamat`, `jenis_kelamin`, `status_pemohon`, `keterangan`, `created_at`, `updated_at`) VALUES
(0, 'RadiqArbi', 'Malang', 'Pria', 'terverifikasi', NULL, '2022-06-20 12:24:54', '2022-06-20 12:24:54'),
(1, 'Test', 'Malang', 'Pria', 'belum_terverifikasi', NULL, '2021-03-08 13:24:01', '2021-03-08 13:24:01'),
(2, 'Bagas', 'Malang', 'Pria', 'terverifikasi', NULL, '2021-03-08 14:12:31', '2021-03-08 14:12:31'),
(3, 'Aminulloh', 'Malang', 'Pria', 'terverifikasi', NULL, '2021-03-08 14:42:25', '2021-03-08 14:42:25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_permohonan`
--

CREATE TABLE `tb_permohonan` (
  `idPermohonan` int(11) NOT NULL,
  `idPemohon` int(11) NOT NULL,
  `nib` bigint(11) NOT NULL,
  `status_permohonan` enum('belum_terverifikasi','revisi','terverifikasi') NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `nomor_berkas` bigint(11) NOT NULL,
  `scan_berkas` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_permohonan`
--

INSERT INTO `tb_permohonan` (`idPermohonan`, `idPemohon`, `nib`, `status_permohonan`, `keterangan`, `nomor_berkas`, `scan_berkas`, `created_at`, `updated_at`) VALUES
(1, 2, 54274715904, 'belum_terverifikasi', NULL, 38510002936, '32_WiradarmaNurmagikaBagaskara_XIIRPL1.pdf', '2021-03-14 12:35:40', '2021-03-14 12:35:40');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil_ptsl`
--

CREATE TABLE `tb_profil_ptsl` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profil_ptsl`
--

INSERT INTO `tb_profil_ptsl` (`id`, `foto`, `nama`) VALUES
(1, 'logo_atrpbn.png', 'PTSL Kabupaten Malang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `idRole` int(11) NOT NULL,
  `nama_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`idRole`, `nama_role`) VALUES
(1, 'Administrator'),
(2, 'Petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tanah`
--

CREATE TABLE `tb_tanah` (
  `nib` bigint(11) NOT NULL,
  `idPemohon` int(11) NOT NULL,
  `idDesa` int(11) NOT NULL,
  `luas_tanah` varchar(50) NOT NULL,
  `letak_tanah` varchar(255) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tanah`
--

INSERT INTO `tb_tanah` (`nib`, `idPemohon`, `idDesa`, `luas_tanah`, `letak_tanah`, `rt`, `rw`, `created_at`, `updated_at`) VALUES
(2147483647, 3, 4, '3500.50', 'Malang', '04', '02', '2021-03-11 06:26:20', '2021-03-11 06:26:20'),
(36041228104, 1, 14, '4000', 'Malang', '07', '03', '2021-03-11 07:21:15', '2021-03-11 07:21:15'),
(54274715904, 2, 310, '5000.30', 'Malang Raya', '04', '01', '2021-03-12 16:47:57', '2021-03-12 16:47:57'),
(89435115331, 2, 310, '4000.50', 'Malang', '04', '02', '2021-03-11 11:23:58', '2021-03-11 11:23:58');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `idUser` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `idRole` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`idUser`, `nama`, `alamat`, `email`, `no_hp`, `jenis_kelamin`, `username`, `password`, `idRole`, `created_at`, `updated_at`) VALUES
(1, 'Yudas', 'Kepanjen', 'yudasmalabi@gmail.com', '08135915835', 'Pria', 'admin', '$2y$10$dfnIcPLNsCBwTLiZ4BojnePurZVP.uGquCUjb0InERTqTxdEi8u5u', 1, '2021-03-06 17:53:07', '2021-03-06 17:53:07'),
(2, 'BikinWeb', 'Urgent', 'bagas@gmail.com', '081359158523', 'Pria', 'petugas', '$2y$10$wYDu9vbCi5feF/HnCwJ7ReFCimgwzAabKhNFaPcDuLQJ2kfsFzHWi', 2, '2021-03-07 07:13:48', '2021-03-07 07:13:48'),
(3, 'Aminulloh', 'Malang', 'amin@gmail.com', '081359127212', 'Pria', 'aminulloh', '$2y$10$LdOAs5eTSUlYJL1kG7iIIu87evWD/9NQSBajyu7niecGaYh9HWdfG', 2, '2021-03-07 07:15:45', '2021-03-07 07:15:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_desa`
--
ALTER TABLE `tb_desa`
  ADD PRIMARY KEY (`idDesa`),
  ADD KEY `idKecamatan` (`idKecamatan`);

--
-- Indexes for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`idKecamatan`);

--
-- Indexes for table `tb_pemohon`
--
ALTER TABLE `tb_pemohon`
  ADD PRIMARY KEY (`idPemohon`);

--
-- Indexes for table `tb_permohonan`
--
ALTER TABLE `tb_permohonan`
  ADD PRIMARY KEY (`idPermohonan`),
  ADD KEY `idPemohon` (`idPemohon`),
  ADD KEY `nib` (`nib`);

--
-- Indexes for table `tb_profil_ptsl`
--
ALTER TABLE `tb_profil_ptsl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`idRole`);

--
-- Indexes for table `tb_tanah`
--
ALTER TABLE `tb_tanah`
  ADD PRIMARY KEY (`nib`),
  ADD KEY `idPemohon` (`idPemohon`),
  ADD KEY `idDesa` (`idDesa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `idKecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
