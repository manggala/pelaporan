-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2016 at 05:45 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pelaporan`
--

-- --------------------------------------------------------

--
-- Table structure for table `head_truck`
--

CREATE TABLE IF NOT EXISTS `head_truck` (
  `id_head_truck` varchar(8) NOT NULL,
  `hour_meter` varchar(20) NOT NULL,
  `kilo_meter` varchar(20) NOT NULL,
  PRIMARY KEY (`id_head_truck`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `head_truck`
--

INSERT INTO `head_truck` (`id_head_truck`, `hour_meter`, `kilo_meter`) VALUES
('VV - 130', '200', '3000'),
('VV - 134', '', ''),
('VV - 137', '', ''),
('VV - 146', '', ''),
('VV - 149', '', ''),
('VV - 153', '', ''),
('VV - 154', '', ''),
('VV - 155', '', ''),
('VV - 158', '', ''),
('VV - 159', '', ''),
('VV - 161', '', ''),
('VV - 162', '', ''),
('VV - 163', '', ''),
('VV - 164', '', ''),
('VV - 165', '', ''),
('VV - 166', '', ''),
('VV - 167', '', ''),
('VV - 168', '', ''),
('VV - 169', '', ''),
('VV - 170', '', ''),
('VV - 171', '', ''),
('VV - 172', '', ''),
('VV - 173', '', ''),
('VV - 174', '', ''),
('VV - 175', '', ''),
('VV - 176', '', ''),
('VV - 177', '', ''),
('VV - 178', '', ''),
('VV - 179', '', ''),
('VV - 180', '', ''),
('VV - 181', '', ''),
('VV - 182', '', ''),
('VV - 183', '', ''),
('VV - 184', '', ''),
('VV - 185', '', ''),
('VV - 186', '', ''),
('VV - 187', '', ''),
('VV - 188', '', ''),
('VV - 189', '', ''),
('VV - 190', '', ''),
('VV - 191', '', ''),
('VV - 192', '', ''),
('VV - 193', '', ''),
('VV - 194', '', ''),
('VV - 195', '', ''),
('VV - 196', '', ''),
('VV - 197', '', ''),
('VV - 198', '', ''),
('VV - 199', '', ''),
('VV - 200', '', ''),
('VV - 201', '', ''),
('VV - 202', '', ''),
('VV - 203', '', ''),
('VV - 204', '', ''),
('VV - 205', '', ''),
('VV - 206', '', ''),
('VV - 207', '', ''),
('VV - 208', '', ''),
('VV - 209', '', ''),
('VV - 210', '', ''),
('VV - 211', '', ''),
('VV - 212', '', ''),
('VV - 213', '', ''),
('VV - 214', '', ''),
('VV - 215', '', ''),
('VV - 216', '', ''),
('VV - 217', '', ''),
('VV - 218', '', ''),
('VV - 219', '', ''),
('VV - 220', '', ''),
('VV - 221', '', ''),
('VV - 222', '', ''),
('VV - 223', '', ''),
('VV - 224', '', ''),
('VV - 225', '', ''),
('VV - 226', '', ''),
('VV - 227', '', ''),
('VV - 228', '', ''),
('VV - 229', '', ''),
('VV - 230', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `nearmiss`
--

CREATE TABLE IF NOT EXISTS `nearmiss` (
  `id_nearmiss` int(11) NOT NULL,
  `id_operator` int(11) NOT NULL,
  `id_supervisi` int(11) NOT NULL,
  `tanggal_nearmiss` date NOT NULL,
  `lokasi_nearmiss` text NOT NULL,
  `nama_saksi_nearmiss` text NOT NULL,
  `perbuatan_dilakukan_nearmiss` text NOT NULL,
  `tahapan_kejadian_nearmiss` text NOT NULL,
  `penyebab_nearmiss` text NOT NULL,
  `penjelasan_penyebab_nearmiss` text NOT NULL,
  `bukti_1` text NOT NULL,
  `bukti_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE IF NOT EXISTS `operator` (
  `id_operator` int(6) NOT NULL,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id_operator`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id_operator`, `nama`) VALUES
(1, 'ABD.ROHMAN'),
(2, 'ABDUL QOMARUDIN'),
(3, 'ABDUL.AJIS'),
(4, 'ACH ZAINI'),
(5, 'AGUS SUSILO'),
(6, 'AMIR MAHMUD'),
(7, 'ANDI PRAYITNO'),
(8, 'ANDRI.PRASETYO'),
(9, 'ARIFIN'),
(10, 'ASRUL KHOIRUDIN'),
(11, 'BADRUS SOLEH'),
(12, 'BAYU SAPUTRO'),
(13, 'BUDHY HANDOKO SALEH'),
(14, 'BUDIANTO A'),
(15, 'CHOIRUL'),
(16, 'DARMADI'),
(17, 'DEDI WIJAYA'),
(18, 'DIDIEK ARIANTO'),
(19, 'EKA KURNIAWAN PUTRA'),
(20, 'EKA MARTA SETYA ARIEAWAN'),
(21, 'GUNARWAN HARIYANTO'),
(22, 'HARMUJI'),
(23, 'IKHWAN'),
(24, 'JOKO SLAMET'),
(25, 'JUDIN ISWANTO'),
(26, 'KHUSNUL MA''ARIF'),
(27, 'KISNO'),
(28, 'KISYANTO'),
(29, 'M. NAFIK'),
(30, 'M. NASUKHAN'),
(31, 'MADNISWAN'),
(32, 'MOH.MAHMUD'),
(33, 'MUJIANTO'),
(34, 'MUNASID'),
(35, 'NALI EDI PURWANTO'),
(36, 'NASRON'),
(37, 'RIYONO'),
(38, 'ROBI MARDIANTO'),
(39, 'ROBI SUHARSONO'),
(40, 'ROY RANDY RAHARDIAN'),
(41, 'SAROMA RIBOWO'),
(42, 'SARWI'),
(43, 'SIFANI RINALDO'),
(44, 'SISWANTO'),
(45, 'SLAMET HARYADI'),
(46, 'SUBAIDI'),
(47, 'SUHADAK'),
(48, 'SUKAMTO'),
(49, 'SUKAR'),
(50, 'SUROTO A'),
(51, 'SUTADJI D'),
(52, 'SUTAJI'),
(53, 'SUWANDI'),
(54, 'SUWANTO A2'),
(55, 'TEGUH BUDI YUWONO'),
(56, 'TONI EFENDI'),
(57, 'TONI HERMAWAN'),
(58, 'WAHIB'),
(59, 'YUDHA PRASETYA'),
(60, 'WAHYU NURYAHYA'),
(61, 'EKO TUNGGORO'),
(62, 'ABDULLOH'),
(63, 'NARWAN KHAMBALI'),
(64, 'BAGUS BUDIONO'),
(65, 'M ZAINUDIN'),
(66, 'M PRADANA ARYA SASMITA'),
(67, 'USMAN'),
(68, 'FARIS NOVI ANDRIANTO'),
(69, 'SUGIARTO'),
(70, 'ACH DZULKIFLI'),
(71, 'SUPRIYONO'),
(72, 'ROY RIKCKY ANGGRIAWAN'),
(73, 'SUPRAYITNO'),
(74, 'NOVIANTO'),
(75, 'AGUS YONO'),
(76, 'SUNARNO'),
(77, 'ABDUL HAMID'),
(78, 'ABDULOH'),
(79, 'ADI PURWANTO'),
(80, 'AGUS PRAYITNO B'),
(81, 'AGUS SOFYAN'),
(82, 'AGUS SUDJARWO'),
(83, 'AGUS SUMADI'),
(84, 'ARIES PANJI PURBAYA'),
(85, 'BUDIANTO'),
(86, 'DWI HANDONO'),
(87, 'ENDARTO PRASETYO'),
(88, 'HADI SUPRIYANTO'),
(89, 'HENDRO TJAHJONO'),
(90, 'HENDRO WIBOWO'),
(91, 'HERI KUSIYANTO'),
(92, 'HERI PURNOMO'),
(93, 'ISMARDIONO RUSIADI'),
(94, 'KURNIAWAN'),
(95, 'KUSNADI'),
(96, 'M AMIN'),
(97, 'M. BAKHRUDIN'),
(98, 'M. NURKHOLIS'),
(99, 'M. SAIFUL'),
(100, 'MAMAD MAHMUDIA'),
(101, 'MAMPURI'),
(102, 'MOMON YUNIARDI'),
(103, 'MUJIONO'),
(104, 'MULYO JUNAEDI'),
(105, 'MUSTOFA'),
(106, 'NANANG TRI BASUKI'),
(107, 'PARMAN'),
(108, 'PUJIONO'),
(109, 'R. PRADANA INDRA BAYU'),
(110, 'RASMIDI'),
(111, 'ROFIK FAISAL'),
(112, 'SAIFUL ROHMAN'),
(113, 'SAMIDO'),
(114, 'SLAMET HARIYADI'),
(115, 'SOLIHUL ABIDIN'),
(116, 'SUGENG B'),
(117, 'SUGIARTO'),
(118, 'SUHARDI'),
(119, 'SUHERMAN'),
(120, 'SUJADI'),
(121, 'SUMARWAN'),
(122, 'SUNARYO B1'),
(123, 'SUNARYO B2'),
(124, 'SUPANJI'),
(125, 'SUPRAYITNO B'),
(126, 'SUTJIPTO'),
(127, 'SUWADJI'),
(128, 'TASMIN'),
(129, 'TEKAT NUR FITRIANTO'),
(130, 'TOHIR'),
(131, 'UMAR S. B.'),
(132, 'WAHYU HIDAYAT'),
(133, 'WEDA A. PURNOMO'),
(134, 'YAHMAN'),
(135, 'YAHYA K'),
(136, 'SIGIT WICAKSONO'),
(137, 'MAT JURI'),
(138, 'BAGUS TRIWIBOWO'),
(139, 'MADE SATYA DARMA'),
(140, 'ROBBI WAHYUDI'),
(141, 'DONI KRISTIANANDA'),
(142, 'ANDRI TRI K'),
(143, 'HENDI SUTRISNO'),
(144, 'ALAN PRAYOGA'),
(145, 'ISHARIYANTO'),
(146, 'DAVID EKO P'),
(147, 'MOH AYUB'),
(148, 'YUSAK HARYANTO'),
(149, 'DIDIK H S'),
(150, 'AGUS SETIAWAN'),
(151, 'M .YATIM'),
(152, 'ABDUL BAHRI'),
(153, 'ABDUL SALAM'),
(154, 'ABDULLAH'),
(155, 'AGUS INDRAWAN'),
(156, 'AGUS PRASETYO'),
(157, 'AGUS SURYANTO'),
(158, 'ALI MOCHTAR'),
(159, 'ANDI KURNIANTO'),
(160, 'ANDIK CHRISBIYANTORO'),
(161, 'ARIF SUPRIYADI'),
(162, 'ASMORI'),
(163, 'ATEKAN'),
(164, 'BAHRUL'),
(165, 'BAMBANG EDY PRIYANTO'),
(166, 'BUDIONO'),
(167, 'DONY KUSUMA'),
(168, 'FAISOL FITRI'),
(169, 'GUNADI'),
(170, 'GUSTAFIANDI'),
(171, 'HERIYANTO'),
(172, 'HERMAWAN'),
(173, 'IMAM SYAFII'),
(174, 'IMRON WAHYUDI'),
(175, 'ISWINARNO'),
(176, 'JOKO TAWEKAL'),
(177, 'KRISTANTO'),
(178, 'LUKMAN HAKIM'),
(179, 'M. ALIMIN'),
(180, 'M. ARIFIN'),
(181, 'M. MAHMUDI'),
(182, 'M. RAGIL A.'),
(183, 'M. RIFA''I'),
(184, 'M. RUDI DARIYANTO'),
(185, 'M. SALEH'),
(186, 'M. TOYYIB'),
(187, 'M.SIDIQ'),
(188, 'MINSORI'),
(189, 'MOCH.YUSUF'),
(190, 'MUKASIM'),
(191, 'MUSHADI'),
(192, 'PUJIANTO'),
(193, 'RAFIKA YULI ARNANDA'),
(194, 'RIASAN'),
(195, 'RUDIYANTO'),
(196, 'SARMIN'),
(197, 'SIDIK'),
(198, 'SLAMET ARIADI'),
(199, 'SLAMET HARIYADI'),
(200, 'SUCIPTO'),
(201, 'SUDARSONO'),
(202, 'SUDARYO'),
(203, 'SUHERMANTO'),
(204, 'SUKARDI C'),
(205, 'SUNARMIDI'),
(206, 'SUPARMAN D'),
(207, 'SUROTO C'),
(208, 'SURYA BAYU T'),
(209, 'SUTRISNO'),
(210, 'SUYANTO C2'),
(211, 'TOFA'),
(212, 'YOYOK DWI HARIANTO'),
(213, 'YULI AFRIANTO'),
(214, 'YUNI KURNIAWAN'),
(215, 'YUS RIZAL'),
(216, 'WAHYU EDI WINARTO'),
(217, 'ARIS PUPUT'),
(218, 'CATUR OKTAVIANUS M'),
(219, 'MOCH FARIED'),
(220, 'SU''UD MUBAROK'),
(221, 'ZAINAL ABIDIN'),
(222, 'SAIFUL MUCHTAHIR'),
(223, 'BAMBANG SUHARTONO'),
(224, 'MUSTIN'),
(225, 'M.YAKUT'),
(226, 'SUPARJO');

-- --------------------------------------------------------

--
-- Table structure for table `preoperation`
--

CREATE TABLE IF NOT EXISTS `preoperation` (
  `id_preOperation` int(11) NOT NULL AUTO_INCREMENT,
  `id_operator` int(11) DEFAULT NULL,
  `id_supervisi` int(11) DEFAULT NULL,
  `tanggal_preOperation` date NOT NULL,
  `keterangan_preOperation` text NOT NULL,
  `pertanyaan_1` text NOT NULL,
  `pertanyaan_2` text NOT NULL,
  `pertanyaan_3` text NOT NULL,
  `pertanyaan_4` text NOT NULL,
  `pertanyaan_5` text NOT NULL,
  `pertanyaan_6` text NOT NULL,
  `pertanyaan_7` text NOT NULL,
  `pertanyaan_8` text NOT NULL,
  `pertanyaan_9` text NOT NULL,
  `pertanyaan_10` text NOT NULL,
  `pertanyaan_11` text NOT NULL,
  `pertanyaan_12` text NOT NULL,
  `pertanyaan_13` text NOT NULL,
  `pertanyaan_14` text NOT NULL,
  `pertanyaan_15` text NOT NULL,
  `pertanyaan_16` text NOT NULL,
  `pertanyaan_17` text NOT NULL,
  `pertanyaan_18` text NOT NULL,
  `pertanyaan_19` text NOT NULL,
  `pertanyaan_20` text NOT NULL,
  `pertanyaan_21` text NOT NULL,
  `pertanyaan_22` text NOT NULL,
  `pertanyaan_23` text NOT NULL,
  `pertanyaan_24` text NOT NULL,
  `pertanyaan_25` text NOT NULL,
  `pertanyaan_26` text NOT NULL,
  PRIMARY KEY (`id_preOperation`),
  KEY `id_preOperation` (`id_preOperation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `supervisi`
--

CREATE TABLE IF NOT EXISTS `supervisi` (
  `id_supervisi` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  PRIMARY KEY (`id_supervisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisi`
--

INSERT INTO `supervisi` (`id_supervisi`, `nama`, `jenis`) VALUES
(1, 'BURHAN', 'OPERATOR'),
(2, 'RIDWAN', 'MEKANIK'),
(3, 'RUDI', 'K3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
