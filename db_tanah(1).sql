-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2021 at 11:05 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tanah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_desa`
--

CREATE TABLE `tb_desa` (
  `idDesa` int(11) NOT NULL,
  `idKecamatan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `statusnya` enum('desa','kelurahan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_desa`
--

INSERT INTO `tb_desa` (`idDesa`, `idKecamatan`, `nama`, `statusnya`) VALUES
(1, 1, 'Argoyuwono', 'desa'),
(2, 1, 'Lebakharjo', 'desa'),
(3, 1, 'Mulyoasri', 'desa'),
(4, 1, 'Purwoharjo', 'desa'),
(5, 1, 'Sidorenggo', 'desa'),
(6, 1, 'Simojayan', 'desa'),
(7, 1, 'Sonowangi', 'desa'),
(8, 1, 'Tamanasri', 'desa'),
(9, 1, 'Tamansari', 'desa'),
(10, 1, 'Tawangagung', 'desa'),
(11, 1, 'Tirtomarto', 'desa'),
(12, 1, 'Tirtomoyo', 'desa'),
(13, 1, 'Wirotaman', 'desa'),
(14, 2, 'Bandungrejo', 'desa'),
(15, 2, 'Bantur', 'desa'),
(16, 2, 'Karangsari', 'desa'),
(17, 2, 'Pringgodani', 'desa'),
(18, 2, 'Rejosari', 'desa'),
(19, 2, 'Rejoyoso', 'desa'),
(20, 2, 'Srigonco', 'desa'),
(21, 2, 'Sumberbening', 'desa'),
(22, 2, 'Wonokerto', 'desa'),
(23, 2, 'Wonorejo', 'desa'),
(24, 3, 'Bakalan', 'desa'),
(25, 3, 'Bululawang', 'desa'),
(26, 3, 'Gading', 'desa'),
(27, 3, 'Kasembon', 'desa'),
(28, 3, 'Kasri', 'desa'),
(29, 3, 'Krebet', 'desa'),
(30, 3, 'Krebet Senggrong', 'desa'),
(31, 3, 'Kuwolu', 'desa'),
(32, 3, 'Lumbangsari', 'desa'),
(33, 3, 'Pringu', 'desa'),
(34, 3, 'Sempalwadak', 'desa'),
(35, 3, 'Sudimoro', 'desa'),
(36, 3, 'Sukonolo', 'desa'),
(37, 3, 'Wandanpuro', 'desa'),
(38, 4, 'Amadanom', 'desa'),
(39, 4, 'Baturetno', 'desa'),
(40, 4, 'Bumirejo', 'desa'),
(41, 4, 'Jambangan', 'desa'),
(42, 4, 'Majangtengah', 'desa'),
(43, 4, 'Pamotan', 'desa'),
(44, 4, 'Pojok', 'desa'),
(45, 4, 'Rembun', 'desa'),
(46, 4, 'Srimulyo', 'desa'),
(47, 4, 'Sukodono', 'desa'),
(48, 4, 'Sumbersuko', 'desa'),
(49, 4, 'Dampit', 'kelurahan'),
(50, 5, 'Gadingkulon', 'desa'),
(51, 5, 'Kalisongo', 'desa'),
(52, 5, 'Karangwidoro', 'desa'),
(53, 5, 'Kucur', 'desa'),
(54, 5, 'Landungsari', 'desa'),
(55, 5, 'Mulyoagung', 'desa'),
(56, 5, 'Petungsewu', 'desa'),
(57, 5, 'Selorejo', 'desa'),
(58, 5, 'Sumbersekar', 'desa'),
(59, 5, 'Tegalweru', 'desa'),
(60, 6, 'Banjarejo', 'desa'),
(61, 6, 'Donomulyo', 'desa'),
(62, 6, 'Kedungsalam', 'desa'),
(63, 6, 'Mentaraman', 'desa'),
(64, 6, 'Purwodadi', 'desa'),
(65, 6, 'Purworejo', 'desa'),
(66, 6, 'Sumberoto', 'desa'),
(67, 6, 'Tempursari', 'desa'),
(68, 6, 'Tlogosari', 'desa'),
(69, 6, 'Tulungrejo', 'desa'),
(70, 7, 'Gajahrejo', 'desa'),
(71, 7, 'Gedangan', 'desa'),
(72, 7, 'Girimulyo', 'desa'),
(73, 7, 'Segaran', 'desa'),
(74, 7, 'Sidodadi', 'desa'),
(75, 7, 'Sindurejo', 'desa'),
(76, 7, 'Sumberejo', 'desa'),
(77, 7, 'Tumpakrejo', 'desa'),
(78, 8, 'Bulupitu', 'desa'),
(79, 8, 'Ganjaran', 'desa'),
(80, 8, 'Gondanglegi Kulon', 'desa'),
(81, 8, 'Gondanglegi Wetan', 'desa'),
(82, 8, 'Ketawang', 'desa'),
(83, 8, 'Panggungrejo', 'desa'),
(84, 8, 'Putat Kidul', 'desa'),
(85, 8, 'Putat Lor', 'desa'),
(86, 8, 'Putukrejo', 'desa'),
(87, 8, 'Sepanjang', 'desa'),
(88, 8, 'Sukorejo', 'desa'),
(89, 8, 'Sukosari', 'desa'),
(90, 8, 'Sumberjaya', 'desa'),
(91, 8, 'Urek-Urek', 'desa'),
(92, 9, 'Argosari', 'desa'),
(93, 9, 'Gadingkembar', 'desa'),
(94, 9, 'Gunung Jati', 'desa'),
(95, 9, 'Jabung', 'desa'),
(96, 9, 'Kemantren', 'desa'),
(97, 9, 'Kemiri', 'desa'),
(98, 9, 'Kenongo', 'desa'),
(99, 9, 'Ngadirejo', 'desa'),
(100, 9, 'Pandansari Lor', 'desa'),
(101, 9, 'Sidomulyo', 'desa'),
(102, 9, 'Sidorejo', 'desa'),
(103, 9, 'Slamparejo', 'desa'),
(104, 9, 'Sukolilo', 'desa'),
(105, 9, 'Sukopuro', 'desa'),
(106, 9, 'Taji', 'desa'),
(107, 10, 'Arjosari', 'desa'),
(108, 10, 'Arjowilangun', 'desa'),
(109, 10, 'Kaliasri', 'desa'),
(110, 10, 'Kalipare', 'desa'),
(111, 10, 'Kalirejo', 'desa'),
(112, 10, 'Putukrejo', 'desa'),
(113, 10, 'Sukowilangun', 'desa'),
(114, 10, 'Sumberpetung', 'desa'),
(115, 10, 'Tumpakrejo', 'desa'),
(116, 11, 'Ampeldento', 'desa'),
(117, 11, 'Bocek', 'desa'),
(118, 11, 'Donowarih', 'desa'),
(119, 11, 'Girimoyo', 'desa'),
(120, 11, 'Kepuharjo', 'desa'),
(121, 11, 'Ngenep', 'desa'),
(122, 11, 'Ngijo', 'desa'),
(123, 11, 'Tawangargo', 'desa'),
(124, 11, 'Tegalgondo', 'desa'),
(125, 12, 'Bayem', 'desa'),
(126, 12, 'Kasembon', 'desa'),
(127, 12, 'Pait', 'desa'),
(128, 12, 'Pondokagung', 'desa'),
(129, 12, 'Sukosari', 'desa'),
(130, 12, 'Wonoagung', 'desa'),
(131, 13, 'Curungrejo', 'desa'),
(132, 13, 'Dilem', 'desa'),
(133, 13, 'Jatirejoyoso', 'desa'),
(134, 13, 'Jenggolo', 'desa'),
(135, 13, 'Kedungpedaringan', 'desa'),
(136, 13, 'Kemiri', 'desa'),
(137, 13, 'Mangunrejo', 'desa'),
(138, 13, 'Mojosari', 'desa'),
(139, 13, 'Ngadilangkung', 'desa'),
(140, 13, 'Panggungrejo', 'desa'),
(141, 13, 'Sengguruh', 'desa'),
(142, 13, 'Sukoraharjo', 'desa'),
(143, 13, 'Talangagung', 'desa'),
(144, 13, 'Tegalsari', 'desa'),
(145, 13, 'Ardirejo', 'kelurahan'),
(146, 13, 'Cepokomulyo', 'kelurahan'),
(147, 13, 'Kepanjen', 'kelurahan'),
(148, 13, 'Penarukan', 'kelurahan'),
(149, 14, 'Jambuwer', 'desa'),
(150, 14, 'Jatikerto', 'desa'),
(151, 14, 'Karangrejo', 'desa'),
(152, 14, 'Kromengan', 'desa'),
(153, 14, 'Ngadirejo', 'desa'),
(154, 14, 'Peniwen', 'desa'),
(155, 14, 'Slorok', 'desa'),
(156, 15, 'Bedali', 'desa'),
(157, 15, 'Ketindan', 'desa'),
(158, 15, 'Mulyoarjo', 'desa'),
(159, 15, 'Sidodadi', 'desa'),
(160, 15, 'Sidoluhur', 'desa'),
(161, 15, 'Srigading', 'desa'),
(162, 15, 'Sumberngepoh', 'desa'),
(163, 15, 'Sumberporong', 'desa'),
(164, 15, 'Turirejo', 'desa'),
(165, 15, 'Wonorejo', 'desa'),
(166, 15, 'Kalirejo', 'kelurahan'),
(167, 15, 'Lawang', 'kelurahan'),
(168, 16, 'Babadan', 'desa'),
(169, 16, 'Balesari', 'desa'),
(170, 16, 'Banjarsari', 'desa'),
(171, 16, 'Kesamben', 'desa'),
(172, 16, 'Kranggan', 'desa'),
(173, 16, 'Maguan', 'desa'),
(174, 16, 'Ngajum', 'desa'),
(175, 16, 'Ngasem', 'desa'),
(176, 16, 'Palaan', 'desa'),
(177, 17, 'Banjarejo', 'desa'),
(178, 17, 'Banturejo', 'desa'),
(179, 17, 'Jombok', 'desa'),
(180, 17, 'Kaumrejo', 'desa'),
(181, 17, 'Mulyorejo', 'desa'),
(182, 17, 'Ngantru', 'desa'),
(183, 17, 'Pagersari', 'desa'),
(184, 17, 'Pandansari', 'desa'),
(185, 17, 'Purworejo', 'desa'),
(186, 17, 'Sidodadi', 'desa'),
(187, 17, 'Sumberagung', 'desa'),
(188, 17, 'Tulungrejo', 'desa'),
(189, 17, 'Waturejo', 'desa'),
(190, 18, 'Gampingan', 'desa'),
(191, 18, 'Pagak', 'desa'),
(192, 18, 'Pandanrejo', 'desa'),
(193, 18, 'Sempol', 'desa'),
(194, 18, 'Sumberejo', 'desa'),
(195, 18, 'Sumberkerto', 'desa'),
(196, 18, 'Sumbermanjing Kulon', 'desa'),
(197, 18, 'Tlogorejo', 'desa'),
(198, 19, 'Balearjo', 'desa'),
(199, 19, 'Banjarejo', 'desa'),
(200, 19, 'Brongkal', 'desa'),
(201, 19, 'Clumprit', 'desa'),
(202, 19, 'Kademangan', 'desa'),
(203, 19, 'Kanigoro', 'desa'),
(204, 19, 'Karangsuko', 'desa'),
(205, 19, 'Pagelaran', 'desa'),
(206, 19, 'Sidorejo', 'desa'),
(207, 19, 'Suwaru', 'desa'),
(208, 20, 'Ampeldento', 'desa'),
(209, 20, 'Asrikaton', 'desa'),
(210, 20, 'Banjarejo', 'desa'),
(211, 20, 'Bunutwetan', 'desa'),
(212, 20, 'Kedungrejo', 'desa'),
(213, 20, 'Mangliawan', 'desa'),
(214, 20, 'Pakisjajar', 'desa'),
(215, 20, 'Pakiskembar', 'desa'),
(216, 20, 'Pucangsongo', 'desa'),
(217, 20, 'Saptorenggo', 'desa'),
(218, 20, 'Sekarpuro', 'desa'),
(219, 20, 'Sukoanyar', 'desa'),
(220, 20, 'Sumberkradenan', 'desa'),
(221, 20, 'Sumberpasir', 'desa'),
(222, 20, 'Tirtomoyo', 'desa'),
(223, 21, 'Genengan', 'desa'),
(224, 21, 'Glanggang', 'desa'),
(225, 21, 'Jatisari', 'desa'),
(226, 21, 'Karangduren', 'desa'),
(227, 21, 'Karangpandan', 'desa'),
(228, 21, 'Kebonagung', 'desa'),
(229, 21, 'Kendalpayak', 'desa'),
(230, 21, 'Pakisaji', 'desa'),
(231, 21, 'Permanu', 'desa'),
(232, 21, 'Sutojayan', 'desa'),
(233, 21, 'Wadung', 'desa'),
(234, 21, 'Wonokerso', 'desa'),
(235, 22, 'Argosuko', 'desa'),
(236, 22, 'Belung', 'desa'),
(237, 22, 'Dawuhan', 'desa'),
(238, 22, 'Gubukklakah', 'desa'),
(239, 22, 'Jambesari', 'desa'),
(240, 22, 'Karanganyar', 'desa'),
(241, 22, 'Karangnongko', 'desa'),
(242, 22, 'Ngadas', 'desa'),
(243, 22, 'Ngadireso', 'desa'),
(244, 22, 'Ngebruk', 'desa'),
(245, 22, 'Pajaran', 'desa'),
(246, 22, 'Pandansari', 'desa'),
(247, 22, 'Poncokusumo', 'desa'),
(248, 22, 'Sumberejo', 'desa'),
(249, 22, 'Wonomulyo', 'desa'),
(250, 22, 'Wonorejo', 'desa'),
(251, 22, 'Wringinanom', 'desa'),
(252, 23, 'Bendosari', 'desa'),
(253, 23, 'Madiredo', 'desa'),
(254, 23, 'Ngabab', 'desa'),
(255, 23, 'Ngroto', 'desa'),
(256, 23, 'Pandesari', 'desa'),
(257, 23, 'Pujon Kidul', 'desa'),
(258, 23, 'Pujon Lor', 'desa'),
(259, 23, 'Sukomulyo', 'desa'),
(260, 23, 'Tawangsari', 'desa'),
(261, 23, 'Wiyurejo', 'desa'),
(262, 24, 'Ardimulyo', 'desa'),
(263, 24, 'Banjararum', 'desa'),
(264, 24, 'Baturetno', 'desa'),
(265, 24, 'Dengkol', 'desa'),
(266, 24, 'Gunungrejo', 'desa'),
(267, 24, 'Klampok', 'desa'),
(268, 24, 'Lang-Lang', 'desa'),
(269, 24, 'Purwoasri', 'desa'),
(270, 24, 'Randuagung', 'desa'),
(271, 24, 'Tamanharjo', 'desa'),
(272, 24, 'Toyomarto', 'desa'),
(273, 24, 'Tunjungtirto', 'desa'),
(274, 24, 'Watugede', 'desa'),
(275, 24, 'Wonorejo', 'desa'),
(276, 24, 'Candirenggo', 'kelurahan'),
(277, 24, 'Losari', 'kelurahan'),
(278, 24, 'Pagentan', 'kelurahan'),
(279, 25, 'Argotirto', 'desa'),
(280, 25, 'Druju', 'desa'),
(281, 25, 'Harjokuncaran', 'desa'),
(282, 25, 'Kedungbanteng', 'desa'),
(283, 25, 'Klepu', 'desa'),
(284, 25, 'Ringinkembar', 'desa'),
(285, 25, 'Ringinsari', 'desa'),
(286, 25, 'Sekarbanyu', 'desa'),
(287, 25, 'Sidoasri', 'desa'),
(288, 25, 'Sitiarjo', 'desa'),
(289, 25, 'Sumberagung', 'desa'),
(290, 25, 'Sumbermanjing Wetan', 'desa'),
(291, 25, 'Tambakasri', 'desa'),
(292, 25, 'Tambakrejo', 'desa'),
(293, 25, 'Tegalrejo', 'desa'),
(294, 26, 'Jatiguwi', 'desa'),
(295, 26, 'Karangkates', 'desa'),
(296, 26, 'Ngebruk', 'desa'),
(297, 26, 'Sambigede', 'desa'),
(298, 26, 'Senggreng', 'desa'),
(299, 26, 'Sumberpucung', 'desa'),
(300, 26, 'Ternyang', 'desa'),
(301, 27, 'Gunungronggo', 'desa'),
(302, 27, 'Gunungsari', 'desa'),
(303, 27, 'Jambearjo', 'desa'),
(304, 27, 'Jatisari', 'desa'),
(305, 27, 'Ngawonggo', 'desa'),
(306, 27, 'Pandanmulyo', 'desa'),
(307, 27, 'Purwosekar', 'desa'),
(308, 27, 'Randugading', 'desa'),
(309, 27, 'Sumbersuko', 'desa'),
(310, 27, 'Tajinan', 'desa'),
(311, 27, 'Tambakasri', 'desa'),
(312, 27, 'Tangkilsari', 'desa'),
(313, 28, 'Ampelgading', 'desa'),
(314, 28, 'Gadungsari', 'desa'),
(315, 28, 'Jogomulyan', 'desa'),
(316, 28, 'Kepatihan', 'desa'),
(317, 28, 'Pujiharjo', 'desa'),
(318, 28, 'Purwodadi', 'desa'),
(319, 28, 'Sukorejo', 'desa'),
(320, 28, 'Sumbertangkil', 'desa'),
(321, 28, 'Tamankuncaran', 'desa'),
(322, 28, 'Tamansatriyan', 'desa'),
(323, 28, 'Tirtoyudo', 'desa'),
(324, 28, 'Tlogosari', 'desa'),
(325, 28, 'Wonoagung', 'desa'),
(326, 29, 'Benjor', 'desa'),
(327, 29, 'Bokor', 'desa'),
(328, 29, 'Duwet', 'desa'),
(329, 29, 'Duwet Krajan', 'desa'),
(330, 29, 'Jeru', 'desa'),
(331, 29, 'Kambingan', 'desa'),
(332, 29, 'Kidal', 'desa'),
(333, 29, 'Malangsuko', 'desa'),
(334, 29, 'Ngingit', 'desa'),
(335, 29, 'Pandanajeng', 'desa'),
(336, 29, 'Pulungdowo', 'desa'),
(337, 29, 'Slamet', 'desa'),
(338, 29, 'Tulusbesar', 'desa'),
(339, 29, 'Tumpang', 'desa'),
(340, 29, 'Wringinsongo', 'desa'),
(341, 30, 'Gedog Kulon', 'desa'),
(342, 30, 'Gedog Wetan', 'desa'),
(343, 30, 'Jeru', 'desa'),
(344, 30, 'Kedok', 'desa'),
(345, 30, 'Kemulan', 'desa'),
(346, 30, 'Pagedangan', 'desa'),
(347, 30, 'Sanankerto', 'desa'),
(348, 30, 'Sananrejo', 'desa'),
(349, 30, 'Sawahan', 'desa'),
(350, 30, 'Talangsuko', 'desa'),
(351, 30, 'Talok', 'desa'),
(352, 30, 'Tanggung', 'desa'),
(353, 30, 'Tawangrejeni', 'desa'),
(354, 30, 'Tumpukrenteng', 'desa'),
(355, 30, 'Undaan', 'desa'),
(356, 30, 'Sedayu', 'kelurahan'),
(357, 30, 'Turen', 'kelurahan'),
(358, 31, 'Dalisodo', 'desa'),
(359, 31, 'Gondowangi', 'desa'),
(360, 31, 'Jedong', 'desa'),
(361, 31, 'Mendalanwangi', 'desa'),
(362, 31, 'Pandanlandung', 'desa'),
(363, 31, 'Pandanrejo', 'desa'),
(364, 31, 'Parangargo', 'desa'),
(365, 31, 'Petungsewu', 'desa'),
(366, 31, 'Sidorahayu', 'desa'),
(367, 31, 'Sitirejo', 'desa'),
(368, 31, 'Sukodadi', 'desa'),
(369, 31, 'Sumbersuko', 'desa'),
(370, 32, 'Bambang', 'desa'),
(371, 32, 'Blayu', 'desa'),
(372, 32, 'Bringin', 'desa'),
(373, 32, 'Codo', 'desa'),
(374, 32, 'Dadapan', 'desa'),
(375, 32, 'Kidangbang', 'desa'),
(376, 32, 'Ngembal', 'desa'),
(377, 32, 'Patokpicis', 'desa'),
(378, 32, 'Sukoanyar', 'desa'),
(379, 32, 'Sukolilo', 'desa'),
(380, 32, 'Sumberputih', 'desa'),
(381, 32, 'Wajak', 'desa'),
(382, 32, 'Wonoayu', 'desa'),
(383, 33, 'Bangelan', 'desa'),
(384, 33, 'Kebobang', 'desa'),
(385, 33, 'Kluwut', 'desa'),
(386, 33, 'Plandi', 'desa'),
(387, 33, 'Plaosan', 'desa'),
(388, 33, 'Sumberdem', 'desa'),
(389, 33, 'Sumbertempur', 'desa'),
(390, 33, 'Wonosari', 'desa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `idKecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`idKecamatan`, `nama_kecamatan`) VALUES
(1, 'Ampelgading'),
(2, 'Bantur'),
(3, 'Bululawang'),
(4, 'Dampit'),
(5, 'Dau'),
(6, 'Donomulyo'),
(7, 'Gedangan'),
(8, 'Gondanglegi'),
(9, 'Jabung'),
(10, 'Kalipare'),
(11, 'Karangploso'),
(12, 'Kasembon'),
(13, 'Kepanjen'),
(14, 'Kromengan'),
(15, 'Lawang'),
(16, 'Ngajum'),
(17, 'Ngantang'),
(18, 'Pagak'),
(19, 'Pagelaran'),
(20, 'Pakis'),
(21, 'Pakisaji'),
(22, 'Poncokusumo'),
(23, 'Pujon'),
(24, 'Singosari'),
(25, 'Sumbermanjing Wetan'),
(26, 'Sumberpucung'),
(27, 'Tajinan'),
(28, 'Tirtoyudo'),
(29, 'Tumpang'),
(30, 'Turen'),
(31, 'Wagir'),
(32, 'Wajak'),
(33, 'Wonosari');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemohon`
--

CREATE TABLE `tb_pemohon` (
  `idPemohon` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `status_pemohon` enum('belum_terverifikasi','revisi','terverifikasi') NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pemohon`
--

INSERT INTO `tb_pemohon` (`idPemohon`, `nama`, `nik`, `alamat`, `pekerjaan`, `umur`, `jenis_kelamin`, `status_pemohon`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Test', '123123', 'Malang', 'Swasta', '21', 'Pria', 'belum_terverifikasi', NULL, '2021-03-08 13:24:01', '2021-03-08 13:24:01'),
(2, 'Bagas', '35041720504', 'Malang', 'Pelajar', '21', 'Pria', 'terverifikasi', NULL, '2021-03-08 14:12:31', '2021-03-08 14:12:31'),
(3, 'Aminulloh', '125361263', 'Malang', 'Guru', '21', 'Pria', 'terverifikasi', NULL, '2021-03-08 14:42:25', '2021-03-08 14:42:25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_permohonan`
--

CREATE TABLE `tb_permohonan` (
  `idPermohonan` int(11) NOT NULL,
  `idPemohon` int(11) NOT NULL,
  `nib` bigint(11) NOT NULL,
  `status_permohonan` enum('belum_terverifikasi','revisi','terverifikasi') NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `nomor_berkas` bigint(11) NOT NULL,
  `scan_berkas` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_permohonan`
--

INSERT INTO `tb_permohonan` (`idPermohonan`, `idPemohon`, `nib`, `status_permohonan`, `keterangan`, `nomor_berkas`, `scan_berkas`, `created_at`, `updated_at`) VALUES
(1, 2, 54274715904, 'belum_terverifikasi', NULL, 38510002936, '32_WiradarmaNurmagikaBagaskara_XIIRPL1.pdf', '2021-03-14 12:35:40', '2021-03-14 12:35:40');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil_ptsl`
--

CREATE TABLE `tb_profil_ptsl` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profil_ptsl`
--

INSERT INTO `tb_profil_ptsl` (`id`, `foto`, `nama`) VALUES
(1, 'logo_atrpbn.png', 'PTSL Kabupaten Malang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `idRole` int(11) NOT NULL,
  `nama_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`idRole`, `nama_role`) VALUES
(1, 'Administrator'),
(2, 'Petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tanah`
--

CREATE TABLE `tb_tanah` (
  `nib` bigint(11) NOT NULL,
  `idPemohon` int(11) NOT NULL,
  `idDesa` int(11) NOT NULL,
  `luas_tanah` varchar(50) NOT NULL,
  `letak_tanah` varchar(255) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tanah`
--

INSERT INTO `tb_tanah` (`nib`, `idPemohon`, `idDesa`, `luas_tanah`, `letak_tanah`, `rt`, `rw`, `created_at`, `updated_at`) VALUES
(2147483647, 3, 4, '3500.50', 'Malang', '04', '02', '2021-03-11 06:26:20', '2021-03-11 06:26:20'),
(36041228104, 1, 14, '4000', 'Malang', '07', '03', '2021-03-11 07:21:15', '2021-03-11 07:21:15'),
(54274715904, 2, 310, '5000.30', 'Malang Raya', '04', '01', '2021-03-12 16:47:57', '2021-03-12 16:47:57'),
(89435115331, 2, 310, '4000.50', 'Malang', '04', '02', '2021-03-11 11:23:58', '2021-03-11 11:23:58');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `idUser` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `idRole` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`idUser`, `nama`, `alamat`, `email`, `no_hp`, `jenis_kelamin`, `username`, `password`, `idRole`, `created_at`, `updated_at`) VALUES
(1, 'Yudas', 'Kepanjen', 'yudasmalabi@gmail.com', '08135915835', 'Pria', 'admin', '$2y$10$dfnIcPLNsCBwTLiZ4BojnePurZVP.uGquCUjb0InERTqTxdEi8u5u', 1, '2021-03-06 17:53:07', '2021-03-06 17:53:07'),
(2, 'Bagaskara', 'Kepanjen', 'bagas@gmail.com', '081359158523', 'Pria', 'petugas', '$2y$10$wYDu9vbCi5feF/HnCwJ7ReFCimgwzAabKhNFaPcDuLQJ2kfsFzHWi', 2, '2021-03-07 07:13:48', '2021-03-07 07:13:48'),
(3, 'Aminulloh', 'Malang', 'amin@gmail.com', '081359127212', 'Pria', 'aminulloh', '$2y$10$LdOAs5eTSUlYJL1kG7iIIu87evWD/9NQSBajyu7niecGaYh9HWdfG', 2, '2021-03-07 07:15:45', '2021-03-07 07:15:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_desa`
--
ALTER TABLE `tb_desa`
  ADD PRIMARY KEY (`idDesa`),
  ADD KEY `idKecamatan` (`idKecamatan`);

--
-- Indexes for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`idKecamatan`);

--
-- Indexes for table `tb_pemohon`
--
ALTER TABLE `tb_pemohon`
  ADD PRIMARY KEY (`idPemohon`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `tb_permohonan`
--
ALTER TABLE `tb_permohonan`
  ADD PRIMARY KEY (`idPermohonan`),
  ADD KEY `idPemohon` (`idPemohon`),
  ADD KEY `nib` (`nib`);

--
-- Indexes for table `tb_profil_ptsl`
--
ALTER TABLE `tb_profil_ptsl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`idRole`);

--
-- Indexes for table `tb_tanah`
--
ALTER TABLE `tb_tanah`
  ADD PRIMARY KEY (`nib`),
  ADD KEY `idPemohon` (`idPemohon`),
  ADD KEY `idDesa` (`idDesa`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `idRole` (`idRole`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_desa`
--
ALTER TABLE `tb_desa`
  MODIFY `idDesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=391;

--
-- AUTO_INCREMENT for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `idKecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_pemohon`
--
ALTER TABLE `tb_pemohon`
  MODIFY `idPemohon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_permohonan`
--
ALTER TABLE `tb_permohonan`
  MODIFY `idPermohonan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_profil_ptsl`
--
ALTER TABLE `tb_profil_ptsl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_desa`
--
ALTER TABLE `tb_desa`
  ADD CONSTRAINT `tb_desa_ibfk_1` FOREIGN KEY (`idKecamatan`) REFERENCES `tb_kecamatan` (`idKecamatan`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_permohonan`
--
ALTER TABLE `tb_permohonan`
  ADD CONSTRAINT `tb_permohonan_ibfk_1` FOREIGN KEY (`idPemohon`) REFERENCES `tb_pemohon` (`idPemohon`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_permohonan_ibfk_2` FOREIGN KEY (`nib`) REFERENCES `tb_tanah` (`nib`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_tanah`
--
ALTER TABLE `tb_tanah`
  ADD CONSTRAINT `tb_tanah_ibfk_1` FOREIGN KEY (`idDesa`) REFERENCES `tb_desa` (`idDesa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_tanah_ibfk_2` FOREIGN KEY (`idPemohon`) REFERENCES `tb_pemohon` (`idPemohon`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`idRole`) REFERENCES `tb_role` (`idRole`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
