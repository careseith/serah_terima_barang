-- --------------------------------------------------------
-- Host:                         localhost
-- Versi server:                 5.7.24 - MySQL Community Server (GPL)
-- OS Server:                    Win64
-- HeidiSQL Versi:               10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Membuang struktur basisdata untuk serahterimabarang
DROP DATABASE IF EXISTS `serahterimabarang`;
CREATE DATABASE IF NOT EXISTS `serahterimabarang` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `serahterimabarang`;

-- membuang struktur untuk table serahterimabarang.tb_barang
DROP TABLE IF EXISTS `tb_barang`;
CREATE TABLE IF NOT EXISTS `tb_barang` (
  `barangId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `beritaAcaraId` int(11) unsigned NOT NULL,
  `barangNama` varchar(255) NOT NULL,
  `barangMerk` varchar(255) NOT NULL,
  `barangAlat` varchar(255) NOT NULL,
  `barangJumlah` varchar(255) NOT NULL,
  PRIMARY KEY (`barangId`),
  KEY `FK_tb_barang_tb_berita_acara` (`beritaAcaraId`),
  CONSTRAINT `FK_tb_barang_tb_berita_acara` FOREIGN KEY (`beritaAcaraId`) REFERENCES `tb_berita_acara` (`beritaAcaraId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel serahterimabarang.tb_barang: ~0 rows (lebih kurang)
DELETE FROM `tb_barang`;
/*!40000 ALTER TABLE `tb_barang` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_barang` ENABLE KEYS */;

-- membuang struktur untuk table serahterimabarang.tb_berita_acara
DROP TABLE IF EXISTS `tb_berita_acara`;
CREATE TABLE IF NOT EXISTS `tb_berita_acara` (
  `beritaAcaraId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `beritaAcaraNama` varchar(255) NOT NULL,
  `beritaAcaraTanggal` date NOT NULL,
  `beritaAcaraTempat` varchar(255) NOT NULL,
  `pihakSatuId` int(10) unsigned NOT NULL,
  `pihakSatuNama` varchar(255) NOT NULL,
  `pihakSatuJabatan` varchar(255) NOT NULL,
  `pihakSatuDivisi` varchar(255) NOT NULL,
  `pihakDuaId` int(10) unsigned NOT NULL,
  `pihakDuaNama` varchar(255) NOT NULL,
  `pihakDuaJabatan` varchar(255) NOT NULL,
  `pihakDuaDivisi` varchar(255) NOT NULL,
  `beritaAcaraBodySatu` text NOT NULL,
  `beritaAcaraBodyDua` text NOT NULL,
  `ttd1` text,
  `ttd2` text,
  `ttd3` text,
  `Kolom 18` text,
  `posting` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`beritaAcaraId`),
  KEY `FK_tb_berita_acara_tb_pegawai` (`pihakSatuId`),
  KEY `FK_tb_berita_acara_tb_pegawai_2` (`pihakDuaId`),
  CONSTRAINT `FK_tb_berita_acara_tb_pegawai` FOREIGN KEY (`pihakSatuId`) REFERENCES `tb_pegawai` (`pegawaiId`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `FK_tb_berita_acara_tb_pegawai_2` FOREIGN KEY (`pihakDuaId`) REFERENCES `tb_pegawai` (`pegawaiId`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel serahterimabarang.tb_berita_acara: ~0 rows (lebih kurang)
DELETE FROM `tb_berita_acara`;
/*!40000 ALTER TABLE `tb_berita_acara` DISABLE KEYS */;
INSERT INTO `tb_berita_acara` (`beritaAcaraId`, `beritaAcaraNama`, `beritaAcaraTanggal`, `beritaAcaraTempat`, `pihakSatuId`, `pihakSatuNama`, `pihakSatuJabatan`, `pihakSatuDivisi`, `pihakDuaId`, `pihakDuaNama`, `pihakDuaJabatan`, `pihakDuaDivisi`, `beritaAcaraBodySatu`, `beritaAcaraBodyDua`, `ttd1`, `ttd2`, `ttd3`, `Kolom 18`, `posting`) VALUES
	(1, 'asdasd', '2021-03-13', 'sdf', 1, 'sdf', 'sdf', 'sdf', 2, 'sdf', 'sf', 'sdf', 'sdf', 'sdf', NULL, NULL, NULL, NULL, b'0');
/*!40000 ALTER TABLE `tb_berita_acara` ENABLE KEYS */;

-- membuang struktur untuk table serahterimabarang.tb_divisi
DROP TABLE IF EXISTS `tb_divisi`;
CREATE TABLE IF NOT EXISTS `tb_divisi` (
  `divisiId` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `divisiNama` varchar(255) NOT NULL,
  PRIMARY KEY (`divisiId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel serahterimabarang.tb_divisi: ~2 rows (lebih kurang)
DELETE FROM `tb_divisi`;
/*!40000 ALTER TABLE `tb_divisi` DISABLE KEYS */;
INSERT INTO `tb_divisi` (`divisiId`, `divisiNama`) VALUES
	(1, 'Teknologi Informasi'),
	(2, 'TPKB');
/*!40000 ALTER TABLE `tb_divisi` ENABLE KEYS */;

-- membuang struktur untuk table serahterimabarang.tb_jabatan
DROP TABLE IF EXISTS `tb_jabatan`;
CREATE TABLE IF NOT EXISTS `tb_jabatan` (
  `jabatanId` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `jabatanNama` varchar(255) NOT NULL,
  PRIMARY KEY (`jabatanId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel serahterimabarang.tb_jabatan: ~2 rows (lebih kurang)
DELETE FROM `tb_jabatan`;
/*!40000 ALTER TABLE `tb_jabatan` DISABLE KEYS */;
INSERT INTO `tb_jabatan` (`jabatanId`, `jabatanNama`) VALUES
	(1, 'Pemelihara ITC'),
	(2, 'Operator HT');
/*!40000 ALTER TABLE `tb_jabatan` ENABLE KEYS */;

-- membuang struktur untuk table serahterimabarang.tb_pegawai
DROP TABLE IF EXISTS `tb_pegawai`;
CREATE TABLE IF NOT EXISTS `tb_pegawai` (
  `pegawaiId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pegawaiNama` varchar(255) NOT NULL,
  `divisiId` tinyint(4) unsigned NOT NULL,
  `jabatanId` tinyint(4) unsigned NOT NULL,
  PRIMARY KEY (`pegawaiId`),
  KEY `FK_tb_pegawai_tb_divisi` (`divisiId`),
  KEY `FK_tb_pegawai_tb_jabatan` (`jabatanId`),
  CONSTRAINT `FK_tb_pegawai_tb_divisi` FOREIGN KEY (`divisiId`) REFERENCES `tb_divisi` (`divisiId`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_tb_pegawai_tb_jabatan` FOREIGN KEY (`jabatanId`) REFERENCES `tb_jabatan` (`jabatanId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel serahterimabarang.tb_pegawai: ~2 rows (lebih kurang)
DELETE FROM `tb_pegawai`;
/*!40000 ALTER TABLE `tb_pegawai` DISABLE KEYS */;
INSERT INTO `tb_pegawai` (`pegawaiId`, `pegawaiNama`, `divisiId`, `jabatanId`) VALUES
	(1, 'Aidil Fitri', 1, 1),
	(2, 'Rabiyanoor', 2, 2);
/*!40000 ALTER TABLE `tb_pegawai` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
