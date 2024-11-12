-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2024 at 11:16 PM
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
-- Database: `suratpaket`
--

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `kurir_id` int(11) NOT NULL,
  `ekspedisi` varchar(255) DEFAULT NULL,
  `nama_kurir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`kurir_id`, `ekspedisi`, `nama_kurir`) VALUES
(1, 'JNE', 'Dimas'),
(4, 'JNT', 'Ruben'),
(5, 'SiCepat', 'Denis'),
(7, 'ShopeeExpress', 'Doni'),
(9, 'AnterAja', 'Atong'),
(11, 'Pos Indonesia', 'Badu'),
(12, 'TIKI', 'Fairi');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `paket_id` int(11) NOT NULL,
  `jenis_paket` varchar(255) DEFAULT NULL,
  `no_resi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`paket_id`, `jenis_paket`, `no_resi`) VALUES
(1, 'Dokumen', 'resi001'),
(2, 'Dokumen', 'resi002'),
(3, 'Makanan', 'resi003'),
(4, 'Perlengkapan Dapur', 'resi004'),
(5, 'Alat Olahraga', 'resi005'),
(6, 'Alat Kosmetik', 'resi006'),
(7, 'Casing HP', 'resi007'),
(8, 'Alat tulis', 'resi008'),
(9, 'Komponen PC', 'resi009'),
(10, 'Tumbler', 'resi010'),
(11, 'Dokumen', '0392resi'),
(13, 'Kolor Zikrul', '12336'),
(14, 'Kolor Zikrul 2', 'RSXXL'),
(15, 'Kolor Zikrul 2', 'RSXXL'),
(16, 'Kolor Zikrul 2', 'RSXXL'),
(17, 'Kolor Zikrul 2', 'RSXXL'),
(18, 'Kolor Zikrul 3', '4XL'),
(19, 'Dokumen', 'RESI83729ASFN'),
(20, 'Dokumen', 'XXDERTFDEG'),
(21, 'Dokumen', 'XXDERTFDEG'),
(22, 'Dokumen', 'XXDERTFDEG'),
(23, 'Dokumen', 'abcdefahsagk'),
(24, 'Dokumen', 'resiiiiiiii3w4sfd'),
(25, 'Dokumen', 'resiiiiiiii3w4sfd'),
(26, 'ikan', '123123ccccc'),
(27, 'ayam', 'rasda4'),
(28, 'Dokumen', 'RESIZIKRULGACOR'),
(29, 'Dokumen', 'RESIZIKRULGACOR22'),
(30, 'dokumen', 'sdf'),
(31, 'dokumen', 'sdf3424'),
(32, 'Dokumen', '11241RESI'),
(33, 'Dokumen', '11241RESI55');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `pemilik_id` int(11) NOT NULL,
  `nama_pemilik` varchar(255) DEFAULT NULL,
  `status_pemilik` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_hp` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`pemilik_id`, `nama_pemilik`, `status_pemilik`, `email`, `no_hp`) VALUES
(1, 'Humbert', 'Mahasiswa', 'humbert@gmail.com', '082278346277'),
(2, 'Deri', 'Mahasiswa', 'Deri@gmail.com', '082356439988'),
(3, 'Arif', 'Staf', 'Arif@gmail.com', '08536666773'),
(4, 'Aurelio', 'Mahasiswa', 'Aurelio@gmail.com', '082289773412'),
(5, 'Lala Lili', 'Mahasiswa', 'Lalalili@gmail.com', '081278346247'),
(6, 'Marimas', 'Staf', 'Marimas@gmail.com', '081175376388'),
(7, 'Desi', 'Mahasiswa', 'Desi@gmail.com', '081234567890'),
(8, 'Sarianti', 'Staf', 'Sarianti@gmail.com', '08116363571'),
(9, 'Cindyrela', 'Mahasiswa', 'Cindyrela@gmail.com', '082280806750'),
(10, 'Dewi', 'Staf', 'Dewi@gmail.com', '081256754432'),
(11, 'Zikrul', 'mahasiswa', 'zikrul@gmail.com', '082313'),
(12, 'Zikrul ML', 'mahasiswa', 'zikrulda@gmail.com', '081111'),
(13, 'Zikrul ML', 'mahasiswa', 'zikrulda@gmail.com', '081111'),
(14, 'Zikrul ML', 'mahasiswa', 'zikrulsfd@gmail.com', '082313'),
(15, 'Zikrul ML', 'mahasiswa', 'zikrulda@gmail.com', '081111243'),
(16, 'Zikrul Gacor', 'mahasiswa', 'zikrulZeus@gmail.com', '0822'),
(17, 'Steven Cahyadi', 'mahasiswa', 'chatgpt@kedivan.me', '08227655464'),
(20, 'Dimas Adrian', 'mahasiswa', 'dimasadriangg069@gmail.com', '082283545937'),
(21, 'Zikrul', 'mahasiswa', 'zikrul@gmail.com', '12312'),
(22, 'Kirul Gacor', 'mahasiswa', 'zikruwel@gmail.com', '12312'),
(23, 'Kirul Gacor 123', 'mahasiswa', 'zikruw131el@gmail.com', '123121313'),
(24, 'Zikrulllll', 'mahasiswa', 'zikruw131el@gmail.com', '0123121313'),
(25, 'Zikrulllll24', 'mahasiswa', 'zikruwwewe131el@gmail.com', '0123121313wr'),
(26, 'Steven', 'mahasiswa', 'chandra23ti@mahasiswa.pcr.ac.id', '0123121313'),
(27, 'Steven', 'mahasiswa', 'chandra23ti@mahasiswa.pcr.ac.id', '0123121313'),
(28, 'sdf', 'staf', 'zikrulda@gmail.com', '67678'),
(29, 'asd', 'mahasiswa', 'dimasadriangg069@gmail.com', '08222'),
(30, 'Steven', 'mahasiswa', 'dimasadriangg069@gmail.com', '0123121313'),
(31, 'Dimas', 'mahasiswa', 'dimasadriangg069@gmail.com', '01231213132');

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `security_id` int(11) NOT NULL,
  `nama_security` varchar(255) DEFAULT NULL,
  `no_hp` char(20) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`security_id`, `nama_security`, `no_hp`, `username`, `password`) VALUES
(1, 'Rizki Wijaya', '081234567890', 'rizkiwijaya', 'password123'),
(2, 'Jaya Wibawa', '081234567891', 'jayawibawa', 'jaya123'),
(3, 'Budi Santoso', '081234567892', 'budisantoso', 'budi123'),
(4, 'Dodo Jay', '081234567893', 'dodojay', 'dodo123'),
(5, 'Eko Prasetyo', '081234567894', 'ekoprasetyo', 'eko123'),
(6, 'Didi Kembar', '081234567895', 'didikembar', 'didi123'),
(7, 'Guntur Silaban', '081234567896', 'guntursilaban', 'guntur123'),
(8, 'Slamet Sukses', '081234567897', 'slametsukses', 'slamet123'),
(9, 'Ivan Wahyu', '081234567898', 'ivanwahyu', 'ivan123'),
(10, 'Joko Wiranto', '081234567899', 'jokowiranto', 'joko123'),
(11, 'Admin', '0822', 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `serah_terima`
--

CREATE TABLE `serah_terima` (
  `serah_terima_id` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `waktu_terima` timestamp NULL DEFAULT NULL,
  `waktu_serah` timestamp NULL DEFAULT NULL,
  `ruang_paket` varchar(255) DEFAULT NULL,
  `kurir_id` int(11) DEFAULT NULL,
  `security_id` int(11) DEFAULT NULL,
  `pemilik_id` int(11) DEFAULT NULL,
  `paket_id` int(11) DEFAULT NULL,
  `foto_penyerahan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `serah_terima`
--

INSERT INTO `serah_terima` (`serah_terima_id`, `status`, `waktu_terima`, `waktu_serah`, `ruang_paket`, `kurir_id`, `security_id`, `pemilik_id`, `paket_id`, `foto_penyerahan`) VALUES
(1, 'Sudah Diserahkan', '2024-06-22 01:00:00', '2024-07-21 09:52:14', 'ruang direktorat', 1, 4, 2, 1, NULL),
(2, 'Sudah Diserahkan', '2024-06-23 03:30:00', '2024-06-24 03:38:56', 'ruang direktorat', 1, 4, 1, 2, NULL),
(3, 'Sudah Diserahkan', '2024-06-17 04:30:00', '2024-07-16 03:19:42', 'ruang sarana prasarana', 1, 4, 3, 3, NULL),
(4, 'Sudah Diserahkan', '2024-06-13 02:30:00', '2024-07-16 03:27:04', 'ruang sarana prasarana', 1, 5, 5, 4, NULL),
(5, 'Sudah Diserahkan', '2024-06-25 03:45:00', '2024-07-21 19:40:54', 'ruang direktorat', 5, 7, 4, 5, NULL),
(6, 'Sudah Diserahkan', '2024-04-12 01:00:00', '2024-07-21 17:33:45', 'ruang sarana prasarana', 9, 8, 8, 7, NULL),
(7, 'Sudah Diserahkan', '2024-06-23 07:00:00', '2024-06-24 03:38:56', 'ruang direktorat', 5, 4, 7, 8, NULL),
(8, 'Belum Diserahkan', '2024-06-05 08:00:00', NULL, 'ruang sarana prasarana', 7, 3, 6, 6, NULL),
(9, 'Sudah Diserahkan', '2024-06-12 01:00:00', '2024-06-25 03:00:00', 'ruang sarana prasarana', 4, 7, 10, 9, NULL),
(33, 'Sudah Diserahkan', '2024-07-21 20:10:30', '2024-07-21 20:14:09', 'Ruang Rektorat', 11, 11, 30, 32, '70584a9ea7aa134.jpg'),
(34, 'Belum Diserahkan', '2024-07-21 20:20:00', NULL, 'Ruang Rektorat', 1, 11, 31, 33, 'cts logo bg-circle.png');

-- --------------------------------------------------------

--
-- Stand-in structure for view `tampilpaketserah`
-- (See below for the actual view)
--
CREATE TABLE `tampilpaketserah` (
`jenis_paket` varchar(255)
,`no_resi` varchar(255)
,`serah_terima_id` int(11)
,`status` varchar(255)
,`waktu_terima` timestamp
,`waktu_serah` timestamp
,`ruang_paket` varchar(255)
,`kurir_id` int(11)
,`security_id` int(11)
,`pemilik_id` int(11)
,`paket_id` int(11)
,`foto_penyerahan` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tampiltabel`
-- (See below for the actual view)
--
CREATE TABLE `tampiltabel` (
`no_resi` varchar(255)
,`ekspedisi` varchar(255)
,`jenis_paket` varchar(255)
,`nama_pemilik` varchar(255)
,`penanggung_jawab` varchar(255)
,`ruang_paket` varchar(255)
,`email` varchar(255)
,`waktu_terima` timestamp
,`waktu_serah` timestamp
,`status` varchar(255)
,`foto_penyerahan` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tampiltabelbelum`
-- (See below for the actual view)
--
CREATE TABLE `tampiltabelbelum` (
`no_resi` varchar(255)
,`ekspedisi` varchar(255)
,`jenis_paket` varchar(255)
,`nama_pemilik` varchar(255)
,`status_pemilik` varchar(255)
,`penanggung_jawab` varchar(255)
,`ruang_paket` varchar(255)
,`email` varchar(255)
,`waktu_terima` timestamp
,`waktu_serah` timestamp
,`status` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `tampilpaketserah`
--
DROP TABLE IF EXISTS `tampilpaketserah`;

CREATE ALGORITHM=UNDEFINED DEFINER=`` SQL SECURITY DEFINER VIEW `tampilpaketserah`  AS SELECT `a`.`jenis_paket` AS `jenis_paket`, `a`.`no_resi` AS `no_resi`, `b`.`serah_terima_id` AS `serah_terima_id`, `b`.`status` AS `status`, `b`.`waktu_terima` AS `waktu_terima`, `b`.`waktu_serah` AS `waktu_serah`, `b`.`ruang_paket` AS `ruang_paket`, `b`.`kurir_id` AS `kurir_id`, `b`.`security_id` AS `security_id`, `b`.`pemilik_id` AS `pemilik_id`, `a`.`paket_id` AS `paket_id`, `b`.`foto_penyerahan` AS `foto_penyerahan` FROM (`paket` `a` join `serah_terima` `b` on(`a`.`paket_id` = `b`.`paket_id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `tampiltabel`
--
DROP TABLE IF EXISTS `tampiltabel`;

CREATE ALGORITHM=UNDEFINED DEFINER=`` SQL SECURITY DEFINER VIEW `tampiltabel`  AS SELECT `pk`.`no_resi` AS `no_resi`, `k`.`ekspedisi` AS `ekspedisi`, `pk`.`jenis_paket` AS `jenis_paket`, `p`.`nama_pemilik` AS `nama_pemilik`, `s`.`nama_security` AS `penanggung_jawab`, `st`.`ruang_paket` AS `ruang_paket`, `p`.`email` AS `email`, `st`.`waktu_terima` AS `waktu_terima`, `st`.`waktu_serah` AS `waktu_serah`, `st`.`status` AS `status`, `st`.`foto_penyerahan` AS `foto_penyerahan` FROM ((((`serah_terima` `st` join `kurir` `k` on(`st`.`kurir_id` = `k`.`kurir_id`)) join `paket` `pk` on(`pk`.`paket_id` = `st`.`paket_id`)) join `pemilik` `p` on(`p`.`pemilik_id` = `st`.`pemilik_id`)) join `security` `s` on(`s`.`security_id` = `st`.`security_id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `tampiltabelbelum`
--
DROP TABLE IF EXISTS `tampiltabelbelum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`` SQL SECURITY DEFINER VIEW `tampiltabelbelum`  AS SELECT `pk`.`no_resi` AS `no_resi`, `k`.`ekspedisi` AS `ekspedisi`, `pk`.`jenis_paket` AS `jenis_paket`, `p`.`nama_pemilik` AS `nama_pemilik`, `p`.`status_pemilik` AS `status_pemilik`, `s`.`nama_security` AS `penanggung_jawab`, `st`.`ruang_paket` AS `ruang_paket`, `p`.`email` AS `email`, `st`.`waktu_terima` AS `waktu_terima`, `st`.`waktu_serah` AS `waktu_serah`, `st`.`status` AS `status` FROM ((((`serah_terima` `st` join `kurir` `k` on(`st`.`kurir_id` = `k`.`kurir_id`)) join `paket` `pk` on(`pk`.`paket_id` = `st`.`paket_id`)) join `pemilik` `p` on(`p`.`pemilik_id` = `st`.`pemilik_id`)) join `security` `s` on(`s`.`security_id` = `st`.`security_id`)) WHERE `st`.`status` = 'Belum Diserahkan''Belum Diserahkan'  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`kurir_id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`paket_id`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`pemilik_id`);

--
-- Indexes for table `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`security_id`);

--
-- Indexes for table `serah_terima`
--
ALTER TABLE `serah_terima`
  ADD PRIMARY KEY (`serah_terima_id`),
  ADD KEY `fk_kurir_srhtrm` (`kurir_id`),
  ADD KEY `fk_security_srhtrm` (`security_id`),
  ADD KEY `fk_pemilik_srhtrm` (`pemilik_id`),
  ADD KEY `fk_paket_srhtrm` (`paket_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `kurir_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `paket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `pemilik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `security`
--
ALTER TABLE `security`
  MODIFY `security_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `serah_terima`
--
ALTER TABLE `serah_terima`
  MODIFY `serah_terima_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `serah_terima`
--
ALTER TABLE `serah_terima`
  ADD CONSTRAINT `fk_kurir_srhtrm` FOREIGN KEY (`kurir_id`) REFERENCES `kurir` (`kurir_id`),
  ADD CONSTRAINT `fk_paket_srhtrm` FOREIGN KEY (`paket_id`) REFERENCES `paket` (`paket_id`),
  ADD CONSTRAINT `fk_pemilik_srhtrm` FOREIGN KEY (`pemilik_id`) REFERENCES `pemilik` (`pemilik_id`),
  ADD CONSTRAINT `fk_security_srhtrm` FOREIGN KEY (`security_id`) REFERENCES `security` (`security_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
