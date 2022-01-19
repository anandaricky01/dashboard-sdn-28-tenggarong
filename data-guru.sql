-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 19, 2022 at 02:31 PM
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
-- Table structure for table `data-guru`
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
-- Dumping data for table `data-guru`
--

INSERT INTO `data-guru` (`NO`, `NAMA`, `NIP`, `NIP_BARU`, `NUPTK`, `KODE`, `NRG`, `NPWP`, `NO_REK_BPD`, `TEMPAT_LAHIR`, `TGLLAHIR`, `JK`, `AGAMA`, `NKARPEG`, `PKT_AWAL`, `GOL`, `TMT_AWAL`, `CPNS_TMT`, `PNS_TMT`, `MK_SLRH`, `MK_GOL`, `PKT_AKHIR`, `TMT_AKHIR`, `PEND`, `TH`, `JURUSAN`, `TUGAS_JABATAN`, `TUGAS_TAMBAHAN`, `JJM`, `MENGAJAR`, `UMUR`, `GOL_AKHIR`, `NO_SERTIFIKAT`, `TH_SRTF`, `EMAIL`, `TMT_DSNI`, `GAJI_POKOK`, `NO_REK_SERTIFIKAT`, `TMT_PNS`, `NUPTK2`, `GOL_DRH`, `STATUS`, `NAMA_SAJA`, `GELAR_BLK`, `HP`, `PASS_DAPO`, `JAB_GURU_1`, `JAB_GURU_2`, `NO_PSRT_4`, `NO_SKTP_4`) VALUES
('1', 'Effendi. A.Ma.Pd', '131053149', '19600219 198210 1 002', '1551738642200002', 'K671AD', '110271146081', '151499696728000', '42099047', 'Muara Pahu', '19-Feb-60', 'L', 'Islam', 'D.105290', 'Pengatur Muda', 'II/a', '1/10/1982', '01-10-82', '29-09-82', '39-04', '39-04', 'Pembina', '01-10-06', 'D2', '1998', 'PGSD', 'Guru Kelas', '', '24', 'IIID', '61', 'IV/a', '1191102700527', '2011', 'ama.pdeffendi@yahoo.co.id', '15-07-2013', '', '1005711972199', '29-09-1982', '1551-7386-4220-0002', 'AB', 'Kawin', 'Effendi', 'A.Ma.Pd', '', '19600219', 'Guru Pembina', 'Guru Madya', '11160202710168', '1191102700527'),
('3', 'Triani. S.Ag', '150324656', '19700524 200312 2 002', '9856748651300042', 'PI6KPP', '131372686006', '151755840728001', '42258806', 'Kediri', '24-May-70', 'P', 'Hindu', 'M.043390', 'Pengatur Muda', 'II/a', '1/12/2003', '01-12-03', '01-06-05', '18-02', '16-08', 'Penata Muda', '01-10-08', 'S1', '2011', 'Agama Hindu', 'Guru PAH & Kelas', 'Ketrampilan', '24', 'IC', '51', 'III/a', '0', '0', '', '19-07-2007', '', '0', '01-06-2005', '9856-7486-5130-0042', 'B', 'Kawin', 'Triani', 'S.Ag', '081346248878', '19700524', 'Guru Madya', 'Guru Pertama', '13160213720171', '2191313700699'),
('4', 'Samio. S.Pd.', '550039072', '19650606 200701 1 035', '2938743649200002', '4P09JA', '0', '150352748728000', '42148298', 'Samarinda', '6-Jun-65', 'L', 'Islam', 'P.071420', 'Pengatur Muda', 'II/a', '1/1/2007', '01-01-07', '01-12-09', '15-01', '12-02', 'Penata Muda', '01-04-13', 'S1', '2014', 'PGSD', 'Guru Kelas', '', '24', 'IIIC', '56', 'III/a', '0', '0', '', '15-07-2013', '', '0', '01-12-2009', '2938-7436-4920-0002', 'O', 'Kawin', 'Samio', 'S.Pd.', '', '19650606', 'Guru Madya', 'Guru Pertama', '0', '0'),
('5', 'Mukhlis. S.Pd', '550048219', '19670420 200801 1 009', '4752745648200012', 'JL21N0', '0', '156535510728000', '42602574', 'Blitar', '20-Apr-67', 'P', 'Islam', '', 'Pengatur Muda', 'II/a', '1/1/2008', '01-01-08', '01-01-08', '14-01', '14-01', 'Pengatur Muda', '01-04-05', 'S1', '2009', 'S1', 'Guru Kelas', 'Staf TU', '24', 'IIC', '54', 'II/a', '0', '0', 'mukhlismega@yahoo.com', '28-09-2009', '', '0', '01-01-2008', '4752-7456-4820-0012', 'A', 'Kawin', 'Mukhlis', 'S.Pd', '081347656522', '19670420', 'Guru Pratama', '', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data-guru`
--
ALTER TABLE `data-guru`
  ADD PRIMARY KEY (`NO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
