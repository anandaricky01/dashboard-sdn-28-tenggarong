-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 13, 2022 at 07:56 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data-sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `data-ayah`
--

CREATE TABLE `data-ayah` (
  `id` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nik_ayah` varchar(100) NOT NULL,
  `tempat_lahir_ayah` varchar(100) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `nohp_ayah` int(11) NOT NULL,
  `pendidikan_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `penghasilan_ayah` bigint(20) NOT NULL,
  `agama_ayah` varchar(100) NOT NULL,
  `status_ayah` varchar(100) NOT NULL,
  `alamat_ayah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data-diri-siswa`
--

CREATE TABLE `data-diri-siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(100) NOT NULL,
  `kewarganegaraan` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `jumlah_saudara` int(11) NOT NULL,
  `jalan` varchar(100) NOT NULL,
  `rt` varchar(100) NOT NULL,
  `rw` varchar(100) NOT NULL,
  `kodepos` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kota_kab` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data-ibu`
--

CREATE TABLE `data-ibu` (
  `id` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nik_ibu` varchar(100) NOT NULL,
  `tempat_lahir_ibu` varchar(100) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `nohp_ibu` int(11) NOT NULL,
  `pendidikan_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `penghasilan_ibu` bigint(20) NOT NULL,
  `agama_ibu` varchar(100) NOT NULL,
  `status_ibu` varchar(100) NOT NULL,
  `alamat_ibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data-utama-siswa`
--

CREATE TABLE `data-utama-siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `tahun_masuk` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data-wali`
--

CREATE TABLE `data-wali` (
  `id` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `nik_wali` varchar(100) NOT NULL,
  `tempat_lahir_wali` varchar(100) NOT NULL,
  `tanggal_lahir_wali` date NOT NULL,
  `nohp_wali` int(11) NOT NULL,
  `pendidikan_wali` varchar(100) NOT NULL,
  `pekerjaan_wali` varchar(100) NOT NULL,
  `penghasilan_wali` bigint(20) NOT NULL,
  `agama_wali` varchar(100) NOT NULL,
  `status_wali` varchar(100) NOT NULL,
  `alamat_wali` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foto-siswa`
--

CREATE TABLE `foto-siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data-ayah`
--
ALTER TABLE `data-ayah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`),
  ADD UNIQUE KEY `nik_ayah` (`nik_ayah`);

--
-- Indexes for table `data-diri-siswa`
--
ALTER TABLE `data-diri-siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`,`nis`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `data-ibu`
--
ALTER TABLE `data-ibu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`),
  ADD UNIQUE KEY `nik_ibu` (`nik_ibu`);

--
-- Indexes for table `data-utama-siswa`
--
ALTER TABLE `data-utama-siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`,`nisn`),
  ADD KEY `nis_2` (`nis`);

--
-- Indexes for table `data-wali`
--
ALTER TABLE `data-wali`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`),
  ADD UNIQUE KEY `nik_wali` (`nik_wali`);

--
-- Indexes for table `foto-siswa`
--
ALTER TABLE `foto-siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data-ayah`
--
ALTER TABLE `data-ayah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data-diri-siswa`
--
ALTER TABLE `data-diri-siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data-ibu`
--
ALTER TABLE `data-ibu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data-utama-siswa`
--
ALTER TABLE `data-utama-siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data-wali`
--
ALTER TABLE `data-wali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foto-siswa`
--
ALTER TABLE `foto-siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data-ayah`
--
ALTER TABLE `data-ayah`
  ADD CONSTRAINT `data-ayah_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `data-utama-siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data-diri-siswa`
--
ALTER TABLE `data-diri-siswa`
  ADD CONSTRAINT `data-diri-siswa_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `data-utama-siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data-ibu`
--
ALTER TABLE `data-ibu`
  ADD CONSTRAINT `data-ibu_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `data-utama-siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data-wali`
--
ALTER TABLE `data-wali`
  ADD CONSTRAINT `data-wali_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `data-utama-siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `foto-siswa`
--
ALTER TABLE `foto-siswa`
  ADD CONSTRAINT `foto-siswa_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `data-utama-siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
