-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 10 Jan 2023 pada 23.09
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
  `nama_kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
(5, 'Banjarmasin Tengah'),
(6, 'Banjarmasin Utara'),
(7, 'Banjarmasin Selatan'),
(11, 'Banjarmasin Timur');

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
(1, 4, 'vidia', '637123993299910', 'vidia@gmail.com', 'Perempuan', 'Kandangan', 'Sudah Bekerja', '089579238888', 'Aktif'),
(2, 5, 'udin', '637123993299910', 'udin@gmail.com', 'Laki - Laki', '123', 'Sudah Bekerja', '123', 'Aktif');

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
(2, 1, 5, '001', '67290.png', '23512.png', '2022-12-07', '2022-12-07', '2022-12-08', '123', '123', 'Positif', 'Selesai'),
(3, 2, 6, '002', '37580.png', '57413.png', '2022-12-07', '2022-12-07', '2022-12-08', '123', '123', 'Positif', 'Selesai');

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
(4, 'vidia', '79aab6b4c6a16420f3cf787e06ead856', 'Masyarakat'),
(5, 'udin', '6bec9c852847242e384a4d5ac0962ba0', 'Masyarakat');

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
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_pelanggan` (`id_masyarakat`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

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
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id_masyarakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD CONSTRAINT `masyarakat_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
