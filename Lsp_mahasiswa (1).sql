-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2017 at 05:50 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Lsp_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `jurusan_id` int(11) NOT NULL,
  `jurusan_nama` varchar(70) NOT NULL,
  `jurusan_status` varchar(20) NOT NULL,
  `userinput` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`jurusan_id`, `jurusan_nama`, `jurusan_status`, `userinput`) VALUES
(1, 'TI', 'aktif', 'admin'),
(3, 'IT', 'Aktif', 'admin'),
(4, 'SI', 'Aktif', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_krs`
--

CREATE TABLE `tbl_krs` (
  `krs_id` int(11) NOT NULL,
  `krs_semester` int(11) NOT NULL,
  `krs_mahasiswa_id` int(11) NOT NULL,
  `krs_makul_id` int(11) NOT NULL,
  `krs_nilai` varchar(12) DEFAULT NULL,
  `krs_status` varchar(20) NOT NULL,
  `userinput` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_krs`
--

INSERT INTO `tbl_krs` (`krs_id`, `krs_semester`, `krs_mahasiswa_id`, `krs_makul_id`, `krs_nilai`, `krs_status`, `userinput`) VALUES
(1, 2, 1278, 2, '90', 'Aktif', 'mahasiswa'),
(3, 4, 1237, 2, '100', 'Aktif', 'mahasiswa'),
(4, 5, 1238, 3, '85', 'Aktif', 'mahasiswa'),
(5, 1, 1235, 3, '86', 'Aktif', 'mahasiswa'),
(6, 2, 1241, 3, '78', 'Aktif', 'mahasiswa'),
(7, 2, 1243, 2, '100', 'Aktif', 'mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `mahasiswa_id` int(11) NOT NULL,
  `mahasiswa_nim` varchar(50) NOT NULL,
  `mahasiswa_jurusan_id` int(11) NOT NULL,
  `mahasiswa_nama` varchar(70) NOT NULL,
  `mahasiswa_tempat_lahir` varchar(50) NOT NULL,
  `mahasiswa_tgl_lahir` text NOT NULL,
  `mahasiswa_jekel` varchar(50) NOT NULL,
  `mahasiswa_alamat` text NOT NULL,
  `mahasiswa_password` text NOT NULL,
  `userinput` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`mahasiswa_id`, `mahasiswa_nim`, `mahasiswa_jurusan_id`, `mahasiswa_nama`, `mahasiswa_tempat_lahir`, `mahasiswa_tgl_lahir`, `mahasiswa_jekel`, `mahasiswa_alamat`, `mahasiswa_password`, `userinput`) VALUES
(1239, '9888', 1, 'Amanda azallia', 'Jakarta', '27/09/1999', 'P', 'Cawang', '$2y$10$8a54J9uu.9tl0ftrh8dY5uhhaj.gj33.LfH1PyslpkfhE4tdq/3Cy', 'admin'),
(1240, '9889', 1, 'Al Fatih', 'Jakarta', '29/09/1999', 'L', 'Bekasi', '$2y$10$8a54J9uu.9tl0ftrh8dY5uhhaj.gj33.LfH1PyslpkfhE4tdq/3Cy', 'admin'),
(1241, '9900', 4, 'Salman', 'Jakarta', '27/09/1999', 'L', 'JL.NUSA', '$2y$10$8a54J9uu.9tl0ftrh8dY5uhhaj.gj33.LfH1PyslpkfhE4tdq/3Cy', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_makul`
--

CREATE TABLE `tbl_makul` (
  `makul_id` int(11) NOT NULL,
  `makul_kode` varchar(20) NOT NULL,
  `makul_nama` varchar(50) NOT NULL,
  `makul_sks` int(50) NOT NULL,
  `makul_status` varchar(20) NOT NULL,
  `userinput` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_makul`
--

INSERT INTO `tbl_makul` (`makul_id`, `makul_kode`, `makul_nama`, `makul_sks`, `makul_status`, `userinput`) VALUES
(2, 'ASSDF', 'Pemrograman Web', 1, 'Aktif', 'admin'),
(3, 'ASSDG', 'Pemrograman Desktop', 2, 'Aktif', 'admin'),
(4, 'ASSDH', 'Pemrograman Mobile', 3, 'Aktif', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `userpass` text NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_telp` varchar(15) NOT NULL,
  `user_aktif` int(1) NOT NULL,
  `created_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `userpass`, `nama_lengkap`, `user_email`, `user_telp`, `user_aktif`, `created_at`) VALUES
(2, 'admin', '$2y$10$hIhvSzAjRiku5TLLu.iNZuetuCxh9A8YHQk32kMXZna99mzxtms9i', 'admin amanda', 'admin@amanda.com', '085770939393', 1, '2017-03-25 16:41:26'),
(3, 'mahasiswa', '$2y$10$8a54J9uu.9tl0ftrh8dY5uhhaj.gj33.LfH1PyslpkfhE4tdq/3Cy', 'mahasiswa amanda', 'mahasiswa@amanda.com', '085770939393', 2, '2017-03-25 16:43:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`jurusan_id`);

--
-- Indexes for table `tbl_krs`
--
ALTER TABLE `tbl_krs`
  ADD PRIMARY KEY (`krs_id`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`mahasiswa_id`);

--
-- Indexes for table `tbl_makul`
--
ALTER TABLE `tbl_makul`
  ADD PRIMARY KEY (`makul_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `jurusan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_krs`
--
ALTER TABLE `tbl_krs`
  MODIFY `krs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `mahasiswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1246;
--
-- AUTO_INCREMENT for table `tbl_makul`
--
ALTER TABLE `tbl_makul`
  MODIFY `makul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
