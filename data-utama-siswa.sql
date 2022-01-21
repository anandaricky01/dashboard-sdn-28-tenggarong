-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2022 pada 19.01
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

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
-- Struktur dari tabel `data-utama-siswa`
--

CREATE TABLE `data-utama-siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `tahun_masuk` year(4) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data-utama-siswa`
--

INSERT INTO `data-utama-siswa` (`id`, `nama`, `nis`, `nisn`, `kelas`, `tahun_masuk`, `jenis_kelamin`) VALUES
(1, 'muhammad ibnu', '25132', '54213750', '5', 2018, 'L'),
(3, 'achmad bambang', '25141', '48319413', '2', 2021, 'L'),
(4, 'satria dewangga', '25636', '52749104', '4', 2020, 'L'),
(5, 'leonardo zaky putra', '25481', '54194021', '6', 2017, 'L'),
(6, 'emmanuel barbatos', '25215', '593131578', '3', 2019, 'L');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data-utama-siswa`
--
ALTER TABLE `data-utama-siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`,`nisn`),
  ADD KEY `nis_2` (`nis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data-utama-siswa`
--
ALTER TABLE `data-utama-siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
