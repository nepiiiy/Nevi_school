-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Sep 2023 pada 20.05
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `mapel` varchar(255) NOT NULL,
  `prod_nonprod` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama_guru`, `mapel`, `prod_nonprod`) VALUES
(1, 'Fikrotu Dwi Fuadatuzzahro, S.pd', 'Pemrograman Web dan Perangkat Bergerak', 'Produktif'),
(2, 'Ivans Zuwanta, S.Kom', 'Basis Data', 'Produktif'),
(3, 'Estri Handayani, S.pd', 'Pemrograman Berorientasi Objek', 'Produktif'),
(4, 'Dini Zakiyatul, S.pd', 'Matematika', 'Non-Produktif'),
(20, 'Saipul, S.Kom', 'Pemrograman Berorientasi Objek', 'Produktif'),
(22, 'Cilo, S.pd', 'Basis Data', 'Produktif'),
(23, 'Fajarr, S.pd', 'Pemrograman Web dan Perangkat Bergerak', 'Produktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nis` int(6) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `komli` varchar(255) NOT NULL,
  `alamat` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama_siswa`, `jenis_kelamin`, `komli`, `alamat`) VALUES
(1, 6606, 'Nevi Yuniawati', 'Perempuan', 'RPL', 'Buluagung, Karangan'),
(2, 6607, 'Cila', 'Perempuan', 'Produktif', 'Buluagung, Karangan'),
(3, 6608, 'Cilo', 'Perempuan', 'DPIB', 'Buluagung, Karangan'),
(4, 6609, 'Kharisma Hidayah', 'Perempuan', 'Produktif', 'Surodakan, Trenggalek');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
