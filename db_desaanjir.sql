-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2023 at 06:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_desaanjir`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` int(11) NOT NULL,
  `id_kk` int(11) NOT NULL,
  `id_pend` int(11) NOT NULL,
  `hubungan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_anggota`, `id_kk`, `id_pend`, `hubungan`) VALUES
(10, 5, 12, 'Istri'),
(11, 5, 9, 'Anak'),
(12, 5, 11, 'Kepala Keluarga'),
(13, 5, 13, 'Anak'),
(14, 5, 14, 'Anak'),
(15, 6, 16, 'Istri'),
(16, 6, 15, 'Kepala Keluarga'),
(17, 7, 23, 'Kepala Keluarga'),
(18, 7, 24, 'Istri'),
(19, 7, 26, 'Anak'),
(20, 8, 28, 'Istri'),
(21, 8, 27, 'Kepala Keluarga'),
(22, 8, 29, 'Anak'),
(23, 9, 35, 'Kepala Keluarga'),
(24, 9, 36, 'Anak'),
(25, 10, 38, 'Kepala Keluarga'),
(26, 10, 39, 'Istri'),
(27, 11, 40, 'Kepala Keluarga'),
(28, 11, 41, 'Istri'),
(29, 12, 42, 'Kepala Keluarga'),
(30, 12, 43, 'Istri'),
(31, 12, 44, 'Anak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_datang`
--

CREATE TABLE `tb_datang` (
  `id_datang` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_datang` varchar(20) NOT NULL,
  `jekel` enum('LK','PR') NOT NULL,
  `tgl_datang` date NOT NULL,
  `pelapor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_datang`
--

INSERT INTO `tb_datang` (`id_datang`, `nik`, `nama_datang`, `jekel`, `tgl_datang`, `pelapor`) VALUES
(2, '6304064406010001', 'ANNISAH', 'PR', '2022-04-11', 27),
(3, '6203015012890002', 'JAHRANI', 'LK', '2022-09-05', 18),
(4, '6371041901920002', 'FERDIANTO SAPUTRA', 'LK', '2022-06-04', 36),
(5, '6203035912990002', 'JUMIATI', 'PR', '2022-11-23', 27),
(6, '3526086805850002', 'ERNISYAH', 'PR', '2015-10-31', 28);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kk`
--

CREATE TABLE `tb_kk` (
  `id_kk` int(11) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `kepala` varchar(20) NOT NULL,
  `desa` varchar(20) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `kec` varchar(20) NOT NULL,
  `kab` varchar(20) NOT NULL,
  `prov` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_kk`
--

INSERT INTO `tb_kk` (`id_kk`, `no_kk`, `kepala`, `desa`, `rt`, `rw`, `kec`, `kab`, `prov`) VALUES
(5, '6203031401110019', 'BUHARI', 'Anjir Mambulau Timur', '01', '00', 'Kapuas Timur', 'Kuala Kapuas', 'Kalimantan Tengah'),
(6, '6203031203100001', 'M HATTA', 'Anjir Mambulau Timur', '01', '00', 'Kapuas Timur', 'Kuala Kapuas', 'Kalimantan Tengah'),
(7, '6203031408130002', 'BAMBANG PRAYETNO', 'Anjir Mambulau Timur', '01', '00', 'Kapuas Timur', 'Kuala Kapuas', 'Kalimantan Tengah'),
(8, '6271032011170004', 'HANAPI', 'Anjir Mambulau Timur', '02', '00', 'Kapuas Timur', 'Kuala Kapuas', 'Kalimantan Tengah'),
(9, '62030302107110001', 'SITI ASIYAH', 'Anjir Mambulau Timur', '04', '00', 'Kapuas Timur', 'Kuala Kapuas', 'Kalimantan Tengah'),
(10, '63711010501210014', 'MARWANSYAH', 'Anjir Mambulau Timur', '04', '00', 'Kapuas Timur', 'Kuala Kapuas', 'Kalimantan Tengah'),
(11, '6203030709200001', 'SYAHRIYAN', 'Anjir Mambulau Timur', '05', '00', 'Kapuas Timur', 'Kuala Kapuas', 'Kalimantan Tengah'),
(12, '6203030504220001', 'HARJU', 'Anjir Mambulau Timur', '01', '00', 'Kapuas Timur', 'Kuala Kapuas', 'Kalimantan Tengah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lahir`
--

CREATE TABLE `tb_lahir` (
  `id_lahir` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_lh` date NOT NULL,
  `jekel` enum('LK','PR') NOT NULL,
  `id_kk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_lahir`
--

INSERT INTO `tb_lahir` (`id_lahir`, `nama`, `tgl_lh`, `jekel`, `id_kk`) VALUES
(2, 'MUHAMMAD AL PRANATA', '2021-01-09', 'LK', 7),
(3, 'AISWHA FATHIYA NAHLA', '2021-03-30', 'PR', 8),
(4, 'MUHAMMAD GIBRAN MAULANA', '2022-09-09', 'LK', 10),
(5, 'AHMAD NAUVAL', '2021-09-07', 'LK', 11),
(6, 'MAHDALINA', '2021-08-30', 'PR', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mendu`
--

CREATE TABLE `tb_mendu` (
  `id_mendu` int(11) NOT NULL,
  `id_pdd` int(11) NOT NULL,
  `tgl_mendu` date NOT NULL,
  `usia` int(11) NOT NULL,
  `sebab` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_mendu`
--

INSERT INTO `tb_mendu` (`id_mendu`, `id_pdd`, `tgl_mendu`, `usia`, `sebab`) VALUES
(2, 10, '2012-05-10', 0, 'SAKIT'),
(3, 25, '2019-08-10', 0, 'KECELAKAAN'),
(4, 30, '2021-09-12', 0, 'USIA TUA'),
(5, 32, '2019-03-20', 0, 'SAKIT'),
(17, 50, '2017-12-12', 0, 'USIA TUA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pdd`
--

CREATE TABLE `tb_pdd` (
  `id_pend` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tempat_lh` varchar(15) NOT NULL,
  `tgl_lh` date NOT NULL,
  `jekel` enum('LK','PR') NOT NULL,
  `desa` varchar(15) NOT NULL,
  `rt` varchar(4) NOT NULL,
  `rw` varchar(4) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `kawin` varchar(15) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `status` enum('Ada','Meninggal','Pindah') NOT NULL,
  `pendidikan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_pdd`
--

INSERT INTO `tb_pdd` (`id_pend`, `nik`, `nama`, `tempat_lh`, `tgl_lh`, `jekel`, `desa`, `rt`, `rw`, `agama`, `kawin`, `pekerjaan`, `status`, `pendidikan`) VALUES
(9, '6203032402010001', 'Hilmy Al Shidiq', 'Anjir Serapat', '2001-11-24', 'LK', 'Anjir Mambulau ', '01', '00', 'Islam', 'Belum', 'Mahasiswa', 'Ada', 'SMA/Sederajat'),
(10, '6203030705410001', 'Hamdan', 'Anjir Serapat', '1941-05-07', 'LK', 'Anjir Mambulau ', '05', '00', 'Islam', 'Sudah', 'Buruh Tani', 'Meninggal', 'SMP/Sederajat'),
(11, '6203030105700003', 'BUHARI', 'Anjir Serapat', '1970-05-01', 'LK', 'Anjir Mambulau ', '01', '00', 'Islam', 'Sudah', 'Wiraswasta', 'Ada', 'SMA/Sederajat'),
(12, '6203034403740001', 'HAMIDAH', 'Anjir Serapat', '1974-03-04', 'PR', 'Anjir Mambulau ', '01', '00', 'Islam', 'Sudah', 'MENGURUS RUMAH TANGG', 'Ada', 'SMA/Sederajat'),
(13, '6203036707080002', 'ANUGRAH JULIANA', 'Anjir Serapat', '2008-07-28', 'PR', 'Anjir Mambulau ', '01', '00', 'Islam', 'Belum', 'Siswa', 'Ada', 'SD'),
(14, '06303037004140001', 'NUR REZKI APRILIA', 'Kapuas', '2014-04-30', 'PR', 'Anjir Mambulau ', '01', '00', 'Islam', 'Belum', 'Siswa', 'Ada', 'TK'),
(15, '6203030107510051', 'M HATTA', 'Banjarmasin', '1951-07-01', 'LK', 'Anjir Mambulau ', '01', '00', 'Islam', 'Sudah', 'Karyawan Swasta', 'Ada', 'SMP/Sederajat'),
(16, '6203035107540001', 'SITI ASMA', 'Anjir Serapat', '1954-07-11', 'PR', 'Anjir Mambulau ', '01', '00', 'Islam', 'Sudah', 'MENGURUS RUMAH TANGG', 'Ada', 'SD'),
(17, '6203036308930001', 'NOOR HIDAYATI', 'Anjir Serapat', '1993-08-23', 'PR', 'Anjir Mambulau ', '01', '00', 'Islam', 'Sudah', 'Mahasiswa', 'Pindah', 'SMA/Sederajat'),
(18, '6203031312690001', 'ATMURI', 'Anjir Serapat', '1969-12-13', 'LK', 'Anjir Mambulau ', '01', '00', 'Islam', 'Sudah', 'WIRASWASTA', 'Ada', 'SMP/Sederajat'),
(19, '6203035206750003', 'LAILA', 'Anjir Serapat', '1975-06-12', 'PR', 'Anjir Mambulau ', '01', '00', 'Islam', 'Sudah', 'MENGURUS RUMAH TANGG', 'Ada', 'SMA/Sederajat'),
(20, '6203035009940001', 'HALIMATUS SADIAH', 'Anjir Serapat', '1994-09-10', 'PR', 'Anjir Mambulau ', '01', '00', 'Islam', 'Sudah', 'GURU PESANTREN', 'Pindah', 'SMA/Sederajat'),
(21, '6203030101970001', 'M RIFANI', 'Anjir Serapat', '1997-01-01', 'LK', 'Anjir Mambulau ', '01', '00', 'Islam', 'Belum', 'Mahasiswa', 'Ada', 'SMA/Sederajat'),
(22, '6203032802140001', 'AHMAD SYAUQI', 'Kapuas', '2014-02-28', 'LK', 'Anjir Mambulau ', '01', '00', 'Islam', 'Belum', 'Siswa', 'Ada', 'TK'),
(23, '6203030904860001', 'BAMBANG PRAYETNO', 'Anjir Serapat', '1986-04-09', 'LK', 'Anjir Mambulau ', '01', '00', 'Islam', 'Sudah', 'WIRASWASTA', 'Ada', 'D3'),
(24, '6203035908810002', 'EVA NAULI', 'Kapuas', '1981-08-19', 'PR', 'Anjir Mambulau ', '01', '00', 'Islam', 'Sudah', 'WIRASWASTA', 'Ada', 'D3'),
(25, '6203030902060002', 'M TYO SYAFEI', 'Kapuas', '2006-02-08', '', 'Anjir Mambulau ', '01', '00', 'Islam', 'Belum', 'Siswa', 'Meninggal', 'SMP/Sederajat'),
(26, '6203034909110002', 'CHINTYA PRATIWI', 'Kapuas', '2011-09-09', 'PR', 'Anjir Mambulau ', '01', '00', 'Islam', 'Belum', 'Siswa', 'Ada', 'SMP/Sederajat'),
(27, '6271030405910007', 'HANAPI', 'Anjir Serapat', '1991-05-04', 'LK', 'Anjir Mambulau ', '02', '00', 'Islam', 'Sudah', 'WIRASWASTA', 'Ada', 'SMP/Sederajat'),
(28, '6271034202990004', 'FITRIYANI', 'Palangka Raya', '1999-02-02', 'PR', 'Anjir Mambulau ', '02', '00', 'Islam', 'Sudah', 'MENGURUS RUMAH TANGG', 'Ada', 'SMP/Sederajat'),
(29, '6271036601190003', 'AKEYSHA FARZANA KHAN', 'Palangka Raya', '2019-01-25', 'PR', 'Anjir Mambulau ', '02', '00', 'Islam', 'Belum', 'BELUM BEKERJA', 'Ada', 'Tidak/Berhenti Sekol'),
(30, '6203024265560001', 'MAWAR', 'Anjir Serapat', '1955-08-02', 'PR', 'Anjir Mambulau ', '03', '00', 'Islam', 'Sudah', 'MENGURUS RUMAH TANGG', 'Meninggal', 'SD'),
(31, '6203035308010004', 'NORLIYANI', 'Anjir Serapat', '2001-08-13', 'PR', 'Anjir Mambulau ', '03', '00', 'Islam', 'Sudah', 'MENGURUS RUMAH TANGG', 'Pindah', 'S1'),
(32, '6203030702430001', 'HAMSAN NASRA', 'Anjir Serapat', '1943-02-07', 'LK', 'Anjir Mambulau ', '03', '00', 'Islam', 'Sudah', 'PNS', 'Meninggal', 'D3'),
(33, '6304034406960001', 'AUDIA MARLINA', 'Kuala Pembuang', '1998-06-04', 'PR', 'Anjir Mambulau ', '04', '00', 'Islam', 'Belum', 'WIRASWASTA', 'Pindah', 'SMA/Sederajat'),
(34, '6203031307700003', 'WAHYUNI', 'Kapuas', '1978-07-12', 'LK', 'Anjir Mambulau ', '04', '00', 'Islam', 'Sudah', 'WIRASWASTA', 'Pindah', 'D3'),
(35, '6203036907790001', 'SITI ASIYAH', 'Anjir Serapat', '1979-07-29', 'PR', 'Anjir Mambulau ', '04', '00', 'Islam', 'Sudah', 'WIRASWASTA', 'Ada', 'SMA/Sederajat'),
(36, '6203031009060001', 'AHMAD MARJUKI', 'Anjir Serapat', '2006-10-09', 'LK', 'Anjir Mambulau ', '04', '00', 'Islam', 'Belum', 'Siswa', 'Ada', 'SMP/Sederajat'),
(38, '6371011011870010', 'MARWANSYAH', 'Banjarmasin', '1987-11-11', 'LK', 'Anjir Mambulau ', '04', '00', 'Islam', 'Sudah', 'WIRASWASTA', 'Ada', 'D3'),
(39, '6304034406960001', 'AUDIA MARLINA', 'Kuala Pembuang', '1996-04-06', 'PR', 'Anjir Mambulau ', '04', '00', 'Islam', 'Sudah', 'MENGURUS RUMAH TANGG', 'Ada', 'SMA/Sederajat'),
(40, '6203031810940003', 'SYAHRIYAN', 'Anjir Serapat', '1998-10-18', 'LK', 'Anjir Mambulau ', '05', '00', 'Islam', 'Sudah', 'Karyawan Swasta', 'Ada', 'SMA/Sederajat'),
(41, '6203174404000002', 'HARTATI', 'Kapuas', '2000-04-04', 'PR', 'Anjir Mambulau ', '05', '00', 'Islam', 'Sudah', 'MENGURUS RUMAH TANGG', 'Ada', 'SMA/Sederajat'),
(42, '6204030311020001', 'HARJU', 'Anjir Serapat', '2002-11-03', 'LK', 'Anjir Mambulau ', '01', '00', 'Islam', 'Sudah', 'WIRASWASTA', 'Ada', 'SMP/Sederajat'),
(43, '6203035508010002', 'SITI AISYAH', 'Anjir Serapat', '2001-08-15', 'PR', 'Anjir Mambulau ', '01', '00', 'Islam', 'Sudah', 'MENGURUS RUMAH TANGG', 'Ada', 'SMP/Sederajat'),
(44, '6203031912190001', 'MAULANA', 'Kapuas', '2019-12-19', 'LK', 'Anjir Mambulau ', '01', '00', 'Islam', 'Belum', 'BELUM BEKERJA', 'Ada', 'Tidak/Berhenti Sekol'),
(45, '6203034607800004', 'RATNAWATI', 'Anjir Serapat', '1979-04-07', 'PR', 'Anjir Mambulau ', '01', '00', 'Islam', 'Sudah', 'KETUA RT', 'Ada', 'SMP/Sederajat'),
(46, '6203030809720002', 'ILMI', 'Anjir Serapat', '1972-09-08', 'LK', 'Anjir Mambulau ', '02', '00', 'Islam', 'Sudah', 'KETUA RT', 'Ada', 'SMP/Sederajat'),
(47, '6203031704920001', 'RIZALI NOOR', 'Banjarmasin', '1992-04-17', 'LK', 'Anjir Mambulau ', '03', '00', 'Islam', 'Sudah', 'WIRASWASTA', 'Ada', 'S1'),
(48, '6203031302770002', 'AINAL HASAN', 'Marabahan', '1977-02-13', 'LK', 'Anjir Mambulau ', '04', '00', 'Islam', 'Sudah', 'WIRASWASTA', 'Ada', 'SMA/Sederajat'),
(49, '6203030809870001', 'RAHMAT', 'Anjir Serapat', '1987-09-08', 'LK', 'Anjir Mambulau ', '05', '00', 'Islam', 'Sudah', 'WIRASWASTA', 'Ada', 'SMA/Sederajat'),
(50, '6203032009420002', 'HORMATSYAH', 'Anjir Serapat', '1942-04-20', 'LK', 'Anjir Mambulau ', '04', '00', 'Islam', 'Sudah', 'PENSIUNAN', 'Meninggal', 'SD');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('Administrator','Kaur Pemerintah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(1, 'Hilmy Al Shidiq', 'admin', '1', 'Administrator'),
(2, 'Muriadie', 'kaur', '1', 'Kaur Pemerintah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pindah`
--

CREATE TABLE `tb_pindah` (
  `id_pindah` int(11) NOT NULL,
  `id_pdd` int(11) NOT NULL,
  `tgl_pindah` date NOT NULL,
  `alasan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_pindah`
--

INSERT INTO `tb_pindah` (`id_pindah`, `id_pdd`, `tgl_pindah`, `alasan`) VALUES
(2, 17, '2010-03-10', 'MENIKAH'),
(3, 20, '2020-03-07', 'MENIKAH'),
(4, 31, '2020-09-01', 'MENIKAH'),
(5, 33, '2019-03-10', 'BEKERJA'),
(6, 34, '2019-02-01', 'MENIKAH');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rt`
--

CREATE TABLE `tb_rt` (
  `id_rt` int(11) NOT NULL,
  `rt` int(11) NOT NULL,
  `id_pdd` int(11) NOT NULL,
  `tgl_menjabat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_rt`
--

INSERT INTO `tb_rt` (`id_rt`, `rt`, `id_pdd`, `tgl_menjabat`) VALUES
(1, 1, 45, '2023-01-01'),
(2, 2, 46, '2023-01-01'),
(3, 3, 47, '2023-01-01'),
(4, 4, 48, '2023-01-01'),
(5, 5, 49, '2023-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wargart`
--

CREATE TABLE `tb_wargart` (
  `id_wargart` int(11) NOT NULL,
  `id_rt` int(11) NOT NULL,
  `id_pend` int(11) NOT NULL,
  `usia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_wargart`
--

INSERT INTO `tb_wargart` (`id_wargart`, `id_rt`, `id_pend`, `usia`) VALUES
(1, 1, 0, '0'),
(2, 1, 0, '0'),
(8, 1, 9, 'Dewasa'),
(9, 1, 9, 'Anak-Anak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `tb_anggota_ibfk_1` (`id_pend`),
  ADD KEY `id_kk` (`id_kk`);

--
-- Indexes for table `tb_datang`
--
ALTER TABLE `tb_datang`
  ADD PRIMARY KEY (`id_datang`),
  ADD KEY `pelapor` (`pelapor`);

--
-- Indexes for table `tb_kk`
--
ALTER TABLE `tb_kk`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indexes for table `tb_lahir`
--
ALTER TABLE `tb_lahir`
  ADD PRIMARY KEY (`id_lahir`),
  ADD KEY `id_kk` (`id_kk`);

--
-- Indexes for table `tb_mendu`
--
ALTER TABLE `tb_mendu`
  ADD PRIMARY KEY (`id_mendu`),
  ADD KEY `id_pdd` (`id_pdd`);

--
-- Indexes for table `tb_pdd`
--
ALTER TABLE `tb_pdd`
  ADD PRIMARY KEY (`id_pend`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_pindah`
--
ALTER TABLE `tb_pindah`
  ADD PRIMARY KEY (`id_pindah`),
  ADD KEY `id_pdd` (`id_pdd`);

--
-- Indexes for table `tb_rt`
--
ALTER TABLE `tb_rt`
  ADD PRIMARY KEY (`id_rt`),
  ADD KEY `id_pdd` (`id_pdd`),
  ADD KEY `id_pdd_2` (`id_pdd`);

--
-- Indexes for table `tb_wargart`
--
ALTER TABLE `tb_wargart`
  ADD PRIMARY KEY (`id_wargart`),
  ADD KEY `id_rt` (`id_rt`),
  ADD KEY `id_pdd` (`id_pend`),
  ADD KEY `id_pend` (`id_pend`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_datang`
--
ALTER TABLE `tb_datang`
  MODIFY `id_datang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kk`
--
ALTER TABLE `tb_kk`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_lahir`
--
ALTER TABLE `tb_lahir`
  MODIFY `id_lahir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_mendu`
--
ALTER TABLE `tb_mendu`
  MODIFY `id_mendu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_pdd`
--
ALTER TABLE `tb_pdd`
  MODIFY `id_pend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pindah`
--
ALTER TABLE `tb_pindah`
  MODIFY `id_pindah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_rt`
--
ALTER TABLE `tb_rt`
  MODIFY `id_rt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_wargart`
--
ALTER TABLE `tb_wargart`
  MODIFY `id_wargart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD CONSTRAINT `tb_anggota_ibfk_1` FOREIGN KEY (`id_pend`) REFERENCES `tb_pdd` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_anggota_ibfk_2` FOREIGN KEY (`id_kk`) REFERENCES `tb_kk` (`id_kk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_datang`
--
ALTER TABLE `tb_datang`
  ADD CONSTRAINT `tb_datang_ibfk_1` FOREIGN KEY (`pelapor`) REFERENCES `tb_pdd` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_lahir`
--
ALTER TABLE `tb_lahir`
  ADD CONSTRAINT `tb_lahir_ibfk_1` FOREIGN KEY (`id_kk`) REFERENCES `tb_kk` (`id_kk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_mendu`
--
ALTER TABLE `tb_mendu`
  ADD CONSTRAINT `tb_mendu_ibfk_1` FOREIGN KEY (`id_pdd`) REFERENCES `tb_pdd` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pindah`
--
ALTER TABLE `tb_pindah`
  ADD CONSTRAINT `tb_pindah_ibfk_1` FOREIGN KEY (`id_pdd`) REFERENCES `tb_pdd` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_rt`
--
ALTER TABLE `tb_rt`
  ADD CONSTRAINT `tb_rt_ibfk_1` FOREIGN KEY (`id_pdd`) REFERENCES `tb_pdd` (`id_pend`);

--
-- Constraints for table `tb_wargart`
--
ALTER TABLE `tb_wargart`
  ADD CONSTRAINT `tb_wargart_ibfk_1` FOREIGN KEY (`id_rt`) REFERENCES `tb_rt` (`id_rt`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
