-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 03, 2020 at 07:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pejabat`
--

-- --------------------------------------------------------

--
-- Table structure for table `pejabat`
--

CREATE TABLE `pejabat` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `status` varchar(25) DEFAULT NULL,
  `tanda_tangan` varchar(100) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pejabat`
--

INSERT INTO `pejabat` (`id`, `nama`, `nip`, `jabatan`, `status`, `tanda_tangan`, `password`, `username`) VALUES
(1, 'Wahju Rudianto, S.Pi., M.Si.', '19691016 199403 1 001', 'Kepala Balai Besar', 'Aktif', '1.png', '202cb962ac59075b964b07152d234b70', 'wahju'),
(2, 'Wasja, S.H.', '19650106 199803 1 004', 'Kepala Bagian Tata Usaha', 'Aktif', '', '202cb962ac59075b964b07152d234b70', NULL),
(28, 'Buana Darmansyah, S.Hut.T.', '19751013 199403 1 001', 'Kepala Bidang Teknis Konservasi', 'Tidak Aktif', '', NULL, NULL),
(29, 'Ir. V. Diah Qurani Kristina, M.Si.', '19671216 199403 2 001', 'Kepala Bidang PTN Wil. I Cianjur', 'Aktif', '29.jpg', NULL, NULL),
(30, 'Ir. Syahrial Anuar, M.M.', '19630901 198903 1 005', 'Kepala Bidang PTN Wil. II Sukabumi', 'Aktif', '30.jpg', NULL, NULL),
(31, 'Badiah, S.Si., M.Si.', '19710110 199703 2 005', 'Kepala Bidang PTN Wil. III Bogor', 'Aktif', '', NULL, NULL),
(32, 'Johanes Wiharisno, S.Hut., M.P.', '19770906 200312 1 001', 'Kepala Seksi Pemanfaatan dan Pelayanan', 'Aktif', '32.jpg', NULL, NULL),
(50, 'Agung ', '123456789', 'Kepala TIM IT', 'Tidak Aktif', '', '202cb962ac59075b964b07152d234b70', 'e59cd3ce33a68f536c19fedb82a7936f'),
(34, 'Drs. Antong Hartadi', '19610913 198903 1 002', 'Kepala Sub Bagian Umum', 'Aktif', '', NULL, NULL),
(35, 'Hidayat Santosa, B.ScF.', '19620528 198903 1 004', 'Kepala Sub Bagian Data, Evaluasi dan Humas', 'Tidak Aktif', '', NULL, NULL),
(36, 'Heri Suheri, S.Hut., M.Sc.', '19770407 200501 1 005', 'Kepala Sub Bagian Program dan Kerjasama', 'Tidak Aktif', '', NULL, NULL),
(37, 'Agus Arianto, S.Hut.', '19730821 200003 1 003', 'Kepala Seksi PTN Wil. I Cibodas', 'Aktif', 'agus.jpg', NULL, NULL),
(38, 'Bambang Jaya Supena, S.Hut.', '19640416 198602 1 001', 'Kepala Seksi PTN Wil. II Gedeh', 'Tidak Aktif', '', NULL, NULL),
(39, 'Lucky Wahyu Muslihat, S.Hut.', '19611013 198603 1 001', 'Kepala Seksi PTN Wil. III Selabintana', 'Aktif', '39.jpg', NULL, NULL),
(40, 'Sudjoko Mustadjab, S.Hut.', '19641208 198603 1 004', 'Kepala Seksi PTN Wil. IV Situgunung', 'Tidak Aktif', '', NULL, NULL),
(41, 'Amru Ikhwansyah, S.Pd.', '19730525 199903 1 003', 'Kepala Seksi PTN Wil. V Bodogol', 'Tidak Aktif', '', NULL, NULL),
(42, 'Bambang Mulyawan, S.H.', '19740920 199903 1 005', 'Kepala Seksi PTN Wil. VI Tapos', 'Aktif', '', NULL, NULL),
(43, 'Zainuddin', '19611112 198903 1 006', 'Petugas Perizinan Pendakian', 'Aktif', 'zainuddin.jpg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pejabat`
--
ALTER TABLE `pejabat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `nip` (`nip`),
  ADD KEY `pejabat` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pejabat`
--
ALTER TABLE `pejabat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
