-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2022 pada 10.05
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
-- Struktur dari tabel `data-ayah`
--

CREATE TABLE `data-ayah` (
  `id` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nik_ayah` varchar(100) NOT NULL,
  `tempat_lahir_ayah` varchar(100) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `nohp_ayah` varchar(16) NOT NULL,
  `pendidikan_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `penghasilan_ayah` bigint(20) NOT NULL,
  `agama_ayah` varchar(100) NOT NULL,
  `status_ayah` varchar(100) NOT NULL,
  `alamat_ayah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data-ayah`
--

INSERT INTO `data-ayah` (`id`, `nis`, `nama_ayah`, `nik_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `nohp_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `agama_ayah`, `status_ayah`, `alamat_ayah`) VALUES
(1, '25132', 'Junaidi', '2341242352', 'Jakarta', '1973-01-07', '412434324124121', 'SLTA Sederajat', 'TNI AD', 5000000, 'islam', 'Wafat', 'Jl. Pemandian No.3');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `data-guru`
--

CREATE TABLE `data-guru` (
  `NO` varchar(100) NOT NULL,
  `NAMA` varchar(100) DEFAULT NULL,
  `NIP` varchar(100) DEFAULT NULL,
  `NIP_BARU` varchar(100) DEFAULT NULL,
  `NUPTK` varchar(100) DEFAULT NULL,
  `KODE` varchar(100) DEFAULT NULL,
  `NRG` varchar(100) DEFAULT NULL,
  `NPWP` varchar(100) DEFAULT NULL,
  `NO_REK_BPD` varchar(100) DEFAULT NULL,
  `TEMPAT_LAHIR` varchar(100) DEFAULT NULL,
  `TGLLAHIR` varchar(100) DEFAULT NULL,
  `JK` varchar(100) DEFAULT NULL,
  `AGAMA` varchar(100) DEFAULT NULL,
  `NKARPEG` varchar(100) DEFAULT NULL,
  `PKT_AWAL` varchar(100) DEFAULT NULL,
  `GOL` varchar(100) DEFAULT NULL,
  `TMT_AWAL` varchar(100) DEFAULT NULL,
  `CPNS_TMT` varchar(100) DEFAULT NULL,
  `PNS_TMT` varchar(100) DEFAULT NULL,
  `MK_SLRH` varchar(100) DEFAULT NULL,
  `MK_GOL` varchar(100) DEFAULT NULL,
  `PKT_AKHIR` varchar(100) DEFAULT NULL,
  `TMT_AKHIR` varchar(100) DEFAULT NULL,
  `PEND` varchar(100) DEFAULT NULL,
  `TH` varchar(100) DEFAULT NULL,
  `JURUSAN` varchar(100) DEFAULT NULL,
  `TUGAS_JABATAN` varchar(100) DEFAULT NULL,
  `TUGAS_TAMBAHAN` varchar(100) DEFAULT NULL,
  `JJM` varchar(100) DEFAULT NULL,
  `MENGAJAR` varchar(100) DEFAULT NULL,
  `UMUR` varchar(100) DEFAULT NULL,
  `GOL_AKHIR` varchar(100) DEFAULT NULL,
  `NO_SERTIFIKAT` varchar(100) DEFAULT NULL,
  `TH_SRTF` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `TMT_DSNI` varchar(100) DEFAULT NULL,
  `GAJI_POKOK` varchar(100) DEFAULT NULL,
  `NO_REK_SERTIFIKAT` varchar(100) DEFAULT NULL,
  `TMT_PNS` varchar(100) DEFAULT NULL,
  `NUPTK2` varchar(100) DEFAULT NULL,
  `GOL_DRH` varchar(100) DEFAULT NULL,
  `STATUS` varchar(100) DEFAULT NULL,
  `NAMA_SAJA` varchar(100) DEFAULT NULL,
  `GELAR_BLK` varchar(100) DEFAULT NULL,
  `HP` varchar(100) DEFAULT NULL,
  `PASS_DAPO` varchar(100) DEFAULT NULL,
  `JAB_GURU_1` varchar(100) DEFAULT NULL,
  `JAB_GURU_2` varchar(100) DEFAULT NULL,
  `NO_PSRT_4` varchar(100) DEFAULT NULL,
  `NO_SKTP_4` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data-guru`
--

INSERT INTO `data-guru` (`NO`, `NAMA`, `NIP`, `NIP_BARU`, `NUPTK`, `KODE`, `NRG`, `NPWP`, `NO_REK_BPD`, `TEMPAT_LAHIR`, `TGLLAHIR`, `JK`, `AGAMA`, `NKARPEG`, `PKT_AWAL`, `GOL`, `TMT_AWAL`, `CPNS_TMT`, `PNS_TMT`, `MK_SLRH`, `MK_GOL`, `PKT_AKHIR`, `TMT_AKHIR`, `PEND`, `TH`, `JURUSAN`, `TUGAS_JABATAN`, `TUGAS_TAMBAHAN`, `JJM`, `MENGAJAR`, `UMUR`, `GOL_AKHIR`, `NO_SERTIFIKAT`, `TH_SRTF`, `EMAIL`, `TMT_DSNI`, `GAJI_POKOK`, `NO_REK_SERTIFIKAT`, `TMT_PNS`, `NUPTK2`, `GOL_DRH`, `STATUS`, `NAMA_SAJA`, `GELAR_BLK`, `HP`, `PASS_DAPO`, `JAB_GURU_1`, `JAB_GURU_2`, `NO_PSRT_4`, `NO_SKTP_4`) VALUES
('1', 'Effendi. A.Ma.Pd', '131053149', '19600219 198210 1 002', '1551738642200002', 'K671AD', '110271146081', '151499696728000', '42099047', 'Muara Pahu', '19-Feb-60', 'L', 'Islam', 'D.105290', 'Pengatur Muda', 'II/a', '1/10/1982', '01-10-82', '29-09-82', '39-04', '39-04', 'Pembina', '01-10-06', 'D2', '1998', 'PGSD', 'Guru Kelas', '', '24', 'IIID', '61', 'IV/a', '1191102700527', '2011', 'ama.pdeffendi@yahoo.co.id', '15-07-2013', '', '1005711972199', '29-09-1982', '1551-7386-4220-0002', 'AB', 'Kawin', 'Effendi', 'A.Ma.Pd', '', '19600219', 'Guru Pembina', 'Guru Madya', '11160202710168', '1191102700527'),
('3', 'Triani. S.Ag', '150324656', '19700524 200312 2 002', '9856748651300042', 'PI6KPP', '131372686006', '151755840728001', '42258806', 'Kediri', '24-May-70', 'P', 'Hindu', 'M.043390', 'Pengatur Muda', 'II/a', '1/12/2003', '01-12-03', '01-06-05', '18-02', '16-08', 'Penata Muda', '01-10-08', 'S1', '2011', 'Agama Hindu', 'Guru PAH & Kelas', 'Ketrampilan', '24', 'IC', '51', 'III/a', '0', '0', '', '19-07-2007', '', '0', '01-06-2005', '9856-7486-5130-0042', 'B', 'Kawin', 'Triani', 'S.Ag', '081346248878', '19700524', 'Guru Madya', 'Guru Pertama', '13160213720171', '2191313700699'),
('4', 'Samio. S.Pd.', '550039072', '19650606 200701 1 035', '2938743649200002', '4P09JA', '0', '150352748728000', '42148298', 'Samarinda', '6-Jun-65', 'L', 'Islam', 'P.071420', 'Pengatur Muda', 'II/a', '1/1/2007', '01-01-07', '01-12-09', '15-01', '12-02', 'Penata Muda', '01-04-13', 'S1', '2014', 'PGSD', 'Guru Kelas', '', '24', 'IIIC', '56', 'III/a', '0', '0', '', '15-07-2013', '', '0', '01-12-2009', '2938-7436-4920-0002', 'O', 'Kawin', 'Samio', 'S.Pd.', '', '19650606', 'Guru Madya', 'Guru Pertama', '0', '0'),
('5', 'Mukhlis. S.Pd', '550048219', '19670420 200801 1 009', '4752745648200012', 'JL21N0', '0', '156535510728000', '42602574', 'Blitar', '20-Apr-67', 'P', 'Islam', '', 'Pengatur Muda', 'II/a', '1/1/2008', '01-01-08', '01-01-08', '14-01', '14-01', 'Pengatur Muda', '01-04-05', 'S1', '2009', 'S1', 'Guru Kelas', 'Staf TU', '24', 'IIC', '54', 'II/a', '0', '0', 'mukhlismega@yahoo.com', '28-09-2009', '', '0', '01-01-2008', '4752-7456-4820-0012', 'A', 'Kawin', 'Mukhlis', 'S.Pd', '081347656522', '19670420', 'Guru Pratama', '', '0', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data-ibu`
--

CREATE TABLE `data-ibu` (
  `id` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nik_ibu` varchar(100) NOT NULL,
  `tempat_lahir_ibu` varchar(100) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `nohp_ibu` varchar(16) NOT NULL,
  `pendidikan_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `penghasilan_ibu` bigint(20) NOT NULL,
  `agama_ibu` varchar(100) NOT NULL,
  `status_ibu` varchar(100) NOT NULL,
  `alamat_ibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data-ibu`
--

INSERT INTO `data-ibu` (`id`, `nis`, `nama_ibu`, `nik_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `nohp_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `agama_ibu`, `status_ibu`, `alamat_ibu`) VALUES
(1, '25132', 'sumiati', '357814849151055', 'Padang', '1988-06-16', '082141561616', 'S1 Sastra Jepang', 'Ibu Rumah Tangga', 0, 'islam', 'Masih Hidup', 'jl pemandian no 3');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `data-wali`
--

CREATE TABLE `data-wali` (
  `id` int(11) NOT NULL,
  `nis` varchar(100) DEFAULT NULL,
  `nama_wali` varchar(100) DEFAULT NULL,
  `nik_wali` varchar(100) DEFAULT NULL,
  `tempat_lahir_wali` varchar(100) DEFAULT NULL,
  `tanggal_lahir_wali` date DEFAULT NULL,
  `nohp_wali` varchar(16) DEFAULT NULL,
  `pendidikan_wali` varchar(100) DEFAULT NULL,
  `pekerjaan_wali` varchar(100) DEFAULT NULL,
  `penghasilan_wali` bigint(20) DEFAULT NULL,
  `agama_wali` varchar(100) DEFAULT NULL,
  `status_wali` varchar(100) DEFAULT NULL,
  `alamat_wali` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto-siswa`
--

CREATE TABLE `foto-siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `foto-siswa`
--

INSERT INTO `foto-siswa` (`id`, `nis`, `foto`, `kelas`) VALUES
(1, '25141', 'img013.jpg', 1),
(2, '25141', '31.jpg', 4),
(3, '25141', 'zidane.jpg', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data-ayah`
--
ALTER TABLE `data-ayah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`),
  ADD UNIQUE KEY `nik_ayah` (`nik_ayah`);

--
-- Indeks untuk tabel `data-diri-siswa`
--
ALTER TABLE `data-diri-siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`,`nis`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `data-guru`
--
ALTER TABLE `data-guru`
  ADD PRIMARY KEY (`NO`);

--
-- Indeks untuk tabel `data-ibu`
--
ALTER TABLE `data-ibu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`),
  ADD UNIQUE KEY `nik_ibu` (`nik_ibu`);

--
-- Indeks untuk tabel `data-sekolah-siswa`
--
ALTER TABLE `data-sekolah-siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data-utama-siswa`
--
ALTER TABLE `data-utama-siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`,`nisn`),
  ADD KEY `nis_2` (`nis`);

--
-- Indeks untuk tabel `data-wali`
--
ALTER TABLE `data-wali`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`),
  ADD UNIQUE KEY `nik_wali` (`nik_wali`);

--
-- Indeks untuk tabel `foto-siswa`
--
ALTER TABLE `foto-siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data-ayah`
--
ALTER TABLE `data-ayah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data-diri-siswa`
--
ALTER TABLE `data-diri-siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data-ibu`
--
ALTER TABLE `data-ibu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data-sekolah-siswa`
--
ALTER TABLE `data-sekolah-siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data-utama-siswa`
--
ALTER TABLE `data-utama-siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data-wali`
--
ALTER TABLE `data-wali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `foto-siswa`
--
ALTER TABLE `foto-siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data-ayah`
--
ALTER TABLE `data-ayah`
  ADD CONSTRAINT `data-ayah_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `data-utama-siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data-diri-siswa`
--
ALTER TABLE `data-diri-siswa`
  ADD CONSTRAINT `data-diri-siswa_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `data-utama-siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data-ibu`
--
ALTER TABLE `data-ibu`
  ADD CONSTRAINT `data-ibu_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `data-utama-siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data-wali`
--
ALTER TABLE `data-wali`
  ADD CONSTRAINT `data-wali_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `data-utama-siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `foto-siswa`
--
ALTER TABLE `foto-siswa`
  ADD CONSTRAINT `foto-siswa_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `data-utama-siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
