-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 28 Jul 2023 pada 11.49
-- Versi server: 5.7.34
-- Versi PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bnn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `kode_kecamatan` varchar(25) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `kode_kecamatan`, `nama_kecamatan`, `kabupaten`, `provinsi`) VALUES
(1, '150101', 'Kec. Aluh-Aluh', 'Kab. Banjar', 'Prop. Kalimantan Selatan'),
(2, '150102', 'Kec. Gambut', 'Kab. Banjar', 'Prop. Kalimantan Selatan'),
(3, '150103', 'Kec. Kertak Hanyar', 'Kab. Banjar', 'Prop. Kalimantan Selatan'),
(4, '150104', 'Kec. Sungai Tabuk', 'Kab. Banjar', 'Prop. Kalimantan Selatan'),
(5, '150105', 'Kec. Martapura', 'Kab. Banjar', 'Prop. Kalimantan Selatan'),
(6, '150106', 'Kec. Astambul', 'Kab. Banjar', 'Prop. Kalimantan Selatan'),
(7, '150107', 'Kec. Karang Intan', 'Kab. Banjar', 'Prop. Kalimantan Selatan'),
(8, '150108', 'Kec. Aranio', 'Kab. Banjar', 'Prop. Kalimantan Selatan'),
(9, '150109', 'Kec. Sungai Pinang', 'Kab. Banjar', 'Prop. Kalimantan Selatan'),
(10, '150110', 'Kec. Pengaron', 'Kab. Banjar', 'Prop. Kalimantan Selatan'),
(11, '150111', 'Kec. Mataraman', 'Kab. Banjar', 'Prop. Kalimantan Selatan'),
(12, '150112', 'Kec. Simpang Empat', 'Kab. Banjar', 'Prop. Kalimantan Selatan'),
(13, '150113', 'Kec. Beruntung Baru', 'Kab. Banjar', 'Prop. Kalimantan Selatan'),
(14, '150114', 'Kec. Martapura Barat', 'Kab. Banjar', 'Prop. Kalimantan Selatan'),
(15, '150115', 'Kec. Martapura Timur', 'Kab. Banjar', 'Prop. Kalimantan Selatan'),
(16, '150116', 'Kec. Paramasan', 'Kab. Banjar', 'Prop. Kalimantan Selatan'),
(17, '150117', 'Kec. Tatah Makmur', 'Kab. Banjar', 'Prop. Kalimantan Selatan'),
(18, '150118', 'Kec. Sambung Makmur', 'Kab. Banjar', 'Prop. Kalimantan Selatan'),
(19, '150119', 'Kec. Telaga Bauntung', 'Kab. Banjar', 'Prop. Kalimantan Selatan'),
(20, '150201', 'Kec. Panyipatan', 'Kab. Tanah Laut', 'Prop. Kalimantan Selatan'),
(21, '150202', 'Kec. Takisung', 'Kab. Tanah Laut', 'Prop. Kalimantan Selatan'),
(22, '150203', 'Kec. Kurau', 'Kab. Tanah Laut', 'Prop. Kalimantan Selatan'),
(23, '150204', 'Kec. Bati-Bati', 'Kab. Tanah Laut', 'Prop. Kalimantan Selatan'),
(24, '150205', 'Kec. Tambang Ulang', 'Kab. Tanah Laut', 'Prop. Kalimantan Selatan'),
(25, '150206', 'Kec. Pelaihari', 'Kab. Tanah Laut', 'Prop. Kalimantan Selatan'),
(26, '150207', 'Kec. Batu Ampar', 'Kab. Tanah Laut', 'Prop. Kalimantan Selatan'),
(27, '150208', 'Kec. Jorong', 'Kab. Tanah Laut', 'Prop. Kalimantan Selatan'),
(28, '150209', 'Kec. Kintap', 'Kab. Tanah Laut', 'Prop. Kalimantan Selatan'),
(29, '150210', 'Kec. Harapan Bumi Makmur', 'Kab. Tanah Laut', 'Prop. Kalimantan Selatan'),
(30, '150211', 'Kec. Bajuin', 'Kab. Tanah Laut', 'Prop. Kalimantan Selatan'),
(31, '150301', 'Kec. Tabunganen', 'Kab. Barito Kuala', 'Prop. Kalimantan Selatan'),
(32, '150302', 'Kec. Tamban', 'Kab. Barito Kuala', 'Prop. Kalimantan Selatan'),
(33, '150303', 'Kec. Mekarsari', 'Kab. Barito Kuala', 'Prop. Kalimantan Selatan'),
(34, '150304', 'Kec. Anjir Pasar', 'Kab. Barito Kuala', 'Prop. Kalimantan Selatan'),
(35, '150305', 'Kec. Anjir Muara', 'Kab. Barito Kuala', 'Prop. Kalimantan Selatan'),
(36, '150306', 'Kec. Alalak', 'Kab. Barito Kuala', 'Prop. Kalimantan Selatan'),
(37, '150307', 'Kec. Mandastana', 'Kab. Barito Kuala', 'Prop. Kalimantan Selatan'),
(38, '150308', 'Kec. Belawang', 'Kab. Barito Kuala', 'Prop. Kalimantan Selatan'),
(39, '150309', 'Kec. Wanaraya', 'Kab. Barito Kuala', 'Prop. Kalimantan Selatan'),
(40, '150310', 'Kec. Barambai', 'Kab. Barito Kuala', 'Prop. Kalimantan Selatan'),
(41, '150311', 'Kec. Rantau Badauh', 'Kab. Barito Kuala', 'Prop. Kalimantan Selatan'),
(42, '150312', 'Kec. Cerbon', 'Kab. Barito Kuala', 'Prop. Kalimantan Selatan'),
(43, '150313', 'Kec. Bakumpai', 'Kab. Barito Kuala', 'Prop. Kalimantan Selatan'),
(44, '150314', 'Kec. Marabahan', 'Kab. Barito Kuala', 'Prop. Kalimantan Selatan'),
(45, '150315', 'Kec. Tabukan', 'Kab. Barito Kuala', 'Prop. Kalimantan Selatan'),
(46, '150316', 'Kec. Kuripan', 'Kab. Barito Kuala', 'Prop. Kalimantan Selatan'),
(47, '150317', 'Kec. Jejangkit', 'Kab. Barito Kuala', 'Prop. Kalimantan Selatan'),
(48, '150401', 'Kec. Binuang', 'Kab. Tapin', 'Prop. Kalimantan Selatan'),
(49, '150402', 'Kec. Tapin Selatan', 'Kab. Tapin', 'Prop. Kalimantan Selatan'),
(50, '150403', 'Kec. Tapin Tengah', 'Kab. Tapin', 'Prop. Kalimantan Selatan'),
(51, '150404', 'Kec. Bungur', 'Kab. Tapin', 'Prop. Kalimantan Selatan'),
(52, '150405', 'Kec. Piani', 'Kab. Tapin', 'Prop. Kalimantan Selatan'),
(53, '150406', 'Kec. Lokpaikat', 'Kab. Tapin', 'Prop. Kalimantan Selatan'),
(54, '150407', 'Kec. Tapin Utara', 'Kab. Tapin', 'Prop. Kalimantan Selatan'),
(55, '150408', 'Kec. Bakarangan', 'Kab. Tapin', 'Prop. Kalimantan Selatan'),
(56, '150409', 'Kec. Candi Laras Selatan', 'Kab. Tapin', 'Prop. Kalimantan Selatan'),
(57, '150410', 'Kec. Candi Laras Utara', 'Kab. Tapin', 'Prop. Kalimantan Selatan'),
(58, '150411', 'Kec. Hatungun', 'Kab. Tapin', 'Prop. Kalimantan Selatan'),
(59, '150412', 'Kec. Salam Babaris', 'Kab. Tapin', 'Prop. Kalimantan Selatan'),
(60, '150501', 'Kec. Padang Batung', 'Kab. Hulu Sungai Selatan', 'Prop. Kalimantan Selatan'),
(61, '150502', 'Kec. Loksado', 'Kab. Hulu Sungai Selatan', 'Prop. Kalimantan Selatan'),
(62, '150503', 'Kec. Telaga Langsat', 'Kab. Hulu Sungai Selatan', 'Prop. Kalimantan Selatan'),
(63, '150504', 'Kec. Angkinang', 'Kab. Hulu Sungai Selatan', 'Prop. Kalimantan Selatan'),
(64, '150505', 'Kec. Kandangan', 'Kab. Hulu Sungai Selatan', 'Prop. Kalimantan Selatan'),
(65, '150506', 'Kec. Sungai Raya', 'Kab. Hulu Sungai Selatan', 'Prop. Kalimantan Selatan'),
(66, '150507', 'Kec. Simpur', 'Kab. Hulu Sungai Selatan', 'Prop. Kalimantan Selatan'),
(67, '150508', 'Kec. Kalumpang', 'Kab. Hulu Sungai Selatan', 'Prop. Kalimantan Selatan'),
(68, '150509', 'Kec. Daha Selatan', 'Kab. Hulu Sungai Selatan', 'Prop. Kalimantan Selatan'),
(69, '150510', 'Kec. Daha Utara', 'Kab. Hulu Sungai Selatan', 'Prop. Kalimantan Selatan'),
(70, '150511', 'Kec. Daha Barat', 'Kab. Hulu Sungai Selatan', 'Prop. Kalimantan Selatan'),
(71, '150601', 'Kec. Haruyan', 'Kab. Hulu Sungai Tengah', 'Prop. Kalimantan Selatan'),
(72, '150602', 'Kec. Batu Benawa', 'Kab. Hulu Sungai Tengah', 'Prop. Kalimantan Selatan'),
(73, '150603', 'Kec. Hantakan', 'Kab. Hulu Sungai Tengah', 'Prop. Kalimantan Selatan'),
(74, '150604', 'Kec. Batang Alai Selatan', 'Kab. Hulu Sungai Tengah', 'Prop. Kalimantan Selatan'),
(75, '150605', 'Kec. Barabai', 'Kab. Hulu Sungai Tengah', 'Prop. Kalimantan Selatan'),
(76, '150606', 'Kec. Labuan Amas Selatan', 'Kab. Hulu Sungai Tengah', 'Prop. Kalimantan Selatan'),
(77, '150607', 'Kec. Labuan Amas Utara', 'Kab. Hulu Sungai Tengah', 'Prop. Kalimantan Selatan'),
(78, '150608', 'Kec. Pendawan', 'Kab. Hulu Sungai Tengah', 'Prop. Kalimantan Selatan'),
(79, '150609', 'Kec. Batang Alai Utara', 'Kab. Hulu Sungai Tengah', 'Prop. Kalimantan Selatan'),
(80, '150610', 'Kec. Batang Alai Timur', 'Kab. Hulu Sungai Tengah', 'Prop. Kalimantan Selatan'),
(81, '150611', 'Kec. Limpasu', 'Kab. Hulu Sungai Tengah', 'Prop. Kalimantan Selatan'),
(82, '150701', 'Kec. Danau Panggang', 'Kab. Hulu Sungai Utara', 'Prop. Kalimantan Selatan'),
(83, '150702', 'Kec. Babirik', 'Kab. Hulu Sungai Utara', 'Prop. Kalimantan Selatan'),
(84, '150703', 'Kec. Sungai Pandan', 'Kab. Hulu Sungai Utara', 'Prop. Kalimantan Selatan'),
(85, '150704', 'Kec. Amuntai Selatan', 'Kab. Hulu Sungai Utara', 'Prop. Kalimantan Selatan'),
(86, '150705', 'Kec. Amuntai Tengah', 'Kab. Hulu Sungai Utara', 'Prop. Kalimantan Selatan'),
(87, '150706', 'Kec. Banjang', 'Kab. Hulu Sungai Utara', 'Prop. Kalimantan Selatan'),
(88, '150707', 'Kec. Amuntai Utara', 'Kab. Hulu Sungai Utara', 'Prop. Kalimantan Selatan'),
(89, '150708', 'Kec. Paminggir', 'Kab. Hulu Sungai Utara', 'Prop. Kalimantan Selatan'),
(90, '150709', 'Kec. Sungai Tabukan', 'Kab. Hulu Sungai Utara', 'Prop. Kalimantan Selatan'),
(91, '150710', 'Kec. Haur Gading', 'Kab. Hulu Sungai Utara', 'Prop. Kalimantan Selatan'),
(92, '150801', 'Kec. Banua Lawas', 'Kab. Tabalong', 'Prop. Kalimantan Selatan'),
(93, '150802', 'Kec. Pugaan', 'Kab. Tabalong', 'Prop. Kalimantan Selatan'),
(94, '150803', 'Kec. Kelua', 'Kab. Tabalong', 'Prop. Kalimantan Selatan'),
(95, '150804', 'Kec. Muara Harus', 'Kab. Tabalong', 'Prop. Kalimantan Selatan'),
(96, '150805', 'Kec. Tanta', 'Kab. Tabalong', 'Prop. Kalimantan Selatan'),
(97, '150806', 'Kec. Tanjung', 'Kab. Tabalong', 'Prop. Kalimantan Selatan'),
(98, '150807', 'Kec. Murung Pudak', 'Kab. Tabalong', 'Prop. Kalimantan Selatan'),
(99, '150808', 'Kec. Haruai', 'Kab. Tabalong', 'Prop. Kalimantan Selatan'),
(100, '150809', 'Kec. Upau', 'Kab. Tabalong', 'Prop. Kalimantan Selatan'),
(101, '150810', 'Kec. Muara Uya', 'Kab. Tabalong', 'Prop. Kalimantan Selatan'),
(102, '150811', 'Kec. Jaro', 'Kab. Tabalong', 'Prop. Kalimantan Selatan'),
(103, '150812', 'Kec. Bintang Ara', 'Kab. Tabalong', 'Prop. Kalimantan Selatan'),
(104, '150901', 'Kec. Pulau Sembilan', 'Kab. Kota Baru', 'Prop. Kalimantan Selatan'),
(105, '150902', 'Kec. Pulau Laut Barat', 'Kab. Kota Baru', 'Prop. Kalimantan Selatan'),
(106, '150903', 'Kec. Pulau Laut Selatan', 'Kab. Kota Baru', 'Prop. Kalimantan Selatan'),
(107, '150904', 'Kec. Pulau Laut Timur', 'Kab. Kota Baru', 'Prop. Kalimantan Selatan'),
(108, '150905', 'Kec. Pulau Sebuku', 'Kab. Kota Baru', 'Prop. Kalimantan Selatan'),
(109, '150906', 'Kec. Pulau Laut Utara', 'Kab. Kota Baru', 'Prop. Kalimantan Selatan'),
(110, '150907', 'Kec. Pulau Laut Tengah', 'Kab. Kota Baru', 'Prop. Kalimantan Selatan'),
(111, '150908', 'Kec. Kelumpang Hilir', 'Kab. Kota Baru', 'Prop. Kalimantan Selatan'),
(112, '150909', 'Kec. Kelumpang Barat', 'Kab. Kota Baru', 'Prop. Kalimantan Selatan'),
(113, '150912', 'Kec. Kelumpang Selatan', 'Kab. Kota Baru', 'Prop. Kalimantan Selatan'),
(114, '150913', 'Kec. Kelumpang Hulu', 'Kab. Kota Baru', 'Prop. Kalimantan Selatan'),
(115, '150914', 'Kec. Hampang', 'Kab. Kota Baru', 'Prop. Kalimantan Selatan'),
(116, '150915', 'Kec. Sungai Durian', 'Kab. Kota Baru', 'Prop. Kalimantan Selatan'),
(117, '150916', 'Kec. Kelumpang Tengah', 'Kab. Kota Baru', 'Prop. Kalimantan Selatan'),
(118, '150917', 'Kec. Kelumpang Utara', 'Kab. Kota Baru', 'Prop. Kalimantan Selatan'),
(119, '150918', 'Kec. Pamukan Selatan', 'Kab. Kota Baru', 'Prop. Kalimantan Selatan'),
(120, '150919', 'Kec. Sampanahan', 'Kab. Kota Baru', 'Prop. Kalimantan Selatan'),
(121, '150920', 'Kec. Pamukan Utara', 'Kab. Kota Baru', 'Prop. Kalimantan Selatan'),
(122, '150921', 'Kec. Pulau Laut Kepulauan', 'Kab. Kota Baru', 'Prop. Kalimantan Selatan'),
(123, '150922', 'Kec. Pamukan Barat', 'Kab. Kota Baru', 'Prop. Kalimantan Selatan'),
(124, '150923', 'Kec. Pulau Laut Tanjung Selayar', 'Kab. Kota Baru', 'Prop. Kalimantan Selatan'),
(125, '151001', 'Kec. Lampihong', 'Kab. Balangan', 'Prop. Kalimantan Selatan'),
(126, '151002', 'Kec. Batu Mandi', 'Kab. Balangan', 'Prop. Kalimantan Selatan'),
(127, '151003', 'Kec. Awayan', 'Kab. Balangan', 'Prop. Kalimantan Selatan'),
(128, '151004', 'Kec. Paringin', 'Kab. Balangan', 'Prop. Kalimantan Selatan'),
(129, '151005', 'Kec. Juai', 'Kab. Balangan', 'Prop. Kalimantan Selatan'),
(130, '151006', 'Kec. Halong', 'Kab. Balangan', 'Prop. Kalimantan Selatan'),
(131, '151007', 'Kec. Tebing Tinggi', 'Kab. Balangan', 'Prop. Kalimantan Selatan'),
(132, '151008', 'Kec. Paringin Selatan', 'Kab. Balangan', 'Prop. Kalimantan Selatan'),
(133, '151101', 'Kec. Kusan Hilir', 'Kab. Tanah Bumbu', 'Prop. Kalimantan Selatan'),
(134, '151102', 'Kec. Sungai Loban', 'Kab. Tanah Bumbu', 'Prop. Kalimantan Selatan'),
(135, '151103', 'Kec. Satui', 'Kab. Tanah Bumbu', 'Prop. Kalimantan Selatan'),
(136, '151104', 'Kec. Kusan Hulu', 'Kab. Tanah Bumbu', 'Prop. Kalimantan Selatan'),
(137, '151105', 'Kec. Batu Licin', 'Kab. Tanah Bumbu', 'Prop. Kalimantan Selatan'),
(138, '151106', 'Kec. Simpang Empat', 'Kab. Tanah Bumbu', 'Prop. Kalimantan Selatan'),
(139, '151107', 'Kec. Karang Bintang', 'Kab. Tanah Bumbu', 'Prop. Kalimantan Selatan'),
(140, '151108', 'Kec. Mantewe', 'Kab. Tanah Bumbu', 'Prop. Kalimantan Selatan'),
(141, '151109', 'Kec. Angsana', 'Kab. Tanah Bumbu', 'Prop. Kalimantan Selatan'),
(142, '151110', 'Kec. Kuranji', 'Kab. Tanah Bumbu', 'Prop. Kalimantan Selatan'),
(143, '156001', 'Kec. Banjarmasin Selatan', 'Kota Banjarmasin', 'Prop. Kalimantan Selatan'),
(144, '156002', 'Kec. Banjarmasin Timur', 'Kota Banjarmasin', 'Prop. Kalimantan Selatan'),
(145, '156003', 'Kec. Banjarmasin Barat', 'Kota Banjarmasin', 'Prop. Kalimantan Selatan'),
(146, '156004', 'Kec. Banjarmasin Utara', 'Kota Banjarmasin', 'Prop. Kalimantan Selatan'),
(147, '156005', 'Kec. Banjarmasin Tengah', 'Kota Banjarmasin', 'Prop. Kalimantan Selatan'),
(148, '156101', 'Kec. Landasan Ulin', 'Kota Banjarbaru', 'Prop. Kalimantan Selatan'),
(149, '156102', 'Kec. Cempaka', 'Kota Banjarbaru', 'Prop. Kalimantan Selatan'),
(150, '156104', 'Kec. Banjarbaru Utara', 'Kota Banjarbaru', 'Prop. Kalimantan Selatan'),
(151, '156105', 'Kec. Banjarbaru Selatan', 'Kota Banjarbaru', 'Prop. Kalimantan Selatan'),
(152, '156106', 'Kec. Liang Anggang', 'Kota Banjarbaru', 'Prop. Kalimantan Selatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `id_masyarakat` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama_masyarakat` varchar(255) DEFAULT NULL,
  `nik` varchar(150) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `jk` varchar(11) DEFAULT NULL,
  `alamat` text,
  `pekerjaan` varchar(150) DEFAULT NULL,
  `no_wa` varchar(25) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`id_masyarakat`, `id_user`, `nama_masyarakat`, `nik`, `email`, `jk`, `alamat`, `pekerjaan`, `no_wa`, `status`) VALUES
(6, 4, 'Aditya Rahman', '6306876165226789', 'rahmanadtya15@gmail.com', 'Laki - Laki', 'jl. pramuka no 22 kec banjarmasin timur', 'Sudah Bekerja', '081998588147', 'Aktif'),
(7, 5, 'Muhammad Yazid Zidane', '6308332454666781', 'yazid@gmail.com', 'Laki - Laki', 'jl. Brig Jend Hasan Basri no.44 kec banjarmasin utara', 'Belum Bekerja', '081978651221', 'Aktif'),
(8, 6, 'rio saputra', '6308779034432362', 'saputra112@gmail.com', 'Laki - Laki', 'jl. A. Yani kec martapura no 112', 'Belum Bekerja', '082344455665', 'Aktif'),
(9, 7, 'Vidia Aisha', '63060941040100002', 'vidiaaisha@gmail.com', 'Perempuan', 'Gg. Purnama 2 no 4 kec banjarbaru utara', 'Sudah Bekerja', '081950332145', 'Aktif'),
(10, 8, 'Muhammad Hafi Arisandi', '6306633001008990', 'arisandi31@gmail.com', 'Laki - Laki', 'jl. pemajatan no 55 kec gambut', 'Belum Bekerja', '087899903122', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `id_perusahaan` int(11) DEFAULT NULL,
  `nama_pegawai` varchar(255) DEFAULT NULL,
  `nik` varchar(150) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `jk` varchar(11) DEFAULT NULL,
  `alamat` text,
  `pekerjaan` varchar(150) DEFAULT NULL,
  `no_wa` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `id_perusahaan`, `nama_pegawai`, `nik`, `email`, `jk`, `alamat`, `pekerjaan`, `no_wa`) VALUES
(12, 11, 'Sonny Raymon', '621312734812939', 'sonny@gmail.com', 'Laki-Laki', 'Banjarmasin', 'Teknisi', '021562737288');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_masyarakat` int(11) DEFAULT NULL,
  `id_kecamatan` int(11) DEFAULT NULL,
  `nomor_antrian` varchar(5) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `foto` varchar(150) DEFAULT NULL,
  `tgl_pendaftaran` date DEFAULT NULL,
  `tgl_buat` date DEFAULT NULL,
  `tgl_ambil` date DEFAULT NULL,
  `ket` text,
  `perihal` text,
  `hasil_tes` varchar(20) DEFAULT NULL,
  `status_pendaftaran` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `id_masyarakat`, `id_kecamatan`, `nomor_antrian`, `ktp`, `foto`, `tgl_pendaftaran`, `tgl_buat`, `tgl_ambil`, `ket`, `perihal`, `hasil_tes`, `status_pendaftaran`) VALUES
(1, 6, 144, '001', '35113.jpeg', '14634.jpeg', '2023-02-12', '2023-02-13', '2023-02-13', 'membuat surat keterangan bebas narkoba ', 'melamar pekerjaan\r\n', 'Positif', 'Selesai'),
(3, 7, 146, '002', '18286.jpeg', '62730.jpeg', '2023-02-12', NULL, NULL, 'membuat surat bebas narkoba', 'Calon Bintara Polri tahun 2023', 'Positif', 'Menunggu Antrian'),
(4, 8, 5, '003', '84838.jpeg', '77531.jpeg', '2023-02-12', NULL, NULL, 'membuat surat bebas narkoba', 'MCU', 'Positif', 'Menunggu Antrian'),
(5, 9, 150, '004', '3535.jpeg', '84606.JPG', '2023-02-12', NULL, NULL, 'surat bebas narkoba', 'untuk MCU', 'Positif', 'Menunggu Antrian'),
(6, 10, 2, '005', '93529.jpeg', '66252.jpeg', '2023-02-12', NULL, NULL, 'membuat surat keterangan bebas narkoba', 'mendaftar akbri 2023', 'Positif', 'Menunggu Antrian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_pegawai`
--

CREATE TABLE `pendaftaran_pegawai` (
  `id_pendaftaran_pegawai` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `nomor_antrian` varchar(5) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `foto` varchar(150) DEFAULT NULL,
  `tgl_pendaftaran` date DEFAULT NULL,
  `tgl_buat` date DEFAULT NULL,
  `tgl_ambil` date DEFAULT NULL,
  `ket` text,
  `perihal` text,
  `hasil_tes` varchar(20) DEFAULT NULL,
  `status_pendaftaran` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran_pegawai`
--

INSERT INTO `pendaftaran_pegawai` (`id_pendaftaran_pegawai`, `id_perusahaan`, `id_pegawai`, `nomor_antrian`, `ktp`, `foto`, `tgl_pendaftaran`, `tgl_buat`, `tgl_ambil`, `ket`, `perihal`, `hasil_tes`, `status_pendaftaran`) VALUES
(7, 11, 12, '001', '35359.jpeg', '42015.jpeg', '2023-07-28', '2023-07-28', '2023-07-28', '-', '-', 'Negatif', 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama_perusahaan` varchar(255) DEFAULT NULL,
  `nama_pimpinan` varchar(150) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `jenis` varchar(11) DEFAULT NULL,
  `alamat` text,
  `bidang` varchar(150) DEFAULT NULL,
  `no_wa` varchar(25) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `id_user`, `nama_perusahaan`, `nama_pimpinan`, `email`, `jenis`, `alamat`, `bidang`, `no_wa`, `status`) VALUES
(11, 9, 'Lintas Arta', 'Sugeng Raharja, S.T., M.Eng', 'office@lintasarta.id', 'PT', 'Jakarta, Sub div Banjarmasin', 'Telekomunikasi', '021562737288', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
(4, 'adit', '486b6c6b267bc61677367eb6b6458764', 'Masyarakat'),
(5, 'yazid', 'ad097d2585bc7c62fd1ed53083637aaa', 'Masyarakat'),
(6, 'rio', 'd5ed38fdbf28bc4e58be142cf5a17cf5', 'Masyarakat'),
(7, 'vidia', '79aab6b4c6a16420f3cf787e06ead856', 'Masyarakat'),
(8, 'hafi', 'f85f10fdcd7d8c36f39b5497ac152d89', 'Masyarakat'),
(9, 'lintasarta', '827ccb0eea8a706c4c34a16891f84e7b', 'Perusahaan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indeks untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`id_masyarakat`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_user` (`id_perusahaan`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_pelanggan` (`id_masyarakat`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indeks untuk tabel `pendaftaran_pegawai`
--
ALTER TABLE `pendaftaran_pegawai`
  ADD PRIMARY KEY (`id_pendaftaran_pegawai`),
  ADD KEY `id_pelanggan` (`id_pegawai`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id_masyarakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran_pegawai`
--
ALTER TABLE `pendaftaran_pegawai`
  MODIFY `id_pendaftaran_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
