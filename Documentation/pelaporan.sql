-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2016 at 02:45 AM
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
-- Table structure for table `form_nearmiss`
--

CREATE TABLE IF NOT EXISTS `form_nearmiss` (
  `id_form` varchar(11) NOT NULL,
  `id_operator` int(11) NOT NULL,
  `id_supervisi` int(11) NOT NULL,
  `supervisi_yang_bertangung_jawab` int(11) NOT NULL,
  `tanggal_kejadian` date NOT NULL,
  `waktu_kejadian` time NOT NULL,
  `nama_saksi` text NOT NULL,
  `dimana` text NOT NULL,
  `apa_saja_yg_sedang_dilakuakan` text NOT NULL,
  `uraiakan_kejadian` text NOT NULL,
  `penyebab` text NOT NULL,
  `unsafe_action_condition` text NOT NULL,
  `gambar` blob NOT NULL,
  PRIMARY KEY (`id_form`),
  KEY `id_operator` (`id_operator`),
  KEY `id_supervisi` (`id_supervisi`),
  KEY `supervisi_yang_bertangung_jawab` (`supervisi_yang_bertangung_jawab`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_nearmiss`
--

INSERT INTO `form_nearmiss` (`id_form`, `id_operator`, `id_supervisi`, `supervisi_yang_bertangung_jawab`, `tanggal_kejadian`, `waktu_kejadian`, `nama_saksi`, `dimana`, `apa_saja_yg_sedang_dilakuakan`, `uraiakan_kejadian`, `penyebab`, `unsafe_action_condition`, `gambar`) VALUES
('1', 1, 1, 1, '2016-06-23', '00:00:06', '1', '1', '1', '1', '1', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `form_pre_operation`
--

CREATE TABLE IF NOT EXISTS `form_pre_operation` (
  `id_form` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `id_operator` int(11) NOT NULL,
  `id_pertanyaan` varchar(5) NOT NULL,
  `jawaban` varchar(30) NOT NULL,
  `kerusakan` varchar(10) NOT NULL,
  `id_head_truck` varchar(10) NOT NULL,
  `id_supervisi` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `shift` varchar(5) NOT NULL,
  PRIMARY KEY (`id_form`,`tanggal`,`id_pertanyaan`),
  KEY `id_peratanyaan` (`id_pertanyaan`,`id_head_truck`,`id_supervisi`),
  KEY `id_supervisi` (`id_supervisi`),
  KEY `id_operator` (`id_operator`),
  KEY `nomor_head_truck` (`id_head_truck`),
  KEY `nomor_head_truck_2` (`id_head_truck`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_pre_operation`
--

INSERT INTO `form_pre_operation` (`id_form`, `tanggal`, `id_operator`, `id_pertanyaan`, `jawaban`, `kerusakan`, `id_head_truck`, `id_supervisi`, `keterangan`, `shift`) VALUES
('1', '2016-06-01', 1, 'p01', 'Maksimum', 'Tidak Ada', 'VV - 130', 1, 'Kosong', '1'),
('1', '2016-06-01', 1, 'p02', 'Maksimum sampai minimum', 'Ada', 'VV - 130', 1, 'Kosong', '1'),
('1', '2016-06-01', 1, 'p03', 'Maksimum', 'Tidak Ada', 'VV - 130', 1, 'Kosong', '1');

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
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('ABDUL ROHMAN', '1'),
('ABDUL QOMARUDIN', '2'),
('ABDUL.AJIS', '3'),
('ACH ZAINI', '4'),
('AGUS SUSILO', '5'),
('AMIR MAHMUD', '6'),
('ANDI PRAYITNO', '7'),
('ANDRI.PRASETYO', '8'),
('ARIFIN', '9'),
('ASRUL KHOIRUDIN', '10'),
('BADRUS SOLEH', '11'),
('BAYU SAPUTRO', '12'),
('BUDHY HANDOKO SALEH', '13'),
('BUDIANTO A', '14'),
('CHOIRUL', '15'),
('DARMADI', '16'),
('DEDI WIJAYA', '17'),
('DIDIEK ARIANTO', '18'),
('EKA KURNIAWAN PUTRA', '19'),
('EKA MARTA SETYA ARIEAWAN', '20'),
('GUNARWAN HARIYANTO', '21'),
('HARMUJI', '22'),
('IKHWAN', '23'),
('JOKO SLAMET', '24'),
('JUDIN ISWANTO', '25'),
('KHUSNUL MA''ARIF', '26'),
('KISNO', '27'),
('KISYANTO', '28'),
('M. NAFIK', '29'),
('M. NASUKHAN', '30'),
('MADNISWAN', '31'),
('MOH.MAHMUD', '32'),
('MUJIANTO', '33'),
('MUNASID', '34'),
('NALI EDI PURWANTO', '35'),
('NASRON', '36'),
('RIYONO', '37'),
('ROBI MARDIANTO', '38'),
('ROBI SUHARSONO', '39'),
('ROY RANDY RAHARDIAN', '40'),
('SAROMA RIBOWO', '41'),
('SARWI', '42'),
('SIFANI RINALDO', '43'),
('SISWANTO', '44'),
('SLAMET HARYADI', '45'),
('SUBAIDI', '46'),
('SUHADAK', '47'),
('SUKAMTO', '48'),
('SUKAR', '49'),
('SUROTO A', '50'),
('SUTADJI D', '51'),
('SUTAJI', '52'),
('SUWANDI', '53'),
('SUWANTO A2', '54'),
('TEGUH BUDI YUWONO', '55'),
('TONI EFENDI', '56'),
('TONI HERMAWAN', '57'),
('WAHIB', '58'),
('YUDHA PRASETYA', '59'),
('WAHYU NURYAHYA', '60'),
('EKO TUNGGORO', '61'),
('ABDULLOH', '62'),
('NARWAN KHAMBALI', '63'),
('BAGUS BUDIONO', '64'),
('M ZAINUDIN', '65'),
('M PRADANA ARYA SASMITA', '66'),
('USMAN', '67'),
('FARIS NOVI ANDRIANTO', '68'),
('SUGIARTO', '69'),
('ACH DZULKIFLI', '70'),
('SUPRIYONO', '71'),
('ROY RIKCKY ANGGRIAWAN', '72'),
('SUPRAYITNO', '73'),
('NOVIANTO', '74'),
('AGUS YONO', '75'),
('SUNARNO', '76'),
('ABDUL HAMID', '77'),
('ABDULOH', '78'),
('ADI PURWANTO', '79'),
('AGUS PRAYITNO B', '80'),
('AGUS SOFYAN', '81'),
('AGUS SUDJARWO', '82'),
('AGUS SUMADI', '83'),
('ARIES PANJI PURBAYA', '84'),
('BUDIANTO', '85'),
('DWI HANDONO', '86'),
('ENDARTO PRASETYO', '87'),
('HADI SUPRIYANTO', '88'),
('HENDRO TJAHJONO', '89'),
('HENDRO WIBOWO', '90'),
('HERI KUSIYANTO', '91'),
('HERI PURNOMO', '92'),
('ISMARDIONO RUSIADI', '93'),
('KURNIAWAN', '94'),
('KUSNADI', '95'),
('M AMIN', '96'),
('M. BAKHRUDIN', '97'),
('M. NURKHOLIS', '98'),
('M. SAIFUL', '99'),
('MAMAD MAHMUDIA', '100'),
('MAMPURI', '101'),
('MOMON YUNIARDI', '102'),
('MUJIONO', '103'),
('MULYO JUNAEDI', '104'),
('MUSTOFA', '105'),
('NANANG TRI BASUKI', '106'),
('PARMAN', '107'),
('PUJIONO', '108'),
('R. PRADANA INDRA BAYU', '109'),
('RASMIDI', '110'),
('ROFIK FAISAL', '111'),
('SAIFUL ROHMAN', '112'),
('SAMIDO', '113'),
('SLAMET HARIYADI', '114'),
('SOLIHUL ABIDIN', '115'),
('SUGENG B', '116'),
('SUGIARTO', '117'),
('SUHARDI', '118'),
('SUHERMAN', '119'),
('SUJADI', '120'),
('SUMARWAN', '121'),
('SUNARYO B1', '122'),
('SUNARYO B2', '123'),
('SUPANJI', '124'),
('SUPRAYITNO B', '125'),
('SUTJIPTO', '126'),
('SUWADJI', '127'),
('TASMIN', '128'),
('TEKAT NUR FITRIANTO', '129'),
('TOHIR', '130'),
('UMAR S. B.', '131'),
('WAHYU HIDAYAT', '132'),
('WEDA A. PURNOMO', '133'),
('YAHMAN', '134'),
('YAHYA K', '135'),
('SIGIT WICAKSONO', '136'),
('MAT JURI', '137'),
('BAGUS TRIWIBOWO', '138'),
('MADE SATYA DARMA', '139'),
('ROBBI WAHYUDI', '140'),
('DONI KRISTIANANDA', '141'),
('ANDRI TRI K', '142'),
('HENDI SUTRISNO', '143'),
('ALAN PRAYOGA', '144'),
('ISHARIYANTO', '145'),
('DAVID EKO P', '146'),
('MOH AYUB', '147'),
('YUSAK HARYANTO', '148'),
('DIDIK H S', '149'),
('AGUS SETIAWAN', '150'),
('M .YATIM', '151'),
('ABDUL BAHRI', '152'),
('ABDUL SALAM', '153'),
('ABDULLAH', '154'),
('AGUS INDRAWAN', '155'),
('AGUS PRASETYO', '156'),
('AGUS SURYANTO', '157'),
('ALI MOCHTAR', '158'),
('ANDI KURNIANTO', '159'),
('ANDIK CHRISBIYANTORO', '160'),
('ARIF SUPRIYADI', '161'),
('ASMORI', '162'),
('ATEKAN', '163'),
('BAHRUL', '164'),
('BAMBANG EDY PRIYANTO', '165'),
('BUDIONO', '166'),
('DONY KUSUMA', '167'),
('FAISOL FITRI', '168'),
('GUNADI', '169'),
('GUSTAFIANDI', '170'),
('HERIYANTO', '171'),
('HERMAWAN', '172'),
('IMAM SYAFII', '173'),
('IMRON WAHYUDI', '174'),
('ISWINARNO', '175'),
('JOKO TAWEKAL', '176'),
('KRISTANTO', '177'),
('LUKMAN HAKIM', '178'),
('M. ALIMIN', '179'),
('M. ARIFIN', '180'),
('M. MAHMUDI', '181'),
('M. RAGIL A.', '182'),
('M. RIFA''I', '183'),
('M. RUDI DARIYANTO', '184'),
('M. SALEH', '185'),
('M. TOYYIB', '186'),
('M.SIDIQ', '187'),
('MINSORI', '188'),
('MOCH.YUSUF', '189'),
('MUKASIM', '190'),
('MUSHADI', '191'),
('PUJIANTO', '192'),
('RAFIKA YULI ARNANDA', '193'),
('RIASAN', '194'),
('RUDIYANTO', '195'),
('SARMIN', '196'),
('SIDIK', '197'),
('SLAMET ARIADI', '198'),
('SLAMET HARIYADI', '199'),
('SUCIPTO', '200'),
('SUDARSONO', '201'),
('SUDARYO', '202'),
('SUHERMANTO', '203'),
('SUKARDI C', '204'),
('SUNARMIDI', '205'),
('SUPARMAN D', '206'),
('SUROTO C', '207'),
('SURYA BAYU T', '208'),
('SUTRISNO', '209'),
('SUYANTO C2', '210'),
('TOFA', '211'),
('YOYOK DWI HARIANTO', '212'),
('YULI AFRIANTO', '213'),
('YUNI KURNIAWAN', '214'),
('YUS RIZAL', '215'),
('WAHYU EDI WINARTO', '216'),
('ARIS PUPUT', '217'),
('CATUR OKTAVIANUS M', '218'),
('MOCH FARIED', '219'),
('SU''UD MUBAROK', '220'),
('ZAINAL ABIDIN', '221'),
('SAIFUL MUCHTAHIR', '222'),
('BAMBANG SUHARTONO', '223'),
('MUSTIN', '224'),
('M.YAKUT', '225'),
('SUPARJO', '226');

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
-- Table structure for table `pertanyaan`
--

CREATE TABLE IF NOT EXISTS `pertanyaan` (
  `id_pertanyaan` varchar(5) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pertanyaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `pertanyaan`) VALUES
('p01', 'Periksa level oli mesin'),
('p02', 'Periksa level air pendingin'),
('p03', 'Periksa level minyak kopling'),
('p04', 'Periksa isi air pencuci kaca '),
('p05', 'Periksa kekencangan terminal battery'),
('p06', 'Periksa lampu-lampu indikator'),
('p07', 'Periksa meteran pengukur (gauge)'),
('p08', 'Periksa fungsi klakson'),
('p09', 'Periksa vehicle massage / error code  '),
('p10', 'Periksa indikator pengisisan battery'),
('p11', 'Periksa indikator pengisian battery'),
('p12', 'Periksa fungsi power steering'),
('p13', 'Periksa indikator sistem tekanan udara'),
('p14', 'Periksa bunyi tidak normal pada Engine dan Gearbox'),
('p15', 'Periksa asap knalpot'),
('p16', 'Periksa kebocoran oli dan coolant'),
('p17', 'Periksa fungsi dan kondisi lampu-lampu'),
('p18', 'Periksa / buangkandungan air di tangki udara'),
('p19', 'Periksa kondisi dan tekanan ban'),
('p20', 'Periksa posisi dan kondisi kaca spion'),
('p21', 'Setel posisi jok dan steering'),
('p22', 'Pakai sabuk pengaman'),
('p23', 'Periksa kerja rem kaki dan rem parkir'),
('p24', 'Periksa kondisi APAR'),
('p25', 'Periksa indikator level bahan bakar '),
('p26', 'Pengecekan Rotary Lamp');

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `form_nearmiss`
--
ALTER TABLE `form_nearmiss`
  ADD CONSTRAINT `form_nearmiss_ibfk_1` FOREIGN KEY (`id_operator`) REFERENCES `operator` (`id_operator`),
  ADD CONSTRAINT `form_nearmiss_ibfk_2` FOREIGN KEY (`id_supervisi`) REFERENCES `supervisi` (`id_supervisi`),
  ADD CONSTRAINT `form_nearmiss_ibfk_3` FOREIGN KEY (`supervisi_yang_bertangung_jawab`) REFERENCES `supervisi` (`id_supervisi`);

--
-- Constraints for table `form_pre_operation`
--
ALTER TABLE `form_pre_operation`
  ADD CONSTRAINT `form_pre_operation_ibfk_1` FOREIGN KEY (`id_operator`) REFERENCES `operator` (`id_operator`),
  ADD CONSTRAINT `form_pre_operation_ibfk_3` FOREIGN KEY (`id_supervisi`) REFERENCES `supervisi` (`id_supervisi`),
  ADD CONSTRAINT `form_pre_operation_ibfk_4` FOREIGN KEY (`id_head_truck`) REFERENCES `head_truck` (`id_head_truck`),
  ADD CONSTRAINT `form_pre_operation_ibfk_5` FOREIGN KEY (`id_pertanyaan`) REFERENCES `pertanyaan` (`id_pertanyaan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;