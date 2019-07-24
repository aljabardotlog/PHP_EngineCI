-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 24, 2019 at 09:12 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bengkel_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `adl_user`
--

CREATE TABLE `adl_user` (
  `kd_user` int(30) NOT NULL,
  `kd_user_group` int(30) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `nama` text,
  `login` datetime NOT NULL,
  `logout` datetime NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adl_user`
--

INSERT INTO `adl_user` (`kd_user`, `kd_user_group`, `username`, `password`, `nama`, `login`, `logout`, `status`) VALUES
(1, 1, 'admin@admin.com', '64e1b8d34f425d19e1ee2ea7236d3028', 'Administrator', '2018-07-27 00:00:00', '2018-07-27 00:00:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `adl_user_group`
--

CREATE TABLE `adl_user_group` (
  `kd_user_group` int(30) NOT NULL,
  `nm_group` varchar(50) NOT NULL,
  `kt_group` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adl_user_group`
--

INSERT INTO `adl_user_group` (`kd_user_group`, `nm_group`, `kt_group`) VALUES
(1, 'Seper Admin', 'Super Administrator'),
(2, 'Admin', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `master_lemari`
--

CREATE TABLE `master_lemari` (
  `kd_lemari` int(30) NOT NULL,
  `nm_lemari` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_lemari`
--

INSERT INTO `master_lemari` (`kd_lemari`, `nm_lemari`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `master_mekanik`
--

CREATE TABLE `master_mekanik` (
  `kd_mekanik` int(30) NOT NULL,
  `nm_mekanik` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_mekanik`
--

INSERT INTO `master_mekanik` (`kd_mekanik`, `nm_mekanik`, `alamat`, `telp`, `ket`) VALUES
(131312, 'Aljabarr', 'Antangg', '0612388', 'Tampan Memangg');

-- --------------------------------------------------------

--
-- Table structure for table `master_satuan`
--

CREATE TABLE `master_satuan` (
  `kd_satuan` int(30) NOT NULL,
  `satuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_satuan`
--

INSERT INTO `master_satuan` (`kd_satuan`, `satuan`) VALUES
(1, 'Biji');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `kd_menu` int(30) NOT NULL,
  `group_menu` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `nickname` varchar(3) NOT NULL,
  `class` text NOT NULL,
  `icon` text NOT NULL,
  `posisi` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`kd_menu`, `group_menu`, `name`, `nickname`, `class`, `icon`, `posisi`) VALUES
(1, 'a', 'Dashboard', 'GNR', 'Dashboard', 'stir.png', 1),
(2, 'a', 'Setting', 'USR', '0', 'tandaseru.png', 100),
(3, 'a', 'Master', 'MTR', '0', 'ban.png', 2),
(4, 'a', 'Transaksi', 'TNI', '0', 'kilometer.png', 3),
(5, 'a', 'Keuangan', 'KAN', '0', 'keran.png', 4),
(6, 'a', 'Grafik', 'GFK', '0', 'montir.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `menu_sub`
--

CREATE TABLE `menu_sub` (
  `kd_menu_sub` int(30) NOT NULL,
  `kd_menu` int(30) NOT NULL,
  `name` text NOT NULL,
  `class` text NOT NULL,
  `posisi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_sub`
--

INSERT INTO `menu_sub` (`kd_menu_sub`, `kd_menu`, `name`, `class`, `posisi`) VALUES
(1, 2, 'Manage Users', 'Users', 1),
(2, 3, 'Satuan', 'Satuan', 1),
(3, 3, 'Mekanik', 'Mekanik', 2),
(4, 3, 'Barang', 'Barang', 10),
(5, 3, 'Lemari', 'Lemari', 3),
(6, 2, 'Toko', 'Toko', 2),
(7, 4, 'Umum', 'Umum', 1),
(8, 4, 'Khusus', 'Khusus', 3),
(9, 5, 'Masuk', 'Masuk', 1),
(10, 5, 'Keluar', 'Keluar', 2),
(11, 5, 'Ongkos Kerja', 'Ongkos_Kerja', 3),
(12, 6, 'Pendapatan', 'Pendapatan', 1),
(13, 5, 'Total', 'Total', 4),
(14, 4, 'Kredit', 'Kredit', 2);

-- --------------------------------------------------------

--
-- Table structure for table `menu_user`
--

CREATE TABLE `menu_user` (
  `kd_menu_user` int(30) NOT NULL,
  `kd_user` int(30) NOT NULL,
  `kd_menu` int(30) NOT NULL,
  `kd_menu_sub` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_user`
--

INSERT INTO `menu_user` (`kd_menu_user`, `kd_user`, `kd_menu`, `kd_menu_sub`) VALUES
(181, 11, 1, 0),
(182, 11, 4, 3),
(183, 11, 4, 4),
(184, 11, 4, 5),
(185, 11, 4, 6),
(186, 11, 4, 7),
(187, 11, 4, 8),
(188, 11, 4, 9),
(189, 11, 4, 10),
(190, 11, 4, 12),
(191, 11, 5, 11),
(192, 11, 5, 13),
(193, 11, 5, 14),
(194, 11, 20, 21),
(195, 11, 21, 22),
(939, 1, 1, 0),
(940, 1, 2, 1),
(941, 1, 2, 6),
(942, 1, 3, 2),
(943, 1, 3, 3),
(944, 1, 3, 4),
(945, 1, 3, 5),
(946, 1, 4, 7),
(947, 1, 4, 8),
(948, 1, 4, 14),
(949, 1, 5, 9),
(950, 1, 5, 10),
(951, 1, 5, 11),
(952, 1, 5, 13),
(953, 1, 6, 12);

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `kd_toko` int(30) NOT NULL,
  `nm_toko` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`kd_toko`, `nm_toko`, `alamat`, `telp`) VALUES
(1, 'Bengkel A', 'Antang', '142341');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adl_user`
--
ALTER TABLE `adl_user`
  ADD PRIMARY KEY (`kd_user`) USING BTREE;

--
-- Indexes for table `adl_user_group`
--
ALTER TABLE `adl_user_group`
  ADD PRIMARY KEY (`kd_user_group`) USING BTREE,
  ADD KEY `kd` (`kd_user_group`) USING BTREE,
  ADD KEY `group` (`nm_group`) USING BTREE;

--
-- Indexes for table `master_lemari`
--
ALTER TABLE `master_lemari`
  ADD PRIMARY KEY (`kd_lemari`);

--
-- Indexes for table `master_mekanik`
--
ALTER TABLE `master_mekanik`
  ADD PRIMARY KEY (`kd_mekanik`);

--
-- Indexes for table `master_satuan`
--
ALTER TABLE `master_satuan`
  ADD PRIMARY KEY (`kd_satuan`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`kd_menu`) USING BTREE;

--
-- Indexes for table `menu_sub`
--
ALTER TABLE `menu_sub`
  ADD PRIMARY KEY (`kd_menu_sub`) USING BTREE;

--
-- Indexes for table `menu_user`
--
ALTER TABLE `menu_user`
  ADD PRIMARY KEY (`kd_menu_user`) USING BTREE;

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`kd_toko`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adl_user`
--
ALTER TABLE `adl_user`
  MODIFY `kd_user` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adl_user_group`
--
ALTER TABLE `adl_user_group`
  MODIFY `kd_user_group` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_lemari`
--
ALTER TABLE `master_lemari`
  MODIFY `kd_lemari` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `master_satuan`
--
ALTER TABLE `master_satuan`
  MODIFY `kd_satuan` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `kd_menu` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menu_sub`
--
ALTER TABLE `menu_sub`
  MODIFY `kd_menu_sub` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menu_user`
--
ALTER TABLE `menu_user`
  MODIFY `kd_menu_user` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=954;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `kd_toko` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
