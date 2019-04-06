-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Apr 2019 pada 11.56
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms_gammu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `autoreply`
--

CREATE TABLE `autoreply` (
  `keyword` varchar(50) NOT NULL DEFAULT '',
  `reply` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `autoreply`
--

INSERT INTO `autoreply` (`keyword`, `reply`) VALUES
('REG', 'Anda Berhasil untuk Berlangganan...'),
('UNREG', 'Anda Berhasil untuk Berhenti Berlangganan...'),
('UDIN', 'Designer Developer & Freelance, Indonesia ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daemons`
--

CREATE TABLE `daemons` (
  `Start` text NOT NULL,
  `Info` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gammu`
--

CREATE TABLE `gammu` (
  `Version` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `gammu`
--

INSERT INTO `gammu` (`Version`) VALUES
(11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `inbox`
--

CREATE TABLE `inbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ReceivingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Text` text NOT NULL,
  `SenderNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) UNSIGNED NOT NULL,
  `RecipientID` text NOT NULL,
  `Processed` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_user` varchar(8) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `bagian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_user`, `nama_user`, `username`, `password`, `bagian`) VALUES
('1', 'ilham fatkur', 'ilham', '123', 'COP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `outbox`
--

CREATE TABLE `outbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Text` text,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) UNSIGNED NOT NULL,
  `MultiPart` enum('false','true') DEFAULT 'false',
  `RelativeValidity` int(11) DEFAULT '-1',
  `SenderID` varchar(255) DEFAULT NULL,
  `SendingTimeOut` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryReport` enum('default','yes','no') DEFAULT 'default',
  `CreatorID` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `outbox_multipart`
--

CREATE TABLE `outbox_multipart` (
  `Text` text,
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text,
  `ID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `SequencePosition` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pbk`
--

CREATE TABLE `pbk` (
  `ID` int(11) NOT NULL,
  `GroupID` int(11) NOT NULL DEFAULT '-1',
  `Name` text NOT NULL,
  `Number` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pbk`
--

INSERT INTO `pbk` (`ID`, `GroupID`, `Name`, `Number`) VALUES
(1, 2, 'Tommy Utama', '081363886626'),
(2, 2, 'Willy Fernando', '081268888888'),
(3, 3, 'Roki Aditama', '082167771233'),
(4, 1, 'Andriano Saputra', '087812444555');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pbk_groups`
--

CREATE TABLE `pbk_groups` (
  `Name` text NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pbk_groups`
--

INSERT INTO `pbk_groups` (`Name`, `ID`) VALUES
('Umum', 1),
('Keluarga', 2),
('Kantor', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `phones`
--

CREATE TABLE `phones` (
  `ID` text NOT NULL,
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TimeOut` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Send` enum('yes','no') NOT NULL DEFAULT 'no',
  `Receive` enum('yes','no') NOT NULL DEFAULT 'no',
  `IMEI` varchar(35) NOT NULL,
  `Client` text NOT NULL,
  `Battery` int(11) NOT NULL DEFAULT '0',
  `Signal` int(11) NOT NULL DEFAULT '0',
  `Sent` int(11) NOT NULL DEFAULT '0',
  `Received` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `phones`
--

INSERT INTO `phones` (`ID`, `UpdatedInDB`, `InsertIntoDB`, `TimeOut`, `Send`, `Receive`, `IMEI`, `Client`, `Battery`, `Signal`, `Sent`, `Received`) VALUES
('Modem1', '2016-04-26 04:09:15', '2016-04-26 04:08:10', '2016-04-26 04:09:25', 'yes', 'yes', '867749010708695', 'Gammu 1.28.90, Windows Server 2007, GCC 4.4, MinGW 3.13', 0, 33, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjaman`
--

CREATE TABLE `pinjaman` (
  `kode` varchar(50) NOT NULL,
  `no_antri` varchar(150) NOT NULL,
  `nama` text NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `jumlah_pinjam` int(11) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `status` varchar(150) NOT NULL,
  `ket_pinjam` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pinjaman`
--

INSERT INTO `pinjaman` (`kode`, `no_antri`, `nama`, `tgl_pinjam`, `jumlah_pinjam`, `telp`, `alamat`, `status`, `ket_pinjam`) VALUES
('PN0001', 'SO201904001', 'Yuri Dimas', '2019-04-12', 2000000, '0021312312321', 'babatana', 'Belum Lengkap', 'lalalal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `polling`
--

CREATE TABLE `polling` (
  `id_polling` int(5) NOT NULL,
  `keyword` varchar(50) NOT NULL,
  `pilihan` varchar(255) NOT NULL,
  `total` int(5) NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `polling`
--

INSERT INTO `polling` (`id_polling`, `keyword`, `pilihan`, `total`, `aktif`) VALUES
(1, 'SKom', 'SarjanaKomedi', 1, 'Y'),
(2, 'DW', 'Dewiit Safitri', 1, 'Y'),
(3, 'TU', 'Tommu Utama', 0, 'Y'),
(4, 'WF', 'Willy Fernando', 1, 'Y'),
(5, 'LH', 'Laura Izzatin Nissa', 0, 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sentitems`
--

CREATE TABLE `sentitems` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryDateTime` timestamp NULL DEFAULT NULL,
  `Text` text NOT NULL,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `SenderID` varchar(255) NOT NULL,
  `SequencePosition` int(11) NOT NULL DEFAULT '1',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error') NOT NULL DEFAULT 'SendingOK',
  `StatusError` int(11) NOT NULL DEFAULT '-1',
  `TPMR` int(11) NOT NULL DEFAULT '-1',
  `RelativeValidity` int(11) NOT NULL DEFAULT '-1',
  `CreatorID` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sentitems`
--

INSERT INTO `sentitems` (`UpdatedInDB`, `InsertIntoDB`, `SendingDateTime`, `DeliveryDateTime`, `Text`, `DestinationNumber`, `Coding`, `UDH`, `SMSCNumber`, `Class`, `TextDecoded`, `ID`, `SenderID`, `SequencePosition`, `Status`, `StatusError`, `TPMR`, `RelativeValidity`, `CreatorID`) VALUES
('2016-04-25 16:22:07', '0000-00-00 00:00:00', '2016-04-25 16:22:07', NULL, '00480061006C006F006F0020006400650077006900200073006100790061006E0067006B00750075002C002E002E', '082173054501', 'Default_No_Compression', '', '+6281100000', -1, 'Haloo dewi sayangkuu,..', 1, 'Modem1', 1, 'SendingOKNoReport', -1, 105, 255, 'Gammu 1.28.90'),
('2016-04-25 17:14:05', '0000-00-00 00:00:00', '2016-04-25 17:14:05', NULL, '00530065006C0061006D0061007400200074006900640075007200200073006100790061006E0067006B00750075002C002E002E0020003A002A', '082173054501', 'Default_No_Compression', '', '+6281100000', -1, 'Selamat tidur sayangkuu,.. :*', 2, 'Modem1', 1, 'SendingOKNoReport', -1, 106, 255, 'Gammu 1.28.90'),
('2016-04-26 03:46:34', '0000-00-00 00:00:00', '2016-04-26 03:46:34', NULL, '0044006500770069002000420075007200750061006B002C002E002E', '082173054501', 'Default_No_Compression', '', '+6281100000', -1, 'Dewi Buruak,..', 8, 'Modem1', 1, 'SendingOKNoReport', -1, 108, 255, 'Gammu 1.28.90'),
('2016-04-26 03:46:37', '0000-00-00 00:00:00', '2016-04-26 03:46:37', NULL, '0041007300730061006C0061006D002C00200041006B0075006E00200061006E006400610020007300750064006100680020006B0061006D006900200061006B007400690066006B0061006E002C002E002E', '085728803444', 'Default_No_Compression', '', '+6281100000', -1, 'Assalam, Akun anda sudah kami aktifkan,..', 5, 'Modem1', 1, 'SendingOKNoReport', -1, 109, 255, 'Gammu'),
('2016-04-26 04:08:44', '0000-00-00 00:00:00', '2016-04-26 04:08:44', NULL, '0044006900680061007200610070006B0061006E0020006B00650070006100640061002000730065006D007500610020006F00720061006E006700200074007500610020006C00650062006900680020006D0065006D0070006500720068006100740069006B0061006E0020007000650072006700610075006C0061006E00200061006E0061006B002D0061006E0061006B006E00790061002E', '+6285765456523', 'Default_No_Compression', '', '+6281100000', -1, 'Diharapkan kepada semua orang tua lebih memperhatikan pergaulan anak-anaknya.', 9, 'Modem1', 1, 'SendingOKNoReport', -1, 110, 255, 'Gammu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sms_inbox`
--

CREATE TABLE `sms_inbox` (
  `id` int(11) NOT NULL,
  `pesan` text,
  `nohp` varchar(20) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `modem` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sms_inbox`
--

INSERT INTO `sms_inbox` (`id`, `pesan`, `nohp`, `waktu`, `modem`) VALUES
(2, 'Apakah menerima jasa pembuatan aplikasi?', '+6285765456523', '2016-04-26 10:52:41', 'Modem1'),
(3, 'Bagaimana caranya mendapatkan aplikasi yang ada disitus www.sarjanakomedi.com', '+6285765456523', '2016-04-26 10:56:26', 'Modem1'),
(4, 'Haloo selamat siang mas, bagaimana kabarnya?...', '+6285765456523', '2016-04-26 11:01:39', 'Modem1'),
(5, 'Selamat hari raya idul adha SarjanaKomedi..', '+6285765456523', '2016-04-26 11:07:16', 'Modem1'),
(6, 'REG INFO', '+6285765456523', '2016-04-26 11:08:07', 'Modem1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sms_outbox`
--

CREATE TABLE `sms_outbox` (
  `no` int(11) NOT NULL,
  `pesan` text NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihan`
--

CREATE TABLE `tagihan` (
  `no_account` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `tgl_akad` date NOT NULL,
  `kredit` int(11) NOT NULL,
  `tgl_jt` int(11) NOT NULL,
  `ang01` int(11) NOT NULL,
  `byr_pokok` int(11) NOT NULL,
  `byr_bunga` int(11) NOT NULL,
  `tot_angsuran` varchar(10) NOT NULL,
  `tot_tagihan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tagihan`
--

INSERT INTO `tagihan` (`no_account`, `nama`, `telp`, `tgl_akad`, `kredit`, `tgl_jt`, `ang01`, `byr_pokok`, `byr_bunga`, `tot_angsuran`, `tot_tagihan`) VALUES
('081.000010.0', 'LISA SULISTYAWATI', '', '0000-00-00', 0, 0, 0, 0, 0, 'NAN', 0),
('081.000117.0', 'HJ.HENY WAHYUNI  / KLP 285', '08273642818', '2012-05-14', 75000000, 14, 51, 1250000, 600000, '60', 1850000),
('081.000145.0', 'TRI WILUJENG FITRININGSIH / 185', '08273642818', '2012-03-08', 25000000, 3, 17, 694500, 200000, '35.9971202', 894500),
('081.000178.0', 'NURHAYATI / 235', '08273642818', '2012-11-14', 35000000, 14, 36, 729200, 280000, '47.9978058', 1009200),
('081.000184.0', 'INDAH ASTUTIK / 431', '08273642818', '2012-12-17', 105000000, 17, 67, 875000, 840000, '120', 1715000),
('081.000206.0', 'SUHERMIN', '08273642818', '0000-00-00', 0, 0, 0, 0, 0, 'NAN', 0),
('081.000216.0', 'NURIYAH / 307', '08273642818', '2013-02-22', 80000000, 22, 25, 1333400, 640000, '59.9970001', 1973400),
('081.000263.0', 'SETIYO RAHAYU KLP 36', '08273642818', '2013-07-30', 50000000, 30, 49, 833400, 500000, '59.9952003', 1333400),
('083.000003.0', 'PURWATI / KLP 174', '08273642818', '2012-06-29', 103800000, 29, 73, 2883400, 0, '35.9991676', 2883400),
('083.000006.0', 'TUTUT YENI SETIYOWATI / 543', '08273642818', '2014-08-05', 79450000, 8, 45, 1324200, 635600, '59.9984896', 1959800),
('100.000020.0', 'ERMA DYAH CHRISTIANA RETANG / ALB', '08273642818', '2011-09-14', 30000000, 14, 12, 833400, 300000, '35.9971202', 1133400),
('100.000114.0', 'YULI TANTI  WIDIYATI / ALB', '08273642818', '2013-05-23', 350000000, 23, 17, 14583400, 3500000, '23.9998902', 18083400),
('101.000009.0', 'LILIK SURYANINGSIH / 375', '08273642818', '2014-08-09', 100000000, 8, 33, 1666700, 1000000, '59.9988000', 2666700),
('101.000039.0', 'RESTU MIARTIN / KLP 468', '08273642818', '2014-11-28', 50000000, 28, 20, 833400, 500000, '59.9952003', 1333400),
('101.000062.0', 'ENDANG SETIAWATI / 436', '08273642818', '2015-03-13', 50000000, 13, 21, 833400, 500000, '59.9952003', 1333400),
('101.000068.0', 'MARATUS SOLICHAH / 462', '08273642818', '2015-03-24', 80000000, 24, 50, 1333400, 800000, '59.9970001', 2133400),
('101.000072.0', 'WIDYA RATNA', '08273642818', '0000-00-00', 0, 0, 0, 0, 0, 'NAN', 0),
('101.000079.0', 'SRI WAHYUNINGSIH  / 171', '08273642818', '2015-04-14', 500000000, 14, 23, 8333400, 5000000, '59.9995200', 13333400),
('101.000082.0', 'SEKAR RANI PROBO  / 369', '08273642818', '2015-04-24', 200000000, 24, 47, 3333400, 2000000, '59.9988000', 5333400),
('101.000087.0', 'RISA UDARI', '08273642818', '0000-00-00', 0, 0, 0, 0, 0, 'NAN', 0),
('101.000089.0', 'LAKSMI WIDYANINGRUM KLP 284', '08273642818', '2015-07-05', 45000000, 7, 29, 937500, 450000, '48', 1387500),
('101.000103.0', 'LIES JUNIAH PEKASA / 571', '08273642818', '2015-03-06', 50000000, 3, 32, 833400, 500000, '59.9952003', 1333400),
('101.000104.0', 'SAONAH /179', '08273642818', '2015-05-06', 100000000, 5, 28, 1666700, 1000000, '59.9988000', 2666700),
('101.000105.0', 'DESI KRISTIN NATALIA DAY / 488', '08273642818', '2015-11-06', 3000000, 11, 2, 250000, 30000, '12', 280000),
('101.000112.0', 'TITIK EKASARI / 363', '08273642818', '2015-06-19', 60000000, 19, 45, 1000000, 600000, '60', 1600000),
('101.000117.0', 'NURHAYATI / 246', '08273642818', '2015-06-24', 50000000, 24, 29, 833400, 500000, '59.9952003', 1333400),
('101.000120.0', 'ANITA  SETIAWATI', '08273642818', '0000-00-00', 0, 0, 0, 0, 0, 'NAN', 0),
('101.000121.0', 'NOVRIDA SARADINA / 306', '08273642818', '2015-01-07', 84000000, 1, 45, 1400000, 840000, '60', 2240000),
('101.000123.0', 'RINI SULISTYAWATI / ALB', '08273642818', '2015-08-07', 40000000, 8, 45, 833400, 440000, '47.9961603', 1273400),
('101.000126.0', 'ASMAWATI KLP 493', '08273642818', '2015-07-30', 78000000, 30, 41, 1300000, 780000, '60', 2080000),
('101.000130.0', 'ENDANG WAHYUNINGSIH / 364', '08273642818', '2015-08-20', 40000000, 20, 44, 833400, 400000, '47.9961603', 1233400),
('101.000145.0', 'NURDIANA AGUSTIN / 368', '08273642818', '2015-09-21', 60000000, 21, 29, 1000000, 600000, '60', 1600000),
('101.000151.0', 'SRI HERAWATI / 255', '08273642818', '2015-07-10', 50000000, 7, 41, 833400, 500000, '59.9952003', 1333400),
('101.000152.0', 'SITI AMANAH MENIK / 306', '08273642818', '2015-10-20', 60000000, 20, 44, 1250000, 600000, '48', 1850000),
('101.000158.0', 'SULISTIYOWATI / 451', '08273642818', '2015-10-29', 46000000, 29, 11, 958400, 460000, '47.9966611', 1418400),
('101.000189.0', 'RR. RIEN SUSANA CAHYANTI  / 486', '08273642818', '2016-01-14', 50000000, 14, 13, 2083400, 500000, '23.9992320', 2583400),
('101.000196.0', 'EVA CHRISTINA / 571', '08273642818', '2016-01-26', 50000000, 26, 30, 833400, 500000, '59.9952003', 1333400),
('101.000197.0', 'SARMIYATI / 350', '08273642818', '2016-01-27', 60000000, 27, 12, 1000000, 600000, '60', 1600000),
('101.000198.0', 'TUTIEK SRI UTAMI / 392', '08273642818', '2016-10-02', 30000000, 10, 38, 829900, 300000, '36.1489336', 1129900),
('101.000200.0', 'MIYUN MARLIANA / 337', '08273642818', '2016-10-02', 30000000, 10, 39, 833400, 300000, '35.9971202', 1133400),
('101.000201.0', 'UMU KULSUM / 023', '08273642818', '2016-02-19', 50000000, 19, 31, 833400, 500000, '59.9952003', 1333400),
('101.000205.0', 'SAKTI  KARYANI / 283', '08273642818', '2016-02-24', 50000000, 24, 35, 1041700, 500000, '47.9984640', 1541700),
('101.000210.0', 'SRI WAHJUNINGSIH / 478', '08273642818', '2016-08-03', 25000000, 8, 37, 694500, 250000, '35.9971202', 944500),
('101.000214.0', 'SITI CHALIMAH / 259', '08273642818', '2016-03-16', 60000000, 16, 28, 1000000, 600000, '60', 1600000),
('101.000217.0', 'SITI CHOLIFAH / 591', '08273642818', '2016-05-04', 50000000, 5, 26, 833400, 500000, '59.9952003', 1333400),
('101.000225.0', 'HENDARIATI PRISTIWATI SOFIA / 001', '08273642818', '2016-04-20', 60000000, 20, 21, 1000000, 600000, '60', 1600000),
('101.000227.0', 'NURUL HIDAYATI / 182', '08273642818', '2016-03-05', 250000000, 3, 15, 4166700, 2500000, '59.9995200', 6666700),
('101.000232.0', 'DASIPAH / 536', '08273642818', '2016-09-05', 50000000, 9, 33, 833400, 500000, '59.9952003', 1333400),
('101.000236.0', 'OKTAVIA HERLIANI / 289', '08273642818', '2016-10-05', 50000000, 10, 12, 2083400, 500000, '23.9992320', 2583400),
('101.000238.0', 'FITRI PURWANDANI / 489', '08273642818', '2016-05-18', 100000000, 18, 34, 1666700, 1000000, '59.9988000', 2666700),
('101.000241.0', 'IDA HARIYANTI . DRA / 297', '08273642818', '2016-05-18', 35000000, 19, 16, 972300, 350000, '35.9971202', 1322300),
('101.000245.0', 'ENNY WIDAJATI / 456', '08273642818', '2016-05-26', 20000000, 26, 33, 555600, 200000, '35.9971202', 755600),
('101.000246.0', 'ERWIK SUSANTI WERDININGSIH / 017', '08273642818', '2016-05-30', 150000000, 30, 34, 2500000, 1500000, '60', 4000000),
('101.000248.0', 'CISILIA RETY JUNIJARTI / 12', '08273642818', '2016-07-06', 25000000, 7, 33, 694500, 250000, '35.9971202', 944500),
('101.000253.0', 'ANIETA ELOK WIDJAYANTI / 409', '08273642818', '2016-06-27', 50000000, 27, 34, 833400, 500000, '59.9952003', 1333400),
('101.000258.0', 'WINNY WULANDARI / 324', '08273642818', '2016-06-30', 30000000, 30, 6, 833400, 300000, '35.9971202', 1133400),
('104.000003.0', 'AGUS SUSENO / KARYAWAN', '08273642818', '2016-07-02', 50000000, 25, 53, 833400, 500000, '59.9952003', 1333400),
('104.000004.0', 'SUNARNO/KARY', '08273642818', '2016-07-03', 35000000, 25, 52, 583400, 350000, '59.9931436', 933400),
('104.000012.0', 'KUSNADI / KARY', '08273642818', '2016-07-04', 50000000, 2, 39, 0, 500000, 'INF', 500000),
('104.000013.0', 'SARNI / KARYAWAN', '08273642818', '2016-07-05', 55000000, 13, 42, 916700, 550000, '59.9978182', 1466700),
('104.000018.0', 'IRWAN AGUSTINO R SE', '08273642818', '2016-07-06', 0, 0, 0, 0, 0, 'NAN', 0),
('111.000010.0', 'BAGAS DWINANTA WIBISONO  / ALB', '08273642818', '2016-07-07', 135000000, 5, 24, 2250000, 1485000, '60', 3735000),
('111.000013.0', 'AGUS SUDRAJAD /ALB', '08273642818', '2016-07-08', 40000000, 20, 19, 833400, 440000, '47.9961603', 1273400),
('111.000016.0', 'PURWANTI / ALB', '08273642818', '2016-07-09', 75000000, 9, 34, 1562500, 825000, '48', 2387500),
('111.000017.0', 'SHINTA FAUZIAH SABRINA / ALB', '08273642818', '2016-07-10', 60000000, 23, 34, 1000000, 660000, '60', 1660000),
('111.000018.0', 'BAGUS SUSANTO YUDHIARTOWO /ALB', '08273642818', '2016-07-11', 100000000, 7, 40, 1666700, 1100000, '59.9988000', 2766700),
('111.000024.0', 'TATI SUMIATI / ALB', '08273642818', '2016-07-12', 60000000, 12, 43, 1000000, 660000, '60', 1660000),
('111.000036.0', 'EDHI SUTRISNO TANDJUNG / ALB', '08273642818', '2016-07-13', 40000000, 3, 39, 833400, 440000, '47.9961603', 1273400),
('111.000038.0', 'RIAN YONATA / ALB', '08273642818', '2016-07-14', 60000000, 10, 38, 1000000, 660000, '60', 1660000),
('111.000044.0', 'ANGGRAINI / ALB', '08273642818', '2016-07-15', 70000000, 9, 34, 1166700, 770000, '59.9982857', 1936700),
('111.000046.0', 'RETNO PAMULARINGSIH / ALB', '08273642818', '2016-07-16', 50000000, 2, 38, 833400, 550000, '59.9952003', 1383400),
('111.000047.0', 'DRA. ENNY PURI RAHAYU', '08273642818', '0000-00-00', 0, 0, 0, 0, 0, 'NAN', 0),
('111.000048.0', 'MIRNA MARDININGRUM / ALB', '08273642818', '2016-07-03', 70000000, 7, 27, 1166700, 770000, '59.9982857', 1936700),
('111.000050.0', 'NYAMI WINARSIH / ALB', '08273642818', '2016-07-04', 25000000, 22, 35, 694500, 275000, '35.9971202', 969500),
('155.000078.0', 'RINA KARTIKA DEWI / ALB', '08273642818', '2016-07-09', 10000000, 8, 16, 416700, 18400, '23.9980801', 435100),
('155.000211.0', 'IKA YULISTYA EVA WARDHANI KLP 343', '08273642818', '2016-07-05', 40000000, 3, 27, 833400, 402600, '47.9961603', 1236000),
('155.000263.0', 'TITIK SETIAWATI / KLP 170', '08273642818', '2016-07-06', 85000000, 9, 20, 1416700, 942500, '59.9985882', 2359200),
('155.000448.0', 'DEWI IRIANI / KLP 357', '08273642818', '2016-07-07', 40000000, 28, 33, 833400, 387500, '47.9961603', 1220900),
('157.000001.0', 'YUSI EVI SUSANTI / 481', '08273642818', '2016-07-08', 105000000, 11, 53, 875000, 187100, '120', 1062100),
('180.000066.0', 'YAYI HARSITA / ALB', '08273642818', '2016-07-10', 100000000, 29, 10, 1666700, 1558400, '59.9988000', 3225100),
('180.000126.0', 'ERYN WIEDYANINGSIH / ALB', '08273642818', '2016-07-11', 50000000, 19, 24, 833400, 122200, '59.9952003', 955600),
('180.000134.0', 'NANY NASIONALIWATI / ALB', '08273642818', '2016-07-12', 4500000, 9, 8, 187500, 53100, '24', 240600),
('180.000269.0', 'IMAM ASHARI / ALB', '08273642818', '2016-07-13', 3000000, 17, 5, 125000, 33800, '24', 158800),
('181.000060.0', 'SULANSIH / KLP 402', '08273642818', '2016-07-15', 50000000, 19, 55, 833400, 120000, '59.9952003', 953400),
('181.000115.0', 'DENOK  RACHMAWATI', '08273642818', '2016-07-17', 0, 0, 0, 0, 0, 'NAN', 0),
('181.000193.0', 'ENDANG IRIANTI  KLP 466', '08273642818', '2016-07-18', 40000000, 9, 49, 829800, 15000, '48.2043865', 844800),
('181.000271.0', 'ANDRIANI IKASARI / 519', '08273642818', '2016-07-19', 100000000, 6, 48, 1666700, 418800, '59.9988000', 2085500),
('181.000276.0', 'TRI SRI PANGESTUTI / 153', '08273642818', '2016-07-20', 150000000, 9, 36, 2500000, 1260000, '60', 3760000),
('181.000296.0', 'SITI MARIYAM / 251', '08273642818', '2016-07-21', 180000000, 23, 48, 3000000, 522700, '60', 3522700),
('181.000298.0', 'WIDYAWATI BOEDININGSIH', '08273642818', '2016-07-22', 0, 0, 0, 0, 0, 'NAN', 0),
('181.000313.0', 'DYAH EMILIA WITARYANTI / 318', '08273642818', '2016-07-23', 60000000, 6, 46, 1000000, 270000, '60', 1270000),
('181.000321.0', 'SUCIATI /359', '08273642818', '2016-07-24', 50000000, 8, 41, 833400, 225000, '59.9952003', 1058400),
('181.000334.0', 'SITI FATIMAH / 538', '08273642818', '2016-07-25', 40000000, 17, 19, 833400, 101100, '47.9961603', 934500),
('181.000344.0', 'INSAH RULIYANI  KLP 494', '08273642818', '2016-07-26', 100000000, 28, 46, 1666700, 146500, '59.9988000', 1813200),
('181.000376.0', 'ANI WIDYANINGSIH / KLP 006', '08273642818', '2016-07-27', 110000000, 22, 36, 1833400, 529000, '59.9978182', 2362400),
('181.000404.0', 'SITI MARIYAM / 251', '08273642818', '2016-07-28', 250000000, 8, 47, 4166700, 709100, '59.9995200', 4875800),
('181.000434.0', 'UMI CHOIRIYA / 382', '08273642818', '2016-07-29', 20000000, 25, 24, 555600, 110000, '35.9971202', 665600),
('181.000453.0', 'RIZKI ANGGRAINI YUNITA SARI  CW SPD/ 452', '08273642818', '2016-07-30', 45000000, 13, 39, 937500, 101200, '48', 1038700),
('181.000476.0', 'HENI SUSILOWATI / KLP 363', '08273642818', '2016-07-31', 60000000, 14, 32, 1000000, 507400, '60', 1507400),
('181.000489.0', 'AMBAR SUPARTINI / 469', '08273642818', '2016-08-01', 80000000, 25, 23, 1333400, 528000, '59.9970001', 1861400),
('181.000517.0', 'ENDANG SRI PUSPITASARI / 512', '08273642818', '2016-08-02', 60000000, 14, 35, 1000000, 399000, '60', 1399000),
('181.000537.0', 'ENY WINDAYATI / 508', '08273642818', '2016-08-03', 79000000, 29, 21, 1316700, 1280200, '59.9984810', 2596900),
('181.000557.0', 'NURHAYATI / 073', '08273642818', '2016-07-14', 40000000, 23, 37, 833400, 135000, '47.9961603', 968400),
('181.000563.0', 'DEWI SURYO MUKTI', '08273642818', '2016-08-04', 0, 0, 0, 0, 0, 'NAN', 0),
('181.000570.0', 'ELISABETH  ENDANG / 443', '08273642818', '2016-08-05', 90000000, 4, 26, 1875000, 836000, '48', 2711000),
('181.000589.0', 'DINIE MARTINI / KLP 08', '08273642818', '2016-08-06', 650000000, 16, 35, 10833400, 3690000, '59.9996307', 14523400),
('181.000609.0', 'LILIK MIFTACHUL LAILA / 311', '08273642818', '2016-08-07', 50000000, 4, 40, 833400, 342900, '59.9952003', 1176300),
('181.000620.0', 'VIVI OKTACIA INDRIANI / 541', '08273642818', '2016-08-08', 50000000, 17, 25, 1041700, 252700, '47.9984640', 1294400),
('181.000623.0', 'EKO GIARTI RAKARTINI / 360', '08273642818', '2016-08-09', 100000000, 18, 40, 1666700, 248400, '59.9988000', 1915100),
('181.000663.0', 'MOESAROPAH / 220', '08273642818', '2016-08-10', 35000000, 4, 26, 729200, 246000, '47.9978058', 975200),
('181.000692.0', 'NUNUK WAHYU DWI UTAMI', '08273642818', '2016-08-11', 100000000, 3, 36, 1666700, 753900, '59.9988000', 2420600),
('181.000700.0', 'IRA CANDRA ASIH / 485', '08273642818', '2016-08-12', 50000000, 10, 19, 1388900, 420600, '35.9997120', 1809500),
('181.000717.0', 'DEWI PRAPTINI', '08273642818', '2016-08-13', 0, 0, 0, 0, 0, 'NAN', 0),
('181.000720.0', 'RISA SUTINDAH / KLP 494', '08273642818', '2016-08-14', 60000000, 30, 37, 1250000, 292200, '48', 1542200),
('181.000722.0', 'SISWATI', '08273642818', '2016-08-15', 0, 0, 0, 0, 0, 'NAN', 0),
('181.000723.0', 'SULASTRI / 463', '08273642818', '2016-08-16', 50000000, 1, 34, 1388900, 75000, '35.9997120', 1463900),
('181.000730.0', 'ARININGTYAS / 550', '08273642818', '2016-08-17', 85000000, 5, 29, 2361200, 575400, '35.9986447', 2936600),
('181.000747.0', 'AMIATIK / 141', '08273642818', '2016-08-18', 75000000, 18, 24, 1250000, 774400, '60', 2024400),
('181.000750.0', 'SAFANNY ASSMITRI / 271', '08273642818', '2016-08-19', 50000000, 19, 39, 1388900, 74600, '35.9997120', 1463500),
('181.000751.0', 'MUSLICHA / 460', '08273642818', '2016-08-20', 25000000, 19, 25, 694500, 79000, '35.9971202', 773500),
('181.000755.0', 'R.A.EMMY SITI SIDHARTI / 385', '08273642818', '2016-08-21', 50000000, 25, 21, 833400, 405000, '59.9952003', 1238400),
('181.000765.0', 'RINA DEWI', '08273642818', '2016-08-22', 0, 0, 0, 0, 0, 'NAN', 0),
('181.000780.0', 'ANIS SUKESI / 290', '08273642818', '2016-08-23', 100000000, 18, 31, 1666700, 840100, '59.9988000', 2506800),
('181.000786.0', 'ISTIYAR RAHAYU / 347', '08273642818', '2016-07-01', 100000000, 23, 33, 2083400, 1000000, '47.9984640', 3083400),
('181.000795.0', 'NURUL LAILI / 546', '08273642818', '2016-08-24', 25000000, 30, 11, 694500, 449300, '35.9971202', 1143800),
('181.000799.0', 'HERMANIATI S.PD / 285', '08273642818', '2016-08-25', 100000000, 1, 24, 1666700, 1020000, '59.9988000', 2686700),
('181.000820.0', 'RR. KUSUMO ENDANG RETNOWATI / 368', '08273642818', '2016-08-26', 100000000, 21, 30, 1666700, 1162900, '59.9988000', 2829600),
('181.000830.0', 'RETNO WIDYANINGSIH / 221', '08273642818', '2016-08-27', 35000000, 29, 33, 729200, 115200, '47.9978058', 844400),
('181.000832.0', 'HJ.SRI HINDRIANI', '08273642818', '2016-08-28', 0, 0, 0, 0, 0, 'NAN', 0),
('182.000014.0', 'LINDA KRISTIANINGRUM / 547', '08273642818', '2016-08-29', 17000000, 26, 33, 331700, 6000, '51.2511305', 337700),
('183.000004.0', 'R.A. LILIA MAHDIANA / 219', '08273642818', '2016-08-30', 154700000, 29, 39, 3223000, 638100, '47.9987589', 3861100),
('202.000029.0', 'RUMIJATI / ALB', '08273642818', '2016-08-31', 70000000, 23, 49, 1166700, 303400, '59.9982857', 1470100),
('202.000044.0', 'MAYANG WAHYU PANGESTUTI / ALB', '08273642818', '2016-09-01', 75000000, 5, 44, 1250000, 461700, '60', 1711700),
('202.000074.0', 'IGNASIUS BUDI HARSENGTYAS R / ALB', '08273642818', '2016-09-02', 50000000, 16, 25, 833400, 209300, '59.9952003', 1042700),
('202.000481.0', 'KRISBIJANTO / ALB', '08273642818', '2016-09-03', 55000000, 21, 28, 916700, 375000, '59.9978182', 1291700),
('202.000483.0', 'DEYLLIUS SURYO SUDEWO / ALB', '08273642818', '2016-09-04', 75000000, 30, 32, 1250000, 725000, '60', 1975000),
('250.001006.0', 'IR. Y. BOSCO TJANDRA G / ALB', '08273642818', '2016-09-05', 35600000, 7, 14, 7120000, 333500, '5', 7453500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `level` enum('superuser','admin') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama_lengkap`, `no_telpon`, `level`) VALUES
(1, 'superuser', '6a56955b547bd43bfb3279beee2bc7c85fc6758d60842447648549f991074ab931f4ff323e51645839e39d2e5fbb8e2caabddff0daf353c3b2b7d15dcbd55a68', 'SarjanaKomedi', '085728803444', 'superuser');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `outbox`
--
ALTER TABLE `outbox`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `outbox_date` (`SendingDateTime`,`SendingTimeOut`),
  ADD KEY `outbox_sender` (`SenderID`);

--
-- Indeks untuk tabel `outbox_multipart`
--
ALTER TABLE `outbox_multipart`
  ADD PRIMARY KEY (`ID`,`SequencePosition`);

--
-- Indeks untuk tabel `pbk`
--
ALTER TABLE `pbk`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `pbk_groups`
--
ALTER TABLE `pbk_groups`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`IMEI`);

--
-- Indeks untuk tabel `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `polling`
--
ALTER TABLE `polling`
  ADD PRIMARY KEY (`id_polling`);

--
-- Indeks untuk tabel `sentitems`
--
ALTER TABLE `sentitems`
  ADD PRIMARY KEY (`ID`,`SequencePosition`),
  ADD KEY `sentitems_date` (`DeliveryDateTime`),
  ADD KEY `sentitems_tpmr` (`TPMR`),
  ADD KEY `sentitems_dest` (`DestinationNumber`),
  ADD KEY `sentitems_sender` (`SenderID`);

--
-- Indeks untuk tabel `sms_inbox`
--
ALTER TABLE `sms_inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sms_outbox`
--
ALTER TABLE `sms_outbox`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`no_account`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `inbox`
--
ALTER TABLE `inbox`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `outbox`
--
ALTER TABLE `outbox`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pbk`
--
ALTER TABLE `pbk`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pbk_groups`
--
ALTER TABLE `pbk_groups`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `polling`
--
ALTER TABLE `polling`
  MODIFY `id_polling` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `sms_inbox`
--
ALTER TABLE `sms_inbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
