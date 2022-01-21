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
-- Struktur dari tabel `data-diri-siswa`
--

CREATE TABLE `data-diri-siswa` (
  `id` int(11) NOT NULL,
  `nik` varchar(100) DEFAULT NULL,
  `nis` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `kewarganegaraan` varchar(100) DEFAULT NULL,
  `anak_ke` int(11) DEFAULT NULL,
  `jumlah_saudara` int(11) DEFAULT NULL,
  `jalan` varchar(100) DEFAULT NULL,
  `rt` varchar(100) DEFAULT NULL,
  `rw` varchar(100) DEFAULT NULL,
  `kodepos` varchar(100) DEFAULT NULL,
  `dusun` varchar(100) DEFAULT NULL,
  `kelurahan` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `kota_kab` varchar(100) DEFAULT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `no_kk` varchar(255) DEFAULT NULL,
  `no_kks` varchar(255) DEFAULT NULL,
  `jarak_ke_sekolah` int(11) DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `tinggi_badan` int(11) DEFAULT NULL,
  `lingkar_kepala` int(11) DEFAULT NULL,
  `jenis_tinggal` varchar(100) DEFAULT NULL,
  `transportasi` varchar(100) DEFAULT NULL,
  `telepon` varchar(100) DEFAULT NULL,
  `no_hp` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_registrasi_akta` varchar(255) DEFAULT NULL,
  `bank` varchar(100) DEFAULT NULL,
  `no_rekening_bank` varchar(100) DEFAULT NULL,
  `rekening_atas_nama` varchar(100) DEFAULT NULL,
  `kebutuhan_khusus` varchar(100) DEFAULT NULL,
  `sekolah_asal` varchar(255) DEFAULT NULL,
  `lintang` varchar(255) DEFAULT NULL,
  `bujur` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data-diri-siswa`
--

INSERT INTO `data-diri-siswa` (`id`, `nik`, `nis`, `tempat_lahir`, `tanggal_lahir`, `agama`, `kewarganegaraan`, `anak_ke`, `jumlah_saudara`, `jalan`, `rt`, `rw`, `kodepos`, `dusun`, `kelurahan`, `kecamatan`, `kota_kab`, `provinsi`, `no_kk`, `no_kks`, `jarak_ke_sekolah`, `berat_badan`, `tinggi_badan`, `lingkar_kepala`, `jenis_tinggal`, `transportasi`, `telepon`, `no_hp`, `email`, `no_registrasi_akta`, `bank`, `no_rekening_bank`, `rekening_atas_nama`, `kebutuhan_khusus`, `sekolah_asal`, `lintang`, `bujur`) VALUES
(1, '3574280472974', '25132', 'Malang', '2011-04-13', 'islam', 'indonesia', 3, 2, 'jl. gunung sari no 25', '2', 'X', '65111', '', 'tulusrejo', 'lowokwaru', 'kota malang', 'jawa timur', '', NULL, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '357591057134', '25636', 'Surabaya', '2008-01-31', 'islam', 'indonesia', 1, 1, 'jl perak no 4', '3', 'VII', '65127', '', 'pandanwangi', 'blimbing', 'kota malang', 'jawa timur', '', NULL, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '35741619414', '25215', 'Solo', '2012-10-09', 'kristen', 'indonesia', 4, 3, 'jl danau limboto c12', '10', 'II', '65114', '', 'bunulrejo', 'blimbing', 'kota malang', 'jawa timur', '', NULL, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '3574171000013', '25481', 'Singosari', '2014-02-13', 'hindu', 'indonesia', 2, 1, 'jl grendel no 1A', '1', 'XII', '65134', '', 'landasan', 'singosari', 'kabupaten malang', 'jawa timur', '', NULL, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data-diri-siswa`
--
ALTER TABLE `data-diri-siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`,`nis`),
  ADD KEY `nis` (`nis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data-diri-siswa`
--
ALTER TABLE `data-diri-siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data-diri-siswa`
--
ALTER TABLE `data-diri-siswa`
  ADD CONSTRAINT `data-diri-siswa_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `data-utama-siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
