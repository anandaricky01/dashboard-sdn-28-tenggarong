-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2022 pada 19.02
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
-- Struktur dari tabel `data-sekolah-siswa`
--

CREATE TABLE `data-sekolah-siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `skhun` varchar(255) DEFAULT NULL,
  `penerima_kps` varchar(100) DEFAULT NULL,
  `no_kps` varchar(255) DEFAULT NULL,
  `no_ujian_nasional` varchar(255) DEFAULT NULL,
  `no_ijazah` varchar(255) DEFAULT NULL,
  `penerima_kip` varchar(255) DEFAULT NULL,
  `no_kip` varchar(255) DEFAULT NULL,
  `nama_kip` varchar(100) DEFAULT NULL,
  `layak_pip` varchar(100) DEFAULT NULL,
  `alasan_pip` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data-sekolah-siswa`
--
ALTER TABLE `data-sekolah-siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data-sekolah-siswa`
--
ALTER TABLE `data-sekolah-siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
