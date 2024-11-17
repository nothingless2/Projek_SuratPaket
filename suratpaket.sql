-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for suratpaket
CREATE DATABASE IF NOT EXISTS `suratpaket` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `suratpaket`;

-- Dumping structure for table suratpaket.kurir
CREATE TABLE IF NOT EXISTS `kurir` (
  `kurir_id` int(11) NOT NULL,
  `ekspedisi` varchar(255) DEFAULT NULL,
  `nama_kurir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table suratpaket.kurir: ~7 rows (approximately)
INSERT INTO `kurir` (`kurir_id`, `ekspedisi`, `nama_kurir`) VALUES
	(1, 'JNE', 'Dimas'),
	(4, 'JNT', 'Ruben'),
	(5, 'SiCepat', 'Denis'),
	(7, 'ShopeeExpress', 'Doni'),
	(9, 'AnterAja', 'Atong'),
	(11, 'Pos Indonesia', 'Badu'),
	(12, 'TIKI', 'Fairi');

-- Dumping structure for table suratpaket.paket
CREATE TABLE IF NOT EXISTS `paket` (
  `paket_id` int(11) NOT NULL,
  `jenis_paket` varchar(255) DEFAULT NULL,
  `no_resi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table suratpaket.paket: ~35 rows (approximately)
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
	(33, 'Dokumen', '11241RESI55'),
	(0, 's', 'dsd'),
	(0, 'f', 'dsd'),
	(0, 'Makanan', 'dsd4352');

-- Dumping structure for table suratpaket.pemilik
CREATE TABLE IF NOT EXISTS `pemilik` (
  `pemilik_id` int(11) NOT NULL,
  `nama_pemilik` varchar(255) DEFAULT NULL,
  `status_pemilik` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_hp` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table suratpaket.pemilik: ~32 rows (approximately)
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
	(20, 'Dimas Adrian', 'mahasiswa', 'dimas@gmail.com', '082283545937'),
	(21, 'Zikrul', 'mahasiswa', 'zikrul@gmail.com', '12312'),
	(22, 'Kirul Gacor', 'mahasiswa', 'zikruwel@gmail.com', '12312'),
	(23, 'Kirul Gacor 123', 'mahasiswa', 'zikruw131el@gmail.com', '123121313'),
	(24, 'Zikrulllll', 'mahasiswa', 'zikruw131el@gmail.com', '0123121313'),
	(25, 'Zikrulllll24', 'mahasiswa', 'zikruwwewe131el@gmail.com', '0123121313wr'),
	(26, 'Steven', 'mahasiswa', 'chandra@gmail.com', '0123121313'),
	(27, 'Steven', 'mahasiswa', 'chandra@gmail.com', '0123121313'),
	(28, 'sdf', 'staf', 'zikrulda@gmail.com', '67678'),
	(29, 'asd', 'mahasiswa', 'dimas@gmail.com', '08222'),
	(30, 'Steven', 'mahasiswa', 'dimas@gmail.com', '0123121313'),
	(31, 'Dimas', 'mahasiswa', 'dimas@gmail.com', '01231213132'),
	(0, 'dd', 'mahasiswa', 'dd@gmail.com', 'ddd'),
	(0, 'd', 'mahasiswa', 'steven@gmail.com', 'ddd'),
	(0, 'Steven', 'mahasiswa', 'steven@gmail.com', 'ddd093');

-- Dumping structure for table suratpaket.security
CREATE TABLE IF NOT EXISTS `security` (
  `security_id` int(11) NOT NULL,
  `nama_security` varchar(255) DEFAULT NULL,
  `no_hp` char(20) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table suratpaket.security: ~11 rows (approximately)
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

-- Dumping structure for table suratpaket.serah_terima
CREATE TABLE IF NOT EXISTS `serah_terima` (
  `serah_terima_id` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `waktu_terima` timestamp NULL DEFAULT NULL,
  `waktu_serah` timestamp NULL DEFAULT NULL,
  `ruang_paket` varchar(255) DEFAULT NULL,
  `kurir_id` int(11) DEFAULT NULL,
  `security_id` int(11) DEFAULT NULL,
  `pemilik_id` int(11) DEFAULT NULL,
  `paket_id` int(11) DEFAULT NULL,
  `foto_penyerahan` varchar(100) DEFAULT NULL,
  `foto_bukti` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table suratpaket.serah_terima: ~14 rows (approximately)
INSERT INTO `serah_terima` (`serah_terima_id`, `status`, `waktu_terima`, `waktu_serah`, `ruang_paket`, `kurir_id`, `security_id`, `pemilik_id`, `paket_id`, `foto_penyerahan`, `foto_bukti`) VALUES
	(1, 'Sudah Diserahkan', '2024-06-22 01:00:00', '2024-07-21 09:52:14', 'ruang direktorat', 1, 4, 2, 1, NULL, ''),
	(2, 'Sudah Diserahkan', '2024-06-23 03:30:00', '2024-06-24 03:38:56', 'ruang direktorat', 1, 4, 1, 2, NULL, ''),
	(3, 'Sudah Diserahkan', '2024-06-17 04:30:00', '2024-07-16 03:19:42', 'ruang sarana prasarana', 1, 4, 3, 3, NULL, ''),
	(4, 'Sudah Diserahkan', '2024-06-13 02:30:00', '2024-07-16 03:27:04', 'ruang sarana prasarana', 1, 5, 5, 4, NULL, ''),
	(5, 'Sudah Diserahkan', '2024-06-25 03:45:00', '2024-07-21 19:40:54', 'ruang direktorat', 5, 7, 4, 5, NULL, ''),
	(6, 'Sudah Diserahkan', '2024-04-12 01:00:00', '2024-07-21 17:33:45', 'ruang sarana prasarana', 9, 8, 8, 7, NULL, ''),
	(7, 'Sudah Diserahkan', '2024-06-23 07:00:00', '2024-06-24 03:38:56', 'ruang direktorat', 5, 4, 7, 8, NULL, ''),
	(8, 'Sudah Diserahkan', '2024-06-05 08:00:00', '2024-07-23 05:34:00', 'ruang sarana prasarana', 7, 3, 6, 6, NULL, 'Foto Tidak Ada'),
	(9, 'Sudah Diserahkan', '2024-06-12 01:00:00', '2024-06-25 03:00:00', 'ruang sarana prasarana', 4, 7, 10, 9, NULL, ''),
	(33, 'Sudah Diserahkan', '2024-07-21 20:10:30', '2024-07-21 20:14:09', 'Ruang Rektorat', 11, 11, 30, 32, '70584a9ea7aa134.jpg', ''),
	(34, 'Sudah Diserahkan', '2024-07-21 20:20:00', '2024-07-23 05:35:13', 'Ruang Rektorat', 1, 11, 31, 33, 'cts logo bg-circle.png', 'Foto Tidak Ada'),
	(0, 'Sudah Diserahkan', '2024-07-23 05:38:56', '2024-07-23 05:56:01', 'Ruang Rektorat', 1, 11, 0, 0, 'profile.jpg.jpg', 'Foto Tidak Ada'),
	(0, 'Sudah Diserahkan', '2024-07-23 05:52:20', '2024-07-23 05:56:01', 'Ruang Rektorat', 1, 11, 0, 0, 'profile.jpg', 'Foto Tidak Ada'),
	(0, 'Belum Diserahkan', '2024-07-23 06:03:32', NULL, 'Ruang Rektorat', 1, 11, 0, 0, 'profile.jpg', NULL);

-- Dumping structure for view suratpaket.tampilpaketserah
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `tampilpaketserah` (
	`jenis_paket` VARCHAR(255) NULL COLLATE 'utf8mb4_general_ci',
	`no_resi` VARCHAR(255) NULL COLLATE 'utf8mb4_general_ci',
	`serah_terima_id` INT(11) NOT NULL,
	`status` VARCHAR(255) NULL COLLATE 'utf8mb4_general_ci',
	`waktu_terima` TIMESTAMP NULL,
	`waktu_serah` TIMESTAMP NULL,
	`ruang_paket` VARCHAR(255) NULL COLLATE 'utf8mb4_general_ci',
	`kurir_id` INT(11) NULL,
	`security_id` INT(11) NULL,
	`pemilik_id` INT(11) NULL,
	`paket_id` INT(11) NOT NULL,
	`foto_penyerahan` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`foto_bukti` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Dumping structure for view suratpaket.tampiltabel
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `tampiltabel` (
	`no_resi` VARCHAR(255) NULL COLLATE 'utf8mb4_general_ci',
	`ekspedisi` VARCHAR(255) NULL COLLATE 'utf8mb4_general_ci',
	`jenis_paket` VARCHAR(255) NULL COLLATE 'utf8mb4_general_ci',
	`nama_pemilik` VARCHAR(255) NULL COLLATE 'utf8mb4_general_ci',
	`penanggung_jawab` VARCHAR(255) NULL COLLATE 'utf8mb4_general_ci',
	`ruang_paket` VARCHAR(255) NULL COLLATE 'utf8mb4_general_ci',
	`email` VARCHAR(255) NULL COLLATE 'utf8mb4_general_ci',
	`waktu_terima` TIMESTAMP NULL,
	`waktu_serah` TIMESTAMP NULL,
	`status` VARCHAR(255) NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Dumping structure for view suratpaket.tampiltabelbelum
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `tampiltabelbelum` (
	`no_resi` VARCHAR(255) NULL COLLATE 'utf8mb4_general_ci',
	`ekspedisi` VARCHAR(255) NULL COLLATE 'utf8mb4_general_ci',
	`jenis_paket` VARCHAR(255) NULL COLLATE 'utf8mb4_general_ci',
	`nama_pemilik` VARCHAR(255) NULL COLLATE 'utf8mb4_general_ci',
	`status_pemilik` VARCHAR(255) NULL COLLATE 'utf8mb4_general_ci',
	`penanggung_jawab` VARCHAR(255) NULL COLLATE 'utf8mb4_general_ci',
	`ruang_paket` VARCHAR(255) NULL COLLATE 'utf8mb4_general_ci',
	`email` VARCHAR(255) NULL COLLATE 'utf8mb4_general_ci',
	`waktu_terima` TIMESTAMP NULL,
	`waktu_serah` TIMESTAMP NULL,
	`status` VARCHAR(255) NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Dumping structure for view suratpaket.tampilpaketserah
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `tampilpaketserah`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `tampilpaketserah` AS SELECT jenis_paket, no_resi, serah_terima_id, status, waktu_terima, waktu_serah, ruang_paket,  kurir_id , security_id, pemilik_id, a.paket_id, foto_penyerahan, foto_bukti FROM PAKET a JOIN SERAH_TERIMA b ON a.paket_id = b.paket_id ;

-- Dumping structure for view suratpaket.tampiltabel
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `tampiltabel`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `tampiltabel` AS SELECT no_resi, ekspedisi, jenis_paket, nama_pemilik, nama_security AS penanggung_jawab, ruang_paket, email, waktu_terima, waktu_serah, status FROM serah_terima st join kurir k ON st.kurir_id = k.kurir_id JOIN paket pk ON pk.paket_id = st.paket_id JOIN pemilik p ON p.pemilik_id=st.pemilik_id JOIN security s on s.security_id = st.security_id ;

-- Dumping structure for view suratpaket.tampiltabelbelum
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `tampiltabelbelum`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `tampiltabelbelum` AS SELECT no_resi, ekspedisi, jenis_paket, nama_pemilik, status_pemilik, nama_security AS penanggung_jawab, ruang_paket, email, waktu_terima, waktu_serah, status FROM serah_terima st join kurir k ON st.kurir_id = k.kurir_id JOIN paket pk ON pk.paket_id = st.paket_id JOIN pemilik p ON p.pemilik_id=st.pemilik_id JOIN security s on s.security_id = st.security_id where status = 'Belum Diserahkan' ;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
